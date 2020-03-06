<?php
    include_once 'dbconnect.php';

    //estrae ID, Dogana, Addetto, Soggetto controllato, Data_inizio, Data_fine, Stato
    function print_riassunto_controlli() {
        global $conn;
        global $Q_select_all_controlli;

        if($conn) {
            $select_result = $conn->query($Q_select_all_controlli);
            if ($select_result->num_rows > 0) {
                while($row = $select_result->fetch_assoc()) {
                    ?>
<tr>
    <th scope="row"><?php echo $row["ID"] ?></th>
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
                //stampa una riga vuota se non ci sono dati
                ?>
<tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
                <?php
            }
        }
    }

    //estrae Nome_dogana, Passaporto, Cognome, Nome,
    //Aeroporto_provenienza, Aeroporto_destinazione, Motivo_viaggio, Data_inizio, Data_fine, Esito
    function print_lista_passeggeri() {
        global $conn;
        global $Q_select_passeggeri_giornata;
        global $QIN_data_inizio_controllo_passeggeri;

        if($conn) {
            $select_result = $conn->query($Q_select_passeggeri_giornata);
            if ($select_result->num_rows > 0) {
                while($row = $select_result->fetch_assoc()) {
                    ?>
<tr>
    <th scope="row"><?php echo $row["Nome_dogana"] ?></th>
    <td><?php echo $row["Passaporto"] ?></td>
    <td><?php echo $row["Cognome"] ?></td>
    <td><?php echo $row["Nome"] ?></td>
    <td><?php echo $row["Aeroporto_provenienza"] ?></td>
    <td><?php echo $row["Aeroporto_destinazione"] ?></td>
    <td><?php echo $row["Motivo_viaggio"] ?></td>
    <td><?php echo $row["Data_inizio"] ?></td>
    <td><?php echo $row["Data_fine"] ?></td>
    <td><?php echo $row["Esito"] ?></td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
                <?php
            }
        }
    }

    //estrae
    function print_dazi_doganali() {
        global $conn;
        global $Q_select_totale_dazi;

        if($conn) {
            $select_result = $conn->query($Q_select_totale_dazi);
            if ($select_result->num_rows > 0) {
                while($row = $select_result->fetch_assoc()) {
                    ?>
<tr>
    <th scope="row"><?php echo $row["Nome_dogana"] ?></th>
    <td><?php echo $row["Totale"] ?></td>
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
    }

    function print_lista_merce() {
    }
    function print_lista_contestazioni() {
    }
    function print_controlli_aperti() {

    }
?>
