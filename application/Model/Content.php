<?php  
namespace Mini\Model;

use Mini\Core\Model;


class Content extends Model
{
    public function getContent()
    {
        $sql = "SELECT * FROM posts ORDER BY id DESC";
        $query = $this->db->prepare($sql);
        $query->execute();
        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }   


    public function addcontent($title, $content, $timasetning)
    {
        $sql = "INSERT INTO posts (title, content, timasetning) VALUES (:title, :content, :timasetning)";
        $query = $this->db->prepare($sql);
        $parameters = array(':title' => $title, ':content' => $content, ':timasetning' => $timasetning);

        // useful for debugging: you can see the SQL behind above construction by using:
        

        $query->execute($parameters);
    }

}


?>
