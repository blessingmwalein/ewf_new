<template>
<header class="header_wrap">
	<div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                	<div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="lng_dropdown mr-2">
                            <select name="countries" class="custome_select">
                                <option value='en' data-image="assets/images/eng.png" data-title="English">English</option>
                                <option value='fn' data-image="assets/images/fn.png" data-title="France">France</option>
                                <option value='us' data-image="assets/images/us.png" data-title="United States">United States</option>
                            </select>
                        </div>
                        <div class="mr-3">
                            <select name="countries" class="custome_select">
                                <option value='USD' data-title="USD">USD</option>
                                <option value='EUR' data-title="EUR">EUR</option>
                                <option value='GBR' data-title="GBR">GBR</option>
                            </select>
                        </div>
                        <ul class="contact_detail text-center text-lg-left">
                            <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="text-center text-md-right">
                       	<ul class="header_list">
                            <li v-if="!$page.user"><inertia-link :href="route('login')"><i class="ti-user"></i><span>Login</span></inertia-link></li>
                            <li v-if="!$page.user"><inertia-link :href="route('register')"><i class="ti-user" ></i><span>Register</span></inertia-link></li>
                            <li v-if="$page.user"><inertia-link :href="route('profile.show')"><i class="ti-user"></i><span>{{$page.user.name}}</span></inertia-link></li>
                            <li v-if="$page.user"><inertia-link :href="route('profile.show')"><i class="icon-basket-loaded"></i><span>Orders</span></inertia-link></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header dark_skin">
    	<div class="custom-container">
        	<div class="nav_block">
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="/assets/images/logo_light.png" alt="logo" />
                    <img class="logo_dark" src="/assets/images/logo_dark.png" alt="logo" />
                </a>
                <div class="product_search_form rounded_input" v-if="!loading">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="custom_select">
                                    <select class="first_null">
                                        <option value="">All Category</option>
                                        <option value="" v-for="(category, index) in categories.data" :key="index">{{category.category_name}}</option>
                                    </select>
                                </div>
                            </div>
                            <input class="form-control" placeholder="Search Product..." required=""  type="text">
                            <button type="submit" class="search_btn2"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <ul  class="navbar-nav attr-nav align-items-center" v-if="$page.user">
                    <li><a href="#" class="nav-link"><i class="linearicons-user"></i></a></li>
                    <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span class="wishlist_count">0</span></a></li>
                    <li class="dropdown cart_dropdown" id="cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-bag2"></i><span class="cart_count">{{$store.state.cart_items_length}}</span><span class="amount"><span class="currency_symbol">$</span>{{$store.state.cart_subtotal}}.00</span></a>
                        <div v-if="$store.state.cart_items_length>0" class="cart_box cart_right dropdown-menu dropdown-menu-right" id="cart_dropdown_2">
                            <ul class="cart_list">
                                <li v-for="(item, index) in $store.state.cart.items" :key="index" >
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="/assets/images/cart_thamb1.jpg" alt="cart_thumb1">{{item.product.product_name}}</a>
                                    <span class="cart_quantity" v-for="(property, index) in item.properties" :key="index"> {{property.quantity}} {{property.combination_string}} x <span class="cart_amount"> <span class="price_symbole">$</span></span>{{property.price}}.00</span>
                                </li>
                               
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>{{$store.state.cart_subtotal}}.00</p>
                                <p class="cart_buttons"><inertia-link :href="route('shopping-cart')" class="btn btn-fill-line view-cart">View Cart</inertia-link><inertia-link :href="route('checkout')" class="btn btn-fill-out checkout">Checkout</inertia-link></p>
                            </div>
                        </div>
                        <div v-if="$store.state.cart_items_length<=0" class="cart_box cart_right dropdown-menu dropdown-menu-right" id="cart_dropdown_2">
                            
                            <div class="cart_list" style="text-align:center;padding-top:30px;margin-top:10px">
                              <i class="icon-basket-loaded" style="text-align:center;font-size:100px"></i>
                                <p style="text-align:center;">You Cart Is empty</p>
                            </div>
                            <div class="cart_footer" style="text-align:center;padding: 20px">
                               <button class="btn btn-fill-out btn-addtocart" style="text-align:center; width:100%" type="button">Shop Products</button>
                            </div>
                        </div>

                    </li>
                </ul>

                <ul  class="navbar-nav attr-nav align-items-center" v-else>
                    <li><a href="#" class="nav-link"><i class="linearicons-user"></i></a></li>
                    <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span class="wishlist_count">0</span></a></li>
                    <li class="dropdown cart_dropdown" id="cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-bag2"></i><span class="cart_count">00.00</span></a>
                       
                        <div  class="cart_box cart_right dropdown-menu dropdown-menu-right" id="cart_dropdown_2">
                            
                            <div class="cart_list" style="text-align:center;padding-top:30px;margin-top:10px">
                              <i class="ti-user" style="text-align:center;font-size:100px"></i>
                                <p style="text-align:center;">Please Login First</p>
                            </div>
                            <div class="cart_footer" style="text-align:center;padding: 20px">
                               <inertia-link class="btn btn-fill-out btn-addtocart" style="text-align:center; width:100%" :href="route('login')" type="button">Login</inertia-link>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase border-top">
    	<div class="custom-container">
            <div class="row align-items-center"> 
            	<div class="col-lg-3 col-md-4 col-sm-6 col-3">
                	<div class="categories_wrap">
                        <button type="button" data-toggle="collapse" data-target="#navCatContent" aria-expanded="false" class="categories_btn">
                            <i class="linearicons-menu"></i><span>All Categories </span>
                        </button>
                        <div id="navCatContent" class="navbar collapse">
                            <ul> 
                                <li class="dropdown dropdown-mega-menu" v-for="(category, index) in categories.data" :key="index">
                                    <a class="dropdown-item nav-link dropdown-toggler" href="#" data-toggle="dropdown"><i class="flaticon-tv"></i> <span>{{category.category_name}}</span></a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7" v-if="category.sub_categories">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6" v-for="(sub_category, index) in category.sub_categories" :key="index">
                                                        <ul> 
                                                            <li class="dropdown-header">{{sub_category.sub_category_name}}</li>
                                                            <li v-for="(product, index) in sub_category.products" :key="index"><a class="dropdown-item nav-link nav_item" href="#">{{product.prouduct_name}}</a></li>
                                                            
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="/assets/images/menu_banner7.jpg" alt="menu_banner">
                                                    <div class="banne_info">
                                                        <h6>20% Off</h6>
                                                        <h4>Computers</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="/assets/images/menu_banner8.jpg" alt="menu_banner">
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Top Laptops</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                            <div class="more_categories">More Categories</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                	<nav class="navbar navbar-expand-lg">
                    	<button class="navbar-toggler side_navbar_toggler" type="button" data-toggle="collapse" data-target="#navbarSidetoggle" aria-expanded="false"> 
                            <span class="ion-android-menu"></span>
                        </button>
                        <div class="pr_search_icon">
                            <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                        </div> 
                        <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
							<ul class="navbar-nav">
                               <li><a class="nav-link nav_item" href="">Home</a></li> 
                               
                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Products</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-3" v-for="(sub_category, index) in sub_categories.data" :key="index">
                                                <ul> 
                                                    <li class="dropdown-header">{{sub_category.sub_category_name}}</li>
                                                    <li v-for="(product, index) in sub_category.products" :key="index"><a class="dropdown-item nav-link nav_item" href="shop-list-left-sidebar.html">{{product.prouduct_name}}</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="d-lg-flex menu_banners">
                                            <div class="col-lg-6">
                                                <div class="header-banner">
                                                    <div class="sale-banner">
                                                        <a class="hover_effect1" href="#">
                                                            <img src="/assets/images/shop_banner_img7.jpg" alt="shop_banner_img7">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="header-banner">
                                                    <div class="sale-banner">
                                                        <a class="hover_effect1" href="#">
                                                            <img src="/assets/images/shop_banner_img8.jpg" alt="shop_banner_img8">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Shop</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-9">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-4">
                                                        <ul> 
                                                            <li class="dropdown-header">Shop Page Layout</li>
                                                            <li><inertia-link clinertia-linkss="dropdown-item nav-link nav_item" :href="route('shop')">shop Grid</inertia-link></li>
                                                            <li><inertia-link class="dropdown-item nav-link nav_item" :href="route('shop')">Shop By Category</inertia-link></li>
                                                            <li><a class="dropdown-item nav-link nav_item" :href="route('shop')">Shop By Brand</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-4">
                                                        <ul>
                                                            <li class="dropdown-header">Other Pages</li>
                                                            <li><inertia-link class="dropdown-item nav-link nav_item" :href="route('shopping-cart')">Cart</inertia-link></li>
                                                            <li><inertia-link class="dropdown-item nav-link nav_item" :href="route('checkout')">Checkout</inertia-link></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-3">
                                                        <div class="header_banner">
                                                            <div class="header_banner_content">
                                                                <div class="shop_banner">
                                                                    <div class="banner_img overlay_bg_40">
                                                                        <img src="/assets/images/shop_banner3.jpg" alt="shop_banner"/>
                                                                    </div> 
                                                                    <div class="shop_bn_content">
                                                                        <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                                                        <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                                                        <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li><inertia-link class="nav-link nav_item" :href="route('shopping-cart')">Cart</inertia-link></li> 
                                <li><inertia-link class="nav-link nav_item" href="contact.html">Contact Us</inertia-link></li> 
                            </ul>
                        </div>
                        <div class="contact_phone contact_support">
                            <i class="linearicons-phone-wave"></i>
                            <span>123-456-7689</span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
  </div>
</header>
</template>
<script>
import global from '@/Mixins/global'
export default {
  model:{
      event : "getCartEvent"
  },
  mixins:[global],
  data(){
    return {

    }
  },
  mounted(){
    this.getCategories()
    this.getSubCategories()
    this.getCart()
  }
}
</script>