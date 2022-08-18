  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dokumen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dokumen</li>
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
                <h3 class="card-title">Dokumen</h3>
              </div>
              <!-- /.card-header -->
              <?php foreach($user as $u){ ?>
              <!-- form start -->
              <form action="<?php echo site_url('C_admin/update_data_surat')?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="id_surat" value="<?php echo $u->id_surat ?>" class="form-control" id="exampleInputEmail1" placeholder="Judul Dokumen">
                    <label for="exampleInputEmail1">Dokumen</label>
                    <input type="text" name="judul_surat" value="<?php echo $u->judul_surat ?>" class="form-control" id="exampleInputEmail1" placeholder="Judul Dokumen">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">link</label>
                    <input type="text" name="link" value="<?php echo $u->link ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Link Google Drive">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                      <select class="form-control select2" name="status" style="width: 100%;">
                        <option value="<?php echo $u->status ?>" selected="selected"><?php echo $u->status ?></option>
                        <option value="rahasia">Silahkan Masukkan Status</option>
                        <option value="rahasia">Rahasia</option>
                        <option value="publik">Publik</option>
                      </select>
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