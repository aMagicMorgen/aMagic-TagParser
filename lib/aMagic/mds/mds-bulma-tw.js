/**
 * MDS (Modern Design System) v2.0
 * Гибридный стилизатор HTML: Bulma + Tailwind
 */
const MDS_BULMA_TW = {
  // Конфигурация CDN-ресурсов
  resources: {
    bulmaCSS: 'https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css',
    fontAwesome: 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
    googleFonts: 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
    tailwindScript: 'https://cdn.tailwindcss.com'
  },
  
  // Комбинированные стили Bulma + Tailwind (расширенная версия)
styles: {
  /* === Базовые элементы === */
  'html': 'scroll-behavior-smooth',
  'body': 'min-h-screen bg-gray-50 font-sans text-gray-900 antialiased p-4 md:p-0',
  
  /* === Навигация (Bulma) === */
  'nav': 'navbar is-primary is-fixed-top shadow-md',
  'nav ul': 'navbar-menu',
  'nav li': 'navbar-item',
  'nav a': 'navbar-link hover:text-primary',
  'header': 'section has-background-white py-6 shadow-sm',
  'footer': 'footer py-8 mt-auto bg-gray-100 text-gray-600',
  
  /* === Типография (Tailwind) === */
  'h1': 'text-4xl md:text-5xl font-bold mb-8 mt-12 text-gray-900',
  'h2': 'text-3xl font-semibold mb-8 mt-10 text-gray-800',
  'h3': 'text-2xl font-semibold mb-6 mt-8 text-gray-700',
  'h4': 'text-xl font-medium mb-4 mt-6 text-gray-700',
  'h5': 'text-lg font-medium mb-3 mt-4 text-gray-600',
  'h6': 'text-base font-semibold mb-2 mt-2 text-gray-600 uppercase tracking-wide',
  'p': 'text-gray-700 mb-6 leading-relaxed',
  'strong, b': 'font-semibold text-gray-900',
  'em, i': 'italic text-gray-700',
  'small': 'text-sm text-gray-500',
  'mark': 'bg-yellow-100 px-1 rounded',
  'del': 'line-through text-gray-400',
  'ins': 'no-underline bg-green-100',
  'blockquote': 'border-l-4 border-primary pl-4 italic text-gray-600 my-4',
  'cite': 'block text-sm text-gray-500 mt-1',
  
  /* === Ссылки === */
  'a': 'text-primary hover:text-primary-dark underline-offset-2 transition-colors',
  'a:visited': 'text-purple-700',
  
  /* === Списки === */
  'ul': 'list-disc list-inside mb-4 space-y-1',
  'ol': 'list-decimal list-inside mb-4 space-y-1',
  'li': 'text-gray-700 mb-1',
  'dl': 'grid grid-cols-1 md:grid-cols-2 gap-4 mb-4',
  'dt': 'font-semibold text-gray-800',
  'dd': 'text-gray-600 ml-4',
  
  /* === Таблицы === */
  'table': 'table is-striped is-hoverable is-fullwidth rounded-lg overflow-hidden shadow-sm',
  'thead': 'bg-gray-100',
  'tbody': 'divide-y divide-gray-200',
  'tfoot': 'bg-gray-50 font-semibold',
  'tr': 'hover:bg-gray-50 transition-colors',
  'th': 'px-4 py-3 text-left text-sm font-semibold text-gray-700',
  'td': 'px-4 py-3 text-sm text-gray-600',
  'caption': 'text-sm text-gray-500 text-left mb-2',
  
  /* === Формы === */
  'form': 'space-y-4',
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
  'option': 'py-2',
  'button': 'button is-primary shadow-md hover:shadow-lg transition-all',
  'button[type="submit"]': 'button is-success is-fullwidth',
  'button[type="reset"]': 'button is-light',
  'button:disabled': 'opacity-50 cursor-not-allowed',
  
  /* === Медиа === */
  'img': 'max-w-full h-auto rounded-lg shadow-sm',
  'figure': 'mb-6',
  'figcaption': 'text-sm text-gray-500 mt-2 text-center',
  'video': 'max-w-full h-auto rounded-lg shadow-md',
  'audio': 'w-full',
  'iframe': 'w-full rounded-lg shadow-md',
  
  /* === Семантические блоки === */
  'main': 'container mx-auto py-8 px-4',
  'section': 'mb-12',
  'article': 'prose lg:prose-xl max-w-none',
  'aside': 'bg-gray-50 p-6 rounded-lg border-l-4 border-primary',
  'details': 'bg-white rounded-lg p-4 shadow-sm',
  'summary': 'cursor-pointer font-semibold text-primary hover:underline',
  
  /* === Специальные div-блоки === */
  '.div1': 'card mb-6 p-6 shadow-md hover:shadow-lg transition-shadow', // Карточка
  '.div2': 'box has-background-primary-light p-8 rounded-xl', // Акцентный блок
  '.div3': 'notification is-info mb-6 p-5 rounded-lg border-l-4', // Уведомление
  '.div4': 'columns is-multiline mb-10 gap-6', // Сетка
  '.div5': 'panel is-dark p-6 rounded-xl backdrop-blur-sm bg-black/90', // Темный блок
  '.div6': 'flex flex-wrap gap-4 items-center', // Флекс-контейнер
  '.div7': 'message is-info', // Сообщение Bulma
  '.div8': 'tile is-ancestor p-6 bg-white/80 rounded-xl', // Плиточная сетка
  '.div9': 'hero is-warning is-bold p-12 text-center', // Герой-секция
  '.div10': 'level mb-6', // Level (Bulma)
  '.div11': 'tags are-medium mb-4', // Теги
  '.div12': 'progress mb-4', // Прогресс-бар
  '.div13': 'modal-card', // Модальное окно
  '.div14': 'dropdown is-hoverable', // Выпадающее меню
  '.div15': 'pagination is-centered', // Пагинация
  
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
  '.menu-list': 'menu-list'
},

 /* // Комбинированные стили Bulma + Tailwind
  styles: {
    /* === Базовые элементы === 
    'html': 'scroll-behavior-smooth',
    'body': 'min-h-screen bg-gray-50 font-sans text-gray-900 antialiased p-4 md:p-0',
    
    /* === Навигация (Bulma) === 
    'nav': 'navbar is-white is-fixed-top',
    'nav ul': 'navbar-menu',
    'nav li': 'navbar-item',
    'nav a': 'navbar-link',
    
    /* === Типография (Tailwind) === 
    'h1': 'text-4xl md:text-5xl font-bold mb-8 mt-12 text-gray-900',
    'h2': 'text-3xl font-semibold mb-8 mt-10 text-gray-800',
    'h3': 'text-2xl font-semibold mb-6 mt-8 text-gray-700',
    'p': 'text-gray-700 mb-6 leading-relaxed',
    
    /* === Компоненты Bulma с Tailwind-модификаторами === 
    'button': 'button is-primary shadow-md hover:shadow-lg',
    'button[type="submit"]': 'button is-success is-fullwidth',
    'input, textarea, select': 'input hover:border-gray-400',
    'table': 'table is-striped is-hoverable is-fullwidth rounded-lg overflow-hidden',
    
    /* === Специальные div-блоки === 
    '.div1': 'card mb-6 p-6 shadow-md hover:shadow-lg transition-shadow', // Карточка
    '.div2': 'box has-background-primary-light p-8 rounded-xl', // Акцентный блок
    '.div3': 'notification is-info mb-6 p-5 rounded-lg border-l-4', // Уведомление
    '.div4': 'columns is-multiline mb-10 gap-6', // Сетка
    '.div5': 'panel is-dark p-6 rounded-xl backdrop-blur-sm bg-black/90', // Темный блок
    '.div6': 'flex flex-wrap gap-4 items-center', // Флекс-контейнер
    '.div7': 'message is-info', // Сообщение Bulma
    '.div8': 'tile is-ancestor p-6 bg-white/80 rounded-xl' // Плиточная сетка
  },
*/
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
        tailwind.config = {
          theme: {
            extend: {
              fontFamily: {
                sans: ['Inter', 'sans-serif']
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
if (!window.MDS_MANUAL_INIT) {
  document.addEventListener('DOMContentLoaded', () => MDS_BULMA_TW.start());
}

// Экспорт для использования в модульных системах
if (typeof module !== 'undefined' && module.exports) {
  module.exports = MDS_BULMA_TW;
} else {
  window.MDS_BULMA_TW = MDS_BULMA_TW;
}