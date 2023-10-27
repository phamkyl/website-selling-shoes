<?php
include ('../function/userfunction.php');
include ('../admin/config/dbconfig.php');
include ('../USERS/include_User/header.php');
include ('../USERS/include_User/navbar.php');



$user_cart_lg = "SELECT * FROM user where id = $id";
?>

  <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Producta Checkout</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Checkout Area =================-->
  <section class="checkout_area padding_top">
    <div class="container">

      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Billing Details</h3>
              <label for="">thông tin cá nhân</label>

            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control"  name="fname" />
                <span class="placeholder" data-placeholder="First name"></span>
              </div>
                <br> <br>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control"  name="lname" />
                <span class="placeholder" data-placeholder="Last name"></span>
              </div>

              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="compemailany" />
                <span class="placeholder" data-placeholder="Email Address"></span>
              </div>
            </form>
          </div>
            <form action="" method="post">
                <label for="">liên hệ/địa chỉ giao hàng</label>
                <br>

                <div class="col-md-6 form-group p_star">

                    <input type="text" class="form-control"  name="name" />
                    <span class="placeholder" data-placeholder="Tên người nhận hàng"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                    <input type="text" class="form-control" id="number" name="number" />
                    <span class="placeholder" data-placeholder="Phone number"></span>
                </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" name="add1" />
                <span class="placeholder" data-placeholder="Address line 01"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add2" name="add2" />
                <span class="placeholder" data-placeholder="Address line 02"></span>
              </div>
                <div class="col-md-12 form-group p_star">
                    <textarea class="form-control" name="note" ></textarea>
                    <span class="placeholder" data-placeholder="Note"></span>
                </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Your Order</h2>
              <ul class="list">
                <li>
                  <a href="#">Product
                    <span>Total</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Blackberry
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Tomatoes
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
                <li>
                  <a href="#">Fresh Brocoli
                    <span class="middle">x 02</span>
                    <span class="last">$720.00</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->
<?php
include('../USERS/include_User/footer.php');
?>