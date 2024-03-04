<!doctype html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> thepromaxnetwork - Dashboard</title>
        <!-- Bootstrap CSS -->
    <link href="/assets/global/css/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/global/css/admin.css" rel="stylesheet">

    <link href="/assets/global/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/assets/global/css/line-awesome.min.css" />

    <link rel="stylesheet" href="/assets/templates/metro_hyip/css/main.css">

    <link rel="stylesheet" href="/assets/templates/metro_hyip/css/custom.css">

    
    
    <link rel="stylesheet" href="/assets/templates/metro_hyip/css/color.php?base_color=6fd521&secondary_color=3602af">
</head>

<body>
    
    <div class="preloader">
        <div class="loader-p"></div>
    </div>

    <div class="body-overlay"></div>

    <div class="sidebar-overlay"></div>

    <a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>

<!-- Header Top -->
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="list list--row header-menu">
                    <li>
							<a href="#" class="helpline-btn rounded-pill ">
								<span class="login-btn__icon">
									<i class="las la-user"></i>
								</span>
								<span class="login-btn__text">Helpline</span>
							</a>
                    </li>
                    <li>
													<a href="/user/dashboard" class="login-btn rounded-pill">
								<span class="login-btn__icon">
									<i class="las la-tachometer-alt"></i>
								</span>
								<span class="login-btn__text">Dashboard</span>
							</a>
						                    </li>
                </ul>
			</div>
		</div>
	</div>
</div>    <div class="dashboard-fluid position-relative">
        <div class="dashboard__inner">
            <div class="sidebar-menu">
    <span class="sidebar-menu__close d-xl-none d-block"><i class="las la-times"></i></span>
    <!-- Sidebar Logo Start -->
    <!--<div class="sidebar-logo">-->
    <!--    <a href="https://thepromaxnetwork.com" class="sidebar-logo__link"> <img-->
    <!--            src="https://thepromaxnetwork.com/assets/images/logoIcon/logo.png" alt="site-logo"></a>-->
    <!--</div>-->
    <!-- Sidebar Logo End -->
    <!--==== account start ==== -->
        
    
    <aside class="user-info-wrapper" id="desktop-sidebar">
        <div class="user-info">
            <body onload="startTime()">

<h5 class="py-3" id="txt"></h5>

<script>
function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>

</body>
            <div class="user-avatar">
                <img id="profile-pic" src="<?php echo get_user_profile_picture(); ?>" alt="User">
                <div class="circle   grey-circle " title="Verified">
                    <i class="fa fa-check text-white"></i>
                </div>
            </div>
            <div class="user-data mb-3">
                <h4 class="h5"><?php echo get_field('name',auth()->id(), 'user'); ?></h4>
                <span>Joined : <br> <b>2024-02-01 16:27:27</b></span>
            </div>
        </div>
    </aside>
    
    <div class="balance">
        <div class="balance__item">
            <h6 class=" text-center">My Balance</h6>
            <h5 class="balance__item-number text-center"> 0.00 <span
                    class="balance__item-currency">BDT</span> </h5>
        </div>
        <div class="balance__button">
                        <a href="/user/payment" class="balance__button-one style-one"> Active </a>
                        <a href="/user/withdraw" class="balance__button-one style-two"> Withdraw </a>
        </div>
    </div>
    <!--===== account end ===== -->

    <!-- ========= Sidebar Menu Start ================ -->
    <ul class="sidebar-menu-list mt-5">
        <li class="sidebar-menu-list__item active ">
            <a href="/user/dashboard" class="sidebar-menu-list__link ">
                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <!--<li class="sidebar-menu-list__item  ">-->
        <!--    <a href="https://thepromaxnetwork.com/user/payment" class="sidebar-menu-list__link ">-->
        <!--        <span class="icon"><i class="fas fa-funnel-dollar"></i></span>-->
        <!--        <span class="text">Investment</span>-->
        <!--    </a>-->
        <!--</li>-->
        <!--<li class="sidebar-menu-list__item has-dropdown ">-->
        <!--    <a href="javascript:void(0)" class="sidebar-menu-list__link">-->
        <!--        <span class="icon"><i class="fas fa-wallet"></i></span>-->
        <!--        <span class="text">Deposit</span>-->
        <!--    </a>-->
        <!--    <div class="sidebar-submenu">-->
        <!--        <ul class="sidebar-submenu-list">-->
        <!--            <li class="sidebar-submenu-list__item ">-->
        <!--                <a href="https://thepromaxnetwork.com/user/deposit"-->
        <!--                    class="sidebar-submenu-list__link">Deposit Now</a>-->
        <!--            </li>-->
        <!--            <li class="sidebar-submenu-list__item ">-->
        <!--                <a href="https://thepromaxnetwork.com/user/deposit/history"-->
        <!--                    class="sidebar-submenu-list__link">Deposit History</a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</li>-->
        
        <!--<li class="sidebar-menu-list__item has-dropdown ">-->
        <!--    <a href="javascript:void(0)" class="sidebar-menu-list__link">-->
        <!--        <span class="icon"><i class="fas fa-hand-holding-usd"></i></span>-->
        <!--        <span class="text">My Jobs</span>   <span class="badge badge-pill badge--success">New</span>-->
        <!--    </a>-->
        <!--    <div class="sidebar-submenu ">-->
        <!--        <ul class="sidebar-submenu-list">-->
        <!--            <li class="sidebar-submenu-list__item ">-->
        <!--                <a href="https://thepromaxnetwork.com/user/my-jobs"-->
        <!--                    class="sidebar-submenu-list__link">Ads</a>-->
        <!--            </li>-->
        <!--            -->
        <!--            <li class="sidebar-submenu-list__item ">-->
        <!--                <a href="https://thepromaxnetwork.com/user/my-jobs/clicks"-->
        <!--                    class="sidebar-submenu-list__link">Job History</a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</li>-->
        
        <li class="sidebar-menu-list__item ">
            <a href="/user/my-jobs" class="sidebar-menu-list__link">
                <span class="icon"> <i class="fas fa-hand-holding-usd"></i> </span>
                <span class="text"> My Jobs </span>    <span class="badge badge-pill badge--danger">Hot</span>
            </a>
        </li>
                
                
        <li class="sidebar-menu-list__item">
            <a href="#" class="sidebar-menu-list__link">
                <span class="icon"> <i class="fas fas fa-store"></i> </span>
                <span class="text"> Pro Max Shop</span>    <span class="badge badge-pill badge--success">New</span>
            </a>
        </li>
        <li class="sidebar-menu-list__item ">
            <a href="/user/promote" class="sidebar-menu-list__link">
                <span class="icon"> <i class="fas fas fa-business-time"></i> </span>
                <span class="text"> Promote Your Business <!--</span>    <span class="badge badge-pill badge--danger">Upcoming</span>-->
            </a>
        </li>
        <!--<li class="sidebar-menu-list__item">-->
        <!--    <a href="https://thepromaxnetwork.com/user/dashboard" class="sidebar-menu-list__link">-->
        <!--        <span class="icon"> <i class="las la-crown"></i> </span>-->
        <!--        <span class="text"> Game Shop </span>     <span class="badge badge-pill badge--danger">Upcoming</span>-->
        <!--    </a>-->
        <!--</li>-->
        <!--<li class="sidebar-menu-list__item">-->
        <!--    <a href="https://thepromaxnetwork.com/user/dashboard" class="sidebar-menu-list__link">-->
        <!--        <span class="icon"> <i class="las la-download"></i> </span>-->
        <!--        <span class="text"> Top-UP </span>     <span class="badge badge-pill badge--danger">Upcoming</span>-->
        <!--    </a>-->
        <!--</li>-->
        <!--<li class="sidebar-menu-list__item has-dropdown ">-->
        <!--    <a href="javascript:void(0)" class="sidebar-menu-list__link">-->
        <!--        <span class="icon"><i class="fas fa-hand-holding-usd"></i></span>-->
        <!--        <span class="text">Withdraw</span>-->
        <!--    </a>-->
        <!--    <div class="sidebar-submenu ">-->
        <!--        <ul class="sidebar-submenu-list">-->
        <!--            <li class="sidebar-submenu-list__item ">-->
        <!--                <a href="https://thepromaxnetwork.com/user/withdraw"-->
        <!--                    class="sidebar-submenu-list__link">Withdraw Now</a>-->
        <!--            </li>-->
        <!--            <li class="sidebar-submenu-list__item ">-->
        <!--                <a href="https://thepromaxnetwork.com/user/withdraw/history"-->
        <!--                    class="sidebar-submenu-list__link">Withdraw History</a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</li>-->
        
        <li class="sidebar-menu-list__item ">
            <a href="/user/promote" class="sidebar-menu-list__link">
                <span class="icon"> <i class="fas fa-hand-holding-usd"></i> </span>
                <span class="text"> Withdraw </span>
            </a>
        </li>
        
        <li class="sidebar-menu-list__item">
            <a href="/user/dashboard" class="sidebar-menu-list__link">
                <span class="icon"> <i class="fas fa-handshake"></i> </span>
                <span class="text"> Notice </span>
            </a>
        </li>

                <li class="sidebar-menu-list__item ">
            <a href="/user/transactions" class="sidebar-menu-list__link">
                <span class="icon"> <i class="fas fa-exchange-alt"></i> </span>
                <span class="text"> Transactions </span>
            </a>
        </li>
        <li class="sidebar-menu-list__item ">
            <a href="/user/generation" class="sidebar-menu-list__link">
                <span class="icon"> <i class="fas fa-users"></i> </span>
                <span class="text"> My Generations </span>
            </a>
        </li>

        
                
        <li class="sidebar-menu-list__item has-dropdown ">
            <a href="javascript:void(0)" class="sidebar-menu-list__link">
                <span class="icon"><i class="fas fa-ticket-alt"></i></span>
                <span class="text">Support Ticket</span>
            </a>
            <div class="sidebar-submenu ">
                <ul class="sidebar-submenu-list">
                    <li class="sidebar-submenu-list__item active">
                        <a href="/user/ticket/new"
                            class="sidebar-submenu-list__link">Open Ticket</a>
                    </li>
                    <li class="sidebar-submenu-list__item">
                        <a href="/user/ticket"
                            class="sidebar-submenu-list__link">My Tickets</a>
                    </li>

                </ul>
            </div>
        </li>
        <!-- <li class="sidebar-menu-list__item ">
            <a href="https://thepromaxnetwork.com/user/twofactor" class="sidebar-menu-list__link">
                <span class="icon"><i class="fas fa-lock"></i></span>
                <span class="text"> 2FA Security </span>
            </a>
        </li> -->
        <li class="sidebar-menu-list__item">
            <a href="/" class="sidebar-menu-list__link">
                <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>

    <div class="bottom-footer py-3">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-12 text-center">
                    <div class="bottom-footer-text text-white"> &copy; 2024
                        <a href="#">thepromaxnetwork</a> All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========= Sidebar Menu End ================ -->
