<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'user_id' => 'int',
		'total_amount' => 'float'
	];

	protected $fillable = [
		'user_id',
		'total_amount',
		'address'
	];
}
