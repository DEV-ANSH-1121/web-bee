<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	/**
     * Parent menu->Child menu relationship
     */
    public function childMenus()
    {
        return $this->hasMany(MenuItem::class,'parent_id');
    }

    /**
     * Parent menu->Child menu relationship
     */
    public function parentMenu()
    {
        return $this->belongsTo(MenuItem::class,'parent_id');
    }
}
