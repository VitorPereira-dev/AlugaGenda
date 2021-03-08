<?php

$cliente = (isset($_GET['clientefj'])==TRUE) ? $_GET['clientefj']:'';

if($cliente == 1){
    echo'<style type="text/css">
            #cnpj{
                display: none;
            }
        </style>';
}
else{
    echo'<style type="text/css">
            #cpf{
                display: none;
            }
        </style>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro AlugaGenda</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro AlugaGenda</h3>
                    <!-- <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                    </div> -->
                    <!-- <div class="notification is-info">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                    </div> -->
                    <form method="get" id="fj">
                        <div class="field">
                            <div class="control">
                                <h2 class="title has-text-grey" aling="Center">Pessoa Física ou Jurídica:</h2>
                                <select id="clientesfj" name="clientefj" class="control">
                                    <option value="0"></option>
                                    <option value="1" name="Fisica">Fisica</option>
                                    <option value="2" name="Juridica">Juridica</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" value="Pronto"/>
                    </form>
                    <div class="box" >
                        <form action="cadastrar.php" method="Post">
                            <h2 class="title has-text-grey" aling="Center">Preencha os dados:</h2>
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
                                </div>
                            </div>
                            <div class="field" id="cpf">
                                <div class="control">
                                    <input name="cpf" type="text" class="input is-large" placeholder="CPF" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control" id="cnpj">
                                    <input name="cnpj" type="text" class="input is-large" placeholder="CNPJ" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                     <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>