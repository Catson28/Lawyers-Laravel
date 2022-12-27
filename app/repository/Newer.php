<?php

namespace App\repository;
use App\repository\InsertBusiness;

class Newer
{
    public static function creatOnDb(){

        InsertBusiness::make_person('1', '1', '1', '2022-06-15');
        InsertBusiness::make_contact('1', '1');
        InsertBusiness::make_position('1', '1', '1');
        InsertBusiness::make_employee('1', '1', '1');
        InsertBusiness::make_participant('1', '1');
        InsertBusiness::make_Type('1', '1');
        InsertBusiness::make_file('1', '1', '1');
        InsertBusiness::make_persn_partcp('1', '1');
        InsertBusiness::make_owner('1', '1', '1');
        InsertBusiness::make_customer('1', '1');
        InsertBusiness::make_process('1', '1');
        InsertBusiness::make_process_worker('1', '1');
        InsertBusiness::make_doc('1', '1');
        InsertBusiness::make_schedule('2022-06-05', '1');

        /*
        InsertBusiness::make_customer($name, $description);
        InsertBusiness::make_process($id_typ, $id_ownr);
        InsertBusiness::make_process_worker($id_employ, $id_prcss);
        InsertBusiness::make_persn_partcp($id_peop, $id_partcp);
        InsertBusiness::make_doc($id_fil, $id_prcss);
        InsertBusiness::make_participant($name, $description);
        InsertBusiness::make_owner($name, $description);
        InsertBusiness::make_employee($id_usr, $id_pstion, $id_person);
        InsertBusiness::make_contact($name, $id_person);
        InsertBusiness::make_file($filename, $mime, $original_filename);
        InsertBusiness::make_person($full_name, $bi, $sex, $birth_date);
        InsertBusiness::make_position($name, $ballot_num, $nif);
        InsertBusiness::make_schedule($id_time, $id_prcss);
        InsertBusiness::make_Time($time);
        InsertBusiness::make_Type($name, $description);        
        */
    }
}