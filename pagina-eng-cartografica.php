<!DOCTYPE html>
<html>
<head>
	<meta chatset="utf-8">
	<title>Guia de Carreira/Eng Cartográfica</title>
	<link rel="stylesheet" href="biblioteca/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
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
		


		   <div id="banner-bio" class="container">
			<h1>Engenharia de Bioprocessos e Biotecnologia</h1>
			
		</div>





    <div id="sobre-curso">
      <div class="container">
        <div id="titulo">
            <h2>Sobre o curso</h2>
            
          </div>
        <div class="texto">
        <p>e novas tecnologias aplicadas na área da saúde, de alimentos, química e biológica. A formação prima por conhecimentos focados na Engenharia e na Biologia, na otimização de processos produtivos, na projeção de equipamentos e desenvolvimento de projetos relacionados às transformações biológicas.<p>
      </div>

    </div>

  </div>


  <div id="mercado-de-trabalho">
    <div class="container">
      <div class="row">
      
     
      <div class="col-md-6">
        
        <h2>Mercado de Trabalho</h2>
        <p>No quesito "Emprego" o curso Engenharia de Bioprocessos e Biotecnologia esta favoravel, pois a mesma não foi afetada pela crise economica que estamos enfrentando. Este fenomeno ocorreu por que o dito engenheiro atua em areas que não foram afetadas pela tal crise. Suas vagas concetram-se a maior paret em pesquisa, mas tambem existem mas tambem a uma grande variendade nas areas de industria, desenvolvimento e produção.          
        </p>
      </div>
      <div class="col-md-6">
       <div class="text-center">
        <div id="piechart"></div>
       </div>
      </div>
    </div>
  </div>
</div>



  
          

        </div>
      </div>
    </div>
  </div>
        


    <div id="procura">
      <div class="container">
          <h2>Dificuldade</h2>
          <img src="img/dificuldade.png" alt="grafico">
          
        </div>
      </div> 
    </div>





    <div id="salario">
      <div class="container">
          <h2>Media Salarial</h2>
          <p>O engenherio de bioprocessos e biotecnologia possui o salario protegido pelo CREA (Conselho Regional de Enegenharia e Agronomia e o mesmo pode variar dependendo da competencia do profissional conforme mostrado nos graficos abaixo: </p>
          <img src="img/graficos-media-salarial.png" alt="grafico">
          
        </div>
      </div> 
    </div>






    <div id="areas-de-estudos">
      <div class="container">
        <h2>Mais Ênfase</h2>
           <p>O curso possui uma enorme ênfase na areas de Quimica, Fisica e Biologia sendo a sua maior carga horaria Biologia.<p>
          
            
            
            

          
      </div>
    </div>



    <div id="universidade">
      <div class="container">
        <h2>Universidades e Faculdades</h2>
        <ul>
            <li><h5>universidade1</h5></li>
            <li><h5>universidade2</h5></li>
            <li><h5>universidade3</h5></li>
          </ul>
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
              <li><a href="index.html">Pagina Inicial</a></li>      
             </ul>
           </div>
          </div>
          <div class="col-md-4 row-contato">
            <div class="text-center">
              <h4>Contato com o desenvolvedor</h4>
              <h5><i class="fa fa-gmail"></i> <span>lucas.gambim.guedes@gmail.com</span></h5>
              <h5>+55(51)999349634</h5>
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>   
            </div>
          </div>
        </div>
      </div>
		










	</footer>
	













<script src="biblioteca3/bootstrap/css/bootstrap.min.css"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Emrpegados', 'Nao Empregados'],
  ['Empregados', 5],
  ['Não Empregados', 1],
  
]);

 
  var options = {'title':'Empregabilidade', 'width':550, 'height':400};

  
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
	





</script>

</body>
	


































</html>