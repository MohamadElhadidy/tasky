<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <title>{{ isset($title) ? "$title | " : 'Tasky' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="h-full">
    {{ $slot }}
</body>

</html>
