<?php

namespace App\Models;
use CodeIgniter\Model;

class M_Auth extends Model {

    protected $db;
    public function signup($inputData) {
        $qString =  "INSERT INTO users (avatar_link, fullname, birthday, address, description, contact, email, username, password, mall, valid_id_link) ".
                    "VALUES (:avatar_link:, :fullname:, :birthday:, :address:, :description:, :contact:, :email:, :username:, :password:, :mall:, :valid_id_link):";

        return $this->db->query($qString, [
            'avatar_link'   => $inputData['avatar_link'],
            'fullname'      => $inputData['fullname'],
            'birthday'      => $inputData['birthday'],
            'address'       => $inputData['address'],
            'description'   => $inputData['description'],
            'contact'       => $inputData['contact'],
            'email'         => $inputData['email'],
            'username'      => $inputData['username'],
            'password'      => $inputData['password'],
            'mall'          => $inputData['mall'],
            'valid_id_link' => $inputData['valid_id_link'],
            'activated'     => 0
        ]);
    }

}