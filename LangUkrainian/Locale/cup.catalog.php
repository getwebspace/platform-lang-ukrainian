<?php declare(strict_types=1);

return [
    // ***
    // Catalog
    // ***

    // system install
    'New' => 'Новий',
    'Processing' => 'В опрацюванні',
    'Sent' => 'Відправлено',
    'Delivered' => 'Доставлено',
    'Canceled' => 'Скасовано',
    'Kilogram' => 'Килограм ', 'кг' => 'kg',
    'Gram' => 'Грам', 'г' => 'g',
    'Liter' => 'Літр', 'л' => 'l',
    'Milliliter' => 'Міліметр', 'мл' => 'ml',

    // sidebar
    'Order added' => 'Добавлено замовлення',

    // attributes
    'string' => 'Рядок',
    'integer' => 'Ціле',
    'float' => 'Дробове',
    'boolean' => 'Булеве',

    // product type
    'product' => 'Продукт',
    'service' => 'Сервіс',

    // attributes page
    'Attributes' => 'Атрибути',
    'List of attributes' => 'Список атрибутів',
    'Create attribute' => 'Створити атрибут',
    'Add attribute' => 'Добавити атрибут',
    'Creating a new attribute' => 'Створити новий атрибут',
    'Editing an Attribute' => 'Редагувати атрибут',
    'Are you sure you want to delete the attribute?' => 'Ви справді бажаєте видалити атрибут?',
    '<b>Warning</b>: The Boolean type can only be added to a category.' => '<b>Увага</b>: тип "Булеве" можна добавити лише до категорії.',
    'Attribute name. You can leave it blank, then the value will be generated automatically. Only Latin characters and numbers without spaces are allowed' => 'Назва атрибута. Можна залишити пустим, тоді значення буде згенеровано автоматично. Допустиме використання лише латинських символів та цифер без пропусків',

    // category
    'Brief description of the category' => 'Короткий опис категорії',
    'Are you sure you want to delete a category?' => 'Ви справді бажаєте видалити категорію?',
    'Category description' => 'Опис категорії',
    'Number of products per page' => 'Кількість товарів на сторінку',
    'Specify individual attributes for the category' => 'Вкажіть індивідуальні атрибути для категорій',
    'Fields' => 'Поля',
    'Field' => 'Поле',
    'Individual field' => 'Індивідуальне поле',
    'Field name' => 'Назва поля',
    'Customized product field' => 'Інедивідуальне поле продукту',
    'Sort order' => 'Порядок',
    'Name of category. You can leave it blank, then the value will be generated automatically. It is allowed to use only Latin characters and numbers without spaces' => 'Назва категорії. Можна залишити пустим, тоді значення буде сгенеровано автоматично. Допустиме використання лише латинських символів та цифер без пропусків',
    'Specify the name of the template you want to use for this category or leave <b>catalog.category.twig</b>' => 'Вкажіть назву шаблона, якийбажаєте використати для даної категорії або залиште <b>catalog.category.twig</b>',
    'Specify the name of the template you want to use for products in this category or leave <b>catalog.product.twig</b>' => 'Вкажіть назву шаблона, якийбажаєте використати для товарів у даній категорії або залиште <b>catalog.product.twig</b>',

    // product
    'Import products' => 'Імпорт продуктів',
    'Export current product list' => 'Експорт поточного списку продуктів',
    'Create product' => 'Створити продукт',
    'Объем упаковки' => 'Об\'єм упаковки',
    'Are you sure you want to uninstall the product?' => 'Ви справді бажаєте видалити продукт',
    'Product editing' => 'Редагування продукту',
    'Product' => 'Продукт',
    'Related' => 'Супутнє',
    'Brief product description' => 'Короткий опис товару',
    'Food' => 'Їжа',
    'Description' => 'Опис товару',
    'Manufacturer' => 'Виробник',
    'Vendor code' => 'Артикул',
    'Barcode' => 'Штрих код',
    'First price' => 'Ціна закупівлі',
    'Selling price' => 'Ціна продаж',
    'Price wholesale' => 'Оптова ціна',
    'Discount' => 'Знижка',
    'Tax' => 'Податок',
    'Special' => 'Акція',
    'Width (cm)' => 'Ширина (см)',
    'Height (cm)' => 'Висота (см)',
    'Length (cm)' => 'Довжина (см',
    'Volume' => 'Об\'єм',
    'Depends on the chosen dimension' => 'Залежить від обраної розмірності',
    'Dimension' => 'Розмірність',
    'In stock' => 'На складі',
    '<b>Related products</b> are those products that the buyer uses together with already purchased goods that help them use, complement it, eliminate the consequences of using goods, are its replaceable parts, consumables, etc.' => '<b>Супутні товари</b> це ті товари, які покупець використовує разом з вже купленим товаром, які допомагають ним користуватися, доповнюють його, усувають наслідки від використання товару, є його змінними деталями, витратним матеріалом тощо ',
    'Add product' => 'Додати продукт',
    'Choose a category' => 'Виберіть категорію',
    'Choose a product' => 'Виберіть товар',
    'Attribute from category' => 'Атрибут категорії',
    'Yes' => 'Так',
    'Specify individual attributes of the product' => 'Вкажіть індивідуальні атрибути товару',
    'Product Name. You can leave it blank, then the value will be generated automatically. It is allowed to use only Latin characters and numbers without spaces' => 'Назва товару. Можна залишити пустим, тоді значення буде згенеровано автоматично. Допустиме використання лише латинських символів та цифер без пропусків',
    'Additional description' => 'Додатковий опис товару',

    // order
    'Invoice template' => 'Шаблон інвойсу',
    'Order statuses' => 'Статуси замовлення',
    'List of orders' => 'Список замовлень',
    'Create order' => 'Створити замовлення',
    'Client' => 'Клієнт',
    'Delivery and status' => 'Доставка та статус',
    'Are you sure you want to delete the order?' => 'Ви справді бажаєте видалити замовлення?',
    'Create a new order' => 'Створення нового замовлення',
    'Edit order' => 'Змінити замовлення',
    'Client name' => 'ФІО Клієнта',
    'Delivery address' => 'Адреса доставки ',
    'Delivery date' => 'Дата доставки',
    'Technical information' => 'Технічна інформація',
    'Order list' => 'Деталі замовлення',

    // order status
    'Create status' => 'Створити статус',
    'Are you sure you want to delete the order status?' => 'Ви спраівді бажаєте видалити статус замовлення?',
    'Create a new order status' => 'Створення нового статусу замовлення',
    'Edit order status' => 'Редагування статусу замовлення',

    // order invoice
    'Invoice' => 'Накладна',
    'Order' => 'Замовлення',
    'Delivery' => 'Доставка',
    'Item' => 'Позиція',
    'Price' => 'Ціна',
    'Quantity' => 'Кількість',
    'Sum' => 'Сума',
    'Total price' => 'Загалом',
];
