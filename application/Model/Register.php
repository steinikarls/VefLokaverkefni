<?php  
namespace Mini\Model;

use Mini\Core\Model;


class Register extends Model
{
   
	public function addUser($name , $password)
    {
        $sql = "INSERT INTO users (username, passwd) VALUES (:name, :password)";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':password' => $password);
        $query->execute($parameters);
    }
}

?>