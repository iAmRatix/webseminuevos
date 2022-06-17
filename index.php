<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body class="container" >
    <div id="logo">
        <img src="logo.png" alt="logo">
        
    </div>
    <div class="row" id="formlogin">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="sesion.php" method="POST" >
                <div class="form-floating mb-3">
                    <input type="text" name="user" class="form-control" id="correo" placeholder="name@example.com">
                    <label for="correo">CORREO</label>
                    
                  </div>
                  
                  
                  <div class="form-floating">
                    <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">CONTRASEÑA</label>
                    
                  </div>
                  <div id="botonlogin">
                      <a href="sesion.php"><button type="submit" class="btn btn-dark">INGRESAR</button></a>
                    
                    
                      
                  </div>
                
            </form>
        </div>
        <div class="col-3"></div>
    </div>
    
        
        
      
    
</body>
