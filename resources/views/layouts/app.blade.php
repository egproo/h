<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'موقعي')</title>
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <a href="{{ url('/') }}" class="text-2xl font-bold">حريص</a>
            <!-- يمكنك إضافة روابط أخرى هنا -->
        </div>
    </nav>

    <div class="container mx-auto mt-5 p-4">
        @yield('content')
    </div>

    <footer class="bg-blue-600 text-white p-4 mt-5">
        <div class="container mx-auto text-center">
            جميع الحقوق محفوظة © 2023
        </div>
    </footer>

</body>
</html>
