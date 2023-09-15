<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 w-50">
        <h1 class="mb-4">Simple Calculator</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="num1" class="form-label">Enter First Number</label>
                <input type="number" class="form-control" id="num1" name="num1" required>
            </div>

            <div class="mb-3">
                <label for="num2" class="form-label">Enter Second Number</label>
                <input type="number" class="form-control" id="num2" name="num2" required>
            </div>

            <div class="mb-3">
                <label for="operation" class="form-label">Select Operation</label>
                <select class="form-select" id="operation" name="operation" required>
                    <option value="add">Addition (+)</option>
                    <option value="subtract">Subtraction (-)</option>
                    <option value="multiply">Multiplication (*)</option>
                    <option value="divide">Division (/)</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        <?php
        if ( $_SERVER["REQUEST_METHOD"] === "POST" ) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            switch ( $operation ) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ( $num2 != 0 ) {
                        $result = $num1 / $num2;
                    } else {
                        echo "<div class='alert alert-danger mt-3'>Error: Cannot divide by zero</div>";
                    }
                    break;
                default:
                    echo "<div class='alert alert-danger mt-3'>Invalid operation selected</div>";
                    break;
                }

            if ($operation != "divide" || $num2 != 0) {
                echo "<div class='alert alert-success mt-3'>Result: $result</div>";
            }
        }
        ?>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>