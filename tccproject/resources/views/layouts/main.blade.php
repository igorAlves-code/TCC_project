<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- CSS Bootstrap --}}

    {{-- CSS da aplicação --}}
    <link rel="stylesheet" href="/css/styleMain.css">

        {{-- CSS Específico da página --}
        @yield('css')}

    {{-- Favicon do Site --}}
    <link rel="shortcut icon" href="/img/faviconASR.ico" type="image/x-icon">

</head>

<body>

    {{-- Cabeçalho da página --}}
    <header>
        <div class="header">
            <div class="navigation">
                <div><a href="/agendar">Agendar</a></div>
            </div>

             <div class="navigation">
                 <div><a href="/agendamentos">Agendamentos</a></div>
            </div>
  
            <div class="navigation">
                 <div><a href="/ocorrencia">Ocorrência</a></div>
            </div>
                
            <div class="exitButton">
                <button>
                    Sair
                </button>
            </div>
        </div>
    </header>
    

    {{--  -----------------------------------------HEADER MOBILE--------------------------------------------- --}}
    <div id="menuBar">
		<div id="menu" onclick="onClickMenu()">
			<div id="bar1" class="bar"></div>
			<div id="bar2" class="bar"></div>
			<div id="bar3" class="bar"></div>
		</div>
		<ul class="navigationigationMobile" id="navigationigationMobile">
			<li><a href="/agendar">AGENDAR</a></li>
			<li><a href="/agendamentos">AGENDAMENTOS</a></li>
			<li><a href="/ocorrencia">OCORRÊNCIA</a></li>
            <li><a href="#">SAIR</a></li>
		</ul>
	</div>
	<div class="menuBg" id="menuBg"></div>

    @yield('content')

    <footer>
        &copy; Todos os direitos reservados
    </footer>

    <script src="/js/scriptMain.js"></script>
</body>
</html>