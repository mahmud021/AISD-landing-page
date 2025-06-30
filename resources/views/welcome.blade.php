<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Preload and load Google Fonts (deduplicated) -->
    <link rel="preload" as="style"
          href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lexend:wght@800&family=Rubik:wght@700&family=Teachers:wght@700&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lexend:wght@800&family=Rubik:wght@700&family=Teachers:wght@700&display=swap"
        rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F8F8F8]">
@include('dashboard.section.hero')
@include('dashboard.section.about')
@include('dashboard.section.paace')
@include('dashboard.section.partners')
@include('dashboard.section.projects')
@include('dashboard.section.stats')
@include('dashboard.section.volunteers')
@include('dashboard.section.gallery')
@include('dashboard.section.contact-us')
@include('dashboard.section.footer')

<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>
</body>
</html>
