		<?php

        if (!empty($_POST['Title'])) {
            $title = $_POST['Title'];
            require_once($_SERVER["DOCUMENT_ROOT"] . "/php/base/conn.php");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                echo $conn->connect_error;
            } else {
                $sql = "INSERT INTO booklist(Title) VALUE('$title');";
                $conn->query($sql);
            }
            $conn->close();
            header("Location: /");
        }




        // function insertBook($data)
        // {
        //     // echo 'username:' . $data . '<br>';

        //     require_once($_SERVER["DOCUMENT_ROOT"] . "/php/base/conn.php");
        //     if ($conn->connect_error) {
        //         die("Connection failed: " . $conn->connect_error);
        //         echo $conn->connect_error;
        //     } else {
        //         $sql = "INSERT INTO booklist (Title) VALUES ('".$data."');";
        //         $conn->query($sql);
        //     }
        //     // // Check connection
        //     // if ($result->num_rows > 0) {
        //     // 	// output data of each row
        //     // 	while ($row = $result->fetch_assoc()) {
        //     // 		print("<li class='list-group-item d-flex justify-content-between align-items-center'>" .
        //     // 			$row['Title'] .
        //     // 			"<span class='badge badge-primary badge-pill '>" . rand(10, 100) . "</span></li>");
        //     // 	}
        //     // } else {
        //     // 	echo "0 results";
        //     // }
        //     $conn->close();
        //     header('Location: index.php'); // 導回登入頁面
        // };





        // function runMyFunction()
        // {
        //     echo 'I just ran a php function';
        // }



        ?>