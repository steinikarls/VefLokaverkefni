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
        return $query->fetchAll();
    }   
    public function viewPost($id)
    {
        $sql = "SELECT * FROM posts where id like $id";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }   
    public function addContent($title, $content, $timasetning)
    {
        $sql = "INSERT INTO posts (title, content, timasetning) VALUES (:title, :content, :timasetning)";
        $query = $this->db->prepare($sql);
        $parameters = array(':title' => $title, ':content' => $content, ':timasetning' => $timasetning);
        $query->execute($parameters);
    }
    public function deletePost($id)
    {
        $sql = "DELETE FROM posts WHERE id = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id);
        $query->execute($parameters);
    }
    public function editPost($title, $content, $timasetning, $id)
    {
        $sql = "UPDATE posts SET title = :title, content = :content, timasetning = :timasetning WHERE id = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':title' => $title, ':content' => $content, ':timasetning' => $timasetning, ':id' => $id);
        $query->execute($parameters);
    }

}


?>
