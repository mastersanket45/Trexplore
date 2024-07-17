

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plan Your Trip</title>
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1446038202205-1c96430dbdab?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }

     
    .content {
        text-align: right; 
    }

    .content ul {
        list-style: none; 
        padding: 0; /* Remove default padding */
        margin-top 50px;; /* Remove default margin */
       
    }

    .content ul li {
        display: inline; /* Display list items horizontally */
        margin-right: 20px; /* Add more spacing between items if needed */
    }

    .content ul li a {
        color: #000;
        font-size: 20px;
        font-weight: bold;
        font-family: 'Poppins', sans-serif;
        text-decoration: none; /* Remove underline from links */
    }

    .content ul li a:hover {
        color: #ff5733; /* Change the color on hover */
    }






        h1 {
            font-size: 80px;
            color: #352F44;
            font-family: 'Helvetica', sans-serif; 
        }

        .form1 {
            width: 400px;
            height: 100px;
        }
        .form2 {
            width: 400px;
            height: 50px;
        }


        /* Input and label styling */
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 20px; 
            font-weight:bold;
        }

        input, select {
            width: 25%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            font-size: 14px; /* Increase font size for inputs and selects */
        }

        /* Navigation link styling */
        .navigation li a {
            color: #ff5733; /* Change color for navigation links */
            font-family: 'Verdana', sans-serif; /* Change font type for navigation links */
            ;

        }

        /* Search button styling */
        button {
            background-color: #a12408;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px; /* Increase font size for the button */
            font-family: 'Verdana', sans-serif; /* Change font type for the button */
        }
    </style>
</head>

<body>
   <center> 
    <nav class="nav-bar" id="navbar">
        <div class="content">
            <ul class="navigation">
           
        <li class="link"><a href="index.php">Home</a></li>
        <li class="link"><a href="profile.php">Profile</a></li>

        <li class="link"><a href="index.php">About us</a></li>
        <!-- On the current page -->


        <li class="link"><a href="index.php">Contact</a></li>
            </ul>
            <label for='bars' class="icon-bars"><i class="ri-bar-chart-2-fill"></i></label>
        </div>
    </nav>
    <br><br>

    <section class="Destinations">
        <div class="dest">
            <h1>Find your Next tour!</h1><br>
        </div>
        <div class="search">
        
        <label for="going_from">Where Are You Going From?</label>
<select id="going_from" name="going_from" class="input">
    <option value="">Select departure</option>
    <option value="Bangalore">Bangalore</option>
    <option value="Mangalore">Mangalore</option>
    <br><br>
</select>
<label for="going_to">Where Are You Going To?</label>
<select id="going_to" name="going_to" class="input">
    <option value="">Select destination</option>
    <option value="Bangalore">Bangalore</option>
    <option value="Mangalore">Mangalore</option>
</select>


<label for="date-input">Select your date:</label>
                    <input type="date" id="date-input" name="date">

                    <br><br>

                
             
                </div>
<br><br>
                
                <button type="button" name="submit" onclick="submitForm()"><a href="summary.php">Draft Your Travel Itinerary</button>
      
            </form2>
            




            

            
            
        </div>
    </section>
            </center> 
            <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your existing meta tags and styles -->

    <script>
        function submitForm() {
            // Get form values
            var goingFrom = document.getElementById('going_from').value;
            var goingTo = document.getElementById('going_to').value;
            var date = document.getElementById('date-input').value;

            // Validate form data (you can add more validation if needed)
            if (goingFrom === "" || goingTo === "" || date === "") {
                alert("Please fill in all the fields.");
                return;
            }

            // Redirect to summary.php with query parameters
            window.location.href = 'summary.php?going_from=' + goingFrom + '&going_to=' + goingTo + '&date=' + date;
        }
    </script>
</head>

<body>
    <!-- Your existing HTML content -->

    <section class="Destinations">
        <div class="dest">
            <h1>Find your Next tour!</h1><br>
        </div>
        <div class="search">
            <form>
                <!-- Your existing form inputs -->

                <label for="going_from">Where Are You Going From?</label>
                <select id="going_from" name="going_from" class="input">
                    <!-- Your options -->
                </select>
                <label for="going_to">Where Are You Going To?</label>
                <select id="going_to" name="going_to" class="input">
                    <!-- Your options -->
                </select>
                <label for="date-input">Select your date:</label>
                <input type="date" id="date-input" name="date">
                <br><br>
                <button type="button" name="submit" onclick="submitForm()">Draft Your Travel Itinerary</button>
            </form>
        </div>
    </section>
</body>

</html>

</body>

</html>