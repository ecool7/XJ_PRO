# Инструкция по развертыванию на Cloudways

## Шаги для успешного развертывания:

1. **Убедитесь, что все файлы загружены на сервер**

2. **Установите зависимости Composer:**
   ```bash
   composer install --optimize-autoloader --no-dev
   ```

3. **Настройте файл .env:**
   - Скопируйте `.env.example` в `.env` (если еще не сделано)
   - Настройте все необходимые переменные окружения
   - Убедитесь, что `APP_ENV=production` и `APP_DEBUG=false`

4. **Сгенерируйте ключ приложения:**
   ```bash
   php artisan key:generate
   ```

5. **Очистите и кэшируйте конфигурацию:**
   ```bash
   php artisan config:clear
   php artisan cache:clear
   php artisan view:clear
   php artisan route:clear
   
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

6. **Убедитесь, что права доступа установлены правильно:**
   ```bash
   chmod -R 755 storage
   chmod -R 755 bootstrap/cache
   ```

7. **Если используете Vite для ассетов (опционально):**
   ```bash
   npm install
   npm run build
   ```

## Важные замечания:

- Проект использует Tailwind CSS через CDN, поэтому компиляция ассетов не обязательна
- Убедитесь, что PHP версия 8.1 или выше
- Проверьте, что все расширения PHP установлены (mbstring, openssl, pdo, и т.д.)

## Решение проблем:

Если возникают ошибки с представлениями (views):
- Проверьте права доступа к папке `storage/framework/views`
- Выполните `php artisan view:clear`
- Убедитесь, что `config/view.php` существует и правильно настроен

Если возникают ошибки с Vite:
- Проект настроен так, что Vite используется только в локальной среде
- В production режиме Vite не требуется, так как Tailwind подключен через CDN

