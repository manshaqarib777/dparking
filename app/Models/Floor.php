<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use ModelCommonMethodTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'place_id',
        'name',
        'level',
        'remarks',
        'status'
    ];

    public function slots()
    {
        return $this->hasMany('App\Models\CategoryWiseFloorSlot');
    }
   
    public function place()
    {
        return $this->belongsTo('App\Models\Place');
    }

    public function active_parking()
    {
        return $this->hasOneThrough('App\Models\Parking', 'App\Models\CategoryWiseFloorSlot', 'floor_id', 'slot_id')->whereNull('out_time');
    }
}
