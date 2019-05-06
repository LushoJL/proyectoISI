

new Vue({
    el:'#usurol',
    created: function () {
        this.getUsers();
        this.getRoles();
        this.getUserRole();
    },
    data: {
        users:[],
        pagination:{
            'total'         :0,
            'current_page'  :0,
            'per_page'      :0,
            'last_page'     :0,
            'from'          :0,
            'to'            :0
        },
        fillUser: {
            'id': '',
            'name': '',
            'email': '',
            'role_id': ''
        },

        //roles
        roles:[],
        newRole:{
            'name': '',
            'slug': '',
            'description': '',
            permissions:[]
        },
        errors: '',
        offset:3
    },
    computed:{
        isActived: function () {
            return this.pagination.current_page;
        } ,
        pagesNumber: function () {
            if (!this.pagination.to){
                return[];
            }
            var from = this.pagination.current_page - this.offset; //TODO OFSSET
            if (from<1){
                from =1;
            }
            var to=from +(this.offset*2);//TODO

            if (to >=this.pagination.last_page){
                to=this.pagination.last_page;
            }
            var pagesArray=[];
            while(from<=to){
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },
    methods: {
        getUsers: function (page) {
            var urlUsers = 'user?page='+page;
            axios.get(urlUsers).then(response => {
                this.users=response.data.users.data,
                    this.pagination=response.data.pagination
            });
        },

        editUser:function(user){
            this.fillUser.id=user.id;
            this.fillUser.name=user.name;
            this.fillUser.email=user.email;
            this.fillUser.role_id=user.role_id;
            $('#edit').modal('show');
        },
        updateUser: function(id){
            var url = 'user/'+id;
            axios.put(url, this.fillUser).then(response =>{
                this.getUsers();
                this.fillUser= {
                    'id': '',
                    'name': '',
                    'email': '',
                    'role_id': '',
                };
                this.errors = [];
                $('#edit').modal('hide');
                toastr.success('Usuario actualizada con exito ');

            }).catch(error=>{

                this.errors = error.response.data.errors;

            });
        },


        //roles
        getRoles: function () {
            var urlRoles = 'role';
            axios.get(urlRoles).then(response => {
                this.roles=response.data
            });
        },

        storeRole: function() {
            var url = 'role';
            axios.post(url, {
                'name': this.newRole.name.toUpperCase(),
                'slug': this.newRole.slug.toUpperCase(),
                'description': this.newRole.description,
                'permissions': this.newRole.permissions
            }).then(response => {
                this.getRoles();
                this.newRole = '';
                this.errors = [];
                $('#create').modal('hide');
                toastr.success('Nuevo Rol creada con éxito');
            }).catch(error => {
                this.errors = 'Corrija para poder crear con éxito'
            });
        },
        deleteRole: function (role) {
                var url ='role/'+ role.id;
                axios.delete(url).then(response => {
                    this.getRoles();
                    md.showNotification('top','left','El rol se elimino Correctamente','danger')
                   // toastr.success('Rol eliminado Correctamente');
                });
        },
        getUserRole: function () {
            var url = 'roldelusuarioenvujsmmm';
            axios.get(url).then(response => {
                this.users=response.data
            });
        },
    changePage: function (page) {
        this.pagination.current_page=page;
        this.getUsers(page)
    }
    },
});