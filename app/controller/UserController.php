<?php
class UserController{
    public function __construct()
    {

    }

    public function index(){
        return $foo;
    }

    public function getUsers()
    {
        $userModel = new UserModel();
        $users = $userModel->getLists();
        return $users;
    }

    /**
     * @SuppressWarnings(PHPMD)
     */
    public function validate_Employee_Checkin($params) {
        if ($params['status']=='working' && $params['start_time'] >= '8:00') {
            $valid = true;
        } elseif ($params['status'] == 'late' && $params['start_time']>'8:30') {
            $valid = true;
        } elseif ($params['status'] == 'come_late_back_soon' && $params['start_time'] > '8:30' && $params['end_time'] > '17:00') {
            $valid = true;
        } elseif ($params['status'] == 'back_soon' && !empty($params['start_time']) && $params['end_time'] > '17:00') {
            $valid = true;
        } elseif ($params['status'] == 'off' && empty($params['start_time']) && empty($params['end_time'])) {
            $valid = true;
        } else {
            $valid = false;
        }

        return $valid;
    }
}