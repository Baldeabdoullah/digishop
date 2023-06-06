<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robot" content="none">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <title>Vente de jeux vidéos en ligne à Dakar Digishop</title>
    <meta name="description" content="Trouver une boutique en ligne à Dakar? Jeux vidéos en vente à Dakar. Visitez Digishop boutique en ligne au Sénégal Achat de téléphone portable au sénégal">
    <link rel="stylesheet" href="style.css" />

    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <nav class="navbar navbar-expand-lg my-3">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="index.php">Digishop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pt-3" id="navbarNav">
                <div class="input-group custom_inputsearch">
                    <input type="text" class="custom_bar" placeholder="Rechercher" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                    <a href=""><i class="fa-solid fa-magnifying-glass fa-2x my-auto"></i></a>
                </div>

                <a href="">
                    <i class="fa-regular fa-user fa-2x mx-3 custom_menu_icon"></i></a>
                <a href="">
                    <i class="fa-solid fa-cart-shopping fa-2x mx-3 custom_menu_icon"></i></a>
            </div>
        </div>
    </nav>

    <!--CONNECTION A LA BASE DE DONNEES-->

    <?php
    include "./connect.php";
    ?>

    <!--LES TELEPHONES-->

    <div class="container d-flex px-4">
        <!-- <div class="d-none d-lg-block px-5">
            <h3 class="text-center">Filtres</h3>
            <div class=" mt-3 mb-4 button-group filter-button-group ">
               
                <div class=" row d-inline-block justify-content-start ">
                    <button type="button" data-filter="*" class="btn btn-primary  text-dark">Samsung</button>
                    <button type="button" data-filter=".electronic" class="btn btn-primary  text-dark">Apple</button>
                    <button type="button" data-filter=".clothing" class="btn btn-primary  text-dark">Huawei </button>
                    <button type="button" data-filter=".furniture" class="btn btn-primary  text-dark">Xiaomi</button>

                </div>
            </div>
        </div> -->


        <div class="row">


            <?php

            $sql = "Select * from `produits` where cathegorie = 'jeux'  ";

            $result = mysqli_query($connection, $sql);
            if ($result) {
                // $row = mysqli_fetch_assoc($result);
                // echo $row["nom"];
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $marques = $row['marques'];
                    $nom = $row['nom'];
                    $prix = $row['prix'];
                    $disponibilite = $row['disponibilite'];
                    $description = $row['description'];
                    $image1 = $row['image1'];
                    $image2 = $row['image2'];
                    $image3 = $row['image3'];
                    $image4 = $row['image4'];
                    $cathegorie = $row['cathegorie'];
                    $ecran = $row['ecran'];
                    $stockage = $row['stockage'];
                    $performaance = $row['performance'];

                    echo ' <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 ' . $cathegorie . '">
                <div class="smartphone_container">
                    <a href="detail.php?details_id=' . $id . '" class="text-center  text-decoration-none">
                        <img src=' . $image1 . ' alt="" class="img-fluid">
                        <p class="fs-6 fw-bold">' . $nom . '</p>
                        <p class="fs-6 fw-bold">' . $prix . ' FCFA</p>
                    </a>
                  
                </div>
            </div>';
                }
            }


            ?>


        </div>
    </div>



    <!--LE FOOTER-->
    <section id="FOOTER">

        <div class="footer-container  ">
            <div class="footer-item">
                <h3>Contactez-Vous</h3>
                <ul>
                    <li class="d-flex flex-row">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Plateau, rue 14</p>
                    </li>
                    <li class="d-flex flex-row">
                        <i class="fa-solid fa-phone"></i>
                        <p>+221 678 99 00</p>
                    </li>

                    <li class="d-flex flex-row">
                        <i class="fa-regular fa-envelope"></i>
                        <p>infos@sportify.com</p>
                    </li>
                </ul>
            </div>
            <div class="footer-item">
                <h3>Livraison</h3>

                <ul>
                    <li>Lundi-jeudi: 8h-20h</li>
                    <li>Vendredi: 9h-19h</li>
                    <li>Samedi: 9h-17h</li>
                </ul>
            </div>
            <div class="footer-item">
                <h2>Notification</h3>
                    <div class="notification">
                        <input type="email" placeholder="email">
                        <button>inscription</button>

                    </div>

                    <div class="paiement">
                        <i class="fa-brands fa-cc-visa fa-2x visa"></i>
                        <i class="fa-brands fa-cc-mastercard fa-2x master"></i>
                        <i class="fa-brands fa-google-pay fa-2x google"></i>
                        <i class="fa-brands fa-cc-apple-pay fa-2x"></i>
                        <i class="fa-brands fa-cc-paypal fa-2x paypal"></i>
                    </div>
            </div>
        </div>

    </section>

    <h4 class="text-center fw-bold">Crée avec passion par <a href="https://abdoullahbalde.com/" target="_blank">Abdoullah Balde</a></h4>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>