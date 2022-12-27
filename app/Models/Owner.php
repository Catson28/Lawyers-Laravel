<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PersPartcp;
use App\Models\Person;

class Owner extends Model
{
    use HasFactory;

    public function prsn_prtcp(){
        return $this->belongsTo(PersPartcp::class, 'id_prsn_prtcp');
    }

    public function persons(){
        return $this->hasMany(Person::class,'id_peop');
    }
}