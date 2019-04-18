@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')])

@section('content')
  <div class="content" id="usurol">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Users') }}</h4>
                <p class="card-category"> {{ __('Here you can manage users') }}</p>
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
                    <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Add user') }}</a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                         Nombre
                      </th>
                      <th>
                        Correo Electronico
                      </th>
                      <th>
                          Rol
                      </th>
                      <th>
                        Fecha de Creacion
                      </th>
                      <th class="text-right">
                        Accion
                      </th>
                    </thead>
                    <tbody>

                        <tr v-for="user in users">
                          <td>
                            @{{ user.name }}
                          </td>
                          <td>
                            @{{ user.email }}
                          </td>
                            <td v-for="role in roles" v-if="role.id===user.role_id">
                                @{{ role.name }}
                            </td>
                          <td>
                            @{{ user.created_at }}
                          </td>
                          <td class="td-actions text-right">


                                  <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                                    <i class="material-icons">edit</i>
                                    <div class="ripple-container"></div>
                                  </a>
                                  <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                      <i class="material-icons">close</i>
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
    </div>
  </div>
@endsection