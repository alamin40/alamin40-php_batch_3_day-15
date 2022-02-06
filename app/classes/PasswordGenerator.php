<?php
namespace App\classes;
class PasswordGenerator
{
        protected $length;
        protected $data = [];
        protected $password;
        protected $i;
        protected $index;
        protected $result;

        public function __construct($post = null)
        {
            $this->length = $post['password_length'];
            $this->data = ['#', '@', '1', 'A', 'a', ')', '6', '!', '9', '*', '5'];
        }

        public function newPassword(){


            for ($this->i = 0; $this->i < $this->length; $this->i++){
                $index = rand(2, 8);
                $this->password .= $this->data[$index];
            }
            return $this->result = $this->password;
        }
}