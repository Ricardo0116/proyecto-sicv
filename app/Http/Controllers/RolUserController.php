<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\RolUser;
use App\Models\User;



class RolUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roluser = RolUser::simplePaginate(10);
        return view ('updaterol.index', compact('roluser'));
        // return redirect('update-profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('updaterol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roluser = RolUser::create([
            'idrol' => $request->input('idrol'),
            'idroles' => $request->input('idroles'),
            'id' => $request->input('id'),

        
        ]);

        
        return redirect('update-profile');
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
    public function destroy($idrol)
    {
        $roluser = RolUser::find($idrol)->delete();
        return redirect ('update-profile')->with('eliminar', 'SE ELMINO EL ROL ASIGNADO');
    }
}
