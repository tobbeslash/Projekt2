<?php
header("Content-Type: text/html; charset=utf-8");
class Server{
    private $connection;
    function __Construct(){
        $dsn = "mysql:host=tobias-192206.mysql.binero.se;dbname=192206-tobias";
        $username = "192206_ku44663";
        $password = "Tobias4466";
        try{
            $this->connection = new PDO($dsn,$username,$password);
        }catch (PDOException $e) {
            echo "Connection failed:" . $e->getMessage();
        }
    }
    public function GetPokemon(){
        $sql = "SELECT * FROM pokemon";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $data = $stm->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC);
        return $data;
    }
    public function GetPokemonTypes(){
        $sql = "SELECT * FROM Pokemon-types";
        $stm = $this->connection->prepare($sql);
        $stm->execute();
        $data = $stm->fetchAll();
        return $data;
    }
}
?>