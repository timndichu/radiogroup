<?php
//
////
//namespace Google\Cloud\Samples\Firestore;
//use Google\Cloud\Firestore\Connection\Grpc;
//use Google\Cloud\Core\Exception\GoogleException;
//use Google\Cloud\Core\GeoPoint;
//use Google\Cloud\Firestore\FirestoreClient;
//require __DIR__.'/vendor/autoload.php';
//use Kreait\Firebase\Factory;
//use Kreait\Firebase\ServiceAccount;
//
//
//$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secrets/phpbase-3ffca-9607311d87fa.json');
//
//$firebase = (new Factory)
//    ->withServiceAccount($serviceAccount)
//    ->create();
//
//$database = $firebase->getDatabase();
//
//
//
// if(isset($_POST['submit'])){
//    $forward = $_POST['forward'];
//    $reflected = $_POST['reflected'];
//    $ups = $_POST['element_4'];
//
//
//
//    $geopoint = geoPoint(1.24, 36.77);
//
//
//    if($ups == 1) {
//
//           $ups = 'True';
//    }
//    if($ups == 2) {
//
//        $ups = 'False';
//    }
//    /**
//     * Set document data.
//     * ```
//     * set_document('your-project-id');
//     * ```
//     * @throws \Google\Cloud\Core\Exception\GoogleException
//     */
//
//        // Create the Cloud Firestore client
//    try {
//        $db = new FirestoreClient([
//            'projectId' => 'phpbase-3ffca',
//        ]);
//        $cityRef = $db->collection('Stations')->document('Eldoret');
//        $cityRef->set([
//            ['ForwardPower' => $forward, 'ReflectedPower' => $reflected,'UPSError' => $ups, 'marker' => $geopoint]
//        ]);
//        # [END fs_update_doc]
//        printf('Updated the capital field of the DC document in the cities collection.' . PHP_EOL);
//    } catch (GoogleException $e) {
//    }
//    # [START fs_update_doc]
//
//
//
//
//
//    //connect to database
//    //check if the username is in database
//    //if user in db, echo username not available
//    //else, insert the values into db
//
//
//
//
//
//}
//function geoPoint($latitude, $longitude){
//    return new GeoPoint($latitude, $longitude);
//}