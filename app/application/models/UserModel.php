<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserByName($userName)
    {
        $user =(object) [
            'userNo' => 1,
            'userName' => $userName,
            'password' => '$2y$10$kipUm/OSf9XhUkOq7.1sleHrUEiQ4KYy1W3IvoG4tlBof/TkYeh5u',
            'createdAt' => new DateTime('now', new DateTimeZone('Asia/Dhaka'))
        ];
        if (is_null($user)){
            throw new \UserNotFoundException('Invalid User');
        }

        return $user;
    }
}
