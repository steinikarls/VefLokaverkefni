<?php  
namespace Mini\Controller;

use Mini\Model\Content;

class ContentController
{
    public function Index()
    {
        
        if(session_status() == PHP_SESSION_NONE) session_start();
       
        if(isset($_SESSION['username'])) {
          $username = $_SESSION['username'];
        } 
        else {
        //  aðgangi hafnða, prívat síða,  redirect á login síðu
        header('location:'. URL.'login/Index' );
        }
        $Content = new Content();
        $allContent = $Content->getContent();
        require APP . 'view/_templates/header.php';
        require APP . 'view/Content/Index.php';
        require APP . 'view/_templates/footer.php';     
    }
    public function newPost()
    {
        
        if(session_status() == PHP_SESSION_NONE) session_start();
       
        if(isset($_SESSION['username'])) {
          $username = $_SESSION['username'];
        } 
        else {
        //  aðgangi hafnða, prívat síða,  redirect á login síðu
        header('location:'. URL.'login/Index' );
        }
        require APP . 'view/_templates/header.php';
        require APP . 'view/Content/CreateBlog.php';
        require APP . 'view/_templates/footer.php';     
    }

    public function addBlog()
    {
        if (isset($_POST["insert"])) {
            $date =date('l jS \of F Y h:i:s A');
            $Content = new Content();
            $Content->addContent($_POST["title"], $_POST["content"], $date);
        }
        header('location: ' . URL . 'Content/Index');
    }
}
?>