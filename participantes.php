<?php include "cabecalho.php"; ?>

<div class="navbar navbar-inverse">
  <div class="container">
	<div class="navbar-header">
		<p class="navbar-brand">Atividade 05 - Felipe G. Bartulihe</p>
		<ul class="nav nav-pills">
			<li role="presentation"><a href="index.php">Home</a></li>
			<li role="presentation"><a href="cadastro.php">Cadastrar</a></li>
			<li role="presentation" class="active"><a href="participantes.php">Participantes</a></li>
		</ul>
	</div>
  </div>
</div>

<div class="container">
	<div class="col-sm-20">
		<h2>Atividade Aberta 05</h2>
		<h3>Lista de Cadastrados</h3>
	</div>
	
	<div class="col-sm-20">
	<?php
		$st = $con->prepare("select * from participantes");
		$st->execute();
		$participantes = $st->fetchAll();
		foreach ($participantes as $participante) {
			if ($participante['arquivoFoto']!="")
				$foto="./perfis/".$participante['arquivoFoto'];
			else
				$foto = "./img/participante-default.png";
			echo "<a href='perfil.php?user=".$participante['login']."'>";
			echo "<figure class=\"album\"><img class=\"fAlbum\" src=\"$foto\" alt='".$participante['login']."' width='240' height='320' />";
			echo "<figcaption>".$participante['nomeCompleto']."</figcaption></figure></a>";
		}
		?>
	</div>
</div>

<?php include "rodape.php"; ?>