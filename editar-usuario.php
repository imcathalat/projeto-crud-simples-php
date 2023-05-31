<h1>Editar usuário</h1>
<?php
    $sql = "SELECT * FROM users_project WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<div class="col py-3 px-md-5">
        <form action="?page=salvar" method="POST" class="form-inline">
            <input type="hidden" name="acao" value="editar">
            <input type="hidden" name="id" value="<?php
            print $row->id; ?>">
            <div class="form-group col-md-6 mb-3">
                <label for="inputAddress2">Nome</label>
                <input type="text" name="nome" value="<?php print $row->nome;?>"
                class="form-control" id="inputAddress2" placeholder="Name">
            </div>
            <div class="form-row mb-3">
                <div class="col-md-6">
                    <br>
                    <label class="">Email</label>
                    <input type="email" name="email" value="<?php print $row->email;?>"class="form-control form-inline" id="inputEmail4" placeholder="Email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="col-md-6">
                    <br>
                    <label for="inputPassword4">Password</label> <br>
                    <input type="password" name="senha" class="form-control " id="inputPassword4" placeholder="Password" required>
                </div>
                <div class="col-md-6">
                    <br>
                    <label>Data de nascimento</label> <br>
                    <input type="date" name="data_nasc" value="<?php print $row->data_nasc;?>" class="form-control "placeholder="Data de nascimento">
                </div>
            </div>
            <div class="form-group mb-3">
                <br>
                <button type="submit" class="btn btn-primary" name="salvar">Sign in</button>
            </div>
        </form>