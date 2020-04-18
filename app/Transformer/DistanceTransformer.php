<?php
namespace App\Transformer;
use League\Fractal\TransformerAbstract;

class DistanceTransformer extends TransformerAbstract{
    public function transform($data){
        return (
            [
                'id'        => $data->id,
                'Latitude0' => $data->Latitude0,
                'Longtide0' => $data->Longtide0,
                'Latitude1' => $data->Latitude1,
                'Longtide1' => $data->Longtide1,
                'Jarak'     => $data->Jarak
            ]
        );
    }
}