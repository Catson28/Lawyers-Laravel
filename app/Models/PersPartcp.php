<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;
use App\Models\Participant;

class PersPartcp extends Model
{
    use HasFactory;
    protected $table ='persn_partcps';

    public function person(){
        return $this->belongsTo(Person::class, 'id_peop');
    }

    public function participant(){
        return $this->belongsTo(Participant::class, 'id_partcp');
    }
}