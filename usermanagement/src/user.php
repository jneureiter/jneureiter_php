<?php

namespace Jneureiter\Usermanagement;

class User
{

    private string $username;
    private string $fname;
    private string $lname;

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

    public function constructUsername(): User{
        $this->username = strtolower(substr($this->fname, 0,1) . $this->lname);
    }

    public function getValue(): string{
        return $this->username;
    }

}

