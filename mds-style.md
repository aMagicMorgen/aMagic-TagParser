**Полная шпаргалка** по всем сокращенным классам из файла mds-style.jz. Разбита по категориям для удобства поиска.

---

# 📘 MDS Master — Полная шпаргалка по сокращенным классам Bulma

> **Как читать:** `MDS класс` → `Что заменяет` — `Описание`

---

## 🔧 1. ОБНУЛЕНИЕ ОТСТУПОВ

| MDS класс | Bulma классы | Описание |
|-----------|--------------|----------|
| `.full` | `p-0` | Убирает все отступы (padding) везде |
| `.full-mobile` | `p-0-mobile` | Убирает отступы только на мобильных устройствах |
| `.full-tablet` | `p-0-tablet` | Убирает отступы только на планшетах |
| `.radius0` | `is-radiusless` | Без скругления углов везде |
| `.radius0-mobile` | `is-radiusless-mobile` | Без скругления только на мобильных |

---

## 📦 2. АДАПТИВНЫЕ БЛОКИ (СЕМАНТИЧЕСКИЕ)

| MDS класс | Bulma классы (моб → планшет → десктоп) | Описание |
|-----------|----------------------------------------|----------|
| `.block-pxy` | `block px-3 py-2` + моб `px-4 py-3` + планшет `px-5 py-4` | Универсальный блок с адаптивными внутренними отступами |
| `.block-mbmt` | `mb-2 mt-2` + моб `mb-3 mt-3` + планшет `mb-4 mt-4` | Блок с адаптивными отступами сверху и снизу |
| `.section-pxy` | `px-4 py-3` + моб `px-5 py-4` + планшет `px-6 py-5` | Секция с адаптивными паддингами |
| `.section-sm` | `px-4 py-4` + моб `px-6 py-5` + планшет `py-6` | Маленькая секция |
| `.section-md` | `px-6 py-6` + моб `px-8 py-7` + планшет `py-8` | Средняя секция |
| `.section-lg` | `px-8 py-8` + моб `px-10 py-10` + планшет `py-12` | Большая секция |

---

## 📝 3. ЭЛЕМЕНТЫ ФОРМ

| MDS класс | Bulma классы | Описание |
|-----------|--------------|----------|
| `.input-pxy` | `input px-3 py-2` + моб `px-4 py-3` + планшет `px-5 py-4` + `mb-4` | Поле ввода с адаптивными отступами |
| `.label-mb` | `label mb-2` + моб `mb-3` + планшет `mb-4` | Подпись с отступом снизу |
| `.form-group` | `field mb-4` + моб `mb-5` + планшет `mb-6` | Группа формы с отступом снизу |

---

## 🔘 4. КНОПКИ

| MDS класс | Bulma классы | Описание |
|-----------|--------------|----------|
| `.btn-pxy` | `button px-4 py-2` + моб `px-6 py-3` + планшет `px-8 py-4` | Кнопка среднего размера |
| `.btn-pxy-sm` | `button px-3 py-1` + моб `px-4 py-2` + планшет `px-5 py-3` | Маленькая кнопка |
| `.btn-pxy-lg` | `button px-5 py-3` + моб `px-7 py-4` + планшет `px-9 py-5` | Большая кнопка |

---

## 🪟 5. МОДАЛЬНЫЕ ОКНА

| MDS класс | Bulma классы | Описание |
|-----------|--------------|----------|
| `.modal-card-pxy` | `modal-card px-4 py-3` + моб `px-5 py-4` + планшет `px-6 py-5` | Карточка модального окна с отступами |

---

## 📌 6. ШАПКА И ПОДВАЛ

| MDS класс | Bulma классы | Описание |
|-----------|--------------|----------|
| `.header-md` | `header px-5 py-4` + моб `px-7 py-5` + планшет `px-9 py-6` + `mb-5` | Шапка среднего размера |
| `.footer-md` | `footer px-5 py-6` + моб `px-7 py-8` + планшет `px-9 py-10` + `mt-6` | Подвал среднего размера |

---

## 🦸 7. ГЕРОЙ-СЕКЦИИ

| MDS класс | Bulma классы | Описание |
|-----------|--------------|----------|
| `.hero-pxy` | `hero px-4 py-6` + моб `px-5 py-8` + планшет `px-6 py-10` | Герой-секция с отступами |
| `.herob-pxy` | `hero-body px-3 py-4` + моб `px-4 py-5` + планшет `px-5 py-6` | Тело герой-секции |

---

## 🖼️ 8. МЕДИА-ОБЪЕКТЫ

| MDS класс | Bulma классы | Описание |
|-----------|--------------|----------|
| `.media-pxy` | `media px-3 py-2` + моб `px-4 py-3` + планшет `px-5 py-4` + `mb-3` | Медиа-объект с отступами |

---

## 🔔 9. УВЕДОМЛЕНИЯ И СООБЩЕНИЯ

| MDS класс | Bulma классы | Описание |
|-----------|--------------|----------|
| `.notifi-pxy` | `notification px-4 py-3` + моб `px-5 py-4` + планшет `px-6 py-5` + `mb-4` | Уведомление с отступами |
| `.message-pxy` | `message px-4 py-2` + моб `px-5 py-3` + планшет `px-6 py-4` + `mb-4` | Сообщение с отступами |

---

## 📑 10. ТАБЫ И МЕНЮ

| MDS класс | Bulma классы | Описание |
|-----------|--------------|----------|
| `.tabs-pxy` | `tabs px-3 py-2` + моб `px-4 py-3` + планшет `px-5 py-4` + `mb-4` | Вкладки с отступами |
| `.menu-pxy` | `menu px-2 py-2` + моб `px-3 py-3` + планшет `px-4 py-4` + `mb-4` | Меню с отступами |

---

## 🏗️ 11. SECTION (СТАНДАРТНЫЕ)

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.section1` | `section is-medium` | Секция среднего размера |
| `.section2` | `section is-large` | Секция большого размера |
| `.section3` | `section is-fullheight` | Секция на полную высоту экрана |

---

## 🦸 12. HERO (СТАНДАРТНЫЕ)

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.hero0` | `hero` | Обычный герой |
| `.hero1` | `hero is-normal` | Нормальный герой |
| `.hero2` | `hero is-small` | Маленький герой |
| `.hero3` | `hero is-medium` | Средний герой |
| `.hero4` | `hero is-large` | Большой герой |
| `.hero5` | `hero is-halfheight` | Половина высоты экрана |
| `.hero6` | `hero is-fullwidth` | Полная ширина |
| `.heroh` | `hero-head` | Верхняя часть героя |
| `.herob` | `hero-body` | Тело героя |
| `.herof` | `hero-foot` | Нижняя часть героя |
| `.hero-bold` | `hero is-bold` | Герой с жирным градиентом |

---

## 📦 13. CONTAINER

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.container0` | `container` | Обычный контейнер |
| `.container1` | `container is-widescreen` | Широкоэкранный контейнер |
| `.container2` | `container is-fullhd` | Полный HD |
| `.container3` | `container is-max-tablet` | Максимум планшет |
| `.container4` | `container is-max-desktop` | Максимум десктоп |
| `.container5` | `container is-max-widescreen` | Максимум широкий |
| `.container6` | `container is-fluid` | Жидкий (на всю ширину) |

---

## 🖼️ 14. ИЗОБРАЖЕНИЯ

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.img` | `image` | Контейнер изображения |
| `.img16` | `image is-16x16` | 16x16 пикселей |
| `.img24` | `image is-24x24` | 24x24 пикселя |
| `.img32` | `image is-32x32` | 32x32 пикселя |
| `.img48` | `image is-48x48` | 48x48 пикселей |
| `.img64` | `image is-64x64` | 64x64 пикселя |
| `.img96` | `image is-96x96` | 96x96 пикселей |
| `.img128` | `image is-128x128` | 128x128 пикселей |
| `.img-sq` | `image is-square` | Квадратное изображение |
| `.img1x1` | `image is-1by1` | Соотношение 1:1 |
| `.img4x3` | `image is-4by3` | Соотношение 4:3 |
| `.img3x2` | `image is-3by2` | Соотношение 3:2 |
| `.img16x9` | `image is-16by9` | Соотношение 16:9 |
| `.img2x1` | `image is-2by1` | Соотношение 2:1 |
| `.img-round` | `image is-rounded` | Скругленное изображение |
| `.img-circle` | `image is-circle` | Круглое изображение |
| `.img-square` | `image is-square` | Квадратное |

---

## 📊 15. LEVEL (ГОРИЗОНТАЛЬНОЕ ВЫРАВНИВАНИЕ)

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.l` | `level` | Контейнер уровня |
| `.ll` | `level-left` | Левая часть |
| `.lr` | `level-right` | Правая часть |
| `.li` | `level-item` | Элемент уровня |

---

## 📐 16. КОЛОНКИ (COLUMNS)

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.cols` | `columns` | Контейнер колонок |
| `.colsm` | `columns is-multiline` | Многострочные колонки |
| `.colsc` | `columns is-centered` | Центрированные колонки |
| `.colsvc` | `columns is-vcentered` | Вертикально центрированные |
| `.colsgap` | `columns is-gapless` | Без промежутков |

---

## 📏 17. РАЗМЕРЫ КОЛОНОК

| MDS класс | Bulma класс | Ширина |
|-----------|-------------|--------|
| `.col` | `column` | Авто (оставшееся место) |
| `.col0` | `column is-full` | 100% |
| `.col1` | `column is-1` | 1/12 (8.33%) |
| `.col2` | `column is-2` | 2/12 (16.67%) |
| `.col3` | `column is-3` | 3/12 (25%) |
| `.col4` | `column is-4` | 4/12 (33.33%) |
| `.col5` | `column is-5` | 5/12 (41.67%) |
| `.col6` | `column is-6` | 6/12 (50%) |
| `.col7` | `column is-7` | 7/12 (58.33%) |
| `.col8` | `column is-8` | 8/12 (66.67%) |
| `.col9` | `column is-9` | 9/12 (75%) |
| `.col10` | `column is-10` | 10/12 (83.33%) |
| `.col11` | `column is-11` | 11/12 (91.67%) |

### Дробные размеры колонок

| MDS класс | Bulma класс | Ширина |
|-----------|-------------|--------|
| `.col12` | `column is-half` | 1/2 (50%) |
| `.col13` | `column is-one-third` | 1/3 (33.33%) |
| `.col23` | `column is-two-thirds` | 2/3 (66.67%) |
| `.col14` | `column is-one-quarter` | 1/4 (25%) |
| `.col34` | `column is-three-quarters` | 3/4 (75%) |
| `.col15` | `column is-one-fifth` | 1/5 (20%) |
| `.col25` | `column is-two-fifths` | 2/5 (40%) |
| `.col35` | `column is-three-fifths` | 3/5 (60%) |
| `.col45` | `column is-four-fifths` | 4/5 (80%) |

### Адаптивные колонки

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.col-m` | `is-mobile is-tablet` | Мобильные и планшеты |
| `.col-t` | `is-tablet` | Планшеты и выше |
| `.col-d` | `is-desktop` | Десктопы |
| `.col-w` | `is-widescreen` | Широкие экраны |
| `.col-f` | `is-fullhd` | Full HD |

---

## ↔️ 18. СДВИГ КОЛОНОК (OFFSET)

| MDS класс | Bulma класс | Отступ |
|-----------|-------------|--------|
| `.offset1` | `is-offset-1` | 1 колонка |
| `.offset2` | `is-offset-2` | 2 колонки |
| `.offset3` | `is-offset-3` | 3 колонки |
| `.offset4` | `is-offset-4` | 4 колонки |
| `.offset5` | `is-offset-5` | 5 колонок |
| `.offset6` | `is-offset-6` | 6 колонок |
| `.offset7` | `is-offset-7` | 7 колонок |
| `.offset8` | `is-offset-8` | 8 колонок |
| `.offset9` | `is-offset-9` | 9 колонок |
| `.offset10` | `is-offset-10` | 10 колонок |
| `.offset11` | `is-offset-11` | 11 колонок |
| `.offset12` | `is-offset-half` | 1/2 |
| `.offset13` | `is-offset-one-third` | 1/3 |
| `.offset23` | `is-offset-two-thirds` | 2/3 |
| `.offset14` | `is-offset-one-quarter` | 1/4 |
| `.offset34` | `is-offset-three-quarters` | 3/4 |
| `.offset15` | `is-offset-one-fifth` | 1/5 |
| `.offset25` | `is-offset-two-fifths` | 2/5 |
| `.offset35` | `is-offset-three-fifths` | 3/5 |
| `.offset45` | `is-offset-four-fifths` | 4/5 |

---

## 🧭 19. НАВИГАЦИЯ (NAVBAR)

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.nav` | `navbar` | Навбар |
| `.nav-brand` | `navbar-brand` | Бренд навбара |
| `.nav-start` | `navbar-start` | Левая часть меню |
| `.nav-end` | `navbar-end` | Правая часть меню |
| `.nav-menu` | `navbar-menu` | Меню навбара |
| `.navi` | `navbar-item` | Элемент навбара |
| `.nav-link` | `navbar-link` | Ссылка с выпадайкой |
| `.nav-drop` | `navbar-dropdown` | Выпадающее меню |
| `.nav-divider` | `navbar-divider` | Разделитель |
| `.fix` | `is-fixed-top` | Фиксирован сверху |
| `.fix-btn` | `is-fixed-bottom` | Фиксирован снизу |
| `.transp` | `is-transparent` | Прозрачный |
| `.spac` | `is-spaced` | Разреженный |

---

## 🔘 20. КНОПКИ (BUTTONS)

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.btns` | `buttons` | Контейнер кнопок |
| `.btnssm` | `buttons are-small` | Маленькие кнопки |
| `.btnsmd` | `buttons are-medium` | Средние кнопки |
| `.btnslg` | `buttons are-large` | Большие кнопки |
| `.btnsc` | `buttons is-centered` | Центрированные |
| `.btnsr` | `buttons is-right` | Прижатые вправо |
| `.btnsadd` | `buttons has-addons` | Сцепленные кнопки |
| `.btn` | `button` | Кнопка |
| `.btnstatic` | `button is-static` | Статичная (неактивная) |
| `.btntext` | `button is-text` | Текстовая кнопка |
| `.btnghost` | `button is-ghost` | Прозрачная кнопка |
| `.btnload` | `button is-loading` | Кнопка загрузки |

---

## 🎨 21. ЦВЕТА (BASIC)

| MDS класс | Bulma класс | Цвет |
|-----------|-------------|------|
| `.clr0` | `is-white` | Белый |
| `.clr1` | `is-link` | Ссылочный (синий) |
| `.clr2` | `is-primary` | Основной (бирюзовый) |
| `.clr3` | `is-info` | Информационный (голубой) |
| `.clr4` | `is-success` | Успех (зеленый) |
| `.clr5` | `is-warning` | Предупреждение (желтый) |
| `.clr6` | `is-danger` | Опасность (красный) |
| `.clr7` | `is-dark` | Темный |
| `.clr8` | `is-light` | Светлый |
| `.clr9` | `is-black` | Черный |

### Светлые оттенки (light)

| MDS класс | Bulma класс |
|-----------|-------------|
| `.clr1l` | `is-link is-light` |
| `.clr2l` | `is-primary is-light` |
| `.clr3l` | `is-info is-light` |
| `.clr4l` | `is-success is-light` |
| `.clr5l` | `is-warning is-light` |
| `.clr6l` | `is-danger is-light` |
| `.clr7l` | `is-dark is-light` |
| `.clr8l` | `is-light is-light` |
| `.clr9l` | `is-black is-light` |

### Темные оттенки (dark)

| MDS класс | Bulma класс |
|-----------|-------------|
| `.clr1d` | `is-link is-dark` |
| `.clr2d` | `is-primary is-dark` |
| `.clr3d` | `is-info is-dark` |
| `.clr4d` | `is-success is-dark` |
| `.clr5d` | `is-warning is-dark` |
| `.clr6d` | `is-danger is-dark` |
| `.clr7d` | `is-dark is-dark` |
| `.clr8d` | `is-light is-dark` |
| `.clr9d` | `is-black is-dark` |

---

## 🎨 22. МОДИФИКАТОРЫ ЦВЕТОВ

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.light` | `is-light` | Светлая версия |
| `.dark` | `is-dark` | Темная версия |
| `.line` | `is-outlined` | Только обводка |
| `.invert` | `is-inverted` | Инвертированный |
| `.round` | `is-rounded` | Скругленный |
| `.focus` | `is-focused` | В фокусе |
| `.active` | `is-active` | Активный |
| `.hover` | `is-hovered` | При наведении |

---

## 📏 23. РАЗМЕРЫ

| MDS класс | Bulma класс | Размер |
|-----------|-------------|--------|
| `.sz0` | `is-normal` | Нормальный |
| `.sz1` | `is-small` | Маленький |
| `.sz2` | `is-medium` | Средний |
| `.sz3` | `is-large` | Большой |
| `.sz4` | `is-halfheight` | Половина высоты |
| `.sz5` | `is-fullwidth` | Полная ширина |
| `.sz6` | `is-fullheight` | Полная высота |

---

## 📝 24. ТЕКСТ — ЗАГОЛОВКИ

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.t` | `title` | Заголовок |
| `.ts` | `title is-spaced` | Разреженный заголовок |
| `.t-s` | `subtitle` | Подзаголовок |
| `.t-ss` | `subtitle is-spaced` | Разреженный подзаголовок |

### Размеры заголовков

| MDS класс | Bulma класс |
|-----------|-------------|
| `.tsz1` | `title is-size-1` |
| `.tssz1` | `title is-spaced is-size-1` |
| `.tsz2` | `title is-size-2` |
| `.tssz2` | `title is-spaced is-size-2` |
| `.tsz3` | `title is-size-3` |
| `.tssz3` | `title is-spaced is-size-3` |
| `.tsz4` | `title is-size-4` |
| `.tssz4` | `title is-spaced is-size-4` |
| `.tsz5` | `title is-size-5` |
| `.tssz5` | `title is-spaced is-size-5` |
| `.tsz6` | `title is-size-6` |
| `.tssz6` | `title is-spaced is-size-6` |

### Размеры подзаголовков

| MDS класс | Bulma класс |
|-----------|-------------|
| `.t-sz1` | `subtitle is-size-1` |
| `.t-ssz1` | `subtitle is-spaced is-size-1` |
| `.t-z2` | `subtitle is-size-2` |
| `.t-ssz2` | `subtitle is-spaced is-size-2` |
| `.t-sz3` | `subtitle is-size-3` |
| `.t-ssz3` | `subtitle is-spaced is-size-3` |
| `.t-sz4` | `subtitle is-size-4` |
| `.t-ssz4` | `subtitle is-spaced is-size-4` |
| `.t-sz5` | `subtitle is-size-5` |
| `.t-ssz5` | `subtitle is-spaced is-size-5` |
| `.t-sz6` | `subtitle is-size-6` |
| `.t-ssz6` | `subtitle is-spaced is-size-6` |

---

## 📝 25. ТЕКСТ — РАЗМЕРЫ И ТОЛЩИНА

### Размеры текста

| MDS класс | Bulma класс | Размер |
|-----------|-------------|--------|
| `.t-sz1` | `is-size-1` | 3rem |
| `.t-sz2` | `is-size-2` | 2.5rem |
| `.t-sz3` | `is-size-3` | 2rem |
| `.t-sz4` | `is-size-4` | 1.5rem |
| `.t-sz5` | `is-size-5` | 1.25rem |
| `.t-sz6` | `is-size-6` | 1rem |

### Толщина текста

| MDS класс | Bulma класс | Толщина |
|-----------|-------------|---------|
| `.bold1` | `has-text-weight-light` | 300 (Light) |
| `.bold2` | `has-text-weight-normal` | 400 (Normal) |
| `.bold3` | `has-text-weight-medium` | 500 (Medium) |
| `.bold4` | `has-text-weight-semibold` | 600 (Semibold) |
| `.bold5` | `has-text-weight-bold` | 700 (Bold) |
| `.bold6` | `has-text-weight-extrabold` | 800 (Extrabold) |

---

## 🎨 26. ЦВЕТ ТЕКСТА

| MDS класс | Bulma класс | Цвет |
|-----------|-------------|------|
| `.t-clr0` | `has-text-white` | Белый |
| `.t-clr1` | `has-text-link` | Ссылочный |
| `.t-clr2` | `has-text-primary` | Основной |
| `.t-clr3` | `has-text-info` | Информационный |
| `.t-clr4` | `has-text-success` | Успех |
| `.t-clr5` | `has-text-warning` | Предупреждение |
| `.t-clr6` | `has-text-danger` | Опасность |
| `.t-clr7` | `has-text-dark` | Темный |
| `.t-clr8` | `has-text-light` | Светлый |
| `.t-clr9` | `has-text-black` | Черный |
| `.t-clrg` | `has-text-grey` | Серый |
| `.t-clrgl` | `has-text-grey-light` | Светло-серый |
| `.t-clrgd` | `has-text-grey-dark` | Темно-серый |

---

## 🎨 27. ФОН

| MDS класс | Bulma класс | Цвет |
|-----------|-------------|------|
| `.bg0` | `has-background-white` | Белый |
| `.bg1` | `has-background-link` | Ссылочный |
| `.bg2` | `has-background-primary` | Основной |
| `.bg3` | `has-background-info` | Информационный |
| `.bg4` | `has-background-success` | Успех |
| `.bg5` | `has-background-warning` | Предупреждение |
| `.bg6` | `has-background-danger` | Опасность |
| `.bg7` | `has-background-dark` | Темный |
| `.bg8` | `has-background-light` | Светлый |
| `.bg9` | `has-background-black` | Черный |

### Светлый фон

| MDS класс | Bulma класс |
|-----------|-------------|
| `.bg1l` | `has-background-link-light` |
| `.bg2l` | `has-background-primary-light` |
| `.bg3l` | `has-background-info-light` |
| `.bg4l` | `has-background-success-light` |
| `.bg5l` | `has-background-warning-light` |
| `.bg6l` | `has-background-danger-light` |

### Темный фон

| MDS класс | Bulma класс |
|-----------|-------------|
| `.bg1d` | `has-background-link-dark` |
| `.bg2d` | `has-background-primary-dark` |
| `.bg3d` | `has-background-info-dark` |
| `.bg4d` | `has-background-success-dark` |
| `.bg5d` | `has-background-warning-dark` |
| `.bg6d` | `has-background-danger-dark` |

---

## 📐 28. ВЫРАВНИВАНИЕ ТЕКСТА

| MDS класс | Bulma класс | Выравнивание |
|-----------|-------------|--------------|
| `.t-c` | `has-text-centered` | По центру |
| `.t-l` | `has-text-left` | По левому краю |
| `.t-r` | `has-text-right` | По правому краю |
| `.t-j` | `has-text-justified` | По ширине |

---

## 🔤 29. ТРАНСФОРМАЦИЯ ТЕКСТА

| MDS класс | Bulma класс | Эффект |
|-----------|-------------|--------|
| `.cap` | `is-capitalized` | Каждая буква заглавная |
| `.low` | `is-lowercase` | Все строчные |
| `.upp` | `is-uppercase` | Все заглавные |
| `.it` | `is-italic` | Курсив |
| `.under` | `is-underlined` | Подчеркивание |

---

## 💪 30. FLEX

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.flex` | `is-flex` | Flex-контейнер |
| `.flex-inline` | `is-inline-flex` | Inline flex |
| `.flexrow` | `is-flex-direction-row` | Ряд (горизонтально) |
| `.flexrowr` | `is-flex-direction-row-reverse` | Ряд в обратную сторону |
| `.flexcol` | `is-flex-direction-column` | Колонка (вертикально) |
| `.flexcolr` | `is-flex-direction-column-reverse` | Колонка в обратную сторону |
| `.flexwrapw` | `is-flex-wrap-wrap` | Перенос строк |
| `.flexnowrap` | `is-flex-nowrap` | Без переноса |
| `.justistart` | `is-justify-content-flex-start` | Выравнивание по началу |
| `.justic` | `is-justify-content-center` | Выравнивание по центру |
| `.justiend` | `is-justify-content-flex-end` | Выравнивание по концу |
| `.justibetween` | `is-justify-content-space-between` | Равномерное распределение |
| `.justiaround` | `is-justify-content-space-around` | С отступами по краям |
| `.alignstart` | `is-align-items-flex-start` | По верхнему краю |
| `.alignc` | `is-align-items-center` | По центру вертикали |
| `.alignend` | `is-align-items-flex-end` | По нижнему краю |
| `.alignstretch` | `is-align-items-stretch` | Растянуть |

---

## 🃏 31. КАРТОЧКИ (CARD)

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.card1` | `card is-primary` | Карточка основного цвета |
| `.card2` | `card is-primary` | Карточка основного цвета |
| `.card3` | `card is-info` | Карточка информации |
| `.card4` | `card is-success` | Карточка успеха |
| `.card5` | `card is-warning` | Карточка предупреждения |
| `.card6` | `card is-danger` | Карточка опасности |
| `.card-head` | `card-header` | Шапка карточки |
| `.card-htitle` | `card-header-title` | Заголовок шапки |
| `.card-hicon` | `card-header-icon` | Иконка шапки |
| `.card-img` | `card-image` | Изображение карточки |
| `.card-cont` | `card-content` | Контент карточки |
| `.card-f` | `card-footer` | Подвал карточки |
| `.card-fitem` | `card-footer-item` | Элемент подвала |

---

## 🔔 32. УВЕДОМЛЕНИЯ

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.notifi` | `notification` | Уведомление |

---

## 💬 33. СООБЩЕНИЯ (MESSAGE)

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.messageh` | `message-header` | Заголовок сообщения |
| `.messageb` | `message-body` | Тело сообщения |

---

## 📋 34. ПАНЕЛИ (PANEL)

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.panelh` | `panel-heading` | Заголовок панели |
| `.panelt` | `panel-tabs` | Вкладки панели |
| `.panelb` | `panel-block` | Блок панели |
| `.paneli` | `panel-icon` | Иконка панели |

---

## 🏷️ 35. ТЭГИ (TAGS)

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.tagsaddons` | `tags has-addons` | Сцепленные теги |
| `.tagsc` | `tags is-centered` | Центрированные теги |
| `.tagsr` | `tags is-right` | Прижатые вправо |
| `.taground` | `tag is-rounded` | Скругленный тег |
| `.tagdel` | `tag is-delete` | Кнопка удаления |

---

## 📊 36. ПРОГРЕСС

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.progress` | `progress` | Прогресс-бар |
| `.progress-small` | `progress is-small` | Маленький |
| `.progress-medium` | `progress is-medium` | Средний |
| `.progress-large` | `progress is-large` | Большой |

---

## 📄 37. ПАГИНАЦИЯ

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.pagination` | `pagination` | Пагинация |
| `.pagination-previous` | `pagination-previous` | Кнопка "Назад" |
| `.pagination-next` | `pagination-next` | Кнопка "Вперед" |
| `.pagination-link` | `pagination-link` | Ссылка страницы |
| `.pagination-ellipsis` | `pagination-ellipsis` | Многоточие |
| `.pagination-list` | `pagination-list` | Список страниц |
| `.pag-centered` | `pagination is-centered` | По центру |
| `.pag-right` | `pagination is-right` | Прижата вправо |
| `.pag-rounded` | `pagination is-rounded` | Скругленная |

---

## 🍞 38. ХЛЕБНЫЕ КРОШКИ (BREADCRUMB)

| MDS класс | Bulma класс | Разделитель |
|-----------|-------------|-------------|
| `.bc` | `breadcrumb` | Стандартный (/) |
| `.bcarrow` | `breadcrumb has-arrow-separator` | Стрелка (→) |
| `.bcbul` | `breadcrumb has-bullet-separator` | Точка (•) |
| `.bcdot` | `breadcrumb has-dot-separator` | Точка (·) |
| `.bcsuc` | `breadcrumb has-succeeds-separator` | Следующий (›) |
| `.bcc` | `breadcrumb is-centered` | По центру |
| `.bcr` | `breadcrumb is-right` | Прижата вправо |

---

## 🧩 39. ДРУГИЕ КОМПОНЕНТЫ

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.dd` | `dropdown` | Выпадающий список |
| `.dd-trig` | `dropdown-trigger` | Триггер дропдауна |
| `.dd-menu` | `dropdown-menu` | Меню дропдауна |
| `.dd-content` | `dropdown-content` | Контент дропдауна |
| `.dd-item` | `dropdown-item` | Элемент дропдауна |
| `.dd-divider` | `dropdown-divider` | Разделитель |
| `.mod` | `modal` | Модальное окно |
| `.mod-background` | `modal-background` | Фон модалки |
| `.mod-card` | `modal-card` | Карточка модалки |
| `.mod-content` | `modal-content` | Контент модалки |
| `.mod-close` | `modal-close` | Кнопка закрытия |
| `.tabsc` | `tabs is-centered` | Вкладки по центру |
| `.tabsr` | `tabs is-right` | Вкладки вправо |
| `.tabstog` | `tabs is-toggle` | Переключаемые вкладки |
| `.tabsround` | `tabs is-toggle-rounded` | Скругленные переключаемые |
| `.tabsfull` | `tabs is-fullwidth` | На всю ширину |

---

## 🔧 40. ВСПОМОГАТЕЛЬНЫЕ

| MDS класс | Bulma класс | Описание |
|-----------|-------------|----------|
| `.hidden` | `is-hidden` | Скрыт |
| `.visible` | `is-visible` | Видим |
| `.clearfix` | `is-clearfix` | Очистка потока |
| `.pull-left` | `is-pulled-left` | Влево |
| `.pull-right` | `is-pulled-right` | Вправо |
| `.overlay` | `is-overlay` | Наложение |
| `.relative` | `is-relative` | Относительное позиционирование |
| `.absolute` | `is-absolute` | Абсолютное позиционирование |
| `.marginless` | `is-marginless` | Без марджинов |
| `.paddingless` | `is-paddingless` | Без паддингов |
| `.scrollable` | `is-scrollable` | Прокручиваемый |
| `.clip` | `is-clipped` | Обрезанный |
| `.radiusless` | `is-radiusless` | Без скругления |
| `.shadowless` | `is-shadowless` | Без тени |
| `.unselectable` | `is-unselectable` | Невыделяемый |

---

## 📱 41. АДАПТИВНЫЕ ОТСТУПЫ (ПОЛЕЗНЫЕ КОМБО)

| MDS класс | Что делает |
|-----------|-------------|
| `.contentp` | Контент с адаптивными паддингами |
| `.cardp` | Карточка с паддингами |
| `.cardpmb` | Карточка + отступ снизу |
| `.sectionmb` | Секция с отступом снизу |
| `.titlemb` | Заголовок с отступом снизу |
| `.modalp` | Модалка с паддингами |
| `.formp` | Форма с паддингами |
| `.footerp` | Футер с большими паддингами |
| `.heropy` | Герой с отступами по вертикали |
| `.compact-p` | Компактные паддинги |
| `.large-p` | Большие паддинги |
| `.center-p` | Центрирование + отступы |

---

## 📊 42. СИСТЕМА УРОВНЕЙ (0-6) ДЛЯ ОТСТУПОВ

### Паддинги (padding)

| MDS класс | Bulma классы (база → моб → планшет → десктоп) |
|-----------|----------------------------------------------|
| `.p0` | `p-0` → `p-1-mobile` → `p-2-tablet` → `p-3-desktop` |
| `.p1` | `p-1` → `p-2-mobile` → `p-3-tablet` → `p-4-desktop` |
| `.p2` | `p-2` → `p-3-mobile` → `p-4-tablet` → `p-5-desktop` |
| `.p3` | `p-3` → `p-4-mobile` → `p-5-tablet` → `p-6-desktop` |
| `.p4` | `p-4` → `p-5-mobile` → `p-6-tablet` → `p-7-desktop` |
| `.p5` | `p-5` → `p-6-mobile` → `p-7-tablet` → `p-8-desktop` |
| `.p6` | `p-6` → `p-2-mobile` → `p-8-tablet` → `p-9-desktop` |

### Горизонтальные паддинги (px)

| MDS класс | Значение |
|-----------|----------|
| `.px0` | `px-0` → `px-1-mobile` → `px-2-tablet` → `px-3-desktop` |
| `.px1` | `px-1` → `px-2-mobile` → `px-3-tablet` → `px-4-desktop` |
| `.px2` | `px-2` → `px-3-mobile` → `px-4-tablet` → `px-5-desktop` |
| `.px3` | `px-3` → `px-4-mobile` → `px-5-tablet` → `px-6-desktop` |
| `.px4` | `px-4` → `px-5-mobile` → `px-6-tablet` → `px-7-desktop` |
| `.px5` | `px-5` → `px-6-mobile` → `px-7-tablet` → `px-8-desktop` |
| `.px6` | `px-6` → `px-7-mobile` → `px-8-tablet` → `px-9-desktop` |

### Вертикальные паддинги (py)

| MDS класс | Значение |
|-----------|----------|
| `.py0` | `py-0` → `py-1-mobile` → `py-2-tablet` → `py-3-desktop` |
| `.py1` | `py-1` → `py-2-mobile` → `py-3-tablet` → `py-4-desktop` |
| `.py2` | `py-2` → `py-3-mobile` → `py-4-tablet` → `py-5-desktop` |
| `.py3` | `py-3` → `py-4-mobile` → `py-5-tablet` → `py-6-desktop` |
| `.py4` | `py-4` → `py-5-mobile` → `py-6-tablet` → `py-7-desktop` |
| `.py5` | `py-5` → `py-6-mobile` → `py-7-tablet` → `py-8-desktop` |
| `.py6` | `py-6` → `py-7-mobile` → `py-8-tablet` → `py-9-desktop` |

### Отступы снизу (mb)

| MDS класс | Значение |
|-----------|----------|
| `.mb0` | `mb-0` → `mb-1-mobile` → `mb-2-tablet` → `mb-3-desktop` |
| `.mb1` | `mb-1` → `mb-2-mobile` → `mb-3-tablet` → `mb-4-desktop` |
| `.mb2` | `mb-2` → `mb-3-mobile` → `mb-4-tablet` → `mb-5-desktop` |
| `.mb3` | `mb-3` → `mb-4-mobile` → `mb-5-tablet` → `mb-6-desktop` |
| `.mb4` | `mb-4` → `mb-5-mobile` → `mb-6-tablet` → `mb-7-desktop` |
| `.mb5` | `mb-5` → `mb-6-mobile` → `mb-7-tablet` → `mb-8-desktop` |
| `.mb6` | `mb-6` → `mb-7-mobile` → `mb-8-tablet` → `mb-9-desktop` |

### Полные марджины (m)

| MDS класс | Значение |
|-----------|----------|
| `.m0` | `m-0` → `m-1-mobile` → `m-2-tablet` → `m-3-desktop` |
| `.m1` | `m-1` → `m-2-mobile` → `m-3-tablet` → `m-4-desktop` |
| `.m2` | `m-2` → `m-3-mobile` → `m-4-tablet` → `m-5-desktop` |
| `.m3` | `m-3` → `m-4-mobile` → `m-5-tablet` → `m-6-desktop` |
| `.m4` | `m-4` → `m-5-mobile` → `m-6-tablet` → `m-7-desktop` |
| `.m5` | `m-5` → `m-6-mobile` → `m-7-tablet` → `m-8-desktop` |
| `.m6` | `m-6` → `m-7-mobile` → `m-8-tablet` → `m-9-desktop` |

---

## 🔀 43. ГИБРИДНЫЕ КОМБИНАЦИИ

### px + py комбинации

| MDS класс | px уровень | py уровень |
|-----------|------------|------------|
| `.px0y0` | 0 | 0 |
| `.px0y1` | 0 | 1 |
| `.px0y2` | 0 | 2 |
| `.px0y3` | 0 | 3 |
| `.px1y0` | 1 | 0 |
| `.px1y1` | 1 | 1 |
| `.px1y2` | 1 | 2 |
| `.px1y3` | 1 | 3 |
| `.px2y0` | 2 | 0 |
| `.px2y1` | 2 | 1 |
| `.px2y2` | 2 | 2 |
| `.px2y3` | 2 | 3 |
| `.px3y0` | 3 | 0 |
| `.px3y1` | 3 | 1 |
| `.px3y2` | 3 | 2 |
| `.px3y3` | 3 | 3 |
| `.px4y0` | 4 | 0 |
| `.px4y1` | 4 | 1 |
| `.px4y2` | 4 | 2 |
| `.px4y3` | 4 | 3 |
| `.px5y0` | 5 | 0 |
| `.px5y1` | 5 | 1 |
| `.px5y2` | 5 | 2 |
| `.px5y3` | 5 | 3 |
| `.px6y0` | 6 | 0 |
| `.px6y1` | 6 | 1 |
| `.px6y2` | 6 | 2 |
| `.px6y3` | 6 | 3 |

### mb + mt комбинации

| MDS класс | mb + mt уровни |
|-----------|----------------|
| `.mb0mt0` | 0 и 0 |
| `.mb1mt1` | 1 и 1 |
| `.mb2mt2` | 2 и 2 |
| `.mb3mt3` | 3 и 3 |
| `.mb1mt2` | 1 и 2 |
| `.mb1mt3` | 1 и 3 |
| `.mb2mt1` | 2 и 1 |
| `.mb2mt3` | 2 и 3 |
| `.mb3mt1` | 3 и 1 |
| `.mb3mt2` | 3 и 2 |

---

## 📦 44. КОМБО ДЛЯ КАРТОЧЕК И БЛОКОВ

| MDS класс | Описание |
|-----------|----------|
| `.cardsm` | Маленькая карточка (p-3, mb-3) |
| `.cardmd` | Средняя карточка (p-4, mb-4) |
| `.cardlg` | Большая карточка (p-5, mb-5) |
| `.grid-item` | Элемент сетки с отступами |
| `.grid-item-lg` | Крупный элемент сетки |

---

## 🎯 45. СПЕЦИАЛЬНЫЕ КОМБО ДЛЯ КОНКРЕТНЫХ СЛУЧАЕВ

| MDS класс | Для чего | Отступы |
|-----------|----------|---------|
| `.header-sm` | Маленький хедер | px-4 py-3 + моб px-6 py-4 |
| `.header-md` | Средний хедер | px-5 py-4 + моб px-7 py-5 |
| `.footersm` | Маленький футер | px-4 py-6 + моб px-6 py-8 + mt-6 |
| `.modalsm` | Маленькая модалка | px-3 py-2 + моб px-5 py-3 |
| `.modalmd` | Средняя модалка | px-4 py-3 + моб px-6 py-4 |
| `.form-field` | Поле формы | px-3 py-2 + mb-4 |
| `.imgwrap` | Обертка изображения | p-1 + mb-3 |
| `.imgwraplg` | Большая обертка | p-2 + mb-4 |

---

## 💡 БЫСТРЫЙ СТАРТ (САМЫЕ ПОПУЛЯРНЫЕ КЛАССЫ)

```html
<!-- Контейнер с отступами -->
<div class="block-pxy">Контент</div>

<!-- Кнопка -->
<button class="btn clr2 round">Купить</button>

<!-- Карточка -->
<div class="card card-cont">
  <p class="title">Заголовок</p>
</div>

<!-- Центрированный текст -->
<p class="t-c bold5">Жирный текст по центру</p>

<!-- Гибридная сетка -->
<div class="cols">
  <div class="col6">Половина</div>
  <div class="col6">Половина</div>
</div>

<!-- Навигация -->
<nav class="nav clr2">
  <a class="navi">Главная</a>
</nav>

<!-- Уведомление -->
<div class="notifi clr3">Информация</div>
```

---

Эта шпаргалка покрывает **все классы** из вашего `MDS_STYLES`. Сохраните её как `MDS-CHEATSHEET.md` для быстрого доступа! 🚀
