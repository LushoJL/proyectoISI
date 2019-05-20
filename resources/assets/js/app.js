
new Vue({
    el:'#usurol',
    created() {

        this.getRoles();
        this.getusuarios();
        this.getUserRole();
        this.getBrands();
        this.getCategories();
        this.getProducts();
        this.getProviders();
    },
    data: {

        pagination:{
            'total'         :0,
            'current_page'  :0,
            'per_page'      :0,
            'last_page'     :0,
            'from'          :0,
            'to'            :0
        },
        newUser:{
            'name':'',
            'last_name':'',
            'ci':'',
            'birthdate':'',
            'address':'',
            'photo':'',
            'phone':'',
            'gender':'',
            'civil_status':'',
            'country':'',
            'nationality':'',
            'email':'',
            'password':'',
            'password_confirmation':'',
            'role_id':''
        },
        newBrand:{
            'name':'',
        },
        roles:[],
        fillUser: {
            'id': '',
            'name': '',
            'email': '',
            'role_id': ''
        },
        usuarios:[],
        //roles
        brands:[],
        categories:[],
        newCategory:{
            'name':'',
        },
        newRole:{
            'name': '',
            'slug': '',
            'description': '',
            permissions:[]
        },
        products:[],
        newProduct:{
            'barcode':'',
            'name':'',
            'description':'',
            'price':'',
           // 'photo':'',
            'brand_id':'',
            'category_id':'',
            'maximum':'',
            'minimum':'',

            'date_purchase':'',
            'expiration_date':'',
            'stock':'',
        },
        providers:[],
        newProvider:{
            'name':'',
            'phone':'',
            'mobile':'',
            'email':'',
            'observation':'',
            'address':'',
            'web_page':'',
        },
        errors: '',
        offset:3,
        userId: '',

    },
    computed:{
        isActived() {
            return this.pagination.current_page;
        } ,
        pagesNumber () {
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
        },
        validation() {
            if (/^([a-zA-Z])*$/.test(this.userId))
                return true;
            return false;

          //  return !/^([0-9])*$/.test(this.userId)
          //  return this.userId.length > 4 && this.userId.length < 13
        }
    },
    methods: {
        getProducts(){
            var url ='product';
            axios.get(url).then(response=>{
                this.products=response.data
            });
        },
        getProviders(){
          var url ='provider';
          axios.get(url).then(response=>{
              this.providers=response.data
          })
        },
        storeProvider(){
            var url ='provider';
            axios.post(url,{
                'name':this.newProvider.name,
                'phone':this.newProvider.phone,
                'mobile':this.newProvider.mobile,
                'email':this.newProvider.email,
                'observation':this.newProvider.observation,
                'address':this.newProvider.address,
                'web_page':this.newProvider.web_page
            }).then(response=>{
                this.getProviders();
                this.newProvider='';
                $('#createProvider').modal('hide');
                toastr.success('Nuevo Proveedor creado');
            }).catch(error=>{
                this.errors = error.response.data.errors;
                toastr.success('algo salio mal');
            })
        },
        storeProduct(){
            var url='product';
            axios.post(url,{
                'barcode':this.newProduct.barcode,
                'name':this.newProduct.name,
                'description':this.newProduct.description,
                'price':this.newProduct.price,
              //  'photo':this.newProduct.photo,
                'brand_id':this.newProduct.brand_id,
                'category_id':this.newProduct.category_id,
                'maximum':this.newProduct.maximum,
                'minimum':this.newProduct.minimum,

                'date_purchase':this.newProduct.date_purchase,
                'expiration_date':this.newProduct.expiration_date,
                'stock':this.newProduct.stock,
            }).then(reponse=>{
                this.getProducts();
                this.newProduct='';
                $('#createCategory').modal('hide');
                toastr.success('Nueva marca creada');
            }).catch(error=>{
                this.errors = error.response.data.errors;
                toastr.success('algo salio mal');
            })
        },
        storeBrand(){
            var url = 'brand';
            axios.post(url,{
                'name':this.newBrand.name,
            }).then(response =>{
                this.getBrands();
                this.newBrand='';
                this.errors=[];
                $('#createBrand').modal('hide');
                toastr.success('Nueva marca creada');
            }).catch(error=>{
                this.errors = error.response.data.errors;
                toastr.success('algo salio mal');

            })

        },
        storeCategory(){
            var url = 'category';
            axios.post(url,{
                'name':this.newCategory.name,
            }).then(response=>{
                this.getCategories();
                this.newCategory='';
                this.errors=[];
                $('#createCategory').modal('hide');
                toastr.success('Nueva categoria creada');
            }).catch(error=>{
                this.errors = error.response.data.errors;
                toastr.success('algo salio mal');
            })
        },
        getCategories(){
            var url='category';
            axios.get(url).then(response=>{
                this.categories=response.data
            });
        },
        getBrands() {
            var urlBrands = 'brand';
            axios.get(urlBrands).then(response => {
                this.brands=response.data
            });
        },
        storeUser (){
            var url ='register';
            axios.post(url, {
                'name':this.newUser.name,
                'last_name':this.newUser.last_name,
                'ci':this.newUser.ci,
                'birthdate':this.newUser.birthdate,
                'address':this.newUser.address,
                'photo':this.newUser.photo,
                'phone':this.newUser.phone,
                'gender':this.newUser.gender,
                'civil_status':this.newUser.civil_status,
                'country':this.newUser.country,
                'nationality':this.newUser.nationality,
                'email':this.newUser.email,
                'password':this.newUser.password,
                'password_confirmation':this.newUser.password_confirmation,
                'role_id':this.newUser.role_id
            }).then(response =>{
                this.getUsers();
                this.newUser='';
                this.errors=[];
                $('#createUser').modal('hide');
                toastr.success('Nuevo Usuario creada con éxito');
            }).catch(error=>{
                this.errors = error.response.data.errors;

            })
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
                Swal.fire(
                    'Creado!',
                    'Usuario se creo exitosamente.',
                    'success'
                )
            }).catch(error => {
                this.errors = error.response.data.errors;
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

        getusuarios() {
            var urlUsers = 'user';
            axios.get(urlUsers).then(response => {
                this.usuarios=response.data
            });
        },

        deleteRole(role) {
                var url ='role/'+ role.id;


            Swal.fire({
                title: '¿Estás seguro?',
                text: '¡No podrás revertir esto.!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, bórralo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    axios.delete(url).then(response => {
                        this.getRoles();
                        Swal.fire(
                            'Borrado!',
                            'El rol se borro exitosamente.',
                            'success'
                        )
                    });

                }
            })










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
