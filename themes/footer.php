 
        <footer class="footer-area pt-60">
    <div class="footer-area-inner bg-img"
        style="background-image: url(https://thepromaxnetwork.com/assets/templates/ptc_diamond/images/shapes/footer-05.png);">
        <div class="footer-area__bg">
        </div>
        <div class="pb-60 pt-120">
            <div class="container">
                <div class="row justify-content-center gy-5">
                    <div class="col-xl-3 col-sm-6">
                        <div class="footer-item">
                            <div class="footer-item__logo">
                                <a href="https://thepromaxnetwork.com"> <img
                                        src="<?php echo get_site_logo();?>" alt=""></a>
                            </div>
						<h4 class="mt-0 footer__title">About Us</h4>
						<p class="footer__description text--white">
							thepromaxnetwork  এ আপনাকে স্বাগতম।
						</p>
                        </div>
                    </div>
                    <!--<div class="col-xl-1 d-xl-block d-none"></div>-->
                    <!--<div class="col-xl-2 col-sm-6">-->
                    <!--    <div class="footer-item">-->
                    <!--        <h5 class="footer-item__title">Site Link</h5>-->
                    <!--        <ul class="footer-menu">-->
                    <!--            <li class="footer-menu__item"><a href="https://thepromaxnetwork.com"-->
                    <!--                    class="footer-menu__link">Home</a>-->
                    <!--            </li>-->
                    <!--            -->
                    <!--                <li class="footer-menu__item"><a href="https://thepromaxnetwork.com/policy/privacy-and-policy/179" class="footer-menu__link">Privacy and Policy</a>-->
                    <!--                </li>-->
                    <!--            -->
                    <!--                <li class="footer-menu__item"><a href="https://thepromaxnetwork.com/policy/payment-policy/180" class="footer-menu__link">Payment Policy</a>-->
                    <!--                </li>-->
                    <!--            -->
                    <!--                <li class="footer-menu__item"><a href="https://thepromaxnetwork.com/policy/support-policy/181" class="footer-menu__link">Support Policy</a>-->
                    <!--                </li>-->
                    <!--            -->
                    <!--        </ul>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="col-xl-2 col-sm-6">-->
                    <!--    <div class="footer-item">-->
                    <!--        <h5 class="footer-item__title"> Important Link </h5>-->
                    <!--        <ul class="footer-menu">-->
                    <!--            <li class="footer-menu__item"><a href="https://thepromaxnetwork.com/plans" class="footer-menu__link">  Plan</a></li>-->
                    <!--            <li class="footer-menu__item"><a href="https://thepromaxnetwork.com/blog" class="footer-menu__link">Blog-->
                    <!--                </a></li>-->
                    <!--            <li class="footer-menu__item"><a href="https://thepromaxnetwork.com/contact" class="footer-menu__link">Contact Us </a></li>-->
                    <!--        </ul>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-xl-1 d-xl-block d-none"></div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="footer-item">
                            <h5 class="footer-item__title">Contact Info</h5>
                            <ul class="footer-contact-menu">
                                                                <li class="footer-contact-menu__item">
                                    <div class="footer-contact-menu__item-icon">
                                        <i class="far fa-envelope"></i>                                    </div>
                                    <div class="footer-contact-menu__item-content">
                                        <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b282e2b2b34292f1b3e233a362b373e752b2934">[email&#160;protected]</a> </p>
                                    </div>
                                </li>
                                                                <li class="footer-contact-menu__item">
                                    <div class="footer-contact-menu__item-icon">
                                        <i class="fas fa-map-marker-alt"></i>                                    </div>
                                    <div class="footer-contact-menu__item-content">
                                        <p>Dhaka. Bangladesh </p>
                                    </div>
                                </li>
                                                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top End-->

        <!-- bottom Footer -->
        <div class="bottom-footer py-3">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-md-12 text-center">
                        <div class="bottom-footer-text"> &copy; 2024 <a
                                href="https://thepromaxnetwork.com">thepromaxnetwork</a> All Rights Reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    

        
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/assets/global/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/global/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/templates/metro_hyip/js/main.js"></script>

        
    <script>
                        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                        (function(){
                        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                        s1.async=true;
                        s1.src="https://embed.tawk.to/aaaaaaa";
                        s1.charset="UTF-8";
                        s1.setAttribute("crossorigin","*");
                        s0.parentNode.insertBefore(s1,s0);
                        })();
                    </script>
    <link rel="stylesheet" href="/assets/global/css/iziToast.min.css">
<script src="/assets/global/js/iziToast.min.js"></script>

<script>
    "use strict";

    function notify(status, message) {
        if (typeof message == 'string') {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        } else {
            $.each(message, function(i, val) {
                iziToast[status]({
                    message: val,
                    position: "topRight"
                });
            });
        }
    }
</script>

    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "https://thepromaxnetwork.com/change/" + $(this).val();
            });

            $('.policy').on('click', function() {
                $.get('https://thepromaxnetwork.com/cookie/accept', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            var inputElements = $('[type=text],[type=password],[type=email],[type=number],select,textarea');
            $.each(inputElements, function(index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });

            $.each($('input, select, textarea'), function(i, element) {
                var elementType = $(element);
                if (elementType.attr('type') != 'checkbox') {
                    if (element.hasAttribute('required')) {
                        $(element).closest('.form-group').find('label').addClass('required');
                    }
                }
            });

            Array.from(document.querySelectorAll('table')).forEach(table => {
                let heading = table.querySelectorAll('thead tr th');
                Array.from(table.querySelectorAll('tbody tr')).forEach((row) => {
                    Array.from(row.querySelectorAll('td')).forEach((colum, i) => {
                        colum.setAttribute('data-label', heading[i].innerText)
                    });
                });
            });

        })(jQuery);
    </script>

</body>

</html>
