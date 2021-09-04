  <form action="" method="post">
      <table class="responsive">
          <thead>
              <tr>
                  <th scope="col">Operation</th>
                  <th scope="col">FullName</th>
                  <th scope="col">Gender</th>
                  <th scope="col">DOB</th>
                  <th scope="col">Photo</th>
                  <th scope="col">Phone no</th>
                  <th scope="col">Address</th>
                  <th scope="col">DOJ</th>
              </tr>
          </thead>
          <tbody>
              <?php
                include('./fetch_lec.php');

                if ($run_sd_query->num_rows > 0) {
                    while ($sdt = mysqli_fetch_assoc($run_sd_query)) {
                ?>
                      <tr>
                          <td data-table-header="Operation"><a style="padding: 0 10px 0 0;" href="update_lec_form.php?sid=<?php echo $sdt['id']; ?>"><i class="fas fa-edit"></i></a><a href="delete_lec_form.php?sid=<?php echo $sdt['tid']; ?>"><i class="fas fa-trash"></i></a></td>
                          <td data-table-header="FullName"><?php echo $sdt['full_name'] ?></td>
                          <td data-table-header="Gender"><?php echo $sdt['gender'] ?></td>
                          <td data-table-header="DOB"><?php echo $sdt['dob'] ?></td>
                          <td data-table-header="Photo"><img src="../../dataimg/<?php echo $sdt['photo'] ?>" style="max-width: 50px;" alt="img"></td>
                          <td data-table-header="Phone no"><?php echo $sdt['phone_no'] ?></td>
                          <td data-table-header="Address"><?php echo $sdt['address'] ?></td>
                          <td data-table-header="DOJ"><?php echo $sdt['doj'] ?></td>
                      </tr>
              <?php
                    }
                } else {
                    echo "No records found";
                }
                ?>
          </tbody>
      </table>
  </form>