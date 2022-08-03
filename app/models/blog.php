<?php 
    class blog {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }
        public function getBlogs() {
            $this->db->query("SELECT * FROM blogs");
            $result = $this->db->resultSet();
            return $result;
        }
        public function insertComment($data) {
            $this->db->query("INSERT INTO comments (article_id , comment_name , comment) 
                                VALUES (:article_id , :comment_name , :comment)");
            $this->db->bind(":article_id" , $data['article_id']);
            $this->db->bind(":comment_name" , $data['comment_name']);
            $this->db->bind(":comment" , $data['comment']);
            $result = $this->db->resultSet();
            return $result;
        }
        public function getComments($article) {
            $this->db->query("SELECT * FROM comments WHERE article_id = :article_id");
            $this->db->bind(":article_id" ,$article);
            $result = $this->db->resultSet();
            return $result;
        }
        public function getArticles($blog) {
            $this->db->query("SELECT * FROM articles WHERE blog_id = :blog_id");
            $this->db->bind(':blog_id', $blog);
            $result = $this->db->resultSet();
            if($result > 0) {
                return $result;
            } else {
                return false;
            }
        }
        public function getArticle($article_id) {
            $this->db->query("SELECT * FROM articles WHERE article_id = :article_id");
            $this->db->bind(':article_id', $article_id);
            $article = $this->db->single();
            if($this->db->rowCount() > 0) {
                return $article ;
            } else {
                return false;
            }
        }
    }
