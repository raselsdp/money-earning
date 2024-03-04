<?php



 

get_header(); ?>  

                    <section class="breadcumb ">
    <div class="breadcumb__inner bg-img" style="background-image: url(https://thepromaxnetwork.com/assets/templates/ptc_diamond/images/shapes/bd-1.png);">
        <div class="breadcumb__bg"></div>
    <div class="container">
        <div class="row ">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h2 class="breadcumb__title"> Register</h2>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="/" class="breadcumb__link"> <i class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item">/</li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> Register </span> </li>
                    </ul>
                </div>
            </div>
        </div>
     </div>
   </div>
</section>
                
                
    <section class="account">
        <div class="container">
            <div class="account-wrapper">
                <div class="account-wrapper-inner">
                    <div class="account-shape-one">
                        <img src="https://thepromaxnetwork.com/assets/templates/ptc_diamond/images/shapes/invest02.png" alt="">
                    </div>
                    <div class="account-shape-two">
                        <img src="https://thepromaxnetwork.com/assets/templates/ptc_diamond/images/shapes/invest01.png" alt="">
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-6">
                            <div class="account-form">
                                <div class="account-form__content mb-4">
                                    <h2 class="account-form__title my-3"> Register </h2>
                                    <div class="col-sm-12">
                                        <div class="have-account">
                                            <p class="have-account__text">Already Have An Account ?
                                                <a href="/user/login"
                                                    class="have-account__link text-white underline">Login Now</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <form action="/register" method="POST" class="verify-gcaptcha" >
                                    <div class="row">

                            <!-- <div class="col-12">
                                <label for="referenceBy" class="form-label">Refer By Username</label>
                                <input type="text" name="referBy" id="referenceBy" placeholder="" class="form-control form--control" value="" >
                                <span class="text-danger">Defult Reference is: decor150</span>
                            </div> -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="username" class="form--label">Name</label>
                                                <input type="text" name="name" class="form--control checkUser"
                                                    id="username" value="" >
                                                <small class="text--danger usernameExist"></small>
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="username" class="form--label">Username</label>
                                                <input type="text" name="username" class="form--control checkUser"
                                                    id="username" value="" >
                                                <small class="text--danger usernameExist"></small>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email" class="form--label">Email Address</label>
                                                <input type="text" name="email" class="form--control checkUser"
                                                    id="email" value="" >
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country" class="form--label">Country</label>
                                                <select name="country" class="form--control" id="country" >
                                                         <option data-mobile_code="358" value="Aland Islands" data-code="AX">
                                                         </option>
                                                        
                                                        </select>
                                            </div>
                                        </div> -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile" class="form--label">Mobile</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg--base mobile-code">

                                                    </span>
                                                    <input type="number" name="phone_number" value=""
                                                        class="form-control form--control checkUser" id="mobile"
                                                        >
                                                    <small class="text--danger mobileExist"></small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="password" class="form--label">Password</label>
                                                <div class="input-group">
                                                    <input id="your-password" type="password" class="form--control"
                                                        name="password" >
                                                    <div class="password-show-hide fas fa-eye toggle-password fa-eye-slash"
                                                        id="#password"></div>

                                                                                                    </div>
                                            </div>
                                        </div>
                                                                                <div class="col-sm-12">
                                            <button type="submit" id="recaptcha"
                                                class="btn btn--base w-100">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="account-thumb style-two">
                                <img src="/assets/images/singUp_img.png"
                                    alt="Register Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="custom--modal modal fade" id="existModalCenter" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="custom--modal modal-header">
                    <h5 class="modal-title" id="existModalLongTitle">You are with us</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h6 class="text-center">You already have an account please Login </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn--danger btn--sm pill"
                        data-bs-dismiss="modal">Close</button>
                    <a href="/user/login" class="btn btn--base btn--sm pill">Login</a>
                </div>
            </div>
        </div>
    </div>

       
       
      <?php get_footer(); ?>