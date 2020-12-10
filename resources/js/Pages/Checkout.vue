<template>
    <div>
        <app-layout>
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
                                            <select class="form-control">
                                                <option value=""
                                                    >Select City or Town...</option
                                                >
                                                <option value="AX"
                                                    >Aland Islands</option
                                                >
                                                <option value="AF"
                                                    >Afghanistan</option
                                                >
                                                <option value="AL"
                                                    >Albania</option
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
                                        />
                                    </div>
                                    
                                    <div class="form-group">
                                        <input
                                            class="form-control"
                                            required
                                            type="text"
                                            name="city"
                                            placeholder="Id \Passport no *"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <input
                                            class="form-control"
                                            required
                                            type="text"
                                            name="phone"
                                            placeholder="Phone *"
                                        />
                                    </div>
                                    <div class="form-group">
                                        <input
                                            class="form-control"
                                            required
                                            type="text"
                                            name="email"
                                            placeholder="Email address *"
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
                                                            >x {{item.quantity}}</span ><br>
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
                                                    <td>$12.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Total</th>
                                                    <td
                                                        class="product-subtotal"
                                                    >
                                                        $349.00
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
                                                    value="option3"
                                                    checked=""
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleRadios3"
                                                    >Ecocash</label
                                                >
                                                <p
                                                    data-method="option3"
                                                    class="payment-text"
                                                >
                                                        <input type="text" class="form-control form-control-sm" >
                                                        <small id="emailHelp" class="form-text text-muted">Mobile</small>
                                                </p>
                                            </div>
                                            <div class="custome-radio">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="payment_option"
                                                    id="exampleRadios4"
                                                    value="option4"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleRadios4"
                                                    >One Money</label
                                                >
                                                <p
                                                    data-method="option4"
                                                    class="payment-text"
                                                >
                                                   <input type="text" class="form-control form-control-sm">
                                                    <small id="emailHelp" class="form-text text-muted">Mobile</small>
                                                </p>
                                            </div>
                                            <div class="custome-radio">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="payment_option"
                                                    id="exampleRadios5"
                                                    value="option5"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="exampleRadios5"
                                                    >Paynow</label
                                                >
                                                <p
                                                    data-method="option5"
                                                    class="payment-text"
                                                >
                                                    Pay via paynow; you can pay
                                                    with your credit card if you
                                                    don't have a paynow account.
                                                </p>
                                            </div>

                                            <div class="custome-radio">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="payment_option"
                                                    id="exampleRadios6"
                                                    value="option5"
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
                                        </div>
                                    </div>
                                    <a
                                        href="#"
                                        class="btn btn-fill-out btn-block"
                                        >Place Order</a
                                    >
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
        </app-layout>
    </div>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import BreadCrumb from "@/Components/BreadCrumb";
// import axios from 'axios'
// import global from '@/Mixins/global.js'
export default {
    components: {
        AppLayout,
        BreadCrumb
    },

    methods: {
        getSubTotal(properties) {
            var total = 0;
            properties.forEach(property => {
                total = total + property.quantity * property.price;
            });
            return total;
        }
    }
};
</script>
