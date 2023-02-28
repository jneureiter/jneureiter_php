<?php

namespace Jneureiter\Usermanagement;

class User
{

    private string $username = '';
    private string $fname = '';
    private string $lname = '';

    public function __construct(){

    }

    public function setFname(string $fname): User
    {
        $this->fname = $fname;

        return $this;
    }

    public function setLname(string $lname): User
    {
        $this->lname = $lname;

        return $this;
    }

    public function setUsername(string $uname): User {
        $this->username = $uname;

        return $this;
    }

    public function getValue(): string{
        return $this->username;
    }

}

