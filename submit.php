<?php
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $db = "isaac";

    $conn = @mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        die("Connection to SQL server failed: " . mysqli_connect_error());
    }

    if($_SERVER['REQUEST_METHOD'] === "POST"){

        $name = htmlspecialchars($_POST['name']);
        $hp = htmlspecialchars($_POST['hp']);
        $speed = htmlspecialchars($_POST['speed']);
        $tears = htmlspecialchars($_POST['tears']);
        $tears_mult = htmlspecialchars($_POST['tears_mult']);
        $dmg = htmlspecialchars($_POST['dmg']);
        $dmg_mult = htmlspecialchars($_POST['dmg_mult']);
        $shot_speed = htmlspecialchars($_POST['shot_speed']);
        $deal_rate = htmlspecialchars($_POST['deal_rate']);

        //Checking to see if there's already an item in the table with the same name
        $dup_query = "SELECT COUNT(item_name) AS 'Total' FROM item_table WHERE item_name LIKE '${name}%' GROUP BY item_name";

        $dup_check = mysqli_query($conn, $dup_query);

        //Kill process if a duplicate exists
        mysqli_fetch_row($dup_check) ? die("Process terminated \nItem of that name already exists!"):
        
        $ins_query = "INSERT INTO item_table 
                     (item_name, item_hp, item_speed, item_tears, item_dmg, item_dmg_mult, item_range, item_shot_speed)
                     VALUES ('{$name}', {$hp}, {$speed}, {$tears}, {$dmg}, {$dmg_mult}, {$shot_speed}, {$deal_rate});";
        

        echo mysqli_query($conn, $ins_query) ? "Record created successfully" : "Something went wrong creating the record";

    }
    else if($_SERVER['REQUEST_METHOD'] === "GET"){

    }
    else{
        echo "Invalid request";
    }
?>