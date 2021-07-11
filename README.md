<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Запуск Laravel
1) Нужно скопировать .env файл от .env.example `cp .env.example .env`
2) Нужно запустить команду чтобы сгенерировать ключ `php artisan key:generate`
3) Нужно запустить команду ` php artisan serve ` и перейти к http://127.0.0.1:8000/

## Discounts & Faqs
Все дискаунты и faqs реализованы в массиве в файле MainController.php.  
По началу хотел полностью реализовать всю страницу через Laravel Voyager Admin Panel. Но затем подумал, что необходимо будет еще подключить базу данных для этого. А для вашей проверки, чтобы развернуть проект, будет проще реализовать через массив без бд.

## Задача
Тестовое - Веб-разработчик


http://i.privado.wtf/alexmatus/testpsd.psd - пример страницы вебсайта.


Тестовое задание - реализовать страницу из исходного файла выше.

Шаги:

1. Вёрстка HTML из PSD

2. Реализация FAQ используя JS

3. Релаизация Discounts используя PHP


Пояснения:

- Для верстки можно использовать boostrap (но необязательно)

- Меню линковать не нужно (пустые ссылки проставить #)

- Раскрытие FAQ нужно реализовать на JS любым средством (самостоятельно написать, либо jQuery, либо любой готовый фреймворк или компонент)

- Вывод Discounts надо реализовать на PHP любым образом (либо страница будет PHP-скриптом, который из массива будет брать данные для блока Discounts и в цикле выводить 3 Discount-а, либо подключать внешний фреймворк или модуль, главное это реализовать динамически, чтобы где-то были заданы Discounts со свойствами, и добавляя в этот список новый элемент - план отображался на странице)


