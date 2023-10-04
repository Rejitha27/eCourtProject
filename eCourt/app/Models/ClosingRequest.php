<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClosingRequest extends Model
{
    use HasFactory;
    protected $table='closing_requests';
    protected $guarded = [];
    public $timestamps = false;

}
