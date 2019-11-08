<?php

//
namespace Google\Cloud\Samples\Firestore;


require __DIR__.'/vendor/autoload.php';

use Google\Cloud\Core\Exception\GoogleException;
use Google\Cloud\Firestore\FirestoreClient;
use Kreait\Firebase\Request\CreateUser;

use Kreait\Firebase\Exception\AuthException;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Factory;

use Kreait\Firebase\ServiceAccount;

try {
    $db = new FirestoreClient([
        'projectId' => 'phpbase-3ffca',
    ]);
    printf('Created Cloud Firestore client with default project ID.' . PHP_EOL);
} catch (GoogleException $e) {
}


$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secrets/phpbase-3ffca-firebase-adminsdk-z635f-c760386a98.json');

$auth = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->createAuth();

if(isset($_POST['create'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userProperties = [
        'email' => $email,

        'password' => $password,

    ];

    try {
        $createdUser = $auth->createUser($userProperties);
        $request = CreateUser::new()
            ->withUnverifiedEmail($email)

            ->withClearTextPassword($password);
        $createdUser = $auth->createUser($request);


    } catch (AuthException $e) {
    } catch (FirebaseException $e) {
    }

try {

    $data = [
        'email' => $email,
        'password' => $password,

    ];

    $addedDocRef = $db->collection('users')->newDocument();
    printf('Added document with ID: %s' . PHP_EOL, $addedDocRef->id());
    $addedDocRef->set($data);

} catch (FirebaseException $e) {
}


}