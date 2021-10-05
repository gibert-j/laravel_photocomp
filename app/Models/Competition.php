<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;
    protected $fillable =
   [
     "image_path", "title", "description", "time_remaining"
   ];

   public function entry()
    {
      return $this->hasMany(Entry::class);
    }

    public function getHoursToGoAttribute()
    {
      $start = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $this->start_time);
      $end =   \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $this->end_time);
      return $start->diffInHours($end, false);
    }
}
