<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Raw</title>

      <meta name="description" content="This is my example project where i put all together what i learned, esp in design">
      <meta name="author" content="CoreProc, Inc.">
      <meta name="robots" content="noindex, nofollow">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <!-- Fonts and Styles -->
      @yield('css_before')
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
      <link rel="stylesheet" id="css-main" href="{{ asset('css/app.css') }}">

    </head>
    <body>



    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      ($(function () {
        alert('fasd')
      }))
    </script>
    @yield('js_after')
    </body>
</html>
