<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $message = nl2br(htmlspecialchars($_POST['message']));

  // Prepare email payload
  $data = [
    "from" => "onboarding@resend.dev", // temporary sender for sandbox
    "to" => ["ask.querytel@gmail.com"],
    "subject" => "📩 New Contact Form Submission",
    "html" => "
        <div style='font-family: Arial, Helvetica, sans-serif; background:#f4f6f8; padding:24px;'>
          <table width='100%' cellpadding='0' cellspacing='0' style='max-width:600px; margin:auto; background:#ffffff; border-radius:12px; box-shadow:0 8px 30px rgba(0,0,0,0.06);'>
            <tr>
              <td style='padding:24px;'>
                <h2 style='color:#0F172A; margin-bottom:8px;'>New Contact Submission</h2>
                <p style='color:#475569; margin-bottom:24px;'>A new message has been received from the Al Musaab website contact form.</p>

                <table width='100%' cellpadding='6' cellspacing='0' style='border-collapse:collapse;'>
                  <tr><td style='color:#334155;'><strong>Name:</strong></td><td>$name</td></tr>
                  <tr><td style='color:#334155;'><strong>Email:</strong></td><td><a href='mailto:$email'>$email</a></td></tr>
                  <tr><td style='color:#334155;'><strong>Phone:</strong></td><td>$phone</td></tr>
                </table>

                <hr style='margin:24px 0; border:none; border-top:1px solid #e2e8f0;'>

                <p style='color:#0F172A;'><strong>Message:</strong></p>
                <p style='color:#334155; line-height:1.6;'>$message</p>

                <hr style='margin:24px 0; border:none; border-top:1px solid #e2e8f0;'>

                <p style='color:#94a3b8; font-size:13px;'>This email was sent automatically from the Al Musaab website contact form.</p>
              </td>
            </tr>
          </table>
        </div>
        ",
    "text" => "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message"
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
  $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  if ($status >= 200 && $status < 300) {
    $msg = "Your message has been sent successfully!";
    $color = "#0ea5e9"; // blue
    $accent = "#f97316"; // orange
  } else {
    $msg = "Message failed to send. Please try again later.";
    $color = "#ef4444"; // red
    $accent = "#f97316";
  }

  echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Message Status | Al Musaab</title>
      <style>
        @keyframes fadeIn {
          from { opacity: 0; transform: translateY(10px); }
          to { opacity: 1; transform: translateY(0); }
        }
        body {
          font-family: 'Inter', Arial, sans-serif;
          background: linear-gradient(135deg, #0ea5e9 0%, #f97316 100%);
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
          margin: 0;
          color: #0f172a;
        }
        .card {
          background: #ffffff;
          padding: 2.5rem 3rem;
          border-radius: 1.25rem;
          box-shadow: 0 10px 40px rgba(0,0,0,0.15);
          text-align: center;
          width: 90%;
          max-width: 450px;
          animation: fadeIn 0.5s ease-out;
        }
        .card::before {
          content: '';
          display: block;
          width: 80px;
          height: 4px;
          background: $accent;
          border-radius: 2px;
          margin: 0 auto 1rem;
        }
        .status {
          font-size: 1.4rem;
          font-weight: 600;
          color: $color;
          margin-bottom: 1rem;
        }
        p {
          color: #475569;
          font-size: 0.95rem;
        }
        .back-btn {
          display: inline-block;
          margin-top: 1.5rem;
          padding: 0.6rem 1.5rem;
          border-radius: 8px;
          background: $accent;
          color: #fff;
          text-decoration: none;
          font-weight: 500;
          transition: background 0.2s;
        }
        .back-btn:hover {
          background: #ea580c;
        }
      </style>
      <script>
        setTimeout(() => window.history.back(), 3000);
      </script>
    </head>
    <body>
      <div class='card'>
        <div class='status' style='color:$color;'>$msg</div>
        <p>You’ll be redirected back in 3 seconds.</p>
        <a href='javascript:window.history.back()' class='back-btn'>Go Back</a>
      </div>
    </body>
    </html>
    ";
} else {
  echo "Invalid request.";
}
?>