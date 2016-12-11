<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;

/**
* 
*/
class BaseController extends Controller
{
	function __construct()
    {
        //$this->middleware('auth');
        $this->data = [];
        $this->data['categories'] = Category::pluck('name');
        
        return $this->data;
    }
    
	public function viewHome()
	{	
		$data = $this->data;
		$data['courses'] = Course::leftjoin('course_types','course_types.id','=','courses.type_id')
								->select('courses.*','course_types.name AS type')
								->where('course_types.name','=','recommended')
								->limit(8)
								->get();

		return view('home', $data);
	}

	public function viewKids() {
		$data = $this->data;
		return view('kids', $data);
	}
}