<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClosingRequest extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function case()
    {
        return $this -> hasOne(Cases::class,'id','case_id');
    }
    public function client()
    {
        return $this -> hasOne(Client::class,'id','client_id');
    }

}
