<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My GHG Savings</title>
    <link rel="stylesheet" href="pract.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=Protest+Guerrilla&display=swap" rel="stylesheet">

</head>

<body>
    <header></header>
    <div class="navbar">
        <div class="logo">
            <img src="logo1-Photoroom.png" alt="Logo">
        </div>
        <div class="text">Cool The Globe</div>

        <div class="tabs">
            <a href="#">Home</a>
            <a href="#">Promises</a>
            <a href="#">Gallery</a>
            <a href="#">About</a>
        </div>
        <div class="dropdown">
            <button><img id="menu" src="menu.png"></button>
            <div class="dropdown-content">
                <a href="#">Login</a>
                <a href="#">Logout</a>
                <a href="#">My Score</a>
            </div>
        </div>
    </div>
    <form method= "post">
    <main>
        <section class="savings-section">
            <h2>Vehicle</h2>
            <div class="savings">
                <p>Date: <span id="currentDate"></span></p>

                <input type="hidden" name="displayDate" id="hiddenDisplayDateInput">

        <!-- Hidden input to hold the date in YYYY-MM-DD format -->
        <input type="hidden" name="dbDate" id="hiddenDbDateInput">

                <span class="savings-amount">Meta Count of CO2:<input type="text" name="metacnt" id="metacount" readonly></span>
            </div>
        </section>

        <section class="appliance-list">
            <ul>
                <li class="list">
                    <div class="appliance-item">
                        <img class="icon" src="walk.png" alt="walk_icon">
                    </div>
                    <span class="Appliance_name">Walking</span>
                    <div class="appliance-row">
                        <label class="labeloption" for="workingHours">Select an option:</label>
                        <input id="inputvalue1" class="textbox" type="text" name="workingHours" placeholder="Enter km" oninput="calculate(this.value, 'result1')">
                        <input class="cbcheck" type="checkbox" name="notUsed" id="notUsed1" onclick="clearField('inputvalue1', 'result1')">
                        <label for="notUsed">Not Used</label>
                    </div>


                    <div class="saveco2">
                        <label for="saving">CO2 saved:</label>
                        <input class="co2" name="saving" id="result1" readonly>
                    </div>

                    
                </li>

                <li class="list">
                    <div class="appliance-item">
                        <img class="icon" src="cycle.png" alt="cycle_icon">
                    </div>
                    <span class="Appliance_name">Bicycle</span>
                    <div class="appliance-row">
                        <label class="labeloption" for="workingHours">Select an option:</label>
                        <input id="inputvalue2" class="textbox" type="text" name="workingHours" placeholder="Enter km" oninput="calculate(this.value, 'result2')">
                        <input class="cbcheck" type="checkbox" name="notUsed" id="notUsed2" onclick="clearField('inputvalue2', 'result2')">
                        <label for="notUsed">Not Used</label>
                    </div>
                    <div class="saveco2">
                        <label for="saving">CO2 saved:</label>
                        <input class="co2" name="saving" id="result2" readonly>
                    </div>
                </li>

                

                <li class="list">
                        <div class="appliance-item">
                            <img class="icon" src="bike.png" alt="bike_icon">
                        </div>
                        <span class="Appliance_name">Bike</span>

                        <!-- Container to hold all elements in a single row -->
                        <div class="appliance-row">
                            <!-- Label and text input for working hours -->
                            <label class="labeloption" for="workingHours">Select an option:</label>
                            <input class = "textbox" id="inputvalue3"type="text" name="workingHours" placeholder="Enter km"  oninput="calculate(this.value, 'result3')">

                            <!-- Checkbox for not used option -->
                            <input  class="cbcheck" type="checkbox" name="notUsed" id="notUsed3"  onclick="clearField('inputvalue3', 'result3')">
                            <label for="notUsed">Not Used</label>
                        </div>

                        <!-- Textarea for showing CO2 saving -->
                        <div class="saveco2">
                            <label for="saving">CO2 saved:</label>
                            <input class="co2" name="saving" rows="2" cols="15" id="result3" readonly>
                        </div>
                    </li>




                    <li class="list">
                        <div class="appliance-item">
                            <img class="icon" src="car.png" alt="car_icon">
                        </div>
                        <span class="Appliance_name">Car</span>

                        <!-- Container to hold all elements in a single row -->
                        <div class="appliance-row">
                            <!-- Label and text input for working hours -->
                            <label class="labeloption" for="workingHours">Select an option:</label>
                            <input   class = "textbox" id="inputvalue4" type="text" name="workingHours" placeholder="Enter km" oninput="calculate(this.value, 'result4')">

                            <!-- Checkbox for not used option -->
                            <input  class="cbcheck" type="checkbox" name="notUsed" id="notUsed4"  onclick="clearField('inputvalue4', 'result4')">
                            <label for="notUsed">Not Used</label>
                        </div>

                        <!-- Textarea for showing CO2 saving -->
                        <div class="saveco2">
                            <label for="saving">CO2 saved:</label>
                            <input class="co2" name="saving" rows="2" cols="15" id="result4" readonly>

                        </div>
                    </li>



                    <li class="list">
                        <div class="appliance-item">
                            <img class="icon" src="bus.png" alt="bus_icon">
                        </div>
                        <span class="Appliance_name">Bus</span>

                        <!-- Container to hold all elements in a single row -->
                        <div class="appliance-row">
                            <!-- Label and text input for working hours -->
                            <label class="labeloption" for="workingHours">Select an option:</label>
                            <input  id="inputvalue5" class = "textbox" type="text" name="workingHours" placeholder="Enter km"   oninput="calculate(this.value, 'result5')">

                            <!-- Checkbox for not used option -->
                            <input class="cbcheck" type="checkbox" name="notUsed" id="notUsed5" onclick="clearField('inputvalue5', 'result5')">
                            <label for="notUsed">Not Used</label>
                        </div>

                        <!-- Textarea for showing CO2 saving -->
                        <div class="saveco2">
                            <label for="saving">CO2 saved:</label>
                            <input class="co2" name="saving" rows="2" cols="15" id="result5" readonly>
                        </div>
                    </li>

            </ul>
        </section>

        <button class="save-record-btn">Save Record</button>
    </main>
</form>

    <script>
        const today = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = today.toLocaleDateString('en-US', options);

        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Months are 0-indexed, so add 1
        const day = String(today.getDate()).padStart(2, '0');
        const formattedDbDate = `${year}-${month}-${day}`;


        document.getElementById('currentDate').textContent = formattedDate;

        document.getElementById('hiddenDisplayDateInput').value = formattedDate;

        document.getElementById('hiddenDbDateInput').value = formattedDbDate;

        function calculate(inputValue, resultFieldId) {
            const parsedValue = parseFloat(inputValue);
            if (isNaN(parsedValue)) {
                document.getElementById(resultFieldId).value = '';
                getmetacount(); // Update meta count when clearing
                return;
            }

            let result = 0;
            if (resultFieldId === 'result1') {
                result = (parsedValue * 0).toFixed(2);  
            } else if (resultFieldId === 'result2') {
                result = (parsedValue * 0.21).toFixed(2);  
            }else if (resultFieldId === 'result3') {
                result = (parsedValue * 0.03904).toFixed(2);  
            }else if (resultFieldId === 'result4') {
                result = (parsedValue *  0.17994).toFixed(2);  //car
            }else if (resultFieldId === 'result5') {
                result = (parsedValue *  0.93).toFixed(2);  //bus per head
            } else{
                 result = ""
                document.getElementById(resultFieldId).value = result;
            } 
            // Additional logic for other result fields can go here

            document.getElementById(resultFieldId).value = result;
            getmetacount(); // Automatically update meta count after calculating
        }

        // Updated clearField function to clear both input field and result field
        function clearField(inputFieldId, resultFieldId) {
            document.getElementById(inputFieldId).value = '';  // Clear the input field
            document.getElementById(resultFieldId).value = '';  // Clear the result field
            getmetacount();  // Update meta count after clearing fields
        }

        function getmetacount() {
            const result1 = parseFloat(document.getElementById('result1').value) || 0;
            const result2 = parseFloat(document.getElementById('result2').value) || 0;
            const result3 = parseFloat(document.getElementById('result3').value) || 0;
            const result4 = parseFloat(document.getElementById('result4').value) || 0;
            const result5 = parseFloat(document.getElementById('result5').value) || 0;
           

            // Sum all results
            const totalMetaCount = result1 + result2+result3+result4+result5;
            document.getElementById('metacount').value = totalMetaCount.toFixed(2);
        }
    </script>

    <?php

// Database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "global_login";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $metacount = isset($_POST['metacnt']) && !empty($_POST['metacnt']) ? floatval($_POST['metacnt']) : null;
    $currentDate = isset($_POST['dbDate']) && !empty($_POST['dbDate']) ? $_POST['dbDate'] : null;

    // Validate the data
    if ($metacount === null || $currentDate === null) {
        echo "Meta count or date not provided. No updates made.";
        exit; // Stop script execution if inputs are missing
    }

    // Check if the record for the current date exists
    $checkQuery = "SELECT vehicle_meta_count FROM vehicle WHERE Date = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("s", $currentDate);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Record exists, fetch the current meta count
        $row = $result->fetch_assoc();
        $existingMetaCount = floatval($row['vehicle_meta_count']);

        // Add the new meta count to the existing one
        $newMetaCount = $existingMetaCount + $metacount;

        // Update the record with the new meta count
        $updateQuery = " UPDATE vehicle SET vehicle_meta_count = ? WHERE Date = ?";
        $updateStmt = $conn->prepare($updateQuery);
        $updateStmt->bind_param("ds", $newMetaCount, $currentDate);

        if ($updateStmt->execute()) {
            echo "Data updated successfully.<br>";
        } else {
            die("Data not updated: " . $updateStmt->error);
        }

        $updateStmt->close();
    } else {
        // If the record doesn't exist, insert a new record
        $insertQuery = "INSERT INTO vehicle (Date , vehicle_meta_count) VALUES (?, ?)";
        $insertStmt = $conn->prepare($insertQuery);
        $insertStmt->bind_param("sd", $currentDate, $metacount);

        if ($insertStmt->execute()) {
            echo "Data inserted successfully.<br>";
        } else {
            die("Data not inserted: " . $insertStmt->error);
        }

        $insertStmt->close();
    }

    $stmt->close();
    
    
    // $slection = "SELECT vehicle_meta_count FROM vehicle WHERE Date = '2024-09-06'";
    // $result = mysqli_query($conn, $slection);
    
    // if(mysqli_num_rows($result) > 0) {
    //     $row = mysqli_fetch_assoc($result);
    
    //     // Use echo to print HTML content within the PHP block
    //     echo "<table border='1'>
    //             <tr>
    //                 <th>Meta Count Vehicle</th>
    //             </tr>
    //             <tr>
    //                 <td>" . $row['vehicle_meta_count'] . "</td>
    //             </tr>
    //           </table>";
    // } else {
    //     echo "Data is not selected...";
    // }
    

    exit();
}

mysqli_close($conn);








?>


    
</body>

</html>
