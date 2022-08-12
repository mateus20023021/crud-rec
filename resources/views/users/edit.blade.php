<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atualizar cadastro</title>
    </head>
    <body>
        <form action="{{ route('update_user', ['id' => $user->id]) }}" method="POST">
            @csrf
            <label for="">Nome</label><br/>
            <input type="text" name="name" value="{{ $user->name }}"><br/>
            <label for="">E-mail</label><br/>
            <input type="text" name="email" value="{{ $user->email }}"><br/>
            <label for="">Senha</label><br/>
            <input type="password" name="pwd" minlength="8" value="{{ $user->password }}"><br/>
            <input type="submit">
        </form>
    </body>
</html>