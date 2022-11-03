Olá {{ $nome }} {{ $sobrenome }}! <br><br>

Seja bem-vindo ao sistema ASR - Agendamento de Salas e Recursos da ETEC Dr Celso Giglio!! <br><br>

Aqui estão seus dados para acesso: <br><br>

Email: {{ $to }} <br>
Senha: {{ $senha }} <br>
Disciplina: {{ $disciplina }} <br> 

<a href="http://127.0.0.1:8000/forgot-password?email={{$email}}">Clique aqui para acessar!</a>
{{-- <a href="http://127.0.0.1:8000/change-password?password={{$senha}}">Clique aqui para acessar!</a> --}}
{{-- <a href="{{ route('changePassword') }}">Clique aqui para acessar!</a> --}}
