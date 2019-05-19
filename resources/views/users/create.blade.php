<!-- Modal -->

<form method="post" v-on:submit.prevent="storeUser()">
    <div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         data-backdrop="static" data-keyboard="false">

        <div class="modal-dialog modal-xx" role="document">


            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>{{ __('CREAR NUEVO USUARIO') }}</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label for="user">{{ __('Nombre') }}</label>
                                <input type="text" name="name" class="form-control2" v-model="newUser.name" placeholder="{{ __('Jorge') }}" value="{{ old('name') }}" required="true" aria-required="true">
                                @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                                <label for="user">{{ __('Apellidos') }}</label>
                                <input class="form-control2{{ $errors->has('last_name') ? ' is-invalid' : '' }}" v-model="newUser.last_name" name="last_name" type="text" placeholder="{{ __('Perez') }}" value="{{ old('last_name') }}" required="true" aria-required="true"/>
                                @if ($errors->has('last_name'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('last_name') }}</span>
                                @endif

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                                <label for="user">{{ __('C. de identidad') }}</label>
                                <input class="form-control2{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" type="text" v-model="newUser.ci" placeholder="{{ __('12345678') }}" value="{{ old('ci') }}" required="true" aria-required="true"/>
                                @if ($errors->has('ci'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('ci') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row">

                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('birthdate') ? ' has-danger' : '' }}">
                                <label for="user">{{ __('Fecha de nacimiento') }}</label>
                                <input class="form-control2{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" v-model="newUser.birthdate" name="birthdate" type="date" value="{{ old('birthdate') }}" required="true" aria-required="true"/>
                                @if ($errors->has('birthdate'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('birthdate') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                                <label for="user">{{ __('Pais de Nacimiento') }}</label>
                                <input class="form-control2{{ $errors->has('country') ? ' is-invalid' : '' }}" v-model="newUser.country" name="country" type="text" placeholder="{{ __('BOLIVIA') }}" value="{{ old('country') }}" required="true" aria-required="true"/>
                                @if ($errors->has('country'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('country') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                                <label for="user">{{ __('Genero') }}</label>

                                <input class="{{ $errors->has('gender') ? ' is-invalid' : '' }}" v-model="newUser.gender" name="gender" type="radio" placeholder="{{ __('ejemple@ejemplo.com') }}" value="MASCULINO" required="true"  aria-required="true"/>Masculino
                                <input class="{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" v-model="newUser.gender" type="radio" placeholder="{{ __('ejemple@ejemplo.com') }}" value="FEMENINO" required="true" aria-required="true"/>Femenino
                                @if ($errors->has('gender'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('nationality') ? ' has-danger' : '' }}">
                                <label for="user">{{ __('Nacionalidad') }}</label>
                                <input class="form-control2{{ $errors->has('nationality') ? ' is-invalid' : '' }}" v-model="newUser.nationality" name="nationality" type="text" placeholder="{{ __('Boliviana') }}" value="{{ old('nationality') }}" required="true" aria-required="true"/>
                                @if ($errors->has('nationality'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('nationality') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('address') ? ' is-invalid' : '' }}">
                                <label for="user">{{ __('Direccion') }}</label>
                                <input class="form-control2{{ $errors->has('address') ? ' is-invalid' : '' }}" v-model="newUser.address" name="address" type="text" placeholder="{{ __('av. siempre vivas c. ayacucho n. 2024') }}" value="{{ old('address') }}" required="true" aria-required="true"/>
                                @if ($errors->has('address'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                <label for="user">{{ __('Telefono') }}</label>
                                <input class="form-control2{{ $errors->has('phone') ? ' is-invalid' : '' }}" v-model="newUser.phone" name="phone" type="text" placeholder="{{ __('1234567') }}" value="{{ old('phone') }}" required="true" aria-required="true"/>
                                @if ($errors->has('phone'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                <label for="user">{{ __('Estado civil') }}</label>
                                <input class="form-control2{{ $errors->has('civil_status') ? ' is-invalid' : '' }}" v-model="newUser.civil_status" name="civil_status" type="text" placeholder="{{ __('soltero') }}" value="{{ old('civil_status') }}" required="true" aria-required="true"/>
                                @if ($errors->has('civil_status'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('civil_status') }}</span>
                                @endif
                            </div>
                        </div>




                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="user">{{ __('Rol') }}</label>
                                <select name="role_id" id="" class="form-control"  v-model="newUser.role_id" required="true" aria-required="true">
                                    @foreach($roles as $role)
                                        <option class="form-control2"  value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                </select>

                            </div>
                        </div>

                    </div>






                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                        <div class="col-sm-2">
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <input class="form-control2{{ $errors->has('email') ? ' is-invalid' : '' }}" v-model="newUser.email" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required />
                                @if ($errors->has('email'))
                                    <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <label class="col-sm-2 col-form-label" for="input-password">{{ __(' Password') }}</label>
                        <div class="col-sm-2">
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <input class="form-control2{{ $errors->has('password') ? ' is-invalid' : '' }}" v-model="newUser.password" type="password" name="password" id="input-password" placeholder="{{ __('Password') }}" value="" required />
                                @if ($errors->has('password'))
                                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <input class="form-control2" name="password_confirmation" v-model="newUser.password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm Password') }}" value="" required />
                            </div>
                        </div>
                    </div>

                    <span v-for="error in errors" class="text-danger">@{{ error }}</span>


                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                    <button type="submit" class="btn btn-primary">{{ __('GUARDAR') }}</button>
                </div>
                <pre>
                    @{{ $data.newUser }}
                </pre>
            </div>
        </div>
    </div>




</form>





















