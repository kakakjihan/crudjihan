             <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">tambah admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="db_admin.php?proses=insert" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama lengkap">nama lengkap</label>
                    <input type="text" class="form-control" id="nama lengkap" name="namalengkap"placeholder="nama anda">
                
                  </div>
                 
                  <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" class="form-control" id="username" name="username"placeholder="username anda">
                  </div>
                  <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password" name="password" placeholder="Password"required>
                  </div>
                  <div class="form-group">
                        <label>select</label>
                        <select class="form-control" name="level">
                          <option value="admin">admin</option>
                          <option value="user">user</option>
                        </select>
                      </div>
                 <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>-->

                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right ml-3"><i class="fa fa-save"></i> Simpan</button>
                  <button type="reset" class="btn btn-warning float-right"><i class="fa fa-retweet"></i>reset</button>
                 
                </div>
              </form>
            </div>