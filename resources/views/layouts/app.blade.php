

@props(['title' => ''])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{$title}}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles
    @stack('styles')
    <script type="text/javascript" src="{{asset('/js/app.js')}}" defer></script>
    <!-- Scripts -->
    @stack('script')
    <style>
        *{
            transition : all 0.2s;
        }
        [x-cloak]{
            display:  none;
        }
    </style>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    <x-layout.header ></x-layout.header>
    <main class="-mt-24 pb-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <h1 class="sr-only">Page title</h1>

            <div class="grid grid-cols--1 gap-4 items-start {{ isset($right) ? 'lg:grid-cols-3' : '' }} lg:gap-8">

                <div class="grid grid-cols-1 gap-4 lg:col-span-2">
                    <section aria-labelledby="section-1-title">
                        <h2 class="sr-only" id="section-1-title">{{$title}}</h2>
                        <div class="rounded-lg bg-white overflow-hidden shadow">
                            <div class="p-6">
                                {{ $main }}
                            </div>
                        </div>
                    </section>
                </div>
                @isset($right)
                <div class="grid grid-cols-1 gap-4">
                    <section aria-labelledby="section-2-title">
                        <h2 class="sr-only" id="section-2-title">Section title</h2>
                        <div class="rounded-lg bg-white overflow-hidden shadow">
                            <div class="p-6">
                                {{$right}}
                            </div>
                        </div>
                    </section>
                </div>
                @endisset
            </div>
        </div>
    </main>
    <footer>
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            @isset($footer)
                {{$footer}}
            @endisset
        </div>
    </footer>
</div>
<x-notification-tracker></x-notification-tracker>
@stack('modals')
@livewireScripts
@stack('body-script')
</body>

</html>
