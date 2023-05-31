<?php
    switch($_REQUEST["acao"]){
        case "cadastrar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO users_project (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}' )";

            $res= $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastro com sucesso!');</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>alert('Cadastro falhou, tente novamente!');</script>";
                print "<script>location.href='?page=novo'</script>";
            }
        break;

        case "editar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE users_project SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}' WHERE id=".$_REQUEST["id"];

            $res= $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>alert('Edição falhou, tente novamente!');</script>";
                print "<script>location.href='?page=novo'</script>";
            }

        break;

        case 'excluir':

            $sql = "DELETE FROM users_project WHERE id=".$_REQUEST["id"];

            $res= $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=listar'</script>";
            } else {
                print "<script>alert('A ação que você está tentando executar falhou, tente novamente!');</script>";
                print "<script>location.href='?page=listar'</script>";
            }

        break;
    }