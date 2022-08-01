<?php 
class Dashboard extends Controller{
    public function __construct()
    {
        $this->dashboardModel = $this->model('dash');
        $this->blogModel = $this->model('blog');
    }
    public function index() {
        $data['blogs'] = $this->dashboardModel->getBlogs();
        $data['currentBlog'] = $this->dashboardModel->getCurrentBlog($_SESSION['blog_id']);
        $data['articles'] = $this->dashboardModel->getArticles($_SESSION['blog_id']);
        $data['articlesNum'] = $this->dashboardModel->getArticlesNum();

        if(isLoggedIn()) { 
            $this->view('pages/dashboard/index',$data);
        } else {
            header('location: ' .URLROOT ."/users/login");
        }
    }
    public function newblog() {
        $data = [
            'title' => '',
            'titleError' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['blogTitle']),
                'titleError' => ''
            ];

            //Validate email
            if (empty($data['title'])) {
                $data['titleError'] = 'All feilds are required!';
            }
        //Check if all errors are empty
            if (empty($data['titleError']) && isLoggedIn()) {
                if($this->dashboardModel->addBlog($data['title']))
                    header('location: ' .URLROOT ."/dashboard/articles/".$_SESSION['blog_id']);
            } 
        }
        $data['blogs'] = $this->dashboardModel->getBlogs();
        $data['articles'] = $this->dashboardModel->getArticles($_SESSION['blog_id']);
        $data['currentBlog'] = $this->dashboardModel->getCurrentBlog($_SESSION['blog_id']);
        $data['articlesNum'] = $this->dashboardModel->getArticlesNum();
        if(isLoggedIn()) {
            $this->view('pages/dashboard/newblog',$data);
        } else {
            header('location: ' .URLROOT ."/users/login");
        }
    }
    public function newarticle() {

        $data = [
            'title' => '',
            'body' => '',
            'Error' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            //Sanitize post data
            $data = [
                'title' => trim($_POST['articleTitle']),
                'body' => trim($_POST['article']),
                'Error' => ''
            ];

            //Validate email
            if (empty($data['title']) && empty($data['body'])) {
                $data['Error'] = 'All feilds are required!';
            }
        //Check if all errors are empty
            if (empty($data['Error']) && isLoggedIn()) {
                if($this->dashboardModel->addArticle($data, $_SESSION['blog_id'] )) {
                    header('location: ' .URLROOT ."/dashboard/articles/".$_SESSION['blog_id']);
                }
            } 
        }
        $data['articlesNum'] = $this->dashboardModel->getArticlesNum();
        $data['blogs'] = $this->dashboardModel->getBlogs();
        $data['articles'] = $this->dashboardModel->getArticles($_SESSION['blog_id']);
        $data['currentBlog'] = $this->dashboardModel->getCurrentBlog($_SESSION['blog_id']);
        if(isLoggedIn()) {
            $this->view('pages/dashboard/newarticle',$data);
        } else {
            header('location: ' .URLROOT ."/users/login");
        }
    }
    public function articles($blog_id) {
        $data['blogs'] = $this->dashboardModel->getBlogs();
        if(!$this->dashboardModel->getArticles($blog_id)) {
            $data['articles'] = ['empty'];
        } else {
            $data['articles'] = $this->dashboardModel->getArticles($blog_id);
        }
        $data['currentBlog'] = $this->dashboardModel->getCurrentBlog($blog_id);
        $data['articlesNum'] = $this->dashboardModel->getArticlesNum();

        if(isLoggedIn()) {
            $this->view('pages/dashboard/index',$data);
        } else {
            header('location: ' .URLROOT ."/users/login");
        }
    }
    public function article($article) {
        $data = [
            'title' => '',
            'body' => '',
            'Error' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            //Sanitize post data
            $data = [
                'title' => trim($_POST['articleTitle']),
                'body' => trim($_POST['article']),
                'Error' => ''
            ];

            //Validate email
            if (empty($data['title']) || empty($data['body'])) {
                $data['Error'] = 'All feilds are required!';
            }
        //Check if all errors are empty
            if (empty($data['Error']) && isLoggedIn()) {
                if($this->dashboardModel->editArticle($data['title'] , $data['body'] , $article)) {
                    header('location: ' .URLROOT ."/dashboard");
                }
            } 
        }

        $data['article'] = $this->dashboardModel->getArticle($article);

        if(isLoggedIn()) {
            $this->view('pages/dashboard/article',$data);
        } else {
            header('location: ' .URLROOT ."/users/login");
        }
    }
    public function delete($article_id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isLoggedIn() && $this->dashboardModel->deleteArticle($article_id)) {
                header('location: '.URLROOT ."/pages/dashboard/index");
            } else {
                echo 'Error please try again..';
            }
        }
    }
    public function preview($article) {
        $data['article'] = $this->dashboardModel->getArticle($article);
        $data['currentBlog'] = $this->dashboardModel->getCurrentBlog($data['article']->blog_id);
        $data['comments'] = $this->blogModel->getComments($article);
        if(isLoggedIn()) {
            $this->view('pages/dashboard/preview',$data);
        } else {
            header('location: ' .URLROOT ."/users/login");
        }
    }
}
