<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use App\Models\RolUser;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::simplePaginate(10);
        return view ('users.index', compact('usuarios'));
        return redirect('usuarios');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = User::create([
            // 'idroles' => $request->input('idroles'),
            // 'idroles' => $request->input('id'),
            'name' => $request->input('name'),
            // 'id' => $usuarios->asignRole('administrador'),
            'apellidos' => $request->input('apellidos'),
            'genero' => $request->input('genero'),
            'barrio' => $request->input('barrio'),
            'direccion' => $request->input('direccion'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),

        // $usuarios = User::create([
        // $usuarios->name = $request->input('nombre');
        // $usuarios->apellidos = $request->input('cedula');
        // $usuarios->genero = $request->input('telefono');
        // $usuarios->barrio = $request->input('email');
        // $usuarios->direccion = $request->input('email');
        // $usuarios->email = $request->input('email');
        // // $usuarios->password = Hash::make($request->input('cedula'));
        // $usuarios->assignRole($request->input('roles'));

        ]);  

        // $usuarios->asignRole('administrador');
        return redirect('usuarios')->with('crear', 'EL USUARIO HA SIDO REGISTRADO CORRECTAMENTE');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = User::find($id);
        return view ('users.show', compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios = User::find($id);
        return view('users.edit', compact('usuarios'));
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
        $usuarios = User::find($id)->update($request->all());
        return redirect('usuarios')->with('actualizar', 'SE HA ACTUALIZADO EL USUARIO CORRECTAMENTE');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = User::find($id)->delete();
        return redirect('usuarios')->with('eliminar', 'SE HA ELMINADO EL USUARIO CORRECTAMENTE');
    }
}
