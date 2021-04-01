<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="iso-8859-1">
        <base href="//localhost/agenda/" />      
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agenda de Contatos</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/agenda-style.css" />        
        <link rel="shortcut icon" href="assets/ico/agenda.png" />
    </head>
    <body>       
        <!-- CONTAINER - INIT -->
        <div class="container">
            <div class="row">                
                <div class="span6 offset3 box">
                    <h2 class="text-center title">Agenda de Contatos</h2><br>
                    {if !empty($status)}
                        <div class="alert text-center">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {$status}
                        </div>
                    {/if}
                    <form class="text-center" method="POST" action="Login/logar">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user" title="Email"></i></span>
                            <input class="span3" type="email" placeholder="E-mail" name="email" required />
                        </div>  
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock" title="Senha"></i></span>
                            <input class="span3" type="password" placeholder="Senha" name="senha" pattern=".{$patternSenha}" required />
                        </div>                        
                        <p class="text-info">
                            <label>
                                <input type="checkbox" class="checkbox" name="checkbox" /><sub>&nbsp;Manter-me conectado.</sub>
                            </label>
                        </p>
                        <div class="form-actions text-center">
                            <button type="submit" class="btn btn-primary btn-large">Entrar</button>
                        </div>                        
                    </form>
                </div>
            </div>            
        </div>
        <!-- CONTAINER - END -->
        <script type="text/javascript" src="assets/js/jquery-2.0.1.min.js.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>
</html>