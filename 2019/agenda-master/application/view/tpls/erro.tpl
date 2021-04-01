<!DOCTYPE html>
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
                    <h2 class="text-warning">{$title}</h2>
                    <p class="text-error">{$content}</p>
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
</html>