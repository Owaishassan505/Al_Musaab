<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Invalid email address."]);
        exit;
    }

    $apiKey = "re_DYsRMZGM_31MwzsngX2e5wPBd6yqz68oy";

    // Build email content for admin notification
    $data = [
        "from" => "onboarding@resend.dev",
        "to" => ["ask.querytel@gmail.com"],
        "subject" => "📰 New Newsletter Subscription",
        "html" => "
        <div style='font-family: Arial, sans-serif; background:#f4f6f8; padding:24px;'>
          <table style='max-width:500px; margin:auto; background:#fff; border-radius:10px; box-shadow:0 6px 25px rgba(0,0,0,0.08);'>
            <tr><td style='padding:24px;'>
              <h2 style='color:#0F172A;'>New Newsletter Subscription</h2>
              <p style='color:#475569;'>A new user has subscribed to the Al Musaab newsletter.</p>
              <p style='font-size:1.1rem; margin-top:20px; color:#0ea5e9;'><strong>Email:</strong> $email</p>
              <hr style='margin:24px 0; border:none; border-top:1px solid #e2e8f0;'>
              <p style='font-size:13px; color:#94a3b8;'>This notification was generated automatically by the Al Musaab website.</p>
            </td></tr>
          </table>
        </div>",
        "text" => "New newsletter subscription: $email"
    ];

    // Send using Resend API
    $ch = curl_init("https://api.resend.com/emails");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $apiKey",
        "Content-Type: application/json"
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($status >= 200 && $status < 300) {
        echo json_encode([
            "success" => true,
            "message" => "Thank you for subscribing! You’ll hear from us soon."
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "message" => "Failed to subscribe. Please try again later."
        ]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method."]);
}
?>