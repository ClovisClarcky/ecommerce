<!-- Template loading -->
      <?php
        require "template/nav.php";
        require "template/header.php";
       ?>

<!-- Main Start -->
<?php
  try
  {
// On se connecte à MySQL
   $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'root');
  }
  catch(Exception $e)
  {
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : '.$e->getMessage());
  }
  // Si tout va bien, on peut continuer

 // On récupère tout le contenu de la table jeux_video
  $reponse = $bdd->query('SELECT * FROM product');


  ?>

  <div class="title text-center">
    <h2>Nos Produits</h2>
  </div>
  <div class="row">
    <?php  while ($donnees = $reponse->fetch())
    {?>
        <!-- Affichage du premier produit -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">

                <a href="#"><img class="card-img-top" src="img/chevroletMin.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo $donnees['name']; ?>
                  </h4>
                  <h5 class="card-price">
                    <?php echo $donnees['price'] . ' euros'; ?>
                  </h5>
                  </div>
                <div class="card-footer">
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailModalCenter">
                       Détails
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="detailModalCenter" tabindex="-1" role="dialog" aria-labelledby="detailModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                       <h5 class="modal-title" id="detailModalCenterTitle">Informations sur le Produit</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                </div>
                           <div class="modal-body">
                             ...
                           </div>
                          <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Ajouter au Pannier</button>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- end modal -->
                </div>
              </div>
            </div>
        <!-- Affichage du deuxieme produit -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/xboxOneMin.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo $donnees['name']; ?>
                  </h4>
                  <h5 class="card-price">
                    <?php echo $donnees['price'] . ' euros'; ?>
                  </h5>
                  </div>
                <div class="card-footer">
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailModalCenter">
                       Détails
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="detailModalCenter" tabindex="-1" role="dialog" aria-labelledby="detailModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                       <h5 class="modal-title" id="detailModalCenterTitle">Informations sur le Produit</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                </div>
                           <div class="modal-body">
                             ...
                           </div>
                          <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Ajouter au Pannier</button>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- end modal -->
                </div>
              </div>
            </div>
             <!-- Affichage du troisieme produit -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/macbookMin.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo $donnees['name']; ?>
                  </h4>
                  <h5 class="card-price">
                    <?php echo $donnees['price'] . ' euros'; ?>
                  </h5>
                  </div>
                <div class="card-footer">
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailModalCenter">
                       Détails
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="detailModalCenter" tabindex="-1" role="dialog" aria-labelledby="detailModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                       <h5 class="modal-title" id="detailModalCenterTitle">Informations sur le Produit</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                </div>
                           <div class="modal-body">
                             ...
                           </div>
                          <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Ajouter au Pannier</button>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- end modal -->
                </div>
              </div>
            </div>
        <!-- Affichage du quatrieme produit -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/vttMin.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo $donnees['name']; ?>
                  </h4>
                  <h5 class="card-price">
                    <?php echo $donnees['price'] . ' euros'; ?>
                  </h5>
                  </div>
                <div class="card-footer">
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailModalCenter">
                       Détails
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="detailModalCenter" tabindex="-1" role="dialog" aria-labelledby="detailModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                       <h5 class="modal-title" id="detailModalCenterTitle">Informations sur le Produit</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                </div>
                           <div class="modal-body">
                             ...
                           </div>
                          <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Ajouter au Pannier</button>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- end modal -->
                </div>
              </div>
            </div>
       <!-- Affichage du cinquieme produit -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/rolexMin.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo $donnees['name']; ?>
                  </h4>
                  <h5 class="card-price">
                    <?php echo $donnees['price'] . ' euros'; ?>
                  </h5>
                  </div>
                <div class="card-footer">
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailModalCenter">
                       Détails
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="detailModalCenter" tabindex="-1" role="dialog" aria-labelledby="detailModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                       <h5 class="modal-title" id="detailModalCenterTitle">Informations sur le Produit</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                </div>
                           <div class="modal-body">
                             ...
                           </div>
                          <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Ajouter au Pannier</button>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- end modal -->
                </div>
              </div>
            </div>
        <!-- Affichage du sixième produit -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="img/bluedressMin.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <?php echo $donnees['name']; ?>
                  </h4>
                  <h5 class="card-price">
                    <?php echo $donnees['price'] . ' euros'; ?>
                  </h5>
                  </div>
                <div class="card-footer">
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailModalCenter">
                       Détails
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="detailModalCenter" tabindex="-1" role="dialog" aria-labelledby="detailModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                       <h5 class="modal-title" id="detailModalCenterTitle">Informations sur le Produit</h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                         </button>
                                </div>
                           <div class="modal-body">
                             ...
                           </div>
                          <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Ajouter au Pannier</button>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- end modal -->
                </div>
              </div>
            </div>
            <?php // fin de la boucle
                   }
                $reponse->closeCursor(); // Termine le traitement de la requête
             ?>
          </div>
          <!-- /.row -->



        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<!-- End Main -->

    <!-- Footer -->
<?php require "template/footer.php"; ?>
