import axios from 'axios'
import Vue from 'vue'

export default {
    data() {
        return {
            categories: {},
            sub_categories: {},
            products:{},
            loading:false,
            cart: {},
            cart_subtotal:0,
            cart_items_length:0,
            message : "",
            error: ""
        }
    },

    methods: {
        requestHeader() {
            return {
                headers: {
                    Accept: "application/json",
                    'Access-Control-Allow-Origin' :'*',
                    'Access-Control-Allow-Methods':'GET, PUT,POST,DELETE,PATCH,OPTIONS'
                }
            };
        },
        getProducts(){
            axios.get('/api/products')
            .then(response=>{
                this.$store.state.products = response.data;
                this.products = response.data
                this.loading = false
            })
            .catch(error=>{
                console.log(error.response)
            })
        },

        getCategories(){
            axios.get('/api/categories')
            .then(response=> {
                this.$store.state.categories = response.data
                this.categories = response.data
            }).catch(error=>{
                console.log(error.response.data)
            })
        },
        getSubCategories(){
            axios.get('/api/sub_categories')
            .then(response=> {
                this.$store.state.sub_categories = response.data
                this.sub_categories = response.data
            }).catch(error=>{
                console.log(error.response.data)
            })
        },
        minPrice(product){
            var min = product.product_combinations[0].price
            var max = 2
            product.product_combinations.forEach(element => {
                
                 if(element.price < min){
                     min = element.price
                 }
            });
           return min;
        },
        maxPrice(product){
            var max = product.product_combinations[0].price
            product.product_combinations.forEach(element => {

                
                 if(element.price > max){
                     max = element.price
                 }
            });
           return max;
        },

        getCart(){
            this.loading = true
            console.log('kutora cart')
            axios.get('/api/carts/' + this.$page.user.cart.id)
                .then(response => {
                    this.$store.state.cart = response.data.data
                    this.$store.state.cart_items_length = response.data.data.items.length
                    this.loading = false

                    console.log(this.cart)
                    this.$store.state.cart.items.forEach(item=>{
                         item.properties.forEach(property=>{
                             this.$store.state.cart_subtotal =this.$store.state.cart_subtotal + (property.quantity * property.price)
                         })
                    })
                }).catch(error=>{
                    this.loading = false
                    console.log(error.response)
                })
        },

        getDistanceCost(){

            axios.get('/api/distance_cost')
             .then(response=>{
                 this.$store.state.distance_cost = response.data
             }).catch(error=>{
                 console.log(error.response)
             })
        },

        getCities(){
            axios.get('/api/city_towns')
                .then(response=>{
                    this.$store.state.city_towns = response.data
                }).catch(error=>{
                    console.log(error.response)
                })
        },

        getSizes(){
            axios.get('/api/variation_option/sizes')
                .then(response=>{
                    this.$store.state.sizes = response.data.data
                }).catch(error=>{
                    console.log(error.response)
                })
        },
        getColors(){
            axios.get('/api/variation_option/colors')
                .then(response=>{
                    this.$store.state.colors = response.data.data
                }).catch(error=>{
                    console.log(error.response)
                })
        },
        getBrands(){
            axios.get('/api/brands')
                .then(response=>{
                    this.$store.state.brands = response.data.data
                }).catch(error=>{
                    cosole.log(error.response)
                })
        }
    }
}