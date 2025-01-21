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

    }

    if($_SERVER['REQUEST_METHOD'] === "GET"){
        $param = $_GET['param'] ?? null;
        if ($param) {
            $stats = [];
            for( $i = 0; $i < count($param); $i++){
                $char_name = $param[$i];
                $char_query = "SELECT char_red_hp, char_soul_hp, char_speed, char_tears, char_tears_mult, char_dmg, char_dmg_mult, char_range, char_shot_speed
                FROM character_table WHERE char_name = '$char_name';";
                $result = mysqli_query($conn, $char_query);
                //Add stats from each char into an array
                while ($row = mysqli_fetch_assoc($result)) {
                    $stats[] = $row;
                }
            }
            $response = [
                'status' => 'success',
                'data' => $stats
            ];
        } else {
            $char_query = "SELECT char_name FROM character_table;";
            $result = mysqli_query($conn, $char_query);
            
            if($result){
                $characters = [];
                while($row = mysqli_fetch_assoc($result)){
                    $characters[] = $row['char_name'];
                };
                $response = [
                    'status' => 'success',
                    'data' => $characters
                ];
            }
            else{
                $response = [
                    'status' => 'error',
                    'data' => 'Error querying db'
                ];
            }
        }
    }

    header('Content-Type: application/json');
    echo json_encode($response);

    mysqli_close($conn);
    ?>