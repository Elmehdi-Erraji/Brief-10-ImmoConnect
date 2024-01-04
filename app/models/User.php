<?php 

namespace App\models;

class User {
    private $id;
    private $username;
    private $email;
    private $phone_number;
    private $password;
    private $image;
    private $statut;
    private $role_id;

    public function __construct($username, $email, $phone_number, $password, $image, $statut, $role_id) {
        $this->username = $username;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->password = $password;
        $this->image = $image;
        $this->statut = $statut;
        $this->role_id = $role_id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPhoneNumber($phone_number) {
        $this->phone_number = $phone_number;
    }

    public function getPhoneNumber() {
        return $this->phone_number;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getImage() {
        return $this->image;
    }

    public function setStatut($statut) {
        $this->statut = $statut;
    }

    public function getStatut() {
        return $this->statut;
    }

    public function setRoleId($role_id) {
        $this->role_id = $role_id;
    }

    public function getRoleId() {
        return $this->role_id;
    }
}
