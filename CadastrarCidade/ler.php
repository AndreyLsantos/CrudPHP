<?php
require_once 'connx.php';
$db = "select * from cidades";
$result = $sql->query($db);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    if ( $row['id'] == $_GET['id'] ){
        echo '<h1>Atualizar Cidade</h1>';         
        echo  "<tr>";
        echo  '  <form action="atualizar.php" method="GET" class="row gy-2 gx-3 align-items-center">';
        echo  '  <div class="row g-3">';
        echo  "  <th>" . $row['id'] . "</th>";
        echo  '  <div class="col-sm-7">';
        echo  '  <th><input type="text" class="form-control" placeholder="Cidade" value="' . $row['cidade'] . '" id="cidade" name="cidade" aria-label="City"></th></div>';
        echo  '  <div class="col-sm">';
        echo  '  <th><input type="text" class="form-control" placeholder="Estado" value="' . $row['estado'] . '" id="estado" name="estado" aria-label="State"></th></div>';
        echo  '  <div class="col-sm">';
        echo  '  <th> <input type="text" class="form-control" placeholder="Cep" value="' . $row['cep'] . '" id="cep" name="cep" aria-label="Zip"></th></div>';
        echo  '  </div>';
        echo  '  <div class="col-auto">';
        echo  '  <th> <button type="submit" name="submit" class="btn btn-primary">Enviar</button></th></div>';
        echo  '  <input type="hidden" name="id" value="' . $row['id'] . '">';
        echo  '  </form>';
        echo  "</tr>";

    } else {
        echo "<tr>";
        echo "<th>" . $row['id'] . "</th>";
        echo "<th>" . $row['cidade'] . "</th>";
        echo "<th>" . $row['estado'] . "</th>";
        echo "<th>" . $row['cep'] . "</th>";
        echo '<td><a class="btn btn-primary" href="index.php?id=' . $row['id'] . '" role="button">Atualizar</a>
                  <a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Deletar</a>
            </td>';
        echo "</tr>";

    }
}
?>

