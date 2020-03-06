<?php
    include_once 'dbconnect.php';

    function print_dogane() {
        global $conn;
        global $Q_lista_dogane;


        $select_result = $conn->query($Q_lista_dogane);
        if ($select_result->num_rows > 0) {
            while($row = $select_result->fetch_assoc()) {
                ?>
<tr>
    <th scope="row"><?php echo $row["ID"] ?></th>
    <td><?php echo $row["Nome"] ?></td>
</tr>
                <?php
            }
        }
        else {
            //stampa una riga vuota se non ci sono dati
            ?>
<tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
</tr>
            <?php
        }
    }

    function print_durata_media_controlli() {
        global $conn;
        global $Q_durata_controlli;


        $select_result = $conn->query($Q_durata_controlli);
        if ($select_result->num_rows > 0) {
            while($row = $select_result->fetch_assoc()) {
                ?>
<tr>
    <td><?php echo $row["Nome_dogana"] ?></td>
    <td><?php echo number_format(abs($row["Durata_totale"])/60,0) ?></td>
</tr>
                <?php
            }
        }
        else {
            //stampa una riga vuota se non ci sono dati
            ?>
<tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
</tr>
            <?php
        }
    }

?>
