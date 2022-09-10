<style>
.title{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI';
}

.message{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.message p{
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI';
    margin-top: 10px;
    font-size: 14px;
}
</style>

    <div class="title">
        <h2>NOVA OCORRÊNCIA</h2>
    </div>

    <div class="message">
        <p><strong>Data da ocorrência:</strong> {{ $data['data']}} </p>
        <p><strong>Nome:</strong> {{ $data['nome']}} </p>
        <p><strong>Ocorrência:</strong> {{ $data['ocorrencia']}} </p>
    </div>





