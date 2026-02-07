<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Mail\MailManager;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mailer\Transport\Smtp\Stream\SocketStream;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Настройка SMTP для игнорирования ошибок SSL сертификата
        $this->app->resolving(MailManager::class, function ($mailManager) {
            $mailManager->extend('smtp', function (array $config) {
                $stream = new SocketStream();
                $stream->setHost($config['host']);
                $stream->setPort($config['port']);
                
                // Для STARTTLS (порт 587) отключаем TLS на сокете
                // Это позволяет установить обычное соединение, а затем включить TLS через STARTTLS
                if ($config['encryption'] === 'tls' && $config['port'] == 587) {
                    $stream->disableTls();
                }
                
                // Настройка SSL контекста для игнорирования ошибок сертификата
                // Эти опции будут использованы после STARTTLS команды
                $stream->setStreamOptions([
                    'ssl' => [
                        'allow_self_signed' => true,
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                    ],
                ]);

                // Правильный порядок параметров: host, port, tls, dispatcher, logger, stream
                // Для порта 587 используем TLS (STARTTLS), а не прямое SSL соединение
                $useTls = ($config['encryption'] === 'tls' || $config['encryption'] === 'ssl');
                
                $transport = new EsmtpTransport(
                    $config['host'],
                    $config['port'],
                    $useTls,
                    null, // dispatcher
                    null, // logger
                    $stream // stream
                );
                
                if (isset($config['username'])) {
                    $transport->setUsername($config['username']);
                }

                if (isset($config['password'])) {
                    $transport->setPassword($config['password']);
                }

                return $transport;
            });
        });
    }
}

