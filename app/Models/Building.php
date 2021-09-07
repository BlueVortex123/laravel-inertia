<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $fillable = ['assembly_id','name','no_floors'];

    public function assembly()
    {
        return $this->belongsTo(Assembly::class);
    }
    
}
