<?php

class Database
{
    private $host="localhost";
    private $user="root";
    private $password="";
    private $database="DB_UAS_PBO_TRPL1A_ALFARDHANNURIBNAN";

    public function getKoneksi()
    {
        return new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->database
        );
    }
}

?>