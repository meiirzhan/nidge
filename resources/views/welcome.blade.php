<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NIDGE - агенство по разработке веб-сайтов, веб и мобильных приложении.</title>
        <meta name="description" content="Нарисуем, разработаем мощный и крутой продукт для Вашего бизнеса.">
        <meta name="keywords" content="Разработка сайтов, разработка мобильного приложения, разработка CRM системы, студия для разработки стартапа, создание сайтов, создание интернет-магазина, корпоративный сайт, CRM система">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta property="og:image:width" content="1190">
        <meta property="og:image:height" content="623">
        <meta property="og:title" content="NIDGE - агенство по разработке веб-сайтов, веб и мобильных приложении.">
        <meta property="og:url" content="http://nidge.kz">
        <meta property="og:image" content="http://nidge.kz/img/og-image.jpg">
        <meta property="og:description" content="Нарисуем, разработаем мощный и крутой продукт для Вашего бизнеса.">
        <!-- Styles -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700|Rubik:400,700,900&amp;subset=cyrillic" rel="stylesheet">
    </head>
    <body>
        <div id="app">
          <ndg-header></ndg-header>
          <router-view></router-view>
          <ndg-footer></ndg-footer>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
