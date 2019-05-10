@extends('layouts.app', ['activePage' => 'myperfil', 'titlePage' => __(Auth()->user()->name)])

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-profile">
                        <div class="card-avatar " >
                            <img src="{{Storage::url(Auth()->user()->photo)}}" >
                        </div>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Nombre:</label>
                                <div class="col-sm-4">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="col-form-label text-dark" >
                                            {{Auth()->user()->name}} {{Auth()->user()->last_name}}
                                        </label>
                                    </div>
                                </div>
                                <label class="col-sm-2 col-form-label">Genero:</label>
                                <div class="col-sm-4">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="col-form-label text-dark" >
                                            {{Auth()->user()->gender}}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Fecha de Nacimiento:</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                    <label class="col-form-label text-dark" >
                                        {{Auth()->user()->birthdate}}
                                    </label>
                                </div>
                            </div>
                            <label class="col-sm-2 col-form-label">Pais de nacimiento:</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                     <label class="col-form-label text-dark" >
                                         {{Auth()->user()->country}}
                                        </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Nacionalidad:</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                     <label class="col-form-label text-dark" >
                                         {{Auth()->user()->nationality}}
                                        </label>
                                </div>
                            </div>
                            <label class="col-sm-2 col-form-label">stado civil:</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                     <label class="col-form-label text-dark" >
                                         {{Auth()->user()->civil_status}}
                                        </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">Correo electronico:</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                     <label class="col-form-label text-dark" >
                                         {{Auth()->user()->email}}
                                        </label>
                                </div>
                            </div>
                            <label class="col-sm-2 col-form-label">Nick:</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                     <label class="col-form-label text-dark" >
                                         {{Auth()->user()->nick}}
                                        </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Telefono:</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                     <label class="col-form-label text-dark" >
                                         {{Auth()->user()->phone}}
                                        </label>
                                </div>
                            </div>
                            <label class="col-sm-2 col-form-label">Fecha de Registro:</label>
                            <div class="col-sm-4">
                                <div class="form-group bmd-form-group is-filled">
                                     <label class="col-form-label text-dark" >
                                         {{date("d/m/Y",strtotime(Auth()->user()->created_at))}}
                                        </label>
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
