<?php
require_once "config.php";

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sales_sql = "SELECT DATE_FORMAT(orderdate, '%Y-%m') AS month, COUNT(id_order) AS total_orders, SUM(total_amount) AS total_sales
              FROM orders
              GROUP BY month
              ORDER BY month ASC";
$sales_result = $mysqli->query($sales_sql);

if (!$sales_result) {
    die("Query failed: " . $mysqli->error);
}

$sales_data = [];
if ($sales_result->num_rows > 0) {
    while ($row = $sales_result->fetch_assoc()) {
        $sales_data[] = $row;
    }
}

$users_sql = "SELECT DATE_FORMAT(registration_date, '%Y-%m') AS month, COUNT(id_account) AS total_users
              FROM accounts
              GROUP BY month
              ORDER BY month ASC";
$users_result = $mysqli->query($users_sql);

if (!$users_result) {
    die("Query failed: " . $mysqli->error);
}

$users_data = [];
if ($users_result->num_rows > 0) {
    while ($row = $users_result->fetch_assoc()) {
        $users_data[] = $row;
    }
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sales and User Statistics</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container {
            margin-top: 50px;
        }
        canvas {
            width: 100%;
            height: 400px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center">Sales and User Statistics</h2>
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">Sales Statistics</h3>
            <canvas id="salesChart"></canvas>
        </div>
        <div class="col-md-6">
            <h3 class="text-center">User Statistics</h3>
            <canvas id="usersChart"></canvas>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h3 class="text-center">Monthly Details</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Month</th>
                        <th>Total Orders</th>
                        <th>Total Sales</th>
                        <th>Total Users</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sales_data as $index => $data): ?>
                        <tr>
                            <td><?php echo $data['month']; ?></td>
                            <td><?php echo $data['total_orders']; ?></td>
                            <td><?php echo $data['total_sales']; ?></td>
                            <td><?php echo $users_data[$index]['total_users']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const salesData = <?php echo json_encode($sales_data); ?>;
        const salesLabels = salesData.map(data => data.month);
        const totalOrders = salesData.map(data => data.total_orders);
        const totalSales = salesData.map(data => data.total_sales);

        const salesCtx = document.getElementById('salesChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: salesLabels,
                datasets: [
                    {
                        label: 'Total Orders',
                        data: totalOrders,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 1
                    },
                    {
                        label: 'Total Sales',
                        data: totalSales,
                        borderColor: 'rgba(153, 102, 255, 1)',
                        backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const usersData = <?php echo json_encode($users_data); ?>;
        const usersLabels = usersData.map(data => data.month);
        const totalUsers = usersData.map(data => data.total_users);

        const usersCtx = document.getElementById('usersChart').getContext('2d');
        new Chart(usersCtx, {
            type: 'bar',
            data: {
                labels: usersLabels,
                datasets: [{
                    label: 'Total Users',
                    data: totalUsers,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
</body>
</html>
