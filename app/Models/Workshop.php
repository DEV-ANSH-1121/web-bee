<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use App\Models\Event;

class Workshop extends Model
{
	protected $fillable = [
        "start",
        "end",
        "event_id",
        "name",
    ];
	/**
     * @usage Event->Workshop relationship
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
