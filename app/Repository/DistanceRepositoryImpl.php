<?php
namespace App\Repository;
use App\Repository\DistanceRepository;
use App\Models\Distance;
class DistanceRepositoryImpl implements DistanceRepository{
    public function list(){
        return Distance::all();
    }
    public function insert($data){
        $save = Distance::create([
            'Latitude0' => $data->Latitude0,
            'Longtide0' => $data->Longtide0,
            'Latitude1' => $data->Latitude1,
            'Longtide1' => $data->Longtide1,
            'Jarak'     => $data->Jarak
        ]);
        return $save ? true : false;
    }
    public function update(int $id,$data){
        $update = Distance::where('id',$id)->update([
            'Latitude0' => $data->Latitude0,
            'Longtide0' => $data->Longtide0,
            'Latitude1' => $data->Latitude1,
            'Longtide1' => $data->Longtide1,
            'Jarak'     => $data->Jarak
        ]);
        return $update ? true : false;
    }
    public function delete(int $id){
        $delete = Distance::where('id',$id)->delete();
        return $delete ? true : false;
    }
}