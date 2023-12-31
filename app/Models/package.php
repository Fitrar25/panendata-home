<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    use HasFactory;

    protected $table = "packages";

    protected $fillable = [
        'name',
    ];

    public function order()
    {
        return $this->hasMany(order::class);
    }

}
