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
            <link href="aluno.css" rel="stylesheet">
            
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
                <legend><i class="glyphicon glyphicon-education"></i></a> III - Formação Acadêmica</legend>
                <form action="#" method="post" class="form-group" role="form">
                <label>Graduação</label>    
                <input class="form-control" name="graduacao" placeholder="Insira sua graduação" type="text"/>
                <br>
                <label>Instituição</label>
                <input class="form-control" name="instituição" placeholder="Insira o nome da Instituição" type="text"/>
                <br>
                <label>Conclusão do Curso</label>
                <span class="pull-right">Mês e Ano de Início</span>
                <input class="form-control" name="ini_grad" placeholder="Insira o mês e o ano do início da Graduação" type="text"/>
                <span class="pull-right">Mês e Ano de Conclusão</span>
                <input class="form-control" name="ini_grad" placeholder="Insira o mês e o ano da conclusão da Graduação" type="text"/>
                <br>
                <form class="form-horizontal"><!-- formulario de bolsas-->
                <fieldset>
                <label>Bolsista Iniciação Científica</label>
                <div id="div_pibic">
                <!-- Multiple Checkboxes (inline) -->
                <div class="form-group">
                  <div class="col-md-4">
                    <label class="checkbox-inline" for="checkboxes-0">
                      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="PIBIC">
                      PIBIC
                    </label>
                  </div>
                </div>
                <br><br>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right"" for="pibic_ini">Início</span>  
                  <input id="pibic_ini" name="pibic_ini" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right"" for="pibic_fim">Fim</span>  
                  <input id="pibic_fim" name="pibic_fim" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div><br><br><br>
                </div><!-- End div PIBIC-->
                <br>
                <div id="div_faperj">
                <div class="form-group">
                  <div class="col-md-4">
                    <label class="checkbox-inline" for="checkboxes-0">
                      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="FAPERJ">
                      FAPERJ
                    </label>
                  </div>
                </div>
                <br><br>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right"" for="faperj_ini">Início</span>  
                  <input id="faperj_ini" name="faperj_ini" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right"" for="faperj_fim">Fim</span>  
                  <input id="faperj_fim" name="faperj_fim" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                </div><!-- end div_faperj-->
                <br><br><br><br>
                <div id="div_cnpq">
                <div class="form-group">
                  <div class="col-md-4">
                    <label class="checkbox-inline" for="checkboxes-0">
                      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="PIBIC">
                      CNPq
                    </label>
                  </div>
                </div>
                <br><br>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right"" for="cnpq_ini">Início</span>  
                  <input id="cnpq_ini" name="cnpq_ini" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right"" for="cnpq_fim">Fim</span>  
                  <input id="cnpq_fim" name="cnpq_fim" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                </div><!-- end div_cnpq-->
                <br><br><br><br>
                <div id="div_outro">
                <div class="form-group">
                  <div class="col-md-4">
                    <label class="checkbox-inline" for="checkboxes-0">
                      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="PIBIC">
                      Outro
                    </label>
                  </div>
                </div>
                <br>
                <span class="pull-right"" for="outro_fim">Especificar</span>
                <input class="form-control" name="especificar" placeholder="Insira o nome da Instituição" type="text"/>
                <br>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right"" for="cnpq_ini">Início</span>  
                  <input id="outro_ini" name="outro_ini" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                <!-- Text input-->
                <div class="form-group col-xs-6">
                  <span class="pull-right"" for="outro_fim">Fim</span>  
                  <input id="outro_fim" name="outro_fim" type="text" placeholder="Digite o Mês e Ano" class="form-control input-md">
                </div>
                </div><!-- end div_outro-->
                </fieldset>
                </form><!-- fim do formulario com os tipos de bolsas-->
                <button class="btn btn-lg btn-success btn-block" type="submit">
                    Avançar <span class="glyphicon glyphicon-arrow-right"></span></button>
                </form><!--Fim do formulario -->
            </div>
        </div>
    </div><!--End div container -->

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