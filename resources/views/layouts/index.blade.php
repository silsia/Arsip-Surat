    <!-- menampilkan header -->
    @include('layouts.header')
    <!-- menampilkan navbar -->
    @include('layouts.navbar')
    <!-- menampilkan sidebar -->
    @include('layouts.sidebar')
    <!-- menampilkan content -->
    @yield('content')
    <!-- menampilkan footer -->
    @include('layouts.footer')

    @stack('script')