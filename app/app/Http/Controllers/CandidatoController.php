<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use App\Models\Models\ModelCandidato;
use App\http\Controllers\VagasController;


class CandidatoController extends Controller
{
    private $objCandidato;

    public function __construct(){
        $this->objCandidato = new ModelCandidato();
    }
    public function index()
    {
        // dd($this->objCandidato->find(1));
        $users=$this->objCandidato->all();
        return view("index",compact('users'));
    }

  
    public function create()
    {
        $cad= $this->objCandidato->all();
        return view("createCandidatos",compact('cad'));
    
    }

   
    public function store(CandidatoRequest $request)
    {
       $candidato= $this->objCandidato->create([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'sexo'=>$request->sexo,
            'telefone'=>$request->telefone,
            
        ]);
        if ($candidato) {
            return redirect('candidato/showCandidatos');
        }
    }

   
    public function show()
    {
        // $cad= $this->objCandidato->all();
        $cad=$this->objCandidato->paginate(5);
        return view("showCandidatos",compact('cad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users=$this->objCandidato->find($id);
            return view('editCandidatos',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CandidatoRequest $request,$id)
    {
         $this->objCandidato->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'sexo'=>$request->sexo,
            'telefone'=>$request->telefone,
            
        ]);
       
            return redirect('candidato/showCandidatos');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del= $this->objCandidato->destroy($id);
        return ($del)? "sim":"nao";
    }


}
