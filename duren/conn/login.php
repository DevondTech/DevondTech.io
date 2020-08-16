<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validasi Login</title>
</head>
<body>
	<div class="wrapper">
		<div class="inner">
			<?php
			session_start();
			include "data2/config.php";
			$username=$_POST['username'];
			$password=$_POST['password'];
			$password = hash('ripemd160', $password);
			$op=$_GET['op'];

			//echo" $username $password";
			if($op=="in")
			{

				$query="select * from tb_login_user where username='$username' and password='$password'"; 
				$result = mysqli_query($db,$query);
				if(mysqli_num_rows($result)==1)
				{

					$baris= mysqli_fetch_array($result);
										   
		            $_SESSION['id_user']= $baris['id_user'];
		            $_SESSION['id_status_user']= $baris['id_status_user'];
		            $_SESSION['username']=$baris['username'];
		            $_SESSION['nama_lengkap']=$baris['nama_lengkap'];
		            $_SESSION['foto']=$baris['foto'];
		            $_SESSION['email']=$baris['email'];
		            $email = $baris['email'];

		            //echo"email :";
					//echo $_SESSION['id_status_user'];
					
		            $id_status_user =  $baris['id_status_user'];

					if($id_status_user =='1'){
						//echo 'halaman sukses';
						header("Location: ../in/accounts-duren/open-admin/data.php");
						die();
					}
					elseif($id_status_user=='5'){
						header("Location: ../in/accounts-duren/open-konsumen/data.php");
						die();
					}
				}

				else{
					echo"
					<script language='javascript'>alert('Pastikan password & E-mail yang anda masukkan benar !!');
					document.location='../login'</script>";
				}
			}
			elseif($op=="out")
			{
				unset($_SESSION['username']);
				unset($_SESSION['id_status_user']);
				header("Location:../login");
			}
			?>
			<br><Br>

		</div>
	</div>
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>