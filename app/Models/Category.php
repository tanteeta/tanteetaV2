<?php

namespace App\Models;

class Category extends BaseModel
{
	protected $table = 'course_categories';

	public function getAll()
	{
		$cat = DB::table($table)->pluck('name');

		return $cat;
	}
}