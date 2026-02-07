# Устранение проблем с отправкой почты

## Проверка настроек

Убедитесь, что в файле `.env` есть следующие настройки:

```env
MAIL_MAILER=smtp
MAIL_HOST=mail.xinji-tech.com
MAIL_PORT=587
MAIL_USERNAME=forma@xinji-tech.com
MAIL_PASSWORD=yQxGdjLL8enMtixT
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=forma@xinji-tech.com
MAIL_FROM_NAME="Xinji"
```

## После изменения .env файла

Выполните следующие команды:

```bash
php artisan config:clear
php artisan cache:clear
```

## Тестирование отправки почты

### Вариант 1: Использование log драйвера (для тестирования)

Если SMTP не работает, можно временно использовать log драйвер для тестирования:

```env
MAIL_MAILER=log
```

Письма будут сохраняться в `storage/logs/laravel.log` вместо отправки.

### Вариант 2: Проверка SMTP подключения

Проверьте логи Laravel после попытки отправки:

```bash
tail -f storage/logs/laravel.log
```

Или в Windows PowerShell:
```powershell
Get-Content storage\logs\laravel.log -Tail 50 -Wait
```

## Возможные проблемы

1. **Неправильные учетные данные** - проверьте логин и пароль
2. **Блокировка файрволом** - убедитесь, что порт 587 открыт
3. **Неправильный хост** - проверьте адрес SMTP сервера
4. **SSL/TLS проблемы** - попробуйте изменить `MAIL_ENCRYPTION` на `ssl` или `tls`

## Проверка конфигурации

Выполните команду для проверки текущих настроек:

```bash
php artisan tinker
```

Затем в консоли:
```php
config('mail.mailers.smtp')
config('mail.from')
```

