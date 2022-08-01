<?php 
class Pages extends Controller{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->blogModel = $this->model('blog');
    }
    public function index() {
        if(isLoggedIn()) {
            header('location: ' .URLROOT ."/dashboard");
        } else {
            $this->view('pages/index');
        }
    }
}