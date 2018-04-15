<?php include ROOT.'/views/layouts/header.php'?>
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Category</h2>
                            <ul>
                                <?php foreach ($categories as $categoryItem) :?>
                                    <li><a href="<?php echo $categoryItem['id'];?>">
                                    <?php echo $categoryItem['name'];?>
                                    </a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>                       
                    </div>
                </div>
                <?php foreach ($latestProducts as $product): ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                            </div>
                            <h2><a href="/product/<?php echo $product['id'];?>">
                                    <?php echo $product['name'];?>
                                </a></h2>
                            <div class="product-carousel-price">
                                <ins>$ <?php echo $product['price'];?> </ins>
                            </div>  
                            
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-id="<?php echo $product['id']; ?>" rel="nofollow" href="/cart/add/<?php echo $product['id']; ?>">Add to cart</a>
                            </div>                       
                        </div>
                    </div>
                <?php endforeach;?>
               
                        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include ROOT.'/views/layouts/footer.php'?>
  