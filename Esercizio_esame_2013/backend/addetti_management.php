<?php
    include_once 'dbconnect.php';

    function print_lista_addetti() {
        global $conn;
        global $Q_lista_addetti;

        $select_result = $conn->query($Q_lista_addetti);
        if ($select_result->num_rows > 0) {
            while($row = $select_result->fetch_assoc()) {
                ?>
<tr>
    <th scope="row"><?php echo $row["ID_Addetto"] ?></th>
    <td><?php echo $row["Cognome"] ?></td>
    <td><?php echo $row["Nome"] ?></td>
    <td><?php echo $row["Ruolo"] ?></td>
    <td><?php echo $row["email"] ?></td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
            <?php
        }
    }

    function print_lista_addetti_presenti() {
        global $conn;
        global $Q_lista_addetti_presenti;

        $select_result = $conn->query($Q_lista_addetti_presenti);
        if ($select_result->num_rows > 0) {
            while($row = $select_result->fetch_assoc()) {
                ?>
<tr>
    <th scope="row"><?php echo $row["ID_Addetto"] ?></th>
    <td><?php echo $row["Cognome"] ?></td>
    <td><?php echo $row["Nome"] ?></td>
    <td><?php echo $row["Nome_dogana"] ?></td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
            <?php
        }
    }
?>
