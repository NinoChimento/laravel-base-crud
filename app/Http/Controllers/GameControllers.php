<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class GameControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public $control = [
        "name" => 'required|max:255',
        "lifePoints" => 'required|numeric|min:1|max:9999',
        "role" => 'required|string|max:255',
        "attack" => 'required|numeric',
        "defense" => 'required|numeric',
     ];

    public function index()
    {   
        $skills = Skill::all();
        return view("skillsIndex",compact("skills"));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("skillCreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // validazione dato 
        $request->validate($this->control);


        $skill = new Skill;
        $skill->fill($data);
      
        
        $load = $skill->save();
       
        if ($load){
            $skill = Skill::all()->last();
            return redirect()->route("skills.show",compact("skill"));
           
        } else {
          
            return redirect()->route("skills.store");
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        if(empty($skill)){
            abort("404 non c'e nessun id inserito");
        }
        else {
            return view("skillShow",compact("skill"));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        // if(empty($skill)){
        //     abort("404 non hai isnerito un id valido");
        // }
        
            return view("skillUptade",compact("skill"));
        
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
        $skill = Skill::find($id);
        $data = $request->all();
        //controllo dati
        $request->validate($this->control);
        //modifico i dati 
        $skill->update($data);
        return view("skillShow",compact("skill"));
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $response = $skill->delete();
        if($response){
            $skills = Skill::all();
            return view("skillsIndex",compact("skills"));
        }
        else {
            abort("404 eliminazione non riuscita");
        }
    }
}
