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

    header('Content-Type: application/json');
    echo json_encode($response);

    mysqli_close($conn);