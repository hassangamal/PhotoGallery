<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PhotoGallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css" />
    <script src="main.js"></script>

</head>
<body>
    @include('inc.topbar')
    <br>
    <div class="row">
    @include('inc.messages')    
    @yield('content')
    </div>
</body>
</html>