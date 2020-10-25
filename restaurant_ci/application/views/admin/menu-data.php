<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Menu Data</h1>
<p class="mb-4"></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex justify-content-between align-items-center">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Menu</h6>
    <div>
      <button class="btn btn-success btn-icon-split" onclick="window.location.href='#modal-new-menu'">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text">Add Menu</span>
      </button>
      <a href="#" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-print"></i>
        </span>
        <span class="text">Print Data</span>
      </a>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>MenuID</th>
            <th>MenuName</th>
            <th>MenuPrice</th>
            <th>CreateData</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>MenuID</th>
            <th>MenuName</th>
            <th>MenuPrice</th>
            <th>CreateData</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            $x = 1; 
            foreach ($menu as $mn) : 
          ?>
          <tr>
            <td><?= $x++;?></td>
            <td><?= $mn['menuID'];?></td>
            <td><?= $mn['menuName'];?></td>
            <td>Rp. <?= number_format($mn['menuPrice']);?></td>
            <td><?= $mn['menuDate'];?></td>
            <td class="d-flex justify-content-around">
              <a href="#" class="btn btn-success btn-circle btn-sm" title="Edit">
                <i class="fas fa-pen"></i>
              </a> 
              <a href="#"class="btn btn-danger btn-circle btn-sm" title="Delete">
                <i class="fas fa-trash"></i>
              </a> 
              <a href="#" class="btn btn-info btn-circle btn-sm" title="Info">
                <i class="fas fa-info-circle"></i>
              </a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->