<!-- dashboard.php -->
<div id="dasboard">
    <div id="main-content" class="main-content">
        <h1>List Data Feedback</h1>
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Created At</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Inisialisasi variabel counter
                $counter = 1;

                // Display comments in the table
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$counter}</td>"; // Menggunakan counter sebagai ID
                    echo "<td>{$row['created_at']}</td>";
                    echo "<td>{$row['name']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['comment']}</td>";
                    echo "<td><a href='admin.php?delete={$row['id']}' onclick='return confirmDelete();'>Delete</a></td>";
                    echo "</tr>";

                    // Increment counter setiap kali loop
                    $counter++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
