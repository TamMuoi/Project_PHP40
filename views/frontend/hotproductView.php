 <aside class="widget woocommerce widget_products">
                            <h3>Sản phẩm bán chạy</h3>
                            <ul class="product_list_widget">
                                 <?php foreach ($hotproduct as $rows): ?>
                                <li>
                                    <a href="index.php?controller=product_details&id=<?php echo $rows->id; ?>" title="Woo Album #1"> <img width="180" height="180" src="assets/upload/product/<?php echo $rows->img; ?>" class="attachment-shop_thumbnail wp-post-image" alt="<?php echo $rows->name; ?>" /> <span class="product-title"><?php echo $rows->name; ?></span> </a>
                                    <span class="amount"><?php echo $rows->price; ?> <!-- &pound;9.00 --></span>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        </aside>