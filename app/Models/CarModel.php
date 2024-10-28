<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarModel extends Model
{

	use softDeletes;

	protected $guarded = false;

	public function cars(): HasMany
	{
		return $this->hasMany(Car::class);
	}

	public function car(): HasOne
	{
		return $this->hasOne(Car::class);
	}

	public function carBrand(): BelongsTo
	{
		return $this->belongsTo(CarBrand::class);
	}

}
