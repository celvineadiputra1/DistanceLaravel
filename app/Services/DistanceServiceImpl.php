<?php
namespace App\Services;
use App\Services\DistanceService;
use App\Repository\DistanceRepository;
use App\Models\Distance;

class DistanceServiceImpl implements DistanceService{
    public $DistanceRepository;
    public function __construct(DistanceRepository $DistanceRepository){
        $this->DistanceRepository = $DistanceRepository;
    }
    public function list(){
        return $this->DistanceRepository->list();
    }
    public function insert($data){
        return $this->DistanceRepository->insert($data) ? 1 : 0;
    }
    public function update(int $id,$data){
        return $this->DistanceRepository->update($id, $data) ? 1 : 0;
    }
    public function delete(int $id){
        return $this->DistanceRepository->delete($id) ? 1 : 0;
    }
}
