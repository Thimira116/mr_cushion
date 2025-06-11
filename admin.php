<?php
require 'db.php';

// Simple admin login protection
session_start();
$admin_user = 'Thimira';
$admin_pass = 'abcd1234';

// Handle login
if (isset($_POST['login'])) {
    if ($_POST['username'] === $admin_user && $_POST['password'] === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        $error = "Invalid username or password";
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php"); // <--- Changed this line!
    exit;
}

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Admin Login - Mr. Cushion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f9a825, #fbc02d);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-container {
            background: white;
            padding: 2.5rem 2rem;
            border-radius: 12px;
            box-shadow: 0 12px 25px rgb(0 0 0 / 0.15);
            width: 90%; /* Make width responsive */
            max-width: 320px; /* Limit max width */
        }
        h3 {
            color: #f9a825;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .btn-primary {
            background-color: #f9a825;
            border: none;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #c17900;
        }
        .alert {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="login-container shadow-sm">
        <h3>Admin Login</h3>
        <?php if (!empty($error)) : ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="POST" novalidate>
            <div class="mb-3">
                <label for="username" class="form-label fw-semibold">Username</label>
                <input type="text" name="username" id="username" class="form-control" required autofocus>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
</html>
<?php
    exit; // stop rest of page loading
}

// If admin is logged in, show dashboard:
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Admin Panel - Mr. Cushion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d45f034cea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fefefe;
            padding-top: 1rem; /* Adjusted for smaller screens */
        }
        h2, h4 {
            color: #f9a825;
            font-weight: 700;
        }
        .logout-btn {
            background-color: #d32f2f;
            border: none;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .logout-btn:hover {
            background-color: #9a0007;
        }
        table {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgb(0 0 0 / 0.1);
        }
        thead {
            background-color: #f9a825;
            color: white;
            font-weight: 600;
        }
        tbody tr:hover {
            background-color: #fff9c4;
        }
        th, td {
            vertical-align: middle !important;
            white-space: nowrap; /* Prevent text wrapping in table cells */
        }
        p.no-data {
            font-style: italic;
            color: #666;
            margin-top: 1rem;
        }
        .container {
            max-width: 1100px;
            padding-left: 15px; /* Added padding for smaller screens */
            padding-right: 15px; /* Added padding for smaller screens */
        }
        /* Navbar */
        .navbar {
            background-color: #f9a825; /* warm yellow */
        }
        .navbar-brand img {
            max-height: 60px;
            border-radius: 50%;
        }
        .navbar-brand { /* Added specific style for brand text */
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            font-weight: bold;
        }
        .navbar-brand:hover { /* Keep color on hover */
            color: white;
        }
        /* New style for smaller screens */
        .admin-header {
            display: flex;
            flex-direction: column; /* Stacks items vertically on small screens */
            align-items: center; /* Centers items horizontally on small screens */
            text-align: center;
        }
        @media (min-width: 768px) { /* On medium screens and up */
            .admin-header {
                flex-direction: row; /* Arranges items horizontally */
                justify-content: space-between; /* Puts space between them */
                align-items: center; /* Aligns them vertically in the middle */
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="container">

    <nav class="navbar navbar-expand-lg">
            <div class="container-fluid"> <a class="navbar-brand" href="#">
                    <img src="logo.jpg" alt="Mr Cushion Logo" />
                    <span class="d-none d-sm-inline">Mr. Cushion PVT (LTD)</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navMenu">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <li class="nav-item">
                            <a href="admin.php?logout=1" class="btn logout-btn nav-link">Logout</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>

        <div class="admin-header mb-4"> <h2>Admin Dashboard</h2>
            </div>

        <h4>Bookings</h4>
        <?php
        $stmt = $pdo->query("SELECT * FROM bookings ORDER BY booking_date DESC");
        $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($bookings) > 0):
        ?>
            <div class="table-responsive"> <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Service</th>
                            <th>Preferred Date</th>
                            <th>Note</th>
                            <th>Booking Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $booking): ?>
                            <tr>
                                <td><?= htmlspecialchars($booking['id']) ?></td>
                                <td><?= htmlspecialchars($booking['full_name']) ?></td>
                                <td><?= htmlspecialchars($booking['phone']) ?></td>
                                <td><?= htmlspecialchars($booking['email']) ?></td>
                                <td><?= htmlspecialchars($booking['service']) ?></td>
                                <td><?= htmlspecialchars($booking['preferred_date']) ?></td>
                                <td><?= htmlspecialchars($booking['note']) ?></td>
                                <td><?= htmlspecialchars($booking['booking_date']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="no-data">No bookings found.</p>
        <?php endif; ?>

        <h4 class="mt-5">Feedbacks</h4>
        <?php
        $stmt = $pdo->query("SELECT * FROM feedbacks ORDER BY submitted_at DESC");
        $feedbacks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($feedbacks) > 0):
        ?>
            <div class="table-responsive"> <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Feedback</th>
                            <th>Rating</th>
                            <th>Submitted At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($feedbacks as $fb): ?>
                            <tr>
                                <td><?= htmlspecialchars($fb['id']) ?></td>
                                <td><?= htmlspecialchars($fb['name']) ?></td>
                                <td><?= htmlspecialchars($fb['feedback']) ?></td>
                                <td><?= htmlspecialchars($fb['rating']) ?></td>
                                <td><?= htmlspecialchars($fb['submitted_at']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="no-data">No feedbacks found.</p>
        <?php endif; ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> </body>
</html>