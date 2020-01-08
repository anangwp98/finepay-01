<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Data User</h3>
                  <hr>
                </div>
              </div>
              <div class="table-responsive">

            <?php

            $data_admin = "SELECT 
            users.id, users.username, users.nama, users.email, users.password, DATE_FORMAT(users.tglLahir, '%M %d %Y') as tglLahir, users.jk, users.alamat, users.angkatan, users.nomorTelp, users.level 
            FROM users WHERE level='user'";
            $hasil_admin = mysqli_query($koneksi, $data_admin); 

            $total_record_admin = mysqli_num_rows($hasil_admin);
            ?>
              <!-- Projects table -->
              <table id="tabel-data-user" class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Angkatan</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                
            if (($total_record_admin) > 0) {
              while($row = mysqli_fetch_assoc($hasil_admin)) {
                  echo "<tr>
                    <td>" . $row["nama"]."</td>
                    <td>".$row["angkatan"]."</td>
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