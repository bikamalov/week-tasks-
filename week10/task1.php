<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $db = 'cars';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
    $sql = "SELECT * FROM cars";
	$result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
        ?>
<html lang="en">
<head>
<style>
		.car{
		  display:flex;
		  border:1px solid black;
		  border-radius:5px;
		  width:250px;
		  padding:10px;
		}
		.title{
		  font-size:16px;
		  font-weight:bold;
		}
		.attributes .row{
		  display:flex;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
		.car img{
		  margin-right:10px;
		}
	</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="cars">
        <?php 
        for ($i = 0; $i < $num; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo "<div class='car'>";
            echo "<img src='" . $row['image'] . "' style='width: 100px; height: 60px'>";
            echo "<div class='right'>";
            echo "<div class='title'>" .$row['maker']. ' ' .$row['model']. '</div>';
            echo "<div class='attributes'>";
            echo "<div class='row'><div class='name'>Price:</div><div>"  .$row['price']. '$</div></div>';
            echo "<div class='row'><div class='name'>Year:</div><div>" .$row['year']. '</div></div></div></div></div>'; 
    }
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>