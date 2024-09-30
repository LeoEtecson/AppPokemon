<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pokemon</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
<style>
    * {
        padding: 0;
        margin: 0;
    }

    body {
        font-family: "Nunito", sans-serif;
        background-color: #f5f5f5;
        background-image: radial-gradient(circle at 50% -20.71%, #faffff 0, #d8f0fa 25%, #b5def2 50%, #92cbeb 75%, #72b9e5 100%);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: #333;
    }

    .caixa {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 400px; /* Largura menor para dar um aspecto de Pokédex */
        height: 500px;
        background-color: white;
        border: 2px solid #ffcc00; /* Borda amarela */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        overflow: hidden; /* Para não deixar elementos saírem da caixa */
    }

    main {
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    input {
        margin: 10px;
        border: 2px solid #ffcc00; /* Borda amarela */
        border-radius: 5px;
        padding: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        transition: border-color 0.3s;
    }

    input:focus {
        border-color: #00cc00; /* Verde quando em foco */
        outline: none; /* Remove contorno padrão */
    }

    button {
        margin-top: 20px;
        background-color: #ffcc00; /* Amarelo Pokémon */
        color: #333;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #00cc00; /* Verde ao passar o mouse */
    }
</style>
</head>
<body>
    <main>
        
            <h1>Cadastro de Pokémon</h1>
            <div class="caixa">
            @if (session('success'))
                <div>{{ session('success') }}</div>
            @endif

            <form action="{{ route('cadastro.store') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="estagio" placeholder="Estagio" required>
    <input type="text" name="nivel" placeholder="Nivel" required>
    <button type="submit">Cadastrar</button>
</form>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
        </div>
    </main>
</body>
</html>
