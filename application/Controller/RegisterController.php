<?php  
namespace Mini\Controller;

use Mini\Model\Register;

class RegisterController
{
    public function Index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/Register/registerForm.php';
        require APP . 'view/_templates/footer.php'; 

    }
    public function Register()
    {
        if (isset($_POST["register"]))
        {
            if ($_POST["password"] == $_POST["confpassword"] ) {
                
                $regiser = new Register();
                $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
                $registerUser = $regiser->addUser($_POST["name"],$password);
            }
            else
            {
                echo "Password not matched";
                require APP . 'view/_templates/header.php';
                require APP . 'view/Register/registerForm.php';
                require APP . 'view/_templates/footer.php'; 


            }
            
        }
        require APP . 'view/_templates/header.php';
        require APP . 'view/login/loginform.php';
        require APP . 'view/_templates/footer.php';   
    }
}
?>