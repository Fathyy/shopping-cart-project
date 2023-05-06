<?php
session_start();
 require_once __DIR__ . '/includes/header.php' 
 ?>
 <?php require_once __DIR__ . '/includes/navbar.php';?>
 <div class="container">
    <div class="row mt-3">
        <!-- Billing details -->
        <div class="col-md-7 billing-section" >
            <form action="" method="post">
                <div class="row">
                    <h4>Billing Details</h4>
                    <div class="col-md-6 mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" id="fname"> 
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" id="lname"> 
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone" class="form-control" name="phone" id="phone">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email"> 
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <textarea name="address" id="address"></textarea>
                </div>

                <div class="mb-3">Mode of payment
                <label for="COD" style="display: block;">
                    <input type="radio" name="payment" id="COD" value="COD"/>
                    Cash on Delivery
                </label>
                
                <label for="paypal" style="display: block;">
                    <input type="radio" name="payment" id="paypal" value="paypal"/>
                    Paypal
                </label>
                
                <label for="mpesa" style="display: block;">
                    <input type="radio" name="payment" id="mpesa" value="mpesa"/>
                    Mpesa
                </label>
            </div>
            </form>
        </div>
        <!-- Cart details on the side -->
        <div class="col-md-3 border p-4 ms-5">
            <h4 class="text-center">Your Cart</h4>
            <?php
            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) :
                foreach ($_SESSION['cart'] as $key => $value) :?>
                <div class="cart d-flex justify-content-evenly">
                    <div><b><?php echo $value['name']?>:</b></div>
                    <div>Ksh <?php echo $value['price']?></div>
                </div>   
                <?php endforeach ?>
                <p>
                <?php
                    if (isset($total)) {
                        echo $total;
                    }?>
               </p>
            <?php endif?>
        </div>
    </div>
 </div>
 <?php
 require_once __DIR__ . '/includes/footer.php'; ?>