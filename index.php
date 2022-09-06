<?php
include('_config.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Store</title>
    <script src="https://kit.fontawesome.com/ce6abbadbc.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <h1>GAME STORE</h1>
            </div>

            <ul class="catalogue">
                <li class="off">
                    <span>Catalogue</span>
                </li>
                <li>
                    <i class="fa-solid fa-user"></i>
                    <a href="">Profil</a>
                </li>

                <li>
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <a href="">Rechercher</a>
                </li>

                <li>
                    <i class="fa-solid fa-fire-flame-curved"></i>
                    <a href="">Promotions</a>
                </li>

                <li>
                    <i class="fa-solid fa-heart"></i>
                    <a href="">Favoris</a>
                </li>
            </ul>

            <p></p>

            <ul class="categories">
                <li class="off">
                    <span>Catégories</span>
                </li>
                <li>
                    <i class="fa-solid fa-computer"></i>
                    <a href="#ordinateur">Ordinateur</a>
                </li>
                <li>
                    <i class="fa-solid fa-tv"></i>
                    <a href="#moniteur">Moniteur Gaming</a>
                </li>
                <li>
                    <i class="fa-solid fa-headset"></i>
                    <a href="#casque">Casque Gaming</a>
                </li>
                <li>
                    <i class="fa-solid fa-keyboard"></i>
                    <a href="#clavier">Clavier Gaming</a>
                </li>
                <li>
                    <i class="fa-solid fa-computer-mouse"></i>
                    <a href="#souris">Souris Gaming</a>
                </li>
                <li>
                    <i class="fa-solid fa-gamepad"></i>
                    <a href="#manette">Manette</a>
                </li>
                <li>
                    <i class="fa-solid fa-circle-plus"></i>
                    <a href="#accessoire">Accessoire</a>
                </li>
            </ul>
        </nav>
    </header>


    <!-- PAGE PRINCIPALE -->

    <section class="accueil">
        <div class="slider">
            <article class="active">
                <div class="container-slider">
                    <div class="details-produit">
                        <h1>Clavier Ducky One 2 MINI - RGB</h1>
                        <h2>Le meilleur clavier gaming 60%</h2>
                        <hr>
                        <p>Dual color bezels to match all varieties of keycap colorways <br> Features Cherry MX key switches</p>
                        <button><i class="fa-solid fa-basket-shopping"></i>Ajouter au panier</button>
                    </div>
                    <img src="img/clavier/ducky.png" alt="">
                </div>
            </article>

            <a href=""></a>

            <article>

                <div class="container-slider">

                    <div class="details-produit">
                        <h1>Souris Logitech G502 Lightspeed</h1>
                        <h2>La souris gaming haute performance</h2>

                        <hr>

                        <p>une sensibilité de 200 à 25 600 PPP et des poids repositionnables</p>

                        <button><i class="fa-solid fa-basket-shopping"></i>Ajouter au panier</button>
                    </div>

                    <img src="img/souris/g502.png" alt="">

                </div>
            </article>

        </div>

        <!-- PRODUIT -->

        <section class="wrapper-produit">

            <h1>Produits</h1>

            <div class="filtre">
                <button>Top</button>
                <button>Populaires</button>
                <button>recommandé</button>
                <button><i class="fa-solid fa-filter"></i>Filtre</button>
            </div>

            <div class="container-produits">

            <form action="traitement.php" method="POST">
                <div class="container-pdt">

                        <img src="img/clavier/clavier1.png" onmouseover="javascript:this.src='img/clavier/clavier1.2.png';" onmouseout="javascript:this.src='img/clavier/clavier1.png';" />

                        <h3>Razer Blackshark v3</h3>
                        <p class="categorie">Clavier</p>

                            <div class="prix-quantite">
                                <p>149.99€</p>
                                <select name="quantite" id="quantite">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                        <button type="submit" class="add">Acheter immédiatement</button>
                    
                </div>
                </form>

                <div class="container-pdt">
                    <img src="img/casque/casque1.png" onmouseover="javascript:this.src='img/casque/casque1.2.png';" onmouseout="javascript:this.src='img/casque/casque1.png';" />
                    <h3>Hyper X Cloud II RED
                    </h3>
                    <p class="categorie">Casque</p>
                    <p>39.99€</p>
                    <button class="add">Ajouter au panier</button>
                </div>

                <div class="container-pdt">
                    <img src="img/souris/souris1.png" onmouseover="javascript:this.src='img/souris/souris1.2.png';" onmouseout="javascript:this.src='img/souris/souris1.png';" />
                    <h3>Razer Viper Ultimate</h3>
                    <p class="categorie">Souris</p>
                    <p>49.99€</p>
                    <button class="add">Ajouter au panier</button>
                </div>

                <div class="container-pdt">
                    <img src="img/ordi/ordi1.png" onmouseover="javascript:this.src='img/ordi/ordi1.2.png';" onmouseout="javascript:this.src='img/ordi/ordi1.png';" />
                    <h3>ROG Strix Scar 3060ti</h3>
                    <p class="categorie">Ordinateur</p>
                    <p>1799.99€</p>
                    <button class="add">Ajouter au panier</button>
                </div>
            </div>

            <div class="container-produits">

                <div class="container-pdt">
                    <img src="img/moniteur/écran1.png" onmouseover="javascript:this.src='img/moniteur/ecran1.2.png';" onmouseout="javascript:this.src='img/moniteur/écran1.png';" />
                    <h3>Curved MSI MAG241C 240hz</h3>
                    <p class="categorie">Moniteur</p>
                    <p>449.99€</p>
                    <button class="add">Ajouter au panier</button>
                </div>

                <div class="container-pdt">
                    <img src="img/casque/casque2.png" onmouseover="javascript:this.src='img/casque/casque2.2.png';" onmouseout="javascript:this.src='img/casque/casque2.png';" />
                    <h3>Logitech G Pro X Blue
                    </h3>
                    <p class="categorie">Casque</p>
                    <p>79.99€</p>
                    <button class="add">Ajouter au panier</button>
                </div>

                <div class="container-pdt">
                    <img src="img/accessoire/stand1.png" onmouseover="javascript:this.src='img/accessoire/stand1.2.png';" onmouseout="javascript:this.src='img/accessoire/stand1.png';" />
                    <h3>Canyon Gaming Stand
                    </h3>
                    <p class="categorie">Accessoire</p>
                    <p>29.99€</p>
                    <button class="add">Ajouter au panier</button>
                </div>

                <div class="container-pdt">
                    <img src="img/accessoire/tapis1.png" alt="">
                    <h3>RGB Hard Gaming Tapis</h3>
                    <p class="categorie">Accessoire</p>
                    <p>19.99€</p>
                    <button class="add">Ajouter au panier</button>
                </div>

            </div>


            <!-- MORE PRODUCT -->

            <div class="button-center">
                <button class="plus">Afficher plus</button>
            </div>

            <div class="hidden">

                <div class="container-produits">

                    <div class="container-pdt">
                        <img src="img/manette/xbox1.png" onmouseover="javascript:this.src='img/manette/xbox1.2.png';" onmouseout="javascript:this.src='img/manette/xbox1.png';" />
                        <h3>Manette Xbox One X</h3>
                        <p class="categorie">Manette</p>
                        <p>49.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/manette/ps1.png" onmouseover="javascript:this.src='img/manette/ps1.2.png';" onmouseout="javascript:this.src='img/manette/ps1.png';" />
                        <h3>Manette PS4 - RED
                        </h3>
                        <p class="categorie">Manette</p>
                        <p>49.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/ordi/ordi2.png" onmouseover="javascript:this.src='img/ordi/ordi2.1.png';" onmouseout="javascript:this.src='img/ordi/ordi2.png';" />
                        <h3>Tour Gaming - ROG 
                        </h3>
                        <p class="categorie">Ordinateur</p>
                        <p>29.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/moniteur/moniteur2.png" onmouseover="javascript:this.src='img/moniteur/moniteur2.1.png';" onmouseout="javascript:this.src='img/moniteur/moniteur2.png';" />
                        <h3>Acer Gaming HQ - 165hz</h3>
                        <p class="categorie">Moniteur</p>
                        <p>379.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                </div>

                <div class="container-produits">

                    <div class="container-pdt">
                        <img src="img/souris/souris2.png" onmouseover="javascript:this.src='img/souris/souris2.2.png';" onmouseout="javascript:this.src='img/souris/souris2.png';" />
                        <h3>Razer Naga Pro Wireless</h3>
                        <p class="categorie">Souris</p>
                        <p>109.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/casque/casque3.png" onmouseover="javascript:this.src='img/casque/casque3.2.png';" onmouseout="javascript:this.src='img/casque/casque3.png';" />
                        <h3>Razer Kraken Tournament
                        </h3>
                        <p class="categorie">Casque</p>
                        <p>99.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/accessoire/stand2.png" onmouseover="javascript:this.src='img/accessoire/stand2.1.png';" onmouseout="javascript:this.src='img/accessoire/stand2.png';" />
                        <h3>Havit TH630 RGB Stand
                        </h3>
                        <p class="categorie">Accessoire</p>
                        <p>49.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/ordi/ordi3.png" onmouseover="javascript:this.src='img/ordi/ordi3.1.png';" onmouseout="javascript:this.src='img/ordi/ordi3.png';" />
                        <h3>Lenovo Ideapad 2080ti</h3>
                        <p class="categorie">Ordinateur</p>
                        <p>749.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                </div>
            </div>


            <!-- LES CATEGORIES -->


            <!-- Ordinateur -->
            <div id="ordinateur">

                <div class="background">
                    <h1>ORDINATEUR GAMING</h1>
                </div>


                <div class="wrapper-container-produits">

                <div class="container-select-ordi">
                    <select name="" id="ordiType">
                        <option value="">Type d'ordinateur</option>
                        <option value="">Portable</option>
                        <option value="">Bureau</option>
                    </select>
                </div>

                <div class="container-produits">

                    <div class="container-pdt">
                        <img src="img/ordi/ordi4.png" onmouseover="javascript:this.src='img/ordi/ordi4.1.png';" onmouseout="javascript:this.src='img/ordi/ordi4.png';" />
                        <h3>HP Pavillon Gaming 2070ti</h3>
                        <p class="categorie">Ordinateur</p>
                        <p>679.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    
                    <div class="container-pdt">
                        <img src="img/ordi/ordi5.png" onmouseover="javascript:this.src='img/ordi/ordi5.1.png';" onmouseout="javascript:this.src='img/ordi/ordi5.png';" />
                        <h3>Razer Blade 17" 3090ti</h3>
                        <p class="categorie">Ordinateur</p>
                        <p>1299.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/ordi/ordi6.png" onmouseover="javascript:this.src='img/ordi/ordi6.1.png';" onmouseout="javascript:this.src='img/ordi/ordi6.png';" />
                        <h3>Dell Alienware m15 3070</h3>
                        <p class="categorie">Ordinateur</p>
                        <p>969.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/ordi/ordi3.png" onmouseover="javascript:this.src='img/ordi/ordi3.1.png';" onmouseout="javascript:this.src='img/ordi/ordi3.png';" />
                        <h3>Lenovo Ideapad 2080ti</h3>
                        <p class="categorie">Ordinateur</p>
                        <p>749.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>
                </div>

                <div class="container-produits">
                    
                    <div class="container-pdt">
                        <img src="img/ordi/ordi7.png" onmouseover="javascript:this.src='img/ordi/ordi7.1.png';" onmouseout="javascript:this.src='img/ordi/ordi7.png';" />
                        <h3>Tour Gaming LDLC</h3>
                        <p class="categorie">Ordinateur</p>
                        <p>769.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>


                    <div class="container-pdt">
                        <img src="img/ordi/ordi8.png" onmouseover="javascript:this.src='img/ordi/ordi8.1.png';" onmouseout="javascript:this.src='img/ordi/ordi8.png';" />
                        <h3>Tour Gaming RAZER</h3>
                        <p class="categorie">Ordinateur</p>
                        <p>3109.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>


                    <div class="container-pdt">
                        <img src="img/ordi/ordi9.png" onmouseover="javascript:this.src='img/ordi/ordi9.1.png';" onmouseout="javascript:this.src='img/ordi/ordi9.png';" />
                        <h3>Tour Gaming HP OMEN</h3>
                        <p class="categorie">Ordinateur</p>
                        <p>2499.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>


                    <div class="container-pdt">
                        <img src="img/ordi/ordi10.png" onmouseover="javascript:this.src='img/ordi/ordi10.1.png';" onmouseout="javascript:this.src='img/ordi/ordi10.png';" />
                        <h3>Tour Gaming Corsair</h3>
                        <p class="categorie">Ordinateur</p>
                        <p>899.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>
                </div>
            </div>

        </div>

            <!-- Moniteur -->
            <div id="moniteur">

                <div class="background">
                    <h1>MONITEUR GAMING</h1>
                </div>

                <div class="wrapper-container-produits">

                    <form action="">

                    <div class="container-select-monitor">
                        <select name="" id="moniteurType">
                            <option value="">Taille d'écran</option>
                            <option value="">24"</option>
                            <option value="">27"</option>
                            <option value="">29"</option>
                            <option value="">32"</option>
                            <option value="">34"</option>
                        </select>
                    </div>

                    <div class="container-select-monitor">
                        <select name="" id="moniteurType">
                            <option value="">Taux de rafraichissement</option>
                            <option value="">120hz</option>
                            <option value="">144hz</option>
                            <option value="">165hz</option>
                            <option value="">240hz</option>
                        </select>
                    </div>

                    <button type="submit" id="monitorBtn">Rechercher</button>
                    </form>
        
                        <div class="container-produits">
        
                            <div class="container-pdt">
                                <img src="img/moniteur/moniteur3.png" onmouseover="javascript:this.src='img/moniteur/moniteur3.1.png';" onmouseout="javascript:this.src='img/moniteur/moniteur3.png';" />
                                <h3>Samsung Odyssey G9</h3>
                                <p class="categorie">Moniteur</p>
                                <p>1899.99€</p>
                                <button class="add">Ajouter au panier</button>
                            </div>
        
                            <div class="container-pdt">
                                <img src="img/moniteur/moniteur4.png" onmouseover="javascript:this.src='img/moniteur/moniteur4.1.png';" onmouseout="javascript:this.src='img/moniteur/moniteur4.png';" />
                                <h3>AOC Legion 144hz </h3>
                                <p class="categorie">Moniteur</p>
                                <p>399.99€</p>
                                <button class="add">Ajouter au panier</button>
                            </div>
        
                            <div class="container-pdt">
                                <img src="img/moniteur/moniteur5.png" onmouseover="javascript:this.src='img/moniteur/moniteur5.1.png';" onmouseout="javascript:this.src='img/moniteur/moniteur5.png';" />
                                <h3>Xiaomi Mi Wide GT </h3>
                                <p class="categorie">Moniteur</p>
                                <p>549.99€</p>
                                <button class="add">Ajouter au panier</button>
                            </div>
        
                            <div class="container-pdt">
                                <img src="img/moniteur/moniteur6.png" onmouseover="javascript:this.src='img/moniteur/moniteur6.1.png';" onmouseout="javascript:this.src='img/moniteur/moniteur6.png';" />
                                <h3>TUF GAMING VG24QR 165hz </h3>
                                <p class="categorie">Moniteur</p>
                                <p>419.99€</p>
                                <button class="add">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div class="container-produits">
                            <div class="container-pdt">
                                <img src="img/moniteur/moniteur7.png" onmouseover="javascript:this.src='img/moniteur/moniteur7.1.png';" onmouseout="javascript:this.src='img/moniteur/moniteur7.png';" />
                                <h3>Westinghouse WQHD Free </h3>
                                <p class="categorie">Moniteur</p>
                                <p>219.99€</p>
                                <button class="add">Ajouter au panier</button>
                            </div>
        
        
                            <div class="container-pdt">
                                <img src="img/moniteur/moniteur8.png" onmouseover="javascript:this.src='img/moniteur/moniteur8.1.png';" onmouseout="javascript:this.src='img/moniteur/moniteur8.png';" />
                                <h3>ROG Gaming Screen FDLN23 </h3>
                                <p class="categorie">Moniteur</p>
                                <p>479.99€</p>
                                <button class="add">Ajouter au panier</button>
                            </div>
        
        
                            <div class="container-pdt">
                                <img src="img/moniteur/moniteur9.png" onmouseover="javascript:this.src='img/moniteur/moniteur9.1.png';" onmouseout="javascript:this.src='img/moniteur/moniteur9.png';" />
                                <h3>Dell S24GHG FHD </h3>
                                <p class="categorie">Moniteur</p>
                                <p>179.99€</p>
                                <button class="add">Ajouter au panier</button>
                            </div>
        
        
                            <div class="container-pdt">
                                <img src="img/moniteur/moniteur10.png" onmouseover="javascript:this.src='img/moniteur/moniteur10.1.png';" onmouseout="javascript:this.src='img/moniteur/moniteur10.png';" />
                                <h3>Xiaomi Mi Essential </h3>
                                <p class="categorie">Moniteur</p>
                                <p>139.99€</p>
                                <button class="add">Ajouter au panier</button>
                            </div>
                        </div>
            
                </div>
            </div>


            <!-- Casque -->
            <div id="casque">

                <div class="background">
                    <h1>CASQUE GAMING</h1>
                </div>

                <div class="wrapper-container-produits">

                <div class="container-produits">

                    <div class="container-pdt">
                        <img src="img/casque/casque3.png" onmouseover="javascript:this.src='img/casque/casque3.2.png';" onmouseout="javascript:this.src='img/casque/casque3.png';" />
                        <h3>Razer Kraken Tournament
                        </h3>
                        <p class="categorie">Casque</p>
                        <p>99.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/casque/casque4.png" onmouseover="javascript:this.src='img/casque/casque4.1.png';" onmouseout="javascript:this.src='img/casque/casque4.png';" />
                        <h3>Razer Kraken pink ed.
                        </h3>
                        <p class="categorie">Casque</p>
                        <p>89.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/casque/casque5.png" onmouseover="javascript:this.src='img/casque/casque5.1.png';" onmouseout="javascript:this.src='img/casque/casque5.png';" />
                        <h3>Corsair SCUF H1
                        </h3>
                        <p class="categorie">Casque</p>
                        <p>149.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/casque/casque6.png" onmouseover="javascript:this.src='img/casque/casque6.1.png';" onmouseout="javascript:this.src='img/casque/casque6.png';" />
                        <h3>Steelseries Arctis 3
                        </h3>
                        <p class="categorie">Casque</p>
                        <p>129.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>
                </div>
            </div>
            </div>

            <!-- Clavier -->

            <div id="clavier">

                <div class="background">
                    <h1>CLAVIER GAMING</h1>
                </div>

                <div class="wrapper-container-produits">

                <div class="container-produits">

                    <div class="container-pdt">
                        <img src="img/clavier/clavier2.png" onmouseover="javascript:this.src='img/clavier/clavier2.1.png';" onmouseout="javascript:this.src='img/clavier/clavier2.png';" />
                        <h3>Corsaire MEGA RGB 100%</h3>
                        <p class="categorie">Souris</p>
                        <p>149.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/clavier/clavier3.png" onmouseover="javascript:this.src='img/clavier/clavier3.1.png';" onmouseout="javascript:this.src='img/clavier/clavier3.png';" />
                        <h3>Logitech G PRO 90% RGB</h3>
                        <p class="categorie">Souris</p>
                        <p>179.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/clavier/clavier4.png" onmouseover="javascript:this.src='img/clavier/clavier4.1.png';" onmouseout="javascript:this.src='img/clavier/clavier4.png';" />
                        <h3>Ducky One Two WHITE RGB</h3>
                        <p class="categorie">Souris</p>
                        <p>149.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/clavier/clavier5.png" onmouseover="javascript:this.src='img/clavier/clavier5.1.png';" onmouseout="javascript:this.src='img/clavier/clavier5.png';" />
                        <h3>Blitzwolf BW-KB1 Mecha</h3>
                        <p class="categorie">Souris</p>
                        <p>79.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>
                </div>

                <div class="container-produits">

                    <div class="container-pdt">
                        <img src="img/clavier/clavier6.png" onmouseover="javascript:this.src='img/clavier/clavier6.1.png';" onmouseout="javascript:this.src='img/clavier/clavier6.png';" />
                        <h3>Ducky One Two Mini Black</h3>
                        <p class="categorie">Souris</p>
                        <p>149.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/clavier/clavier7.png" onmouseover="javascript:this.src='img/clavier/clavier7.1.png';" onmouseout="javascript:this.src='img/clavier/clavier7.png';" />
                        <h3>Roccat Magma RGB</h3>
                        <p class="categorie">Souris</p>
                        <p>69.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/clavier/clavier8.png" onmouseover="javascript:this.src='img/clavier/clavier8.1.png';" onmouseout="javascript:this.src='img/clavier/clavier8.png';" />
                        <h3>Razer BlackShark G7</h3>
                        <p class="categorie">Souris</p>
                        <p>189.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/clavier/clavier9.png" onmouseover="javascript:this.src='img/clavier/clavier9.1.png';" onmouseout="javascript:this.src='img/clavier/clavier9.png';" />
                        <h3>Anne Pro G2 White</h3>
                        <p class="categorie">Souris</p>
                        <p>119.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>
                </div>
            </div>
            </div>


                <!-- Souris -->

                <div id="souris">

                    <div class="background">
                        <h1>SOURIS GAMING</h1>
                    </div>

                    <div class="wrapper-container-produits">
    
                    <div class="container-produits">
    
                        <div class="container-pdt">
                            <img src="img/souris/souris2.png" onmouseover="javascript:this.src='img/souris/souris2.2.png';" onmouseout="javascript:this.src='img/souris/souris2.png';" />
                            <h3>Logitech G pro Wireless</h3>
                            <p class="categorie">Souris</p>
                            <p>89.99€</p>
                            <button class="add">Ajouter au panier</button>
                        </div>
    
                        <div class="container-pdt">
                            <img src="img/souris/souris3.png" onmouseover="javascript:this.src='img/souris/souris3.1.png';" onmouseout="javascript:this.src='img/souris/souris3.png';" />
                            <h3>Logitech G pro Wireless</h3>
                            <p class="categorie">Souris</p>
                            <p>89.99€</p>
                            <button class="add">Ajouter au panier</button>
                        </div>
    
                        <div class="container-pdt">
                            <img src="img/souris/souris4.png" onmouseover="javascript:this.src='img/souris/souris4.1.png';" onmouseout="javascript:this.src='img/souris/souris4.png';" />
                            <h3>HP Pavillon Sped</h3>
                            <p class="categorie">Souris</p>
                            <p>49.99€</p>
                            <button class="add">Ajouter au panier</button>
                        </div>
    
                        <div class="container-pdt">
                            <img src="img/souris/souris5.png" onmouseover="javascript:this.src='img/souris/souris5.1.png';" onmouseout="javascript:this.src='img/souris/souris5.png';" />
                            <h3>GLab M100 RGB</h3>
                            <p class="categorie">Souris</p>
                            <p>69.99€</p>
                            <button class="add">Ajouter au panier</button>
                        </div>
                    </div>
                </div>
                </div>
            


            <!-- Manette -->
            <div id="manette">

            <div class="background">
                <h1>MANETTES</h1>
            </div>

            <div class="wrapper-container-produits">

                <div class="container-produits">
        
                        <div class="container-pdt-manette">

                            <h3>Manette Xbox One X
                            </h3>

                            <img class="xbox-controller" src="img/manette/xbox/xboxblack.png" alt=""/>
            
                            <div class="colors">
                                <img class="xblack" onclick="xboxController(this.src);" src="img/manette/xbox/xboxblack.png">
                                <img class="xwhite" onclick="xboxController(this.src);" src="img/manette/xbox/xboxwhite.png">
                                <img class="xblue" onclick="xboxController(this.src);" src="img/manette/xbox/xboxblue.png">
                                <img class="xred" onclick="xboxController(this.src);" src="img/manette/xbox/xboxred.png">
                                <img class="xlime" onclick="xboxController(this.src);" src="img/manette/xbox/xboxlime.png">
                            </div>

                            <p class="categorie">Manette</p>
                            <p>69.99€</p>
                            <p>39.99€</p>
                            <button class="add">Ajouter au panier</button>
                        </div>
        
        
                        <div class="container-pdt-manette">
                            
                            <h3>Manette Playsation 4</h3>

                            <img class="ps-controller" src="img/manette/playstation/psblue.png" alt="">
            
                            <div class="colors">
                                <img class="psblue" onclick="psController(this.src);" src="img/manette/playstation/psblue.png">
                                <img class="psred" onclick="psController(this.src);" src="img/manette/playstation/psred.png">
                                <img class="pswhite" onclick="psController(this.src);" src="img/manette/playstation/pswhite.png">
                                <img class="psblack" onclick="psController(this.src);" src="img/manette/playstation/psblack.png">
                            </div>

                            <p class="categorie">Manette</p>
                            <p>69.99€</p>
                            <p>49.99€</p>
                            <button class="add">Ajouter au panier</button>
                        </div>
                </div>
            </div>
        </div>


            <!-- Accessoire -->

            <div id="accessoire">

                <div class="background">
                    <h1>ACCESSOIRE GAMING</h1>
                </div>

                <div class="wrapper-container-produits">

                <div class="container-produits">

                    <div class="container-pdt">
                        <img src="img/souris/souris2.png" onmouseover="javascript:this.src='img/souris/souris2.2.png';" onmouseout="javascript:this.src='img/souris/souris2.png';" />
                        <h3>Razer Naga Pro Wireless</h3>
                        <p class="categorie">Souris</p>
                        <p>109.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/casque/casque3.png" onmouseover="javascript:this.src='img/casque/casque3.2.png';" onmouseout="javascript:this.src='img/casque/casque3.png';" />
                        <h3>Razer Kraken Tournament
                        </h3>
                        <p class="categorie">Casque</p>
                        <p>99.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/accessoire/stand2.png" onmouseover="javascript:this.src='img/accessoire/stand2.1.png';" onmouseout="javascript:this.src='img/accessoire/stand2.png';" />
                        <h3>Havit TH630 RGB Stand
                        </h3>
                        <p class="categorie">Accessoire</p>
                        <p>49.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/ordi/ordi3.png" onmouseover="javascript:this.src='img/ordi/ordi3.1.png';" onmouseout="javascript:this.src='img/ordi/ordi3.png';" />
                        <h3>Lenovo Ideapad 2080ti</h3>
                        <p class="categorie">Ordinateur</p>
                        <p>749.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>
                </div>

                <div class="container-produits">

                    <div class="container-pdt">
                        <img src="img/souris/souris2.png" onmouseover="javascript:this.src='img/souris/souris2.2.png';" onmouseout="javascript:this.src='img/souris/souris2.png';" />
                        <h3>Razer Naga Pro Wireless</h3>
                        <p class="categorie">Souris</p>
                        <p>109.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/casque/casque3.png" onmouseover="javascript:this.src='img/casque/casque3.2.png';" onmouseout="javascript:this.src='img/casque/casque3.png';" />
                        <h3>Razer Kraken Tournament
                        </h3>
                        <p class="categorie">Casque</p>
                        <p>99.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/accessoire/stand2.png" onmouseover="javascript:this.src='img/accessoire/stand2.1.png';" onmouseout="javascript:this.src='img/accessoire/stand2.png';" />
                        <h3>Havit TH630 RGB Stand
                        </h3>
                        <p class="categorie">Accessoire</p>
                        <p>49.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>

                    <div class="container-pdt">
                        <img src="img/ordi/ordi3.png" onmouseover="javascript:this.src='img/ordi/ordi3.1.png';" onmouseout="javascript:this.src='img/ordi/ordi3.png';" />
                        <h3>Lenovo Ideapad 2080ti</h3>
                        <p class="categorie">Ordinateur</p>
                        <p>749.99€</p>
                        <button class="add">Ajouter au panier</button>
                    </div>
                </div>

            </div>
        </div>

        </section>

            <footer>
                <p>Copyright GameStore <br> Ibrahim Zaougui 2022</p>
            </footer>

    </section>

    <script src="js/script.js"></script>
</body>
</html>