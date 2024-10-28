<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Car\StoreRequest;
use App\Http\Requests\Car\UpdateRequest;
use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
	{
		return Car::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

		return Car::create($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Car $car): Car
	{
        $car->update($request->validated());

		return $car;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
	{
		$car->delete();
		return response([
			'message' => 'Car deleted successfully'
		]);
    }

}
