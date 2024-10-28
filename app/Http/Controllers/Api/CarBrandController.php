<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CarBrand;
use Illuminate\Database\Eloquent\Collection;

class CarBrandController extends Controller
{
	public function index(): Collection
	{
		return CarBrand::all();
    }

}
