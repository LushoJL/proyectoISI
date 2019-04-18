<!-- Modal -->


<form method="post" v-on:submit.prevent="updateUser(fillUser.id)">
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <h6 class="heading-small text-muted mb-4">{{ __('Editar Usuario') }}</h6>
          <div class="pl-lg-4">


            <div class="form-group">
              <label for="user">Nombre</label>
              <input type="text" name="namess" class="form-control form-control-alternative" placeholder="{{ __('Nombre') }}" v-model="fillUser.name">
              <span v-for="error in errors" class="text-danger">  @{{ error }}</span>
            </div>
            <div class="form-group">
              <label for="user">Correo Electronico</label>
              <input type="text" name="email" class="form-control form-control-alternative" placeholder="{{ __('Email') }}" v-model="fillUser.email">
              <span v-for="error in errors" class="text-danger">  @{{ error }}</span>
            </div>
            <div class="form-group">
              <label for="user">Rol</label>
              <select name="role_id"  v-model="fillUser.role_id"  class="form-control form-control-alternative">
                <option v-for="role in roles" v-bind:value="role.id">@{{ role.name }}</option>
              </select>
              <span v-for="error in errors" class="text-danger">  @{{ error }}</span>
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
