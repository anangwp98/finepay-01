
                <?php
		            	$id_user_admin = $_SESSION['id'];
                  $sqlImg = "SELECT * FROM profil_img WHERE id_user='$id_user_admin'";
                  $resultImg = mysqli_query($koneksi, $sqlImg);
                 
                  while ($rowimg = mysqli_fetch_assoc($resultImg)) {
                    echo "<span class='avatar avatar-sm rounded-circle'>";
                      if ( $rowimg['status'] > 0) {
                        echo "<img src='../assets/img/theme/".$rowimg['status']."' class='rounded-circle'>";
                      } else {
                        echo "BELUM ADA FOTO";
                      }
                    echo "</span>";
                  }
                  ?>