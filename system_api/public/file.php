<?php
require  __DIR__ . '/../src/config/db.php';

$fingeprint;
$db = new db();
$pdo = $db->connect();

function getFingerprint()
{
    global $fingeprint;
    return $fingeprint;
}

function getRecentId()
{
    global $pdo;

    $fingeprintStmt = $pdo->prepare("SELECT * FROM temp");
    $fingeprintStmt->execute();
    $result = $fingeprintStmt->fetchAll(PDO::FETCH_ASSOC);

    if (isset($result[0]["temp_id"])) {
        return $result[0]["temp_id"];
    } else {
        return;
    }
}


function setFingerprint(string $rfingerId)
{
    global $fingeprint;
    $fingeprint = $rfingerId;
}
