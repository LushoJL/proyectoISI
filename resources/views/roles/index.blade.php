@extends('layouts.app', ['activePage' => 'roles', 'titlePage' => __('roles')])

@section('content')
    <div class="content" id="usurol">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">{{ __('Lista de Roles') }}</h4>
                            <p class="card-category"> {{ __('Aquí puedes gestionar usuarios.') }}</p>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <span>{{ session('status') }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <button type="button" class="btn btn-success btn-link"  data-toggle="modal" data-target="#create">
                                        Agregar nuevo rol
                                        <div class="ripple-container"></div>
                                    </button>

                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        id
                                    </th>
                                    <th>
                                       Nombre
                                    </th>

                                    <th class="text-center" colspan="3">
                                        Acciones
                                    </th>

                                    </thead>
                                    <tbody>

                                    <tr v-for="role in roles">
                                        <td>
                                            @{{ role.id }}
                                        </td>
                                        <td>
                                            @{{ role.name }}
                                        </td>

                                        <td class="td-actions text-right">
                                            <a rel="tooltip" class="btn btn-info btn-link" href="#">
                                                <i class="material-icons">remove_red_eye</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </td>
                                        <td class="td-actions text-right">


                                            <a class="btn btn-success btn-link" href="#" >
                                                <i class="material-icons">edit</i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </td>
                                        <td class="td-actions text-right">

                                            <button type="button" class="btn btn-danger btn-link" data-original-title="">
                                                <i class="material-icons">delete</i>
                                                <div class="ripple-container"></div>
                                            </button>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @include('roles.create')

    </div>
@endsection