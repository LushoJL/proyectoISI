@extends('layouts.app', ['activePage' => 'myperfil', 'titlePage' => __(Auth()->user()->name)])

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">perm_identity</i>
                        </div>
                        <h4 class="card-title">Mis Datos
                        </h4>
                    </div>
                    <div class="card-body">

                            <div class="row">
                                <label class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" id="input-name" type="text" value="{{Auth()->user()->name}}" disabled >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Correo electronico</label>
                                <div class="col-sm-7">
                                    <div class="form-group bmd-form-group is-filled">
                                        <input class="form-control" type="email" value="{{Auth()->user()->email}}" disabled>
                                    </div>
                                </div>
                            </div>



                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="http://i.pravatar.cc/200">
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                        <h4 class="card-title">Alec Thompson</h4>
                        <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                        </p>
                        <a href="#pablo" class="btn btn-rose btn-round">Follow</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection