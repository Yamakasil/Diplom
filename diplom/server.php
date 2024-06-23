<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dental_clinic";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'get_new_appointments':
        getNewAppointments($conn);
        break;
    case 'get_all_appointments':
        getAllAppointments($conn);
        break;
    case 'search_appointments':
        searchAppointments($conn);
        break;
    case 'add_appointment':
        addAppointment($conn);
        break;
    case 'update_appointment':
        updateAppointment($conn);
        break;
    case 'delete_appointment':
        deleteAppointment($conn);
        break;
    case 'update_status':
        updateStatus($conn);
        break;
    case 'get_appointment':
        getAppointment($conn);
        break;
    default:
        echo json_encode(["error" => "Invalid action"]);
}

function getNewAppointments($conn)
{
    $sql = "SELECT * FROM appointments WHERE status = 'new'";
    $result = $conn->query($sql);

    $appointments = [];
    while ($row = $result->fetch_assoc()) {
        $appointments[] = $row;
    }

    echo json_encode($appointments);
}

function getAllAppointments($conn)
{
    $sql = "SELECT * FROM appointments";
    $result = $conn->query($sql);

    $appointments = [];
    while ($row = $result->fetch_assoc()) {
        $appointments[] = $row;
    }

    echo json_encode($appointments);
}

function searchAppointments($conn)
{
    $lastName = $_GET['last_name'] ?? '';
    $date = $_GET['date'] ?? '';

    $sql = "SELECT * FROM appointments WHERE 1=1";
    if ($lastName) {
        $sql .= " AND last_name LIKE '%$lastName%'";
    }
    if ($date) {
        $sql .= " AND DATE(appointment_date) = '$date'";
    }

    $result = $conn->query($sql);

    $appointments = [];
    while ($row = $result->fetch_assoc()) {
        $appointments[] = $row;
    }

    echo json_encode($appointments);
}

function addAppointment($conn)
{
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $serviceType = $_POST['service_type'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];
    $appointmentDateTime = $_POST['appointment_date'];

    $sql = "INSERT INTO appointments (first_name, last_name, service_type, phone, comment, appointment_date, status)
            VALUES ('$firstName', '$lastName', '$serviceType', '$phone', '$comment', '$appointmentDateTime', 'new')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => "New record created successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
}

function updateAppointment($conn)
{
    $id = $_POST['id'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $serviceType = $_POST['service_type'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];
    $appointmentDateTime = $_POST['appointment_date'];

    $sql = "UPDATE appointments SET first_name='$firstName', last_name='$lastName', service_type='$serviceType',
            phone='$phone', comment='$comment', appointment_date='$appointmentDateTime'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => "Record updated successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
}

function deleteAppointment($conn)
{
    $id = $_POST['id'];
    $sql = "DELETE FROM appointments WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => "Record deleted successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
}

function updateStatus($conn)
{
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql = "UPDATE appointments SET status='$status' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => "Status updated successfully"]);
    } else {
        echo json_encode(["error" => "Error: " . $sql . "<br>" . $conn->error]);
    }
}

function getAppointment($conn)
{
    $id = $_GET['id'];

    $sql = "SELECT * FROM appointments WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo json_encode(["error" => "Record not found"]);
    }
}

$conn->close();
?>
