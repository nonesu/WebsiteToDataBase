<?php
   require_once("./php/connection.php");
   require_once("./php/crudoperation.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion_Service</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
     
        <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Fira+Sans:wght@500;700&display=swap" rel="stylesheet">

</head>

<body>
    <main>
        <img src="images/image2.png" class="img-fluid"/>
    <div class="container text-center">
        <h1 class="py-4 text-light rounded">Gestion Service</h1>
        <div class="d-flex justify-content">
            <form action="" method="post" class="w-100">
                <!-- INPUTS -->
                  <div class="input-wrapper">
                        <input class="input" name="text1" placeholder="Num de service" type="text" value="" required/>
                    </div>
                
                    <div class="input-wrapper ">
                        <input class="input" name="text2" placeholder="Nom de service" type="text" value="" required/>
                    </div>
                            <!-- INPUTS END -->

                            <!-- BUTTONS -->
                <div class="btn py-5">
                    <button name="bAdd">Ajouter</button>
                    <button name="bDelete">Supprimer</button>
                    <button name="bEdit">Modifier</button>
                    <button name="bSearch">Chercher</button>

                    </div>
                    <!-- Table
                                <div class="d-flix table-data">
                                        <table class="table table-striped">
                                            <thead class="">
                                                <tr>
                                                    <th>Numéro de service</th>
                                                    <th>Nom de service</th>
                                            
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Informatique</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Vente</td>
                                                </tr>

                                            </thead>
                                             
                                        </table>

                                </div>
                                                        -->

            </form>     



        </div>














    </div>











    </main>



    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.bundle.js"></script>

</body>
</html>