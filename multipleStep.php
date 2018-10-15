<?php include './headers.php'; ?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
        }

        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        h1 {
            text-align: center;  
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;  
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>
    <body>
        <div class="card">
            <div class="card-header">Pedido:</div>
            <div class="card-body">
                <form role="form" id="multipleStep" data-toggle="validator" class="shake">

                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <div class="form-group">
                            <label for="Kunnr">Kunnr</label>
                            <input type="text" class="form-control" id="Kunnr" name="Kunnr" placeholder="Enter Kunnr" required oninput="this.className = ''">
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Name1">Name1</label>
                            <input type="text" class="form-control" id="Name1" name="Name1" placeholder="Enter Name1" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Stcd1">Stcd1</label>
                            <input type="text" class="form-control" id="Stcd1" name="Stcd1" placeholder="Enter Stcd1" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="form-group">
                            <label for="Ort02">Ort02</label>
                            <input type="text" class="form-control" id="Ort02" name="Ort02" placeholder="Enter Ort02" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Stras">Stras</label>
                            <input type="text" class="form-control" id="Stras" name="Stras" placeholder="Enter Stras" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Mcod3">Mcod3</label>
                            <input type="text" class="form-control" id="Mcod3" name="Mcod3" placeholder="Enter Mcod3" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="form-group">
                            <label for="Regio">Regio</label>
                            <input type="text" class="form-control" id="Regio" name="Regio" placeholder="Enter Regio" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Land1">Land1</label>
                            <input type="text" class="form-control" id="Land1" name="Land1" placeholder="Enter Land1" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Pstlz">Pstlz</label>
                            <input type="text" class="form-control" id="Pstlz" name="Pstlz" placeholder="Enter Pstlz" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="form-group">
                            <label for="Telf1">Telf1</label>
                            <input type="text" class="form-control" id="Telf1" name="Telf1" placeholder="Enter Telf1" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Erdat">Erdat</label>
                            <input type="text" class="form-control" id="Erdat" name="Erdat" placeholder="Enter Erdat" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Altkn">Altkn</label>
                            <input type="text" class="form-control" id="Altkn" name="Altkn" placeholder="Enter Altkn" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="form-group">
                            <label for="Maktx">Maktx</label>
                            <input type="text" class="form-control" id="Maktx" name="Maktx" placeholder="Enter Maktx" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Matnr">Matnr</label>
                            <input type="text" class="form-control" id="Matnr" name="Matnr" placeholder="Enter Matnr" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Matkl">Matkl</label>
                            <input type="text" class="form-control" id="Matkl" name="Matkl" placeholder="Enter Matkl" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="form-group">
                            <label for="Meins">Meins</label>
                            <input type="text" class="form-control" id="Meins" name="Meins" placeholder="Enter Meins" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Mtart">Mtart</label>
                            <input type="text" class="form-control" id="Mtart" name="Mtart" placeholder="Enter Mtart" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Maktg">Maktg</label>
                            <input type="text" class="form-control" id="Maktg" name="Maktg" placeholder="Enter Maktg" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="form-group">
                            <label for="Knumh">Knumh</label>
                            <input type="text" class="form-control" id="Knumh" name="Knumh" placeholder="Enter Knumh" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Kbetr">Kbetr</label>
                            <input type="text" class="form-control" id="Kbetr" name="Kbetr" placeholder="Enter Kbetr" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Konwa">Konwa</label>
                            <input type="text" class="form-control" id="Konwa" name="Konwa" placeholder="Enter Konwa" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="form-group">
                            <label for="Kdmat">Kdmat</label>
                            <input type="text" class="form-control" id="Kdmat" name="Kdmat" placeholder="Enter Kdmat" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label for="Vkbur">Vkbur</label>
                            <input type="text" class="form-control" id="Vkbur" name="Vkbur" placeholder="Enter Vkbur" required>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                        <button type="submit" id="form-submit" class="btn btn-primary" style="display: none;">Submit</button>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </body>
</html>


<?php
include './footer.php';
?>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the crurrent tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            $("#form-submit").show();
            $("#nextBtn").hide();
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm())
            return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            //form-submit
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>

<script src="asset/js/multipleStep.js"></script>
