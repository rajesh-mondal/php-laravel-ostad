<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 w-50">
        <h1 class="mb-4">Temperature Converter</h1>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="temperature" class="form-label">Enter Temperature</label>
                <input type="text" class="form-control" id="temperature" name="temperature" required>
            </div>

            <div class="mb-3">
                <label for="conversion_type" class="form-label">Conversion Type</label>
                <select class="form-select" id="conversion_type" name="conversion_type" required>
                    <option value="c_to_f">Celsius to Fahrenheit</option>
                    <option value="f_to_c">Fahrenheit to Celsius</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Convert</button>
        </form>

        <?php
        if ( $_SERVER["REQUEST_METHOD"] === "POST" ) {
            $temperature = $_POST["temperature"];
            $conversion_type = $_POST["conversion_type"];

            if ( $conversion_type === "c_to_f" ) {
                // celsius to fahrenheit conversion
                $converted_temperature = ( $temperature * 9 / 5 ) + 32;
                echo "<div class='alert alert-success mt-3'>Converted Temperature: $converted_temperature °F</div>";
            } elseif ( $conversion_type === "f_to_c" ) {
                // fahrenheit to celsius conversion
                $converted_temperature = ( $temperature - 32 ) * 5 / 9;
                echo "<div class='alert alert-success mt-3'>Converted Temperature: $converted_temperature °C</div>";
            }
        }
        ?>

    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>