<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Process;
use App\Models\File;

class Doc extends Model
{
    use HasFactory;

    public function file(){
        return $this->belongsTo(File::class, 'id_fil');
    }

    public function process(){
        return $this->belongsTo(Process::class, 'id_prcss');
    }
}