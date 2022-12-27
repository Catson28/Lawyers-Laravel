<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;
use App\Models\PersPartcp;

class Customer extends Model
{
    use HasFactory;

    public function owner(){
        return $this->belongsTo(Owner::class, 'id_ownr');
    }

    public function prsn_prtcp(){
        return $this->belongsTo(PersPartcp::class, 'id_prsn_prtcp');
    }
}
