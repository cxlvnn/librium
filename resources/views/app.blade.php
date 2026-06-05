<!DOCTYPE html>
<html lang="en" data-theme="bookshelf-dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <x-inertia::head />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter+Tight:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
</head>

<body class="font-serif antialiased">
    <x-inertia::app />
</body>

</html>
