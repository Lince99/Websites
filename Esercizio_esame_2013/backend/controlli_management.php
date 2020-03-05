<?php
    include_once 'dbconnect.php';

    //estrae ID, Dogana, Addetto, Soggetto controllato, Data_inizio, Data_fine, Note, Dazio, Stato
    function print_all_controlli() {
        global $conn;

        if($conn) {
            $select_result = $conn->query($Q_select_all_controlli);
            if ($select_result->num_rows > 0) {
                while($row = $select_result->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["ID"] ?></th>
                        <td><?php echo $row["ID"] ?></td>
                        <td><?php echo $row["Dogana"] ?></td>
                        <td><?php echo $row["Addetto"] ?></td>
                        <td><?php echo $row["Soggetto"] ?></td>
                        <td><?php echo $row["Data_inizio"] ?></td>
                        <td><?php echo $row["Data_fine"] ?></td>
                        <td><?php echo $row["Note"] ?></td>
                        <td><?php echo $row["Dazio"] ?></td>
                        <td><?php echo $row["Stato"] ?></td>
                    </tr>
                    <?php
                }
            }
            else {
                // stampa una riga vuota se non ci sono dati
                ?>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <?php
            }
        }

        ?>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
        <?php
    }
    function print_all_passeggeri() {
    }
    function print_all_merce() {
    }
    function print_all_contestazioni() {
    }
    function print_open_controlli() {

    }
?>
