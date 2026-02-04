<?php
// Handle article feedback emails using Resend API

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $articleId = isset($_POST['articleId']) ? sanitize_input($_POST['articleId']) : '';
    $articleTitle = isset($_POST['articleTitle']) ? sanitize_input($_POST['articleTitle']) : '';
    $helpful = isset($_POST['helpful']) ? sanitize_input($_POST['helpful']) : '';

    if (empty($articleId) || empty($articleTitle) || empty($helpful)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Missing required fields']);
        exit;
    }

    $helpfulText = ($helpful === 'yes') ? 'was helpful' : 'was not helpful';
    $subject = "Article Feedback: $articleTitle";
    $htmlMessage = "
    <div style='font-family: Arial, Helvetica, sans-serif; background:#f4f6f8; padding:24px;'>
      <table width='100%' cellpadding='0' cellspacing='0' style='max-width:600px; margin:auto; background:#ffffff; border-radius:12px; box-shadow:0 8px 30px rgba(0,0,0,0.06);'>
        <tr>
          <td style='padding:24px;'>
            <h2 style='color:#0F172A; margin-bottom:8px;'>Article Feedback</h2>
            <p style='color:#475569; margin-bottom:24px;'>Feedback received for an article.</p>

            <table width='100%' cellpadding='6' cellspacing='0' style='border-collapse:collapse;'>
              <tr><td style='color:#334155;'><strong>Article:</strong></td><td>$articleTitle</td></tr>
              <tr><td style='color:#334155;'><strong>Article ID:</strong></td><td>$articleId</td></tr>
              <tr><td style='color:#334155;'><strong>Feedback:</strong></td><td>$helpfulText</td></tr>
              <tr><td style='color:#334155;'><strong>Received:</strong></td><td>" . date('Y-m-d H:i:s') . "</td></tr>
            </table>

            <hr style='margin:24px 0; border:none; border-top:1px solid #e2e8f0;'>

            <p style='color:#94a3b8; font-size:13px;'>This email was sent automatically from the Al Musaab website article feedback system.</p>
          </td>
        </tr>
      </table>
    </div>
    ";

    $textMessage = "Article Feedback\n\nArticle: $articleTitle\nArticle ID: $articleId\nFeedback: $helpfulText\nReceived: " . date('Y-m-d H:i:s');

    // Prepare email payload
    $data = [
        "from" => "onboarding@resend.dev",
        "to" => ["ask.querytel@gmail.com"],
        "subject" => $subject,
        "html" => $htmlMessage,
        "text" => $textMessage
    ];

    $apiKey = "re_DYsRMZGM_31MwzsngX2e5wPBd6yqz68oy";

    $ch = curl_init("https://api.resend.com/emails");
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $apiKey",
        "Content-Type: application/json"
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 200) {
        http_response_code(200);
        echo json_encode(['success' => true, 'message' => 'Thank you for your feedback']);
    } else {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Failed to send feedback']);
    }
    exit;
}

function sanitize_input($input)
{
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}
?>