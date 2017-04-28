<?php  
namespace Mini\Model;

use Mini\Core\Model;


class Login extends Model
{
   
    

    public function checkLogin( $username)
    {
        $sql = "SELECT * FROM users WHERE username ='$username' LIMIT 1";
        $query = $this->db->prepare($sql);
        $query->execute();
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
