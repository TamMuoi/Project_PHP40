<?php 
      $this->layout = "views/frontend/layout-trangtrong.php";
 ?>
 <!--Subheader area - only for certain pages -->
            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h2 class="title">Shop</h2>
                        <!--BreadCrumbs area-->
                        <ul class="breadcrumbs woocommerce-breadcrumb">
                            <li>
                                <a href="">Trang chủ</a><span><i class="icon-right-open"></i></span> </li>
                            <li>
                                <a href="#"><?php echo $record->name; ?></a><span><i class="icon-right-open"></i></span> </li>
                            <!-- <li>
                                <a href="for-her/accessories.html">Accessories</a><span><i class="icon-right-open"></i></span> </li>
                            <li>
                                <a href="for-her/sunglasses.html">Sunglasses</a><span><i class="icon-right-open"></i></span> </li>
                            <li>
                                Flying Ninja<span><i class="icon-right-open"></i></span> </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<!-- End -->
        <!-- #Content -->
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">

                <!-- .sections_group -->
                <div class="sections_group">
                    <div class="section">
                        <div class="section_wrapper clearfix">
                            <div class="items_group clearfix">
                                <!-- One full width row-->
                                <div class="column one woocommerce-content">

                                    <div itemscope itemtype="http://schema.org/Product" id="product-70" class="post-70 product type-product has-post-thumbnail no-share sale shipping-taxable purchasable product-type-simple product-cat-dresses product-cat-jeans product-cat-moccasins product-cat-sandals-shoes product-cat-shorts product-cat-sunglasses product-cat-trousers instock">

                                        <div class="post-nav">
<!-- 
                                            <a class="fixed-nav fixed-nav-prev " href="#"><span class="arrow"><i class="icon-left-open-big"></i></span>
                                                <div class="photo"><img width="80" height="80" src="
                                                assets/upload/product/<?php  $rowsimg; ?>" class="attachment-blog-navi wp-post-image" alt="<?php  $rowsname; ?>" />
                                                </div>
                                                <div class="desc">
                                                <h6>Ship Your Idea</h6><span class="date"><i class="icon-clock"></i>June 7, 2013</span>                                             </div></a><a class="fixed-nav fixed-nav-next " href="product-8.html"><span class="arrow"><i class="icon-right-open-big"></i></span>
                                                <div class="photo"><img width="80" height="80" src="images/home_store_product4-80x80.jpg" class="attachment-blog-navi wp-post-image" alt="home_store_product4" />                                               </div>
                                                <div class="desc">
                                                    <h6>Premium Quality</h6><span class="date"><i class="icon-clock"></i>June 7, 2013</span>                                                </div></a> -->
                                            <ul class="next-prev-nav">
                                                <li class="prev">
                                                    <a class="button button_js" href="#"><span class="button_icon"><i class="icon-left-open"></i></span></a> </li>
                                                <li class="next">
                                                    <a class="button button_js" href="#"><span class="button_icon"><i class="icon-right-open"></i></span></a> </li>
                                            </ul>

                                            <a class="list-nav" href="index.php?controller=homeProduct"><i class="icon-layout"></i>Show all</a> </div>

                                        <div class="product_wrapper clearfix">

                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second product_image_wrapper">

                                                <span class="onsale"><i class="icon-star"></i></span>

                                                <div class="images">

                                                    <div class="image_frame scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="assets/upload/product/<?php echo $record->img; ?>" class="woocommerce-main-image zoom" title="<?php echo $record->name; ?>" data-rel="prettyPhoto[product-gallery]">
                                                                <div class="mask"></div>
                                                                <img width="800" height="1000" src="assets/upload/product/<?php echo $record->img; ?>" class="scale-with-grid wp-post-image" alt="<?php echo $record->name; ?>" title="<?php echo $record->name; ?>" />
                                                            </a>
                                                            <div class="image_links">
                                                                <a href="assets/upload/product/<?php echo $record->img; ?>" class="woocommerce-main-image zoom" title="<?php echo $record->name; ?>"><i class="icon-search"></i></a> 
                                                            </div>
                                                        </div>
                                                    </div>
<!--                                                      <div class="thumbnails columns-3">
                                                        <div class="image_frame scale-with-grid">
                                                            <div class="image_wrapper">
                                                                <a href="" class="woocommerce-main-image zoom" title="home_store_product5b" data-rel="prettyPhoto[product-gallery]">
                                                                    <div class="mask"></div><img width="180" height="180" src="assets/upload/product/<?php  $recordimg; ?>" class="attachment-shop_thumbnail" alt="home_store_product5b" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="image_frame scale-with-grid">
                                                            <div class="image_wrapper">
                                                                <a href="images/home_store_product3b.jpg" class="woocommerce-main-image zoom" title="home_store_product3b" data-rel="prettyPhoto[product-gallery]">
                                                                    <div class="mask"></div><img width="180" height="180" src="assets/upload/product/<?php  $recordimg; ?>" class="attachment-shop_thumbnail" alt="home_store_product3b" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>  -->
                                                </div>
                                            </div>

                                            <!-- One Second (1/2) Column -->
                                            <div class="column one-second summary entry-summary">

                                                <h1 class="product_title entry-title"><?php echo $record->name; ?></h1>
                                                <div class="woocommerce-product-rating" itemscope itemtype="http://schema.org/AggregateRating">
                                                    <div class="star-rating" title="Rated 4.00 out of 5">
                                                        <span style="width:80%"> <strong class="rating">4.00</strong> out of <span itemprop="bestRating">5</span> based on <span class="rating">4</span> customer ratings </span>
                                                    </div>
                                                    <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span itemprop="reviewCount" class="count">4</span> customer reviews)</a> </div>

                                                <div itemscope itemtype="http://schema.org/Offer">

                                                    <p class="price">
                                                        <del><span class="amount">&pound;15.00</span></del><ins><span class="amount"><?php echo $record->price; ?> vnđ</span></ins> </p>

                                                    <meta itemprop="content" content="12" />
                                                    <meta content="GBP" />
                                                    <link itemprop="link" href="http://schema.org/InStock" />
                                                </div>
                                                <br style="clear:both;" />
                                                <div>
                                                    <p>
                                                        <?php echo $record->content; ?> </p>
                                                </div>

                                                <form class="cart" method="post" enctype='multipart/form-data'>

                                                    <div class="quantity">
                                                        <input type="number" id="qaty" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" />
                                                    </div>

                                                    <input type="hidden" name="add-to-cart" value="70" />

                                                  <!--   <button type="submit" class="single_add_to_cart_button button alt">
                                                        Thêm vào giỏ hàng </button> -->
                                                    <a href="index.php?controller=cart&action=add&id=<?php echo $record->id; ?>" type="submit" class="single_add_to_cart_button button alt" title="">Thêm vào giỏ hàng</a>
<!--                                                     <script type="text/javascript">
                                                        function ADD_num_quantity(loai)
                                                            {
                                                                var num = $("#input-quantity").val();
                                                                if(isNaN(num))
                                                                    {
                                                                        num = 1;
                                                                    }
                                                                if(loai         == '-' && num > 1) num--;
                                                                else if(loai    == '+' && num < 100000) num++;
                                                                $("#input-quantity").val(num);
                                                            }
                                                    </script> -->
                                                </form>

                                                <div class="product_meta">

                                                    <span class="posted_in">Categories: 
                                                   
                                                        
                                                  
                                                    <a href="#" rel="tag"><?php echo $record->name; ?></a>
                                                     
                                                     <!-- <a href="for-her/jeans.html" rel="tag">Jeans</a>, <a href="for-him/mocasins.html" rel="tag">Moccasins</a>, <a href="for-him/sandals-shoes.html" rel="tag">Sandals</a>, <a href="for-her/shorts.html" rel="tag">Shorts</a>, <a href="for-her/sunglasses.html" rel="tag">Sunglasses</a>, <a href="for-him/trousers.html" rel="tag">Trousers</a>. -->
                                                    </span> 
                                                </div>

                                                <div class="accordion">
                                                    <div class="mfn-acc accordion_wrapper open1st">

                                                        <div class="question">

                                                            <div class="title">
                                                                <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i> Mô tả </div>

                                                            <div class="answer">

                                                                <p>
                                                                    <?php echo $record->description; ?>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="question">

                                                            <div class="title">
                                                                <i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i> Reviews (4) </div>

                                                            <div class="answer">
                                                                <div id="reviews">
                                                                    <div id="comments">
                                                                        <h2>4 reviews for Flying Ninja</h2>

                                                                        <ol class="commentlist">
                                                                            <li itemscope itemtype="http://schema.org/Review" class="comment even thread-even depth-1" id="li-comment-29">

                                                                                <div id="comment-29" class="comment_container">

                                                                                    <img alt='Cobus Bester' src='http://1.gravatar.com/avatar/f0cde930b42c79145194679d5b6e3b1d?s=60&amp;d=http:%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' />
                                                                                    <div class="comment-text">

                                                                                        <div itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 4 out of 5">
                                                                                            <span style="width:80%"><strong >4</strong> out of 5</span> </div>

                                                                                        <p class="meta">
                                                                                            <strong>Cobus Bester</strong> &ndash;
                                                                                            <time datetime="2013-06-07T11:52:25+00:00">
                                                                                                June 7, 2013 </time>
                                                                                            : </p>

                                                                                        <div class="description">
                                                                                            <p>
                                                                                                Really happy with this print. The colors are great, and the paper quality is good too. </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <!-- #comment-## -->
                                                                            <li itemscope itemtype="http://schema.org/Review" class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-30">

                                                                                <div id="comment-30" class="comment_container">

                                                                                    <img alt='Andrew' src='http://0.gravatar.com/avatar/8026a390d28369f7a2befcaeb9557359?s=60&amp;d=http:%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' />
                                                                                    <div class="comment-text">

                                                                                        <div itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 3 out of 5">
                                                                                            <span style="width:60%"><strong >3</strong> out of 5</span> </div>

                                                                                        <p class="meta">
                                                                                            <strong>Andrew</strong> &ndash;
                                                                                            <time datetime="2013-06-07T11:56:36+00:00">
                                                                                                June 7, 2013 </time>
                                                                                            : </p>

                                                                                        <div class="description">
                                                                                            <p>
                                                                                                You only get the picture, not the person holding it, something they don&#8217;t mention in the description, now I&#8217;ve got to find my own person </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <!-- #comment-## -->
                                                                            <li itemscope itemtype="http://schema.org/Review" class="comment even thread-even depth-1" id="li-comment-31">

                                                                                <div id="comment-31" class="comment_container">

                                                                                    <img alt='Coen Jacobs' src='http://1.gravatar.com/avatar/3472757f6a3732d6470f98d7d7e9cece?s=60&amp;d=http:%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' />
                                                                                    <div class="comment-text">

                                                                                        <div itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 5 out of 5">
                                                                                            <span style="width:100%"><strong >5</strong> out of 5</span> </div>

                                                                                        <p class="meta">
                                                                                            <strong>Coen Jacobs</strong> &ndash;
                                                                                            <time datetime="2013-06-07T12:19:25+00:00">
                                                                                                June 7, 2013 </time>
                                                                                            : </p>

                                                                                        <div class="description">
                                                                                            <p>
                                                                                                This is my favorite poster. In fact, I&#8217;ve ordered 5 of them! </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <!-- #comment-## -->
                                                                            <li itemscope itemtype="http://schema.org/Review" class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-32">

                                                                                <div id="comment-32" class="comment_container">

                                                                                    <img alt='Stuart' src='http://1.gravatar.com/avatar/7a6df00789e50714fcde1b759befcc84?s=60&amp;d=http:%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' />
                                                                                    <div class="comment-text">

                                                                                        <div itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 4 out of 5">
                                                                                            <span style="width:80%"><strong >4</strong> out of 5</span> </div>

                                                                                        <p class="meta">
                                                                                            <strong>Stuart</strong> &ndash;
                                                                                            <time datetime="2013-06-07T12:59:49+00:00">
                                                                                                June 7, 2013 </time>
                                                                                            : </p>

                                                                                        <div class="description">
                                                                                            <p>
                                                                                                This is a fantastic quality print and is happily hanging framed on my wall now. </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <!-- #comment-## -->
                                                                        </ol>
                                                                    </div>

                                                                    <div id="review_form_wrapper">
                                                                        <div id="review_form">
                                                                            <div id="respond" class="comment-respond">
                                                                                <h3 id="reply-title" class="comment-reply-title">Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="product-1.html#respond" class="flv_disp_none">Cancel reply</a></small></h3>
                                                                                <p class="must-log-in">
                                                                                    You must be <a href="#">logged in</a> to post a comment. </p>
                                                                            </div>
                                                                            <!-- #respond -->
                                                                        </div>
                                                                    </div>

                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="related products">

                                            <h2>Sản phẩm liên quan</h2>

                                            <div class="products_wrapper isotope_wrapper">
                                                <ul class="products">
                                                   
                                                    <li class="post-31 product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-business-shoes product-cat-moccasins product-cat-outdoor-shoes product-cat-sandals-shoes product-cat-slippers product-cat-trainers instock">

                                                        <div class="hover_box hover_box_product">
                                                            <a href="#">
                                                                <div class="hover_box_wrapper"><img width="400" height="500" src="assets/upload/product/<?php echo $record->img; ?>" class="visible_photo scale-with-grid wp-post-image" alt="<?php echo $record->name; ?>" /><img width="400" height="500" src="assets/upload/product/<?php echo $record->img; ?>" class="hidden_photo scale-with-grid" alt="<?php echo $record->name; ?>" /> </div>
                                                            </a>
                                                        </div>
                                                        <div class="desc">

                                                            <h4><a href="#"><?php echo $record->name; ?></a></h4>

                                                            <div class="star-rating" title="Rated 5.00 out of 5">
                                                                <span style="width:100%"><strong class="rating">5.00</strong> out of 5</span> </div>
                                                            <span class="price"><span class="amount"><!-- &pound;20.00 --><?php echo $record->price; ?>
                                                             vnđ</span></span>
                                                        </div>
                                                    </li>

<!--                                                     <li class="post-60 product type-product has-post-thumbnail isotope-item shipping-taxable purchasable product-type-simple product-cat-business-shoes product-cat-hats-caps product-cat-jeans-clothing-for-her-for-him product-cat-sandals product-cat-sandals-shoes product-cat-tops instock">

                                                        <div class="hover_box hover_box_product">
                                                            <a href="product-14.html">
                                                                <div class="hover_box_wrapper"><img width="400" height="500" src="images/home_store_product7-400x500.jpg" class="visible_photo scale-with-grid wp-post-image" alt="home_store_product7" /><img width="400" height="500" src="images/home_store_product7b-400x500.jpg" class="hidden_photo scale-with-grid" alt="home_store_product7b" /> </div>
                                                            </a>
                                                        </div>
                                                         <div class="desc">

                                                            <h4><a href="product-14.html">Woo Logo</a></h4>

                                                            <div class="star-rating" title="Rated 4.00 out of 5">
                                                                <span style="width:80%"><strong class="rating">4.00</strong> out of 5</span> </div>
                                                            <span class="price"><span class="amount">&pound;35.00</span></span>
                                                        </div> 
                                                    </li> -->
                                                </ul>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- #product-70 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                