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


    $name = htmlspecialchars($_POST['name']);
    $redHp = htmlspecialchars($_POST['red_hp']);
    $soulHp = htmlspecialchars($_POST['soul_hp']);
    $speed = htmlspecialchars($_POST['speed']);
    $tears = htmlspecialchars($_POST['tears']);
    $tears_mult = htmlspecialchars($_POST['tears_mult']);
    $dmg = htmlspecialchars($_POST['dmg']);
    $dmg_mult = htmlspecialchars($_POST['dmg_mult']);
    $shot_speed = htmlspecialchars($_POST['shot_speed']);
    $range = htmlspecialchars($_POST['range']);
    $deal_rate = htmlspecialchars($_POST['deal_rate']);

        $ins_query = "INSERT INTO item_table(
            char_name, item_red_hp, item_soul_hp, item_speed, item_tears, item_tears_mult, item_dmg, item_dmg_mult, item_range, item_shot_speed, item_deal_rate)
            VALUES ('$name', {$redHp}, $soulHp, $speed, $tears, $tears_mult, $dmg, $dmg_mult, $range, $shot_speed, $deal_rate);";


        if (mysqli_query($conn, $ins_query)) {
            $response = ["status" => 'success', "message" => "Record inserted"];
        } else {
            $response = ["status" => 'error', "message" => "Error inserting record"];
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