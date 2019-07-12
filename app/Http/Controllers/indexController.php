<?php

namespace curso\Http\Controllers;

use Illuminate\Http\Request;
use curso\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class indexController extends Controller
{
    public function registrar(Request $request)
    {
        $messages = [
            'password.min' => 'No campo senha é preciso ter 8 digitos.',
            'confirmed' => 'Erro na confirmação de senha, verifique se digitou a mesma senha'
            
        ];

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], $messages);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'telefone' => $request['telefone'],
            'profissao' => $request['profissao'],
            'endereco' => $request['endereco'],
            'bairro' => $request['bairro'],
            'cidade' => $request['cidade'],
            'tipo' => 'participante',
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/login')
        ->withInput(['cad_sucesso' => 'Cadastro realizado com sucesso realize seu login!']);
    }
}
