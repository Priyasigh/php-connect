<?php
use MongoDB\Driver\BulkWrite;

include_once "Config.php";

$dbname="dcs";
$collection="student";

$dbCon = new MongoConnection();
$conn = $dbCon->getConnection();

$stud = array(
    'stud_name' => 'jk',
    'stud_email' => 'jk@gmail.com',
    // 'stud_eno' => 123
);

$insert = new BulkWrite();
$insert->insert($stud);

$cursor = $conn->executeBulkWrite("$dbname.$collection",$insert);
echo $cursor->getInsertedCount();


?>