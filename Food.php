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
            <img src="logo1-Photoroom.png"  alt="Logo"></div>
            <div class="text">Cool The Globe</div>
        
        <div class="tabs">
            <a href="#">Home</a>
            <a href="#">Promises</a>
            <a href="#">Gallery</a>
            <a href="#">About</a>
        </div>
        <div class="dropdown">
            <button><img id = "menu" src="menu.png"></button>
            <div class="dropdown-content">
                <a href="#">Login</a>
                <a href="#">Logout</a>
                <a href="#">My Score</a>
            </div>
        </div>
    </div>
    <main>
        <section class="savings-section">
            <h2>Food</h2>
            <div class="savings">
               <p>Date: <span id="currentDate">My Savings</span></p>
               <span class="savings-amount">Meta Count of CO2:<input type="text" name="metacnt" id="metacount" readonly></span>
            </div>
        </section>


        <main>
            <section class="appliance-list">


                <ul>

                    <li class="list">
                        <div class="appliance-item">
                            <img class="icon" src="fruit.png" alt="Fruit_icon">
                        </div>
                        <span class="Appliance_name">Fruits</span>

                        <!-- Container to hold all elements in a single row -->
                        <div class="appliance-row">
                            <!-- Label and text input for working hours -->
                            <label class="labeloption" for="workingHours">Select an option:</label>
                            <input id="inputvalue1" class="textbox" type="text" name="workingHours" placeholder="Enter grams" oninput="calculate(this.value, 'result1')">

                            <!-- Checkbox for not used option -->
                            <input class="cbcheck" type="checkbox" name="notUsed" id="notUsed1" onclick="clearField('inputvalue1', 'result1')">
                            <label for="notUsed">Not Used</label>
                        </div>

                        <!-- Textarea for showing CO2 saving -->
                        <div class="saveco2">
                            <label for="saving">CO2 emit(kg):</label>
                            <input class="co2" name="saving" id="result1" readonly>
                        </div>
                    </li>

                    <li class="list">
                        <div class="appliance-item">
                            <img class="icon" src="dairyProduct.png" alt="dairy_icon">
                        </div>
                        <span class="Appliance_name">Dairy products</span>

                      
                        <div class="appliance-row">
                            
                            <label class="labeloption" for="workingHours">Select an option:</label>
                            <input id="inputvalue2" class="textbox" type="text" name="workingHours" placeholder="Enter grams" oninput="calculate(this.value, 'result2')">

                            <!-- Checkbox for not used option -->
                            <input class="cbcheck" type="checkbox" name="notUsed" id="notUsed2" onclick="clearField('inputvalue2', 'result2')">
                            <label for="notUsed">Not Used</label>
                        </div>

                        <!-- Textarea for showing CO2 saving -->
                        <div class="saveco2">
                            <label for="saving">CO2 emit(kg):</label>
                            <input class="co2" name="saving" id="result2" readonly>
                        </div>
                    </li>


                    <li class="list">
                        <div class="appliance-item">
                            <img class="icon" src="nonveg.png" alt="nonveg_icon">
                        </div>
                        <span class="Appliance_name">Non-veg</span>

                        <div class="appliance-row">
                            <!-- Label and text input for working hours -->
                            <label class="labeloption" for="workingHours">Select an option:</label>
                            <input class = "textbox" id="inputvalue3"type="text" name="workingHours" placeholder="Enter grams"  oninput="calculate(this.value, 'result3')">

                            <!-- Checkbox for not used option -->
                            <input  class="cbcheck" type="checkbox" name="notUsed" id="notUsed3"  onclick="clearField('inputvalue3', 'result3')">
                            <label for="notUsed">Not Used</label>
                        </div>

                        <!-- Textarea for showing CO2 saving -->
                        <div class="saveco2">
                            <label for="saving">CO2 emit(kg):</label>
                            <input class="co2" name="saving" rows="2" cols="15" id="result3" readonly>
                        </div>
                    </li>


                    <li class="list">
                        <div class="appliance-item">
                            <img class="icon" src="processedfood.png" alt="processedfood_icon">
                        </div>
                        <span class="Appliance_name">Processed Food</span>

                        <!-- Container to hold all elements in a single row -->
                        <div class="appliance-row">
                            <!-- Label and text input for working hours -->
                            <label class="labeloption" for="workingHours">Select an option:</label>
                            <input   class = "textbox" id="inputvalue4" type="text" name="workingHours" placeholder="Enter grams" oninput="calculate(this.value, 'result4')">

                            <!-- Checkbox for not used option -->
                            <input  class="cbcheck" type="checkbox" name="notUsed" id="notUsed4"  onclick="clearField('inputvalue4', 'result4')">
                            <label for="notUsed">Not Used</label>
                        </div>

                        <div class="saveco2">
                            <label for="saving">CO2 emit(kg):</label>
                            <input class="co2" name="saving" rows="2" cols="15" id="result4" readonly>
                        </div>
                    </li>


                    
                </ul>
            </section>

            <button class="save-record-btn">Save Record</button>

        </main>
<script>
    const today = new Date();
    const values = {year:'numeric',month:'long',day:'numeric'};
    const formattedDate = today.toLocaleDateString('en-US',values);
    document.getElementById('currentDate').textContent = formattedDate;


    function calculate(inputValue, resultFieldId) {
            const parsedValue = parseFloat(inputValue);
            if (isNaN(parsedValue)) {
                document.getElementById(resultFieldId).value = '';
                getmetacount(); // Update meta count when clearing
                return;
            }

            let result = 0;
            if (resultFieldId === 'result1') {
                result = (parsedValue * 0.0005).toFixed(2);  //fruit
            } else if (resultFieldId === 'result2') {
                result = (parsedValue * 0.001).toFixed(2);  //dairy products
            }else if (resultFieldId === 'result3') {
                result = (parsedValue * 0.002).toFixed(2);  //non veg
            }else if (resultFieldId === 'result4') {
                result = (parsedValue *  0.001).toFixed(2);  //processed food
            }else{
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
           

            // Sum all results
            const totalMetaCount = result1 + result2+result3+result4;
            document.getElementById('metacount').value = totalMetaCount.toFixed(2);
        }
</script>




        
</body>

</html>