new Vue({
    el:'#usurol',
    created: function () {
        this.getUsers();
        this.getRoles();
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
    },
});