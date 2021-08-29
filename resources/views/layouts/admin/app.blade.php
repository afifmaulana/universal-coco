<!DOCTYPE html>
<html>
<x-admin.head />

<body>
    <div class="wrapper">
        <x-admin.navbar />
        <x-admin.sidebar />
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            {{-- <x-admin.footer/> --}}
        </div>
    </div>
    </div>

</body>

<x-admin.scripts />

@stack('scripts')

</html>
