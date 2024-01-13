<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="stylesheet" href="site.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
</head>
<body>

    <section >
        <div id="header">
        <a href="#"><img src="logo_niadou_shop.jpg" alt="logo de la marque" class="logo"></a>
        <div class="liste">
            <ul id="navbar">
             
                <li><a href="sitee.php">HOME</a></li>
                <li><a href="#">SHOP</a>
                    <ul class="sousmenu">
                    <li><a href="robe.php">Robe</a></li>
                    <li><a href="chemise.php">Chemise</a></li>
                    <li><a href="kimono.php">Kimono</a></li>
                    <li><a href="manteau.php">Manteaux</a></li>
                    
                    </ul>
                </li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li id="lg-bag"><a href="#"><i class="bx bx-search" id="search-icon"></i></a></li>
                <li id="lg-bag"><a href="login.php"><i class="bx bx-user"></i></a></li>
                <li id="lg-bag"><a class="active" href="carte.php"><i class="bx bx-cart" ></i></a></li>
            </ul>
        </div>
   


    </div>
   
     </section>
    
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Supprimer</td>
                    <td>Image</td>
                    <td>Article</td>
                    <td>Prix</td>
                    <td>Quantité</td>
                    <td>Prix Total</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="far fa-times-circle"></i>
                    <a href="#"></a></td>
                    <td><img src="chemiseblanche.jpg" alt="chemise blanche"></td>
                    <td>chemise blanche </td>
                    <td>200,00 DH</td>
                    <td><input type="number" value="1"></td>
                    <td>200,00 DH</td>
                </tr>
                <tr>
                    <td><i class="far fa-times-circle"></i>
                    <a href="#"></a></td>
                    <td><img src="kimonobleuroi.jpg" alt="kimono bleu roi"></td>
                    <td>kimono bleu roi </td>
                    <td>600,00 DH</td>
                    <td><input type="number" value="1"></td>
                    <td>600,00 DH</td>
                </tr>
                <tr>
                    <td><i class="far fa-times-circle"></i>
                    <a href="#"></a></td>
                    <td><img src="minimonteaucamel.jpg" alt="manteau camel"></td>
                    <td>manteau court  </td>
                    <td>350,00 DH</td>
                    <td><input type="number" value="1"></td>
                    <td>350,00 DH</td>
                </tr>
                <tr>
                    <td><i class="far fa-times-circle"></i>
                    <a href="#"></a></td>
                    <td><img src="robe_femme3.jpeg" alt="robe"></td>
                    <td>robe </td>
                    <td>300,00 DH</td>
                    <td><input type="number" value="1"></td>
                    <td>300,00 DH</td>
                </tr>
                <tr>
                    <td><i class="far fa-times-circle"></i>
                    <a href="#"></a></td>
                    <td><img src="robe_soirée_femme9.jpeg" alt="robe soirée orange"></td>
                    <td>robe soirée </td>
                    <td>1399,00 DH</td>
                    <td><input type="number" value="1"></td>
                    <td>1399,00 DH</td>
                </tr>
            </tbody>
        </table>
    </section>

   <section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>apply coupon</h3>
        <div>
            <input type="text" placeholder="enter your coupon">
            <button class="normal">apply</button>
        </div>
    </div>

    <div id="subtotal">
        <h3>carte totals </h3>
        <table>
            <tr>
                <td>carte subtotal</td>
                <td>500,00 DH</td>
            </tr>
            <tr>
                <td>shipping</td>
                <td>free</td>
            </tr>
            <tr>
                <td>total</td>
                <td>500,00 DH</td>
            </tr>
        </table>
        <button class="normal">roceed to checkout</button>
    </div>
    
   </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Inscrivez-vous Aux Newsletters</h4>
            <p>Recevez des mises à jour par E-mail sur notre dernière boutique et nos <span>offres spéciales.</span></p>
        </div>
        <div class="from">
            <input type="text" placeholder="votre adresse email">
            <button class="normal">S'inscrire</button>

        </div>
    </section>


    <footer class="section-p1">
        <div class="col">
            <img src="logo_niadou_shop.jpg" alt="logo de mon entreprise" class="logo">
            <h4>Contact</h4>
            <p><strong>Addresse:</strong> Lot Nora N 19 Deroua  </p>
            <P><strong>Téléphone:</strong> 05 18 01 02 88</P>
            <P><strong>Heures:</strong> 09:00 - 18:00</P>

            <div class="follow">
                <h4>Suivez-nous</h4>
                <div class="icon">
                
                    <a href="https://www.facebook.com/profile.php?id=61553136119107">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <i class="fab fa-twitter"></i>
                    <a href="https://www.instagram.com/marwayou327/"><i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/99134169/admin/feed/posts/
">
                         <i class="fab fa-linkedin"></i>
                    </a>
                   
                </div>
            </div>

        </div>
        <div class="col">
            <h4>à propos</h4>
            <a href="#">à propos de nous</a>
            <a href="#">Information de livraison</a>
            <a href="#">Politique de confidentialité </a>
            <a href="#">termes & Conditions</a>
            <a href="#">Contactez-nous</a>
        </div>
        <div class="col">
            <h4>Mon Compte</h4>
            <a href="#">Se Connecter</a>
            <a href="#">Voir le panier</a>
            <a href="#">Ma Liste d'envies</a>
            <a href="#">Suivre Ma Commande</a>
            <a href="#">Aide</a>
        </div>

        <div class="col install">
            <h4>Installer Application</h4>
            <p>Depuis L'app Store ou Google Play</p>
            <div class="row">
                <img src="app.jpg" alt="app store">
                <img src="play.jpg" alt="google play">
            </div>
            <p>Passerelles de paiement sécurisées</p>
            <img src="pay.png" alt="type des cartes bancaires">
        </div>

        <div class="copyright">
            <p>&copy 2023, Magazin des vetements Niadou </p>
        </div>
    </footer>


</body>
</html>