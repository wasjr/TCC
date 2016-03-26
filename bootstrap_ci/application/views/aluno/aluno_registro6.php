
<?php
	

 if (validation_errors()!=""){
	echo "<div class='alert alert-danger' role='alert'>
  <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  <span class='sr-only'>Error:</span>";
  echo validation_errors();
  echo "</div>";
}
	

   ?>
<?php echo form_open('aluno/cadastro6'); ?>
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