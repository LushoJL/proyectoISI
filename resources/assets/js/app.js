$(document).ready(function() {
    $('#datatables').fadeIn(1100);
    $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search users",
        },
        "columnDefs": [
            { "orderable": false, "targets": 5 },
        ],
    });
});


new Vue({
    el:'#usurol',
    created: function () {
        this.getUsers();
        this.getRoles();
        this.getUserRole();
    },
    data: {
        users:[],
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
    },
    methods: {
        getUsers: function () {
            var urlUsers = 'user';
            axios.get(urlUsers).then(response => {
                this.users=response.data
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
                    toastr.success('Rol eliminado Correctamente');
                });
        },
        getUserRole: function () {
            var url = 'roldelusuarioenvujsmmm';
            axios.get(url).then(response => {
                this.users=response.data
            });
        },

    },
});