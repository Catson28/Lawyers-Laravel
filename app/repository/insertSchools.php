<?php

namespace App\repository;
use App\Models\Participant;
use App\Models\Employee;
use App\Models\Contact;
use App\Models\File;
use App\Models\Person;
use App\Models\Position;
use App\Models\Schedule;
use App\Models\Time;
use App\Models\Type;


class InsertSchools
{
    
    public static function make_costumer($id_usr){
        return $costumer;
    }
    
    public static function make_employee($function, $id_usr, $nif, $n_cedula){
        return $employee;
    }
    
    public static function make_file($filename){
        return $file;
    }
    
    public static function make_participant($id_usr, $name, $description){
        return $participant;
    }
    
    public static function make_process($id_cstumr, $id_employ, $id_fl, $id_prtcp, $name, $number, $preco, $type){
        return $process;
    }
    
    public static function make_shedule($id_cost, $id_employer, $date,  $description){
        return $shedule;
    }
    
    public static function make_user($name, $adress, $bi, $birth_date, $password, $sex){
        return $user;
    }
}