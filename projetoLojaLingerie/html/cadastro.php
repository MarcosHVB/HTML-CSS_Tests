<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”author” content=”MarcosHenrique”>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="keywords" content="lingerie, qualidade, calcinha, sutiã, peças intimas">
    <meta name="robots" content="index,follow">
    <meta name=”description” content=”site de lingeries”>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="imagem/png" href="../imgs/icon.png" />

    <title>Empak: lingeries da melhor qualidade</title>
</head>
<body>
<div class="fundo">
        <div class="menu">            


        <img src="../imgs/logoOf.png" class="logoImg" alt="logo">
                <ul>

                    <li><a href="index.php">Início</a></li>
                    <li><a href="produtosDiversos.php">Produtos Diversos</a></li>
                        <!--<ul> 
                            <li><a href="#">Photoshop</a></li>
                            <li><a href="#">Illustrator</a></li>
                            <li><a href="#">Web Design</a>
                            <ul>
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                            </ul>
                            </li>
                        </ul>  
                    </li>-->
                    <li><a href="#">Mais Vendidos</a>
                        <ul>
                            <li><a href="#">Calcinhas</a></li>
                            <li><a href="#">Sutiãs</a></li>
                            <li><a href="#">Cintas</a></li>
                        </ul>
                    </li>
                    <li><a href="sobrenos.php">Sobre nós</a></li>
                  
                </ul>
                
                <!--<img class="logoCentral" src="../imgs/logoInsta.png">-->

                <ul class="login">
                    <li><a href="loginCadastro.php" class="loginCadastro">Login/Cadastro</a></li>
                </ul>
                
        </div>

           
        
        

        <form method="post" class="formLogin" action="receberDados.php">
            <div class="fieldset">

                <h2 class="h2Login">Cadastro</h2>

                <label class="labelLogin" for="name">Nome Completo</label>
                <br>
                <input type="text" id="name" class="inputLogin" name="name" tabindex="1" placeholder="Digite seu nome aqui">
                <br>

                <label class="labelLogin" for="emailLogin">E-mail</label>
                <br>
                <input type="email" id="emailLogin" class="inputLogin" name="name" tabindex="2" placeholder="Digite seu email aqui">
                <br>

                <label class="labelLogin" for="senhaLogin">Senha</label>
                <br>
                <input type="password" id="senhaLogin" class="inputLogin" name="senha" tabindex="3" placeholder="Digite sua senha">
                <br>

                <label class="labelLogin" for="senhaLogin">Confirme a Senha</label>
                <br>
                <input type="password" id="senhaLogin" class="inputLogin" name="senha" tabindex="4" placeholder="Digite sua senha">
                <br>

                <input type="submit" class="buttonLogin" tabindex="5" name="enviar" value="Enviar">    

            </div>

        </form>
            
        
    </div>
    
</body>
</html>