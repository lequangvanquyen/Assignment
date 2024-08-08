<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('admin.navbar')

        @include('admin.aside')


        <div class="content-wrapper">
            <div class="content-header">
                @yield('main-content')
            </div>
        </div>

    </div>
    @include('admin.script')
    @stack('scripts')
</body>

</html>
