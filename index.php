<?php
include __DIR__ . '/server.php';
include __DIR__ . '/partials/header.php';

?>

      <!-- Main -->
      <main>

        <!-- Table -->
        <table>
          <thead>
            <tr>
              <td>
                <h2>Id room</h2>
              </td>

              <td>
                <h2>Room number</h2>
              </td>

              <td>
                <h2>Room floor</h2>
              </td>
            </tr>
          </thead>

          <?php foreach ($rooms as $room) { ?>
            <tbody>
              <tr>
                <td>
                  <span><?php echo $room['id']; ?></span>
                </td>

                <td>
                  <span><?php echo $room['room_number']; ?></span>
                </td>

                <td>
                  <span><?php echo $room['floor']; ?></span>
                </td>

                <td>
                  <span>
                    <a href="<?php echo $basePath . '/show/show.php?id=' . $room['id'];?>">View</a>
                  </span>
                </td>

                <td>
                  <span>
                    <a href="<?php echo $basePath . '/update/edit.php'; ?>">Update</a>
                  </span>
                </td>

                <td>
                  <form action="<?php echo $basePath . '/delete/delete.php'; ?>" method="post">
                    <input type="hidden" name="" value="">
                    <button class="noBtn" type="submit" name="submitButton">Delete</button>
                  </form>
                </td>
              </tr>
            </tbody>
          <?php } ?>

        </table>
        <!-- End table -->
      </main>
      <!-- End  main -->

    </div>
    <!-- End general wrapper -->

  </body>
</html>
