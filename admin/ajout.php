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

<div class="jumbotron jumbotron-fluid">
<div class="container text-center">
  <!-- Afficher un message de Bienvenue avec le Login de l'utilisateur-->
  <h1 class="display-4">Bienvenue, <?php echo $_SESSION['login']; ?></h1>
  <p class="lead">Ajoutez un nouveau Produit à l'aide du Formulaire</p>
</div>
</div>

   <div class="container">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="Inputname">Nom du Produit</label>
          <input type="text" name="name" class="form-control" id="Inputname"  placeholder="Saisir le nom du produit">
        </div>
        <div class="form-group">
          <label for="Inputprice">Prix du Produit</label>
          <input type="text" name="price" class="form-control" id="Inputprice"  placeholder="Saisir le prix du produit">
        </div>
        <div class="form-group">
          <label for="Inputstock">Produit en stock</label>
          <input type="text" name="stock" class="form-control" id="Inputstock"  placeholder="Saisir la disponibilité du produit">
        </div>
        <div class="form-group">
          <label for="Inputdescription">Description du Produit</label>
          <textarea name="Description" class="form-control" id="Inputdescription"  placeholder="Saisir la description du produit"></textarea>
        </div>
        <div class="form-group">
          <label for="Inputcategory">Catégorie du Produit</label>
          <input type="text" name="category" class="form-control" id="Inputcategory"  placeholder="Saisir la catégorie du produit">
        </div>
        <div class="form-group">
          <label for="Inputmadein">Pays de provenance du Produit</label>
          <input type="text" name="madein" class="form-control" id="Inputmadein"  placeholder="Saisir le pays de provenance du produit">
        </div>
       <button type="submit"  name="submit" class="btn btn-primary">Enregistrer</button>
     </form>
    </div>
<?php
// vérfier que lutilisateur(administrateur) a renseigné tous les champs du produit
if (isset($_POST['submit'])) {
// variables pour récuperer les infos sur le produit entrées par l'utilisateur(administrateur)
$inputname = $_POST['name'];
$inputprice = $_POST['price'];
$inputstock = $_POST['stock'];
$inputdescription = $_POST['description'];
$inputcategory = $_POST['category'];
$inputmadein = $_POST['madein'];
// $inputimage = $_FILES['image']['name'];
// $image_tmp = $_FILES['image']['tmp_name'];

// if (!empty($image_tmp)) {
//   //recupérer lextension de limage
//   $image = explode('.',$inputimage);
//   $image_ext = end($image);
//     //tester la validité de limage
//   if (in_array(strtolower($image_ext),array('jpg', 'jpeg', 'png'))==false) {
//     echo'Veuillez selectionner une image au format : jpg, jpeg, png';
//   }
//   else {
//     $image_size = getimagesize($image_tmp);
//     if ($image_size['mime']=='image/jpeg') {
//
//       $image_src=imagecreatefromjpeg($image_tmp);
//     }
//     else if ($image_size['mime']=='image/png') {
//
//       $image_src=imagecreatefrompng($image_tmp);
//     }
//     else {
//       $image_src=false;
//       echo 'Veuillez rentrer une image valide';
//     }
//   }
//
// }
// else {
//   echo 'veuillez sélectionner une image ';
// }

// se connecter a la base de données si toutes les varibles sont renseignées
if ($inputname && $inputprice && $inputstock && $inputdescription && $inputcategory && $inputmadein) {

try
{
// On se connecte à MySQL
 $db = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'root');
 $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); // Les noms des champs en minuscule
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)   // Les erreurs lancent des exceptions
{
echo 'Une erreur est survenue' ;// En cas d'erreur, on affiche un message et on arrête tout
die();
}
// Si tout va bien, on peut continuer
// on insère les valeurs du formulaire dans la base de données a l'aide dune requete SQL
// preparation et execution de la requete
$insert = $db->prepare("INSERT INTO product VALUES('','$inputname','$inputprice','$inputstock','$inputdescription','$inputcategory','$inputmadein')");
$insert->execute();
}
}

}

else {
    header('Location:../index.php');
  }
 ?>

<!-- End Main -->

    <!-- Footer -->
<?php require "../template/footer.php"; ?>






<!-- elseif ($_GET['action']=='modify') {
  // code...
}
elseif ($_GET['action']=='delete') {
  // code...
}
else {
  die('une erreur s\'est produite');
}
else {
// code...
} -->
