<?php 
class Blogs extends Controller{
    public function __construct()
    {
        $this->blogModel = $this->model('blog');
    }
    public function index() {
        $data['blogs'] = $this->blogModel->getBlogs();
        $this->view('pages/blogs/index',$data);
    }
    public function blog($blog_id) {
        $data['articles'] = $this->blogModel->getArticles($blog_id);
        $this->view('pages/blogs/blog',$data);
    }
    public function article($article) {
        $data['article'] = $this->blogModel->getArticle($article);
        $data['comments'] = $this->blogModel->getComments($article);

        $this->view('pages/blogs/article',$data);
    }
    public function newComment($articleID) {
        $data = [
            'article_id' => '',
            'comment_name' => '',
            'comment' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'article_id' => $articleID,
                'comment_name' => trim($_POST['comment_name']),
                'comment' => trim($_POST['comment'])
            ];

            //Validate email
            if (empty($data['comment']) || empty($data['comment_name'])) {
                $data['Error'] = 'All feilds are required!';
                echo 'All feilds are required!';
            }
        //Check if all errors are empty
            if (empty($data['Error'])) {
                $this->blogModel->insertComment($data);
            } 
        }
        $data['comments'] = $this->blogModel->getComments($articleID);
        if(empty($data['Error'])) {
            foreach($data['comments'] as $k) {
                echo
                "<div class='comment-container'>
                    <div class='comment-user'>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d='M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z'/></svg>
                    <div class='comment-date'>
                        <h3 class='usr-cmntr'> $k->comment_name </h3>
                        <h4 id='date'>
                            $k->comment_date
                        </h4>
                    </div>
                </div>
                    <div class='comment'>
                        <p>
                            $k->comment 
                        </p>
                    </div>                
                </div>";
            }
        }
    }
}