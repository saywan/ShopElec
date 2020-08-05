<template>


</template>

<script>
    export default {

        data(){
            return {

                carts:[],
                total: 0
            }
        },
        created() {
            this.ViewCart();
            alert();
        },
        methods:{
            ViewCart(){
                if(localStorage.getItem('carts')){
                    this.carts=JSON.parse(localStorage.getItem('carts'));
                    this.total=this.carts.reduce((total,item)=>{
                        return total + item.amount * item.price;
                    },0);
                }
            }
        },
        mounted() {


            console.log('Component mounted.')
        }
    }
</script>
