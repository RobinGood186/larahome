<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page.title', 'instagram')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
</head>
<body>



    <div class="d-flex flex-column justify-content-between min-vh-100">
        @include('includes.header')


        <div class="m-5">
        <main class="flex-grow-1 py-3">
            @yield('content')
        </main>
        </div>


        @include('includes.footer')

    </div>











    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"> </script>
</body>
</html>