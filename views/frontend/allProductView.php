       <div id="Content">
            <div class="content_wrapper clearfix">

                <!-- .sections_group -->
                <div class="sections_group">
                    <div class="section">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One full width row-->
                                <div class="column one woocommerce-content">

                                    <div class="shop-filters">
                                        <p class="woocommerce-result-count">
                                            Hiển thị 1–12 của 18 sản phẩm </p>
                                        <form class="woocommerce-ordering" method="get">
                                            <select name="orderby" class="orderby">
                                                <option value="menu_order" selected='selected'>Tất cả sản phẩm</option>
                                                <option value="popularity">Sort by popularity</option>
                                                <option value="rating">Sort by average rating</option>
                                                <option value="date">Sort by newness</option>
                                                <option value="price">Sort by price: low to high</option>
                                                <option value="price-desc">Sort by price: high to low</option>
                                            </select>
                                        </form>
                                    </div>

                                    <div class="products_wrapper isotope_wrapper">
                                        <ul class="products grid">
                                        <?php foreach ($allproduct as $rows):?>

                                            <li class="post-70 product type-product has-post-thumbnail isotope-item sale shipping-taxable purchasable product-type-simple product-cat-dresses product-cat-jeans product-cat-moccasins product-cat-sandals-shoes product-cat-shorts product-cat-sunglasses product-cat-trousers instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="index.php?controller=product&action=detail&id=<?php echo $rows->id; ?>">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="assets/upload/product/<?php echo $rows->img; ?>" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product5" /><img width="400" height="500" src="assets/upload/product/<?php echo $rows->img; ?>" class="hidden_photo scale-with-grid" alt="home_store_product5b" /> </div>
                                                    </a><span class="onsale"><i class="icon-star"></i></span> </div>
                                                <div class="desc">

                                                    <h4><a href=""><?php echo $rows->name; ?></a></h4>

                                                    <div class="star-rating" title="Rated 4.00 out of 5">
                                                        <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span> </div>
                                                    <span class="price"><del><span class="amount">&pound;15.00</span>
                                                    </del> <ins><span class="amount"><?php echo $rows->price; ?> VNĐ<!-- &pound;12.00 --></span></ins>
                                                    </span>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
<!--                                             <li class="post-37 product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-bags product-cat-belts-accessories-for-him product-cat-hats-caps product-cat-rucksacks product-cat-sunglasses-accessories-for-him instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="chi-tiet-san-pham.html">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product13-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product13" /> </div>
                                                    </a>
                                                </div>
                                                <div class="desc">

                                                    <h4><a href="chi-tiet-san-pham.html">Happy Ninja</a></h4>

                                                    <div class="star-rating" title="Rated 5.00 out of 5">
                                                        <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span> </div>
                                                    <span class="price"><span class="amount">&pound;18.00</span></span>
                                                </div>
                                            </li>

                                            <li class="post-53 product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-ballet-pumps product-cat-rucksacks product-cat-sandals product-cat-slippers product-cat-trousers instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="chi-tiet-san-pham.html">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product9-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product9" /><img width="400" height="500" src="images/home_store_product9b-400x500.jpg" class="hidden_photo scale-with-grid" alt="home_store_product9b" /> </div>
                                                    </a>
                                                </div>
                                                <div class="desc">

                                                    <h4><a href="chi-tiet-san-pham.html">Happy Ninja</a></h4>

                                                    <div class="star-rating" title="Rated 3.00 out of 5">
                                                        <span style="width:60%"><strong class="rating">3.00</strong> out of 5</span> </div>
                                                    <span class="price"><span class="amount">&pound;35.00</span></span>
                                                </div>
                                            </li>

                                            <li class="post-31 product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-business-shoes product-cat-moccasins product-cat-outdoor-shoes product-cat-sandals-shoes product-cat-slippers product-cat-trainers instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="chi-tiet-san-pham.html">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product15-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product15" /><img width="400" height="500" src="images/home_store_product15b-400x500.jpg" class="hidden_photo scale-with-grid" alt="home_store_product15b" /> </div>
                                                    </a>
                                                </div>
                                                <div class="desc">

                                                    <h4><a href="chi-tiet-san-pham.html">Ninja Silhouette</a></h4>

                                                    <div class="star-rating" title="Rated 5.00 out of 5">
                                                        <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span> </div>
                                                    <span class="price"><span class="amount">&pound;20.00</span></span>
                                                </div>
                                            </li>

                                            <li class="post-56 product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-ankle-boots product-cat-bags product-cat-hats-caps product-cat-hoodies product-cat-jackets-clothing-for-her-for-him product-cat-jeans product-cat-sandals product-cat-shorts instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="chi-tiet-san-pham.html">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product8-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product8" /><img width="400" height="500" src="images/home_store_product8b-400x500.jpg" class="hidden_photo scale-with-grid" alt="home_store_product8b" /> </div>
                                                    </a>
                                                </div>
                                                <div class="desc">

                                                    <h4><a href="chi-tiet-san-pham.html">Ninja Silhouette</a></h4>

                                                    <div class="star-rating" title="Rated 4.17 out of 5">
                                                        <span style="width:83.4%"><strong class="rating">4.17</strong> out of 5</span> </div>
                                                    <span class="price"><span class="amount">&pound;35.00</span></span>
                                                </div>
                                            </li>

                                            <li class="post-50 product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-bags product-cat-belts-accessories-for-him product-cat-business-shoes product-cat-hoodies product-cat-moccasins product-cat-rucksacks instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="product-6.html">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product10-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product10" /><img width="400" height="500" src="images/home_store_product10b-400x500.jpg" class="hidden_photo scale-with-grid" alt="home_store_product10b" /> </div>
                                                    </a>
                                                </div>
                                                <div class="desc">

                                                    <h4><a href="product-6.html">Patient Ninja</a></h4>

                                                    <div class="star-rating" title="Rated 4.67 out of 5">
                                                        <span style="width:93.4%"><strong class="rating">4.67</strong> out of 5</span> </div>
                                                    <span class="price"><span class="amount">&pound;35.00</span></span>
                                                </div>
                                            </li>

                                            <li class="post-19 product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-bags product-cat-ballet-pumps product-cat-belts product-cat-business-shoes product-cat-dresses product-cat-hats-caps product-cat-jackets-clothing-for-her-for-him product-cat-jeans product-cat-outdoor-shoes product-cat-rucksacks-accessories product-cat-sandals product-cat-sunglasses-accessories-for-him product-cat-t-shirts product-cat-tops product-cat-trainers instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="product-7.html">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product17-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product17" /><img width="400" height="500" src="images/home_store_product17b-400x500.jpg" class="hidden_photo scale-with-grid" alt="home_store_product17b" /> </div>
                                                    </a>
                                                </div>
                                                <div class="desc">

                                                    <h4><a href="product-7.html">Premium Quality</a></h4>

                                                    <div class="star-rating" title="Rated 4.50 out of 5">
                                                        <span style="width:90%"><strong class="rating">4.50</strong> out of 5</span> </div>
                                                    <span class="price"><span class="amount">&pound;20.00</span></span>
                                                </div>
                                            </li>

                                            <li class="post-73 product type-product has-post-thumbnail isotope-item sale shipping-taxable purchasable product-type-simple product-cat-ankle-boots product-cat-rucksacks-accessories product-cat-sunglasses-accessories-for-him product-cat-t-shirts instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="product-8.html">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product4-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product4" /><img width="400" height="500" src="images/home_store_product4b-400x500.jpg" class="hidden_photo scale-with-grid" alt="home_store_product4b" /> </div>
                                                    </a><span class="onsale"><i class="icon-star"></i></span> </div>
                                                <div class="desc">

                                                    <h4><a href="product-8.html">Premium Quality</a></h4>

                                                    <div class="star-rating" title="Rated 2.00 out of 5">
                                                        <span style="width:40%"><strong class="rating">2.00</strong> out of 5</span> </div>
                                                    <span class="price"><del><span class="amount">&pound;15.00</span>
                                                    </del> <ins><span class="amount">&pound;12.00</span></ins>
                                                    </span>
                                                </div>
                                            </li>

                                            <li class="post-22 product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-variable product-cat-ankle-boots product-cat-bags-accessories product-cat-belts-accessories-for-him product-cat-hats-caps-accessories product-cat-heels product-cat-hoodies product-cat-jackets product-cat-jeans-clothing-for-her-for-him product-cat-moccasins product-cat-rucksacks product-cat-sandals-shoes product-cat-shorts product-cat-slippers product-cat-sunglasses product-cat-trousers instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="product-9.html">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product16-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product16" /><img width="400" height="500" src="images/home_store_product16b-400x500.jpg" class="hidden_photo scale-with-grid" alt="home_store_product16b" /> </div>
                                                    </a>
                                                </div>
                                                <div class="desc">

                                                    <h4><a href="product-9.html">Ship Your Idea</a></h4>

                                                    <div class="star-rating" title="Rated 4.33 out of 5">
                                                        <span style="width:86.6%"><strong class="rating">4.33</strong> out of 5</span> </div>
                                                    <span class="price"><span class="amount">&pound;20.00</span></span>
                                                </div>
                                            </li>

                                            <li class="post-40 product type-product has-post-thumbnail isotope-item sale shipping-taxable purchasable product-type-variable product-cat-ankle-boots product-cat-ballet-pumps product-cat-dresses product-cat-heels product-cat-jackets product-cat-jeans product-cat-sandals product-cat-shorts product-cat-slippers product-cat-tops instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="product-10.html">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product12-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product12" /><img width="400" height="500" src="images/home_store_product12b-400x500.jpg" class="hidden_photo scale-with-grid" alt="home_store_product12b" /> </div>
                                                    </a><span class="onsale"><i class="icon-star"></i></span> </div>
                                                <div class="desc">

                                                    <h4><a href="product-10.html">Ship Your Idea</a></h4>

                                                    <div class="star-rating" title="Rated 4.00 out of 5">
                                                        <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span> </div>
                                                    <span class="price"><del><span class="amount">&pound;35.00</span>
                                                    </del> <ins><span class="amount">&pound;30.00</span>&ndash;<span class="amount">&pound;35.00</span></ins>
                                                    </span>
                                                </div>
                                            </li>

                                            <li class="post-67 product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-ankle-boots product-cat-bags-accessories product-cat-jackets product-cat-jeans-clothing-for-her-for-him product-cat-trainers instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="product-11.html">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product6-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product6" /><img width="400" height="500" src="images/home_store_product6b-400x500.jpg" class="hidden_photo scale-with-grid" alt="home_store_product6b" /> </div>
                                                    </a>
                                                </div>
                                                <div class="desc">

                                                    <h4><a href="product-11.html">Ship Your Idea</a></h4>

                                                    <span class="price"><span class="amount">&pound;15.00</span></span>
                                                </div>
                                            </li>

                                            <li class="post-83 product type-product has-post-thumbnail isotope-item downloadable shipping-taxable purchasable product-type-simple product-cat-bags product-cat-bags-accessories product-cat-clothing-for-her product-cat-dresses product-cat-heels instock">

                                                <div class="hover_box hover_box_product">
                                                    <a href="product-12.html">
                                                        <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product1-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product1" /><img width="400" height="500" src="images/home_store_product1b-400x500.jpg" class="hidden_photo scale-with-grid" alt="home_store_product1b" /> </div>
                                                    </a>
                                                </div>
                                                <div class="desc">

                                                    <h4><a href="product-12.html">Woo Album #1</a></h4>

                                                    <span class="price"><span class="amount">&pound;9.00</span></span>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <!-- One full width row-->
                                    <div class="column one pager_wrapper">
                                        <!-- Navigation Area -->
                                        <div class="pager">
                                            <div class="pages">
                                                <span class='page-numbers current'>1</span>
                                                <a class='page-numbers' href='#'>2</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- .four-columns - sidebar -->
                <!-- Sidebar area-->
                <div class="sidebar four columns">
                    <div class="widget-area clearfix ">
                        <aside class="widget woocommerce widget_shopping_cart">
                            <h3>Giỏ hàng</h3>
                            <div class="widget_shopping_cart_content"></div>
                        </aside>
                        <aside class="widget woocommerce widget_price_filter">
                            <h3>Lọc theo giá</h3>
                            <form method="get" action="#">
                                <div class="price_slider_wrapper">
                                    <div class="price_slider flv_disp_none"></div>
                                    <div class="price_slider_amount">
                                        <input type="text" id="min_price" name="min_price" value="" data-min="9" placeholder="Min price" />
                                        <input type="text" id="max_price" name="max_price" value="" data-max="35" placeholder="Max price" />
                                        <button type="submit" class="button">
                                            Lọc </button>
                                        <div class="price_label flv_disp_none">
                                            Giá: <span class="from"></span> &mdash; <span class="to"></span> </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </form>
                        </aside>
                        <!-- CATEGORY -->
                       <?php 
                                    include "controllers/frontend/categoryController.php";
                                    $obj =  new categoryController();
                                    $obj->index();
                        ?>
                        <!-- END -->
                        <aside class="widget woocommerce widget_products">
                            <h3>Sản phẩm bán chạy</h3>
                            <ul class="product_list_widget">
                            <?php foreach ($hotproduct as $rows): ?>
                                <li>
                                    <a href="index.php?controller=product_details&id=<?php echo $rows->id; ?>" title="Woo Album #1"> <img width="180" height="180" src="assets/upload/product/<?php echo $rows->img; ?>" class="attachment-shop_thumbnail wp-post-image" alt="<?php echo $rows->name; ?>" /> <span class="product-title"><?php echo $rows->name; ?></span> </a>
                                    <span class="amount"><?php echo $rows->price; ?> <!-- &pound;9.00 --></span>
                                </li>
                            <?php endforeach; ?>
                            
                               <!--  <li>
                                    <a href="product-15.html" title="Woo Logo"> <img width="180" height="180" src="images/home_store_product2-180x180.jpg" class="attachment-shop_thumbnail wp-post-image" alt="home_store_product2" /> <span class="product-title">Woo Logo</span> </a>
                                    <span class="amount">&pound;15.00</span> </li>
                                <li>
                                    <a href="product-18.html" title="Woo Ninja"> <img width="180" height="180" src="images/home_store_product3-180x180.jpg" class="attachment-shop_thumbnail wp-post-image" alt="home_store_product3" /> <span class="product-title">Woo Ninja</span> </a>
                                    <span class="amount">&pound;15.00</span> </li> -->
                            </ul>
                        </aside>
                        <aside class="widget woocommerce widget_product_search">
                            <h3>Search Products</h3>
                            <form role="search" method="get" class="woocommerce-product-search" action="#">
                                <label class="screen-reader-text" for="s">Search for:</label>
                                <input type="search" class="search-field" placeholder="Search Products&hellip;" value="" name="s" title="Search for:" />
                                <input type="submit" value="Search" />
                                <input type="hidden" name="post_type" value="product" />
                            </form>
                        </aside>
                    </div>
                </div>

            </div>
        </div>
