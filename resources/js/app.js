/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('Checkout', require('./components/CheckoutComponent.vue').default);
Vue.component('Cart', require('./components/CartComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
   data:{
       imageurl : "",
       CateList:[],
       parent_id:"",
       NameCat:"",
       titlePro:"",
       PricePro:"",
       CountPro:"",
       prodCat:"",
       descriptionPro:"",
       Prodlist:[],
       fullnameorder:"",
       mobileorder:"",
       email_order:"",
       telephone:"",
       province:"",
       zipcode:"",
       addressorder:"",
       // totalprice:"",
       namereq:"",
       titleProreq:"",
       mobilereq:"",
       counterq:"",
       carts:[],
       cartadd :{
           id: '',
           title: '',
           price: '',
           amount: '',
           pimage:'',
       },
       badge: '0',
       quantity: '1',
       totalprice: '0',

   },
    created:function(){

       this.getvaluecayegory();
        this.getvalProduct();
        this.ViewCart();

    },
    methods:{

        ViewCart(){

            if(localStorage.getItem('carts'))
            {

                this.carts=JSON.parse(localStorage.getItem('carts'));
                this.badge=this.carts.length;
                this.totalprice=this.carts.reduce((total,item)=>{
                    return total + item.amount * item.price;
                },0);
            }
        },

        AddCart(pro){

            if(localStorage.getItem('carts'))
            {

                this.cartadd.id=pro.id ;
                this.cartadd.title=pro.title;
                this.cartadd.price=pro.price;
                this.cartadd.amount=this.quantity;
                this.cartadd.pimage=pro.pimage;

                if(this.carts.find(p => p.id === this.cartadd.id))
                {
                    this.quantity++;
                }else{
                    this.carts.push(this.cartadd);
                    alert(' با موفقیت به سبد خرید اضافه شد');
                }


                this.cartadd={};
                this.storeCart();
            }else{
                window.location.assign('/index');
            }

        },
        removeCart(pro)
        {

            this.carts.splice(pro,1);
            this.storeCart();
        },
        storeCart(){
            let parsed=JSON.stringify(this.carts);
            localStorage.setItem('carts',parsed);
            this.ViewCart();
        },



        getvalProduct:function(){

            axios.get('/listproduct').then(response=>{

                this.Prodlist=response.data;
                this.prodId=response.data.Id;
            });

        },


       getvaluecayegory:function(){

            axios.get('GetCategory').then(response=>{


                this.CateList=response.data;

                this.catid=response.data.id;
            });

        },

        AddCategory:function () {




            axios.post('AddCategory',{
                NameCat : this.NameCat,
                parent_id: this.parent_id

            }).then(response=>{
                console.log(response.data);
                swal("ثبت دسته جدید", "دسته جدید با موفقیت ثبت شد", "success");


                this.getvaluecayegory();


            },response=>{
                this.error=1;
                console.log("error");
            });

        },

        ImageAvatar(e) {


            let files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        createImage(file) {
            let reader = new FileReader();
            let vm = this;
            reader.onload = (e) => {
                vm.imageurl = e.target.result;
            };
            reader.readAsDataURL(file);
        },


        AddProduct:function(){

            var text=document.getElementById("editor").value;
          //  $("#editor").text();


            var img= $("#imagefile").val();




            axios.post('AddProduct',{
                title : this.titlePro,
                price : this.PricePro,
                count : this.CountPro,
                catid : this.prodCat,
                image : this.imageurl,
                disc: text
            }).then(response=>{


               // $("#PID").val(response.data.data.id);
               // $("#PID1").val(response.data.data.id);
               // swal("ثبت دسته جدید", "دسته جدید با موفقیت ثبت شد", "success");

                swal({
                    title: "محصول جدید",
                    text: "محصول جدید با موفقیت ثبت شد",
                    type: "success"
                });


                // this.categorys.push({'Id':response.data.id,'name':response.data.name})

                //alert('با موفقیت ذخیره شد');

            },response=>{
                this.error=1;
                console.log("error");
            });

        },
        AddOrderOffer:function(){


            axios.post('Addrequest',{
                fullname : this.namereq,
                mobile : this.mobilereq,
                titlePro : this.titleProreq,
                count : this.counterq
            }).then(response=>{

                alert('درخواست شما با موفقیت ثبت در اسرع وقت با شما تماس خواهیم گرفت');
                swal({
                    title: "درخواست",
                    text: "محصول جدید با موفقیت ثبت شد",
                    type: "success"
                });


                // this.categorys.push({'Id':response.data.id,'name':response.data.name})

                //alert('با موفقیت ذخیره شد');

            },response=>{
                this.error=1;
                console.log("error");
            });

        },

        AddOrder:function(){
            var text=$('#province').val();



            axios.post('Addorder',{
                fullname : this.fullnameorder,
                mobile : this.mobileorder,
                email : this.email_order,
                address : this.addressorder,
                province : this.province,
                zipcode : this.zipcode,
                telephone : this.telephone
            }).then(response=>{


                // $("#PID").val(response.data.data.id);
                // $("#PID1").val(response.data.data.id);
                // swal("ثبت دسته جدید", "دسته جدید با موفقیت ثبت شد", "success");

                swal({
                    title: "اطلاعات",
                    text: "مشخصات سفارش با موفقیت ثبت شد",
                    type: "success"
                });


                // this.categorys.push({'Id':response.data.id,'name':response.data.name})

                //alert('با موفقیت ذخیره شد');

            },response=>{
                this.error=1;
                console.log("error");
            });

        },
        deletepro:function(id){


            axios.post('DeleteProduct',{
                id :id
            }).then(response=>{


                swal({
                    title: "حذف",
                    text: "محصول مورد نظر با موفقیت حذف شد",
                    type: "warning"
                });

                setTimeout(function () {

                    window.location.href='ListProduct';
                },3000);

                // this.categorys.push({'Id':response.data.id,'name':response.data.name})

                //alert('با موفقیت ذخیره شد');

            },response=>{
                this.error=1;
                console.log("error");
            });

        },
        deletecat:function(id){





            axios.post('DeleteCat',{
                id :id
            }).then(response=>{


                swal({
                    title: "حذف",
                    text: "دسته مورد نظر با موفقیت حذف شد",
                    type: "warning"
                });

               setTimeout(function () {

                   window.location.href='listCategory';
               },3000);

                // this.categorys.push({'Id':response.data.id,'name':response.data.name})

                //alert('با موفقیت ذخیره شد');

            },response=>{
                this.error=1;
                console.log("error");
            });

        },
        Editcate:function (id) {
            axios.post('EditCat',{
                id :id,
                NameCat : this.NameCat,
                parent_id: this.parent_id
            }).then(response=>{


                swal({
                    title: "ویرایش",
                    text: "دسته مورد نظر با موفقیت ویرایش شد",
                    type: "success"
                });

                setTimeout(function () {

                    window.location.href='listCategory';
                },3000);

                // this.categorys.push({'Id':response.data.id,'name':response.data.name})

                //alert('با موفقیت ذخیره شد');

            },response=>{
                this.error=1;
                console.log("error");
            });

        },
        EditProduct:function (id) {


            alert();
            var text=document.getElementById("editor").value;
            var img= $("#imagefile").val();
            alert(this.titlePro);
            alert(this.PricePro);
            alert(this.CountPro);
            alert(this.prodCat);
            alert(img);
            alert(text);
            axios.post('EditProd',{
                id :id,
                title : this.titlePro,
                price : this.PricePro,
                count : this.CountPro,
                catid : this.prodCat,
                pimage : img,
                disc: this.descriptionPro
            }).then(response=>{


                console.log(response.data);
                swal({
                    title: "ویرایش",
                    text: "دسته مورد نظر با موفقیت ویرایش شد",
                    type: "success"
                });

                setTimeout(function () {

                    window.location.href='listCategory';
                },3000);

                // this.categorys.push({'Id':response.data.id,'name':response.data.name})

                //alert('با موفقیت ذخیره شد');

            },response=>{
                this.error=1;
                console.log("error");
            });

        }





    }
});
