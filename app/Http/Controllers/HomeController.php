<?php

namespace curso\Http\Controllers;

use Illuminate\Http\Request;
use curso\User;
use curso\Curso;
use curso\Inscritos;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $curso = Curso::all();
        $usuario =  User::find(Auth::user()->id);
        $inscricoes = Inscritos::all();
        return view('home')->with(compact('usuario','curso','inscricoes'));
    }

    public function inscricao(Request $request)
    {
        Inscritos::create([
            'user_id' => Auth::user()->id,
            'curso_id' => $request->curso_id,
            'situacao' => 'pendente',
        ]);

        return redirect('/home');
    }

    public function c_inscricao(Request $request)
    {
       $inscricao =  Inscritos::find($request->id);
       $inscricao->situacao = "confirmada";
       $inscricao ->save();

        return redirect('/home');
    }
}
