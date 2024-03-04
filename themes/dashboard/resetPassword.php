<?php




get_dashboard_header(); ?>

</div>
            <div class="dashboard__right">

            <?php echo get_user_info(); ?>

<div class="dashboard-body__bar d-xl-none d-block mt-2 text-end">
    <span class="dashboard-body__bar-icon"><i class="las la-bars"></i></span>
</div>
                <div class="dashboard-body">
                    <div class="card custom--card">
    <div class="card-body">

        <form action="" method="post">
            <input type="hidden" name="_token" value="kTNdyU5ZJ7VBxkHKr9F8wjKXuyDAjK4cKay9vy6M">            <div class="form-group">
                <label class="form-label">Current Password</label>
                <input type="password" class="form-control form--control" name="current_password" required autocomplete="current-password">
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" class="form-control form--control" name="password" required autocomplete="current-password">
                            </div>
            <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control form--control" name="password_confirmation" required autocomplete="current-password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn--base btn--lg w-100">Submit</button>
            </div>
        </form>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
   

    <?php get_dashboard_footer(); ?>