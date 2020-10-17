<?php

class connectClass {

    private $host = 'localhost:3306';
    private $user = 'root';
    private $password = '';
    private $twitter_db = 'twitter_clone';

    public function openConnect(){
        $conn = mysqli_connect($this -> host, $this -> user, $this -> password, $this -> twitter_db );

        mysqli_set_charset($conn, 'utf8');

        if(mysqli_errno($conn)){
            echo 'Banco de dados não conectado, erro: ' . mysqli_error($conn);
        }

        return $conn;

    }

}

?>