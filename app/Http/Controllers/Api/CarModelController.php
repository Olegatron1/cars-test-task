<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Collection;

class CarModelController extends Controller
{
	public function index(): Collection
	{
		return CarModel::all();
    }

}
