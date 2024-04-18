<!-- ------------------- INSERTION HEADER ET INIT ------------------- -->

<?php
include("init/_init.php");

include("init/_header.php");

?>


<div class="container my-5 border border-dark rounded shadow p-3 bg-body-tertiary">
  <h2 class="text-center mb-4">Contactez-nous</h2>
  <form>
    <div class="form-group pt-3 ">
      <label for="name">Nom</label>
      <input type="text" class="form-control" id="name" placeholder="Entrez votre nom">
    </div>
    <div class="form-group pt-3">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
    </div>
    <div class="form-group pt-3">
      <label for="subject">Sujet</label>
      <input type="text" class="form-control" id="subject" placeholder="Entrez le sujet de votre message">
    </div>
    <div class="form-group pt-3">
      <label for="message">Message</label>
      <textarea class="form-control" id="message" rows="5" placeholder="Entrez votre message"></textarea>
    </div>
    <div class="text-center pt-3">
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
  </form>
</div>

<!-- ------------------- INSERTION FOOTER ------------------- -->

<?php
include("init/_footer.php");