<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Novo usuário</h1>
    <div class="col py-3 px-md-5">
        <form action="?page=salvar" method="POST" class="form-inline">
            <input type="hidden" name="acao" value="cadastrar">
            <div class="form-group col-md-6 mb-3">
                <label for="inputAddress2">Nome</label>
                <input type="text" name="nome"
                class="form-control" id="inputAddress2" placeholder="Name">
            </div>
            <div class="form-row mb-3">
                <div class="col-md-6">
                    <br>
                    <label class="">Email</label>
                    <input type="email" name="email" class="form-control form-inline" id="inputEmail4" placeholder="Email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="inputPassword4">Password</label> <br>
                    <input type="password" name="senha" class="form-control " id="inputPassword4" placeholder="Password">
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="inputPassword4">Data de nascimento</label> <br>
                    <input type="date" name="data_nasc" class="form-control "placeholder="Data de nascimento">
                </div>
            </div>
            <div class="form-group mb-3">
                <br>
                <button type="submit" class="btn btn-primary" name="salvar">Sign in</button>
            </div>
        </form>
    </div>
    
</body>
</html>