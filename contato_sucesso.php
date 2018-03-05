<?

$nome=$_POST['nome'];

$email=$_POST['email'];

$titulo=$_POST['titulo'];

$texto=$_POST['texto'];


$Destinatario="wteia2018@gmail.com";


$Titulo="[Contato WTEIA] - $titulo";


$mensagem1="

Uma mensagem vinda do site !

Algum vistante mandou essa mensagem pelo site.

Nome: $nome

Email: $email

Mensagem: $texto";


mail("$Destinatario","$Titulo", "$mensagem1","From:$email");

?>
    <?php include 'head.php';?>
    <div class="mainpage">
  <?php include 'navbar.php'; ?>

       <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 textPost">
            
            <p><p>
			<center>
			<h3>
			Agradecemos o seu contato! <br>
			Responderemos em breve! <br>
			
			Equipe WTEIA 2018.<br>
			
			</h3>
					
			</center>
			
			
			
            </p>
          </div>
        </div>
      </div>
   </div>
 <?php include 'rodape.php'; ?>
 <?php include 'footer.php'; ?>
