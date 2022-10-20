<?php
namespace App;
class User {
    private $_login;
    private $_email; 
    private $_role;
    public function __construct($login, $email, $role) {
        $this->_login = $login;
        $this->_email = $email;
        $this->_role = $role;
    }
    public function getLogin() {
        return $this->_login;
    }
    public function setLogin($login) {
        $this->_login = $login;
    }
    public function getEmail() {
        return $this->_email;
    }
    public function setEmail($email) {
        $this->_email = $email;
    }
    public function getRole() {
        return $this->_role;
    }
    public function setRole($role) {
        $this->_role = $role;
    }

    public function to_string() {
        return json_encode(["login"=>$this->_login, "email"=>$this->_email, "role"=>$this->_role]);
    }
}