<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use App\Models\Models\ModelApply;
use App\Models\Models\ModelVagas;
use App\Models\Models\ModelCandidato;
class ApplyController extends Controller
{
    private $objApply;
    private $objVagas;
    private $objCandidato;


    public function __construct(){
        $this->objApply = new ModelApply();
        $this->objVagas = new ModelVagas();
        $this->objCandidato = new ModelCandidato();

    }
    public function index()
    {


        $vagasAtivas = ModelVagas::where('status', 'A')->get();
        $app= $this->objApply->all();
        $users=$this->objCandidato->all();
        return view('showApply',compact('users','app','vagasAtivas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CandidatoRequest $request)
    {
        $selectedUserId = $request->selected_user_id; // ID ou nome do candidato selecionado
  
        $apply = $this->objApply->create([
            'vaga' => $request->nome_vaga,
            'empresa' => $request->nome_empresa,
            'candidato'=>$request->selected_user_nome,
            'id_candidato' => $selectedUserId,
        ]);
    
        if ($apply) {
            return view('indexApply',compact('apply'));
        }
    }
    
    

  
}
