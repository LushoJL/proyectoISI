<!-- Modal -->


<form method="post" v-on:submit.prevent="storeRole()">

      <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      data-backdrop="static" data-keyboard="false">

          <div class="modal-dialog modal-xl" role="document">


      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><b>{{ __('CREAR NUEVO ROL') }}</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body">

          <div class="pl-lg-4">


              <div class="row">

                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="user">Nombre del rol</label>
                          <input type="text" name="name" class="form-control form-control-alternative" v-model="newRole.name">
                      </div>
                      <br><br>
                      <div class="form-group">
                          <label for="user">Url amigable</label>
                          <input type="text" name="slug" class="form-control form-control-alternative" v-model="newRole.slug">
                      </div>
                  </div>

                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="user">Descripcion</label>
                          <textarea name="description" id="" cols="10" rows="6" class="form-control form-control-alternative" v-model="newRole.description"></textarea>

                      </div>
                  </div>
              </div>


            <br>
            <h6 class="heading-small text-muted mb-4">{{ __('PERMISOS DEL ROL') }}</h6>
            <div class="form-group">
              <ul class="list-unstyled">
                @foreach($permisos as $permiso)
                  <li>
                    <label>
                      <input type="checkbox" name="permissions[]" value="{{$permiso->id}}" v-model="newRole.permissions">&nbsp;&nbsp;<span class="text-dark" data-toggle="tooltip" data-placement="top" title="{{$permiso->description}}">{{$permiso->name}} </span>

                    </label>
                  </li>
                @endforeach
              </ul>

            </div>

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
          <button type="submit" class="btn btn-primary">{{ __('GUARDAR') }}</button>
        </div>
      </div>
    </div>
  </div>

</form>
