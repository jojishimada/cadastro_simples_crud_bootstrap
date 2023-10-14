<h1>Listar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0) {
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</th>";
            print "<td>".$row->Nome."</th>";
            print "<td>".$row->E-mail."</th>""
        }
    }