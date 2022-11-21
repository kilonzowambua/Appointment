<!-- Update Modal -->
<div class="modal fade fixed-right" id="update_<?php echo $auth['auth_id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog  modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <div class="text-bold">
                    <h6 class="text-bold">Update User </h6>
                </div>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">User First Name</label>
                            <!-- Hide This -->
                            <input type="hidden" required name="auth_id" value="<?php echo $auth['auth_id']; ?>" class=" form-control">
                            <input type="text" required name="auth_first_name" value="<?php echo $auth['auth_first_name']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">User Last Name</label>
                            <input type="text" required name="auth_last_name" value="<?php echo $auth['auth_last_name']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">User Email</label>
                            <input type="text" required name="auth_email" value="<?php echo $auth['auth_email']; ?>" class="form-control">
                        </div>

                    </div>
                    <div class="text-right">
                        <button type="submit" name="Update_user" class="btn btn-warning">Update</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->