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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>WTEIA 2018 - Workshop de tecnologia, empreendedorismo e inovação do agreste pernambucano</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/component.css"> 
    <link rel="stylesheet" href="css/custom-styles.css">
    <link rel="stylesheet" href="css/font-awesome.css">
  
     
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/font-awesome-ie7.css">

    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script>
      $(document).ready(function(){
          $('.menu').mobileMenu();
      });
    </script>
    <style>
    ul {
      font-family: exo_medium;
    }
    
    </style>
  </head>
  <body>
    <div class="mainpage">
      <div class="header-wrapper">
        <img src="img/banner_site.png">
      </div>
      <div class="menu">
        <div class="navbar">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fw-icon-th-list"></i>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.html">Página inicial</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Programação<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="geral.html">Grade geral</a></li>
                  <li><a href="palestras.html">Palestras</a></li>
                  <li><a href="paineis.html">Painéis</a></li>
                  <li><a href="minicursos.html">Minicursos</a></li>
                </ul>
              </li>
              <li><a href="inscricoes.html">Inscrições</a></li>
              <li><a href="submissao.html">Submissão de trabalhos</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Informações<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="local.html">O evento</a></li>
                    <li><a href="contato.html">Contato</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sobre o W-Teia<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="sobre.html">O evento</a></li>
                    <li><a href="instituicoes.html">Instituições</a></li>
                    <li><a href="organizacao.html">Organização</a></li>
                  </ul>
              </li>
            </ul>
          </div><!--/.navbar-collapse -->
        </div>
        <div class="mini-menu">
          <label>
            <select class="selectnav">
              <option value="index.html" selected="">Página inicial</option>
              <option value="programacao.html">Programação</option>
              <option value="inscricoes.html">Inscrições</option>
              <option value="informacoes.html">Informações</option>
              <option value="sobre.html">Sobre o W-Teia</option>
            </select>
          </label>
        </div>
      </div>
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
 <!-- Redes sociais -->
      <div class="row rodape">
      <div class="col-sm-12">
        <div class="col-sm-4 realizacao" style="padding-top: 20px">
            <img src="img/rodape/0.png" style="width: 5%">
            <a href="http://ww3.uag.ufrpe.br/" target = "_blank"><img src="img/rodape/01.png" style="width: 15%"></a>
            <a href="http://www.aesga.edu.br/" target = "_blank"><img src="img/rodape/02.png" style="width: 25%"></a>
            <a href="http://www.upe.br/" target = "_blank"><img src="img/rodape/03.png" style="width: 25%"></a>
        </div>
        <div class="col-sm-7 apoio">
          <div>
            <a><img src="img/rodape/apoio.png" style="width: 3%"> </a>
            <a href="http://www.ifpe.edu.br/campus/garanhuns" target = "_blank"><img src="img/rodape/04.png" style="width: 10%"></a>
            <a href="http://www.sbc.org.br/" target = "_blank"><img src="img/rodape/05.png" style="width: 8%"> </a>
            <a href="http://cnpq.br/" target = "_blank"><img src="img/rodape/06.png" style="width: 8%"></a>
            <a href="http://www.pe.senac.br/" target = "_blank"><img src="img/rodape/07.png" style="width: 8%"> </a>
            <a href="http://garanhuns.pe.gov.br/" target = "_blank"><img src="img/rodape/08.png" style="width: 12%"></a>
            <a href="https://www.facebook.com/cdlgus/" target = "_blank"><img src="img/rodape/09.png" style="width: 12%"></a>
            <a href="http://www.sebrae.com.br/sites/PortalSebrae/ufs/pe?codUf=18" target = "_blank"><img src="img/rodape/10.png" style="width: 10%"></a>
            <a href="https://www.facebook.com/TimeJunior/" target = "_blank"><img src="img/rodape/11.png" style="width: 10%"></a> 
          </div>
          <div>
            <a><img src="img/rodape/patrocinio.png" style="width: 2%"></a>
            <a href="http://mbasistemas.com.br/sobre" target = "_blank"><img src="img/rodape/12.png" style="width: 20%"></a>
            <a href="https://www.facebook.com/SoftLinkSistemas" target = "_blank"><img src="img/rodape/13.png" style="width: 20%"></a>
            <a href="https://www.facebook.com/cygnusinfostore/" target = "_blank"><img src="img/rodape/14.png" style="width: 20%"></a>
            <a href="http://www.procfit.com.br/" target = "_blank"><img src="img/rodape/15.png" style="width: 20%"></a>
          </div>
        </div>
      </div>
    </div>
      <div class="col-md-12">
        <div class="text-center">
          <ul class="social">
            <li><a href="https://twitter.com/wteia2018/" target = "_blank"><i class="fw-icon-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/W-Teia-660999764023601/" target = "_blank"><i class="fw-icon-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/wteia" target = "_blank"><i class="fw-icon-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script type="text/javascript">
      $("#carousel-example-generic").carousel();
    </script>
  </body>
  <footer>
     <div class="copy-rights" >
      <div class="container">
        <div class="row text-center"> 
          <a href="https://www.facebook.com/TimeJunior/">Desenvolvido por: TIME JR. - Empresa Júnior de Ciência da Computação de Garanhuns</a>
        </div>
      </div>
    </div>
  </footer>
</html>
