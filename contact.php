<?php
    $active = 'Liên Hệ';
    include("includes/header.php");
?>

    <div id="content"><!-- #content Begin -->
        <div class="container"><!-- container Begin -->
            <div class="col-md-12"><!-- col-md-12 Begin -->
                <ul class="breadcrumb"><!-- breadcrumb Begin -->
                    <li>
                        <a href="index.php">Trang chủ</a>
                    </li>
                    <li>
                        Liên Hệ
                    </li>
                </ul><!-- breadcrumb Finish -->
            </div><!-- col-md-12 Finish -->
           
            <div class="col-md-3"><!-- col-md-3 Begin -->
   
            <?php 
    
                include("includes/sidebar.php");
    
            ?>
               
            </div><!-- col-md-3 Finish -->

            <div class="col-md-9"><!-- col-md-9 Begin -->
               
                <div class="box"><!-- box Begin -->
                   
                    <div class="box-header"><!-- box-header Begin -->
                       
                        <center><!-- center Begin -->
                           
                           <h2> Hãy liên lạc với chúng tôi</h2>
                           
                            <p class="text-muted"><!-- text-muted Begin -->
                               
                            Nếu bạn có bất kỳ câu hỏi nào, hãy liên hệ với chúng tôi. Dịch vụ khách hàng của chúng tôi làm việc <strong>24/7</strong>
                               
                            </p><!-- text-muted Finish -->
                           
                        </center><!-- center Finish -->
                       
                        <form action="contact.php" method="post"><!-- form Begin -->
                           
                            <div class="form-group"><!-- form-group Begin -->
                               
                                <label>Họ Tên</label>
                               
                                <input type="text" class="form-control" name="name" required>
                               
                            </div><!-- form-group Finish -->
                           
                            <div class="form-group"><!-- form-group Begin -->
                               
                                <label>Email</label>
                               
                                <input type="text" class="form-control" name="email" required>
                               
                            </div><!-- form-group Finish -->
                           
                            <div class="form-group"><!-- form-group Begin -->
                               
                                <label>Vấn đề</label>
                               
                                <input type="text" class="form-control" name="subject" required>
                               
                            </div><!-- form-group Finish -->
                           
                            <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Tin nhắn</label>
                               
                               <textarea name="message" class="form-control"></textarea>
                               
                            </div><!-- form-group Finish -->
                           
                            <div class="text-center"><!-- text-center Begin -->
                               
                                <button type="submit" name="submit" class="btn btn-primary">
                               
                                <i class="fa fa-user-md"></i>Gửi tin nhắn
                               
                                </button>
                               
                            </div><!-- text-center Finish -->
                           
                        </form><!-- form Finish -->

                        <?php 
                            if(isset($_POST['submit'])){
                                /// quản trị viên nhận được tin nhắn ///

                                $sender_name = $_POST['name'];
                                $sender_email = $_POST['email'];
                                $sender_subject = $_POST['subject'];
                                $sender_message = $_POST['message'];
                                $receiver_email = "music-store@gmail.com";
                                mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);

                                ///trả lời tự động cho người gửi///
                                $email = $_POST['email'];
                                $subject = "Chào mừng đến với Website";
                                $msg = "cảm ơn vì đã gửi tin nhắn cho chúng tôi, chúng tôi sẽ trả lời bạn sớm nhất";
                                $from = "music-store@gmail.com";
                                mail($email,$subject,$msg,$from);
                                echo "<h2>Tin nhắn của bạn đã được gửi thành công</h2>";
                            }
                        ?>
                       
                    </div><!-- box-header Finish -->
                   
                </div><!-- box Finish -->
               
            </div><!-- col-md-9 Finish -->

        </div><!-- container Finish -->

    </div><!-- #content Finish -->
    
    <?php

        include("includes/footer.php");
    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>