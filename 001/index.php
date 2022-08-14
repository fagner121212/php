<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0%;
            padding: 0%;
        }

        
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Exercicio 01</h1>
    <p>
        1) - Crie um algoritmo que receba um número digitado pelo usuário e verifique
        se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor
        Positivo", "Valor Negativo" ou "Igual a Zero".
    </p>

    <input type="number" placeholder="Digite um numero" id="input">
    <button onclick="botao()">Iniciar</button>

    <?php 

        function numero () {
            echo "<script type='text/javascript'>
                
                function botao () {
                    let input = document.getElementById('input');
                    let inputValue = input.value;
                    //console.log(inputValue);

                    if(inputValue == 0) {
                        console.log('Numero 0');
                    } else if (inputValue > 0) {
                        console.log('Numero positivo');
                    } else {
                        console.log('Numero negativo');
                    }
                    
                }

            </script>";
        }


        numero();
    
    ?>
</body>
</html>