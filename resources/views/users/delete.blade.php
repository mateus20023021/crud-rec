<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deletar Usuário</title>
    </head>
    <body>
        <form action="{{ route('delete_user', ['id' => $user->id]) }}" method="POST">
            @csrf
            <label for="">Deseja deletar o usuário?</label><br/>
            <input type="text" name="name" value="{{ $user->name }}"><br/>
            <input type="submit" value="Sim">
        </form>
    </body>
</html>