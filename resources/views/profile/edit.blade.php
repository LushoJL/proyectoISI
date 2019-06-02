@extends('layouts.app', ['activePage' => 'editarperfil', 'titlePage' => __('Editar Datos')])

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


              <form method="post" enctype="multipart/form-data" action="#" autocomplete="off" class="form-horizontal">

                @csrf
                @method('post')


                <div class="row">
                  <label class="col-sm-2 col-form-label">Profile photo</label>
                  <div class="col-sm-7">
                    <div class="fileinput fileinput-new text-center  card-avatar" data-provides="fileinput">
                      <div class="fileinput-new thumbnail img-circle">
                        <img src="{{asset('material')}}/img/edit.jpg" width="100px">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                      <div >
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
                        <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{Auth()->user()->name }}" required="true" aria-required="true"/>
                            @if ($errors->has('name'))
                              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Apellidos') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" type="text" placeholder="{{ __('ejemple@ejemplo.com') }}" value="{{ Auth()->user()->last_name }}" required="true" aria-required="true"/>
                            @if ($errors->has('last_name'))
                              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('last_name') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('C. de identidad') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('ci') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" type="text" placeholder="{{ __('12345678') }}" value="{{ Auth()->user()->ci  }}" required="true" aria-required="true"/>
                            @if ($errors->has('ci'))
                              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('ci') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Apellidos') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('birthdate') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" type="date" value="{{ old('birthdate') }}" required="true" aria-required="true"/>
                            @if ($errors->has('birthdate'))
                              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('birthdate') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Pais de Nacimiento') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" type="text" placeholder="{{ __('BOLIVIA') }}" value="{{ Auth()->user()->country   }}" required="true" aria-required="true"/>
                            @if ($errors->has('country'))
                              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('country') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Direccion') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" type="text" placeholder="{{ __('av. siempre vivas c. ayacucho n. 2024') }}" value="{{ Auth()->user()->address  }}" required="true" aria-required="true"/>
                            @if ($errors->has('address'))
                              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('address') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Telefono') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" type="text" placeholder="{{ __('1234567') }}" value="{{ Auth()->user()->phone  }}" required="true" aria-required="true"/>
                            @if ($errors->has('phone'))
                              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('phone') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Genero') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                            <input class="{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" type="radio" placeholder="{{ __('ejemple@ejemplo.com') }}" value="MASCULINO" required="true"  aria-required="true"/>Masculino
                            <input class="{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" type="radio" placeholder="{{ __('ejemple@ejemplo.com') }}" value="FEMENINO" required="true" aria-required="true"/>Femenino
                            @if ($errors->has('gender'))
                              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('gender') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Estado civil') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('civil_status') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('civil_status') ? ' is-invalid' : '' }}" name="civil_status" type="text" placeholder="{{ __('soltero') }}" value="{{ Auth()->user()->civil_status  }}" required="true" aria-required="true"/>
                            @if ($errors->has('civil_status'))
                              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('civil_status') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Nacionalidad') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('nationality') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="nationality" type="text" placeholder="{{ __('Boliviana') }}" value="{{ Auth()->user()->nationality  }}" required="true" aria-required="true"/>
                            @if ($errors->has('nationality'))
                              <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nationality') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                        <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ Auth()->user()->email   }}" required />
                            @if ($errors->has('email'))
                              <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                            @endif
                          </div>
                        </div>
                      </div>

                    <div class="card-footer ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary">{{ __('Actualizar Usuario') }}</button>
                    </div>

                </form>

            </div>
          </div>


        </div>

      </div>
    </div>
  </div>



      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Change password') }}</h4>
                <p class="card-category">{{ __('Password') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status_password'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status_password') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                      @if ($errors->has('old_password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
