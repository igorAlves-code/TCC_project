<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>A.S.R - Agendamento de Salas e Recursos</title>

    {{-- CSS Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    {{-- CSS da aplicação --}}
    <link rel="stylesheet" href="/css/styleMain.css">

    {{-- CSS Específico da página --}}
    <link rel="stylesheet" href="/css/stylePassword.css">

    {{-- Favicon do Site --}}
    <link rel="shortcut icon" href="/img/faviconASR.ico" type="image/x-icon">

</head>

<body>
    <header id="header">
        <img draggable="false" src="/img/logoEtec.png" />
    </header>

    <main>
        <div class="logo">
            <img draggable="false" src="/img/logoASR.png" />
        </div>

        <form action="{{ route('verification.send') }}" method="post" class="formChangePass">
            @csrf
            <div class="container">
                <div class="inputsContainer">
                    <p>Agradecemos por usar nosso sistema! Antes de começarmos, você poderia verificar seu endereço de
                        email clicando no link que enviamos para você? Se você não recebeu o email, nós poderemos te
                        enviar outro.</p>
                </div>


                <div class="inputsContainer">
                    <button id="EnvF" type="submit">Enviar email</button>
                </div>
            </div>

        </form>

        @if (session('success'))
            @include('layouts.modais.success')
            <script type="text/javascript">
                $('#success').modal('show');
            </script>
        @endif

    </main>

    <footer>&copy; Todos os direitos reservados</footer>
    <script src="/js/scriptChangePassword.js" defer></script>

</body>

</html>
