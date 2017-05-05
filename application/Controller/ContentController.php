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
        header('location:'. URL.'login/Index' );
        }
        $Content = new Content();
        $allContent = $Content->getContent();
        require APP . 'view/_templates/Sessionheader.php';
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
        header('location:'. URL.'login/Index' );
        }
        require APP . 'view/_templates/Sessionheader.php';
        require APP . 'view/Content/CreateBlog.php';
        require APP . 'view/_templates/footer.php';     
    }

    public function addBlog()
    {
        if(session_status() == PHP_SESSION_NONE) session_start();
       
        if(isset($_SESSION['username'])) {
          $username = $_SESSION['username'];
        } 
        else {
        header('location:'. URL.'login/Index' );
        }
        if (isset($_POST["insert"])) {
            $date =date('l jS \of F Y h:i:s A');
            $Content = new Content();
            $Content->addContent($_POST["title"], $_POST["content"], $date, $username);
        }
        header('location: ' . URL . 'Content/Index');
    }
    public function viewPost()
    {
        if(session_status() == PHP_SESSION_NONE) session_start();
       
        if(isset($_SESSION['username'])) {
          $username = $_SESSION['username'];
        } 
        else {
        header('location:'. URL.'login/Index' );
        }
        
        $Content = new Content();
        $viewContent = $Content->viewPost($_GET["postid"]);
        require APP . 'view/_templates/Sessionheader.php';
        require APP . 'view/Content/ViewBlog.php';
        require APP . 'view/_templates/footer.php';  
    }

    public function editPost()
    {
        if(session_status() == PHP_SESSION_NONE) session_start();
       
        if(isset($_SESSION['username'])) {
          $username = $_SESSION['username'];
        } 
        else {
        header('location:'. URL.'login/Index' );
        }
        
        $Content = new Content();
        $viewContent = $Content->viewPost($_GET["postid"]);
        require APP . 'view/_templates/Sessionheader.php';
        require APP . 'view/Content/EditBlog.php';
        require APP . 'view/_templates/footer.php';  
    }

    public function submitEditBlog()
    {
        if (isset($_POST["insert"])) {
            $date =date('l jS \of F Y h:i:s A');
            $Content = new Content();
            $Content->editPost($_POST["title"], $_POST["content"], $date, $_POST["id"]);
        }
        header('location: ' . URL . 'Content/Index');
    }




    public function deletePost()
    {
        if(session_status() == PHP_SESSION_NONE) session_start();
       
        if(isset($_SESSION['username'])) {
          $username = $_SESSION['username'];
        } 
        else {
        header('location:'. URL.'login/Index' );
        }    
        $Content = new Content();
        $viewContent = $Content->deletePost($_GET["postid"]);

        header('location:'. URL.'Content/Index' );
    }
}
?>