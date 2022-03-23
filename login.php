<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
	<title>Login</title>
</head>
<body style="background-image:url(https://images.unsplash.com/photo-1635430428563-184bc6506df4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1475&q=80)">

<div class="container">
<div class="row">
<div class="card" style="width:60%" >
<div class="card-body">
<h1 align="center"><br>SELAMAT DATANG</h1>
	<form action="proseslogin.php" method="post">
        <div align="center" class="mb-3">
			<input type="text" name="username" placeholder="Username or Email..">
        </div>
        <div align="center" class="mb-3">
			<input type="password" name="password" placeholder="Password..">
        </div>
        <div align="center" class="mb-3">
			<input type="text" name="input" placeholder="Verification Code..">
        </div>
        <div align="center" class="mb-3">
			<input type="text" name="captcha" <?php
						$no = rand(123456789,0);
						$a = substr($no,0,4);
					?> value="<?php echo $a;?>" style="font-size:50px;width:150px;" readonly>			
        </div>
        <div align="center" class="mb-3">
            <input type="submit" class="btn btn-success" value="Login">
        </div>
	</form>
</div>
</div>
</div>
</div>
</body>
</html>