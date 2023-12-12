<?php
namespace App\Models;
use Models\Database;
require_once __DIR__ . '/database.php';

class Post
{
    private $conn;
    public function __construct()
    {

        $database = new Database();

        $this->conn = $database->getConn();
    }

    public function all()
    {
        $query = 'SELECT * FROM contenido';

        try {
            $stm = $this->conn->prepare($query);
            $stm->execute();
            $rs = $stm->fetchAll(\PDO::FETCH_ASSOC);
            return $rs;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    function  create($titulo, $contenido)
    {

        $query  = 'INSERT INTO `contenido`(`titulo`, `contenido`) VALUES (?,?)';

        try {

            $stm = $this->conn->prepare($query);
            $stm->execute([$titulo, $contenido]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    function delete($id){
        $query  = 'DELETE FROM `contenido` WHERE id =?';
        try {
            $stm = $this->conn->prepare($query);
            $stm->execute([$id]);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

}
