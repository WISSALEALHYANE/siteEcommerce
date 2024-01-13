<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.table-style  {
    border-collapse: collapse;
    box-shadow: 0 5px 50px rgba(0,0,0,0.15);
    cursor: pointer;
    margin: 0px auto;
    border: 2px solid burlywood;
    margin-top: 10px;
}

thead tr {
    background-color: burlywood;
    color: #fff;
    text-align: left;
}

th, td {
    padding: 15px 20px;
    text-align: center;
}

tbody tr, td, th {
    border: 1px solid #ddd;
}

tbody tr:nth-child(even){
    background-color: #f3f3f3;
}

@media screen and (max-width: 550px) {
  body {
    align-items: flex-start;
  }
  .table-style  {
    width: 100%;
    margin: 0px;
    font-size: 10px;
  }
  th, td {
    padding: 10px 7px;
}

}
body 
{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
    margin-top: -20px;
	background: #088178;
}
.box 
{
	position: relative;
	width: 380px;
	height: 550px;
	background: #088178;
	border-radius: 8px;
	overflow: hidden;
    margin-top: 20px;
}
.box::before 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#f6ff00,#f6ff00);
	animation: animate 6s linear infinite;
}
.box::after 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#f6ff00,#f6ff00);
	animation: animate 6s linear infinite;
	animation-delay: -3s;
}
@keyframes animate 
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(360deg);
	}
}
form 
{
	position: absolute;
	inset: 2px;
	background: white;
	padding: 50px 40px;
	border-radius: 8px;
	z-index: 2;
	display: flex;
	flex-direction: column;
}
h2 
{
	color: #088178;
	font-weight: 500;
	text-align: center;
	letter-spacing: 0.1em;
}
.inputBox 
{
	position: relative;
	width: 300px;
	margin-top: 35px;
}
.inputBox input 
{
	position: relative;
	width: 100%;
	padding: 20px 10px 10px;
	background: transparent;
	outline: none;
	box-shadow: none;
	border: none;
	color: white;
	font-size: 1em;
	letter-spacing: 0.05em;
	transition: 0.5s;
	z-index: 10;
}
.inputBox span 
{
	position: absolute;
	left: 0;
	padding: 20px 0px 10px;
	pointer-events: none;
	font-size: 1em;
	color: #088178;
	letter-spacing: 0.05em;
	transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span 
{
	color: #088178;
	transform: translateX(0px) translateY(-34px);
	font-size: 0.75em;
}
.inputBox i 
{
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background: #088178;
	border-radius: 4px;
	overflow: hidden;
	transition: 0.5s;
	pointer-events: none;
	z-index: 9;
}
.inputBox input:valid ~ i,
.inputBox input:focus ~ i 
{
	height: 44px;
}
.links 
{
	display: flex;
	justify-content: space-between;
}
.links a 
{
	margin: 10px 0;
	font-size: 0.75em;
	color: #088178;
	text-decoration: beige;
}
.links a:hover, 
.links a:nth-child(2)
{
	color: #088178;
}
.coul{
	color: red;
}
input[type="submit"]
{
	border: none;
	outline: none;
	padding: 11px 25px;
	background: #088178;
	cursor: pointer;
	border-radius: 4px;
	font-weight: 600;
	width: 200px;
	margin-top: 10px;
}
input[type="submit"]:active 
{
	opacity: 0.8;
}
    </style>
</head>


<body>
    <?php 
  require_once('sidebar.php');
     ?>
    <div class="table-style">
        <table>
            <thead>
                <tr>
                    <td>product id</td>
                    <td>name</td>
                    <td>prix</td>
                </tr>
            </thead>
            <tbody>
                <?php
                 require_once('connexion.php');
                require_once('loginnfunction.php');
            $product = fetchProductsFromDb();
              if ($product != null) {
                  for ($i = 0; $i < count($product); $i++) {
                ?>
                         <tr>
                            <td><?php 
							echo $product[$i]['idproduit'];
							?></td>
                            <td><?php 
							 echo $product[$i]['nomproduit'];
							 ?></td>
                            <td><?php 
							 echo $product[$i]['prix'];
							?></td>
                        </tr>
                <?php
				  }
               } 
				?>action="addProduct.inc.php"
            </tbody>
        </table>
    </div>
	<?php
if (isset($_POST['submit_new_product'])) {
    require_once('connexion.php');
    require_once('loginnfunction.php');
    $nom = $_POST['nomproduit'];
    $prix = $_POST['prix'];
    $cartegorie_id = $_POST['cartegorie_id'];

    $query = "INSERT INTO produit (nomproduit, prix, idcategorie) VALUES (?, ?, ?)";
    $stmt = connect()->prepare($query);

    if (!$stmt->execute(array($nom, $prix, $cartegorie_id))) {
        $stmt = null;
        header('Location:products.php?error=stmtfailed');
        exit();
    }

   $stmt = null;
    header('Location:products.php?productAddedToDb');
}
?>
    <div class="box">
        <form  method="post">
            <h2>add product</h2>
            <div class="inputBox">
                <input type="text" name="nomproduit" autofocus required>
                <span>nom produit</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="number" name="prix" required>
                <span>prix</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="number" name="cartegorie_id" required>
                <span>categorie id</span>
                <i></i>
            </div>
            <input type="submit" name="submit_new_product" value="ajouter produit">
        </form>
    </div>
</body>

</html>