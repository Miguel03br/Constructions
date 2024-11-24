<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    


    public function index()
    {
        $Avisos = avisos::all();

        return view('avisos', ['avisos' => $Avisos]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');

        $data =$request->all();

        users::findOrFail($request->id)->create($data);

        $novoAviso = $this->avisos->where('id', $id)->create($request->except(['_token', '_method']));

        @if($novoAviso)

            return redirect('/AvisoController.store')->with('message', 'Funcionário adicionado com sucesso');

        @endif

        return redirect('/AvisoController.store')->with('message', 'EEEEEEEEEEEEEEERRRRRRROOOOOOOOORRRRRR');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Avisos = new avisos;

        $Avisos->id = $request->id;
        $Avisos->aviso = $request->aviso;  
        $Avisos->data = $request->data;
        
        $Avisos->save();


        $avisoCriado = $this->avisos->create([
            'aviso' => $request->input('aviso'),
            'data' => $request->input('data'),
        ]);

        @if($avisoCriado)

            return redirect('/AvisoController.store')->with('message', 'Aviso enviado com sucesso');

        @endif

        return redirect('/AvisoController.store')->with('message', 'EEEEEEEEEEEEEEERRRRRRROOOOOOOOORRRRRR'); 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Avisos = avisos::findOrFail($id);

        return view('update', ['update' => $Avisos]);        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =$request->all();

        users::findOrFail($request->id)->update($data);

        $atualizarAviso = $this->avisos->where('id', $id)->update($request->except(['_token', '_method']));

        @if($atualizarAviso)

            return redirect('/AvisoController.store')->with('message', 'Aviso atualizado com sucesso');

        @endif

        return redirect('/AvisoController.store')->with('message', 'EEEEEEEEEEEEEEERRRRRRROOOOOOOOORRRRRR');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        avisos::findOrFail($id)->delete();

        $this->avisos->where('id', $id)->delete();

        return redirect('/AvisoController.store')->with('message', 'Aviso excluído com sucesso');
    }
}
