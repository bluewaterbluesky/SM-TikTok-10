<?php

namespace App\Controllers;

class User_Dashboard extends BaseController {

    public function profile() {
        $data = [
            'title'     => 'Profile',
            'content'   => 'dashboard/user/profile',
            'js'        => 'js/dashboard/user/profile.js'
        ];

        return view('templates/user', $data);
    }

}