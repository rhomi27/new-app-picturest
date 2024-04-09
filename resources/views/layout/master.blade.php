<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Picturest</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate/aos.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400..700&family=Handlee&display=swap"
        rel="stylesheet">
    @stack('css')
</head>
<style>
    body::-webkit-scrollbar {
        width: 0;
    }

    .scroll::-webkit-scrollbar {
        width: 0px;
    }
</style>

<body class="overflow-x-hidden">
    @yield('content')

    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
    <script>
        AOS.init();

        function goBack() {
            window.history.back();
        }
    </script>
    @stack('js')
</body>

</html>
