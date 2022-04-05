<?php


include(__DIR__ . "/../system_api/public/file.php");

$stmt = $pdo->prepare("SELECT temp_id FROM temp");
$allResults = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo $allResults[0]["temp_id"];

if (isset($allResults[0]["temp_id"])) {
    echo $allResults[0]["temp_id"];
} else {
    // echo "null";
}
