<?php return [
  'installer' => [
    'app_config_section' => 'Конфигурация приложения',
    'license_section' => 'Лицензионный ключ',
    'dependencies_section' => 'Установка зависимостей',
    'demo_section' => 'Демо контент',
    'locale_select_label' => 'Выберите язык',
    'locale_select_error' => 'Код языка :code ошибочен, попробуйте еще раз',
    'app_url_label' => 'URL приложения',
    'backend_uri_label' => 'URI панели управления',
    'backend_uri_comment' => 'Чтобы защитить свое приложение, введите иной адрес для доступа к панели администратора.',
    'license_key_label' => 'Лицензионный ключ',
    'license_key_comment' => 'Введите лицензионный ключ чтобы продолжить.',
    'license_thanks_comment' => 'Спасибо за то что пользуетесь October CMS!',
    'license_expired_comment' => 'Лицензия не оплачена или истекла. Посетите octobercms.com чтобы получить лицензию.',
    'too_many_failures_label' => 'Слишком много неудачных попыток',
    'non_interactive_label' => 'Обнаружен не интерактивный режим',
    'non_interactive_comment' => 'Если вы видите эту ошибку, используйте вместо нее эти не интерактивные команды.',
    'install_failed_label' => 'Установка не удалась',
    'install_failed_comment' => 'Пожалуйста попробуйте ввести эти команды вручную.',
    'database_engine_label' => 'Движок базы данных',
    'database_host_label' => 'Хост базы данных',
    'database_host_comment' => 'Хост для подключения к БД.',
    'database_port_label' => 'Порт базы данных',
    'database_port_comment' => '(Опционально) Порт для подключения к БД.',
    'database_name_label' => 'Имя базы данных',
    'database_name_comment' => 'Укажите имя используемой базы данных.',
    'database_login_label' => 'Логин от пользователя базы данных',
    'database_login_comment' => 'Пользователь с возможностью создания таблиц',
    'database_pass_label' => 'Пароль от пользователя базы данных',
    'database_pass_comment' => 'Пароль для указанного пользователя',
    'database_path_label' => 'Путь к базе данных',
    'database_path_comment' => 'Введите путь относительно корневого каталога приложения.',
    'migrate_database_comment' => 'Пожалуйста, мигрируйте базу данных с помощью следующей команды',
    'visit_backend_comment' => 'Затем, откройте панель управления по следующему URL',
    'open_configurator_comment' => 'Откройте приложение в браузере',
    'install_demo_label' => 'Установить демо шаблон и контент? (Рекомендуется)',
    'operation_timeout_comment' => 'Время ожидания операции истекло. Пожалуйста увеличте лимит на сервере и попробуйте еще раз.',
    'operation_timeout_hint' => 'See the relevant documentation for :name.',
  ],
  'app' => [
    'name' => 'October CMS',
    'tagline' => 'Возвращение к истокам',
  ],
  'locale' => [
    'ar' => 'العربية',
    'be' => 'Беларуская',
    'bg' => 'Български',
    'ca' => 'Català',
    'cs' => 'Čeština',
    'da' => 'Dansk',
    'de' => 'Deutsch',
    'el' => 'Ελληνικά',
    'en' => 'English (United States)',
    'en-au' => 'English (Australia)',
    'en-ca' => 'English (Canada)',
    'en-gb' => 'English (United Kingdom)',
    'es' => 'Español',
    'es-ar' => 'Español (Argentina)',
    'et' => 'Eesti',
    'fa' => 'فارسی',
    'fi' => 'Suomi',
    'fr' => 'Français',
    'fr-ca' => 'Français (Canada)',
    'hu' => 'Magyar',
    'id' => 'Bahasa Indonesia',
    'it' => 'Italiano',
    'ja' => '日本語',
    'kr' => '한국어',
    'lt' => 'Lietuvių',
    'lv' => 'Latviešu',
    'nb-no' => 'Norsk (Bokmål)',
    'nl' => 'Nederlands',
    'pl' => 'Polski',
    'pt-br' => 'Português (Brasil)',
    'pt-pt' => 'Português (Portugal)',
    'ro' => 'Română',
    'ru' => 'Русский',
    'sk' => 'Slovenský',
    'sl' => 'Slovenščina',
    'sv' => 'Svenska',
    'th' => 'ไทย',
    'tr' => 'Türkçe',
    'uk' => 'Українська мова',
    'vn' => 'Tiếng việt',
    'zh-cn' => '简体中文',
    'zh-tw' => '繁體中文',
  ],
  'directory' => [
    'create_fail' => 'Невозможно создать директорию: :name',
  ],
  'file' => [
    'create_fail' => 'Невозможно создать файл: :name',
  ],
  'combiner' => [
    'not_found' => 'Файл комбайнера \':name\' не найден.',
  ],
  'resizer' => [
    'not_found' => 'Файл ресайзера \':name\' не найден.',
  ],
  'system' => [
    'name' => 'Система',
    'menu_label' => 'Система',
    'categories' => [
      'cms' => 'CMS',
      'misc' => 'Разное',
      'logs' => 'Логи',
      'mail' => 'Почта',
      'shop' => 'Магазин',
      'team' => 'Команда',
      'users' => 'Пользователи',
      'system' => 'Система',
      'social' => 'Социальное',
      'backend' => 'Backend',
      'events' => 'События',
      'customers' => 'Клиентское',
      'my_settings' => 'Мои настройки',
      'notifications' => 'Уведомления',
    ],
  ],
  'theme' => [
    'label' => 'Тема',
    'unnamed' => 'Безымянная тема',
    'name' => [
      'label' => 'Название темы',
      'help' => 'Название темы по ее уникальному коду. Например, RainLab.Vanilla',
    ],
  ],
  'themes' => [
    'install' => 'Установить шаблоны',
    'search' => 'поиск шаблонов для установки...',
    'installed' => 'Установленные шаблоны',
    'no_themes' => 'Нет шаблонов, установленных из маркетплейса.',
    'recommended' => 'Рекомендуется',
    'remove_confirm' => 'Вы уверены, что хотите удалить выбранный шаблон?',
  ],
  'plugin' => [
    'label' => 'Плагин',
    'unnamed' => 'Безымянный плагин',
    'name' => [
      'label' => 'Имя плагина',
      'help' => 'Введите название плагина со своим уникальным кодом. Например, RainLab.Blog',
    ],
    'by_author' => 'Создано :name',
  ],
  'plugins' => [
    'install' => 'Установить плагины',
    'install_products' => 'Установка расширений',
    'search' => 'Поиск плагинов...',
    'installed' => 'Установленные плагины',
    'no_plugins' => 'Нет плагинов, установленных из маркетплейса.',
    'recommended' => 'Рекомендуется',
    'plugin_label' => 'Плагин',
    'unknown_plugin' => 'Плагин был удален из файловой системы.',
    'disabled_by_config' => 'Плагин был отклчен конфигурацией.',
    'disabled_by_system' => 'Плагин имеет отсуствующие зависимости или отключен системой.',
    'select_label' => 'Выберите действие...',
    'bulk_actions_label' => 'Массовые действия',
    'check_yes' => 'Да',
    'check_no' => 'Нет',
    'unfrozen' => 'Обновления включены',
    'enabled' => 'Плагин включен',
    'freeze' => 'отключить обновления для',
    'unfreeze' => 'включить обновления для',
    'enable' => 'включить',
    'disable' => 'выключить',
    'refresh' => 'сбросить',
    'remove' => 'Удалить',
    'freeze_label' => 'Отключить обновления',
    'unfreeze_label' => 'Включить обновления',
    'enable_label' => 'Включить плагины',
    'disable_label' => 'Выключить плагины',
    'refresh_label' => 'Сбросить данные плагина',
    'action_confirm' => 'Вы действительно хотите :action?',
    'freeze_success' => 'Обновления успешно отключены.',
    'unfreeze_success' => 'Обновления успешно включены.',
    'enable_success' => 'Выбранные плагины успешно включены.',
    'disable_success' => 'Выбранные плагины успешно отключены.',
    'refresh_confirm' => 'Вы уверены, что хотите переустановить выбранные плагины? Это сбросит данные каждого плагина, вернув его к исходному состоянию.',
    'refresh_success' => 'Выбранные плагины успешно переустановлены.',
    'remove_confirm' => 'Вы уверены, что хотите удалить выбранные плагины? Это также удалит все связанные с ними данные.',
    'remove_success' => 'Выбранные плагины успешно удалены.',
  ],
  'project' => [
    'attach' => 'Подключить проект',
    'detach' => 'Отсоединить проект',
    'none' => 'Не обнаружено',
    'id' => [
      'missing' => 'Пожалуйста, укажите идентификатор вашего проекта для использования.',
    ],
    'detach_confirm' => 'Вы уверены, что хотите отсоединить этот проект?',
    'unbind_success' => 'Проект был успешно отсоединен.',
  ],
  'mail' => [
    'log_file' => 'Файл журнала',
    'menu_label' => 'Настройки почты',
    'menu_description' => 'Управление настройками электронной почты.',
    'general' => 'Общее',
    'method' => 'Метод',
    'sender_name' => 'Имя отправителя',
    'sender_email' => 'Адрес отправителя',
    'smtp' => 'SMTP',
    'smtp_address' => 'Сервер исходящей почты',
    'smtp_authorization' => 'Использовать SMTP авторизацию',
    'smtp_authorization_comment' => 'Активируйте эту опцию, если ваш SMTP-сервер требует авторизацию.',
    'smtp_username' => 'SMTP логин',
    'smtp_password' => 'SMTP пароль',
    'smtp_port' => 'SMTP порт',
    'smtp_ssl' => 'Использовать SSL',
    'smtp_encryption' => 'Протокол шифрования для SMTP',
    'smtp_encryption_none' => 'Без шифрования',
    'smtp_encryption_tls' => 'TLS',
    'smtp_encryption_ssl' => 'SSL',
    'sendmail' => 'Sendmail',
    'sendmail_path' => 'Путь к Sendmail',
    'sendmail_path_comment' => 'Пожалуйста, укажите путь к sendmail.',
    'mailgun' => 'Mailgun',
    'mailgun_domain' => 'Домен Mailgun',
    'mailgun_domain_comment' => 'Пожалуйста, укажите домен Mailgun.',
    'mailgun_secret' => 'Секретный API-ключ',
    'mailgun_secret_comment' => 'Введите ваш Mailgun API-ключ.',
    'mandrill' => 'Mandrill',
    'mandrill_secret' => 'Секретный ключ Mandrill',
    'mandrill_secret_comment' => 'Введите ваш Mandrill API-ключ.',
    'ses' => 'SES',
    'ses_key' => 'SES API-ключ',
    'ses_key_comment' => 'Введите ваш SES API-ключ',
    'ses_secret' => 'SES секретный API-ключ',
    'ses_secret_comment' => 'Введите ваш секретный SES API-ключ',
    'postmark' => 'Postmark',
    'postmark_token' => 'Postmark секрет',
    'postmark_token_comment' => 'Введите свой Postmark API секретный ключ',
    'ses_region' => 'SES регион',
    'ses_region_comment' => 'Введите свой SES регион (например: us-east-1)',
    'drivers_hint_header' => 'Плагин October.Drivers не установлен',
    'drivers_hint_content' => 'Этот почтовый метод требует плагин ":plugin", чтобы отправлять письма.',
  ],
  'mail_templates' => [
    'menu_label' => 'Шаблоны почты',
    'menu_description' => 'Изменение шаблонов писем, отправляемых пользователям и администраторам.',
    'new_template' => 'Новый шаблон',
    'new_layout' => 'Новый макет',
    'new_partial' => 'Новый фрагмент',
    'template' => 'Шаблон',
    'templates' => 'Шаблоны',
    'partial' => 'Фрагмент',
    'partials' => 'Фрагменты',
    'menu_layouts_label' => 'Макеты почты',
    'menu_partials_label' => 'Фрагменты почты',
    'layout' => 'Макет',
    'layouts' => 'Макеты',
    'no_layout' => '-- Нет макета --',
    'name' => 'Название',
    'name_comment' => 'Уникальное имя, используемое для обозначения этого шаблона',
    'code' => 'Код',
    'code_comment' => 'Уникальный код, используемый для обозначения этого шаблона',
    'subject' => 'Тема',
    'subject_comment' => 'Тема сообщения',
    'description' => 'Описание',
    'content_html' => 'HTML',
    'content_css' => 'CSS',
    'content_text' => 'Простой текст',
    'test_send' => 'Отправить тестовое сообщение',
    'test_success' => 'Тестовое сообщение было успешно отправлено.',
    'test_confirm' => 'Тестовое сообщение будет отправлено на :email. Продолжить?',
    'creating' => 'Создание шаблона...',
    'creating_layout' => 'Создание макета...',
    'saving' => 'Сохранение шаблона...',
    'saving_layout' => 'Сохранение макета...',
    'delete_confirm' => 'Вы действительно хотите удалить этот шаблон?',
    'delete_layout_confirm' => 'Вы действительно хотите удалить этот макет?',
    'deleting' => 'Удаление шаблона...',
    'deleting_layout' => 'Удаление макета...',
    'sending' => 'Отправка тестового сообщения...',
    'return' => 'Вернуться к списку шаблонов',
    'options' => 'Настройки',
    'disable_auto_inline_css' => 'Отключить автоматическую вставку inline-стилей (inline CSS)',
  ],
  'mail_brand' => [
    'menu_label' => 'Почтовый брендинг',
    'menu_description' => 'Измените цвета и внешний вид почтовых шаблонов.',
    'page_title' => 'Настройка внешнего вида почты',
    'sample_template' => [
      'heading' => 'Заголовок',
      'paragraph' => 'Это абзац, содержит текст Lorem Ipsum и ссылку. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
      'table' => [
        'item' => 'Пункт',
        'description' => 'Описание',
        'price' => 'Цена',
        'centered' => 'По центру',
        'right_aligned' => 'По правому краю',
      ],
      'buttons' => [
        'primary' => 'Основная кнопка',
        'positive' => 'Положительная кнопка',
        'negative' => 'Отрицательная кнопка',
      ],
      'panel' => 'Насколько великолепна эта панель?',
      'more' => 'Еще один текст',
      'promotion' => 'Код купона: OCTOBER',
      'subcopy' => 'Это суб-копия письма',
      'thanks' => 'Спасибо',
    ],
    'fields' => [
      '_section_background' => 'Задний план',
      'body_bg' => 'Фон тела документа',
      'content_bg' => 'Фон обертки содержимого',
      'content_inner_bg' => 'Фон содержимого',
      '_section_buttons' => 'Кнопки',
      'button_text_color' => 'Цвет текста кнопки',
      'button_primary_bg' => 'Цвет основной кнопки',
      'button_positive_bg' => 'Цвет положительной кнопки',
      'button_negative_bg' => 'Цвет отрицательной кнопки',
      '_section_type' => 'Типография',
      'header_color' => 'Цвет заголовка',
      'heading_color' => 'Цвет заголовков',
      'text_color' => 'Цвет текста',
      'link_color' => 'Цвет ссылки',
      'footer_color' => 'Нижний колонтитул',
      '_section_borders' => 'Границы',
      'body_border_color' => 'Цвет под заголовком',
      'subcopy_border_color' => 'Цвет над колонтитулом',
      'table_border_color' => 'Цвет таблицы',
      '_section_components' => 'Компоненты',
      'panel_bg' => 'Фон панели',
      'promotion_bg' => 'Фон промо блока',
      'promotion_border_color' => 'Цвет рамки промо блока',
    ],
  ],
  'install' => [
    'plugin_label' => 'Установить плагин',
    'theme_label' => 'Установить тему',
  ],
  'updates' => [
    'plugin_name' => 'Название',
    'plugin_code' => 'Код',
    'plugin_description' => 'Описание',
    'plugin_version' => 'Версия',
    'plugin_latest' => 'Последняя версия',
    'plugin_author' => 'Автор',
    'plugin_not_found' => 'Плагин не найден',
    'plugin_version_not_found' => 'Версия плагина не найдена',
    'theme_not_found' => 'Шаблон не найден',
    'core_build' => 'Сборка :build',
    'core_build_help' => 'Последняя доступная сборка.',
    'changelog' => 'История изменений',
    'changelog_view_details' => 'Подробнее',
    'themes' => 'Темы',
    'plugin_version_none' => 'Новый плагин',
    'plugin_current_version' => 'Текущая версия',
    'theme_new_install' => 'Новая тема установлена.',
    'theme_extracting' => 'Распаковка темы: :name',
    'update_label' => 'Обновить',
    'update_loading' => 'Поиск доступных обновлений...',
    'force_label' => 'Принудительно обновить',
    'found' => [
      'label' => 'Доступны новые обновления!',
      'help' => 'Выберите «Обновить», чтобы начать процесс обновления.',
    ],
    'none' => [
      'label' => 'Нет обновлений',
      'help' => 'Новые обновления не найдены.',
    ],
    'important_action' => [
      'empty' => 'Выберите действие',
      'confirm' => 'Подтвердите обновление',
      'skip' => 'Пропустить этот плагин (только один раз)',
      'ignore' => 'Пропустить этот плагин (всегда)',
    ],
    'important_action_required' => 'Необходимое действие',
    'important_view_guide' => 'Посмотреть руководство по обновлению',
    'important_view_release_notes' => 'Просмотреть заметки о выпуске',
    'important_alert_text' => 'Некоторые обновления требуют вашего внимания.',
    'details_title_plugin' => 'Информация о плагине',
    'details_title_theme' => 'Информация о шаблоне',
    'details_view_homepage' => 'Перейти к домашней странице',
    'details_changelog' => 'Изменения',
    'details_changelog_missing' => 'Нет никакого измененного списка.',
    'details_view_licence' => 'Посмотреть лицензию',
    'details_current_version' => 'Текущая версия',
    'details_author' => 'Автор',
  ],
  'market' => [
    'menu_description' => 'Управление и установка плагинами и шаблонами.',
    'content_loading' => 'Загрузка...',
  ],
  'server' => [
    'connect_error' => 'Ошибка подключения к серверу.',
    'response_not_found' => 'Сервер обновления не найден.',
    'response_invalid' => 'Неверный ответ сервера.',
    'response_empty' => 'Пустой ответ сервера.',
    'file_error' => 'Сервер не смог доставить пакет.',
    'file_corrupt' => 'Загруженный файл поврежден.',
  ],
  'behavior' => [
    'missing_property' => 'Класс :class должен содержать свойство $:property, используемое расширением :behavior.',
  ],
  'config' => [
    'not_found' => 'Не удалось найти конфигурационный файл :file, ожидаемый для :location.',
    'required' => 'Для конфигурации, используемой в :location не указано свойство \':property\'.',
  ],
  'zip' => [
    'extract_failed' => 'Невозможно извлечь файл \':file\'.',
  ],
  'event_log' => [
    'hint' => 'В этом журнале отображается список возможных ошибок, которые возникают в работе приложения, таких как исключения и отладочная информация.',
    'menu_label' => 'Журнал событий',
    'menu_description' => 'Просмотр системного журнала событий.',
    'empty_link' => 'Очистить журнал событий',
    'empty_loading' => 'Очищение журнала событий...',
    'empty_success' => 'Успешное очищение журнала событий.',
    'return_link' => 'Вернуться в журнал событий',
    'id' => 'ID',
    'id_label' => 'ID события',
    'created_at' => 'Дата & Время',
    'message' => 'Сообщение',
    'level' => 'Уровень',
    'preview_title' => 'События',
  ],
  'request_log' => [
    'hint' => 'В этом журнале отображается список запросов браузера, которые могут потребовать внимания. Например, если посетитель открывает несуществующую страницу, то в журнале создается запись с кодом статуса 404.',
    'menu_label' => 'Журнал запросов',
    'menu_description' => 'Просмотр неудачных или перенаправленных запросов.',
    'empty_link' => 'Очистить журнал запросов',
    'empty_loading' => 'Очищение журнала запросов...',
    'empty_success' => 'Успешное очищение журнала запросов.',
    'return_link' => 'Вернуться к журналу запросов',
    'id' => 'ID',
    'id_label' => 'ID записи',
    'count' => 'Счетчик',
    'referer' => 'Источник запроса',
    'url' => 'Адрес',
    'status_code' => 'Статус',
    'preview_title' => 'Запрос',
  ],
  'permissions' => [
    'name' => 'Система',
    'manage_system_settings' => 'Настройка системных параметров',
    'manage_software_updates' => 'Управление обновлениями',
    'access_logs' => 'Просмотр системных логов',
    'manage_mail_templates' => 'Управление почтовыми шаблонами',
    'manage_mail_settings' => 'Управление настройками почты',
    'manage_other_administrators' => 'Управление другими администраторами',
    'manage_preferences' => 'Управление настройками бэкенда',
    'manage_editor' => 'Управление настройками редактора кода',
    'view_the_dashboard' => 'Просмотр панели управления',
    'manage_default_dashboard' => 'Управление заглавным дашбордом',
    'manage_branding' => 'Персонализация панели управления',
  ],
  'log' => [
    'menu_label' => 'Настройки журналов',
    'menu_description' => 'Укажите для каких частей CMS следует вести журнал.',
    'default_tab' => 'Ведение журнала',
    'log_events' => 'Сохранять системные события',
    'log_events_comment' => 'Хранить системные события в базе данных в дополнение к файловому журналу.',
    'log_requests' => 'Сохранять неудачные запросы',
    'log_requests_comment' => 'Запросы браузера, которые могут потребовать внимания. Например, 404 ошибки.',
    'log_theme' => 'Сохранять изменения темы',
    'log_theme_comment' => 'Изменения которые внесены средствами CMS.',
  ],
  'media' => [
    'invalid_path' => 'Указан недопустимый путь к файлу: \':path\'.',
    'folder_size_items' => 'объектов',
  ],
  'page' => [
    'not_found' => [
      'label' => 'Страница не найдена',
      'help' => 'Невозможно найти запрашиваемую страницу.',
    ],
    'custom_error' => [
      'label' => 'Ошибка на странице',
      'help' => 'Нам жаль, но что-то пошло не так и страница не может быть отображена.',
    ],
    'invalid_token' => [
      'label' => 'Неправильный токен безопасности',
    ],
    'maintenance' => [
      'label' => 'Мы скоро вернемся!',
      'help' => 'В настоящее время мы закрыты на техническое обслуживание, вернитесь в ближайшее время!',
      'message' => 'Подробности:',
      'available_at' => 'Зайдите к нам после:',
    ],
  ],
  'pagination' => [
    'previous' => 'Назад',
    'next' => 'Вперед',
  ],
];
