<!-- ------------------- INSERTION HEADER ET INIT ------------------- -->

<?php
include("init/_init.php");

include("init/_header.php");

?>

<!-- ---------------------------- FORMULAIRE D'INSCRIPTION ----------------------------- -->

<div class="container my-5 border border-dark rounded shadow p-3 bg-body-tertiary ">
    <div class="d-flex justify-content-center ">  
    <h2 class="border border-dark rounded d-inline-block text-center p-2 bg-success text-white ">Inscription</h2>
    </div>  

<form>
  
  <div class="form-group pt-3">
    <!-- pseudo -->
    <label class="form-label m-2" for="login">Pseudo* :</label>
    <input class="form-control " type="text" id="login" name="login" placeholder="Choisissez un pseudo">
    <!-- E-MAIL -->
      <label for="email">Entrez votre e-mail*</label>
      <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
    </div>
        <div class="form-group pt-3">
        <label for="password">Mot de passe*</label>
        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
        </div>
        <!-- Verification du mot de passe -->
        <label class="form-label m-2" for="password2">Vérification du mot de passe* :</label>
    <input class="form-control" type="password" id="password2" name="password2" placeholder="Confirmez votre mot de passe">

    <div class="text-center pt-3">
    <button type="submit" class="btn btn-success btn-block">INSCRIPTION</button>
    </div>
  </form>
</div>

<!-- ------------------- INSERTION FOOTER ------------------- -->

<?php
include("init/_footer.php");