<h1>Listar Usuário</h1>

<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table teble-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>id</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Data de Nascimento</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "</tr>";
        }
        print"</table>";
    }else{
        print "<p class='alert alert-dangar'>Não encontrou resultados!</p>";
    }
?>
