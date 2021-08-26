<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomDetails extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	 'verison_id','room_id',
    ];
    protected $primaryKey = 'room_details_id';
 	protected $table = 'tbl_room_details';
}
