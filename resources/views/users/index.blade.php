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
                            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                              <div class="row">
                                <div class="col-sm-12">



                                  <table class="table table-striped table-no-bordered table-hover dataTable no-footer dtr-inline" style="width: 100%;">
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
                                      <th colspan="3">
                                        Actions
                                      </th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr v-for="user in users" role="row" class="even">
                                      <td  class="sorting_1">
                                        <div class="avatar avatar-sm rounded-circle img-circle" style="width:100px; height:100px;overflow: hidden;">
                                          <img v-bind:src="'/storage/'+user.photo" alt="" style="max-width: 100px;">
                                        </div>
                                      </td>
                                      <td >
                                        @{{ user.name }}
                                      </td>
                                      <td>
                                        @{{ user.email }}
                                      </td>
                                      <td>
                                        @{{ user.name }}
                                      </td>
                                      <td>
                                        @{{ user.created_at }}
                                      </td>
                                      <td class="td-actions text-right">
                                        <a rel="tooltip" class="btn btn-info btn-link" v-bind:href="'user/'+user.id">
                                          <i class="material-icons">remove_red_eye</i>
                                          <div class="ripple-container"></div>
                                        </a>
                                      </td>
                                      <td class="td-actions text-right">


                                        <a class="btn btn-success btn-link" v-bind:href="'user/'+user.id+'/edit'">
                                          <i class="material-icons">edit</i>
                                          <div class="ripple-container"></div>
                                        </a>
                                      </td>
                                      <td class="td-actions text-right">

                                        <button type="button" class="btn btn-danger btn-link" v-on:click.prevent="deleteUser(user)">
                                          <i class="material-icons">delete</i>
                                          <div class="ripple-container"></div>
                                        </button>

                                      </td>
                                    </tr>
                                    </tbody>
                                  </table>
                                  <div class="align-bottom">
                                    <nav class="">
                                      <ul class="pagination">

                                        <li v-if="pagination.current_page > 1" class="page-item">
                                          <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page - 1)">
                                            <span>Atras</span>
                                          </a>
                                        </li>
                                        <li v-for="page in pagesNumber"  v-bind:class="[ page == isActived ? 'page-item active' : 'page-item'] ">
                                          <a class="page-link" href="#" @click.prevent="changePage(page)">
                                            @{{ page  }}
                                          </a>
                                        </li>
                                        <li v-if="pagination.current_page < pagination.last_page" class="page-item">
                                          <a class="page-link" href="#" @click.prevent="changePage(pagination.current_page + 1)">
                                            <span>Siguiente</span>
                                          </a>
                                        </li>
                                      </ul>
                                    </nav>
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

      </div>

    </div>

@endsection