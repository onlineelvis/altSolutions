<?php

namespace App\Models;

class User
{

    private ?int $id;
    private string $email;
    private int $amount;

    public function __construct(string $email, int $amount, ?int $id )
    {
        $this->email = $email;
        $this->amount = $amount;
        $this->id = $id;
    }


    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }



}