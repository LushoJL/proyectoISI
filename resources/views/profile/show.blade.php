@extends('layouts.app', ['activePage' => 'myperfil', 'titlePage' => __(Auth()->user()->name)])

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class=" card-profile">
                        <div class="card-avatar " >
                            <img src="{{Storage::url(Auth()->user()->photo)}}" >
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-4">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" id="input-name" type="text" value="{{Auth()->user()->name}} {{Auth()->user()->last_name}}" disabled >
                                    </div>
                                </div>
                                <label class="col-sm-2 col-form-label">Genero</label>
                                <div class="col-sm-4">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" type="text" value="{{Auth()->user()->gender}}" disabled>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" type="date" value="{{Auth()->user()->birthdate}}" disabled>
                                </div>
                            </div>
                            <label class="col-sm-2 col-form-label">Pais de nacimiento</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" type="text" value="{{Auth()->user()->country}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Nacionalidad</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" type="text" value="{{Auth()->user()->nationality}}" disabled>
                                </div>
                            </div>
                            <label class="col-sm-2 col-form-label">stado civil</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" type="text" value="{{Auth()->user()->civil_status}}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Correo electronico</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" type="email" value="{{Auth()->user()->email}}" disabled>
                                </div>
                            </div>
                            <label class="col-sm-2 col-form-label">Nick</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" type="text" value="{{Auth()->user()->nick}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" type="email" value="{{Auth()->user()->phone}}" disabled>
                                </div>
                            </div>
                            <label class="col-sm-2 col-form-label">Fecha de Registro</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" type="text" value="{{date("d/m/Y",strtotime(Auth()->user()->created_at))}}" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection