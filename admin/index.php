<!-- Template loading -->
      <?php
        require "../template/nav.php";
       ?>

<!-- Main Start -->

<div class="jumbotron jumbotron-fluid">
<div class="container text-center">
  <h1 class="display-4">Administration du Site</h1>
  <p class="lead">Veuillez vous connecter avec votre Login et votre Mot de Passe</p>
</div>
</div>
<div class="container">
  <?php
  // Débuter la session
  session_start();
    // Déclaration de variables pour donner des valeurs par défaut à Login et Password
     $userLogin = 'clovis';
     $userPassword = '123456';

    // faire des condtions pour verifier lorsqu'on click sur le bouton Se connecter
    if (isset($_POST['submit'])) {
      $login = $_POST['login'];
      $password = $_POST['password'];

      if ($login && $password) {

        if ($login==$userLogin && $password==$userPassword) {

        $_SESSION['login']=$login;
        header('Location: admin.php');

        }
        else {
          echo "Login ou Mot de passe incorrect";
        }
      }
      else {
        echo "Veuillez remplir tous les champs";
      }
    }
   ?>

    <form action="" method="POST">
      <div class="form-group">
        <label for="InputLogin">Login</label>
        <input type="text" name="login" class="form-control" id="InputLogin"  placeholder="Saisir le Login">
      </div>
  <div class="form-group">
    <label for="InputPassword">Mot de Passe</label>
    <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Saisir le Mot de Passe">
    <small id="passwordHelp" class="form-text text-muted">Ne jamais communiquer votre Mot de passe</small>
  </div>
  <button type="submit"  name="submit" class="btn btn-primary">Se connecter</button>
</form>

</div>

<!-- End Main -->

    <!-- Footer -->
<?php require "../template/footer.php"; ?>
