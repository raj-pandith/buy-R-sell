<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AJAX Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#myButton").click(function () {
                var dataToSend = "Hello, PHP!";

                $.ajax({
                    url: 'process.php',
                    type: 'POST',
                    data: { data: dataToSend },
                    success: function (response) {
                        console.log("Response from PHP: " + response);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log("Error: " + textStatus + " - " + errorThrown);
                    }
                });
            });
        });
    </script>

</head>

<body>
    <button id="myButton">Click Me!</button>
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['data'])) {
        $receivedData = $_POST['data'];
        
        // You can now use $receivedData in your PHP script
        // For example, storing it in a session variable
        session_start();
        $_SESSION['storedData'] = $receivedData;

        echo "Data received: " . $receivedData;
    } else {
        echo "No data received";
    }
} else {
    echo "Invalid request method";
}
?>

</html>