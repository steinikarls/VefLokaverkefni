<?php  
namespace Mini\Controller;

use Mini\Model\Login;

class loginController
{
    

    public function Index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/Login/loginform.php';
        require APP . 'view/_templates/footer.php';     
    }

    public function Login()
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
                header('location:'. URL.'Content/Index' );  
            }
            else 
            {
                header('location:'. URL.'login/Index' );
            }
        }
        else 
        {
            header('location:'. URL.'login/Index' );   
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('location:'. URL.'login/Index' );
        exit();

    }






}

    ?>
    