<?php
ob_start();
session_start();

if(!isset($_SESSION)) header("Location: /");

require "db/db.php" ;

$sql="SELECT * FROM customer";

$sql=$db->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0,width=device-width" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="app">
        <div class="container-fluid column">
            <div class="head-n">
                <img src="img/school_logo.jpg" height="100px" width="100px" />
                <span class="text text-info">Customer's List</span>
                <div><a class="btn btn-warning" href="logout.php" >Logout</a></div>
            </div>
            <div class="body-n">
                <div class="sleft">
                    <div>
                        <?php
                        if($sql->num_rows>0){
                        ?>
                        <table class="table">
                            <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Physical address </th>
                                <th> Tax Id </th>
                            </tr>
                        <?php
                            while($ass_list=$sql->fetch_assoc()){
                        ?>
                        
                            <tr>
                                <td> <?=$ass_list['id']; ?> </td>
                                <td> <?=$ass_list['name']; ?> </td>
                                <td> <?=$ass_list['email']; ?> </td>
                                <td> <?=$ass_list['addr']; ?> </td>
                                <td> <?=$ass_list['tax_id']; ?> </td>
                            </tr>
                        <?php
                        }
                        ?>
                        </table>
                        <?php
                        }else{
                            echo "Nothing yet";
                        }
                        ?>
                    </div>
                </div>
                </div>
            </div>
        </body>
        <footer></footer>
    </html>