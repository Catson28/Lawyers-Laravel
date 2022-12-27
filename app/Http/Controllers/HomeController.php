<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\repository\Newer;
use App\repository\InsertBusiness;
use App\Models\Type; //
use App\Models\Position;
use App\Models\Person;
use App\Models\Statu;
use App\Models\Owner; //
use App\Models\Participant;
use App\Models\PersPartcp; //
use App\Models\Employee;
use App\Models\Process; //
use Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('panel.index');
    }

    public function schedule()
    {
        $employees = array();
        $participant = Participant::all();
        $persPartcp = PersPartcp::with('person')->get();
        $type = Type::all();
        $owner = Owner::with('prsn_prtcp.person', 'prsn_prtcp.participant')->get();
        $position = Position::where('name',"Advogado")->first();
        if ($position!="") {
            $employees = Employee::where('id_psition', $position->id)->with('person')->get();
        }
        
        return view('panel.schedule', ['types' => $type, 'participants' => $participant, 'owners' => $owner, 'persPartcps' => $persPartcp, 'employees' => $employees]);
    }

    public function sidebar()
    {
        $employees = array();
        $participant = Participant::all();
        $persPartcp = PersPartcp::with('person')->get();
        $type = Type::all();
        $owner = Owner::with('prsn_prtcp.person', 'prsn_prtcp.participant')->get();
        $position = Position::where('name',"Advogado")->first();
        if ($position!="") {
            $employees = Employee::where('id_psition', $position->id)->with('person')->get();
        }
        
        return view('panel.sidebar', ['types' => $type, 'participants' => $participant, 'owners' => $owner, 'persPartcps' => $persPartcp, 'employees' => $employees]);
    }

    public function ajaxpuro()
    {
        return response()->json(["message" => "Hello, world!"
           ]);
    }

    public function testando()
    {
        Newer::creatOnDb();
        return view('site.panel');
    }

    public function pajaxpuro(Request $request)
    {
        return response()->json(["message" => "$request->ailo"
           ]);
    }

    public function addAjaxType(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'namet' => 'required',
            'description' => 'required'
        ]);

        if ($validation->fails()){
            
            $errors = array('errors'=> $validation->getMessageBag()->toarray());
            return response()->json(array('errors'=> $validation->getMessageBag()->toarray()));

            
        } else {
            $type = InsertBusiness::make_Type($request->namet, $request->description);

            return response()->json([
                "status" => "success",
                "message" => "Esta a funcionar perfeitamente / ".$request->namet,
                "type" => $type
            ]);
        };
    }

    public function addAjaxLawyer(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'namel' => 'required',
            'bi' => 'required',
            'addresss' => 'required',
            'telefone' => 'required',
            'funcao' => 'required',
            'nif' => 'required',
            'cedula' => 'required',
            'genero' => 'required',
            'datanasc' => 'required'
        ]);

        if ($validation->fails()){
            $errors = array('errors'=> $validation->getMessageBag()->toarray());
            return response()->json(array('errors'=> $validation->getMessageBag()->toarray()));

        } else {
            $person = InsertBusiness::make_person($request->namel, $request->bi, $request->genero, $request->datanasc);
            $contact = InsertBusiness::make_contact($request->telefone, $person->id);
            $position = InsertBusiness::make_position("Advogado", $request->cedula);
            $employee = InsertBusiness::make_employee("1", $request->nif, $person->id, $position->id);
            $employ = Employee::with('person')->find($employee->id);

            return response()->json([
                "status" => "success",
                "message" => "Esta a funcionar perfeitamente / ".$employ->person->full_name,
                "employee" => $employ
            ]);            
        };

    }

    public function addAjaxCostumer(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'integrnt' => 'required',
            'name_case_costumer' => 'required',
            'description' => 'required'
        ]);

        if ($validation->fails()){
            $errors = array('errors'=> $validation->getMessageBag()->toarray());
            return response()->json(array('errors'=> $validation->getMessageBag()->toarray()));

            
        } else {
            $owner = InsertBusiness::make_owner($request->name_case_costumer, $request->description, $request->integrnt);

            // $owner = InsertBusiness::make_owner($request->name_case_costumer, $request->description, "1");
            return response()->json([
                "status" => "success",
                "message" => "Esta a funcionar perfeitamente / ",
                "owner" => $owner
            ]);
        };


    }

    public function addAjaxIntegrant(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'nameprt' => 'required',
            'bi' => 'required',
            'address' => 'required',
            'telefone' => 'required',
            'datanasc' => 'required',
            'genero' => 'required',
            'participntion' => 'required'
        ]);

        if ($validation->fails()){
            $errors = array('errors'=> $validation->getMessageBag()->toarray());
            return response()->json(array('errors'=> $validation->getMessageBag()->toarray()));  
        } else {
            $person = InsertBusiness::make_person($request->nameprt, $request->bi, $request->genero, $request->datanasc);
            $contact = InsertBusiness::make_contact($request->telefone, $person->id);
            $persn_partcp = InsertBusiness::make_persn_partcp($person->id, $request->participntion);

            return response()->json([
                "status" => "success",
                "message" => "Esta a funcionar perfeitamente / ",
                "person" => $person
            ]);
        };

    }


    public function addConsult(Request $request)
    {
        $data = date("Y-m-d");
        // dd($data);
        $process = InsertBusiness::make_process($request->typid, $request->ownerid);
        $schedule = InsertBusiness::make_schedule($request->schedul, $process->id);
        $process_worker = InsertBusiness::make_process_worker($request->emploid, $process->id);
        $statu = InsertBusiness::make_statu("Consulta");
        $statuprocess = InsertBusiness::make_statuProcesses($data, $process->id, $statu->id);

      return back();
    }

    public function addAjaxParticip(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'nameprt' => 'required',
            'descriptionp' => 'required',
        ]);

        if ($validation->fails()){
            $errors = array('errors'=> $validation->getMessageBag()->toarray());
            return response()->json(array('errors'=> $validation->getMessageBag()->toarray()));
        }
        else {
            $person = InsertBusiness::make_participant($request->nameprt, $request->descriptionp);
            return response()->json([
                "status" => "success",
                "message" => "Esta a funcionar perfeitamente / ",
                "person" => $person
            ]);
        };
    

    }


    public function addSeach(Request $request)
    {
        InsertBusiness::make_Type('1', '1');
    }


    public function listConsult()
    {
        $status = Statu::where('name',"Consulta")->with("process.employees.person", "process.type", "process.owner", "process.schedule", "process.statuProcesses")->first();
        // dd($status);
        // dd($status->process['0']->employees['0']->person);
        
        return view('panel.listConsult', ['status' => $status]);
    }


    public function listProcess()
    {
        $process = Process::with("employees.person", "type", "owner.prsn_prtcp.person", "schedule", "statuProcesses")->get();
        return view('panel.listProcess', ['processes' => $process]);
    }


    public function listEmployes()
    {
        $employee = employee::with("person")->get();
        return view('panel.listEmployes', ['employees' => $employee]);
    }


    public function addEmployee()
    {
        return view('panel.addEmployee');
    }
}
