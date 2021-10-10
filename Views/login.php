<?php
    require_once('nav-login.php');
?>

<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Inicio de sesión</h2>
               <img src="UTN_logo.jpg" alt="logo_UTN" align="left">
               <form action="<?php echo FRONT_ROOT ?>User/login" method="post" class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="email">Email</label>
                                   <input type="text" name="email" value="" class="form-control" placeholder="Ingrese email">
                              </div>
                         </div>
                    </div>
                    <div class="row">  
                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="contrasenia">Contraseña</label>
                                   <input type="password" name="contrasenia" value="" class="form-control" placeholder="Ingrese contraseña">
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Ingresar</button>
               </form>
          </div>
     </section>
</main>
