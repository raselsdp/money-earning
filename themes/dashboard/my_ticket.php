<?php get_dashboard_header(); ?>

</div>
            <div class="dashboard__right">
                
            <?php get_user_info(); ?>

<div class="dashboard-body__bar d-xl-none d-block mt-2 text-end">
    <span class="dashboard-body__bar-icon"><i class="las la-bars"></i></span>
</div>
                <div class="dashboard-body">
                    <div class="row">
        <div class="col-md-12">
            <div class="table-section">
                <table class="table style-two table--responsive--lg">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Priority</th>
                            <th>Last Reply</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                                                    <tr>
                                <td colspan="100%" class="text-center">Data not found</td>
                            </tr>
                                            </tbody>
                </table>

                            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_dashboard_footer(); ?>