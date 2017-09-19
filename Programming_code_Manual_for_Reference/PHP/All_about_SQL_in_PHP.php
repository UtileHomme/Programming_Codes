<!-- How to write an update query in core PHP -->

UPDATE `table_name`
 SET `first_name` =:firstname, `surname` =:surname, `email`=:email
 WHERE `user_id`=:user_id

<!-- How to write SELECT Query using "LIKE" -->

SELECT `place` , `description` FROM `places` WHERE `place` LIKE ?

<!-- How to retrieve result from query and display all results -->

        $query = "SELECT `place` , `description` FROM `places` WHERE `place` LIKE ?  ";

        $result = $conn->prepare($query); //helps avoid sql injection
        $result->execute(array("%$search_term%"));

        // echo $result->execute();
        $num_of_rows = $result->rowCount(); //this will count the rows affected in the last execution of the query
        //which are returned after executing the sql statement

        //depending on the number of rows, append the plural or singular form
        $suffix = ($num_of_rows!=1) ? 's' : '';
        echo '<p>Your search for <strong> '.$search_term.' </strong> returned <strong> '.$num_of_rows.' </strong> result'.$suffix.'</p>';

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $a = $result->fetchAll();

        foreach($a as $row)
        {
            echo '<strong>'.$row['place'].'</strong><br /><br />';
        }
