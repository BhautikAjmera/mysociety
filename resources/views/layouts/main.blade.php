<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-no-customizer">
    
    @include('layouts.header')

    <body>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                @include('layouts.sidebar')
        
                <div class="layout-page">
                    @include('layouts.body.header')

                    <div class="content-wrapper">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            @yield('content')
                        </div>
                    </div>
                    
                    @include('layouts.body.footer')
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </body>
</html>


