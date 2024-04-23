<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- ------------------------ insertion bootstrap ------------------------ -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- ------------------------ insertion flavicon ------------------------ -->
<link rel="shortcut icon" href="./ASSET/Images/flavicon.png" type="image/x-icon">
<!-- ------------------------ insertion icons pieds page ------------------------ -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"  rel="stylesheet"
/>
  <title>Projet perso site photographe mariage</title>
</head>
<body>
<header>


      <!-- ------------------------ Navbar ------------------------ -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary ">

        <div class="container-fluid fs-3">
          <a class="nav-link link-success text-dark navbar-brand fs-3 " href="./index.php">Acceuil</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-center " id="navbarNavDropdown">
            
            <ul class="navbar-nav">

              <li class="nav-item border border-dark rounded mx-2">                
                <a class="nav-link link-primary text-dark" aria-current="page" href="#">Exemples</a>
              </li>

              <li class="nav-item  border border-dark rounded mx-2">
                <a class="nav-link link-primary text-dark" href="./tarifs.php">Tarifs</a>
              </li>

              <li class="nav-item border border-dark rounded mx-2">
                <a class="nav-link link-primary text-dark" href="./formulaire.php">Nous contacter</a>
              </li>

              <li class="nav-item dropdown  border border-dark rounded mx-2">

                <a class="nav-link link-primary text-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Portofolio
                </a>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Mélanie et Jean</a></li>
                  <li><a class="dropdown-item" href="#">Lucie et Roland</a></li>
                  <li><a class="dropdown-item" href="#">David et Goliath</a></li>
                </ul>

              </li>
              
            </ul>

          </div>
          <!-- -------------------------------- INSCRIPTION-CONNEXION-DECONNEXION -------------------------------- -->
          <div class="ms-auto" id="navbarNavDropdown">

            <ul class="navbar-nav">
              <!-- mon panier -->
              <li class="nav-item">

          <a class="nav-link link-primary text-dark" href="#">
            <i class="bi bi-basket"></i> Mon panier
          </a>

        </li>
        <!--  -->
            <!-- <li class="nav-item">
              <a class="btn btn-success" aria-current="page" href="./inscription.php">Inscription</a>
              </li>

              <li class="nav-item mx-3">
              <a class="btn btn-primary" aria-current="page" href="./connexion.php">Connexion</a>
              </li>
              <li class="nav-item ">
                <a class="btn btn-dark">Déconnexion</a>
              </li> -->

              <!-- ---------------------- PROFIL - INSCRIPTION - CONNEXION -DECONNEXION ---------------------- -->
              <?php if (isset($_SESSION['user'])) { ?>
                            <li class="nav-item">
                                <a class="nav-link link-primary text-dark" href="#">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-danger nav-link link-dark text-dark" href="deconnexion.php">Se déconnecter</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="btn btn-success nav-link link-warning text-dark" href="inscription.php">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary nav-link link-warning text-dark" href="connexion.php">Se connecter</a>
                            </li>
                        <?php } ?>
              
          </div>


        </div>

      </nav>

</header>

    <main class="bg-white p-4">