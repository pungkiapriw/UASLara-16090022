<!DOCTYPE html>
<html lang="en">
<head>
    <title>Esportpedia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('private/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('private/assets/css/style1.css')}}">
    <link rel="stylesheet" href="{{ asset('private/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('private/assets/css/post.css') }}">
    <link rel="stylesheet" href="{{ asset('private/assets/css/util.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('private/assets/js/test.js') }}"></script>
    <script type="text/javascript" src="{{ asset('private/assets/js/bootstrap.min.js')}}"> </script>
    <script type="text/javascript" src="{{ asset('private/assets/js/jquery_3_3_1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('private/assets/js/hmtl5shiv.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('private/assets/js/respond.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('private/assets/js/main.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    
        @include('frontend/navbar')
        @yield('main')
    
 

    @include('frontend/footer')



</body>
</html>