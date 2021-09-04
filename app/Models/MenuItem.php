<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    // loads only direct children - 1 level
	public function child()
	{
	   return $this->hasMany(MenuItem::class, 'parent_id');
	}

	// recursive, loads all descendants
	public function children()
	{
	   return $this->child()->with('children');
	}
}
