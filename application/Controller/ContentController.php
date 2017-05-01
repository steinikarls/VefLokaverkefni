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
}
?>