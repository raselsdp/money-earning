<?php




get_header(); ?>  


                    <section class="breadcumb ">
    <div class="breadcumb__inner bg-img" style="background-image: url(https://thepromaxnetwork.com/assets/templates/ptc_diamond/images/shapes/bd-1.png);">
        <div class="breadcumb__bg"></div>
    <div class="container">
        <div class="row ">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h2 class="breadcumb__title"> Login</h2>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="https://thepromaxnetwork.com" class="breadcumb__link"> <i class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item">//</li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> Login </span> </li>
                    </ul>
                </div>
            </div>
        </div>
     </div>
   </div>
</section>
                
                
   <section class="account ">
        <div class="container">
            <div class="account-wrapper">
                <div class="account-wrapper-inner">
                    <div class="account-shape-one">
                        <img src="https://thepromaxnetwork.com/assets/templates/ptc_diamond/images/shapes/invest02.png" alt="">
                    </div>
                    <div class="account-shape-two">
                        <img src="https://thepromaxnetwork.com/assets/templates/ptc_diamond/images/shapes/invest01.png" alt="">
                    </div>
                    <div class="row gy-4 justify-content-center align-items-center">
                        <div class="col-xl-6">
                            <div class="account-form">
                                <div class="account-form__content mb-4">
                                    <h2 class="account-form__title mb-2"> Login </h2>
                                    <div class="col-sm-12">
                                        <div class="have-account">
                                            
                                            <?php 
                                                if(isset($_SESSION['error'])){
                                                    echo '<p class="have-account__text">'.$_SESSION['error'].'</p>';
                                                    unset($_SESSION['error']);
                                                }
                                            ?>

                                            <p class="have-account__text">Don't Have An Account ?
                                                <a href="https://thepromaxnetwork.com/user/register"
                                                    class="have-account__link text-white underline">Create Account</a>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <form action="/login" method="POST" class="verify-gcaptcha">
                                        <div class="col-sm-12">
                                            <label for="username" class="form--label">Username or Email</label>
                                            <div class="form-group">
                                                <input type="text" class="form--control" id="username" name="email"
                                                    value="" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="password" class="form--label">Password</label>
                                            <div class="form-group">
                                                <input id="password" type="password" name="password" class="form--control">
                                                <div class="password-show-hide fas fa-eye toggle-password fa-eye-slash"
                                                    id="#password"></div>
                                            </div>
                                        </div>

                                        
                                        <div class="form-group col-sm-12">
                                            <div class="d-flex flex-wrap justify-content-between">
                                                <div class="form--check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" >
                                                    <label class="form-check-label w-auto" for="remember">Remember me                                                    </label>
                                                </div>
                                                <a href="/"
                                                    class="forgot-password">Forgot Your Password ?</a>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <button type="submit" id="recaptcha"
                                                class="btn btn--base w-100">Login</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="account-thumb">
                                <img src="https://thepromaxnetwork.com/placeholder-image/455x405"
                                    alt="Register Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       
       
      <?php get_footer(); ?>