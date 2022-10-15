<?php
        $dtaNasc = $_POST['dataNasc'];
        $date = new DateTime($dtaNasc);
        $dtaSigno = $date->format('m-d');
        $xml = simplexml_load_file('signos.xml');
        ?>


<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Seu Signo</title>
 <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap");

body {
  margin: 0;
  width: 100vw;
  height: 100vh;
  background-size: cover;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
}

.container {
  position: relative;
  width: 550px;
  height: 500px;
  border-radius: 20px;
  padding: 20px;
  box-sizing: border-box;
  background: #e7e7e7;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}

.brand-title {
  margin-top: 10px;
  font-weight: 900;
  font-size: clamp(1em, 1em + 1vw, 1.5em);
  color: #0026ff;
  letter-spacing: 1px;
}

button {
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}
p {
  font-size: clamp(1em, 1em + 1vw, 1.5em);
}
button {
  color: white;
  margin-top: 50px;
  margin-left: auto;
  background: #0026ff;
  height: 50px;
  width: 100px;
  border-radius: 20px;
  cursor: pointer;
  font-weight: 900;
  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
  transition: 0.1s;
  align-items:top;
}

button:hover {
  box-shadow: none;
}
.main-title{
  font-size: 23px;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: black;
}

</style>
</head>

<body>
    <Div class="container">
        <?php
       
        foreach ($xml->signo as $retorno) :
        if ($dtaSigno >= $retorno->dtaInicio and $dtaSigno <= $retorno->dtaFinal) {
        echo' <div class="brand-title"> <h2> O seu signo é: </h2>' . $retorno->descSigno. '</div>';
        echo' <div class="main-title">' . nl2br($retorno->personalidade) . '</div>';
        }
        endforeach;       
        ?>
        <p>  </p>
<button onclick="history.go(-1);">Voltar</button>
    </div>
    
   
</body>
</html>