# Промпт для переделки сайта Xinji в стиле Linear/Vercel

```
Переработай дизайн моего сайта Xinji (Laravel 11, Tailwind CSS, daisyUI) в строгом монохромном стиле 'Linear' или 'Vercel' с минималистичным подходом.

## Цветовая палитра:
- Фон: #FAFAFA (Canvas)
- Основной текст: #0A0A0A (Obsidian)
- Второстепенный текст: #737373
- Границы: #E5E5E5
- Акцентный цвет (зеленый): использовать минимально, только для важных элементов (#22c55e с opacity 0.6-0.8)

## Типографика:
- Основной шрифт: Inter (system font stack: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif)
- Альтернативный: Plus Jakarta Sans для заголовков
- Заголовки: tracking-tight (letter-spacing: -0.025em), leading-[0.95] (line-height: 0.95)
- Жирность: на уровень ниже стандартной (font-medium вместо font-bold, font-light вместо font-normal)
- Размеры заголовков: уменьшить на 20-30% от текущих

## Компоненты:

### Навигация (Header):
- Фиксированный header с backdrop-blur-md
- Фон: rgba(250, 250, 250, 0.8) с border-b border-[#E5E5E5]
- Тонкие линии под активными пунктами меню
- Логотип XINJI: font-medium, tracking-tight

### Hero-секция:
- Убрать темный градиент, использовать светлый фон #FAFAFA
- Убрать анимированные пульсирующие элементы
- Заголовок: font-medium вместо font-light, tracking-tight, leading-[0.95]
- SVG иллюстрация: тонкие линии (stroke-width: 1.5px), цвет #0A0A0A с opacity 0.3-0.5

### Кнопки:
- Легкий эффект 'shimmer' или четкие границы без теней
- border: 1px solid #E5E5E5
- hover: легкая тень (shadow-sm) или изменение border-color
- padding: px-6 py-2.5
- font-medium, tracking-tight

### Карточки (Bento Grid стиль):
- Тонкие границы: border border-[#E5E5E5]
- Фон: #FAFAFA или белый
- hover-эффект: легкая тень (shadow-sm), border-color изменение
- padding: p-6
- Скругления: rounded-lg или rounded-xl (минимальные)

### Галерея продуктов:
- Bento Grid layout с тонкими границами
- Изображения: SVG с тонкими линиями (stroke-width: 1.5px)
- Hover: легкое увеличение масштаба (scale-105) с transition
- Текст под карточками: font-light, text-[#737373], tracking-tight

### Секции:
- Вертикальные линии для разделения: border-l border-[#E5E5E5] для боковых элементов
- Большие отступы между секциями: py-24 md:py-32
- Контейнер: max-w-7xl mx-auto px-6 lg:px-8

### Иконки:
- Использовать SVG иконки в стиле Solar Linear
- stroke-width: 1.5px
- Цвет: #0A0A0A с opacity 0.6-0.8

### Footer:
- Фон: #FAFAFA
- Текст: #737373
- Граница сверху: border-t border-[#E5E5E5]
- Минималистичный дизайн

## Детали:
- Убрать все градиенты, использовать плоские цвета
- Убрать анимации pulse, использовать только плавные transitions
- Добавить backdrop-blur для навигации
- SVG-анимации для иллюстраций (если нужны) - тонкие линии, минималистичные
- Вертикальные линии для разделения секций где уместно
- Все тени: shadow-sm или shadow-none
- Скругления: минимальные (rounded-lg, rounded-xl)

## Адаптивность:
- Мобильное меню: стеклянный эффект с backdrop-blur
- Все секции должны быть адаптивными
- Отступы уменьшаются на мобильных: py-12 md:py-24

## Применить ко всем страницам:
- Main (главная)
- About Us
- News
- Contacts

Сохрани цветовую схему зеленый/черный/белый, но используй зеленый минимально и с пониженной opacity.
```

