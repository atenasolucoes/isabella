@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if(Auth::user()->tipo == 'admin')
                <div class="card-header">Lista de Inscritos</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>
                        <table class="table">
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Curso</th>
                                <th>Situação de inscricao</th>
                                <th>Pagamento</th>
                            </tr>
                            @foreach($inscricoes as $inscrito)
                            <tr>
                                <td>{{$inscrito->usuario->name}}</td>
                                <td>{{$inscrito->usuario->email}}</td>
                                <td>{{$inscrito->usuario->telefone}}</td>
                                <td>{{$inscrito->curso->nome}}</td>
                                <td>{{$inscrito->situacao}}</td>
                                <td>
                                    @if($inscrito->situacao == 'pendente')
                                    <button class="btn btn-success" data-toggle="modal" data-target="#inscrito{{$inscrito->id}}">Confirmar Pagamento</button>
                                    @elseif($inscrito->situacao == 'confirmada')
                                    Pagamento Realizado
                                    @endif

                                </td>
                            </tr>
                            <div class="modal fade" id="inscrito{{$inscrito->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Confirmação de Pagamento</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="{{route('c_inscricao')}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$inscrito->id}}">
                                                <h3>Deseja confirmar o pagamento de {{$inscrito->usuario->name}}?</h3>
                                                <br>
                                                <button class="btn btn-block btn-success">Sim! Confirmar</button>
                                            </form>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </table>
                    </div>
                </div>
                @else
                <div class="card-header">Minhas Inscrições</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div>
                        @if(count($usuario->inscricao) == 0)
                        <p>Você não está escrito em nenhum curso!</p>
                        <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myModal">Inscrever-se</button>
                        @else
                        <p>Informamos que quando o pagamento for efetuado, entrar em contato para que o mesmo seja validado.</p>
                        <table class="table">
                            <tr>
                                <th>
                                    Curso
                                </th>
                                <th>
                                    Situação de inscrição
                                </th>
                                <th>
                                    Link de pagamento
                                </th>
                            </tr>
                            @foreach($usuario->inscricao as $inscricao)
                            <tr>
                                <td>
                                    {{$inscricao->curso->nome}}
                                </td>
                                <td>
                                    {{$inscricao->situacao}}
                                </td>
                                <td>
                                    @if($inscricao->situacao == 'confirmada')
                                    Pagamento já foi efetuado
                                    @else
                                    <a target="_blank" class="btn btn-primary" href="{{$inscricao->curso->link_pagamento}}"> Realizar pagamento</a>
                                    @endif

                                </td>
                            </tr>

                            @endforeach
                        </table>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Inscrição</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{route('inscricao')}}" method="POST">
                        @csrf
                        <label for="">
                            Curso
                        </label>
                        <select name="curso_id" id="" class="form-control">
                            @foreach($curso as $curso_lista)
                            <option value="{{$curso_lista->id}}">{{$curso_lista->nome}}</option>
                            @endforeach
                        </select>
                        <br>
                        <button class="btn btn-block btn-success">Inscrever-se nesse curso</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection