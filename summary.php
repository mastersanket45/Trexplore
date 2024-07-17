<?php
// Replace these values with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trexplore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute SQL queries
$sql_destination = "SELECT * FROM destination WHERE going_from = 'Mangalore' AND going_to = 'Bangalore'";
$result_destination = $conn->query($sql_destination);

$sql_transportation = "SELECT * FROM transportation WHERE goingfrom = 'Mangalore' AND going_to = 'Bangalore'";
$result_transportation = $conn->query($sql_transportation);

$sql_accommodations = "SELECT * FROM accommodations
JOIN accommodations AS a ON accommodations.TripId = a.TripId
WHERE accommodations.goingfrom = 'Mangalore' AND accommodation.going_to = 'Bangalore'";
$result_accommodations = $conn->query($sql_accommodations);


$sql_tourist_attractions = "SELECT * FROM touristattractions WHERE TripId IN (SELECT TripId FROM destination WHERE going_from = 'Mangalore' AND going_to = 'Bangalore')";
$result_tourist_attractions = $conn->query($sql_tourist_attractions);

$sql_restaurants = "SELECT * FROM restaurant
JOIN touristattractions ON restaurant.TA_id = touristattractions.TA_id
WHERE touristattractions.TripId IN (SELECT TripId FROM destination WHERE going_from = 'Mangalore' AND going_to = 'Bangalore')";
$result_restaurants = $conn->query($sql_restaurants);

// Process and display results (you can customize this part based on your needs)
if ($result_destination->num_rows > 0) {
    while ($row = $result_destination->fetch_assoc()) {
        // Display destination details
        print_r($row);
    }
}

if ($result_transportation->num_rows > 0) {
    while ($row = $result_transportation->fetch_assoc()) {
        // Display transportation details
        print_r($row);
    }
}

if ($result_accommodation->num_rows > 0) {
    while ($row = $result_accommodation->fetch_assoc()) {
        // Display accommodation details
        print_r($row);
    }
}

if ($result_tourist_attractions->num_rows > 0) {
    while ($row = $result_tourist_attractions->fetch_assoc()) {
        // Display tourist attractions details
        print_r($row);
    }
}

if ($result_restaurants->num_rows > 0) {
    while ($row = $result_restaurants->fetch_assoc()) {
        // Display restaurant details
        print_r($row);
    }
}

// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trip Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        section {
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        h2 {
            color: #333;
        }

        .nested-table {
            margin-top: 10px;
        }

        .nested-table th, .nested-table td {
            border: 1px solid #ddd;
            padding: 10px;
        }

        .nested-table th {
            background-color: #666;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <h1>Trip Details</h1>
    </header>

    <section>
        <h2>You Are Going From:</h2>
        <table>
            <tr>
                <th>Going From</th>
            </tr>
            <tr>
                <td id="goingFrom"></td>
            </tr>
        </table>
    </section>

    <section>
        <h2>You Are Going To:</h2>
        <table>
            <tr>
                <th>Going To</th>
            </tr>
            <tr>
                <td id="goingTo"></td>
            </tr>
        </table>
    </section>

    <section>
        <h2>Travel Information</h2>
        <div class="nested-table" id="modeTable">
            <h3>Mode of Travel</h3>
            <table>
                <tr>
                    <th>Bus</th>
                    <th>Train</th>
                    <th>Flight</th>
                </tr>
                <tr>
                    <td id="busDetails">Bus details go here...</td>
                    <td id="trainDetails">Train details go here...</td>
                    <td id="flightDetails">Flight details go here...</td>
                </tr>
            </table>
        </div>
    </section>

    <section>
        <h2>Accommodation</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Cost</th>
                <th>Contact No</th>
            </tr>
            <tr>
                <td id="accommodation1">Accommodation 1</td>
                <td id="accommodation1Address">Address 1</td>
                <td id="accommodation1Cost">Cost 1</td>
                <td id="accommodation1Contact">Contact 1</td>
            </tr>
            <tr>
                <td id="accommodation2">Accommodation 2</td>
                <td id="accommodation2Address">Address 2</td>
                <td id="accommodation2Cost">Cost 2</td>
                <td id="accommodation2Contact">Contact 2</td>
            </tr>
            <!-- Add more rows for additional accommodations -->
        </table>
    </section>

    <section>
        <h2>Tourist Attractions</h2>
        <table>
            <tr>
                <th>Attraction</th>
                <th>Details</th>
            </tr>
            <tr>
                <td id="attraction1">Attraction 1</td>
                <td id="attraction1Details">Details go here...</td>
            </tr>
            <tr>
                <td id="attraction2">Attraction 2</td>
                <td id="attraction2Details">Details go here...</td>
            </tr>
            <!-- Add more rows for additional attractions -->
        </table>
    </section>

    <section>
        <h2>Restaurants</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>
            <tr>
                <td id="restaurant1">Restaurant 1</td>
                <td id="restaurant1Details">Address 1</td>
            </tr>
            <tr>
                <td id="restaurant2">Restaurant 2</td>
                <td id="restaurant2Details">Address 2</td>
            </tr>
            <!-- Add more rows for additional restaurants -->
        </table>
    </section>

  
</body>

</html>
