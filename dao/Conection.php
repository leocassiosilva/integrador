<?php
class Conection {

        private $usario; 
        private $senha; 
        private $banco; 
        private $servidor;
        private static $pdo; 


    public function __construct()
    {
        $this->servidor = "localhost";
        $this->banco = "printif";
        $this->usuario = "root";
        $this->senha = "";
    }   


    public function conectar(){

        $dsn = 'mysql:host=localhost; dbname=printif';
        $user = 'root';
        $pass = '';
        try {

            if (is_null(self::$pdo)) {
                self::$pdo = new PDO("mysql:host=".$this->servidor.";bdname=".$this->banco, $this->usuario, $this->senha);
            }
            return self::$pdo;
        } catch (PDOException $e) {
            echo 'Errro: ' . $e->getMessage();
        }
    }
}

?>
