
<!DOCTYPE html>
<html>
<head>
    <title>Selection Sort</title>
</head>
<body>
    <h1>Selection Sort</h1>

    <!-- HTML form for user input -->
    <form method="post">
        Enter values (comma-separated): <input type="text" name="input_values">
        <input type="submit" value="Sort">
    </form>

    <?php
    function selectionSort($arr) {
        $n = count($arr);

        for ($i = 0; $i < $n - 1; $i++) {
            $minIndex = $i;

            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$j] < $arr[$minIndex]) {
                    $minIndex = $j;
                }
            }

            $temp = $arr[$i];
            $arr[$i] = $arr[$minIndex];
            $arr[$minIndex] = $temp;
        }

        return $arr;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $inputValues = $_POST["input_values"];
        $valuesArray = explode(",", $inputValues);

        
        $valuesArray = array_map("trim", $valuesArray);

        
        $valuesArray = array_filter($valuesArray);

        
        $sortedArray = selectionSort($valuesArray);

       
        echo "Sorted Array: " . implode(", ", $sortedArray);
    }
    ?>
</body>
</html>
