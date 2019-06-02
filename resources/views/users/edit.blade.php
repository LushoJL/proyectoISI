@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">perm_identity</i>
              </div>
              <h4 class="card-title">Edit Profile
              </h4>
            </div>
            <div class="card-body">


              <form method="post" enctype="multipart/form-data" action="https://material-dashboard-pro-laravel.creative-tim.com/profile" autocomplete="off" class="form-horizontal">
                <input type="hidden" name="_token" value="y6LyeppLFdhXvcYxUVVzm7KGjndhYPBQjJsviukK">              <input type="hidden" name="_method" value="put">
                <div class="row">
                  <label class="col-sm-2 col-form-label">Profile photo</label>
                  <div class="col-sm-7">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                      <div class="fileinput-new thumbnail img-circle">
                        <img src="https://material-dashboard-pro-laravel.creative-tim.com/material/img/placeholder.jpg" alt="...">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                      <div>
                      <span class="btn btn-rose btn-file">
                        <span class="fileinput-new">Select image</span>
                        <span class="fileinput-exists">Change</span>
                        <input type="file" name="photo" id="input-picture">
                      </span>
                        <a href="#pablo" class="btn btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-7">
                    <div class="form-group bmd-form-group is-filled">
                      <input class="form-control" name="name"  type="text"  value="{{$users->name}}" required="true" aria-required="true">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">Correo electronico</label>
                  <div class="col-sm-7">
                    <div class="form-group bmd-form-group is-filled">
                      <input class="form-control" name="email" type="email" value="{{$users->email}}" required="">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>


        </div>

      </div>
    </div>
  </div>
@endsection
