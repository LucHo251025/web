<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/swiper.js', 'resources/css/swiper.css' , 'resources/css/play.css'])
</head>
<body class="bg-amber-300 text-white">
    {{-- <livewire:components.header/> --}}
    @livewire('components.header')
    <main>
        {{$slot}}
    </main>
    {{-- <livewrire:play-page/> --}}
    {{-- <livewire:components.home-slider/> --}}
    @livewire('components.footer')

</body>
</html>