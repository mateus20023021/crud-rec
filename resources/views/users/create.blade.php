<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Criar Usuário</title>
    </head>
    <body>
        <form action="{{ route('new_user') }}" method="POST">
            @csrf
            <label for="">Nome</label><br/>
            <input type="text" name="name"><br/>
            <label for="">E-mail</label><br/>
            <input type="text" name="email"><br/>
            <label for="">Senha</label><br/>
            <input type="password" name="pwd" minlength="8"><br/>
            <input type="submit">
        </form>
    </body>
</html>