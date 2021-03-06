
<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
<!-- Navigation -->
<link href="<?php echo base_url('assets/img/favicon.ico') ?>" rel="shortcut icon" type="image/x-icon">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Thailand Roleplay Gaming </a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#" data-toggle="modal" data-target="#myModal" >แก้ไขข้อมูลส่วนตัว <span class="sr-only">(current)</span></a></li>
        </ul>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal2">เปลี่ยนรหัสผ่าน</a>
                </li>
                <li>
                    <a href="<?php echo base_url('checklogin/logout') ?>">Logout as <?php echo $this->session->userdata('status','memberuser')?> <?php echo $this->session->userdata('memberuser');?></a>
                </li>
                <!--                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-item.html">Single Portfolio Item</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="blog-home-1.html">Blog Home 1</a>
                                            </li>
                                            <li>
                                                <a href="blog-home-2.html">Blog Home 2</a>
                                            </li>
                                            <li>
                                                <a href="blog-post.html">Blog Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="full-width.html">Full Width Page</a>
                                            </li>
                                            <li>
                                                <a href="sidebar.html">Sidebar Page</a>
                                            </li>
                                            <li>
                                                <a href="faq.html">FAQ</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404</a>
                                            </li>
                                            <li>
                                                <a href="pricing.html">Pricing Table</a>
                                            </li>
                                        </ul>
                                    </li>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- jQuery -->
<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/js/angular.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/app.js')?>" type="text/javascript"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
