  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Kategori</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kategori</h3>
              </div>
              <!-- /.card-header -->
              <?php foreach($user as $u){ ?>
              <!-- form start -->
              <form action="<?php echo site_url('C_admin/update_data_kategori')?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="id_dokumen" value="<?php echo $u->id_dokumen ?>" class="form-control" id="exampleInputEmail1">
                    <label for="exampleInputEmail1">Kategori</label>
                    <input type="text" name="kategori" value="<?php echo $u->kategori ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Kategori">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <input type="text" name="keterangan" value="<?php echo $u->keterangan ?>" class="form-control" id="exampleInputPassword1" placeholder="Keterangan">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              <?php } ?>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->