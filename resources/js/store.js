import Vue from 'vue'
import Vuex from 'vuex'
// import axios from 'axios'
// import global from './mixins/global';

Vue.use(Vuex)

export default new Vuex.Store({
   
    state: {
      cart: {},
      cart_subtotal:0,
      cart_items_length:0,
      distance_cost:{},
      city_towns:[],
      sizes:[],
      colors:[],
      brands:[],
      products: {},
      categories: {},
      sub_categories: {},
    },

    actions: {
    

    },

    getters: {
       
    },
    mutations: {
       
      
    },
 
})












