<?php 
class Blogs extends Controller{
    public function __construct()
    {
        $this->blogModel = $this->model('blog');
    }
    public function index() {
        $data = [];
        $data['blogs'] = $this->blogModel->getBlogs();
        $this->view('pages/blogs/index',$data);
    }
    public function blog($blog_id) {
        $data = [];
        $data['articles'] = $this->blogModel->getArticles($blog_id);
        $this->view('pages/blogs/blog',$data);
    }
}