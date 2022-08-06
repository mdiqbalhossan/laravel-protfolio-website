<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    public $table = 'visitor';
    public $timestamps = false;
    protected $fillable = ['ip_address', 'visit_time'];
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
}
