<?php


namespace App\Controllers;
use App\Database\Database as DB;
use App\Services\ServicesPartnerValidation;

class PartnerController
{
    public function index () {

        $usersAsks = ServicesPartnerValidation::QueryData();
        return require_once __DIR__. '/../Views/partner.php';

    }

    public function update($id) {

     DB::connect()->update('deals', [

            'deal_status' => 'offer'

        ], ['application_id' => $id['id']]);

        header('Refresh:1; url=' . $_SERVER['HTTP_REFERER']);


       echo ServicesPartnerValidation::sendMail($id);
    }

}