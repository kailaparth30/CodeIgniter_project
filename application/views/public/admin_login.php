<?php include('public_header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <?php echo form_open('login/admin_login'); ?>

            <h4 class="mt-3 fw-bold">Admin login</h4>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="InputEmail1" class="form-label mt-4 ">username</label>
                        <?php echo form_input(['name' => 'username', 'class' => 'form-control', 'placeholder' => 'username']) ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php echo form_error('username'); ?>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="InputEmail1" class="form-label mt-4 ">password</label>
                        <?php echo form_input(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'password']) ?>
                    </div>
                </div>
            </div>                
            <div class="col-lg-6">
                <?php echo form_error('password'); ?>  
            </div>

            <?php echo form_reset(['name' => 'reset', 'class' => 'btn btn-primary mt-4', 'value' => 'RESET']) ?>
            <?php echo form_submit(['name' => 'submit', 'class' => 'btn btn-primary mt-4 ms-2', 'value' => 'login']) ?>
            </form>
        </div>
    </div>
</div>


<?php include('public_footer.php') ?>