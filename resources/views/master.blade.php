<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <title>Document</title>
</head>
<body>
    @section('sidebar')

    <div class="container">
        <h1>App Laravel</h1>
        @yield('content')
    </div>
</body>
</html>