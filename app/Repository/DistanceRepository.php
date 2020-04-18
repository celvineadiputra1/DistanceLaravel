<?php
namespace App\Repository;

interface DistanceRepository{
    public function list();
    public function insert($data);
    public function update(int $id,$data);
    public function delete(int $id);
}