<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    <script src="https://whole-pens.bouchcontracting.com/script.js" data-site="EGHXRYDK" defer></script>
</head>

<body class="text-gray-900 font-sans">
    @yield('body')

    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>