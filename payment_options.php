<div class="box"><!-- box begin -->
    <?php 
        $session_email = $_SESSION['customer_email'];
        $select_customer = "select * from customers where customer_email='$session_email'";
        $run_customer = mysqli_query($con,$select_customer);
        $row_customer = mysqli_fetch_array($run_customer);
        $customer_id = $row_customer['customer_id'];
    ?>
    <h1 class="text-center">Tùy chọn thanh toán cho bạn</h1>
    <p class="lead text-center"><!-- lead text-center begin -->
        <a href="order.php?c_id=<?php echo $customer_id ?>">Thanh toán ngoại tuyến</a>
    </p><!-- lead text-center Finish -->
    <center><!-- center Begin -->
        <div class="lead"> <!-- lead Begin -->
            <a href="#">
                Thanh toán Paypal
                <img src="images/paypal_img.jpg" alt="img-paypal" class="img-responsive">
            </a>
        </div><!-- lead Finish -->
    </center><!-- center Finish -->
</div><!-- box Finish -->