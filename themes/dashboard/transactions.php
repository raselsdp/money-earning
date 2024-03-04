<?php get_dashboard_header(); ?>
</div>
            <div class="dashboard__right">
                
            <?php get_user_info(); ?>

<div class="dashboard-body__bar d-xl-none d-block mt-2 text-end">
    <span class="dashboard-body__bar-icon"><i class="las la-bars"></i></span>
</div>
                <div class="dashboard-body">
                    <section class="pt-3">
        <div class="containerf">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="show-filter mb-3 text-end">
                        <button type="button" class="btn btn--base showFilterBtn btn-sm"><i class="las la-filter"></i>
                            Filter</button>
                    </div>
                    <div class="card custom--card responsive-filter-card mb-4">
                        <div class="card-body">
                            <form action="">
                                <div class="d-flex flex-wrap gap-4">
                                    <div class="flex-grow-1">
                                        <label class="form--label">Transaction Number</label>
                                        <input type="text" name="search" value=""
                                            class="form--control">
                                    </div>
                                    <div class="flex-grow-1">
                                        <label class="form--label">Type</label>
                                        <select name="trx_type" class="form--control">
                                            <option value="">All</option>
                                            <option value="+" >Plus</option>
                                            <option value="-" >Minus</option>
                                        </select>
                                    </div>
                                    <div class="flex-grow-1">
                                        <label class="form--label">Remark</label>
                                        <select class="form--control " name="remark">
                                            <option value="">Any</option>
                                                                                            <option value="active_account" >
                                                    Active account</option>
                                                                                            <option value="balance_add" >
                                                    Balance add</option>
                                                                                            <option value="balance_subtract" >
                                                    Balance subtract</option>
                                                                                            <option value="deposit" >
                                                    Deposit</option>
                                                                                            <option value="ptc_earn" >
                                                    Ptc earn</option>
                                                                                            <option value="referral_commission" >
                                                    Referral commission</option>
                                                                                            <option value="registration_bonus" >
                                                    Registration bonus</option>
                                                                                            <option value="subscribe_plan" >
                                                    Subscribe plan</option>
                                                                                            <option value="withdraw" >
                                                    Withdraw</option>
                                                                                            <option value="withdraw_reject" >
                                                    Withdraw reject</option>
                                                                                    </select>
                                    </div>
                                    <div class="flex-grow-1 align-self-end">
                                        <button class="btn btn--base w-100"><i class="las la-filter"></i>
                                            Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                    <table class="table style-two table--responsive--lg">
                        <thead>
                            <tr>
                                <th>Trx</th>
                                <th>Transacted</th>
                                <th>Amount</th>
                                <th>Post Balance</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                                                            <tr>
                                    <td class="text-muted text-center" colspan="100%">Data not found</td>
                                </tr>
                                                    </tbody>
                    </table>
                                    </div>
            </div>
        </div>
    </section>
                </div>
            </div>
        </div>
    </div>
    <?php get_dashboard_footer(); ?>