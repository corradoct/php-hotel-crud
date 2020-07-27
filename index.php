<?php

// Includo la query
include __DIR__ . '/server.php';

// Includo l'header
include __DIR__ . '/partials/header.php';
?>

      <!-- Main -->
      <main>

        <!-- Creo i messaggi di modifica o eliminazione della stanza se nell'URL sono presenti delle query con chiave ==> valore -->
        <?php if(isset($_GET['roomUpdated'])) { ?>
          <p>Room number <?php echo $_GET['roomUpdated']; ?> successfully updated</p>
        <?php } elseif(isset($_GET['roomDeleted'])) { ?>
          <p>Room number <?php echo $_GET['roomDeleted']; ?> successfully deleted</p>
        <?php } ?>

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
                    <a href="<?php echo $basePath . '/show/show.php?id=' . $room['id']; ?>">View</a>
                  </span>
                </td>

                <td>
                  <span>
                    <a href="<?php echo $basePath . '/update/edit.php?id=' . $room['id']; ?>">Update</a>
                  </span>
                </td>

                <td>
                  <form action="<?php echo $basePath . '/delete/delete.php?id=' . $room['id']; ?>" method="post">
                    <input type="hidden" name="formId" value="<?php echo $room['id']; ?>">
                    <button class="noBtn" type="submit" name="formNumber" value="<?php echo $room['room_number']; ?>">Delete</button>
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
