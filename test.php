<?php

session_start();
$foto = $_SESSION['foto'];
$marca = $_SESSION['marca'];
$modelo = $_SESSION['modelo'];
$fecha = $_SESSION['fecha'];
$km = $_SESSION['km'];
$combustible = $_SESSION['combustible'];
$precio = $_SESSION['precio'];

echo 
                    '
                    
                      
                        
                        
                          <div class="col-3">
                          
                          <div class="card" style="width: 18rem;">
                                <img id="fotos" src="https://'.$foto.'" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">'.$marca.'&nbsp;'.$modelo.'</h5>
                                  <div>'.$fecha.'</div>
                                  <div>'.$km.' Km</div>
                                  <div>'.$combustible.'</div>
                                  <h5 class="card-title">MONTO A PAGAR : US$'.$precio.'</h5>
                                  
                                </div>
                          </div>
                          </div>
                        
                      
                    
                    ';



?>





    <div id="div">
    <img src="logo.png" alt="logo">

    </div>
     


<div id="div">
     <?php echo $marca; ?>
     <?php echo $modelo; ?>
     <?php echo $fecha; ?>
     <?php echo $km; ?>
     <?php echo $combustible; ?>
     <?php echo $precio; ?>


</div>

