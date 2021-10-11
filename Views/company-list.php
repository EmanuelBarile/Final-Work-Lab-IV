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

    Use DAO\CompanyDAO as CompanyDAO;

    $companyDAO = new CompanyDAO;

    $companyList = $companyDAO->GetAll();
    
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Company list</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Name</th>
                         <th>Foundation Year</th>
                         <th>City</th>
                         <th>Description</th>
                         <th>Logo</th>
                         <th>Email</th>
                         <th>Phone number</th>
                    </thead>
                    <tbody>
                         <?php
                              foreach($companyList as $company)
                              {
                                   ?>
                                        <tr>
                                             <td><?php echo $company->getName() ?></td>
                                             <td><?php echo $company->getFoundationYear() ?></td>
                                             <td><?php echo $company->getCity() ?></td>
                                             <td><?php echo $company->getDescription() ?></td>
                                             <td><?php echo $company->getLogo() ?></td>
                                             <td><?php echo $company->getEmail() ?></td>
                                             <td><?php echo $company->getPhoneNumber() ?></td>
                                        </tr>
                                   <?php
                              }
                         ?>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>