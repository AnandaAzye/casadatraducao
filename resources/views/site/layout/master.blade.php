<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=@yield('style')>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
  />
    <title>Document</title>
</head>
<body>
   @include('site.includes.header')
   @yield('content')
   @include('site.includes.script')
   @include('site.includes.footer')


</body>
</html>
