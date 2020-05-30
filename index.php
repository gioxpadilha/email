<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"/>
    <title>EMAIL</title>
</head>
<body>

<div id ="titulo"> 
    <h2>PERCY JACKSON E O LADRÃO DE RAIOS</h2> 
    <P> Deseja baixar um dos maiores best-seller de Rick Riordan?
        Preencha o formulário para receber em seu e-mail o primeiro livro da saga em formato PDF.</p> 
        <img src="./img/pjo.jpeg">
    </div> 
    <div id="tabela">
        <form  method="post" action="email.php">
            <div id="titulo_formulario">Dados:</div>
            <div id="campo_nome">
            <input id="barra_nome" name="nome" type="name" placeholder="Nome">
            </div>
            <div id="campo_email">
                <input id="barra_email" name="email" type="email" placeholder="E-mail">
            </div>
            <div id="campo_enviar">        
                <input id="enviar" name="submit" type="submit" formmethod="POST">
            </div>

        
    </form>
   
</div>
  
</body>
</html> 