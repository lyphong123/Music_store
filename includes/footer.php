<div id="footer"> <!-- footer Begin -->
    <div class="container"> <!-- container Begin -->
        <div class="row"> <!-- row Begin -->
            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
                <h4>Trang</h4>
                <ul> <!-- ul Begin -->
                    <li><a href="cart.php">Giỏ Hàng</a></li>
                    <li><a href="contact.php">Liên Hệ</a></li>
                    <li><a href="shop.php">Cửa Hàng</a></li>
                    <li><a href="customer/my_account.php">Tài Khoản</a></li>
                </ul> <!-- ul Finish -->

                <hr>

                <h4>Phần người dùng</h4>
                <ul> <!-- ul Begin -->
                    <?php 
                        if(!isset($_SESSION['customer_email'])){
                            echo "<a href='checkout.php'>Đăng nhập</a>";
                        }else{
                            echo "<a href='customer/my_account.php?my_orders'>Tài Khoản</a>";
                        }
                    ?>
                    <li><a href="customer_register.php">Đăng Ký</a></li>
                </ul> <!-- ul Finish -->
                <hr class="hidden-md hidden-lg hidden-sm">    
            </div> <!-- col-sm-6 col-md-3 Finish -->
            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
                <h4>Sản phẩm nổi bật</h4>
                <ul> <!-- ul Begin -->
                <?php 
                    
                    $get_p_cats = "select * from product_categories";
                
                    $run_p_cats = mysqli_query($con,$get_p_cats);
                
                    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                        
                        $p_cat_id = $row_p_cats['p_cat_id'];
                        
                        $p_cat_title = $row_p_cats['p_cat_title'];
                        
                        echo "
                        
                            <li>
                            
                                <a href='shop.php?p_cat=$p_cat_id'>
                                
                                    $p_cat_title
                                
                                </a>
                            
                            </li>
                        
                        ";
                        
                    }
                
                ?>
                </ul> <!-- ul Finish -->
                <hr class="hidden-md hidden-lg">    
            </div> <!-- col-sm-6 col-md-3 Finish -->
            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
                <h4>Địa chỉ :</h4>
                <p>
                    <strong>Music Store Media inc.</strong>
                    <br/>Q5
                    <br/>Tp.HCM
                    <br/>0908-000-011
                    <br/>music-store@gmail.com
                    <br/><strong>MrLP</strong>
                </p>
                <a href="contact.php">Xem trang liên hệ của chúng tôi</a>
                <hr class="hidden-md hidden-lg">    
            </div> <!-- col-sm-6 col-md-3 Finish -->
            <div class="col-sm-6 col-md-3"> <!-- col-sm-6 col-md-3 Begin -->
                
                <h4>Tin tức</h4>
                
                <p class="text-muted">
                    Đừng bỏ lỡ sản phẩm mới nhất của Website chúng tôi
                </p>
                
                <form action="" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->
                        
                        <input type="text" class="form-control" name="email">
                        
                        <span class="input-group-btn"><!-- input-group-btn begin -->
                            
                            <input type="submit" value="subscribe" class="btn btn-default">
                            
                        </span><!-- input-group-btn Finish -->
                        
                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->
                
                <hr>
                
                <h4>Keep In Touch</h4>
                
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-envelope"></a>
                </p>
                
            </div> <!-- col-sm-6 col-md-3 Finish -->
        </div> <!-- row Finish -->
    </div> <!-- container Finish -->
</div> <!-- footer Finish -->

<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-left">&copy; 2022 Music Store All Rights Reserve</p>
            
        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->
            
            <p class="pull-right">Theme by: <a href="#">MrLP</a></p>
            
        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->