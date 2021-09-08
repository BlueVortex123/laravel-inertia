<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assembly extends Model
{
    use HasFactory;
    protected $fillable = ['name','address'];

    public function buildings()
    {
        return $this->hasMany(Building::class,'assembly_id');
    }


}
