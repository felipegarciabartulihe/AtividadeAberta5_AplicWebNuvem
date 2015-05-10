<?php include "cabecalho.php"; ?>

<div class="navbar navbar-inverse">
  <div class="container">
	<div class="navbar-header">
		<p class="navbar-brand">Atividade 05 - Felipe G. Bartulihe</p>
		<ul class="nav nav-pills">
			<li role="presentation"><a href="index.php">Home</a></li>
			<li role="presentation" class="active"><a href="cadastro.php">Cadastrar</a></li>
			<li role="presentation"><a href="participantes.php">Participantes</a></li>
		</ul>
	</div>
  </div>
</div>

<div class="container">
	<form class="form-horizontal" action="efetuarCadastro.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
		<div class="form-group">
			<label for="inputNome" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputNome" placeholder="Nome">
			</div>
		</div>
		
		<div class="form-group">
			<label for="selectEstado" class="col-sm-2 control-label">Estado</label>
			<div class="col-sm-10">
				<select name="selectEstado">
					<option value="">Selecione</option>
					<?php
					$st = $con->prepare("select * from estados");
					$st->execute();
					$estados = $st->fetchAll();
					foreach ($estados as $estado) {
						echo "<option value=".$estado['idEstado'].">".$estado['nomeEstado']."</option>";
					}
					?>
				</select>
			</div>
		</div>
		<!--div class="form-group">
			<label for="selectCidade" class="col-sm-2 control-label">Cidade</label>
			<div class="col-sm-10">
				<select name="selectCidade">
					<option value="">Selecione</option>
					<option value="aa">aa</option>
				</select>
			</div>
		</div-->
		<div class="form-group">
			<label for="inputEmail" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="inputLogin" class="col-sm-2 control-label">Login</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputLogin" placeholder="Login">
			</div>
		</div>
		<div class="form-group">
			<label for="inputSenha" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputSenha" placeholder="Senha">
			</div>
		</div>
		<div class="form-group">
			<label for="inputInformacoes" class="col-sm-2 control-label">Informações</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputInformacoes" placeholder="Informações">
			</div>
		</div>
		<div class="form-group">
			<label for="foto" class="col-sm-2 control-label">Foto (em JPG)</label>
			<div class="col-sm-10">
				<input type="file" name="foto" id="foto" />
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Confirmar</button>
			</div>
		</div>
		
	</form>			
</div>
		
<?php include "rodape.php"; ?>