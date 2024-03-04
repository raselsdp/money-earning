<div class="dashboard-header">

    <div class="dashboard-header__inner">
        <div class="dashboard-header__left">
            <h4 class="dashboard-header__left-title"> Support Tickets </h4>
        </div>
        <div class="dashboard-header__right">
            <div class="user-info">
                <div class="user-info__button">
                    <div class="user-info__info">

                        <span class="user-info__thumb">
                            <?php get_user_profile_picture(); ?>
                        </span>

                        <ul class="user-info-dropdown">
                            <li class="user-info-dropdown__item"><a class="user-info-dropdown__link"
                                    href="/user/profile">Profile Setting</a></li>
                            <li class="user-info-dropdown__item"><a class="user-info-dropdown__link"
                                    href="/user/change-password">Change Password</a></li>
                                                        <li class="user-info-dropdown__item"><a class="user-info-dropdown__link"
                                    href="/logout">Logout</a></li>
                        </ul>
                        <div class="user-info__content">
                            <div class="d-flex justify-content-around">
                                <span class="user-info__name"><?php echo htmlspecialchars(get_field('name',auth()->id(), 'user'));?></span>
                                <span><i class="las la-angle-down"></i></span>
                            </div>
                            <span class="user-info__link"> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="52213a33333624616512353f333b3e7c313d3f"> <?php echo htmlspecialchars(auth()->getEmail());?> </a> </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>