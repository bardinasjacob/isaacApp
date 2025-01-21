<?php
$servername = "localhost";
$username = 'root';
$password = '';
$db = "isaac";

$conn = @mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection to SQL server failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $param = $_POST['param'];

    $char_name = $param[0];
    $inventory = implode(", ", $param[1]);
    $redHp = $param[2][0];
    $soulHp = $param[2][1];
    $speed = $param[2][2];
    $tears = $param[2][3];
    $tears_mult = $param[2][4];
    $dmg = $param[2][5];
    $dmg_mult = $param[2][7];
    $shot_speed = $param[2][6];
    $range = $param[2][8];
    $deal_rate = $param[2][9];

    $ins_query = "INSERT INTO run_table (character_name, run_inventory, run_red_hp, run_soul_hp, run_speed, run_tears, run_tears_mult, run_dmg, run_dmg_mult, run_range, run_shot_speed, run_deal_rate) 
            VALUES 
            ('$char_name', '$inventory', $redHp, $soulHp, $speed, $tears, $tears_mult, $dmg, $dmg_mult, $range, $shot_speed, $deal_rate);";


    if (mysqli_query($conn, $ins_query)) {
        $response = ["status" => 'success', "message" => "Record inserted"];
    } else {
        $response = ["status" => 'error', "message" => "Query Didn't Work"];
    }

} else if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $run_query = "SELECT * FROM run_table;";
    $result = mysqli_query($conn, $run_query);

    if ($result) {
        $runs = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $runs[] = $row;
        }
        ;
        $response = [
            'status' => 'success',
            'data' => $runs
        ];
    } else {
        $response = [
            'status' => 'error',
            'data' => 'Error querying db'
        ];
    }
} else {
    $response = ["status" => 'error', "message" => "Invalid HTTP Request"];
}

header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);