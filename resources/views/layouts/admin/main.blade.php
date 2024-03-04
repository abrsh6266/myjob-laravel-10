@include('layouts.admin.header')

<body class="sb-nav-fixed">
    @include('layouts.admin.navbar')
    <div id="layoutSidenav" class="flex">
        @include('layouts.admin.sidebar')
        <div id="layoutSidenav_content" class="w-full">
            {{-- @include('layouts.admin.body') --}}
            <main>
                {{ $slot }}
            </main>
            @include('layouts.admin.footer')
        </div>
    </div>
</body>

</html>