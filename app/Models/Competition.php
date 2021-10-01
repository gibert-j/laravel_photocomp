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
}
