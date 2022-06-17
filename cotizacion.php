
            
              <?php
                include 'conection.php';
                session_start();
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

                  $html = '
                    <body>
                      <center>
                        <img src="https://raw.githubusercontent.com/iAmRatix/webseminuevos/master/logo.png" height=”70” width=570”>
                      </center>
                      
                      <div>  
                        <h1 style="text-align: center;" id="catalogo">
                          COTIZACION
                        </h1>
                      </div>
                
                      <div>
                        <center>
                        <img id="fotos" src="https://'.$consulta['foto'].'" height=”225” width="380”>
                        </center>
                      </div>

                      <div style="text-align: center;">
                        <h5>'.$consulta['marca'].'&nbsp;'.$consulta['modelo'].'</h5>
                        <div>'.$consulta['fecha'].'</div>
                        <div>'.$consulta['km'].' Km</div>
                        <div>'.$consulta['combustible'].'</div>
                        <h5>MONTO A PAGAR : US$'.$consulta['precio'].'</h5>
                      </div>

                      <div style="text-align: center;">
                        <div>
                          GRUPO 2
                        </div>
                        <div>
                          2022
                        </div>
                        <div>
                          <a style="color:black; text-decoration: none;" href="">Nosotros, Terminos y Condiciones</a>
                        </div>
                      </div>
                    </body>
                  ';


                      
                    echo $html;
                      
                  $_SESSION['html']=$html;    
                    
                  header("location: pdf.php");
                  }
                  
                  

                }else{
                  
                }
                
                




                ?>
        