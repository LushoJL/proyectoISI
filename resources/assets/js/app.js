new Vue({
    el:'#usurol',
    created: function () {
        this.getUsers();
        this.getRoles();
    },
    data: {
        users:[],
        roles:[],
    },
    methods: {
        getUsers: function () {
            var urlUsers = 'user';
            axios.get(urlUsers).then(response => {
                this.users=response.data
            });
        },
        getRoles: function () {
            var urlRoles = 'role';
            axios.get(urlRoles).then(response => {
                this.roles=response.data
            });
        },
    },
});