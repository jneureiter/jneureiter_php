<?php
namespace Jneureiter\Passwd;

class Password{

    private string $password;
    private int $amountChars = 3;

    public function __construct(){
        $this->password = 'geheim';

    }

    public function addRandomNumber(): Password{
        $rand = mt_rand(1, 10);
        $this->password = $this->password . $rand;

        // eigenes Objekt wird zurückgegen
        return $this;

    }

    public function setRandomStringAmount(int $amount): Password{
        $this->amountChars = $amount;

        // eigenes Objekt wird zurückgegen
        return $this;
    }

    public function addRandomString(): Password{
        $zk = 'abcdefghijklmnopqrstuvwxyz';
        $zk = $zk . strtoupper($zk);

        // je nach der Angabe in amountChars wird die
        // Anzahl der Zeichen von a-z/A-Z hinzugefügt
        for ($i = 0; $i < $this->amountChars; $i++){

            $zz = mt_rand(0, strlen($zk)-1);

            $this->password = $this->password . $zk[$zz]; //oder substr($zz, 1)
        }

        return $this;


    }

    public function getValue(): string{
        return $this->password;
    }



}