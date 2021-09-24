<?php

namespace App\Http\Controllers\Admin;

use App\Http\Constants\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\CarType;
use App\Services\Admin\CarTypeService;
use Illuminate\Http\Request;

class CarTypeController extends Controller
{
    protected $carTypeService;

    public function __construct(CarTypeService $carTypeService)
    {
        $this->carTypeService = $carTypeService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = CarType::all();
        return view('admin.car-type.car-type', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.car-type.car-type-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->carTypeService->store($request);
            return response(ResponseMessage::SuccessMessage());
        } catch (\Exception $ex) {
            return response(ResponseMessage::ErrorMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CarType $car_type
     * @return \Illuminate\Http\Response
     */
    public function edit(CarType $car_type)
    {
        return view('admin.car-type.car-type-edit', compact('car_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CarType $car_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarType $car_type)
    {
        try {
            $this->carTypeService->update($car_type->id, $request);
            return response(ResponseMessage::SuccessMessage());
        } catch (\Exception $ex) {
            return response(ResponseMessage::ErrorMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CarType $car_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarType $car_type)
    {
        try {
            $this->carTypeService->destroy($car_type->id);
            return response(ResponseMessage::SuccessMessage());
        } catch (\Exception $ex) {
            return response(ResponseMessage::ErrorMessage());
        }
    }
}