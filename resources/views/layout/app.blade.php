<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('partial.headLinks')
</head>

<body class="body-bg-color-1">
    <div class="page-wrapper">
        @include('partial.header')
        @yield('content')
        @include('partial.footer')
        @include('partial.scriptLink')
    </div>
</body>

</html>