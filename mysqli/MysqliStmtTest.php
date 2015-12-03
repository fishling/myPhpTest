<?php
/**
 * Created by PhpStorm.
 * User: fish
 * Date: 2015/12/3
 * Time: 10:12
 */
    require_once 'UserService.class.php';
    require_once 'User.class.php';

    $userService = new UserService();

    $arr = array();
    for($i = 0; $i < 2; $i++){
        $user = new User();
        $user->setName('姓名'.$i);
        $user->setPassword('');
        $user->setEmail('');
        $user->setAge($i);
        $arr[$i] = $user;
    }
    $userService->createUsers($arr);

    $userService->findUserById(8);

    $userService->getConnection()->closeConnection();
?>