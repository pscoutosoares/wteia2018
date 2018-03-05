  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113290005-1"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113290005-1');
</script>
<script>
$(document).ready(function(){
    mobilemenu($('.selectnav'),$('.selectnav option'));
    $('.selectnav').change(function(){
      window.location.href = $('.selectnav').val();
    });
});
</script>
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