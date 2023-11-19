<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Đăng nhập/Đăng ký</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Đăng ký</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Đăng kí</h3>
                    <form class="row login_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Tên tài khoản"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder=" Email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Mật khẩu"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Đồng ý với điều khoản*</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Đăng kí</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="../../contents/client/img/login.jpg" alt="">
                    <div class="hover">
                        <p>Đăng nhập nếu quý khách đã có tài khoản từ trước</p>
                        <a class="primary-btn" href="../view/client/atc=login">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->