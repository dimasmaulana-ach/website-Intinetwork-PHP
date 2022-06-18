<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
            font-family: sans-serif;
            /* background: url(image/index-background.mp4); */
        }

        h1{
            text-align: center;
            /*ketebalan font*/
            font-weight: 500px;
            font-size: 50px;
            /* margin-top: 80px; */
        }

        .tulisan_login{
            text-align: center;
            /*membuat semua huruf menjadi kapital*/
            text-transform: uppercase;
        }

        .kotak_login{
            width: 350px;
            background: white;
            margin: 120px auto;
            padding: 30px 20px;
            box-shadow: 0px 0px 100px 4px #d6d6d6;
        }

        label{
            font-size: 11pt;
        }

        .form_login{
            box-sizing : border-box;
            width: 100%;
            padding: 10px 0;
            font-size: 11pt;
            margin-bottom: 30px;
            border: none;
            border-bottom: 2px solid #DF1414;
        }

        .tombol_login{
            background: #DF1414;
            color: white;
            font-size: 11pt;
            width: 100%;
            border: none;
            padding: 10px 20px;
        }

        /* .form input{

        } */

        .link{
            color: #232323;
            text-decoration: none;
            font-size: 10pt;
        }

        .alert{
            background: #DF1414;
            color: white;
            padding: 10px;
            text-align: center;
            transition: margin-top 1s;
        }

    </style>
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<h1>LOGIN</h1>
        <br>
		<!--method post/get untuk menampung data atau nilai dari sebuah form atau url sebelum dimanipulasi,-->
		<form action="login.php" method="post">
			<!-- <label style="font-weight: bold;" >Email</label> <br> -->
			<input type="text" name="email" class="form_login" placeholder="Email" required="required"> <br>
 
			<!-- <label style="font-weight: bold;" >Password</label><br> -->
			<input type="password" name="sandi" class="form_login" placeholder="Password" required="required"> <br><br><br>
 
			<input type="submit" class="tombol_login" value="LOGIN"> <br> <br>
		</form>
	</div>
</body>
</html>