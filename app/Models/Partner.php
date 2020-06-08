<?php

namespace App\Models;

class Partner
{
    private $name;
    public const AMOUNT_TRIGGER =  5000;
    public const OFFER_TRIGGER = 'offer';
    public const ASK_TRIGGER = 'ask';

    public function __construct(string $name)
    {
        $this->name = $name;
    }


    public function getName(): string
    {
        return $this->name;
    }

}