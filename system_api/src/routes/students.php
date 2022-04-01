<?php


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$app = AppFactory::create();$app = AppFactory::create();

$fingreprint;

//Add Temp Data
$app->get('/api/{id}', function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    $fingreprint = htmlspecialchars($id);
    
    echo $fingreprint;
});


function setFingprint(string $fingerprint){
    global $fingreprint;

    $fingreprint = $fingerprint;
}

function getFingerprint(){
    global $fingreprint;

    return $fingreprint;
}

//Add Humidity Data
// $app->get('/api/reading_humidity/{id}', function(Request $request, Response $response){
//     $humidity_value = $request->getAttribute('id');
//     $humidity_value = htmlspecialchars($humidity_value);
//     $type_code = "humidity";
    
//   //INSERT INTO `readings`(`id`, `type`, `reading`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4])
    
//     $sql = "INSERT INTO readings (type,reading,date) VALUES ('$type_code','$humidity_value',NOW())";
    
//     try{
//         //Get DB Object
//         $db = new db();
//         //Connect
//         $db = $db->connect();
        
//         $stmt = $db->prepare($sql);
//         $stmt->execute();
        
//         echo '{"notice": {"text": "Humidity Data Added"}';
//     }catch(PDOException $e){
//         echo '{"error": {"text": '.$e->getMessage().'}';
//     }
// });

// //Add Moisture Data
// $app->get('/api/reading_moisture/{id}', function(Request $request, Response $response){
//     $moisture_value = $request->getAttribute('id');
//     $moisture_value = htmlspecialchars($moisture_value);
//     $type_code = "moisture";
    
//   //INSERT INTO `readings`(`id`, `type`, `reading`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4])
    
//     $sql = "INSERT INTO readings (type,reading,date) VALUES ('$type_code','$moisture_value',NOW())";
    
//     try{
//         //Get DB Object
//         $db = new db();
//         //Connect
//         $db = $db->connect();
        
//         $stmt = $db->prepare($sql);
//         $stmt->execute();
        
//         echo '{"notice": {"text": "Moisture Data Added"}';
//     }catch(PDOException $e){
//         echo '{"error": {"text": '.$e->getMessage().'}';
//     }
// });

// //Add PH Data
// $app->get('/api/reading_ph/{id}', function(Request $request, Response $response){
//     $ph_value = $request->getAttribute('id');
//     $ph_value = htmlspecialchars($ph_value);
//     $type_code = "ph";
    
//   //INSERT INTO `readings`(`id`, `type`, `reading`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4])
    
//     $sql = "INSERT INTO readings (type,reading,date) VALUES ('$type_code','$ph_value',NOW())";
    
//     try{
//         //Get DB Object
//         $db = new db();
//         //Connect
//         $db = $db->connect();
        
//         $stmt = $db->prepare($sql);
//         $stmt->execute();
        
//         echo '{"notice": {"text": "PH Data Added"}';
//     }catch(PDOException $e){
//         echo '{"error": {"text": '.$e->getMessage().'}';
//     }
// });
// ?>