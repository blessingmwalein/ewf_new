<template>
    <div>
        <!-- <app-layout> -->
            <vue-topprogress ref="topProgress"></vue-topprogress>
            <bread-crumb :text="'Shop Checkout'"></bread-crumb>

            <div class="main_content">
                <!-- START SECTION SHOP -->
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="medium_divider"></div>
                                <div class="divider center_icon">
                                    <i class="linearicons-credit-card"></i>
                                </div>
                                <div class="medium_divider"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="heading_s1">
                                    <h4>Billing Details</h4>
                                </div>
                                <form method="post">
                                    
                                    
                                    <div class="form-group">
                                        <div class="custom_select">
                                            <select class="form-control" v-on:change="calcTransport()" v-model="city">
                                                <option  @click="calcTransport(city)" v-for="(city, index) in $store.state.city_towns" :key="index" :value="city"
                                                    >{{city.city_name}}</option
                                                > 
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="billing_address"
                                            required=""
                                            placeholder="Address *"
                                            v-model="address"
                                        />
                                    </div>
                                    
                                    <div class="form-group">
                                        <input
                                            class="form-control"
                                            required
                                            type="text"
                                            name="city"
                                            placeholder="Id \Passport no *"
                                            v-model="id_passport"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <input
                                            class="form-control"
                                            required
                                            type="text"
                                            name="phone"
                                            placeholder="Phone *"
                                            v-model="mobile"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <input
                                            class="form-control"
                                            required
                                            type="text"
                                            name="email"
                                            placeholder="Email address *"
                                            v-model="email"
                                        />
                                    </div>
                                  
                                   
                                    <div class="heading_s1">
                                        <h4>Additional information</h4>
                                    </div>
                                    <div class="form-group mb-0">
                                        <textarea
                                            rows="5"
                                            class="form-control"
                                            placeholder="Order notes"
                                            v-model="order_notes"
                                        ></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="order_review">
                                    <div class="heading_s1">
                                        <h4>Your Order</h4>
                                    </div>
                                    <div class="table-responsive order_table">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(item, index) in $store.state.cart.items" :key="index">
                                                    <td>
                                                        {{item.product.product_name}}
                                                        <span
                                                            class="product-qty"
                                                            >x {{item.qauntity}}</span ><br>
                                                    </td>
                                                    <td>${{getSubTotal(item.properties)}}.00</td>
                                                </tr>
                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>SubTotal</th>
                                                    <td
                                                        class="product-subtotal"
                                                    >
                                                        ${{$store.state.cart_subtotal}}.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Transport</th>
                                                    <td>${{transport_cost}}.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <td
                                                        class="product-subtotal"
                                                    >
                                                        ${{transport_cost + $store.state.cart_subtotal }}.00
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="payment_method">
                                        <div class="heading_s1">
                                            <h4>Payment</h4>
                                        </div>
                                        <div class="payment_option">
                                            <div class="custome-radio">
                                                <input
                                                    class="form-check-input"
                                                    required=""
                                                    type="radio"
                                                    name="payment_option"
                                                    id="exampleRadios3"
                                                    value="ecocash"
                                                    checked=""
                                                    v-model="method"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleRadios3"
                                                    >Ecocash</label
                                                >
                                            
                                            </div>
                                            <div class="custome-radio">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="payment_option"
                                                    id="exampleRadios4"
                                                    value="onemoney"
                                                    v-model="method"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleRadios4"
                                                    >One Money</label
                                                >
                                             
                                            </div>
                                            <div class="custome-radio">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="payment_option"
                                                    id="exampleRadios5"
                                                    value="paynow"
                                                    v-model="method"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleRadios5"
                                                    >Paynow</label
                                                >
                                                
                                            </div>

                                            <div class="custome-radio">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="payment_option"
                                                    id="exampleRadios6"
                                                    value="cash"
                                                    v-model="method"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleRadios6"
                                                    >Cash On Delivery</label
                                                >
                                                <p
                                                    data-method="option6"
                                                    class="payment-text"
                                                >
                                                    Pay upon delivery of goods.
                                                </p>
                                            </div>
                                            <div class="form-group" v-if="method=='ecocash' || method=='onemoney'">
                                                <input type="text" class="form-control form-control-sm" >
                                                 <small id="emailHelp" class="form-text text-muted">Mobile</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-if="message" class="alert alert-dark" role="alert">
                                       {{message}}
                                    </div>
                                    <div v-if="error" class="alert alert-dark" role="alert">
                                       {{error}}
                                    </div>
                                    <a  v-if="!loading"
                                        href="#"
                                        class="btn btn-fill-out btn-block"
                                        @click.prevent="checkout()"
                                        >Place Order</a
                                    >
                                      <div v-if="loading" class="spinner-border text-primary" style="text-align:center" role="status">
                                        <span class="sr-only">Loading...</span>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SECTION SHOP -->

                <!-- START SECTION SUBSCRIBE NEWSLETTER -->
                <div class="section bg_default small_pt small_pb">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="heading_s1 mb-md-0 heading_light">
                                    <h3>Subscribe Our Newsletter</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="newsletter_form">
                                    <form>
                                        <input
                                            type="text"
                                            required=""
                                            class="form-control rounded-0"
                                            placeholder="Enter Email Address"
                                        />
                                        <button
                                            type="submit"
                                            class="btn btn-dark rounded-0"
                                            name="submit"
                                            value="Submit"
                                        >
                                            Subscribe
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- START SECTION SUBSCRIBE NEWSLETTER -->
            </div>
        <!-- </app-layout> -->
    </div>
</template>

<script>
// import AppLayout from "@/Layouts/AppLayout";
import BreadCrumb from "@/Components/BreadCrumb";
// import axios from 'axios'
import global from '@/Mixins/global.js'
export default {
    data(){
        return{
            transport_cost: 0,
            mobile:"",
            method:"paynow",
            email:this.$page.user.email,
            order_notes: "",
            city:{},
            id_passport:"",
            address:"", 
            order: {}
        }
    },
    components: {
        // AppLayout,
        BreadCrumb
    },
    mounted(){
        this.getCities()
        this.getDistanceCost()
        this.getCart()
    },
    mixins:[global],
    methods: {
        getSubTotal(properties) {
            var total = 0;
            properties.forEach(property => {
                total = total + property.quantity * property.price;
            });
            return total;
        },
        calcTransport(){
            this.transport_cost = this.city.distance * this.$store.state.distance_cost.cost
            console.log('zvaita')
        },
        checkout(){
            this.loading = true
            this.$refs.topProgress.start()

            axios.post('/api/products/shopping_cart/checkout/'+ this.$page.user.cart.id, {
                amount : this.transport_cost + this.$store.state.cart_subtotal,
                order_notes : this.order_notes,
                method : (this.method === "ecocash" || this.method === "onemoney") ? "mobile" : "paynow",
                mobile : this.method,
                transport_cost: this.transport_cost,
                email : this.email,
                phone_number : this.mobile,
                id_passport : this.id_passport,
                address : this.address,
                user_id : this.$page.user.id,
                city_town : this.city.city_name
            })
            .then(response=>{
                this.loading = false
                this.$refs.topProgress.done()
                if(response.status === 201 ||  response.status === 200){
                    this.order = response.data.data
                    if(this.method === "paynow"){
                        setTimeout(()=>{
                            location.href = this.order.transaction.link
                        }, 2000)
                    }
                }else{
                  this.error = response.message
                }
                console.log(response.data)

            }).catch(error => {
                this.loading = false

                this.error = error.response.data.message
                console.log(error.response)
            })
        }
    }
};
</script>
