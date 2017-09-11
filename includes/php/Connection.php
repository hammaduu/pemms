<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 11/6/2016
 * Time: 12:08 PM
 */
class Connection
{
    public $hostname  = '202.166.167.126';
    public $port        = 5432;
    public $database    = 'epd_pemms';
    public $username     = 'postgres';
    public $password     = 'irispgis';
    public $conDB;

    public function connectionDB()
    {
        $this->conDB = pg_connect("host=$this->hostname port=$this->port dbname=$this->database user=$this->username password=$this->password");

        if(!$this->conDB) {
            die("connection failed");
        }
        else {
//            echo "Sucessfully Build Connection";
        }

    }
    public function closeConnection(){
        pg_close($this->conDB);
    }

}

$con = new Connection();
echo $con->connectionDB();
