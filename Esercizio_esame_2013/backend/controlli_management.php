<?php
    include_once 'dbconnect.php';

    //estrae ID, Dogana, Addetto, Soggetto controllato, Data_inizio, Data_fine, Stato
    function print_all_controlli() {
        global $conn;
        global $Q_select_all_controlli;

        if($conn) {
            $select_result = $conn->query($Q_select_all_controlli);
            if ($select_result->num_rows > 0) {
                while($row = $select_result->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row["ID"] ?></th>
                        <td><?php echo $row["ID"] ?></td>
                        <td><?php echo $row["Nome_dogana"] ?></td>
                        <td><?php echo $row["Cognome_addetto"] ?></td>
                        <td><?php echo $row["Soggetto"] ?></td>
                        <td><?php echo $row["Data_inizio"] ?></td>
                        <td><?php echo $row["Data_fine"] ?></td>
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
    }
    function print_all_passeggeri() {
        global $conn;
        global $Q_select_all_passeggeri;

        //TODO
    }
    function print_all_merce() {
    }
    function print_all_contestazioni() {
    }
    function print_open_controlli() {

    }
?>
