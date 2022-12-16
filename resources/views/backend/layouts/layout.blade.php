<!DOCTYPE html>
<html lang="en">

<head>
    <!----------- CSS & META START----------->
    @include('backend.includes.css')
    <!------------- CSS & META END ----------->
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!------------- NAVBAR START --------------->
        @include('backend.includes.navbar')
        <!------------- HEADER NAV END ------------->

        <!------------- SIDEBAR START ------------->
        @include('backend.includes.sidebar')
        <!------------- SIDEBAR END ------------->

        <!------------- MAIN CONTENT START ------------->
        <div class="content-wrapper">
            @yield('admin_content')
        </div>
        <!------------- MAIN CONTENT END ------------->

        <!------------- FOOTER START ------------->
        @include('backend.includes.footer')
        <!------------- FOOTER END ------------->

        <!------------- SCRIPT END ------------->
        @include('backend.includes.script')
        <!------------- SCRIPT END ------------->

        <!------------- CUSTOME SCREPT  ------------->
        <div class="custome-script-wrapper">
            @yield('custome_script')
        </div>

        <!------------- CUSTOME SCREPT END ------------->



</body>

</html>
