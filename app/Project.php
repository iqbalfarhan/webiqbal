<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = [
		'title',
		'slug',
		'unique_id',
		'photo',
		'thumbnail',
		'client',
		'keterangan',
		'show',
	];
}
