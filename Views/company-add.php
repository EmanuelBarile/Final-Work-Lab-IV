<?php
    require_once('nav.php');

    if(isset($_SESSION["loggedUser"]))
     {
          $loggedUser = $_SESSION['loggedUser'];
     }
     else{
          echo "<script>
          alert('No tienes permiso para acceder a esta página');
          window.location= 'index.php' 
          </script>";
     }


?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Add a company</h2>
               <form action="<?php echo FRONT_ROOT ?>Company/Add" method="post" class="bg-light-alpha p-5"> <!--Está bien el path?-->
                    <div class="row">

                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Company name</label>
                                   <input type="text" name="name" value="" class="form-control">
                              </div>
                         </div>

                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Foundation year</label>
                                   <input type="date" name="foundationYear" value="" class="form-control">
                              </div>
                         </div>

                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">City</label>
                                   <input type="text" name="city" value="" class="form-control">
                              </div>
                         </div>

                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Description</label>
                                   <textarea name="description" cols="40" rows="5"></textarea>
                              </div>
                         </div>

                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Logo</label>
                                   <input type="file" name="logo" value="" class="form-control">
                              </div>
                         </div>

                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Email</label>
                                   <input type="email" name="email" value="" class="form-control">
                              </div>
                         </div>

                         <div class="col-lg-4">
                              <div class="form-group">
                                   <label for="">Phone number</label>
                                   <input type="number" name="phoneNumber" value="" class="form-control">
                              </div>
                         </div>

                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Add</button>
               </form>
          </div>
     </section>
</main>