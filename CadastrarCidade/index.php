<?php
ini_set('display_errors', 0);
error_reporting(0);
require_once 'connx.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>

<body>
    <div class="bg-all">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Cep</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'ler.php'; ?>
                </tbody>
            </table>
            <h1>Cadastrar Cidade</h1>
                   
            <form action="criar.php" method="GET" class="row gy-2 gx-3 align-items-center">
                <div class="row g-3">
                    <div class="col-sm-7">
                        <label for="">Cidade:</label>
                        <input type="text" class="form-control" placeholder="Cidade" id="cidade" name="cidade" aria-label="City">
                    </div>
                    <div class="col-sm">
                        <label for="">Estado:</label>
                        <input type="text" class="form-control" placeholder="Estado" id="estado" name="estado" aria-label="State">
                    </div>
                    <div class="col-sm">
                        <label for="">Cep:</label>
                        <input type="text" class="form-control" placeholder="Cep" id="cep" name="cep" aria-label="Zip">
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
 </body>

</html>