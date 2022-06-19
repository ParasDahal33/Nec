
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <title>Cosmos</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('backend/css/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/cosmos.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/application.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body class="layout layout-header-fixed layout-left-sidebar-fixed">
    <div class="site-overlay"></div>
  

    @yield('header')
    @yield('sidebar') 
    <div class='site-main'>
    @yield('content')
    @yield('footer')
    </div>

 

    <script src="{{asset('backend/js/vendor.min.js')}}"></script>
    <script src="{{asset('backend/js/cosmos.min.js')}}"></script>
    <script src="{{asset('backend/js/application.min.js')}}"></script>
    <script src="{{asset('backend/js/index.min.js')}}"></script>
    <script src="{{asset('backend/js/tables-datatables.min.js')}}"></script>
    <script src="{{asset('backend/js/ajax.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
 

  </body>

  <script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</html>    