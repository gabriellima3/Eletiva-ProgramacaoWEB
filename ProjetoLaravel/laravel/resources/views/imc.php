<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>IMC</title>
    <link rel="stylesheet" type="text/css" href="styleIMC.css">


</head>

<body>
    <div id="global">
        <h1 id="tituloPagina">Cálculo IMC</h1>
        <p>IMC é a sigla para Índice de Massa Corpórea, parâmetro adotado pela Organização Mundial de Saúde para calcular o
            peso ideal de cada pessoa.

            O índice é calculado da seguinte maneira: divide-se o peso do paciente pela sua altura elevada ao quadrado.
            Diz-se que o indivíduo tem peso normal quando o resultado do IMC está entre 18,5 e 24,9.

            Quer descobrir seu IMC? Insira seu peso e sua altura nos campos abaixo e compare com os índices da tabela.
            Importante: siga os exemplos e use pontos como separadores.</p>

        <form action="imc.php" method="get">
            <div class="row">
                <div class="col-md-3">
                    <label class="labelIMC">Altura (ex: 1,70)</label><br>
                    <input type="text" class="form-control" name="altura" id="altura" placeholder="Metros" required><br>
                </div>
                <div class="col-md-3">
                    <label class="labelIMC">Peso(ex: 69.2)</label><br>
                    <input type="text" class="form-control" name="peso" id="peso" placeholder="Quilos" required><br>
                </div>
            </div>
            <button type="submit" id="calcular" name="calcular" class="btn btn-primary btn-circle btn-lg">Calcular</button>
            <button type="button" id="limpar" name="limpar" class="btn btn-danger btn-circle btn-lg">Limpar</button>
        </form>
        <br><br>


        <table class="table">
            <tr id="primeiroTituloTabela">
                <th colspan="3">
                    VEJA A INTERPRETAÇÃO DO IMC
                </th>
            </tr>
            <tr id="titulosTabela">
                <th>IMC</th>
                <th>CLASSIFICAÇÃO</th>
                <th>OBESIDADE (GRAU)</th>
            </tr>

            <tr>
                <td>MENOR QUE 18.5</td>
                <td>MAGREZA</td>
                <td>0</td>
            </tr>

            <tr>
                <td>ENTRE 18.5 E 24.9</td>
                <td>NORMAL</td>
                <td>0</td>
            </tr>

            <tr>
                <td>ENTRE 25.0 E 29.9</td>
                <td>SOBREPESO</td>
                <td>I</td>
            </tr>

            <tr>
                <td>ENTRE 30.0 E 39.9</td>
                <td>SOBREPESO</td>
                <td>II</td>
            </tr>

            <tr>
                <td>MAIOR QUE 40.0</td>
                <td>OBESIDADE GRAVE</td>
                <td>III</td>
            </tr>
        </table>

        <?php

        function imc($altura, $peso)
        {
            $altura = str_replace(',', '.', $altura);
            $altura = $altura * $altura;
            $result = $peso / $altura;
            return $result;
        }
        $peso = $_GET["peso"];
        $altura = $_GET["altura"];
        $imc = imc($altura, $peso);
        $imc = number_format($imc, 2, '.', '');
        echo "Seu IMC é de $imc";
        echo "<br/>";
        echo "Situação: ";

        if ($imc <= 18.5) {
            echo "Abaixo do peso";
        } elseif ($imc >= 18.6 && $imc <= 24.9) {
            echo "Peso ideal (parabéns)";
        } elseif ($imc >= 25 && $imc <= 29.9) {
            echo "Levemente acima do peso";
        } elseif ($imc >= 30 && $imc <= 34.9) {
            echo "Obesidade Grau I";
        } elseif ($imc >= 35 && $imc <= 39.9) {
            echo "Obesidade Grau II (severa)";
        } elseif ($imc >= 40) {
            echo "Obesidade Grau III (mórbida)";
        }

        $resultado = imc();
        echo $resultado
        ?>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>