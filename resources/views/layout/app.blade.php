@include('layout.header')

<div class="d-flex flex-column min-vh-100">
    @include('layout.sidebar')

    <div class="content-wrapper flex-grow-1">
        <div class="content">
            @yield('content')
        </div>
    </div>


</div>
</div>
@include('layout.footer')
</body>

</html>
