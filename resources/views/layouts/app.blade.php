<!--
     _____                                             __                __
    /\  __`\                                          /\ \              /\ \
    \ \ \/\ \  __  __     __     __    ___     ____   \ \ \         __  \ \ \____
     \ \ \ \ \/\ \/\ \  /'__`\ /'__`\/' _ `\  /',__\   \ \ \  __  /'__`\ \ \ '__`\
      \ \ \\'\\ \ \_\ \/\  __//\  __//\ \/\ \/\__, `\   \ \ \L\ \/\ \L\.\_\ \ \L\ \
       \ \___\_\ \____/\ \____\ \____\ \_\ \_\/\____/    \ \____/\ \__/.\_\\ \_,__/
        \/__//_/\/___/  \/____/\/____/\/_/\/_/\/___/      \/___/  \/__/\/_/ \/___/

    Handcrafted with ❤ by Henrik

-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,500">
</head>
<body>
    @yield('content')
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
