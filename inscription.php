<?php
$servername = "localhost";
$dbname = "e_commerce";
$username = "root";
$password = "toor";
$erreur = "";
$erreur1 = "";
if(isset($_POST['login'])){
	if(!empty($_POST['username']) && !empty($_POST['username1']) && !empty($_POST['password']) 
	&& !empty($_POST['password_1']) && !empty($_POST['role']) && !empty($_POST['datenaissance']) 
 && !empty($_POST['email']))
    {
		if($_POST['password']==$_POST['password_1']){
			try{
				$pdo = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
 }
 catch(PDOException $exc){
    echo $exc->getMessage();
    echo "bienn1";
    exit();
}
			$nom = $_POST['username'];
			$prenom = $_POST['username1'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$role = $_POST['role'];
			$datedenaissance = $_POST['datenaissance'];
			$check = $pdo->prepare("SELECT * FROM utilisateur WHERE email= ? ");
			 $check->execute(array($email)); 
			if ($check->rowCount()>0) { 
				$erreur1 = "votre email est deja utiliser ,vous devez ajouter un autre email";
				
			 } 
			 else{
			$sql = "INSERT INTO utilisateur(email,nom,prenom,DateNaissance,mdp,role1)
			 VALUES(:email,:nom,:prenom,:DateNaissance,:mdp,:role1)";
			$res = $pdo->prepare($sql);
			$exec = $res->execute(array(":email" => $email, ":nom" => $nom, ":prenom" => $prenom,
			 ":mdp" => $password, ":DateNaissance" => $datedenaissance, ":role1" => $role));
			if($exec){
				header("location:login.php");
			}
			else{
				echo "echec de l operation";
			}
			}}
			else{
			$erreur = "verifier que les deux mots de passe correspondent";
			}
			
			
		}}
	

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body 
{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
	background: #088178;
}
.box 
{
	position: relative;
	width: 380px;
	height: 840px;
	background: #088178;
	border-radius: 8px;
	overflow: hidden;
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
	width: 100px;
	margin-top: 10px;
}
input[type="submit"]:active 
{
	opacity: 0.8;
}
	</style>
	<meta charset="UTF-8">
	<title>Sign in</title>
	<link rel="stylesheet" href="style2.css">
</head>


<body>
	
	<div class="box">
		<form autocomplete="off" method="post">
			<h2>Sign in</h2>
			<div class="inputBox">
				<input type="text" required="required" name="username">
				<span>Nom</span>
				<i></i>
				</div>
				<div class="inputBox">
				<input type="text" required="required" name="username1">
				<span>Prenom</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="email" required="required" name ="email">
				<span>Email</span>
				<i></i>
			</div>
			<div class="coul">
			<?php echo $erreur1; ?></div>
			<div class="inputBox">
				<input type="date" required="required" name ="datenaissance">
				<span>date</span>
				<i></i>
			</div>
            <div class="inputBox">
				<input type="password" required="required" name="password">
				<span>Password</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required" name="password_1">
				<span>Valide Password</span>
				<i></i>
			</div>
			<div class="coul">
			<?php echo $erreur; ?></div>
            <div class="inputBox">
				<input type="text" required="required" name="role">
				<span>Role</span>
				<i></i>
			</div>

			<div class="links">
				<a href="#">Forgot Password ?</a>
				
			</div>
			<input type="submit" value="Login" name="login">
		</form>
	</div>
</body>
</html>