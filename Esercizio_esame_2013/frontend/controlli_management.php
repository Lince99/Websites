<?php
    include_once 'backend/db_connect.php';
    include_once 'backend/queries.php';


    function print_all_controlli() {
        // if ($conn->query($use_database) === TRUE) {
        //     echo "<p>Personal database selected successfully</p>";
        // } else {
             ?>
             <div class="alert alert-danger">
                 <strong>ERROR!</strong> USE query failed!
             </div>
             <?php
        // }
        //
        // $select_result = $conn->query($q_select_all);
        //
        // if ($select_result->num_rows > 0) {
        //     echo "<table class=\"table\"><tr> <th  scope=\"col\">id</th> <th scope=\"col\">nome</th> <th scope=\"col\">cognome</th> <th scope=\"col\">indirizzo</th> <th scope=\"col\">telefono</th> <th scope=\"col\">data di nascita</th> <th scope=\"col\">email</th>";
        //     while($row = $select_result->fetch_assoc()) {
        //         echo "<tr><th scope=\"row\"> " . $row["ID"]. "</th><th>" . $row["nome"]. "</th><th>" . $row["cognome"]. "</th><th>" . $row["indirizzo"]. "</th><th>" . $row["telefono"]. "</th><th>" . $row["dataNascita"]. "</th><th>" . $row["email"]."</th>";
        //     }
        //     echo "</table>";
        // } else {
        //     echo "<p>0 risultati</p>";
        // }
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
