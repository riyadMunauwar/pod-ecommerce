<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

        <title>{{ $title }}</title>

        <!-- Sweet Alert -->
        <link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">

        <!-- Css -->
        <link href="{{ asset('techwind-assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet" type="text/css">
       
        <!-- Main Css -->
        <link href="{{ asset('techwind-assets/libs/iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('techwind-assets/libs/mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('techwind-assets/css/tailwind.css') }}" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles For This Page -->
        @stack('styles')

        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

        @include('front.partials.loader')

        <livewire:front.partials.header />

        <main>
            {{ $slot }}
        </main>

        <livewire:front.partials.footer />

        @include('front.partials.cookie-popup')
        @include('front.partials.back-to-top')
        @include('front.partials.mode-switcher')
        @include('front.partials.ltr-rtr-mode')

        @stack('modals')

        @stack('scripts')

        @livewireScripts

        <!-- Sweet Alert -->
        <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>

        <!-- Start Techwind Dependency & Iinit Js -->
        <script src="{{ asset('techwind-assets/libs/shufflejs/shuffle.min.js') }}"></script>
        <script src="{{ asset('techwind-assets/libs/jarallax/jarallax.min.js') }}"></script>
        <script src="{{ asset('techwind-assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
        <script src="{{ asset('techwind-assets/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('techwind-assets/js/plugins.init.js') }}"></script>
        <script src="{{ asset('techwind-assets/js/app.js') }}"></script>
        <!-- End Techwind Dependency & Iinit Js -->


        <!-- Sweet Alert Cinfig -->
        <script>

            @if(session()->has('swalToastOptions'))

                @php 
                    $swalToastOption = session('swalToastOptions');
                @endphp 

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    confirmButtonColor: '',
                    timer: 3000,
                    timerProgressBar: true,
                    color: "{{ $swalToastOption['color'] }}",
                    iconColor: "{{ $swalToastOption['iconColor'] }}",
                    background: "{{ $swalToastOption['background'] }}",
                });
                
                Toast.fire({
                    icon: "{{ $swalToastOption['icon'] }}",
                    title: "{{ $swalToastOption['title'] }}",
                })

            @endif

            @if(session()->has('swalAlertOptions'))

                @php 
                    $swalOption = session('swalAlertOptions');
                @endphp 

                Swal.fire({
                    showConfirmButton: true,
                    confirmButtonColor: '',
                    color: "{{ $swalOption['color'] }}",
                    iconColor: "{{ $swalOption['iconColor'] }}",
                    background: "{{ $swalOption['background'] }}",
                    icon: "{{ $swalOption['icon'] }}",
                    title: "{{ $swalOption['title'] }}",
                    text: "{{ $swalOption['text'] }}",
                });

            @endif

            window.addEventListener("DOMContentLoaded", function(){
                
                window.addEventListener('swal:toast', function(event){

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        confirmButtonColor: '',
                        timer: 3000,
                        timerProgressBar: true,
                        color: event.detail.color,
                        iconColor: event.detail.iconColor,
                        background: event.detail.background,
                    });
                    
                    Toast.fire({
                        icon: event.detail.icon,
                        title: event.detail.title,
                    })

                })

                window.addEventListener('swal:alert', function(event){

                    Swal.fire({
                        showConfirmButton: true,
                        color: event.detail.color,
                        iconColor: event.detail.iconColor,
                        background: event.detail.background,
                        icon: event.detail.icon,
                        title: event.detail.title,
                        text: event.detail.text,
                    });

                })

                window.addEventListener('swal:confirm', function(event){

                    Swal.fire({
                        showConfirmButton: true,
                        showCancelButton: true,
                        showCloseButton: true,
                        confirmButtonText: 'Yes, Delete it !',
                        cancelButtonText: 'Cacnel',
                        confirmButtonColor: '',
                        cancelButtonColor: '',
                        color: event.detail.color,
                        iconColor: event.detail.iconColor,
                        background: event.detail.background,
                        icon: event.detail.icon,
                        title: event.detail.title,
                        text: event.detail.text,
                        buttons: true,
                        dangerMode: true,
                    })
                    .then(function({isConfirmed}){

                        if(isConfirmed){
                            window.livewire.emit(event.detail.event, event.detail.payload)
                        }

                    })

                })
            });

        </script>
    </body>
</html>
