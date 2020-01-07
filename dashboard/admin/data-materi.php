<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Data Materi</h3>
                  <hr>
                  <button type="button" class="col-lg-3 btn btn-block btn-white" data-toggle="modal" data-target="#modal-materi-tambah"><i class="fas fa-align-left"></i> Tambah Data</button>
                </div>
                <div class="modal fade" id="modal-materi-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-materi-tambah" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-transparent pb-0">
                              <div class="text-muted text-center mt-2 mb-3"><small>Masukkan Data</small></div>
                                <div class="card-body px-lg-5 py-lg-5">
                                  
                                  <form action="./proses.php" method="POST"  enctype="multipart/form-data">
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fab fa-glide-g"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="ID" type="hidden" name="id">
                                        <input class="form-control" placeholder="Nama File" type="text" name="nama">
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-file-alt"></i></span>
                                        </div>
                                        <input type="file" name="document" class="form-control">
                                      </div>
                                    </div>
                                    <div class="text-center">
                                      <input type="submit" name="simpan_materi" class="btn btn-primary my-4" value="Proses">
                                    </div>
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
              <div class="table-responsive">
            <?php
            $data_materi = "SELECT materi.id_materi, materi.id_user, users.nama, materi.nama_materi, materi.nama_file FROM materi
            JOIN users ON users.id = materi.id_user";
            $hasil_materi = mysqli_query($koneksi, $data_materi); 

            $record_materi = mysqli_num_rows($hasil_materi);
            ?>
              <!-- Projects table -->
              <table id="tabel-data-user" class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Author</th>
                    <th scope="col">Download / See</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                
            if (($record_materi) > 0) {
              while($row = mysqli_fetch_assoc($hasil_materi)) {
                  echo "<tr>
                    <th scope='row'>" . $row["id_materi"]. "</th>
                    <td>" . $row["nama_materi"]."</td>
                    <td>".$row["nama"]."</td>
                    <td> <a href='../assets/doc/".$row["nama_file"]."'>". $row["nama_materi"] ."</a></td>
                    
                    <td scope='row'>
                      <a href='view-proses-pesanan.php?id=".$row['id_materi']."'><button type='button' class='btn btn-outline-info'>Proses</button></a>
                      <a href='hapus-materi.php?id=".$row['id_materi']."'><button type='button' class='btn btn-outline-danger'>Proses</button></a>
                    </td>
                  </tr>"; ?>
        <?php };
            } else {
              echo "<div class='alert alert-warning text-center' role='alert> 
              <span class='alert-inner--icon><strong>Warning!</strong> Tidak ada data ditemukan</span>
              
              </div>";
            }
                ?>
                
                </tbody>
              </table>
              
            </div>
          </div>
        </div>
      </div>
        </div>