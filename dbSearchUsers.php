<?php
    if (!is_null($_SESSION))
        if ($_SESSION["connSucceed"]) {
            $users = array();
            $searchString = $_GET["search"];

            // create a sql statement and execute it
            $sql= "select * from user where uNick like '%" . $searchString ."%';";
            $result = $conn->query($sql);
            // in case we got some values, we read them and print info on screen
            if ($result->num_rows > 0) {
                echo $result->num_rows . " result(s).<br>";
                while ($row = $result->fetch_assoc())
                    $users[] = $row;
            } else
                echo "0 results obtained<br>";

            foreach ($users as $u) {
                echo $u["uID"] . " - " . $u["uNick"] . " (" . $u["uName"] . " " . $u["uSurn"] . ") [" . $u["uPssw"] . "]<br>";
            }
        }
?>