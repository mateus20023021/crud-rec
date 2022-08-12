<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exibir Usuário</title>
    </head>
    <body>
        <label for="">Nome</label><br/>
        <input type="text" name="name" value="{{ $user->name }}"><br/>
        <label for="">E-mail</label><br/>
        <input type="text" name="email" value="{{ $user->email }}"><br/>
    </body>
</html>