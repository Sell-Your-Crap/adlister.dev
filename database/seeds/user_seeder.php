<?php
​
require_once __DIR__ . '/../../models/User.php';
​
$user = new User;
$user->name = 'Jolly Mangina';
$user->email = 'jMangina@adlister.dev';
$user->username = "JoyfulMangina";
$user->password = $_ENV['USER_PASS'];
$user->save();
​
$user = new User;
$user->name = 'Indy Butt';
$user->email = 'indyButt@adlister.dev';
$user->username = "BackDoorSeller";
$user->password = $_ENV['USER_PASS'];
$user->save();
​
$user = new User;
$user->name = 'Wilma Fingerdoo';
$user->email = 'wilFinger@adlister.dev';
$user->username = "FingerLickinGood";
$user->password = $_ENV['USER_PASS'];
$user->save();
​
$user = new User;
$user->name = 'Hugh G. Wrection';
$user->email = 'bigWrection@adlister.dev';
$user->username = "bigWrection";
$user->password = $_ENV['USER_PASS'];
$user->save();
​
$user = new User;
$user->name = 'Peter Fitzniceinsider';
$user->email = 'peteFitz@adlister.dev';
$user->username = "pFitznice";
$user->password = $_ENV['USER_PASS'];
$user->save();
​
$user = new User;
$user->name = 'Eileen Dover';
$user->email = 'eDover@adlister.dev';
$user->username = "eyeleanDover";
$user->password = $_ENV['USER_PASS'];
$user->save();
​
$user = new User;
$user->name = 'Connie Lingus';
$user->email = 'twistedTongue@adlister.dev';
$user->username = "tongueTwister";
$user->password = $_ENV['USER_PASS'];
$user->save();
​
$user = new User;
$user->name = 'Harry P. Ness';
$user->email = 'harryP@adlister.dev';
$user->username = "pNessHarry";
$user->password = $_ENV['USER_PASS'];
$user->save();
​
$user = new User;
$user->name = 'Janet Uppissass';
$user->email = 'janUps@adlister.dev';
$user->username = "crookedWalker";
$user->password = $_ENV['USER_PASS'];
$user->save();
​
$user = new User;
$user->name = 'Pat McGroin';
$user->email = 'patrickMcgroin@adlister.dev';
$user->username = "pattylaplad";
$user->password = $_ENV['USER_PASS'];
$user->save();
​
$user = new User;
$user->name = 'Peter Felt';
$user->email = 'feltPeter@adlister.dev';
$user->username = "feltedPeter";
$user->password = $_ENV['USER_PASS'];
$user->save();
​
$user = new User;
$user->name = 'James Grossweiner';
$user->email = 'jGrossweiner@adlister.dev';
$user->username = "jimmyGrossweiner";
$user->password = $_ENV['USER_PASS'];
$user->save();