<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>

<body id="page-top">
    <div id="wrapper">
        @include('layouts.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                @include('layouts.top-bar')

                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">@yield('title')</h1>
                    @yield('content')
                </div>
            </div>

            @include('layouts.footer')
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('layouts.js')

    @if(isset($dataTable))
        @include('layouts.table-js')
    @endif
</body>
</html>
