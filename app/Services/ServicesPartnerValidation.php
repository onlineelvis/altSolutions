<?php

namespace App\Services;

use App\Database\Database as DB;
use App\Models\User;
use App\Models\Partner;

class ServicesPartnerValidation
{

    public static function QueryData() {

       return DB::connect()->select('applications',['[>]deals' => ['id'=>'application_id']],['applications.email','applications.sum', 'deals.partner', 'deals.deal_status', 'applications.id']);

    }

    public static function PartnerValidation (User $user) {

        $userId =  DB::connect()->select('applications',['[>]deals' => ['id'=>'application_id']],['applications.id' ], ['LIMIT' => 1, "ORDER" => ["applications.id" => "DESC"]]);
        foreach ($userId as $id) {
            $user->setId($id['id']);
        }


        if ($user->getAmount() < Partner::AMOUNT_TRIGGER) {

            $partner = new Partner('B');


            DB::connect()->insert('deals', [

                'application_id' => $user->getId(),
                'partner' => $partner->getName()

            ]);

        } else {

            $partner = new Partner('A');

            DB::connect()->insert('deals', [

                'application_id' => $user->getId(),
                'partner' => $partner->getName()

            ]);
        }


    }

    public static function sendMail ($id) {

        $usersAsks = self::QueryData();

        foreach ($usersAsks as $user) {

            if ($user['deal_status'] === Partner::OFFER_TRIGGER && $user['id'] === $id['id']) {

                return 'Message to ' . $user['email'];
            }

        }

    }
}