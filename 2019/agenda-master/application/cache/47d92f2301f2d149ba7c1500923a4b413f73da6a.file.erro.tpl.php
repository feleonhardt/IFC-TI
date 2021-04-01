<?php /* Smarty version Smarty-3.1.13, created on 2013-06-08 12:47:39
         compiled from ".\application\view\tpls\erro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1897051b327ebe025d8-43086371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47d92f2301f2d149ba7c1500923a4b413f73da6a' => 
    array (
      0 => '.\\application\\view\\tpls\\erro.tpl',
      1 => 1370690911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1897051b327ebe025d8-43086371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b327ebee1912_91596925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b327ebee1912_91596925')) {function content_51b327ebee1912_91596925($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="iso-8859-1">
        <base href="//localhost/agenda/" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agenda de Contatos</title>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/agenda-style.css">
        <link rel="shortcut icon" href="assets/ico/agenda.png" />
    </head>
    <body>
        <!-- NAVBAR - INIT -->
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="./Index/">Agenda</a>
                    <form class="navbar-search pull-right">
                        <input type="text" class="search-query" placeholder="Buscar Contato" autocomplete="off" data-provide="typeahead" id="search">
                    </form>
              </div>
          </div>
        </div>
        <!-- NAVBAR - END -->
        
        <!-- CONTAINER - INIT -->
        <div class="container">
            <div class="row">
                <div class="span12" id="content">
                    <h2 class="text-warning"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
                    <p class="text-error"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
                </div>
            </div>
        </div>
        <!-- CONTAINER - END -->
        <hr>
        <footer>
            <p class="text-center">Sistema Desenvolvido por <a href="#">Alan Freire</a></p>
        </footer>
        <script type="text/javascript" src="assets/js/jquery-2.0.1.min.js.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(window).resize(function(){
                $('#content').css('min-height', $(window).height() - $(".navbar").height()
                        - parseInt($("body").css("margin-top"))
                        - parseInt($("footer").css("height")) - 15
                        );  
            });
            $(window).resize();
        </script>
    </body>
</html><?php }} ?>