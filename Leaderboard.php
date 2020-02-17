<?php
require "header.php";
?>

<head>
    <link rel="stylesheet" href="css/learn.css">
</head>

<body>
    <section class="info" style="text-align: center;">

        <div>
            <!-- Inline php to get quiz scores for user from db -->
            <?php
            if (isset($_SESSION['userid'])) {
                require 'php-actions/dbhandler.php';



                echo '<h2>Global Leaderboard</h2>';

                // //Contact database and retrieve all users scores
                $sql = "SELECT * FROM scores";


                $result = mysqli_query($conn, $sql);

                //Start of the table, the row headers
                echo '<table class="elementTable">
                        <tr>
                            <th>Username</th>
                            <th>Quiz 1</th>
                            <th>Quiz 2</th>
                            <th>Quiz 3</th>
                            <th>Quiz 4</th>
                            <th>Quiz 5</th>
                            <th>Total</th>
                        </tr>';



                //While there is a row .. output to table
                while ($row = mysqli_fetch_array($result)) {
                    //Get results from each column in the row
                    $username = $row[0];
                    $quiz1Val = $row[1];
                    $quiz2Val = $row[2];
                    $quiz3Val = $row[3];
                    $quiz4Val = $row[4];
                    $quiz5Val = $row[5];
                    $total = $quiz1Val + $quiz2Val + $quiz3Val + $quiz4Val + $quiz5Val;


                    echo '            
                    <tr>
                        <td style="background-color: royalblue; color: #fff; font-weight: normal;">' . $username . '</td>
                        <td style="background-color: royalblue; color: #fff; font-weight: normal;">' . $quiz1Val . '</td>
                        <td>' . $quiz2Val . '</td>
                        <td>' . $quiz3Val . '</td>
                        <td>' . $quiz4Val . '</td>
                        <td>' . $quiz5Val . '</td>
                        <td>' . $total . '</td>
                    </tr>
                    ';
                }

                echo '</table>';
                //close connection
                mysqli_close($conn);
            }
            ?>
            <a href="Profile.php"><button class="button">Back to Profile</button></a>

        </div>

    </section>

</body>


<?php
require "footer.php";
?>