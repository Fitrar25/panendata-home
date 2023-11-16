<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = [
        'name',
        'phone',
        'email',
        'objek',
        'package_id',
        'dp',
        'total',
        'status',
    ];

    public function package()
    {
        return $this->belongsTo(package::class);
    }
}
