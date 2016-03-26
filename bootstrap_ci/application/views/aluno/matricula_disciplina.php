<form class="form-horizontal">
	<fieldset>

		<!-- Form Name -->
		<legend>
			Matrícula de Disciplinas
		</legend>

		<div id="div_seletores" class="container col-md-12">
			<!-- Multiple Radios -->
			<div class="form-group">
				<label class="col-md-2 control-label" for="radio_disc">Selecione a disciplina por:</label>
				<div class="col-md-4">
					<div class="radio">
						<label for="radio_disc-0">
							<input type="radio" name="radio_disc" id="radio_disc-0" value="1" checked="checked">
							Nome </label>
					</div>
					<div class="radio">
						<label for="radio_disc-1">
							<input type="radio" name="radio_disc" id="radio_disc-1" value="2">
							Código </label>
					</div>
				</div>
			</div>

			<!-- Select Basic -->
			<div class="form-group">
				<label class="col-md-2 control-label" for="disc_nome">Nome</label>
				<div class="col-md-6">
					<select id="disc_nome" name="disc_nome" class="form-control">
						<option value="1">Option one</option>
						<option value="2">Option two</option>
					</select>
				</div>
			</div>
			
				<div class="form-group" id="div_botao1">
		<label class="col-md-1 control-label" for="selecionar"></label>
		<div class="col-md-1">
			<button id="botao1" name="selecionar" class="btn btn-primary">
				Selecionar
			</button>
		</div>
	</div>

			<!-- Select Basic -->
			<div class="form-group">
				<label class="col-md-2 control-label" for="disc_codigo">Código</label>
				<div class="col-md-6">
					<select id="disc_codigo" name="disc_codigo" class="form-control" disabled="">
						<option value="1">Option one</option>
						<option value="2">Option two</option>
					</select>
				</div>
			</div>
			
			
		

	<div class="form-group" id="div_botao2">
		<label class="col-md-1 control-label" for="selecionar"></label>
		<div class="col-md-1">
			<button id="botao2" name="selecionar" class="btn btn-primary">
				Selecionar
			</button>
		</div>
	</div>
	</fieldset>
	

	

	</div>

</form>

