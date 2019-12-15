<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';

	public $incrementing = false;

	protected $fillable
		= [
			'name',
			'description',
			'cost',
		];
}
