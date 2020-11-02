 <?php 

              function creatPanier(){
                  if(!isset($_SESSION['panier'])){
                      $_SESSION['panier']=array();
                      $_SESSION['panier']['listeProduit']=array();
                      $_SESSION['panier']['qteProduit']=array();
                      $_SESSION['panier']['prixProduit']=array();
                      $_SESSION['panier']['verrou']= false;
                      $select = $cnx->query("SELECT TVA FROM produit");
                      $TVA = $select->fetch(PDO::FETCH_OBJ);
                      $_SESSION['panier']['TVA'] = $TVA;
                  }
                  return true;
              }

              function ajouterArticle($listeProduit,$qteProduit,$prixProduit){
                  if(creatPanier() && !isVerrouille()){

                    $position_produit = array_search($listeProduit,$_SESSION['panier']['listeProduit']);
                        if($position_produit !== false){
                            $_SESSION['panier']['listeProduit'][$position_produit] += $qteProduit;

                        }

                        else{
                            array_push($_SESSION['panier']['listeProduit'],$listeProduit);
                            array_push($_SESSION['panier']['qteProduit'],$qteProduit);
                            array_push($_SESSION['panier']['prixProduit'],$prixProduit);

                        }

                        // else{
                            // echo 'Erreur';
                        }
                  }

                //   function ModifierQteProduit($listeProduit,$qteProduit){
                    //   if(creatPanier() && !isVerrouille()){
                        //   if($qteProduit>0){

                            // $position_produit = array_search($_SESSION['panier']['listeProduit'],$listeProduit)
                            // if($position_produit!==false){
                                // $_SESSION['panier']['listeProduit'][$position_produit] = $qteProduit;

                            // }

                            // else{
                                // supprimerProduit($listeProduit);
                            // }

                            // else{
                                // echo 'Erreur';
                            // }
                        //   }
                    //   }

                //   }
            //   }

            //   function supprimerProduit($listeProduit){
                //   if(creatPanier() && !isVerrouille()){
                    // $tmp = array();
                    // $tmp['listeProduit']= array();
                    // $tmp['qteProduit']= array();
                    // $tmp['prixProduit']= array();
                    // $tmp['verrou']= array();

                //   }
                //   else{
                    //   echo "veuillez contactez l'administrateur";
                //   }
            //   }

        ?>