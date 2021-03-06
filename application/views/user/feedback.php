          <?php
    include 'inc/head.php';
?>
    <!-- Progress-wrapp scroll-button -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" /> </svg>
    </div>
    <!-- Mouse cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Main -->
    <div class="annie-page"> 
       <a href="#" class="js-annie-nav-toggle annie-nav-toggle"><i></i></a>
        <!-- Sidebar -->
                <?php
        include 'inc/sidebar.php';
        ?>
        <!-- Content -->
        <div class="annie-main">
            <div class="annie-post">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center"> <span class="heading-meta">Reviews</span>
                            <h2 class="annie-post-heading animate-box" data-animate-effect="fadeInUp">Feedback</h2> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                            <div class="clear" id="comment-list">
                                <div class="comments-area" id="comments">
                                    <a href="#feedback"><p style="border-bottom: 1px dashed #999; width: 120px;">Leave feedback</p></a>
                                    <ol class="comment-list">
					    <?php
					    	foreach($values as $val){
					    ?>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img class="avatar photo" src="<?=  base_url()?>assets/images/feed/<?=$val->img?>" alt="">
                                                    <h3 class="name"><?=$val->name?></h3> </div>
                                                <div class="comment-meta"><a href="#0"><?=$val->link?></a></div>
                                                <p><?=$val->msg?></p>
                                            </div>
                                        </li>
					    <?php
						}
					    ?>
<!--                                         <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img class="avatar photo" src="<?=  base_url()?>assets/images/feedback/2.jpg" alt="">
                                                    <h3 class="name">Freida & Pablo</h3> </div>
                                                <div class="comment-meta"><a href="#0">facebook.com/username</a></div>
                                                <p>Wow we are both blown away, these photos are beautiful. Thank you so much for capturing our wedding day.
We love our photos and how you’ve captured every precious moment of our ceremony in detail.
We can’t thank you enough. It was wonderful to meet you, you have left a lasting memory with us.
Thanking once again. Take care and regards,</p>
                                            </div>
                                        </li> -->
<!--                                         <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img class="avatar photo" src="<?=  base_url()?>assets/images/feedback/3.jpg" alt="">
                                                    <h3 class="name">Olivia & Enrico</h3> </div>
                                                <div class="comment-meta"><a href="#0">vk.com/username</a></div>
                                                <p>Thank You so much for getting our photo’s out to us so quickly.  They are absolutely beautiful.  You managed to capture so much perfectly.
Thank you so much for your professionalism, you made the day that much more relaxed and enjoyable.
Warm Regards.</p>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img class="avatar photo" src="<?=  base_url()?>assets/images/feedback/4.jpg" alt="">
                                                    <h3 class="name">Maddie & Daniel</h3> </div>
                                                <div class="comment-meta"><a href="#0">facebook.com/username</a></div>
                                                <p>Thank you so so much for the photos! We have had a good look through them and we love them so much. You have been so wonderful to work with and throughout the whole process. We are so impressed with your professionalism and the quality of the work you do and the photos is phenomenal</p>
                                            </div>
                                        </li> -->
<!--                                         <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img class="avatar photo" src="<?=  base_url()?>assets/images/feedback/5.jpg" alt="">
                                                    <h3 class="name">Vanessa & Chris</h3> </div>
                                                <div class="comment-meta"><a href="#0">instagram.com/username</a></div>
                                                <p>A huge thank you for our beautiful wedding photos and slideshow. We absolutely love every photo and appreciate everything you did to make our special day so memorable and we will cherish them forever.</p>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img class="avatar photo" src="<?=  base_url()?>assets/images/feedback/6.jpg" alt="">
                                                    <h3 class="name">Tammy & Matthew</h3> </div>
                                                <div class="comment-meta"><a href="#0">pinterest.com/username</a></div>
                                                <p>We just wanted to thank you for your amazing work. You were great with your directions and I’m sure the photos will be great – can’t wait.
                                                   Just got a glimpse of one of the photos on Instagram and really thrilled with it .
                                                   Thank you so much again. Also our guests had only great things to say about you.</p>
                                            </div>
                                        </li> -->
                                        
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="feedback" class="row">
                        <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                            <h3 class="annie-contact-heading">Leave Feedback</h3>
                        </div>
                        
                        <div class="col-md-7 animate-box" data-animate-effect="fadeInUp">
                            <form method="post" class="row" action="<?=  base_url('Photo/feedback')?>" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" required> </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="link" class="form-control" placeholder="Link to your social network account"> </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="msg" id="message" cols="30" rows="7" class="form-control" placeholder="Your Feedback"></textarea>
                                    </div>
                                </div>
			<div class="col-md-12">
                                           
                                            <div class="custom-file ">
                                                <input type="file" class="custom-file-input" name="img">
                                                <label class="custom-file-label"style="background-color: #1b1b1b; width:645px;color:#6c757d;" >Choose Images</label>
                                            </div>
                                        </div>	
				
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="btn btn-contact" value="Submit Feedback"> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
                      <?php
    include 'inc/footer.php';
?>
        </div>
        <!-- jQuery -->
                <?php
    include 'inc/jquery.php';
?>
    </div>
</body>


</html> 
