<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $industry = htmlspecialchars($_POST['industry'] ?? 'Not specified');
  $pain_point = htmlspecialchars($_POST['pain_point'] ?? 'Not specified');
  $hours = htmlspecialchars($_POST['hours'] ?? 'Not specified');
  $message = nl2br(htmlspecialchars($_POST['message'] ?? 'No additional details'));

  // Prepare email payload
  $data = [
    "from" => "onboarding@resend.dev",
    "to" => ["ask.querytel@gmail.com"],
    "subject" => "🤖 New AI Agents Inquiry - $name",
    "html" => "
        <div style='font-family: Arial, Helvetica, sans-serif; background:#f4f6f8; padding:24px;'>
          <table width='100%' cellpadding='0' cellspacing='0' style='max-width:600px; margin:auto; background:#ffffff; border-radius:12px; box-shadow:0 8px 30px rgba(0,0,0,0.06);'>
            <tr>
              <td style='padding:24px;'>
                <h2 style='color:#0F172A; margin-bottom:8px;'>🤖 New AI Agents Business Inquiry</h2>
                <p style='color:#475569; margin-bottom:24px;'>A prospective client has submitted an inquiry about AI Agent automation.</p>

                <table width='100%' cellpadding='8' cellspacing='0' style='border-collapse:collapse; border:1px solid #e2e8f0; border-radius:8px; margin-bottom:24px;'>
                  <tr style='background:#f8fafc;'>
                    <td style='color:#334155; font-weight:bold; width:35%; border-right:1px solid #e2e8f0;'><strong>Name:</strong></td>
                    <td style='color:#0f172a;'>$name</td>
                  </tr>
                  <tr>
                    <td style='color:#334155; font-weight:bold; border-right:1px solid #e2e8f0;'><strong>Email:</strong></td>
                    <td style='color:#0f172a;'><a href='mailto:$email'>$email</a></td>
                  </tr>
                  <tr style='background:#f8fafc;'>
                    <td style='color:#334155; font-weight:bold; border-right:1px solid #e2e8f0;'><strong>Phone:</strong></td>
                    <td style='color:#0f172a;'>$phone</td>
                  </tr>
                  <tr>
                    <td style='color:#334155; font-weight:bold; border-right:1px solid #e2e8f0;'><strong>Industry:</strong></td>
                    <td style='color:#0f172a;'>$industry</td>
                  </tr>
                  <tr style='background:#f8fafc;'>
                    <td style='color:#334155; font-weight:bold; border-right:1px solid #e2e8f0;'><strong>Pain Point:</strong></td>
                    <td style='color:#0f172a;'>$pain_point</td>
                  </tr>
                  <tr>
                    <td style='color:#334155; font-weight:bold; border-right:1px solid #e2e8f0;'><strong>Hours/Week:</strong></td>
                    <td style='color:#0f172a;'>$hours</td>
                  </tr>
                </table>

                <p style='color:#0F172A; margin-bottom:8px;'><strong>Additional Details:</strong></p>
                <p style='color:#334155; line-height:1.6; background:#f8fafc; padding:12px; border-radius:6px;'>$message</p>

                <hr style='margin:24px 0; border:none; border-top:1px solid #e2e8f0;'>

                <p style='color:#94a3b8; font-size:13px;'>This email was sent automatically from the AI Agents page contact form on the QueryTel website.</p>
              </td>
            </tr>
          </table>
        </div>
        ",
    "text" => "Name: $name\nEmail: $email\nPhone: $phone\nIndustry: $industry\nPain Point: $pain_point\nHours Per Week: $hours\nAdditional Details:\n$message"
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
    $msg = "Your inquiry has been sent successfully!";
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
      <title>Inquiry Sent | QueryTel</title>
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
        
        h1 {
          color: #0f172a;
          margin: 1rem 0 0.5rem;
          font-size: 1.75rem;
        }
        p {
          color: #64748b;
          margin: 0.5rem 0;
          line-height: 1.6;
        }
        .btn {
          display: inline-block;
          margin-top: 1.5rem;
          padding: 0.75rem 2rem;
          background: linear-gradient(135deg, $accent 0%, #f97316 100%);
          color: white;
          text-decoration: none;
          border-radius: 0.5rem;
          font-weight: 600;
          transition: transform 0.2s;
        }
        .btn:hover {
          transform: translateY(-2px);
        }
      </style>
    </head>
    <body>
      <div class='card'>
        <div style='font-size: 3rem; margin-bottom: 1rem;'>✅</div>
        <h1>$msg</h1>
        <p>We've received your inquiry and will follow up within 24 hours with a custom proposal for your business.</p>
        <a href='/' class='btn'>Return to Website</a>
      </div>
    </body>
    </html>
    ";
}
?>