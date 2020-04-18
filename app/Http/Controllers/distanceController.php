<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distance;
use App\Transformer\DistanceTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Collection;
use App\Services\DistanceService;

class distanceController extends Controller
{
    use Helpers;
    public $DistanceService;

    function __construct(DistanceService $DistanceService){
        $this->DistanceService = $DistanceService;
    }

    public function index()
    {
        // return Distance::all();
        $data = $this->DistanceService->list();
        return $this->response->collection($data, new DistanceTransformer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = $this->DistanceService->insert($request);
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $response = $this->DistanceService->update($id, $request);
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = $this->DistanceService->delete($id);
        return $response;
    }
}
