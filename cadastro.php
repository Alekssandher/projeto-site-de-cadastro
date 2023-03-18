<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/loginn.css">
  
</head>
 
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Sistema de Cadastro</h3>
                    <h3 class="title has-text-black"><a href="index.php" target="_blank">Top Ranks</a></h3>
                    <?php
                    if(isset($_SESSION['status_cadastro'])):
                    ?>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando a empresa e senha <a href="login.php">aqui</a></p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if(isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="notification is-info">
                        <p>A empresa escolhido já existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">

                            <div class="field">
                                <div class="control">
                                    <input name="cnpj" name="text" class="input is-large" placeholder="Informe o CPNJ" autofocus="">
                                </div>
                            </div>
                            
                            <div class="field">
                            	 <div class="control">
                                 <input name="empresa" name="text" class="input is-large" placeholder="Nome da empresa" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="email" name="text" class="input is-large" placeholder="Email da empresa" autofocus="">
                                </div>
                            </div>
 
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                             <br>
                            <p><a href="acesso.php">Já tem uma conta? Entre aqui</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
 
</html>