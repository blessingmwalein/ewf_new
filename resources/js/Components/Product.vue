<template>
    <div class="col-md-4 col-6">
        <div class="product">
            <div class="product_img">
                <a href="shop-product-detail.html">
                    <img
                        src="/assets/images/product_img1.jpg"
                        alt="product_img1"
                    />
                </a>
                <div class="product_action_box">
                    <ul class="list_none pr_action_btn">
                        <li class="add-to-cart">
                            <div class="cart_btn">
                                    <button v-if="!loading" @click="addProductCart" class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i> Add to cart</button>
                             </div>
                             
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="product_info">
                <h6 class="product_title">
                    <a href="shop-product-detail.html">{{
                        product.product_name
                    }}</a>
                </h6>
                <div class="product_price">
                    <span class="price">${{ combination.price }}.00</span>
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
                    <p>
                        {{ product.description }}
                    </p>
                </div>
                <div class="pr_switch_wrap">
                    <div class="product_size_switch">
                        <span
                            style="margin-right:3px;height: 28px; text-align:center; font-size:10px;"
                            :class="{
                                selected:
                                    combination.unique_string_id ===
                                    product_combination.unique_string_id
                            }"
                            @click="getPrice(product_combination)"
                            v-for="(product_combination,
                            index) in product.product_combinations"
                            :key="index"
                            >{{ product_combination.combination_string }}</span
                        >
                    </div>
                </div>
                <div class="list_product_action_box">
                    <ul class="list_none pr_action_btn">
                        <li class="add-to-cart">
                            <a href="#"
                                ><i class="icon-basket-loaded"></i> Add To
                                Cart</a
                            >
                        </li>
                        <li>
                            <a href="shop-compare.html" class="popup-ajax"
                                ><i class="icon-shuffle"></i
                            ></a>
                        </li>
                        <li>
                            <a href="shop-quick-view.html" class="popup-ajax"
                                ><i class="icon-magnifier-add"></i
                            ></a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-heart"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import global from "@/Mixins/global";

export default {
    props: ["product"],
    mixins: [global],
    data() {
        return {
            combination: {},
            qty: 1,
            total_stock: 0
        };
    },
    mounted() {
        this.setPrice();
        this.setTotalStock();
    },
    methods: {
        setPrice() {
            this.combination = this.product.product_combinations[0];
        },
        getPrice(product_combination) {
            this.combination = product_combination;
        },
        setTotalStock() {
            var total = 0;
            this.product.product_combinations.forEach(combination => {
                total = total + combination.available_stock;
            });

            this.total_stock = total;
        },
        addProductCart() {
            this.loading = true;
            this.$refs.topProgress.start();

            axios
                .post("/api/cart/add_cart_items/" + this.$page.user.cart.id, {
                    product_id: this.product.id,
                    quantity: this.qty,
                    property: {
                        combination_string: this.combination.combination_string,
                        unique_string_id: this.combination.unique_string_id,
                        price: this.combination.price,
                        quantity: this.qty
                    }
                })
                .then(response => {
                    this.$emit("getCartEvent");
                    this.getCart();
                    this.loading = false;
                    this.$refs.topProgress.done();
                    $("html, body").animate(
                        { scrollTop: $("#cart_dropdown_2").position().top },
                        "slow"
                    );
                    document
                        .getElementById("cart_dropdown")
                        .classList.add("show");
                    document
                        .getElementById("cart_dropdown_2")
                        .classList.add("show");
                    document
                        .getElementById("cart_dropdown_2")
                        .setAttribute(
                            "style",
                            "position: absolute; transform: translate3d(-214px, 66px, 0px); top: 0px; left: 0px; will-change: transform;"
                        );

                    setTimeout(() => {
                        document
                            .getElementById("cart_dropdown")
                            .classList.remove("show");
                        document
                            .getElementById("cart_dropdown_2")
                            .classList.remove("show");
                        document
                            .getElementById("cart_dropdown_2")
                            .setAttribute(
                                "style",
                                "position: absolute; transform: translate3d(-214px, 66px, 0px); top: 0px; left: 0px; will-change: transform;"
                            );
                    }, 3000);

                    console.log(response.data);
                })
                .catch(error => {
                    this.loading = false;
                    // Use setTimeout for demo
                    setTimeout(() => {
                        this.$refs.topProgress.done();
                    }, 2000);
                    console.log(error.response.data);
                });
        }
    }
};
</script>
<style scoped>
.selected {
    border: 2px solid red;
}
.btn-fill-out:hover{
    color:white
}
.cart_btn:hover{
    color:white
}
</style>
