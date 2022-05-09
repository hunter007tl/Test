   
   	 <!-- Content Header (Page header) -->
    <section class="content-header container-fluid">
      <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('admin-dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Users My Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">

        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs" style="border-color: #605ca8;">
              <li class="active"><a href="#info" data-toggle="tab">My Info</a></li>
              <li><a href="#reset" data-toggle="tab">Reset Password</a></li>
            </ul>
            <div class="tab-content">

              <div class="active tab-pane" id="info">
                <?php foreach($users as $s){ ?>
                <form class="form-horizontal" action="<?php echo site_url('users/update_profile') ?>" method="post" role="form" id="validation">

                  <input type="hidden" class="form-control" name="user_id" placeholder="User Name" value="<?php echo $s->user_id ?>" readonly>
                  <input type="hidden" name="slug" class="form-control preview_slug" placeholder="Clean Url" readonly>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">User Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control user_name" name="user_name" placeholder="User Name" value="<?php echo $s->user_name ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">User Level</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" placeholder="User Level" value="<?php echo $s->user_level ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">User Status</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="User Status" value="<?php echo $s->user_status ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn bg-purple">Update</button>
                    </div>
                  </div>
                </form>
                <?php } ?>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="reset">
                <form class="form-horizontal" action="<?php echo site_url('users/update_password') ?>" method="post" role="form" id="validation2">

                  <input type="hidden" class="form-control" name="user_id" placeholder="User Name" value="<?php echo $s->user_id ?>" readonly>
                  <input type="hidden" name="slug" class="form-control preview_slug" placeholder="Clean Url" value="<?php echo $s->user_slug ?>" readonly>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="user_password" placeholder="New Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn bg-purple">Update</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->



<script>
    $(document).ready(function() {
    $('#validation').bootstrapValidator({
        fields: {
            container: '#messages',
            user_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter user name'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
        },
    });

});
</script>

<script>
    $(document).ready(function() {
    $('#validation2').bootstrapValidator({
        fields: {
            container: '#messages',
            user_password: {
                validators: {
                    notEmpty: {
                        message: 'Please enter password'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The username must be more than 6 caracter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                },
            },
        },
    });
});
</script>

<script type="text/javascript">
  var slug = function(str) {
      var $slug = '';
      var trimmed = $.trim(str);
      $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
      replace(/-+/g, '-').
      replace(/^-|-$/g, '');
      return $slug.toLowerCase();
  }
  $('.user_name').on('keyup',function(){
    $('.preview_slug').val(slug($(this).val()));
  });
</script>