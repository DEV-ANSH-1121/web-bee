<?php

namespace App\Models;

use App\Models\Workshop;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

	protected $fillable = [
        "name"
    ];
	/**
     * Event->Workshop relationship
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
