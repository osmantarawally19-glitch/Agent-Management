<?php
$serverName="localhost";
$userName="root";
$pass="";
$dbName="AgentManagement";

// Connect
$conn = mysqli_connect($serverName, $userName, $pass, $dbName);

if (!$conn) {
    die('Connection error: ' . mysqli_connect_error());
}

$sqlDB = "INSERT INTO roles (role_name) VALUES
('Player'),
('Admin'),
('Club Manager'),
('Agent')";
    
if (mysqli_query($conn, $sqlDB)) {
    echo "Record inserted INTO rOLES successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}

$sqlDB = "INSERT INTO users (name, email, password, role_id) VALUES
('Martha Admin', 'admin1@example.com', MD5('password123'), 2),
('Fatima Admin', 'admin2@example.com', MD5('password123'), 2),

('Mohamed Player', 'player1@example.com', MD5('pass123'), 1),
('Hawa Player', 'player2@example.com', MD5('pass123'), 1),

('Osman Agent', 'agent1@example.com', MD5('agentpass'), 4),
('Samura Agent', 'agent2@example.com', MD5('agentpass'), 4),

('Joseph Manager', 'manager1@example.com', MD5('manage12'), 3),
('David Manager', 'manager2@example.com', MD5('manage12'), 3)";
    
if (mysqli_query($conn, $sqlDB)) {
    echo "Record inserted INTO uSERS successfully";
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}
?>
