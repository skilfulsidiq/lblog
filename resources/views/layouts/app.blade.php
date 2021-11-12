<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.templates.head')
<body>
    <div id="app">
        @include('layouts.templates.header')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
      <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/parsley.js') }}" defer></script>
    <script src="{{ asset('js/toastr.min.js') }}" defer></script>
    @include('includes.flash')
    @stack('custom_script')
</body>
</html>
