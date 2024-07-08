<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css'])
    <title>Presto.it</title>
</head>

<body>
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center wrapper">
            <div class="col-12 text-center">
                <h1 class="display-5">L'utente {{$content['name']}} ha inviato una candidatura come admin</h1>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-6 bg-white min-vh-100 pt-5 d-flex flex-column align-items-center">
                <div class="col-8">
                    <h3>Nome Candidato:</h3>
                    <p>{{$content['name']}}</p>
                    <h3>Email Candidato:</h3>
                    <p>{{$content['email']}}</p>
                    <h3>Informazioni aggiuntive sul candidato:</h3>
                    <div>
                        {{$content['description']}}
                    </div>
                    <div class="d-flex justify-content-end align-items-center mt-5">
                        <a href="{{route('user.acceptadminrequest' , compact('user'))}}"><button class="acceptButton me-2">Accetta</button></a>
                        <a href="{{route('user.rejectadminrequest' , compact('user'))}}"><button class="rejectButton ms-2">Rifiuta</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>