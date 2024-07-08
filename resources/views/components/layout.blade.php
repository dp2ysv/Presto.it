<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CDN FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CDN MDB -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="media/Presto-logo-redbg.png">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])
    <title>Presto.it - Team Prometheus</title>
</head>

<body>
    <x-nav />
    <x-post-nav />
    @if(Session('message'))
        <div class="alert alert-success" id="alertWrapper">
            {{Session('message')}}
        </div>
    @endif
    @if(Session('errormessage'))
        <div class="alert alert-danger" id="alertWrapper">
            {{Session('errormessage')}}
        </div>
    @endif
    <div>
        {{$slot}}
    </div>
    <x-footer />
    @livewireScripts
    <!-- CDN JS MDB -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script> -->
</body>

</html>