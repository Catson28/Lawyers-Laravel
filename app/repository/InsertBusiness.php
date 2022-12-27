<?php

namespace App\repository;
use App\Models\Participant;
use App\Models\Employee; //
use App\Models\Contact;
use App\Models\File;
use App\Models\Person;
use App\Models\Position;
use App\Models\PersPartcp;
use App\Models\Schedule;
use App\Models\Time;
use App\Models\Type; // 
use App\Models\Owner;
use App\Models\Customer;
use App\Models\Statu;
use App\Models\Process;
use App\Models\StatuProcesses;
use App\Models\ProcessWorker;
use App\Models\Doc;


class InsertBusiness
{
    public static function make_customer($id_ownr, $id_prsn_prtcp){
        $customer = new Customer;
        $customer->id_ownr = $id_ownr;
        $customer->id_prsn_prtcp = $id_prsn_prtcp;
        $customer->save();
        return $customer;
    }
    
    public static function make_process($id_typ, $id_ownr){
        $process = new Process;
        $process->id_typ = $id_typ;
        $process->id_ownr = $id_ownr;
        $process->save();
        return $process;
    }
    
    public static function make_process_worker($id_employ, $id_prcss){
        $process_worker = new ProcessWorker;
        $process_worker->id_employ = $id_employ;
        $process_worker->id_prcss = $id_prcss;
        $process_worker->save();
        return $process_worker;
    }
    
    public static function make_persn_partcp($id_peop, $id_partcp){
        $persn_partcp = new PersPartcp;
        $persn_partcp->id_peop = $id_peop;
        $persn_partcp->id_partcp = $id_partcp;
        $persn_partcp->save();
        return $persn_partcp;
    }

    public static function make_doc($id_fil, $id_prcss){
        $doc = new Doc;
        $doc->id_fil = $id_fil;
        $doc->id_prcss = $id_prcss;
        $doc->save();
        return $doc;
    }
    
    public static function make_participant($name, $description){
        $participant = new Participant;
        $participant->name = $name;
        $participant->description = $description;
        $participant->save();
        return $participant;
    }
    
    public static function make_owner($name, $description, $id_prsn_prtcp){
        $owner = new Owner;
        $owner->name = $name;
        $owner->description = $description;
        $owner->id_prsn_prtcp = $id_prsn_prtcp;
        $owner->save();
        return $owner;
    }
    
    public static function make_employee($id_usr, $nif, $id_person, $id_psition){
        $employee = new Employee;
        $employee->id_usr = $id_usr;
        $employee->nif = $nif;
        $employee->id_person = $id_person;
        $employee->id_psition = $id_psition;
        $employee->save();
        return $employee;
    }
    
    public static function make_contact($name, $id_person){
        $contact = new Contact;
        $contact->name = $name;
        $contact->id_person = $id_person;
        $contact->save();
        return $contact;
    }
    
    public static function make_file($filename, $mime, $original_filename){
        $file = new File;
        $file->filename = $filename;
        $file->mime = $mime;
        $file->original_filename = $original_filename;
        $file->save();
        return $file;
    }
    
    public static function make_person($full_name, $bi, $sex, $birth_date){
        $person = new Person;
        $person->full_name = $full_name;
        $person->bi = $bi;
        $person->sex = $sex;
        $person->birth_date = $birth_date;
        $person->save();
        return $person;
    }
    
    public static function make_position($name, $ballot_num){
        $position = Position::where('name',$name)->first();
        if ($position=="") {
            $position = new Position;
            $position->name = $name;
            $position->ballot_num = $ballot_num;
            $position->save();
        }
        return $position;
    }
    
    public static function make_schedule($time, $id_prcss){
        $schedule = new Schedule;
        $schedule->time = $time;
        $schedule->id_prcss = $id_prcss;
        $schedule->save();
        return $schedule;
    }
    
    public static function make_Time($time){
        $time = new Time;
        $time->time = $time;
        $time->save();
        return $time;
    }
    
    public static function make_Type($name, $description){
        $type = new Type;
        $type->name = $name;
        $type->description = $description;
        $type->save();
        return $type;
    }
    
    public static function make_statu($name){
        $statu = Statu::where('name',$name)->first();
        if ($statu=="") {
            $statu = new Statu;
            $statu->name = $name;
            $statu->save();
        }
        return $statu;
    }
    
    public static function make_statuProcesses($data, $id_prcss, $id_stat){
        $statuprocesses = new StatuProcesses;
        $statuprocesses->data = $data;
        $statuprocesses->id_prcss = $id_prcss;
        $statuprocesses->id_stat = $id_stat;
        $statuprocesses->save();
        return $statuprocesses;
    }
}