
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
                      <img src="https://i.ibb.co/KqfV6wc/logo2.png" alt="">
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
                              
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
            <div class="col-1">
    
            </div>
        </div>
        

    </div>
    </div>


    <div id="todo">
      <div class="container">  
        <h1 id="catalogo">
          CATALOGO
        </h1>
        <div class="container">
          <div class="row">

          
          <?php
          $conn_string = "host=ec2-52-44-13-158.compute-1.amazonaws.com port=5432 dbname=d6i8s8b9suu22o 		user=wcmpzbduubrjor password=e4bc4d284593990d1c540b4f05bb867f12e1f1e052ea0acfafcdb13254fecbc4 		connect_timeout='3000";
          $conexion = pg_connect($conn_string);
          
          $query=pg_query($conexion,"SELECT * FROM CARROS");

          
          $cantidad=pg_num_rows($query);

          if($cantidad>0){
            while ($consulta = pg_fetch_array($query)){
              echo '<div class="col-3">
            
                <div id="elemento">
                  <div class="card" style="width: 18rem;">
                    <img id="fotos" src="https://'.$consulta['foto'].'" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$consulta['marca'].'&nbsp;'.$consulta['modelo'].'</h5>
                      <div>'.$consulta['fecha'].'</div>
                      <div>'.$consulta['km'].' Km</div>
                      <div>'.$consulta['combustible'].'</div>
                      <form action="cotizacion.php" method="POST">
                      
                      <a href="cotizacion.php"><button id="bcotizar" type="submit" name="cotizacion" value="'.$consulta['idcarros'].'" class="btn btn-primary">Cotizar</button></a>
                      </form>
                    </div>
                  </div>
                </div>
  
              </div>';
  
            }

          }else{
            echo '<div>
            <h3>No se encontraron resultados</h3>
            </div>';
            
          }

          
          

          ?>

            

        </div>
        

      </div>
    </div>












    <div id="abajo">
      <div>
        <div id="pagina" class="row"> 
          
          <div class="col-4">
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