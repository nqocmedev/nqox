<?php
/**
 * Admin Contact Form Handler
 * This file processes contact form submissions
 */

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set content type to JSON
header('Content-Type: application/json');

// Database configuration (example)
define('DB_HOST', 'localhost');
define('DB_USER', 'ashxedfz_tvngoc');
define('DB_PASS', 'TongVanNgoc@207');
define('DB_NAME', 'ashxedfz_tvnqoc');

// Function to get database connection
function getDBConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $conn->set_charset("utf8mb4");
    return $conn;
}

// Handle contact form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    
    switch ($action) {
        case 'send_message':
            handleContactForm();
            break;
        case 'subscribe_newsletter':
            handleNewsletterSubscription();
            break;
        default:
            echo json_encode(['success' => false, 'message' => 'Invalid action']);
            break;
    }
}

function handleContactForm() {
    // Validate input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $contact_method = filter_input(INPUT_POST, 'contact_method', FILTER_SANITIZE_STRING);
    
    if (!$name || !$email || !$message) {
        echo json_encode(['success' => false, 'message' => 'Vui lòng điền đầy đủ thông tin']);
        return;
    }
    
    try {
        $conn = getDBConnection();
        
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message, contact_method, created_at) VALUES (?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("sssss", $name, $email, $subject, $message, $contact_method);
        
        if ($stmt->execute()) {
            // Send email notification (example)
            $to = "admin@devprofile.pro";
            $email_subject = "New Contact Message: " . $subject;
            $email_body = "Name: $name\nEmail: $email\nContact Method: $contact_method\n\nMessage:\n$message";
            $headers = "From: $email";
            
            // In production, use a proper mailer like PHPMailer
            // mail($to, $email_subject, $email_body, $headers);
            
            echo json_encode(['success' => true, 'message' => 'Tin nhắn đã được gửi thành công!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Có lỗi xảy ra khi gửi tin nhắn']);
        }
        
        $stmt->close();
        $conn->close();
        
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Lỗi hệ thống: ' . $e->getMessage()]);
    }
}

function handleNewsletterSubscription() {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    
    if (!$email) {
        echo json_encode(['success' => false, 'message' => 'Email không hợp lệ']);
        return;
    }
    
    try {
        $conn = getDBConnection();
        
        // Check if email already exists
        $checkStmt = $conn->prepare("SELECT id FROM newsletter_subscribers WHERE email = ?");
        $checkStmt->bind_param("s", $email);
        $checkStmt->execute();
        $checkStmt->store_result();
        
        if ($checkStmt->num_rows > 0) {
            echo json_encode(['success' => false, 'message' => 'Email này đã được đăng ký']);
            $checkStmt->close();
            return;
        }
        $checkStmt->close();
        
        // Insert new subscriber
        $stmt = $conn->prepare("INSERT INTO newsletter_subscribers (email, subscribed_at) VALUES (?, NOW())");
        $stmt->bind_param("s", $email);
        
        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Đăng ký nhận tin thành công!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Có lỗi xảy ra khi đăng ký']);
        }
        
        $stmt->close();
        $conn->close();
        
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Lỗi hệ thống: ' . $e->getMessage()]);
    }
}

// Get contact messages (admin function)
function getContactMessages($limit = 50) {
    try {
        $conn = getDBConnection();
        
        $stmt = $conn->prepare("SELECT id, name, email, subject, message, contact_method, created_at FROM contact_messages ORDER BY created_at DESC LIMIT ?");
        $stmt->bind_param("i", $limit);
        $stmt->execute();
        
        $result = $stmt->get_result();
        $messages = [];
        
        while ($row = $result->fetch_assoc()) {
            $messages[] = $row;
        }
        
        $stmt->close();
        $conn->close();
        
        return $messages;
        
    } catch (Exception $e) {
        return [];
    }
}

// Create necessary tables if they don't exist
function createTablesIfNotExist() {
    try {
        $conn = getDBConnection();
        
        // Create contact_messages table
        $contactTableSql = "CREATE TABLE IF NOT EXISTS contact_messages (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            subject VARCHAR(200),
            message TEXT NOT NULL,
            contact_method VARCHAR(50),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            read_status BOOLEAN DEFAULT FALSE
        )";
        
        // Create newsletter_subscribers table
        $newsletterTableSql = "CREATE TABLE IF NOT EXISTS newsletter_subscribers (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(100) NOT NULL UNIQUE,
            subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            active BOOLEAN DEFAULT TRUE
        )";
        
        $conn->query($contactTableSql);
        $conn->query($newsletterTableSql);
        
        $conn->close();
        
    } catch (Exception $e) {
        // Silent fail - tables might already exist
    }
}

// Uncomment to create tables on first run
// createTablesIfNotExist();