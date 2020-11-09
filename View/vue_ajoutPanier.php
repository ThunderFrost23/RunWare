<?php 
            //Creation du panier sous forme de tableaux  
              function creatPanier(){
                  if(!isset($_SESSION['panier'])){
                      $_SESSION['panier']=array();
                      $_SESSION['panier']['nomProd']=array();
                      $_SESSION['panier']['refProd']=array();
                      $_SESSION['panier']['qteProduit']=array();
                      $_SESSION['panier']['prixProd']=array();
                  }
                  return true;
              }
            //   ajoute les articles au panier si le panier est crée 
              function ajouterArticle($nomProd,$qteProduit,$prixProd){
                  if(creatPanier()){

                    $position_produit = array_search($nomProd,$_SESSION['panier']['nomProd']);
                        if($position_produit !== false){
                            $_SESSION['panier']['nomProd'][$position_produit] += $qteProduit;

                        }

                        else{
                            array_push($_SESSION['panier']['nomProd'],$nomProd);
                            array_push($_SESSION['panier']['qteProduit'],$qteProduit); 
                            array_push($_SESSION['panier']['prixProd'],$prixProd); 
                        }

                        
                  }
              
              //suppression des produit   
              function supprimerProduit($nomProd){
               if(creatPanier()){
                     $tmp = array();
                     $tmp['nomProd']= array();
                     $tmp['qteProduit']= array();
                     $tmp['prixProd']= array();

                   }
                   else{
                       echo "veuillez contactez l'administrateur";
                  }
                  for($i = 0; $i < count($_SESSION['panier']['nomProd']); $i++)
                  {
                     if ($_SESSION['panier']['nomProd'][$i] !== $nomProd)
                     {
                        array_push( $tmp['nomProd'],$_SESSION['panier']['nomProd'][$i]);
                        array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
                        array_push( $tmp['prixProd'],$_SESSION['panier']['prixProd'][$i]);
                     }
            
                  }
                  //On remplace le panier en session par notre panier temporaire à jour
                  $_SESSION['panier'] =  $tmp;
                  //On efface notre panier temporaire
                  unset($tmp);
               }
               
            }
        ?>