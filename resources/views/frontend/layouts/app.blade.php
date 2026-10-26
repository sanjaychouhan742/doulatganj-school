<!DOCTYPE html>
<html lang="hi">

<head>
    @include('frontend.layouts.header')
</head>

<body>

    <div class="page-wrapper">

        {{-- Navigation --}}
        @include('frontend.layouts.nav')

        {{-- Main Content --}}
        <main class="site-main">
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('frontend.layouts.footer')

    </div>

    {{-- Page Specific Scripts --}}
    @yield('js')

</body>

</html>
