<!-- Template loading -->
      <?php
        require "../template/nav.php";
       ?>

<!-- Main Start -->

<?php

// Débuter la session
    session_start();
  // verifier si lutilisateur(admin) existe afin de le rediriger sur la page Admin
  if (isset($_SESSION['login'])) {
  // if (isset($_GET['action'])) {
    // if ($_GET['action']=='add') {

?>

<?php

    }

  else {
    header('Location:../index.php');
  }
 ?>

<div class="jumbotron jumbotron-fluid">
<div class="container text-center">
  <!-- Afficher un message de Bienvenue avec le Login de l'utilisateur-->
  <h1 class="display-4">Bienvenue</h1>
  <p class="lead"><?php echo $_SESSION['login']; ?></p>
</div>
</div>

 <div class="container text-center">
   <div class="row">
    <div class="col-sm">
      <a href="../admin/ajout.php">Ajouter un Produit</a>
    </div>
    <div class="col-sm">
      <a href="?action=modify">Modifier un Produit</a>
    </div>
    <div class="col-sm">
       <a href="?action=delete">Supprimer un Produit</a>
    </div>
  </div>
</div>

<!-- End Main -->

    <!-- Footer -->
<?php require "../template/footer.php"; ?>
