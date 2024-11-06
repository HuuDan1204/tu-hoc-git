<?php 
require_once 'layout/header.php';
?>
<?php 
require_once 'layout/menu.php';
?>

    <!-- Start Header Area -->
   
    <!-- end Header Area -->


    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= BASE_URL ?>"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="shop.html">Sản phẩm</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-padding pb-0">
            <div class="container">
                <div class="row">
                    <!-- product details wrapper start -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider">
                                        <?php   foreach($listsanpham as $key=>$sanpham) ?>
                                        <div class="pro-large-img img-zoom">
                                            <img src="<?= BASE_URL.$sanpham['hinh_anh'] ?>" alt="product-details" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-des">
                                        <div class="manufacturer-name">
                                            <a href="#"><?= $sanpham['ten_danh_muc'] ?></a>
                                        </div>
                                        <h3 class="product-name"><?= $sanpham['ten_san_pham'] ?></h3>
                                        <div class="ratings d-flex">
                                            <div class="pro-review">
                                                <?php $countComment = count($listbinhluan); ?>
                                                <span><?= $countComment . ' bình luận' ?></span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                                    <?php if($sanpham['gia_khuyen_mai'] ){ ?>
                                                    <span class="price-regular"><?= formatPrice($sanpham['gia_khuyen_mai']).'đ'; ?></span>
                                                    <span class="price-old"><del><?= formatPrice($sanpham['gia_san_pham']).'đ' ;?></del></span>
                                                    <?php } else{ ?>
                                                        <span class="price-regular"><?= formatPrice($sanpham['gia_san_pham']).'đ'; ?></span>
                                                        <?php }?>
                                                </div>
                                       
                                        <div class="availability">
                                            <i class="fa fa-check-circle"></i>
                                            <span><?= $sanpham['so_luong'] . ' Trong kho' ?></span>
                                        </div> 
                                        <p class="pro-desc"><?= $sanpham['mo_ta'] ?></p>
                                        <form action="<?= BASE_URL. '?act=them-gio-hang' ?>" method="post">
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <h6 class="option-title">Số lượng : </h6>
                                            <div class="quantity">
                                                <input type="hidden" name="san_pham_id" id="" value="<?= $sanpham['id'] ?>" >
                                                <div class="pro-qty"><input type="text" value="1" name="so_luong" ></div>
                                            </div>
                                            <div class="action_link">
                                                <but class="btn btn-cart2" href="#">Thêm vào giỏi </>
                                            </div>
                                        </div>
                                        </form>
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
                        <div class="product-details-reviews section-padding pb-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-review-info">
                                        <ul class="nav review-tab">
                                           
                                            <li>
                                                <a data-bs-toggle="tab" href="#tab_three">Bình luận(<?= $countComment ?>)</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content reviews-tab">
                                           
                                            <div class="tab-pane fade" id="tab_three">
                                                <?php 
                                                    foreach($listbinhluan as $binhluan):
                                                ?>
                                                    <div class="total-reviews">
                                                        <div class="rev-avatar">
                                                            <img src="<?= $binhluan['anh_dai_dien'] ?>" alt="">
                                                        </div>
                                                        <div class="review-box">
                                                            <div class="ratings">
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span class="good"><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                            </div>
                                                            <div class="post-author">
                                                                <p><span>admin -</span> 30 Mar, 2019</p>
                                                            </div>
                                                            <p>Aliquam fringilla euismod risus ac bibendum. Sed sit
                                                                amet sem varius ante feugiat lacinia. Nunc ipsum nulla,
                                                                vulputate ut venenatis vitae, malesuada ut mi. Quisque
                                                                iaculis, dui congue placerat pretium, augue erat
                                                                accumsan lacus</p>
                                                        </div>
                                                    </div>
                                                    <?php endforeach ?>
                                                <form action="#" class="review-form">
                                                    
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <label class="col-form-label"><span class="text-danger">*</span>
                                                               Bình luận</label>
                                                            <textarea class="form-control" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="buttons">
                                                        <button class="btn btn-sqr" type="submit">Bình luận</button>
                                                    </div>
                                                </form> <!-- end of review-form -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details reviews end -->
                    </div>
                    <!-- product details wrapper end -->
                </div>
            </div>
        </div>
      
    </main>

   
 
    <div class="offcanvas-minicart-wrapper">
        <div class="minicart-inner">
            <div class="offcanvas-overlay"></div>
            <div class="minicart-inner-content">
                <div class="minicart-close">
                    <i class="pe-7s-close"></i>
                </div>
                <div class="minicart-content-box">
                    <div class="minicart-item-wrapper">
                        <ul>
                            <li class="minicart-item">
                                <div class="minicart-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/cart/cart-1.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="minicart-content">
                                    <h3 class="product-name">
                                        <a href="product-details.html">Dozen White Botanical Linen Dinner Napkins</a>
                                    </h3>
                                    <p>
                                        <span class="cart-quantity">1 <strong>&times;</strong></span>
                                        <span class="cart-price">$100.00</span>
                                    </p>
                                </div>
                                <button class="minicart-remove"><i class="pe-7s-close"></i></button>
                            </li>
                            <li class="minicart-item">
                                <div class="minicart-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/cart/cart-2.jpg" alt="product">
                                    </a>
                                </div>
                                <div class="minicart-content">
                                    <h3 class="product-name">
                                        <a href="product-details.html">Dozen White Botanical Linen Dinner Napkins</a>
                                    </h3>
                                    <p>
                                        <span class="cart-quantity">1 <strong>&times;</strong></span>
                                        <span class="cart-price">$80.00</span>
                                    </p>
                                </div>
                                <button class="minicart-remove"><i class="pe-7s-close"></i></button>
                            </li>
                        </ul>
                    </div>

                    <div class="minicart-pricing-box">
                        <ul>
                            <li>
                                <span>sub-total</span>
                                <span><strong>$300.00</strong></span>
                            </li>
                            <li>
                                <span>Eco Tax (-2.00)</span>
                                <span><strong>$10.00</strong></span>
                            </li>
                            <li>
                                <span>VAT (20%)</span>
                                <span><strong>$60.00</strong></span>
                            </li>
                            <li class="total">
                                <span>total</span>
                                <span><strong>$370.00</strong></span>
                            </li>
                        </ul>
                    </div>

                    <div class="minicart-button">
                        <a href="cart.html"><i class="fa fa-shopping-cart"></i> View Cart</a>
                        <a href="cart.html"><i class="fa fa-share"></i> Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
require_once 'layout/footer.php';
?>