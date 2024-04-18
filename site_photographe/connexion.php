<!-- ------------------- INSERTION HEADER ET INIT ------------------- -->

<?php
include("init/_init.php");

include("init/_header.php");

?>

<!-- ---------------------------- FORMULAIRE DE CONNEXION ----------------------------- -->

<div class="container my-5 border border-dark rounded shadow p-3 bg-body-tertiary ">
    <div class="d-flex justify-content-center ">  
    <h2 class="border border-dark rounded d-inline-block text-center p-2 bg-primary text-white ">Connexion</h2>
    </div>  

<form>
  
  <div class="form-group pt-3">
      <label for="email">Entrez votre e-mail</label>
      <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
    </div>
        <div class="form-group pt-3">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
        </div>

        <div class="form-check mb-3">
              <input type="checkbox" class="form-check-input" id="rememberMe">
              <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
            </div class="text-center pt-3">

    <div class="text-center pt-3">
    <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
    </div>
  </form>
</div>

<!-- ------------------- INSERTION FOOTER ------------------- -->

<?php
include("init/_footer.php");