<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use softDeletes;

	protected $guarded = false;

	public function carBrand(): BelongsTo
	{
		return $this->belongsTo(CarBrand::class);
	}

	public function carModel(): BelongsTo
	{
		return $this->belongsTo(CarModel::class);
	}

}
