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

    {{-- CSS Específico da página --}}
    <link rel="stylesheet" href="/css/styleLogin.css">

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

        <form action="{{ route('forgot-password.link') }}" method="post" class="loginForm">
            @csrf
            <div class="container">

            <div class="passwordText">
            <p>Informe seu endereço de e-mail e enviaremos um link para <strong>redefinição de senha</strong></p>
            </div>

                <div class="input-container">
                    <input type="email" id="email" name="email" class="text-input" value="{{ session('email') }}">
                    <label class="label" id="labelEmail" for="email">Email</label>
                </div>
            </div>
            
            <div class="buttonContainer">
                <button class="loginButton" type="submit">Enviar email de redefinição</button>
            </div>
        </form>


        @if (session('success'))
            @include('layouts.modais.success')
            <script type="text/javascript">
                $('#success').modal('show');
            </script>
        @else
        @endif

    </main>

    <footer>&copy; Todos os direitos reservados</footer>
    <script src="/js/scriptChangePassword.js" defer></script>

</body>

</html>
