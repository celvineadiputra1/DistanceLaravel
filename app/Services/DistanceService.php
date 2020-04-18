<?php
namespace App\Services;

interface DistanceService{
    public function list();
    public function insert($data);
    public function update(int $id,$data);
    public function delete(int $id);
}