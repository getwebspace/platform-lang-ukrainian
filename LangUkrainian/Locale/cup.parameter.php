<?php declare(strict_types=1);

return [
    // ***
    // Parameters
    // ***

    // tabs
    'Common' => 'Загальне',
    'Plugins' => 'Плагіни',
    'Variables' => 'Змінні',

    // subtabs
    'Main' => 'Основні',
    'Mail' => 'Пошта',
    'Files and images' => 'Файли та зображення',
    'Notifications' => 'Сповіщення',
    'Forms' => 'Форми',
    'Search Options' => 'Пошук',
    'Guestbook' => 'Гостьова книга',
    'API' => 'AПІ',
    'Templates' => 'Шаблони',
    'Group and access rights' => 'Група та права доступу',
    'Login options' => 'Параметри входу',
    'General' => 'Основні',
    'Import and Export' => 'Імпорт та Експорт',
    'Additionally' => 'Додатково',

    // common
    'The site is available to visitors' => 'Сайт доступний відвідувачам',
    'Can be used during maintenance and / or inventory' => 'Можна використовувати під час технічних робіт та/або інвентаризації',
    'Site title' => 'Назва сайту',
    'for example: "My home page"' => 'наприклад: "Моя домашня сторінка"',
    'Home page address' => 'Домашня сторінка сайту',
    'Enter the address of the home page of your site, including a slash at the end. For example: http://yoursite.com/' => 'Вкажіть адресу головної сторінки вашого сайту, включаючи слеш наприкінці. Наприклад: http://yoursite.com/',
    'Description (Description) of the site' => 'Опис (Description) сайту',
    'Short description, no more than 200 characters' => 'Короткий опис, не більше 200 символів',
    'Key words' => 'Ключові (Keywords) слова',
    'Comma separated' => 'Через кому',
    'Theme name' => 'Тема оформлення сайту',
    'Default: "default"' => 'За замовчуванням: "default"',
    'Theme auto-update' => 'Автооновлення теми',
    'The system will check for changes in the theme' => 'система перевірятиме зміни у темі оформлення',
    'May increase server load, not recommended in <code>Production</code> mode' => 'Може підвищити навантаження на сервер, не рекомендується в режимі <code>Production</code>',
    'Home page template' => 'Шаблон головної сторінки',
    'Timezone' => 'Часовий пояс',
    'Time format' => 'Формат часу',
    'Site language (code)' => 'Код мови сайту',
    'Sets the language of the site and the value of the attribute <code>&lt;html lang="en"&gt;</code>' => 'Задає мову сайту та значення атрибуту <code>&lt;html lang="ru"&gt;</code>',
    'For example: <code>en-US</code>' => 'Наприклад: <code>uk-UA</code>',
    'Automatically generate addresses' => 'Автоматично генерувати адреси',
    'Some entity addresses will automatically include the category address' => 'Адреси деяких сутностей автоматично включатимуть адресу категорії',
    'System E-Mail Address' => 'Системний E-Mail адрес',
    'From this address, site messages will be sent, for example, user notifications, mailings, confirmations, etc. Note: some free mail services, for example yandex.ru, require that the address registered on their mail service be specified as the sender E-Mail address.' => 'Від цієї адреси будуть надсилатися повідомлення сайту, наприклад, повідомлення користувачів, розсилки, підтвердження тощо. Примітка: деякі безкоштовні поштові сервіси, наприклад yandex.ru, вимагають, щоб як E-Mail адреса відправника була вказана саме адреса, зареєстрована на їхньому поштовому сервісі',
    'Sender name' => 'Ім\'я відправника',
    'This name will be attached to the letter as the name of the sender' => 'Це ім\'я буде прикріплено до листа як ім\'я відправника',
    'Email subject' => 'Заголовок при надсиланні листів',
    'When sending letters from the site, you can specify a header that will be added to the sender mail. For example, you can specify the short name of your site there.' => 'При надсиланні листів із сайту ви можете вказати заголовок, який додаватиметься до пошти відправника. Наприклад, ви можете там вказати коротку назву вашого сайту',
    'SMTP server host' => 'Хост SMTP сервера',
    'Usually - localhost' => 'Зазвичай - localhost',
    'SMTP server port' => 'Порт SMTP сервера',
    'Usually — 465' => 'Зазвичай — 465',
    'Use secure protocol to send emails through SMTP server' => 'Використовувати захищений протокол для надсилання листів через сервер SMTP',
    'Select the encryption protocol when sending emails using an SMTP server' => 'Виберіть протокол шифрування під час надсилання листів за допомогою SMTP сервера',
    'SMTP username' => 'SMTP ім\'я користувача',
    'SMTP password' => 'SMTP пароль',
    'Not required in most cases when using "localhost"' => 'Не потрібно у більшості випадків, коли використовується "localhost"',
    'The required parameters can be found in the account settings, in' => 'Необхідні параметри можна знайти в налаштуваннях облікового запису, у',
    'the API tab' => 'вкладці API',
    'Enable File Upload' => 'Увімкнути завантаження файлів',
    'Allows users to upload files to the site' => 'дозволяє користувачам завантажувати файли на сайт',
    'Allow conversion of uploaded images' => 'Дозволити конвертацію завантажених зображень',
    'Uploading images to the server will be allowed' => 'Буде дозволено завантаження картинок на сервер',
    'Minimum file size' => 'Мінімальний розмір файлу',
    'Smaller files will not be converted' => 'Файли меншого розміру не будуть конвертовані',
    'Size of a small preview of a copy of the uploaded image' => 'Розмір невеликої копії завантаженого зображення.',
    'Average copy size of uploaded image' => 'Розмір середньої копії завантаженого зображення',
    'You can specify 0 if you do not want to create preview copies of uploaded images to the server' => 'Ви можете вказати 0, якщо не бажаєте створювати прев\'ю копії завантажуваних картинок на сервер',
    'ImageMagick executable' => 'Виконавчий файл ImageMagick',
    'ImageMagick options' => 'Параметри ImageMagick',
    'Enable Notifications' => 'Включити повідомлення',
    'Notification display period' => 'Період відображення повідомлень',
    'Specify the number of hours for which to display notifications' => 'Вкажіть кількість годин, за які відображатиметься повідомлення',
    'hours' => 'годин',
    'Enable Forms' => 'Включити форми',
    'Ability to create forms to receive completed questionnaires from clients' => 'Можливість робити форми для отримання заповнених анкет від клієнтів',
    'Enable Search' => 'Увімкнути пошук',
    'Search Page Template' => 'Шаблон сторінки пошуку',
    'Number of results' => 'Кількість результатів',
    'Maximum number of search results' => 'Максимальна кількість результатів під час пошуку',
    'Enable guest book' => 'Включити гостьову книгу',
    'Allows users to leave feedback about the site' => 'Дозволяє користувачам залишати відгуки про сайт',
    'Guest book template' => 'Шаблон гостьової книги',
    'Number of entries per page' => 'Кількість записів на сторінку',
    'Enable API Access' => 'Увімкнути доступ до API',
    'Allows you to programmatically receive data from the site' => 'Дозволяє програмно отримувати дані із сайту',
    'API access' => 'Доступ до API',
    'Restricts access rights' => 'Розмежовує права доступу',
    'API access keys' => 'Ключі доступу до API',
    'The ability to make changes via the API is only available if you have a key' => 'Можливість вносити зміни по API є лише за наявності ключа',
    'Generate new' => 'Згенерувати новий',
    'Each key on a new line' => 'Кожен ключ з нового рядка',

    // users
    'Enable Users' => 'Включити користувачів',
    'Allows users to register on the site' => 'Дозволяє користувачам реєструватися на сайті',
    'Login page template' => 'Шаблон сторінки авторизації',
    'Registration page template' => 'Шаблон сторінки реєстрації',
    'Password recovery page template' => 'Шаблон сторінки відновлення пароля',
    'User profile page template' => 'Шаблон сторінки профілю користувача',
    'User group (default)' => 'Група користувача (за замовчуванням)',
    'The new user will be automatically added to the selected group' => 'Новий користувач автоматично додаватиметься до вибраної групи',
    'Permissions (default)' => 'Права доступу (за замовчуванням)',
    'The specified access rights will also be applied to an unregistered user' => 'Зазначені права доступу також будуть застосовані для незареєстрованого користувача',
    'Authorization method on the site' => 'Метод авторизації на сайті',
    'You can choose how users will be authorized on the site' => 'Ви можете вибрати, яким способом проводитиметься авторизація користувачів на сайті.',
    'List mode' => 'Варіант роботи списку',
    'List of domains for registration' => 'Список доменів для реєстрації',
    'Each domain on a new line' => 'Кожен домен з нового рядка',
    'Enable code sign-in' => 'Увімкнути вхід через код',
    'When authorizing the user, it will be possible to confirm the identity through the code sent to the mail' => 'При авторизації користувача буде можливість підтвердження особи через надісланий на пошту код',
    'Authorization letter template with code' => 'Шаблон листа для авторизації з кодом',
    'Open authorization protocol' => 'Відкритий протокол авторизації',
    'Before filling, see the <a href="https://github.com/getwebspace/platform/wiki/oAuth" target="_blank">documentation</a>' => 'Перед заповненням див. <a href="https://github.com/getwebspace/platform/wiki/oAuth" target="_blank">документацію</a>',

    // catalog
    'Enable Catalog' => 'Включити каталог',
    'Ability to manage categories, products and orders' => 'Можливість керувати категоріями, товарами та замовленнями',
    'Section address' => 'Адреса розділу',
    'Section template' => 'Шаблон розділу',
    'Default value, this value will also be used for the main page of the catalog' => 'Значення за замовчуванням, також це значення буде використане для головної сторінки каталогу',
    'Cart template' => 'Шаблон корзини',
    'Order template' => 'Шаблон замовлення',
    'Criteria for sorting goods' => 'Критерій сортування товарів',
    'Order of sorting goods' => 'Порядок сортування товарів',
    'The default value, this value will also be used to limit the number of products on the main page' => 'Значення за замовчуванням, також це значення буде використано для обмеження кількості товарів на головній сторінці',
    'Default value' => 'Значення за замовчуванням',
    'Enabling and disabling sending an email to a client' => 'Увімкнення та вимкнення надсилання листа клієнту',
    'Client mail template' => 'Шаблон листа клієнту',
    'Enabling and disabling sending a email to the administrator' => 'Увімкнення та вимкнення надсилання листа адміністратору',
    'Administrator mail template' => 'Шаблон листа адміністратору',
    'If there is no value, the email will not be sent' => 'Якщо значення немає, лист не надсилатиметься',

    'Action' => 'Дія',
    'Required data action on import' => 'Необхідна дія з даними під час імпорту',
    'Indentation in lines' => 'Відступ у рядках',
    'Number of lines to indent from top' => 'Кількість рядків, які потрібно відступити зверху',
    'Indentation in columns' => 'Відступ у колонках',
    'Number of columns to indent from the left' => 'Кількість колонок, які необхідно відступити зліва',
    'Key field' => 'Ключове поле',
    'Field will be used to search for a product' => 'Дане поле буде використано для пошуку товару',
    '<b>Important</b>: field value must be unique!' => '<b>Важливо</b>: значення поля має бути унікальним!',
    '<b>Import</b> column order' => 'Порядок колонок <b>Імпорту</b>',
    '<b>Export</b> column order' => 'Порядок колонок <b>Експорт</b> ',
    'Skip column:' => 'Пропустити колонку:',
    'Alias each column on a new line' => 'Аліас кожної колонки з нового рядка',

    'Handling cart fields' => 'Обробка полів корзини',
    'Additional fields passed with the cart will be added to the end of the comment field' => 'Додаткові поля, передані з корзиною, будуть додані до кінця поля коментаря',
    'Address lines in cart' => 'рядки адреси у кошику',
    'Allows you to pass the address as a numbered array of strings' => 'Дозволяє передавати адресу у вигляді нумерованого масиву рядків',
    'Additional field' => 'Додаткове поле',
    'Volumetric weight' => 'Об\'ємна вага',
    'Divisor' => 'Коефіцієнт-ділителя',
    'W(cm) &times; H(cm) &times; L(cm) / X = Vw(kg)' => 'Ш(см) &times; В(см) &times; Д(см) / X = ОВ(кг)',

    // user auth by
    'username' => 'Iм\'я користувача',
    'email' => 'Eелектронна пошта',
    'phone' => 'Телефон',

    // user email list mode
    'blacklist' => 'Чорний список',
    'whitelist' => 'Білий список',

    // plugins
    'Turning reCAPTCHA on and off' => 'Увімкнення та вимкнення reCAPTCHA',
    'Robot protection' => 'Захист від роботів',
    'Public key of the reCAPTCHA service' => 'Публічний ключ сервісу reCAPTCHA',
    'This key will be used in the HTML code of the site for users devices' => 'Цей ключ буде використаний у HTML-коді сайту на пристрої користувачів',
    'reCAPTCHA secret key' => 'Секретний ключ сервісу reCAPTCHA',
    'This key is needed for communication between the site and the reCAPTCHA service. Do not tell it to anyone' => 'Цей ключ потрібен для зв\'язку між сайтом та сервісом reCAPTCHA. Нікому його не повідомляйте',

    // variables
    'In this settings section, you can set additional global variables that can be easily used in a template.' => 'У цьому розділі налаштувань можна встановити додаткові глобальні змінні, які можна легко використовувати у шаблоні.',
    'variable named' => 'змінну з ім\'ям',
    'can be displayed on the page using the following code:' => 'можна вивести на сторінку за допомогою наступного коду:',
    'New variable name' => 'Ім\'я нової змінної',
    'Only latin letters are allowed: <code>[A-Za-z]</code>' => 'Допустимі лише латинські літери: <code>[A-Za-z]</code>',
];
