<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Restult Sheet </title>
</head>

<body>
    <h3>Students Restult</h3>
    <form action="" method="POST">
        <label for=""> Student Name:</label>
        <input type="text" name="s1" value="Khairul Islam ">
        <label for="">Score</label>
        <input type="number" name="m1"> <br> <br>
        <label for=""> Student Name:</label>
        <input type="text" name="s2" value="Arif Islam ">
        <label for="">Score</label>
        <input type="number" name="m2"> <br> <br>
        <label for=""> Student Name:</label>
        <input type="text" name="s3" value="Hridoy ">
        <label for="">Score</label>
        <input type="number" name="m3"> <br> <br>
        <label for=""> Student Name:</label>
        <input type="text" name="s4" value="Ruksana Nowrin">
        <label for="">Score</label>
        <input type="number" name="m4"> <br> <br>
        <label for=""> Student Name:</label>
        <input type="text" name="s5" value="Shafi">
        <label for="">Score</label>
        <input type="number" name="m5"> <br> <br>

        <input type="submit" name="submit" value="Show Result">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $students = array(
            $_POST['s1'] => $_POST['m1'],
            $_POST['s2'] => $_POST['m2'],
            $_POST['s3'] => $_POST['m3'],
            $_POST['s4'] => $_POST['m4'],
            $_POST['s5'] => $_POST['m5'],
        );
        $maxScore = -1;
        $minScore = 101;
        $topstudent = "";
        $poorstudent = "";

        echo "Result Sheet";
        echo "<table border='1' cellpadding= '10'>";
        echo "<tr><th> Student Name </th> <th>Score</th></tr>";

        foreach ($students as $name => $score) {
            echo "<tr>";
            echo "<td> $name</td>";
            echo "<td>$score</td>";
            echo "</tr>";

            if ($score > $maxScore) {
                $maxScore = $score;
                $topstudent = $name;
            }
            if ($score < $minScore) {
                $minScore = $score;
                $poorstudent = $name;
            }
        }
        echo "</table>";
        echo "<h3>Top Student: $topstudent</h3>";
        echo "<h3>Highest Score: $maxScore</h3>";
        echo "<h3>Poor Student: $poorstudent</h3>";
        echo "<h3>Lowest Score: $minScore</h3>";
    }


    ?>
</body>

</html>