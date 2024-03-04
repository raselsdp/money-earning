<?php get_dashboard_header(); ?>

</div>
            <div class="dashboard__right">
            <?php get_user_info(); ?>

<div class="dashboard-body__bar d-xl-none d-block mt-2 text-end">
    <span class="dashboard-body__bar-icon"><i class="las la-bars"></i></span>
</div>
                <div class="dashboard-body">
                    <div class="mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card custom--card">
                    <div class="card-body">
                        <form action="https://thepromaxnetwork.com/ticket/create" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="p42hIZpkfCiQmITCQTXALFHpFSWGvCPwu2VOave1">                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form--label">Name</label>
                                    <input type="text" name="name"
                                        value="Sohag Islam" class="form--control"
                                        required readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form--label">Email Address</label>
                                    <input type="email" name="email" value="shaadv37@gmail.com" class="form--control"
                                        required readonly>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form--label">Subject</label>
                                    <input type="text" name="subject" value="" class="form--control"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form--label">Priority</label>
                                    <select name="priority" class="form--control" required>
                                        <option value="3">High</option>
                                        <option value="2">Medium</option>
                                        <option value="1">Low</option>
                                    </select>
                                </div>
                                <div class="col-12 form-group">
                                    <label class="form--label">Message</label>
                                    <textarea name="message" rows="4" class="form--control" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="text-end">
                                    <button type="button" class="btn btn--base btn--sm addFile">
                                        <i class="fa fa-plus"></i> Add New                                    </button>
                                </div>
                                <div class="file-upload">
                                    <label class="form--label">Attachments</label> <small
                                        class="text--danger">Max 5 files can be uploaded. Maximum upload size is                                        2M</small>
                                    <input type="file" name="attachments[]" id="inputAttachments"
                                        class="form-control form--control mb-2" />
                                    <div id="fileUploadsContainer"></div>
                                    <p class="ticket-attachments-message text-muted">
                                        Allowed File Extensions: .jpg, .jpeg,
                                        .png, .pdf, .doc,
                                        .docx                                    </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn--base w-100" type="submit"><i
                                        class="fa fa-paper-plane"></i>&nbsp;Submit</button>
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