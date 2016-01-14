        <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <title>Inscrição de Aluno</title>


            <link href="../css/bootstrap.min.css" rel="stylesheet">
            <link href="../css/menu.css" rel="stylesheet">
            <link href="../js/jquery-ui-1.11.4.custom/jquery-ui.css" rel="stylesheet">

          </head>
          <body>

    <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">PPGMMC</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/">Home</a>
                </li>
                <li><a href="/products">Products</a>
                </li>
                <li><a href="/about-us">About Us</a>
                </li>
                <li><a href="/contact">Contact Us</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="login_professor.html">Professor</a></li>
                    <li><a href="login_aluno.html">Aluno</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="login_secretaria.html">Secretaria</a></li>
                    <li><a href="login_gestao.html">Gestão</a></li>
                  </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
              <br><br>

        <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
                <legend><i class="glyphicon glyphicon-home"></i>&nbsp<i class="glyphicon glyphicon-earphone"></i></a> VI - Curso</legend>
                <form action="#" method="post" class="form-group" role="form">
                <label>Área de Concentração do Curso</label>    
                <input class="form-control" name="area_concentracao" placeholder="" type="text"/>
                <br>
                <label>Linhas de Pesquisa</label>
                <br>
                1ª Opção
                <input class="form-control" name="1_opcao" placeholder="" type="text"/>
                <br>
                2ª Opção
                <input class="form-control" name="2_opcao" placeholder="" type="text"/>
                <br>
                
                <form class="form-horizontal">
                  <fieldset>
                  
                  <!-- Form Name -->
                 
                  
                  <!-- Multiple Checkboxes -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="checkboxes">Disciplinas</label>
                    <div class="col-md-4">
                    <div class="checkbox">
                      <label for="checkboxes-0">
                        <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
                        Disciplina 1
                      </label>
                      </div>
                    <div class="checkbox">
                      <label for="checkboxes-1">
                        <input name="checkboxes" id="checkboxes-1" value="2" type="checkbox">
                        Disciplina 2
                      </label>
                      </div>
                    <div class="checkbox">
                      <label for="checkboxes-2">
                        <input name="checkboxes" id="checkboxes-2" value="3" type="checkbox">
                        Disciplina 3
                      </label>
                      </div>
                    <div class="checkbox">
                      <label for="checkboxes-3">
                        <input name="checkboxes" id="checkboxes-3" value="4" type="checkbox">
                        Disciplina 4
                      </label>
                      </div>
                    <div class="checkbox">
                      <label for="checkboxes-4">
                        <input name="checkboxes" id="checkboxes-4" value="5" type="checkbox">
                        Disciplina 5
                      </label>
                      </div>
                    <div class="checkbox">
                      <label for="checkboxes-5">
                        <input name="checkboxes" id="checkboxes-5" value="6" type="checkbox">
                        Disciplina 6
                      </label>
                      </div>
                    </div>
                  </div>
                  
                  </fieldset>
                  </form>

                
                
                <button class="btn btn-lg btn-success btn-block" type="submit">
                    Avançar <span class="glyphicon glyphicon-arrow-right"></span></button>
                </form><!--Fim do formulario -->
            </div>
        </div>
    </div>

            <script src="../js/jquery-1.11.3.min.js"></script>
            <script src="../js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery-ui-1.11.4.custom/datepicker-pt-BR.js"></script>
            <script >
                $('#dp_nasc').datepicker({
                    inline: true,
                    changeMonth: true,
                    changeYear: true
                });
                $('#dp_ident').datepicker({
                    inline: true,
                    changeMonth: true,
                    changeYear: true
                });
            </script>
          </body>
        </html>