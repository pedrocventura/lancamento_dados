<?php

$joga = $_GET['lancar'] ? true : false;

function calculaGanhador($pc,$jogador){
    switch(true){
        case $pc == $jogador:
            return "Empate";
            break;
        case $pc > $jogador: 
            return "Computador";
            break;
        case $pc < $jogador: 
            return "Jogador";
            break;
    }
}
function jogaDado() {
    return random_int(1,6);
}

if($joga){
$D1Jogador= jogaDado();
$D2Jogador= jogaDado();
$D1Pc= jogaDado();
$D2Pc= jogaDado();
$ganhador = calculaGanhador($D1Pc + $D2Pc,$D1Jogador + $D2Jogador);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançamento de dados</title>
</head>
<style>
tr:nth-child(even) {
  background-color: #dddddd;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
<body>
    <button><a href="php.php?lancar=true">Lançar</a></button>
    <?php if($joga){ ?>
    <table>
        <tr>
        <th></th>
            <th>Jogador</th>
            <th>Computador</th>
        </tr>

        <tr>
            <td>1º Dado</td>
            <td><?= $D1Jogador?></td>
            <td> <?= $D1Pc?></td>
        </tr>
        <tr>
            <td>2º Dado</td>
            <td> <?= $D2Jogador?></td>
            <td> <?= $D2Pc?></td>
        </tr>
        <tr>
            <td>Soma</td>
            <td><?= $D1Jogador + $D2Jogador?></td>
            <td><?= $D1Pc + $D2Pc?></td>
        </tr>
    </table>
    <h4>Ganhador:  <?= $ganhador?></h4>
</body>
<?php } ?>
</html>