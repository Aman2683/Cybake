<?php
session_start();
?>
<html>
<title>Cybake - Admin</title>
<head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body,
.section-login .form-container .form input,
.section-login .form-container .form button {
  font-family: "Signika Negative", sans-serif;
}

.section-login {
  background-color: #5356ad;
  min-height: 100vh;
}
.section-login .container {
  padding-left: 15px;
  padding-right: 15px;
  max-width: 800px;
  margin: 0 auto;
  min-height: 100vh;

  display: flex;
  align-items: center;
  justify-content: center;
}
.section-login .form-container {
  background-color: #999ede;
  padding: 2.5rem 1.5rem;
  flex: 1;
  position: relative;
  min-height: 300px;

  display: flex;
  justify-content: flex-end;
}

.section-login .form-container .form {
  background-color: #fff;
  width: 55%;
  padding: 2rem 1.5rem;
  position: absolute;
  top: 50%;
  left: 1.5rem;
  transform: translateY(-50%);
  min-height: 400px;
  height: 60vh;
  max-height: 700px;

  display: flex;
  flex-direction: column;
  justify-content: center;
  box-shadow: 0 0 25px -5px rgba(0, 0, 0, 0.4);
}

.section-login .form-container .form .form-control {
  margin-bottom: 10px;
}

.section-login .form-container .form .input {
  width: 100%;
  padding: 10px 12px;
  font-weight: 600;
  font-size: 16px;
  border: 1px solid #999;
  outline: none;
  transition: box-shadow 0.2s linear;
}
.section-login .form-container .form .input:focus {
  box-shadow: 0 0 10px -2px rgba(0, 0, 0, 0.1);
}
.section-login .form-container .btn {
  font-size: 18px;
  padding: 12px;
  border-radius: 0px;
  font-weight: bold;
  color: white;
  cursor: pointer;
}
.section-login .form-container .form .btn-login {
  margin-top: 25px;
  border: 1px solid #ff73b3;
  background-color: #ff73b3;
  box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.4);
  transition: box-shadow 0.2s linear;
}
.section-login .form-container .form .btn-login:hover {
  box-shadow: none;
}

.section-login .form-container .sign-up {
  width: 35%;
  text-align: center;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}
.section-login .form-container .sign-up .text {
  color: #fff;
  font-size: 28px;
}
.section-login .form-container .sign-up .btn-sign-up {
  padding-left: 20px;
  padding-right: 20px;
  background-color: transparent;
  border: 2px solid white;
  margin-top: 15px;
  font-size: 16px;
  transition: box-shadow 0.2s linear;
}
.section-login .form-container .sign-up .btn-sign-up:hover {
  background-color: rgba(255, 255, 255, 0.5);
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}

@media screen and (max-width: 600px) {
  .section-login {
    padding: 100px 0;
  }
  .section-login .form-container {
    display: block;
    width: 90%;
    max-width: 400px;
  }
  .section-login .form-container .form,
  .section-login .form-container .sign-up {
    position: static;
    transform: initial;
    width: initial;
  }
  .section-login .form-container .form {
    width: 130%;
    position: relative;
    left: 50%;
    transform: translateX(-50%);
  }
  .section-login .form-container .sign-up {
    margin-top: 50px;
  }
}

</style>
</head>
<body>
<section class="section-login">
  <div class="container">
    <div class="form-container">
	
      <form class="form" action="#" method="post">
	  <h2 class="text">ADMIN LOGIN</h2><br>
        <div class="form-control">
          <input type="text" name="name" class="input username" placeholder="Admin Login ID">
        </div>
        <div class="form-control">
          <input type="password" name="password" class="input password" placeholder="Password">
        </div>
        <button type="submit" name="login" class="btn btn-login">Log In</button>
      </form>
	  
	  <?php
if(isset($_POST['login']))
{
	error_reporting(1);
	include("config.php");
	$name=$_POST['name'];
	$Password=$_POST['password'];
	
	$sql = "select * from admin where admin='$name' and password='$Password'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		session_start();
		$_SESSION['nutagriadmin']=$Email;
		$id=$_SESSION['nutagriadmin'];
		echo "<script>
				alert('Login Successful $id');
			</script>";
		echo "<script> location.href='home.php'; </script>";
	}
	else
	{
		
		echo "<script>
				alert('Invalid Email or Password');
			</script>";
	}
}
?>

      <div class="sign-up">
        <h2 class="text">CYBAKE</h2>
       <a href="../index.php"> <button class="btn btn-sign-up">Back</button></a>
      </div>

    </div>
  </div>
</section>
</body>
</html>