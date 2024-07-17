<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- DataTable CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0-alpha3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">

    <title>DataTable | devRasen</title>
</head>

<body>
    <!-- Main Content -->
    <div class="container p-3 my-5 bg-light border border-primary">
        <!-- DataTable Code starts -->
        <table id="example" class="table table-striped nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Date</th>
                    <th>Mode</th>
                    <th>Accommodation</th>
                    <th>Activity</th>
                    <th>Activity cost</th>
                    <th>Nearby Places</th>
                    <th>Transport services</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <!-- DataTable JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>

    <!-- Custom JS -->
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                responsive: true,
                ajax: {
                    url: 'fetch_data.php', // Replace with your server-side script
                    dataSrc: ''
                },
                columns: [
                    { 
                        data: null,
                        render: function (data, type, row, meta) {
                            // 'meta.row' is the row index, starting from 0
                            return meta.row + 1;
                        }
                    },
                    { data: 'from' },
                    { data: 'to' },
                    { data: 'date' },
                    { data: 'mode' },
                    { data: 'accommodation' },
                    { data: 'activity' },
                    { data: 'activity_cost' },
                    { data: 'nearby_places' },
                    { data: 'transport_services' }
                ]
            });
        });
    </script>
</body>

</html>
