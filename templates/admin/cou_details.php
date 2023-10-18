  <form action="" method="post">
      <table class="responsive">
          <thead>
              <tr>
                  <th scope="col">Operation</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Price</th>
                  <th scope="col">Payment</th>
                  <th scope="col">Status</th>
                  <th scope="col">DOC</th>
              </tr>
          </thead>
          <tbody>
              <?php
                include('./fetch_cou.php');

                if ($run_sd_query->num_rows > 0) {
                    while ($sdt = mysqli_fetch_assoc($run_sd_query)) {
                ?>
                      <tr>
                          <td data-table-header="Operation"><a style="padding: 0 10px 0 0;" href="update_cou_form.php?sid=<?php echo $sdt['id']; ?>"><i class="fas fa-edit"></i></a><a href="delete_cou_form.php?sid=<?php echo $sdt['id']; ?>"><i class="fas fa-trash"></i></a></td>
                          <td data-table-header="Name"><?php echo $sdt['name'] ?></td>
                          <td data-table-header="Gender"><?php echo $sdt['description'] ?></td>
                          <td data-table-header="DOB"><?php echo $sdt['price'] ?></td>
                          <td data-table-header="Phone no"><?php echo $sdt['payment'] ?></td>
                          <td data-table-header="Address"><?php echo $sdt['status'] ?></td>
                          <td data-table-header="DOJ"><?php echo $sdt['doc'] ?></td>
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