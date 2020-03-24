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
        $request->validate([
            "name"=> 'required|max:255',
            "lifePoints" => 'required|numeric|min:1|max:9999',
            "role"=> 'required|string|max:255',
            "attack"=> 'required|numeric',
            "defense" => 'required|numeric',
        ]);


        $skill = new Skill;
        $skill->fill($data);
      
        
        $load = $skill->save();
       
        if ($load){
            return redirect()->route("skills.index");
           
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
