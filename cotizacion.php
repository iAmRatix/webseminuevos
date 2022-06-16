
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="cotizacio.css">
    
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
                
                
            </div>
            </div>
    </div>
    
    


    <div id="todo">
      
        <div>  
          <h1 style="text-align: center;" id="catalogo">
            COTIZACION
          </h1>
        </div>



        <div class="container">
          
        <div class="row justify-content-center">
            
              <?php
                include 'conection.php';
                $_SESSION['cotizacion']=$_POST['cotizacion'];
                $cotizacion=$_SESSION['cotizacion'];
                $query=pg_query($conexion,"SELECT * FROM CARROS WHERE IDCARROS='$cotizacion' ");
                $cantidad=pg_num_rows($query);
                if($cantidad>0){
                  while ($consulta = pg_fetch_array($query)){
                  $_SESSION['foto']=$consulta['foto'];
                  
                  $_SESSION['marca']=$consulta['marca'];
                  $_SESSION['modelo']=$consulta['modelo'];
                  $_SESSION['fecha']=$consulta['fecha'];
                  $_SESSION['km']=$consulta['km'];
                  $_SESSION['combustible']=$consulta['combustible'];
                  $_SESSION['precio']=$consulta['precio'];
                    echo 
                    '
                    
                      
                        
                        
                          <div class="col-3">
                          
                          <div class="card" style="width: 18rem;">
                                <img id="fotos" src="https://'.$consulta['foto'].'" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">'.$consulta['marca'].'&nbsp;'.$consulta['modelo'].'</h5>
                                  <div>'.$consulta['fecha'].'</div>
                                  <div>'.$consulta['km'].' Km</div>
                                  <div>'.$consulta['combustible'].'</div>
                                  <h5 class="card-title">MONTO A PAGAR : US$'.$consulta['precio'].'</h5>
                                  
                                </div>
                          </div>
                          </div>
                        
                      
                    
                    ';
                  
                  }
                  
                  

                }else{
                  
                }
                
                ?>
        </div>    
        </div>






        <div style="text-align: center;" >
          <div id="botonlogin">
            <a href="home.php"><button type="submit" class="btn btn-primary">VOLVER</button></a>
            
          </div>
        </div>
              

        
          

        
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
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
     
          </script>
    
    

    
    
    
</body>