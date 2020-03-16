<!DOCTYPE html>
<html>
   <head>
   	<meta charset="utf-8">
   	<title>Carreira.com</title>
   	<link rel="stylesheet" href="biblioteca/bootstrap/css/bootstrap.min.css">
   	<link rel="stylesheet" href="css/estilizacao.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   </head>
   <body>
   	<header>
   			<div class="container">
   				<div class="row">
   					<nav id="navegacao" class="pull-right">
   						<ul>
   							<li><a href="#" class="btn">Em Alta</a></li>
   							<li><a href="#" class="btn">Sobre</a></li>
   							<li><a href="#" class="btn">Sujestões</a></li>
                <li class="search">
                    
                    <div class="input-group">
                      <input type="search" placeholder="Pesquisar curso">
                      
                    </div>
                </li>
              </ul>
                    </nav>
                </div>

                <div class="row">
                  <img src="img/logo.png" alt="pesquisa" id="logo">
                </div>

            </div>
   			
    </header>
    <section>
      <div id="emcima">
        <h1>Faça sua escolha<small>Encontre a carreira que mais combina com voce</small></h1>

      
      </div>
      <div id="escolha">
        <div class="container">
          <div class="text-center">
          <h2>Escolha uma Área de Atuação</h2>
          <hr>
          </div>

        </div>


      </div>
      <div id="areasdeatuacao">
        <div class="container">
        
        <div class="row thumbnails" id="listas">
         <div class="col-md-4">
            <img src="img/pesquisa2.png" alt="pesquisa">
            <a href="#" class="btn btn-pesquisa efeito"  id="pesquisa">Pesquisa</a> 
          </div>
          <div class="col-md-4">
            <img src="img/engenharia.png" alt="pesquisa">
            <a href="engenharias.php" class="btn btn-engenharia " id="engenharia">Engenharia</a>
          </div>
          <div class="col-md-4">
             <img src="img/lecionar.png" alt="pesquisa">
             <a href="#" class="btn btn-lecionar" id="lecionar">Lecionar</a> 
          </div>
          </div>

         

      

      
        <div class="row thumbnails" id="listas">
         <div class="col-md-4">
            <img src="img/juridico.png" alt="pesquisa">
            <a href="#" class="btn btn-juridico" id="juridico">Juridico</a> 
          </div>
          <div class="col-md-4">
            <img src="img/administracao.png" alt="pesquisa">
            <a href="#" class="btn btn-administrativo" id="administrativo">Administrativo</a>
          </div>
          <div class="col-md-4">
             <img src="img/tecnologiadainformacao.png" alt="pesquisa">
             <a href="#" class="btn btn-tecnologia-da-informacao" id="tecnologia-da-informacao">Tecnologia da Informação</a> 
          </div>
          

         

      </div>

      
        <div class="row thumbnails" id="listas">
         <div class="col-md-4">
            <img src="img/agricultura.png" alt="pesquisa">
            <a href="#" class="btn btn-agronomia" id="agronomia">Agronomia</a> 
          </div>
          <div class="col-md-4">
            <img src="img/arte.png" alt="pesquisa">
            <a href="#" class="btn btn-arte" id="arte">Arte</a>
          </div>
          <div class="col-md-4">
             <img src="img/producao.png" alt="pesquisa">
             <a href="#" class="btn btn-producao" id="producao">Produção</a> 
          </div>
          </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 row-direitos">
           <div class="text-center">
            <h1>Criado por Lucas Gambim Guedes</h1>
            <h2>Diretos reservados a OneTec. Copia sujeita a multa</h2>
           </div>
          </div>
          <div class="col-md-4 row-atalhos">
            <div class="text-center">
             <h4>Atalhos</h4>
             <ul>
              <li><a href="#">Em Alta</a></li>
              <li><a href="#">Sujestões</a></li>
              <li><a href="#">Pagina Anterior</a></li>
              <li><a href="#">Pagina Inicial</a></li>
            <ul>
                

             </ul>
           </div>
          </div>
          <div class="col-md-4 row-contato">
            <div class="text-center">
              <h4>Contato com o desenvolvedor</h4>
              <h5><i class="fa fa-gmail"></i> <span>lucas.gambim.guedes@gmail.com</span></h5>
              <h5>+55(51)999349634</h5>
              <ul>
                <li><a href="https://www.facebook.com/profile.php?id=100005541642634"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
             
            </div>
            
            
            





          </div>

          


        </div>
        





      </div>
      












    </footer>

   	<script src="biblioteca/bootstrap/css/bootstrap.min.css"></script>
   	<script src="biblioteca/jquery/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $("#pesquisa").on("mouseover",function(){
          $(".col-md-4 #pesquisa").addClass("ativo");

        });

      $("#pesquisa").on("mouseout",function(){
        $(".col-md-4 #pesquisa").removeClass("ativo")

      });


      $("#engenharia").on("mouseover",function(){
          $(".col-md-4 #engenharia").addClass("ativo");

        });

      $("#engenharia").on("mouseout",function(){
        $(".col-md-4 #engenharia").removeClass("ativo");





      });

       $("#lecionar").on("mouseover",function(){
          $(".col-md-4 #lecionar").addClass("ativo");

        });

      $("#lecionar").on("mouseout",function(){
        $(".col-md-4 #lecionar").removeClass("ativo");





      });


      $("#tecnologia-da-informacao").on("mouseover",function(){
          $(".col-md-4 #tecnologia-da-informacao").addClass("ativo");

        });

      $("#tecnologia-da-informacao").on("mouseout",function(){
        $(".col-md-4 #tecnologia-da-informacao").removeClass("ativo");





      });


      $("#administrativo").on("mouseover",function(){
          $(".col-md-4 #administrativo").addClass("ativo");

        });

      $("#administrativo").on("mouseout",function(){
        $(".col-md-4 #administrativo").removeClass("ativo");





      });


      $("#juridico").on("mouseover",function(){
          $(".col-md-4 #juridico").addClass("ativo");

        });

      $("#juridico").on("mouseout",function(){
        $(".col-md-4 #juridico").removeClass("ativo");





      });


      $("#agronomia").on("mouseover",function(){
          $(".col-md-4 #agronomia").addClass("ativo");

        });

      $("#agronomia").on("mouseout",function(){
        $(".col-md-4 #agronomia").removeClass("ativo");





      });


      $("#arte").on("mouseover",function(){
          $(".col-md-4 #arte").addClass("ativo");

        });

      $("#arte").on("mouseout",function(){
        $(".col-md-4 #arte").removeClass("ativo");





      });


      $("#producao").on("mouseover",function(){
          $(".col-md-4 #producao").addClass("ativo");

        });

      $("#producao").on("mouseout",function(){
        $(".col-md-4 #producao").removeClass("ativo");





      });





    });
      









    </script>
   






   </body>



	





















</html>