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


}


?>
