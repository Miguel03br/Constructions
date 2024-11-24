<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    


    public function index()
    {
        $Users = users::all();

        return view('users', ['users' => $Users]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');

        $data =$request->all();

        users::findOrFail($request->id)->create($data);

        $novoUser = $this->users->where('id', $id)->create($request->except(['_token', '_method']));

        @if($novoUser)

            return redirect('/cUserController.store')->with('message', 'Funcionário adicionado com sucesso');

        @endif

        return redirect('/UserController.store')->with('message', 'EEEEEEEEEEEEEEERRRRRRROOOOOOOOORRRRRR');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Users = new users;

        $Users->id = $request->id;
        $Users->nome = $request->nome;  
        $Users->idade = $request->idade;
        $Users->email = $request->email;
        $Users->senha = $request->senha;

        $Users->save();


        $userCriado = $this->users->create([
            'nome' => $request->input('nome'),
            'idade' => $request->input('idade'),
            'email' => $request->input('email'),
            'senha' => $request->input('senha'),
        ]);

        @if($userCriado)

            return redirect('/UserController.store')->with('message', 'Funcionário criado com sucesso');

        @endif

        return redirect('/UserController.store')->with('message', 'EEEEEEEEEEEEEEERRRRRRROOOOOOOOORRRRRR'); 

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
        $Users = users::findOrFail($id);

        return view('update', ['update' => $Users]);        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data =$request->all();

        users::findOrFail($request->id)->update($data);

        $atualizarUser = $this->users->where('id', $id)->update($request->except(['_token', '_method']));

        @if($atualizarConstrucao)

            return redirect('/UserController.store')->with('message', 'Funcionário atualizado com sucesso');

        @endif

        return redirect('/UserController.store')->with('message', 'EEEEEEEEEEEEEEERRRRRRROOOOOOOOORRRRRR');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        users::findOrFail($id)->delete();

        $this->users->where('id', $id)->delete();

        return redirect('/UserController.store')->with('message', 'Funcionário excluído com sucesso');
    }
}
