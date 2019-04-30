@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('user.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Registrar Usuario Nuevo') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Ir a listas') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" type="text" placeholder="{{ __('ejemple@ejemplo.com') }}" value="{{ old('last_name') }}" required="true" aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" type="text" placeholder="{{ __('12345678') }}" value="{{ old('ci') }}" required="true" aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" type="text" placeholder="{{ __('BOLIVIA') }}" value="{{ old('country') }}" required="true" aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" type="text" placeholder="{{ __('av. siempre vivas c. ayacucho n. 2024') }}" value="{{ old('address') }}" required="true" aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" type="text" placeholder="{{ __('1234567') }}" value="{{ old('phone') }}" required="true" aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('civil_status') ? ' is-invalid' : '' }}" name="civil_status" type="text" placeholder="{{ __('soltero') }}" value="{{ old('civil_status') }}" required="true" aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="nationality" type="text" placeholder="{{ __('Boliviana') }}" value="{{ old('nationality') }}" required="true" aria-required="true"/>
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
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" input type="password" name="password" id="input-password" placeholder="{{ __('Password') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm Password') }}" value="" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Add User') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection