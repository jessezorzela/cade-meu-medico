<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state = State::all()->sortBy('name')->toArray();
        return json_encode($state);
    }
    /**
     * Store a newly array resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeArray(Request $request)
    {
        $state = [];
     foreach ($request->all() as $key => $value){
        $state[$key] = State::create($value);
     }
     return json_encode($state);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //recebe todos os dados do formulario
        // $state = $request->validate([
        //     'code' => 'require|string|max:2',
        //     'name' => 'require|string|max:255',
        // ]);
        $state = $request->all();
        //cria um novo estado
        $state = State::create($state);
        //retorna o estado criado como json
        return json_encode($state);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $state = State::find($id);
        return json_encode($state);
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
          // //recebe todos os dados do formulario
          $validate = $request->validate([
            'code' => 'require|string|max:2',
            'name' => 'require|string|max:255',
          ]);
          $state = $state->find($id);
          //cria um novo estado
          $state->update($validate);
          //retorna o estado criado como json
          return json_encode($state);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = State::find($id);
        $state->delete();
        return json_encode(['message'=> 'Estado deletado com sucesso']);
    }
}
