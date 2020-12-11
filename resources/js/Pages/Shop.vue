<template>
    <div>
        <app-layout>
            <vue-topprogress ref="topProgress"></vue-topprogress>
            <bread-crumb :text="'Shopping Page'"></bread-crumb>

            <div class="main_content" v-if="!loading">
                <!-- START SECTION SHOP -->
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row align-items-center mb-4 pb-1">
                                    <div class="col-12">
                                        <div class="product_header">
                                            <div class="product_header_left">
                                                <div class="custom_select">
                                                    <select
                                                        class="form-control form-control-sm"
                                                    >
                                                        <option value="order"
                                                            >Default
                                                            sorting</option
                                                        >
                                                        <option
                                                            value="popularity"
                                                            >Sort by
                                                            popularity</option
                                                        >
                                                        <option value="date"
                                                            >Sort by
                                                            newness</option
                                                        >
                                                        <option value="price"
                                                            >Sort by price: low
                                                            to high</option
                                                        >
                                                        <option
                                                            value="price-desc"
                                                            >Sort by price: high
                                                            to low</option
                                                        >
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="product_header_right">
                                                <div class="products_view">
                                                    <a
                                                        href="#"
                                                         @click.prevent="gridView()"
                                                        class="shorting_icon grid active"
                                                        id="shorting_icon_grid"
                                                        ><i
                                                            class="ti-view-grid"
                                                        ></i
                                                    ></a>
                                                    <a
                                                        href="#"
                                                        class="shorting_icon list"
                                                        id="shorting_icon_list"
                                                        @click.prevent="listView()"
                                                        ><i
                                                            class="ti-layout-list-thumb"
                                                        ></i
                                                    ></a>
                                                </div>
                                                <div class="custom_select">
                                                    <select
                                                        class="form-control form-control-sm"
                                                    >
                                                        <option value=""
                                                            >Showing</option
                                                        >
                                                        <option value="9"
                                                            >9</option
                                                        >
                                                        <option value="12"
                                                            >12</option
                                                        >
                                                        <option value="18"
                                                            >18</option
                                                        >
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row shop_container" id="shop_container">
                                   <product  v-for="(product, index) in $store.state.products.data" :key="index" :product="product"></product>
                                  
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <ul
                                            class="pagination mt-3 justify-content-center pagination_style1"
                                        >
                                            <li class="page-item active">
                                                <a class="page-link" href="#"
                                                    >1</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >2</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    >3</a
                                                >
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"
                                                    ><i
                                                        class="linearicons-arrow-right"
                                                    ></i
                                                ></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0"
                            >
                                <div class="sidebar">
                                    <div class="widget">
                                        <h5 class="widget_title">Categories</h5>
                                        <ul class="widget_categories">
                                            <li @click.prevent="selectAll()" >
                                                <a href="#"
                                                    ><span
                                                        class="categories_name"
                                                        >All Products</span
                                                    ><span
                                                        class="categories_num" :class="{ wishlist_count : selected_category_slug == 'all'}"
                                                        >
                                                         {{products.data.length}}</span>
                                                  </a
                                                >
                                            </li>
                                            <li @click.prevent="changeCategory(category)"  v-for="(category , index) in sub_categories.data" :key="index">
                                                <a href="#"
                                                    ><span
                                                        class="categories_name"
                                                        >{{category.sub_category_name}}</span
                                                    ><span
                                                        class="categories_num" :class="{ wishlist_count : selected_category_slug == category.sub_category_slug}"
                                                        >
                                                         {{category.products.length}}
                                                        </span
                                                    ></a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget">
                                        <h5 class="widget_title">Filter</h5>
                                        <div class="filter_price">
                                            <div
                                                id="price_filter"
                                                data-min="0"
                                                data-max="500"
                                                data-min-value="50"
                                                data-max-value="300"
                                                data-price-sign="$"
                                            ></div>
                                            <div class="price_range">
                                                <span
                                                    >Price:
                                                    <span id="flt_price"></span
                                                ></span>
                                                <input
                                                    type="hidden"
                                                    id="price_first"
                                                />
                                                <input
                                                    type="hidden"
                                                     id="price_second"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h5 class="widget_title">Brands</h5>
                                        <ul class="list_brand">
                                            <li v-for="(brand, index) in $store.state.brands" :key="index">
                                                <div class="custome-checkbox">
                                                    <input
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        name="checkbox"
                                                        id="Arrivals"
                                                        value=""
                                                    />
                                                    <label
                                                        class="form-check-label"
                                                        for="Arrivals"
                                                        ><span
                                                            >{{brand.brand_name}}</span
                                                        ></label
                                                    >
                                                </div>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                    <div class="widget">
                                        <h5 class="widget_title">Sizes Available</h5>
                                        <div class="product_size_switch">
                                            <span style="margin-right:3px" v-for="(size, index) in $store.state.sizes" :key="index">{{size.variation_option_name}}</span>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h5 class="widget_title">Color</h5>
                                        <div class="colors">
                                            <div  v-for="(color, index) in $store.state.colors" :key="index" class="color" :style="{'background-color': color.variation_option_name}" :data-hex="color.variation_option_name"></div>  
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <div class="shop_banner">
                                            <div
                                                class="banner_img overlay_bg_20"
                                            >
                                                <img
                                                    src="/assets/images/sidebar_banner_img.jpg"
                                                    alt="sidebar_banner_img"
                                                />
                                            </div>
                                            <div
                                                class="shop_bn_content2 text_white"
                                            >
                                                <h5
                                                    class="text-uppercase shop_subtitle"
                                                >
                                                    New Collection
                                                </h5>
                                                <h3
                                                    class="text-uppercase shop_title"
                                                >
                                                    Sale 30% Off
                                                </h3>
                                                <a
                                                    href="#"
                                                    class="btn btn-white rounded-0 btn-sm text-uppercase"
                                                    >Shop Now</a
                                                >
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
import global from "@/Mixins/global"
import Product from "@/Components/Product"

export default {
    components: {
        AppLayout,
        BreadCrumb,
        Product
    },
    data(){
        return {
            selected_category_slug: "all"
        }
    },
    mixins :[global],
    mounted(){
        this.getSizes()
        this.getColors(),
        this.getBrands(),
        this.getProducts(),
        this.getCategories(),
        this.getSubCategories()
    },
    methods :{

        gridView(){
            document.getElementById('shorting_icon_grid').classList.add('active')
            document.getElementById('shorting_icon_list').classList.remove('active')
            document.getElementById('shop_container').classList.remove('list')
            document.getElementById('shop_container').classList.add('grid')
        },
        listView(){
            document.getElementById('shorting_icon_list').classList.add('active')
            document.getElementById('shorting_icon_grid').classList.remove('active')
            document.getElementById('shop_container').classList.remove('grid')
            document.getElementById('shop_container').classList.add('list')
        },
        changeCategory(category){
            this.$store.state.products.data = category.products
            this.selected_category_slug = category.sub_category_slug
        },
        selectAll(){
            this.loading = false
            this.$refs.topProgress.start()       
            this.getProducts()
            this.selected_category_slug = 'all'
            this.$refs.topProgress.done()
        }
     }
};
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

  cursor: pointer;
}

.active_cate{
position: relative;
	top: -3px;
	left: 0;
	font-size: 11px;
	background-color: #1E2D7D;
	border-radius: 50px;
	height: 16px;
	line-height: 16px;
	color: #fff;
	min-width: 16px;
	text-align: center;
	padding: 0 5px;
	display: inline-block;
	vertical-align: top;
	margin-left: -5px;
	margin-right: -5px;
}

.categories_num2{
    position: relative;
	top: -3px;
	left: 0;
	font-size: 11px;
	background-color: #fff;
	border-radius: 50px;
	height: 16px;
	line-height: 16px;
	color: #1E2D7D;
	min-width: 16px;
	text-align: center;
	padding: 0 5px;
	display: inline-block;
	vertical-align: top;
	margin-left: -5px;
	margin-right: -5px;
}
</style>