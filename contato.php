<?php include 'head.php'; ?>
<div class="mainpage">
  	<?php include('navbar.php'); ?>
  	<div class="container">
        <div class="row">
          	<div class="col-md-12 textPost">
	            <h1>Entre em contato conosco</h1>
				<form method="post" action="contato_sucesso.php">
					<div class="form-group">
						<label for="nome">Nome: </label>
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome" size="50">
					</div>
					<div class="form-group">
						<label for="email">E-mail: </label>
						<input type="email" id="email" class="form-control" name="email" placeholder="Insira seu e-mail" size="35">
					</div>
					<div class="form-group">
						<label for="titulo">Assunto: </label>
						<input type="text" id="titulo" name="titulo"  class="form-control" placeholder="Insira o assunto" size="35">
					</div>
					<div class="form-group">
						<label for="texto">Mensagem:</label>
						<textarea type="textarea" id="texto"  class="form-control" name="texto" placeholder="Insira sua mensagem" size="500" rows="5">
						</textarea>
					</div>
					<div class="text-right">
					<button type="submit" class="btn btn-success">Enviar</button>
					</div>
			  	</form>
        	</div>
        </div>
  	</div>
</div>
<br><br><br>
<?php include 'rodape.php'; ?>
<?php include 'footer.php'; ?>
