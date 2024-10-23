<?php
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $db = "isaac";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        die("Connection to SQL server failed: " + mysqli_connect_error());
    }

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $name = htmlspecialchars($_POST['name']);
        $hp = htmlspecialchars($_POST['hp']);
        $speed = htmlspecialchars($_POST['speed']);
        $tears = htmlspecialchars($_POST['tears']);
        $dmg = htmlspecialchars($_POST['dmg']);
        $dmg_mult = htmlspecialchars($_POST['dmg_mult']);
        $shot_speed = htmlspecialchars($_POST['shot_speed']);
        $deal_rate = htmlspecialchars($_POST['deal_rate']);
        
        $ins_query = "INSERT INTO item_table 
                     (item_name, item_hp, item_speed, item_tears, item_dmg, item_dmg_mult, item_range, item_shot_speed)
                     VALUES ('{$name}', {$hp}, {$speed}, {$tears}, {$dmg}, {$dmg_mult}, {$shot_speed}, {$deal_rate});";
        
        if(mysqli_query($conn, $ins_query)){
            echo "Record created successfully";
        }
        else{
            echo "Something went wrong creating the record";
        }

    }
    else{
        echo "Invalid request";
    }
?>