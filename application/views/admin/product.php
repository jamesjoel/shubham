

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products
        <small>Control panel</small>
        <button data-toggle="modal" data-target="#addModal" class="btn btn-info">Add New</button>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <table class="table table-hover table-bordered table-stripped">
          <tr>
            <th>S.No.</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>View</th>
          </tr>
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
        <form>
        <div class="modal-header">
          <h3>Add New Product</h3>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Product Price</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Product Category</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Product Detail</label>
            <textarea class="form-control"></textarea>
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