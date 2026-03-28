/**
 * MDS (Modern Design System) v2.0
 * Гибридный стилизатор HTML: Bulma + Tailwind
 */
const MDS_BULMA = {
  // Конфигурация CDN-ресурсов
  resources: {
    /*bulmaCSS: 'https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css',*/
	/*bulmaCSS: 'https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css',*/
	/*bulmaCSS: 'https://bulma.io/assets/css/website.min.css?v=',*/
	bulmaCSS: './lib/aMagic/mds/bulma.min.0.9.4.css',
    fontAwesome: 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
    googleFonts: 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
    tailwindScript: 'https://cdn.tailwindcss.com'
	/*tailwindScript: './lib/aMagic/mds/tailwindcss@1.9.6.css'*/
	/*tailwindScript: './lib/aMagic/mds/tailwind.min.css'*/
  },
  
  // Комбинированные стили Bulma + Tailwind (расширенная версия)
styles: {
  /* === Базовые элементы === */
  'html': 'scroll-behavior-smooth',
  'body': 'min-h-screen bg-gray-50 font-sans text-gray-900 antialiased p-4 md:p-0',
  
	/* === section === */
  /*'section': ' mb-12',*/
  '.section': 'section',
  '.section1': 'section is-medium',
  '.section2': 'section is-large',
  
  '.hero0': 'hero',
  '.hero1': 'hero is-normal',
  '.hero2': 'hero is-small',
  '.hero3': 'hero is-medium',
  '.hero4': 'hero is-large',
  '.hero5': 'hero is-halfheight',
  '.hero6': 'hero is-fullwidth',
  '.heroh': 'hero-head',
  '.herob': 'hero-body',
  '.herof': 'hero-foot',
  
  /* === FOOTER === */
  /*'footer': 'footer',*/
   'footer': 'footer py-8 mt-auto bg-gray-100 text-gray-600',
  
  
  /* === container === */
  '.div1': 'container',
  '.div10': 'container',
  '.div11': 'container is-widescreen', // всю ширину экрана до достижения указанных контрольных точек
  '.div12': 'container is-fullhd', //всю ширину экрана до достижения указанных контрольных точек
  '.div13': 'container is-max-tablet', // для таблеток
  '.div14': 'container is-max-desktop', // для рабочего стола
  '.div15': 'container is-max-widescreen', //  как широкоэкранный контейнер
  '.div16': 'container is-fluid', //с каждой стороны будет отступ в 32 пикселя 

  '.container0': 'container',
  '.container1': 'container is-widescreen', // всю ширину экрана до достижения указанных контрольных точек
  '.container2': 'container is-fullhd', //всю ширину экрана до достижения указанных контрольных точек
  '.container3': 'container is-max-tablet', // для таблеток
  '.container4': 'container is-max-desktop', // для рабочего стола
  '.container5': 'container is-max-widescreen', //  как широкоэкранный контейнер
  '.container6': 'container is-fluid', //с каждой стороны будет отступ в 32 пикселя 
  
  /* === МЕДИА ОБЪЕКТ === */
  'article': 'media',
  '.medial': 'media-left',
  '.mediac': 'media-content',
  
  /* === level === */
  '.l': 'level',
  '.ll': 'level-left',
  '.lr': 'level-right',
  '.li': 'level-item',
 
  /* === КОЛОНКИ === */
  
  '.cols': 'columns',
  '.col': 'column',
  '.col1': 'column is-1',
  '.col2': 'column is-2',
  '.col3': 'column is-3',
  '.col4': 'column is-4',
  '.col5': 'column is-5',
  '.col6': 'column is-6',
  '.col7': 'column is-7',
  '.col8': 'column is-8',
  '.col9': 'column is-9',
  '.col10': 'column is-10',
  '.col11': 'column is-11',
  '.col0': 'column is-full',

  '.col15': 'column is-one-fifth',
  '.col14': 'column is-one-quarter',
  '.col13': 'column is-one-third',
  '.col25': 'column is-two-fifths',
  '.col12': 'column is-half',
  '.col35': 'column is-three-fifths',
  '.col23': 'column is-two-thirds',
  '.col34': 'column is-three-quarters',
  '.col45': 'column is-four-fifths',
  
  /* === СДВИГ КОЛОНКИ === */
  '.offset14': 'is-offset-one-quarter',
  '.offset15': 'is-offset-one-fifth',
  '.offset1': 'is-offset-1',
  '.offset2': 'is-offset-2',
  '.offset3': 'is-offset-3',
  '.offset4': 'is-offset-4',
  '.offset5': 'is-offset-5',
  '.offset6': 'is-offset-6',
  '.offset7': 'is-offset-7',
  '.offset8': 'is-offset-8',
  '.offset9': 'is-offset-9',
  '.offset10': 'is-offset-10',
  '.offset11': 'is-offset-11',

  
  /* === Навигация (Bulma) === */
  'nav': 'navbar',
  '.navi': 'navbar-item',
  '.fix': 'is-fixed-top',
  /*'nav ul': 'navbar-menu',
  'nav li': 'navbar-item',*/
  /*'nav a': 'navbar-link hover:text-primary',*/
  /*'header': 'section has-background-white py-6 shadow-sm',*/
 
  
  /* === КНОПКИ === */
  'button': 'button',
  '.btns': 'buttons',
  '.btns1': 'buttons are-small',
  '.btns2': 'buttons are-medium',
  '.btns3': 'buttons are-large',
  '.btn': 'button',
  
  /* === ЦВЕТ === */
  '.clr0': 'is-white',
  '.clr1': 'is-link',
  '.clr2': 'is-primary',
  '.clr3': 'is-info',
  '.clr4': 'is-success',
  '.clr5': 'is-warning',
  '.clr6': 'is-danger',
  
  '.light': 'is-light',
  '.dark': 'is-dark',
  '.lined': 'is-outlined',
  '.invert': 'is-inverted',
  '.round': 'is-rounded',
  '.focus': 'is-focused',
  '.active': 'is-active',
  
 
  /* === РАЗМЕР === */
  '.size0': 'is-normal',
  '.size1': 'is-small',
  '.size2': 'is-medium',
  '.size3': 'is-large',
  '.size4': 'is-halfheight',
  '.size5': 'is-fullwidth',
  
  /* === ТЕКСТ РАЗМЕР === */
	'.t': 'title',
	'.t1': 'title is-size-6', 
	'.t2': 'title is-size-5', 
	'.t3': 'title is-size-4',
	'.t4': 'title is-size-3',
	'.t5': 'title is-size-2',
	'.t6': 'title is-size-1',
	
	'.ts': 'subtitle',
	'.ts1': 'subtitle is-size-6', 
	'.ts2': 'subtitle is-size-5', 
	'.ts3': 'subtitle is-size-4',
	'.ts4': 'subtitle is-size-3',
	'.ts5': 'subtitle is-size-2',
	'.ts6': 'subtitle is-size-1',
	/* === ТЕКСТ ТОЛШЩИНА === */
	'.th': 'heading',
	'.th1': 'heading is-size-6', 
	'.th2': 'heading is-size-5', 
	'.th3': 'heading is-size-4',
	'.th4': 'heading is-size-3',
	'.th5': 'heading is-size-2',
	'.th6': 'heading is-size-1',
	
	'.b1': 'has-text-weight-light', // Преобразует толщину текста в светлый.
	'.b2': 'has-text-weight-normal',// Преобразует толщину текста в обычный цвет.
	'.b3': 'has-text-weight-medium',//	Преобразует толщину текста в среднюю.
	'.b4': 'has-text-weight-semibold', // Преобразует толщину текста в полужирный.
	'.b5': 'has-text-weight-bold',     // Преобразует жирный текст в полужирный.
	'.b6': 'has-text-weight-extrabold',// Преобразует толщину текста в сверхжирный.
	
  /* === ВЫРАВНИВАНИЕ ТЕКСТА === */
   '.tc': 'has-text-centered', //Выравнивает текст по центру
	'.tj': 'has-text-justified', //Выравнивает текст по ширине
	'.tl': 'has-text-left',      // Выравнивает текст по левому краю
	'.tr': 'has-text-right', //Выравнивает текст по правому краю
	
	/* === ТРАНСФОРМАЦИЯ ТЕКСТА === */
	'.tcap': 'is-capitalized', //	Преобразует первый символ каждого слова в верхний регистр.
	'.tlow': 'is-lowercase', //	Преобразует все символы в нижний регистр.
	'.tupp': 'is-uppercase', //	Преобразует все символы в верхний регистр.
	'.titalic': 'is-italic', //	Преобразует все символы в курсив.
	'.tline': 'is-underlined', //	Подчёркивает текст

  
  /* === НАПРАВЛЕНИЕ === */
	'.flexr': 'is-flex-direction-row', // В строку
	'.flexrr': 'is-flex-direction-row-reverse', // В строку reverse
	'.flexc': 'is-flex-direction-column', // В колонку
	'.flexcr': 'is-flex-direction-column-reverse', // В колонку reverse
  
  
  /* === Типография (Tailwind) === */
  'h1': 'text-4xl md:text-5xl font-bold mb-8 mt-12 text-gray-900',
  'h2': 'text-3xl font-semibold mb-8 mt-10 text-gray-800',
  'h3': 'text-2xl font-semibold mb-6 mt-8 text-gray-700',
  'h4': 'text-xl font-medium mb-4 mt-6 text-gray-700',
  'h5': 'text-lg font-medium mb-3 mt-4 text-gray-600',
  'h6': 'text-base font-semibold mb-2 mt-2 text-gray-600 uppercase tracking-wide',
  /*'p': 'text-gray-700 mb-6 leading-relaxed',*/
  'strong, b': 'font-semibold text-gray-900',
  'em, i': 'italic text-gray-700',
  'small': 'text-sm text-gray-500',
  'mark': 'bg-yellow-100 px-1 rounded',
  'del': 'line-through text-gray-400',
  'ins': 'no-underline bg-green-100',
  'blockquote': 'border-l-4 border-primary pl-4 italic text-gray-600 my-4',
  'cite': 'block text-sm text-gray-500 mt-1',
  
  /* === Ссылки === */
 /* '.link': 'text-primary hover:text-primary-dark underline-offset-2 transition-colors',
  'a:visited': 'text-purple-700',*/
  
  /* === Списки === */
 /* 'ul': 'list-disc list-inside mb-4 space-y-1',
  'ol': 'list-decimal list-inside mb-4 space-y-1',
  'li': 'text-gray-700 mb-1',
  'dl': 'grid grid-cols-1 md:grid-cols-2 gap-4 mb-4',
  'dt': 'font-semibold text-gray-800',
  'dd': 'text-gray-600 ml-4',*/
  
  /* === Таблицы === */
 /* 'table': 'table is-striped is-hoverable is-fullwidth rounded-lg overflow-hidden shadow-sm',
  'thead': 'bg-gray-100',
  'tbody': 'divide-y divide-gray-200',
  'tfoot': 'bg-gray-50 font-semibold',
  'tr': 'hover:bg-gray-50 transition-colors',
  'th': 'px-4 py-3 text-left text-sm font-semibold text-gray-700',
  'td': 'px-4 py-3 text-sm text-gray-600',
  'caption': 'text-sm text-gray-500 text-left mb-2',*/
  
  /* === Формы === */
 /* 'form': 'space-y-4',
  'fieldset': 'border border-gray-200 rounded-lg p-4 mb-4',
  'legend': 'text-sm font-semibold text-gray-700 px-2',
  'label': 'block text-sm font-medium text-gray-700 mb-1',
  'input, textarea, select': 'input hover:border-gray-400 focus:ring-2 focus:ring-primary/20',
  'input[type="text"]': 'input hover:border-gray-400',
  'input[type="email"]': 'input hover:border-gray-400',
  'input[type="password"]': 'input hover:border-gray-400',
  'input[type="number"]': 'input hover:border-gray-400',
  'input[type="tel"]': 'input hover:border-gray-400',
  'input[type="url"]': 'input hover:border-gray-400',
  'input[type="search"]': 'input rounded-full',
  'input[type="checkbox"]': 'checkbox mr-2 rounded text-primary',
  'input[type="radio"]': 'radio mr-2 text-primary',
  'input[type="range"]': 'w-full accent-primary',
  'input[type="color"]': 'w-10 h-10 p-1 rounded border border-gray-300',
  'input[type="file"]': 'file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:bg-primary file:text-white hover:file:bg-primary-dark',
  'textarea': 'input min-h-[100px]',
  'select': 'input appearance-none bg-white',
  'option': 'py-2',*/
  
  
  /*'button': 'button is-primary shadow-md hover:shadow-lg transition-all',
  'button[type="submit"]': 'button is-success is-fullwidth',
  'button[type="reset"]': 'button is-light',
  'button:disabled': 'opacity-50 cursor-not-allowed',*/
  
  /* === Медиа === */
  /*'img': 'max-w-full h-auto rounded-lg shadow-sm',
  'figure': 'mb-6',
  'figcaption': 'text-sm text-gray-500 mt-2 text-center',
  'video': 'max-w-full h-auto rounded-lg shadow-md',
  'audio': 'w-full',
  'iframe': 'w-full rounded-lg shadow-md',*/
  
  /* === Семантические блоки === */
 /* 'main': 'container mx-auto py-8 px-4',*/
  /*'section': 'mb-12',*/
 /* 'article': 'prose lg:prose-xl max-w-none',
  'aside': 'bg-gray-50 p-6 rounded-lg border-l-4 border-primary',
  'details': 'bg-white rounded-lg p-4 shadow-sm',
  'summary': 'cursor-pointer font-semibold text-primary hover:underline',*/
  
  /* === Специальные div-блоки === */
  '.div-card': 'card mb-6 p-6 shadow-md hover:shadow-lg transition-shadow', // Карточка
  '.div-box': 'box has-background-primary-light p-8 rounded-xl', // Акцентный блок
  '.div-notification': 'notification is-info mb-6 p-5 rounded-lg border-l-4', // Уведомление
  '.div-columns': 'columns is-multiline mb-10 gap-6', // Сетка
  '.div-panel': 'panel is-dark p-6 rounded-xl backdrop-blur-sm bg-black/90', // Темный блок
  '.div-flex': 'flex flex-wrap gap-4 items-center', // Флекс-контейнер
  '.div-message': 'message is-info', // Сообщение Bulma
  '.div-tile': 'tile is-ancestor p-6 bg-white/80 rounded-xl', // Плиточная сетка
  '.div-hero': 'hero is-warning is-bold p-12 text-center', // Герой-секция
  '.div-level': 'level mb-6', // Level (Bulma)
  '.div-tags': 'tags are-medium mb-4', // Теги
  '.div-progress': 'progress mb-4', // Прогресс-бар
  '.div-modal': 'modal-card', // Модальное окно
  '.div-dropdown': 'dropdown is-hoverable', // Выпадающее меню
  '.div-pagination': 'pagination is-centered', // Пагинация
  
  /* === Кастомизированные компоненты === */
  '.badge': 'badge is-small mr-2',
  '.alert': 'notification is-warning is-light',
  '.tooltip': 'has-tooltip',
  '.breadcrumb': 'breadcrumb',
  '.card-header': 'card-header',
  '.card-content': 'card-content',
  '.card-footer': 'card-footer',
  '.menu': 'menu',
  '.menu-label': 'menu-label',
  '.menu-list': 'menu-list',
  
  '#signup': 'py-20 bg-white max-w-3xl mx-auto px-6 bg-gradient-to-l from-primary',
	'.signup-form': 'bg-gray-50 rounded-xl p-8 shadow-md max-w-xl mx-auto space-y-6',
	'.signup-label': 'block mb-2 font-semibold',
	'.signup-input': 'w-full border border-gray-300 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary',
	'.signup-button': 'btn-primary w-full py-3 rounded-lg font-semibold shadow hover:shadow-lg transition',
	'.btn-prim': 'bg-primary text-white font-semibold shadow-md hover:bg-primary/90 transition px-6 py-3 rounded-lg'

   /*'footer': 'bg-dark text-white py-10 mt-20 text-center text-sm text-gray-400'*/
},

  /**
   * Инициализация ресурсов
   */
  initResources: function() {
    return new Promise((resolve) => {
      // 1. Создаем прелоадер
      this.createPreloader();
      
      // 2. Подключаем Tailwind
      const tailwindScript = document.createElement('script');
      tailwindScript.src = this.resources.tailwindScript;
      tailwindScript.onload = () => {
        // Настройка Tailwind
        /*tailwind.config = {
          theme: {
            extend: {
              fontFamily: {
                sans: ['Inter', 'sans-serif']
              }
            }
          }
        };*/
		
		tailwind.config = {
		  theme: {
			extend: {
			  colors: {
				primary: '#3B82F6',
				secondary: '#10B981',
				accent: '#F59E0B',
				dark: '#1F2937',
			  },
			  fontFamily: {
				sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
				heading: ['"Poppins"', 'sans-serif'],
			  },
			  boxShadow: {
				'custom-lg': '0 10px 15px -3px rgba(59, 130, 246, 0.5), 0 4px 6px -2px rgba(59, 130, 246, 0.3)',
			  }
			}
		  }
		};
	
        
        // 3. Подключаем остальные ресурсы
        this.loadCSSResources().then(resolve);
      };
      document.head.appendChild(tailwindScript);
    });
  },

  /**
   * Создает прелоадер
   */
  createPreloader: function() {
    const preloader = document.createElement('div');
    preloader.id = 'mds-preloader';
    preloader.style.cssText = `
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    `;
    preloader.innerHTML = `
      <div class="loading-spinner" style="
        width: 50px;
        height: 50px;
        border: 3px solid rgba(79, 70, 229, 0.3);
        border-radius: 50%;
        border-top-color: #4f46e5;
        animation: spin 1s ease-in-out infinite;
      "></div>
    `;
    document.body.prepend(preloader);
    
    // Добавляем анимацию
    const style = document.createElement('style');
    style.textContent = `
      @keyframes spin {
        to { transform: rotate(360deg); }
      }
      body { opacity: 0; transition: opacity 0.4s ease; }
    `;
    document.head.appendChild(style);
  },

  /**
   * Загружает CSS-ресурсы
   */
  loadCSSResources: function() {
    const resources = [
      { url: this.resources.bulmaCSS, id: 'bulma-css' },
      { url: this.resources.fontAwesome, id: 'font-awesome' },
      { url: this.resources.googleFonts, id: 'google-fonts' }
    ];

    return Promise.all(
      resources.map(res => {
        return new Promise((resolve) => {
          if (!document.getElementById(res.id)) {
            const link = document.createElement('link');
            link.href = res.url;
            link.rel = 'stylesheet';
            link.id = res.id;
            link.onload = resolve;
            document.head.appendChild(link);
          } else {
            resolve();
          }
        });
      })
    );
  },

  /**
   * Применяет стили к элементам
   */
  applyStyles: function() {
    // Основные стили
    Object.entries(this.styles).forEach(([selector, classes]) => {
      try {
        document.querySelectorAll(selector).forEach(el => {
          el.classList.add(...classes.split(' '));
        });
      } catch(e) {
        console.warn(`MDS: Error applying styles for ${selector}`, e);
      }
    });

    // Специальные обработчики
    this.handleSpecialCases();
  },

  /**
   * Обработка особых случаев
   */
  handleSpecialCases: function() {
    // Инициализация бургер-меню Bulma
    document.addEventListener('DOMContentLoaded', () => {
      const $navbarBurgers = Array.prototype.slice.call(
        document.querySelectorAll('.navbar-burger'), 
        0
      );

      $navbarBurgers.forEach(el => {
        el.addEventListener('click', () => {
          const target = el.dataset.target;
          const $target = document.getElementById(target);

          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
        });
      });
    });

    // Добавление иконок к кнопкам
    document.querySelectorAll('button.is-primary:not(.no-icon)').forEach(btn => {
      if (!btn.querySelector('i, svg')) {
        btn.innerHTML = `<i class="fas fa-arrow-right mr-2"></i> ${btn.innerHTML}`;
      }
    });

    // Обработка внешних ссылок
    document.querySelectorAll('a[href^="http"]:not([href*="${window.location.host}"])').forEach(a => {
      a.target = '_blank';
      a.rel = 'noopener noreferrer';
      if (!a.querySelector('.external-icon')) {
        a.innerHTML += ' <span class="external-icon text-xs ml-1">↗</span>';
      }
    });
  },

  /**
   * Завершает инициализацию
   */
  finalize: function() {
    // Удаляем прелоадер
    const preloader = document.getElementById('mds-preloader');
    if (preloader) {
      preloader.style.transition = 'opacity 0.3s ease';
      preloader.style.opacity = '0';
      setTimeout(() => preloader.remove(), 300);
    }

    // Показываем страницу
    document.body.style.opacity = '1';
    document.body.classList.add('mds-loaded');

    // Инициализация компонентов Bulma
    if (typeof Bulma !== 'undefined') {
      Bulma().attach();
    }
  },

  /**
   * Запуск системы
   */
  start: function() {
    // Этап 1: Загрузка ресурсов
    this.initResources()
      // Этап 2: Применение стилей
      .then(() => this.applyStyles())
      // Этап 3: Завершение
      .then(() => this.finalize())
      .catch(err => {
        console.error('MDS initialization error:', err);
        this.finalize(); // Все равно показываем страницу
      });
  }
};

// Автозапуск только если MDS не используется в SPA
if (!window.MDS_BULMA_MANUAL_INIT) {
  document.addEventListener('DOMContentLoaded', () => MDS_BULMA.start());
}

// Экспорт для использования в модульных системах
if (typeof module !== 'undefined' && module.exports) {
  module.exports = MDS_BULMA;
} else {
  window.MDS_BULMA = MDS_BULMA;
}