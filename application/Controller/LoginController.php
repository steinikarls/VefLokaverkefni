<?php  
namespace Mini\Controller;

use Mini\Model\Login;

class loginController
{
    public function index()
    {
        
        if(session_status() == PHP_SESSION_NONE) session_start();
       
        if(isset($_SESSION['username'])) {
          $username = $_SESSION['username'];
        } 
        else {
        //  aðgangi hafnða, prívat síða,  redirect á login síðu
        header('location:'. URL.'login/Test' );
        }
        require APP . 'view/_templates/header.php';
        require APP . 'view/Login/test.php';
        require APP . 'view/_templates/footer.php';     
    }

    public function Test()
    {
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/Login/loginform.php';
        require APP . 'view/_templates/footer.php';     
    }

    public function login()
    {
        if (isset($_POST['login'])) 
        {
            $username = strip_tags($_POST['username']);
            $password = strip_tags($_POST['password']);
            $username = stripslashes($username);
            $password = stripslashes($password);            

            $login = new Login();
            $loginUser = $login->checkLogin($username);

            foreach ($loginUser as $key => $value) 
            {
                $id =  $value->id;
                $db_password = $value->passwd;
                $admin = $value->admin;
            }            

            if (password_verify($password, $db_password)) 
            {
                if(session_status() == PHP_SESSION_NONE) session_start();
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['id'] = $id;
                if ($admin == 1) 
                {
                    $_SESSION['admin'] = 1;
                }         
                require APP . 'view/_templates/header.php';
                require APP . 'view/Login/test.php';           
                require APP . 'view/_templates/footer.php';  
            }
            else 
            {
                require APP . 'view/_templates/header.php';
                echo "You didn't enter the correct details!";
                require APP . 'view/_templates/footer.php';
            }
        }
        else 
        {
            require APP . 'view/_templates/header.php';
            echo "You didn't enter the correct details!";
            require APP . 'view/_templates/footer.php';  
            
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();


        header('location:'. URL.'login/Test' );
        exit();

    }


    public function insert()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["insert"])) {
            // Instance new Model (Song)
            $Login = new Login();
            // do addSong() in model/model.php
            $Login->addcontent($_POST["title"], $_POST["content"],  $_POST["date"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'Login/index');
    }




}

    ?>
    