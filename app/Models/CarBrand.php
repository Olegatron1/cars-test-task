<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarBrand extends Model
{

	use softDeletes;

	protected $guarded = false;

	public function cars(): HasMany
	{
		return $this->hasMany(Car::class);
	}

	public function carModels(): HasMany
	{
		return $this->hasMany(CarModel::class);
	}

	public function car(): HasOne
	{
		return $this->hasOne(Car::class);
	}

	public function carModel(): HasOne
	{
		return $this->hasOne(CarModel::class);
	}

}
