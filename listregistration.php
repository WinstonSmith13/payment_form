<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>List Registration</title>
</head>

<body>



    <div class="container col-3 p-5 ">
        <div class="row">

            <div class="col">

                <div class="card" style="width: 18rem;">
                    <div class="card-header ">
                        <strong>Information</strong>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
                        echo "<html><body><center><table>\n\n";

                        // Open a file
                        $file = fopen('registrations.csv', 'r');

                        // Fetching data from csv file row by row
                        while (($data = fgetcsv($file)) !== false) {

                            // HTML tag for placing in row format
                            echo "<tr>";
                            foreach ($data as $i) {
                                echo "<td>" . htmlspecialchars($i)
                                    . "</td>";
                            }
                            echo "</tr> \n";
                        }

                        // Closing the file
                        fclose($file);

                        echo "\n</table></center></body></html>";
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>