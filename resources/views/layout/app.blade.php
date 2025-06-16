<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kings United</title>
    @include('partial.links.headLinks')
    @stack('style')
</head>

<body class="body-bg-color-1">
    <div class="page-wrapper">
        @include('partial.componants.header')
        @yield('content')
        @include('partial.componants.footer')
        @include('partial.links.scriptLink')
    </div>
</body>

</html>