<?php include "cabecalho.php"; ?>

<div class="navbar navbar-inverse">
  <div class="container">
	<div class="navbar-header">
		<p class="navbar-brand">Atividade 05 - Felipe G. Bartulihe</p>
		<ul class="nav nav-pills">
			<li role="presentation" class="active"><a href="index.php">Home</a></li>
			<li role="presentation"><a href="cadastro.php">Cadastrar</a></li>
			<li role="presentation"><a href="participantes.php">Participantes</a></li>
		</ul>
	</div>
  </div>
</div>

<div class="container">
	<div class="col-sm-20">
		<h2>Atividade Aberta 05</h2>
		<h3>Feita por: Felipe G. Bartulihe</h3>
		<p>Matrícula: L944454</p>				
	</div>
	
	<form class="form-horizontal" action="login.php" method="post">
		<div class="form-group">
			<label for="inputLogin" class="col-sm-1 control-label">Login</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" id="inputLogin" placeholder="Login">
			</div>
		</div>
		<div class="form-group">
			<label for="inputSenha" class="col-sm-1 control-label">Senha</label>
			<div class="col-sm-4">
				<input type="password" class="form-control" id="inputSenha" placeholder="Senha">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Logar</button>
			</div>
		</div>
	</form>
</div>

<?php include "rodape.php"; ?>