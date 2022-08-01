<?php 
    class User {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }
        public function getUsers() {
            $this->db->query("SELECT * FROM users");
            $result = $this->db->resultSet();
            return $result;
        }
        public function getUserName($id) {
            $this->db->query("SELECT username FROM users WHERE id = :id");
            $this->db->bind(':id', $id);
            $user = $this->db->single();
            if($this->db->rowCount() > 0) {
                return $user ;
            } else {
                return false;
            }
        }
        public function login($email , $pwd) {
            $this->db->query('SELECT * FROM users WHERE email = :email');

            //Bind value
            $this->db->bind(':email', $email);
    
            $row = $this->db->single();
            if ($row) {
                $hashedPassword = $row->password;
                if (password_verify($pwd, $hashedPassword)) {
                    return $row;
                }
            } else {
                return false;
            }
        }
        public function signup($data) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            $this->db->query('INSERT INTO users (username , email , password) values(:username , :email , :password)');
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }

        }
        public function findUserByEmail($email) {
            $this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind(':email', $email);
            $user = $this->db->single();
            if($this->db->rowCount() > 0) {
                return $user ;
            } else {
                return false;
            }
        }
        public function findUserByUserName($username) {
            $this->db->query('SELECT * FROM users WHERE username = :username');
            $this->db->bind(':username', $username);
            $user = $this->db->single();
            if($this->db->rowCount() > 0) {
                return true ;
            } else {
                return false;
            }
        }
        public function setBlog($user) {
            $this->db->query('SELECT * FROM blogs WHERE user_id = :user_id');
            $this->db->bind(':user_id', $user);
            $blog = $this->db->resultSet();
            return $blog[0]->blog_id;
        }
        public function createUserSession($user)
        {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['email'] = $user->email;
            $_SESSION['username'] = $user->username;
            $_SESSION['blog_id'] = $this->setBlog($user->id);
        }
    }