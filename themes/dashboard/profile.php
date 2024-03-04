<?php



get_dashboard_header(); ?>
</div>
            <div class="dashboard__right">
            <?php echo get_user_info(); ?>

<div class="dashboard-body__bar d-xl-none d-block mt-2 text-end">
    <span class="dashboard-body__bar-icon"><i class="las la-bars"></i></span>
</div>
                <div class="dashboard-body">
                    <div class="mt-60">
            <div class="row">
                <div class="col-lg-4 mb-30">
                    <div class="card custom--card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h4 class=""><?php echo htmlspecialchars(get_field('name',auth()->id(), 'user'));?></h4>
                                                            </div>
                            <ul class="list-group">

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="las la-user base--color"></i> Username</span> <span class="fw-bold"><?php echo htmlspecialchars(auth()->getUsername());?></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="las la-envelope base--color"></i> Email</span> <span class="fw-bold"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="681b0009090c1e5b5f280f05090104460b0705"><?php echo htmlspecialchars(auth()->getEmail());?></a></span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="las la-phone base--color"></i> Mobile</span> <span class="fw-bold"><?php echo htmlspecialchars(get_field('phone_number',auth()->id(), 'user'));?></span>
                                </li>

                                <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="las la-globe base--color"></i> Country</span> <span class="fw-bold">Bangladesh</span>
                                </li> -->

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card custom--card">
                        <div class="card-body">
                            <form class="register" action="/profile" method="POST">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="form--label">Name</label>
                                        <input type="text" class="form--control" name="name" value="<?php echo htmlspecialchars(get_field('name',auth()->id(), 'user'));?>" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="form--label">User Name</label>
                                        <input type="text" class="form--control" name="username" readonly="" value="<?php echo htmlspecialchars(auth()->getUsername());?>" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="form--label">Phone Number</label>
                                        <input type="number" class="form--control" name="phone_number" value="<?php echo htmlspecialchars(get_field('phone_number',auth()->id(), 'user'));?>" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="form--label">Email</label>
                                        <input type="text" class="form--control" name="email" readonly="" value="<?php echo htmlspecialchars(auth()->getEmail());?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="form--label">State</label>
                                        <input type="file" class="form--control" name="profile_pic" value="<?php echo htmlspecialchars(get_field('profile_pic',auth()->id(), 'user'));?>">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label class="form--label">Address</label>
                                        <input type="text" class="form--control" name="address" value="<?php echo htmlspecialchars(get_field('address',auth()->id(), 'user'));?>">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label class="form--label">Zip Code</label>
                                        <input type="text" class="form--control" name="zip" value="<?php echo htmlspecialchars(get_field('zip',auth()->id(), 'user'));?>">
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label class="form--label">City</label>
                                        <input type="text" class="form--control" name="city" value="<?php echo htmlspecialchars(get_field('city',auth()->id(), 'user'));?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn--base w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php get_dashboard_footer(); ?>