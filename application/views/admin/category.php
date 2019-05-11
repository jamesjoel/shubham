

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category
        <small>Control panel</small>
        <button data-toggle="modal" data-target="#addModal" class="btn btn-info">Add New</button>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <table class="table table-hover table-bordered table-stripped">
          <tr>
            <th>S.No.</th>
            <th>Category Name</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          <?php
          foreach($result->result_array() as $data)
          { ?>
            <tr>
              <td><?php echo $data['id']; ?></td>
              <td><?php echo $data['category_name']; ?></td>
              <td><a href="#" class="btn btn-warning">Edit</a></td>
              <td><a href="<?php echo site_url('admin/category/delete/'.$data['id']) ?>" class="btn btn-danger">Delete</a></td>
            </tr>
          <?php
          }
          ?>



        </table>              
      </div>
      <!-- /.row -->
      <!-- Main row -->
    
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


  <div id="addModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?php echo site_url('admin/category/add') ?>" method="post">
        <div class="modal-header">
          <h3>Add New Catgory</h3>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Category Name</label>
            <input name="category_name" type="text" class="form-control">
          </div>
                  </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Add">
          <input type="button" class="btn btn-danger" value="Close" data-dismiss="modal">
        </div>
      </div>
        </form>
    </div>
  </div>