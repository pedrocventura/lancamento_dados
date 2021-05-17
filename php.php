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

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
</style>

<body>
    <button id="btnJogar">Jogar</button>
    <table>
        <tr>
            <th></th>
            <th>Jogador</th>
            <th>Computador</th>
        </tr>

        <tr>
            <td>1º Dado</td>
            <td id="d1Jog"></td>
            <td id="d1Pc"></td>
        </tr>
        <tr>
            <td>2º Dado</td>
            <td id="d2Jog"></td>
            <td id="d2Pc"></td>
        </tr>
        <tr>
            <td>Soma</td>
            <td id="somajg"></td>
            <td id="somapc"></td>
        </tr>
    </table>
    <h4 id="ganhador"></h4>
</body>

</html>

<script>
    const btn = document.getElementById("btnJogar"),
        d1j = document.getElementById("d1Jog"),
        d2j = document.getElementById("d2Jog"),
        d1p = document.getElementById("d1Pc"),
        d2p = document.getElementById("d2Pc"),
        somajog = document.getElementById("somajg"),
        somapc = document.getElementById("somapc"),
        ganhador = document.getElementById("ganhador");

    btn.onclick = function() {
        let usrDados = [randomNumber(1, 6), randomNumber(1, 6)],
            pcDados = [randomNumber(1, 6), randomNumber(1, 6)],
            usrSoma,
            pcSoma;

        d1j.innerHTML = usrDados[0];
        d2j.innerHTML = usrDados[1];
        d1p.innerHTML = pcDados[0];
        d2p.innerHTML = pcDados[1];

        usrSoma = arrSum(usrDados);
        pcSoma = arrSum(pcDados);

        somajog.innerHTML = usrSoma;
        somapc.innerHTML = pcSoma;

        if (usrSoma > pcSoma) {
            ganhador.innerHTML = "Usuário!"
        } else if (usrSoma == pcSoma) {
            ganhador.innerHTML = "Empate"
        } else {
            ganhador.innerHTML = "Computador!"
        }


    }

    const randomNumber = function(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };

    const arrSum = function(arr) {
        return arr.reduce(function(a, b) {
            return a + b
        }, 0);
    }
</script>