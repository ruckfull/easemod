<?php
require_once 'common.func.php';

function __autoload($class){
    require_once './lib/' . $class . '.class.php';
}
$app_name = 'xinyang';
$client_id = 'YXA6bLWQMCnCEeSl4oHH89FGRg';
$client_secret = 'YXA6xZH8c5_a80Ik66kM7wOu0FeTr2g';
$User = new User($app_name, $client_id, $client_secret);
$data = array(
//         array('username'=>'china111','password'=>'administrator'),
//         array('username'=>'china222','password'=>'administrator'),
//         array('username'=>'china333','password'=>'administrator'),
//         array('username'=>'china555','password'=>'administrator'),
//         array('username'=>'china666','password'=>'administrator'),
//         array('username'=>'china777','password'=>'administrator')
);
// $info = $User->regUserOnAuth($data);
// $info = $User->getUserInfo('china666');
// $info = $User->deleteUserByTime(1409020348390, 1409020348407);
// $info = $User->deleteUserBySort('desc', 2);
// $info = $User->addFriendToUser('china111', 'china666');
// $info = $User->deleteFriendOnUser('china111','china666');
// $info= $User->getFriendsOnUser('china111');

$Chat = new Chat($app_name, $client_id, $client_secret);
// $info = $Chat->chatFiles(realpath('./lib/test.jpeg'));
// $info = $Chat->getMessagesByNew(40);
// $info = $Chat->getMessagesByTimes(1409013972030,1409013972050);
$info = $Chat->getMessagesByPage(2);
var_dump($info);





