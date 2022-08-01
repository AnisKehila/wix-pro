<?php 
    class dash {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }
        public function getBlogs() {
            $this->db->query("SELECT * FROM blogs WHERE user_id = :user_id");
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $result = $this->db->resultSet();
            return $result;
        }
        public function getCurrentBlog($blog_id) {
            $this->db->query('SELECT * FROM blogs WHERE user_id = :user_id AND blog_id = :blog_id');
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $this->db->bind(':blog_id', $blog_id);
            $blog = $this->db->single();
            if($this->db->rowCount() > 0) {
                return $blog ;
            } else {
                return false;
            }
        }
        public function getArticles($blog) {
            $this->db->query("SELECT * FROM articles WHERE blog_id = :blog_id and user_id = :user_id");
            $this->db->bind(':blog_id', $blog);
            $this->db->bind(':user_id', $_SESSION['user_id']);

            $result = $this->db->resultSet();
            if($result > 0) {
                return $result;
            } else {
                return false;
            }
        }
        public function getArticlesNum() {
            $this->db->query("SELECT * FROM articles WHERE user_id = :user_id");
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $result = $this->db->resultSet();
            $articlesNum= 0;
            foreach($result as $k) {
                $articlesNum++;
            }
            return $articlesNum;
        }
        public function addBlog($title) {
            $this->db->query('INSERT INTO blogs (user_id , blog_title) values(:user_id , :blog_title)');
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $this->db->bind(':blog_title', $title);
            if($this->db->execute()) {
                $this->db->query("SELECT blog_id FROM blogs WHERE user_id = :user_id and blog_title = :blog_title");
                $this->db->bind(':user_id', $_SESSION['user_id']);
                $this->db->bind(':blog_title', $title);
                $result = $this->db->resultSet();
                $_SESSION['blog_id'] = $result[0]->blog_id;
                return true;
            } else {
                return false;
            }
        }
        public function addArticle($data, $blog_id ) {
            $this->db->query('INSERT INTO articles (user_id , blog_id , article_title , article) values(:user_id , :blog_id, :article_title , :article)');
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $this->db->bind(':blog_id', $blog_id);
            $this->db->bind(':article_title', $data['title']);
            $this->db->bind(':article', $data['body']);
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function getArticle($article) {
            $this->db->query('SELECT * FROM articles WHERE user_id = :user_id AND article_id = :article_id');
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $this->db->bind(':article_id', $article);
            $article = $this->db->single();
            if($this->db->rowCount() > 0) {
                return $article ;
            } else {
                return false;
            }
        }
        public function editArticle($title , $body ,$article_id) {
            $this->db->query('UPDATE articles
                                SET article_title = :article_title, article = :article
                                WHERE user_id = :user_id AND article_id = :article_id;');
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $this->db->bind(':article_id', $article_id);
            $this->db->bind(':article_title', $title);
            $this->db->bind(':article', $body);
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function deleteArticle($article_id) {
            $this->db->query('DELETE FROM articles
            WHERE user_id = :user_id AND article_id = :article_id;');
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $this->db->bind(':article_id', $article_id);
            if($this->db->execute()) {
            return true;
            } else {
            return false;
            }
        }
        public function getCategories($blog) {
            $this->db->query("SELECT category FROM articles WHERE blog_id = :blog_id");
            $this->db->bind(':blog_id', $blog);

            $result = $this->db->resultSet();
            if($result > 0) {
                return $result;
            } else {
                return false;
            }
        }
    }