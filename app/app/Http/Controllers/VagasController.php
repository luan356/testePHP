<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use App\Models\Models\ModelVagas;

class VagasController extends Controller
{
    private $objVagas;

    public function __construct(){
        $this->objVagas = new ModelVagas();
    }
    public function index()
    {
        // dd($this->objVagas->find(1));

    }

    
    public function create()
    {
        $vag= $this->objVagas->all();
        return view("createVagas",compact('vag'));
    }


    public function store(CandidatoRequest $request)
    {
        $vag= $this->objVagas->create([
            'vaga'=>$request->vaga,
            'empresa'=>$request->empresa,
            'regime'=>$request->regime,
            'status'=>$request->status,
            
        ]);
        if ($vag) {
            return redirect('vagas/showVagas');
        }
    }


    public function show(string $id)
    {
        // $vag= $this->objVagas->all();
        $vag=$this->objVagas->paginate(10);
        return view("showVagas",compact('vag'));
    }

 
    public function edit(string $id)
    {
        $vag=$this->objVagas->find($id);
        return view('editVagas',compact('vag'));
    }

   
    public function update(CandidatoRequest $request, string $id)
    {
        $this->objVagas->where(['id'=>$id])->update([
            'vaga'=>$request->vaga,
            'empresa'=>$request->empresa,
            'regime'=>$request->regime,
            'status'=>$request->status,
            
        ]);      
            return redirect('vagas/showVagas');        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del= $this->objVagas->destroy($id);
        return ($del)? "sim":"nao";
    }
}
