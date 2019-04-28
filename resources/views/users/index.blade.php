@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('Usuarios')])

@section('content')
  <div class="content" id="usurol">

    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">

          <div class="card">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">
                  group
                </i>
              </div>
              <h4 class="card-title">
                Users</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="#" class="btn btn-sm btn-rose">
                    Add user</a>
                </div>
              </div>
              <div class="table-responsive">
                <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">


                  <div class="row">
                    <div class="col-sm-12">
                      <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                        <div class="row">
                          <div class="col-sm-12">
                            <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                              <div class="row">
                                <div class="col-sm-12">



                                  <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable no-footer dtr-inline" style="width: 100%;">
                                    <thead class="text-primary">
                                    <tr role="row">

                                      <th >
                                        Photo
                                      </th>
                                      <th >
                                        Name
                                      </th>
                                      <th >
                                        Email
                                      </th>
                                      <th>
                                        Role
                                      </th>
                                      <th>
                                        Creation date
                                      </th>
                                      <th>
                                        Actions
                                      </th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr v-for="user in users" role="row" class="even">
                                      <td  class="sorting_1">
                                        <div class="avatar avatar-sm rounded-circle img-circle" style="width:100px; height:100px;overflow: hidden;">
                                          <img src="http://i.pravatar.cc/200" alt="" style="max-width: 100px;">
                                        </div>
                                      </td>
                                      <td >
                                        @{{ user.name }}
                                      </td>
                                      <td>
                                        admin@material.com
                                      </td>
                                      <td>
                                        Admin
                                      </td>
                                      <td>
                                        2019-04-23
                                      </td>
                                      <td class="td-actions text-right">
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    @include('users.edit')
  </div>
@endsection