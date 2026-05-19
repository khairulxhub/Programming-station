<!DOCTYPE html>
<html>
<head>
    <title>PHP Tasks with Form</title>
</head>
<body>

<h2>PHP Task Form</h2>

<form method="post">
    <label>Select Task:</label>
    <select name="task">
        <option value="prime">Check Prime</option>
        <option value="largest">Find Largest of 5 Numbers</option>
        <option value="country">Country-Capital Array</option>
        <option value="grade">Grade Evaluation</option>
        <option value="factorial">Factorial</option>
        <option value="student">Student Result Sheet</option>
    </select>
    <br><br>

    <label>Enter Values (comma separated):</label><br>
    <input type="text" name="values" placeholder="e.g. 5 or 10,20,30,40,50">
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<hr>

<?php
if (isset($_POST['submit'])) {

    $task = $_POST['task'];
    $input = $_POST['values'];

    // Convert input to array if needed
    $values = array_map('trim', explode(',', $input));

    // 1. Prime Number Check
    if ($task == "prime") {
        $num = (int)$values[0];
        $isPrime = true;

        if ($num <= 1) {
            $isPrime = false;
        } else {
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }

        echo $isPrime ? "$num is Prime" : "$num is not Prime";
    }

    // 2. Largest of 5 numbers
    elseif ($task == "largest") {
        if (count($values) < 5) {
            echo "Please enter 5 numbers.";
        } else {
            $nums = array_map('intval', $values);
            echo "Largest number is: " . max($nums);
        }
    }

    // 3. Country-Capital Array
    elseif ($task == "country") {
        $countries = [
            "Bangladesh" => "Dhaka",
            "India" => "New Delhi",
            "Japan" => "Tokyo",
            "USA" => "Washington D.C.",
            "Canada" => "Ottawa"
        ];

        ksort($countries);

        foreach ($countries as $country => $capital) {
            echo "$country : $capital <br>";
        }
    }

    // 4. Grade Evaluation
    elseif ($task == "grade") {
        $grade = strtoupper($values[0]);

        if ($grade == "A") echo "Excellent";
        elseif ($grade == "B") echo "Good";
        elseif ($grade == "C") echo "Fair";
        elseif ($grade == "D") echo "Poor";
        else echo "Failure";
    }

    // 5. Factorial
    elseif ($task == "factorial") {
        $num = (int)$values[0];
        $fact = 1;

        for ($i = 1; $i <= $num; $i++) {
            $fact *= $i;
        }

        echo "Factorial of $num is $fact";
    }

    // 6. Student Result Sheet
    elseif ($task == "student") {
        $students = [
            "Rahim" => 85,
            "Karim" => 92,
            "Salam" => 78,
            "Jamal" => 88,
            "Kamal" => 95
        ];

        $maxScore = max($students);
        $topStudent = array_search($maxScore, $students);

        echo "<table border='1' cellpadding='5'>
        <tr><th>Name</th><th>Score</th></tr>";

        foreach ($students as $name => $score) {
            echo "<tr><td>$name</td><td>$score</td></tr>";
        }

        echo "</table>";

        echo "<br>Top Student: $topStudent ($maxScore)";
    }
}
?>

</body>
</html>