<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>A.S.R - Agendamento de Salas e Recursos</title>
    <link rel="shortcut icon" href="/img/faviconASR.ico" type="image/x-icon" />

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

    <link rel="stylesheet" href="css/styleLogin.css" />
</head>

<body>
    <header id="header">
        <img draggable="false" src="/img/logoEtec.png" />
    </header>

    <main>
        <div class="logo">
            <img draggable="false" src="/img/logoASR.png" />
        </div>
        <form class="loginForm" name="loginForm" method="post" action="{{ route('auth.user') }}">
            @csrf
            <div class="container">
                <div class="input-container">
                    <input type="text" id="email" class="text-input" autocomplete="off" name="email" />
                    <label class="label" for="email">Email</label>
                </div>
                <div class="input-container">
                    <input type="text" id="password" class="text-input pw" autocomplete="off" name="password" />
                    <label class="label" for="password">Senha</label>
                    <img id="eyePassword">
                </div>

                {{-- <div class="remember">
                    <input type="checkbox" name="remember" class="rememberInput"> Lembrar-me
                </div> --}}

                <div class="forgot-password">
                    <a href="{{ route('forgot-password') }}">Esqueceu a senha?</a>
                </div>

            </div>

            <div class="buttonContainer">
                <button class="loginButton">Enviar</button>
            </div>

        </form>

        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('danger') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session('success'))
            @include('layouts.modais.success')
            <script type="text/javascript">
                $('#success').modal('show');
            </script>
        @else
        @endif


        <footer>&copy; Todos os direitos reservados</footer>
        <script src="/js/scriptLogin.js"></script>
</body>

</html>
