<?php


include(__DIR__ . "/../system_api/public/file.php");

$stmt = $pdo->prepare("SELECT temp_id FROM temp");
$allResults = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo $allResults["temp_id"][0];

if (isset($allResults["temp_id"][0])) {
    echo $allResults["temp_id"][0];
} else {
    // echo "null";
}
