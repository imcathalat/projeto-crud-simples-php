<h1>Listar Usuários</h1>
<br>
<?php
    $sql = "SELECT * FROM users_project";

    $res= $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd>0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Data de nascimento</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td>
                    <div class='row'>
                        <div class='col-md-6'>
                            <button class='btn btn-success w-100' onclick=\"location.href='?page=editar&id=".$row->id."';\">Editar
                        </div>
                        <div class='col-md-6'>
                            <button class='btn btn-danger w-100' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';} else {false;}\">Excluir
                        </div>
                    </div> 
            </td>";
            print "";
            print "</tr>";
        }
        print "<table>";
    } else {
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }