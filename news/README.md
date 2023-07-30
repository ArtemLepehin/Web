Шаблон для mvc был взят с сайта - http://code.mu/ru/php/book/oop/mvc/using/intro/

Основная работа содержится в папке project:

    1. Контент главной страницы - /project/views/news/main.php
    2. Контент страницы для конкретной новости - /project/views/news/newspage.php
    3. Шаблон страниц(header и footer) - /project/layout/default.php
    4. Класс News, содержащий все необходимые функции - /project/models/News.php
    5. Функции, запускающиеся в файле /project/config/routes.php и прогружающие страницы по нужным url - /project/controllers/NewsController.php
    