<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;
    protected $fillable =
   [
    "name", "image_path", "user_id", "competition_id"
   ];

   public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function competition()
     {
       return $this->belongsTo(Competition::class);
     }
}
