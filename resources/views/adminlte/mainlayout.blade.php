
<!DOCTYPE html>
<html>

@include('adminlte.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('adminlte.partials.navbar')

    @include('adminlte.partials.sidebar')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>
</div>
    @include('adminlte.partials.footer')
    @include('adminlte.partials.script')
</body>
</html>
