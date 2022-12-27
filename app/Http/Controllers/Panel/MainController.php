<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Contact;
use App\Models\Position;
use App\Models\Employee;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function addlawyer(Request $request)
    {

        $person = new Person;
        $person->full_name = $request->fname; 
        $person->bi = $request->bi;  
        $person->sex = $request->gender; 
        $person->birth_date = $request->birday;  
        $person->save();
        
        $position = new Position;
        $position->name = $request->position; 
        $position->ballot_num = $request->identification;  
        $position->nif = $request->nif; 
        $position->save();
        
        $contact = new Contact;
        $contact->name = $request->telephone; 
        $contact->id_person = $person->id;  
        $contact->save();
        
        $employee = new Employee;
        $employee->id_usr = "1"; 
        $employee->id_pstion = $position->id;  
        $employee->id_person = $person->id; 
        $employee->save();
        
        dd($request);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
