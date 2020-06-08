<?php

namespace App\Controllers;
use App\Database\Database as DB;
use App\Models\User;
use App\Services\ServicesPartnerValidation;

class ApplicationController
{


    public function index () {

        return require_once __DIR__ . '/../Views/start.php';

    }


    public function create () {

        return require_once __DIR__ . '/../Views/form.php';

    }

    public function store () {

        $user = new User($_REQUEST['email'], $_REQUEST['sum'], 0);

        DB::connect()->insert('applications',
            [
                'email' =>  $user->getEmail(),
                'sum' => $user->getAmount(),
        ]);


        ServicesPartnerValidation::PartnerValidation($user);


        header('Location: http://localhost:8080/');
    }

}