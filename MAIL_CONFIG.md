# Настройка почты для формы обратной связи

Добавьте следующие настройки в файл `.env`:

```
MAIL_MAILER=smtp
MAIL_HOST=mail.xinji-tech.com
MAIL_PORT=587
MAIL_USERNAME=forma@xinji-tech.com
MAIL_PASSWORD=yQxGdjLL8enMtixT
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=forma@xinji-tech.com
MAIL_FROM_NAME="${APP_NAME}"
```

После добавления настроек выполните:
```bash
php artisan config:clear
```

Форма будет отправлять письма на адрес: info@xinji-tech.com

