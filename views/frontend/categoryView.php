 <aside class="widget woocommerce widget_product_categories">
                            <h3>Dạnh mục sản phẩm</h3>
                            <ul class="product-categories">
                            <?php foreach ($category as $rows): ?>
                                <li class="cat-item cat-item-27 cat-parent">
                                    <a href="index.php?controller=product&action=category&id=<?php echo $rows->category_id; ?>"><?php echo $rows->name; ?></a> 
                                </li>
                            <?php endforeach; ?>
                               <!--  <li class="cat-item cat-item-36 cat-parent">
                                    <a href="for-him.html">For him</a> </li> -->
                  </ul>
</aside>