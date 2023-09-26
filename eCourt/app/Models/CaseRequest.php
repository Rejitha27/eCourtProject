<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseRequest extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'caserequests';
    public $timestamps = false;
}
