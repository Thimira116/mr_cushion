<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mr_cushion";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, feedback, rating, image FROM feedbacks ORDER BY id DESC";
$result = $conn->query($sql);

if (!$result) {
  die("Error in query: " . $conn->error);
}
?>

<div class="container py-5">
  <h3 class="text-center text-dark fw-bold mb-4">Feedbacks</h3>

  <?php if ($result->num_rows > 0): ?>
    <div class="row g-4">
      <?php while($row = $result->fetch_assoc()): ?>
        <div class="col-md-6 col-lg-4">
          <div class="card shadow-sm border-warning h-100">
            <div class="card-body">
              <!-- Check values on each row -->
              <h5 class="card-title text-warning">
                <?php echo !empty($row['name']) ? htmlspecialchars($row['name']) : '<em>No Name</em>'; ?>
              </h5>
              <p class="card-text">
                <?php echo !empty($row['feedback']) ? nl2br(htmlspecialchars($row['feedback'])) : '<em>No Feedback</em>'; ?>
              </p>
              <div class="text-warning mb-2">
                <?php echo !empty($row['rating']) ? htmlspecialchars($row['rating']) : '<em>No Rating</em>'; ?>
              </div>

              <?php if (!empty($row['image'])): ?>
                <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Customer Image" style="max-width: 100%; height: auto; border-radius: 5px;">
              <?php else: ?>
                <p><em>No image uploaded</em></p>
              <?php endif; ?>

            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else: ?>
    <p class="text-center text-muted">No feedback available yet.</p>
  <?php endif; ?>
</div>

<?php $conn->close(); ?>
