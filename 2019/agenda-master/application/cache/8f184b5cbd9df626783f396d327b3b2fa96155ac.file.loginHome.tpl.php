<?php /* Smarty version Smarty-3.1.13, created on 2013-06-08 11:50:50
         compiled from ".\application\view\tpls\loginHome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:996751b31a9ace0984-18713684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f184b5cbd9df626783f396d327b3b2fa96155ac' => 
    array (
      0 => '.\\application\\view\\tpls\\loginHome.tpl',
      1 => 1370058235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '996751b31a9ace0984-18713684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'patternSenha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b31a9aeaaeb9_24004587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b31a9aeaaeb9_24004587')) {function content_51b31a9aeaaeb9_24004587($_smarty_tpl) {?><!DOCTYPE html>
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
                    <?php if (!empty($_smarty_tpl->tpl_vars['status']->value)){?>
                        <div class="alert text-center">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $_smarty_tpl->tpl_vars['status']->value;?>

                        </div>
                    <?php }?>
                    <form class="text-center" method="POST" action="Login/logar">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user" title="Email"></i></span>
                            <input class="span3" type="email" placeholder="E-mail" name="email" required />
                        </div>  
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock" title="Senha"></i></span>
                            <input class="span3" type="password" placeholder="Senha" name="senha" pattern=".<?php echo $_smarty_tpl->tpl_vars['patternSenha']->value;?>
" required />
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
</html><?php }} ?>