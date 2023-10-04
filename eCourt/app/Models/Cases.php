<?php

namespace App\Models;

use App\Models\CaseSchedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cases extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function lawyer()
    {
        return $this->belongsTo(Lawyer::class);
    }

    public function scheduleCases()
    {
        return $this->hasOne(CaseSchedule::class,'case_id','id');
    }

}
