<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.templates.admin-head')
  <body class="app sidebar-mini rtl">
    <div id="app">
        @include('layouts.templates.admin-header')
        @include('layouts.templates.admin-sidebar')

        <main class="app-content">
             @include('layouts.templates.breadcrumb')
            @yield('content')
        </main>
    </div>
      <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/parsley.js') }}" ></script>
    <script src="{{ asset('js/toastr.min.js') }}" ></script>
    <script src="{{ asset('js/main.js') }}" ></script>
    {{-- <script src="{{ asset('js/toastr.min.js') }}" ></script> --}}
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    @include('includes.flash')
    @stack('custom_script')
</body>
</html>
