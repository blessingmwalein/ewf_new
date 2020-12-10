<template>
<div>
    <app-layout>
    <vue-topprogress ref="topProgress"></vue-topprogress>
    <bread-crumb :text="'Product Detail'"></bread-crumb>

    <div class="main_content">

        <!-- START SECTION SHOP -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                    <div class="product-image">
                            <div class="product_img_box">
                                <img id="product_img" src='/assets/images/product_img1.jpg' data-zoom-image="/assets/images/product_zoom_img1.jpg" alt="product_img1" />
                                <a href="#" class="product_img_zoom" title="Zoom">
                                    <span class="linearicons-zoom-in"></span>
                                </a>
                            </div>
                            <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                                <div class="item">
                                    <a href="#" class="product_gallery_item active" data-image="/assets/images/product_img1.jpg" data-zoom-image="/assets/images/product_zoom_img1.jpg">
                                        <img src="/assets/images/product_small_img1.jpg" alt="product_small_img1" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="/assets/images/product_img1-2.jpg" data-zoom-image="/assets/images/product_zoom_img2.jpg">
                                        <img src="/assets/images/product_small_img2.jpg" alt="product_small_img2" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="/assets/images/product_img1-3.jpg" data-zoom-image="/assets/images/product_zoom_img3.jpg">
                                        <img src="/assets/images/product_small_img3.jpg" alt="product_small_img3" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="/assets/images/product_img1-4.jpg" data-zoom-image="/assets/images/product_zoom_img4.jpg">
                                        <img src="/assets/images/product_small_img4.jpg" alt="product_small_img4" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="/assets/images/product_img1-2.jpg" data-zoom-image="/assets/images/product_zoom_img2.jpg">
                                        <img src="/assets/images/product_small_img2.jpg" alt="product_small_img2" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="/assets/images/product_img1-3.jpg" data-zoom-image="/assets/images/product_zoom_img3.jpg">
                                        <img src="/assets/images/product_small_img3.jpg" alt="product_small_img3" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description">
                                <h4 class="product_title"><a href="#">{{product.data.product_name}}</a></h4>
                                <div class="product_price">
                                    <span class="price">${{combination.price}}</span>
                                    <!-- <del>$55.25</del> -->
                                    <div class="on_sale">
                                        <span>35% Off</span>
                                    </div>
                                </div>
                                <div class="rating_wrap">
                                        <!-- <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div> -->
                                        <span class="rating_num">({{total_stock}}) units</span>
                                    </div>
                                <div class="pr_desc">
                                    <p>{{product.data.description}}</p>
                                </div>
                                <div class="product_sort_info">
                                    <ul>
                                        <!-- <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty</li> -->
                                        <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                                        <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                                    </ul>
                                </div>
                                <div  class="alert alert-dark" role="alert">
                                   {{combination.available_stock}} units available
                                </div>
                                <div class="pr_switch_wrap">
                                    <div class="product_size_switch">
                                        <span style="margin-right:3px" :class="{'selected' : combination.unique_string_id === product_combination.unique_string_id }" @click="getPrice(product_combination)" v-for="(product_combination, index) in product.data.product_combinations" :key="index">{{product_combination.combination_string}}</span>                                      
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="cart_extra">
                                <div class="cart-product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus" @click="qty--">
                                        <input type="number" min="1" name="quantity" v-model="qty"  title="Qty" class="qty">
                                        <input type="button" value="+" class="plus" @click="qty++">
                                    </div>
                                </div>
                                <div class="cart_btn">
                                    <button v-if="!loading" @click="addProductCart" class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i> Add to cart</button>
                                    <div v-if="loading" class="spinner-border text-primary" role="status">
                                     <span class="sr-only">Loading...</span>
                                    </div>
                                    <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                                    <!-- <a class="add_wishlist" href="#"><i class="icon-heart"></i></a> -->
                                </div>
                            </div>
                            <hr />
                            <ul class="product-meta">
                                <li>SKU: <a href="#">{{combination.sku}}</a></li>
                                <li>Category: <a href="#">{{product.data.category_name}}</a></li>
                                <li>Sub category: <a href="#">{{product.data.sub_category_name}}</a></li>
                            </ul>
                            <div class="product_share">
                                <span>Share:</span>
                                <ul class="social_icons">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="large_divider clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Additional info</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab">
                                <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                    <p>{{product.data.description}}</p>
                                </div>
                                <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Total Available Stock</td>
                                            <td>{{total_stock}}units</td>
                                        </tr>
                                        <tr>
                                            <td>Colors</td>
                                            <td><span v-for="(color, index) in product.data.colors" :key="index" >{{color.product_variation_option_name}},</span></td>
                                        </tr>
                                        <tr>
                                            <td>Sizes</td>
                                            <td><span v-for="(size, index) in product.data.sizes" :key="index" >{{size.product_variation_option_name}},</span></td>
                                        </tr>
                                    </table>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="small_divider"></div>
                        <div class="divider"></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="heading_s1">
                            <h3>Releted Products</h3>
                        </div>
                        <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="/assets/images/product_img1.jpg" alt="product_img1">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Blue Dress For Woman</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#87554B"></span>
                                                <span data-color="#333333"></span>
                                                <span data-color="#DA323F"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="/assets/images/product_img2.jpg" alt="product_img2">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Lether Gray Tuxedo</a></h6>
                                        <div class="product_price">
                                            <span class="price">$55.00</span>
                                            <del>$95.00</del>
                                            <div class="on_sale">
                                                <span>25% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:68%"></div>
                                            </div>
                                            <span class="rating_num">(15)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#847764"></span>
                                                <span data-color="#0393B5"></span>
                                                <span data-color="#DA323F"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product">
                                    <span class="pr_flash">New</span>
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="/assets/images/product_img3.jpg" alt="product_img3">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">woman full sliv dress</a></h6>
                                        <div class="product_price">
                                            <span class="price">$68.00</span>
                                            <del>$99.00</del>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:87%"></div>
                                            </div>
                                            <span class="rating_num">(25)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#333333"></span>
                                                <span data-color="#7C502F"></span>
                                                <span data-color="#2F366C"></span>
                                                <span data-color="#874A3D"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="/assets/images/product_img4.jpg" alt="product_img4">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">light blue Shirt</a></h6>
                                        <div class="product_price">
                                            <span class="price">$100.00</span>
                                            <del>$89.00</del>
                                            <div class="on_sale">
                                                <span>20% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:70%"></div>
                                            </div>
                                            <span class="rating_num">(22)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#333333"></span>
                                                <span data-color="#A92534"></span>
                                                <span data-color="#B9C2DF"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="/assets/images/product_img5.jpg" alt="product_img5">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">blue dress for woman</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#87554B"></span>
                                                <span data-color="#333333"></span>
                                                <span data-color="#5FB7D4"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                                <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- START SECTION SUBSCRIBE NEWSLETTER -->

    </div>
    <!-- END MAIN CONTENT -->
    </app-layout>
</div>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import BreadCrumb from '@/Components/BreadCrumb'
import axios from 'axios'
import global from '@/Mixins/global.js'

export default {
      props :['product'],
      mixins : [global],
      data(){
          return {
             combination:{},
             qty:1,
             total_stock:0,
          }
      },
      components: {
            AppLayout,
            BreadCrumb
         },  
     mounted(){
         this.setPrice()
         this.setTotalStock()
     },
     methods :{
         setPrice(){
             this.combination = this.product.data.product_combinations[0]
            },
         getPrice(product_combination){
            this.combination = product_combination
        },
        setTotalStock(){
            var total = 0
            this.product.data.product_combinations.forEach(combination => {
                total = total + combination.available_stock
            });

            this.total_stock = total
        },
        addProductCart(){
            this.loading = true
            this.$refs.topProgress.start()
 
            axios.post('/api/cart/add_cart_items/'+this.$page.user.cart.id, {
                product_id : this.product.data.id,
                quantity : this.qty,
                property : {
                    'combination_string' : this.combination.combination_string,
                    'unique_string_id' : this.combination.unique_string_id,
                    'price' : this.combination.price,
                    'quantity' : this.qty
                }
            }).then(response=>{
                this.$emit('getCartEvent')
                this.getCart()
                this.loading = false
                this.$refs.topProgress.done()
                $('html, body').animate({scrollTop:$('#cart_dropdown_2').position().top}, 'slow');
                document.getElementById("cart_dropdown").classList.add('show')
                document.getElementById("cart_dropdown_2").classList.add('show')
                document.getElementById("cart_dropdown_2").setAttribute("style","position: absolute; transform: translate3d(-214px, 66px, 0px); top: 0px; left: 0px; will-change: transform;");

                setTimeout(() => {
                    document.getElementById("cart_dropdown").classList.remove('show')
                    document.getElementById("cart_dropdown_2").classList.remove('show')
                    document.getElementById("cart_dropdown_2").setAttribute("style","position: absolute; transform: translate3d(-214px, 66px, 0px); top: 0px; left: 0px; will-change: transform;");
                }, 3000);
               
                console.log(response.data)
            }).catch(error=>{
                this.loading = false
                // Use setTimeout for demo
                        setTimeout(() => {
                        this.$refs.topProgress.done()
                        }, 2000)
                console.log(error.response.data)
            })
        }

     }

}
</script>
<style scoped>
.colors {
  display: flex;
}

.color {
  height: 20px;
  width: 20px;
  margin-left: 0.5em;
  border-radius: 18px;
  box-shadow: 0px 4px 10px rgba(0,0,0,0.3);
  border :2px solid red;
  cursor: pointer;
}

.selected{
    border:2px solid red;
}
</style>