<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deletar Usuário</title>
    </head>
    <body>
        <form action="{{ route('update_user', ['id' => $user->id]) }}" method="POST">
            @csrf
            <label for="">Deseja deletar o usuário?</label><br/>
            <input type="text" name="name" value="{{ $user->name }}"><br/>
            <input type="submit">Sim</input>
        </form>
    </body>
</html>