<?php

  require 'conection.php';


  if($_SESSION['nombre_usuario']!=$usuario){
    
    header("location: index.php");
  }else{
    
    
  }

?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="ho.css">
    
</head>
<body>

    
    <div id="franja">
        <div class="container">
            <div id="franja" class="row">
                
                <div class="col-6">
                    <div id="logo">
                        <img src="logo2.png" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div id="arriba">
                        
                        <a id="top" href="cerrar.php">CERRAR SESION</a>
                         
                    </div>
                </div>
                
            </div>
            </div>
    </div>

    <div id="nfranja">
      <div class="container">
        <div class="row">
            <div class="col-1">

            </div>
            <div class="col-10">
                <div>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="home.php">Encuentra un auto</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="usados.php">Carros Usados</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="nuevos.php">Carros Nuevos</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="contactos.php">Contactos</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="cerrar.php">Cerrar Sesion</a>
                              </li>
                              
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
            <div class="col-5">
    
            </div>
        </div>
        

      </div>
    </div>

    <div id="filtros" class="container">
      <div class="row">
        <h2>Filtrar por Marca</h2>
      </div>


      <form action="filtros.php" method="POST" > 
      <div class="row">
      
      <div class="col-auto">
        <div id="botonfiltrar">
         
        
        <input type="text" name="fecha" value="0" class="visually-hidden" id="fecha" placeholder="fecha">

        <a href="filtros.php"><button name="marca" value="Toyota" type="submit" class="btn btn-dark">Toyota</button></a>
        
        </div>
      </div>
      
      <div class="col-auto">
        <div id="botonfiltrar">

        
        <input type="text" name="fecha" value="0" class="visually-hidden" id="fecha" placeholder="fecha">

        <a href="filtros.php"><button name="marca" value="Subaru" type="submit" class="btn btn-dark">Subaru</button></a>
        </div>
      </div>

      </div>
      
    
      </form>


      
        
    </div>

    <div id="filtros" class="container">
      <div class="row">
        <h2>Filtrar por Año</h2>
      </div>


      <form action="filtros.php" method="POST" > 
      <div class="row">
      
      <div class="col-auto">
        <div id="botonfiltrar">
        <a href="filtros.php"><button name="fecha" value="2015" type="submit" class="btn btn-dark">2015</button></a>
        </div>
      </div>

      <div class="col-auto">
        <div id="botonfiltrar">
        <a href="filtros.php"><button name="fecha" value="2016" type="submit" class="btn btn-dark">2016</button></a>
        </div>
      </div>

      <div class="col-auto">
        <div id="botonfiltrar">
        <a href="filtros.php"><button name="fecha" value="2018" type="submit" class="btn btn-dark">2018</button></a>
        </div>
      </div>

      <div class="col-auto">
        <div id="botonfiltrar">
        <a href="filtros.php"><button name="fecha" value="2019" type="submit" class="btn btn-dark">2019</button></a>
        </div>
      </div>
      
      <div class="col-auto">
        <div id="botonfiltrar">
        <a href="filtros.php"><button name="fecha" value="2021" type="submit" class="btn btn-dark">2021</button></a>
        </div>
      </div>

      </div>
      
    
      </form>


      
        
    </div>

    <div id="filtros" class="container">
      <div class="row">
        <h2>Filtrar por KM</h2>
      </div>


      <form action="filtros.php" method="POST" > 
      <div class="row">
      

      <div class="col-auto">
        <div id="botonfiltrar">
         
          Mayor a
        
        </div>
      </div>

      <div class="col-auto">
        <div id="botonfiltrar">
         
        
        <input type="text" name="mayor" id="fecha" >
        
        
        </div>
      </div>
      
      <div class="col-auto">
        <div id="botonfiltrar">
         
          Menor a
        
        </div>
      </div>

      <div class="col-auto">
        <div id="botonfiltrar">

        
        <input type="text" name="menor" id="fecha" >

        
        </div>
      </div>

      <div class="col-auto">
        <div id="botonfiltrar">
         
        <a href="filtros.php"><button name="km" type="submit" class="btn btn-dark">Filtrar</button></a>
        
        
        </div>
      </div>

      </div>
      
    
      </form>


      
        
    </div>
    

    












    <div id="abajo">
      <div class="container" >
        <div class="row"> 
          
          <div id="pagina" class="col-4">
            GRUPO 2
          </div>
          <div class="col-4">
            2022
          </div>
          <div class="col-4">
            <a style="color:black; text-decoration: none;" href="">Nosotros, Terminos y Condiciones</a>
            
          </div>
          
          
        </div>
        
      </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
     
          </script>
    
    

    
    
    
</body>