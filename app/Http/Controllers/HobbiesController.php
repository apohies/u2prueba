<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\hobbie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HobbiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobbies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $check=Auth::user()->name;
        
        $request->validate([
            'hobby' => ['required', 'string', 'max:255'],
          
                                                                ]);

            $newhobby=new Hobbie();
            $newhobby->user_id=Auth::user()->id;
            $newhobby->hobby=$request->hobby;
            $newhobby->save();
                                                 
            return back()->with('flash','El Hobby fue agregado exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $hobbies=$this->hobbies(Auth::user()->id);

        //dd($hobbies);

        return view('hobbies.show',compact('hobbies'));
    }

    public function showadmin($id)
    {
        $hobbies=$this->hobbies($id);

        //dd($consulta);

        return view('hobbies.show',compact('hobbies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hobbie $hobbie)
    {
       if(Auth::user()->id == $hobbie->user_id || Auth::user()->id == 1 ){
        return view('hobbies.edit',compact('hobbie'));
     }
     else return view('usuarios.permiso');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       // dd($request);
        $consulta=Hobbie::FindOrFail($request->id);
       // dd($consulta);
        $consulta->hobby=$request->hobby;
        $consulta->update();

        return redirect()->route('hobby.show')->with('flash','El Hobby actualizado exitosamente');

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


    public function hobbies($id)
    {
        $consulta=DB::table('hobbies')
                        ->select('hobbies.*','users.nick')
                        ->join('users','users.id','=','hobbies.user_id')
                        ->where('users.id',$id)
                        ->get();

                        return $consulta;
    }
}
