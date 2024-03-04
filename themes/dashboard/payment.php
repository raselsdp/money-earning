<?php get_dashboard_header(); ?>
</div>
            <div class="dashboard__right">
            <?php get_user_info(); ?>

<div class="dashboard-body__bar d-xl-none d-block mt-2 text-end">
    <span class="dashboard-body__bar-icon"><i class="las la-bars"></i></span>
</div>
                <div class="dashboard-body">
                <style>
    #payment {
        display: none;
    }
</style>
<div class="bg--base p-3 rounded text-center">
                        <p class="p-0"><i class="fa fa-question-circle fa-3x text-warning p-0" aria-hidden="true"></i>
                        </p><br>
                        <h5 class="text-center text-white p-0 m-0 bolder">প্রথমে যে মাধ্যমে টাকা পাঠাতে চান সেটি সিলেক্ট করুন *
                        </h5>
                    </div>
<div class="row justify-content-center align-item-center">
                        <div class="col-lg-8 py-3">
                            <div class="row justify-content-center pt-5">
                                <div class="col-4 mb-3">
                                    <div class="card text-center justify-content-center align-item-center shadow"
                                        data-number="01327922787" data-amount="100" data-mt="1000" id="bKash" data-image="https://theshopx.net/assets/gateways/bkash.png" onClick="showDetails(this)" style="cursor: pointer">
                                        <div class="card-img-container">
                                            <img src="https://theshopx.net/assets/gateways/bkash.png"
                                                class="card-img-top img-fluid w-75 p-2 mx-auto" alt="Payment Method">
                                        </div>
                                        <div class="card-footer text-center"
                                            style="background-color: #d12053 !important;">
                                            <h5 class="card-title text-white m-0 p-0">বিকাশ</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div class="card text-center justify-content-center align-item-center shadow"
                                        data-number="01327922787" data-amount="100" data-mt="1001" id="Nagad" data-image="https://theshopx.net/assets/gateways/nagad.png" onClick="showDetails(this)" style="cursor: pointer">
                                        <div class="card-img-container">
                                            <img src="https://theshopx.net/assets/gateways/nagad.png"
                                                class="card-img-top img-fluid w-75 p-2 mx-auto" alt="Payment Method">
                                        </div>
                                        <div class="card-footer text-center"
                                            style="background-color: #f6921e !important;">
                                            <h5 class="card-title text-white m-0 p-0">নগদ</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mb-3">
                                    <div class="card text-center justify-content-center align-item-center shadow"
                                        data-number="00" data-amount="100" data-mt="1002" id="Rocket" data-image="https://theshopx.net/assets/gateways/rocket.png" onClick="showDetails(this)" style="cursor: pointer">
                                        <div class="card-img-container">
                                            <img src="https://theshopx.net/assets/gateways/rocket.png"
                                                class="card-img-top img-fluid w-75 p-2 mx-auto" alt="Payment Method">
                                        </div>
                                        <div class="card-footer text-center"
                                            style="background-color: #f6921e !important;">
                                            <h5 class="card-title text-white m-0 p-0">রকেট</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="instraction" class="row justify-content-center align-item-center"></div></div><br>
                        
<div class="justify-content-center align-item-center border border-info  shadow p-3 rounded">
    <form method="POST" id="payment">
    <input type="hidden" name="_token" value="p42hIZpkfCiQmITCQTXALFHpFSWGvCPwu2VOave1">    <input type="hidden" name="id" value="1"  class="form-control form--control">
    <!--<label for="send_from_number" class="form--label required">যে নম্বর থেকে টাকা পাঠিয়েছেন? *</label>-->
    <input type="text" name="send_from_number" placeholder="যে নম্বর থেকে টাকা পাঠিয়েছেন সেটি দিন" class="form-control form--control"><br>
    <!--<label for="transaction_id" class="form--label required">পেমেন্ট এর ট্রান্সাকশন নম্বরটি কত? *</label>-->
    <input type="text" name="transaction_id" placeholder="পেমেন্ট এর ট্রান্সাকশন নম্বরটি প্রদান করুন" class="form-control form--control">
    <input type="hidden" id="method_code" name="method_code" value="1000">
    <input type="hidden" id="gateway" name="gateway" value="bKash"><br>
    <div class="justify-content-center align-item-center text-center">
                        <p class="text-success pt-3 text-center bolder">পেমেন্ট এর তথ্য সঠিক কিনা তা ভেরিভাই করতে নিচের <i class="text-primary">Verify Payment</i> বাটনে ক্লিক
                            করুন</p>
    <input type="submit" onclick="this.style.display='none';" class="btn btn--base w-100" value="Verify Payment">
    </div>
</form>
</div>
                </div>
            </div>
        </div>
    </div>
    <?php get_dashboard_footer(); ?>