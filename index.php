<?php
/**
 * Created by PhpStorm.
 * User: SYSTEM
 * Date: 18-Jul-18
 * Time: 22:15
 */
require __DIR__.'/vendor/autoload.php';
require_once 'Firestore.php';

$fs = new Firestore('Nairobi');














//use Kreait\Firebase\Factory;
//use Kreait\Firebase\ServiceAccount;
//
//$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secrets/phpbase-3ffca-9607311d87fa.json');
//$firebase = (new Factory)
//    ->withServiceAccount($serviceAccount)
//    ->create();
//
//
//$database = $firebase->getDatabase();
//
//die(print_r($database));