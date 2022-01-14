<?php
ob_start();
	session_start();
	
	require "db/db.php" ;
	$msg;
	if(isset($_POST['btn_log'])){
		$user=strtoupper($_POST['user']);
		$pwd=strtoupper($_POST['pwd']);
		
        $sql="SELECT * FROM user WHERE user='$user' AND pwd='$pwd'";
		$sql=$db->query($sql);

			if($sql->num_rows>0){
				$row=$sql->fetch_assoc();
                    $_SESSION["id"]=$row["id"];
                    header("Location: user_data.php");
            }else{
                $msg="user doesn't exist";
            }
}

?>

<!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="initial-scale=1.0,width=device-width" />
            <link href="css/style.css" rel="stylesheet" type="text/css" />
            <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
        </head>
        <body class="app">
        <div class="container-fluid column">
        <div class="head">
                    <img src="./img/school_logo.jpg" height="120px" width="120px" />
                    <span class=" text text-info">Internal Revenue Board Ilaro</span>
                </div>

            
                <div class="body">
                    <form action="" method="post" class="login-form">
                    <input type="text" class="form-control text-info text-center" name="user" placeholder="ID" title="Enter ID here" /><br>
                    <input type="password" class="form-control text-info text-center" name="pwd" placeholder="Password" title="Enter username here" /><br>
                    <input type="submit" href="#" class="btn btn-default" name="btn_log" value="Sign in" style="float: right;"/>
                    </form>
                    <?php if(isset($msg)) echo "<div class='text text-warning'>$msg</div>"; ?>
                </div>
               
            </div>
        </body>
        <footer></footer>
    </html>