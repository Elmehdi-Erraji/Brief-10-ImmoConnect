<?php
namespace App\DAO;

interface DaoInterface{
    public function save($entity);
    public function update($entity);
    public function findById($id);
    public function findAll();
    public function deleteById($id);
}