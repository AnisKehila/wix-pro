<?php 
class Users extends Controller{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function index() {
        if(isLoggedIn()) {
            header('location: ' .URLROOT ."/dashboard");
        } else {
            $this->view('pages/users/login');
        }
    }
    public function login() {
        $data = [
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => ''
            ];

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter an email.';
            } elseif (!($this->userModel->findUserByEmail($data['email']))) {
                $data['emailError'] = 'There is no Account with the used email';
            } else {

                //Validate password
                if (empty($data['password'])) {
                    $data['passwordError'] = 'Please enter a password.';
                }
            }
            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                        $this->userModel->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Data you entered is incorrect. Please try again.!!';

                    $this->view('pages/users/login', $data);
                }
            }
        }
        if (isLoggedIn()) {
            header("location: " .URLROOT .'/dashboard');
        } else {
            $this->view('pages/users/login', $data);
        }
    }
    public function signup() {
        $data = [
            'username' => '',
            'email' => '',
            'password' => '',
            'passwordConfirmation' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'passwordConfirmation' => trim($_POST['passwordConfirmation']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => ''
            ];

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'All feilds are required!';
            } elseif ($this->userModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'There is already an account with this email!';
            } elseif(empty($data['username'])) {
                $data['usernameError'] = 'Username is required!!.';
            } elseif ($this->userModel->findUserByUserName($data['username'])) {
                $data['usernameError'] = 'There is already an account with this username!';
            } elseif (empty($data['password'])) {
                    $data['passwordError'] = 'Please enter a password.';
            } elseif (empty($data['passwordConfirmation'])) {
                $data['passwordError'] = 'Please confirm the password.';
            } elseif($data['passwordConfirmation'] != $data['password']) {
                $data['passwordError'] = 'the password doesnt match the confirmation.';
            } elseif(strlen($data['password']) < 8) {
                $data['passwordError'] = 'the password must be at least 8 charecters.';
            }

        //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError']) && empty($data['usernameError'])) {
                $this->userModel->signup($data);
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if($loggedInUser) {
                    $this->userModel->createUserSession($loggedInUser);
                }
            }
        }
        if (isLoggedIn()) {
            header("location: " .URLROOT .'/dashboard/newblog');
        } else {
            $this->view('pages/users/signup', $data);
        }
    }
    public function logout() {
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['user_id']);
        session_unset();
        session_destroy();
        header('location: ' .URLROOT);
    }
}