<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cybersecurity Services & Solutions | Al Musaab</title>
  <meta name="description"
    content="Comprehensive cybersecurity solutions: VAPT, threat intelligence, incident response, network security, IAM, SIEM, encryption, cloud security, SAST. Protect your business from cyber threats." />
  <meta name="robots" content="index,follow,max-image-preview:large" />
  <link rel="canonical" href="https://almusaab.com/cybersecurity/" />
  <meta name="theme-color" content="#0f172a" />

  <!-- Preconnect -->
  <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          keyframes: {
            fadeInRight: { "0%": { opacity: 0, transform: "translateX(50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
            fadeInLeft: { "0%": { opacity: 0, transform: "translateX(-50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
            fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } },
            slideDown: { "0%": { opacity: 0, transform: "translateY(-10px)" }, "100%": { opacity: 1, transform: "translateY(0)" } }
          },
          animation: {
            fadeInRight: "fadeInRight 0.8s ease-out forwards",
            fadeInLeft: "fadeInLeft 0.8s ease-out forwards",
            fadeIn: "fadeIn 1s ease-out forwards",
            slideDown: "slideDown 0.3s ease-out forwards"
          }
        }
      }
    };
  </script>

  <style>
    .gradient-text {
      background: linear-gradient(135deg, #ea580c 0%, #1e40af 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-20px);
      }
    }

    .animate-float {
      animation: float 4s ease-in-out infinite;
    }
  </style>
</head>

<body class="bg-white text-neutral-900 font-sans">

  <!-- NAVBAR (Include from your existing file) -->
  <?php include "navbar.php"; ?>

  <!-- HERO SECTION -->
  <section class="bg-gradient-to-br from-orange-500 via-orange-600 to-blue-700 text-white overflow-hidden">
    <div class="absolute inset-0 pointer-events-none"
      style="background-image: radial-gradient(ellipse at 20% 10%, rgba(255,255,255,.06), transparent 25%), radial-gradient(ellipse at 80% 120%, rgba(255,255,255,.04), transparent 30%);">
    </div>

    <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10 items-center">
      <div class="relative z-10">
        <div class="inline-flex items-center gap-2 rounded-full bg-white/10 ring-1 ring-white/20 px-3 py-1 text-sm">
          <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
          Active security operations
        </div>

        <h1 class="mt-4 text-4xl md:text-5xl font-bold leading-tight">
          Managed cybersecurity services for businesses
        </h1>

        <p class="mt-4 text-lg text-orange-50 max-w-xl">
          Identify security risks, prevent cyber attacks, and respond to incidents with end-to-end cybersecurity
          services.
        </p>



        <div class="mt-8 flex flex-col sm:flex-row gap-4">
          <a href="#contact"
            class="inline-flex items-center justify-center rounded-lg bg-white text-orange-600 font-semibold px-6 py-3 hover:bg-orange-50 transition">
            Get a free assessment
          </a>
          <a href="#services"
            class="inline-flex items-center justify-center rounded-lg bg-white/10 ring-1 ring-white/20 text-white px-6 py-3 hover:bg-white/15 transition">
            View services
          </a>
        </div>

        <div class="mt-6 flex items-center gap-6 text-sm text-white/90">
          <div class="flex items-center gap-2">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
              <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
            </svg>
            24/7 Monitoring
          </div>
          <div class="flex items-center gap-2">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
              <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
            </svg>
            Rapid incident response
          </div>
        </div>
      </div>

      <div class="relative flex justify-center items-center" data-animate>
        <div class="absolute -inset-6   rounded-3xl opacity-60 animate-pulse"></div>
        <div class="relative z-10 rounded-2xl  flex justify-center items-center">
          <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
          <dotlottie-wc src="https://lottie.host/11027459-9f66-4906-b9c5-6fa58c7488c5/TfHZmQ1f8D.lottie"
            style="width: 450px; height: 450px" speed="1" autoplay loop>
          </dotlottie-wc>
        </div>
      </div>
    </div>
  </section>

  <!-- CYBERSECURITY STATISTICS SECTION -->
  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-neutral-900 mb-4">Why Cybersecurity Matters</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Organizations face unprecedented risks. Here's what the data
          shows about the threat landscape in 2025.</p>
      </div>

      <div class="grid md:grid-cols-4 gap-8">
        <div class="bg-white rounded-xl p-8 shadow-md text-center">
          <p class="text-4xl font-bold text-orange-500 mb-2">116,700+</p>
          <p class="text-gray-700 font-semibold">Projected cyber incidents in Pakistan</p>
          <p class="text-sm text-gray-500 mt-2">Expected in 2025</p>
        </div>
        <div class="bg-white rounded-xl p-8 shadow-md text-center">
          <p class="text-4xl font-bold text-blue-600 mb-2">72%</p>
          <p class="text-gray-700 font-semibold">Increase in ransomware attacks</p>
          <p class="text-sm text-gray-500 mt-2">Year-over-year growth</p>
        </div>
        <div class="bg-white rounded-xl p-8 shadow-md text-center">
          <p class="text-4xl font-bold text-red-600 mb-2">45%</p>
          <p class="text-gray-700 font-semibold">Breaches involve credential theft</p>
          <p class="text-sm text-gray-500 mt-2">Primary attack vector</p>
        </div>
        <div class="bg-white rounded-xl p-8 shadow-md text-center">
          <p class="text-4xl font-bold text-green-600 mb-2">89%</p>
          <p class="text-gray-700 font-semibold">Require incident response</p>
          <p class="text-sm text-gray-500 mt-2">Organizations affected</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CORE SERVICES SECTION -->
  <section id="services" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-neutral-900 mb-2">Our Cybersecurity Services</h2>
        <div class="h-1 w-12 bg-orange-500 mx-auto my-4"></div>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">A complete suite of services covering every aspect of your
          security posture—from assessment to response and recovery.</p>
      </div>

      <!-- Services Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- VAPT -->
        <div
          class="bg-gradient-to-br from-orange-50 to-white border border-orange-100 rounded-xl p-8 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-orange-500 text-white rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-3">Vulnerability Assessment & Penetration Testing (VAPT)</h3>
          <p class="text-gray-700 mb-4">Proactive identification and exploitation of security weaknesses before
            attackers find them. Our certified penetration testers simulate real-world attacks to strengthen your
            defenses.</p>
          <ul class="text-sm text-gray-600 space-y-2">
            <li>• Network penetration testing</li>
            <li>• Application security assessments</li>
            <li>• Social engineering simulations</li>
            <li>• Detailed remediation roadmaps</li>
          </ul>
        </div>

        <!-- Threat Intelligence -->
        <div
          class="bg-gradient-to-br from-blue-50 to-white border border-blue-100 rounded-xl p-8 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-blue-600 text-white rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-3">Threat Intelligence & Monitoring</h3>
          <p class="text-gray-700 mb-4">Real-time visibility into emerging threats and indicators of compromise. Stay
            ahead of threat actors with our 24/7 monitoring and intelligence feeds.</p>
          <ul class="text-sm text-gray-600 space-y-2">
            <li>• Threat actor tracking</li>
            <li>• Dark web monitoring</li>
            <li>• Indicator of Compromise (IOC) feeds</li>
            <li>• Weekly threat briefings</li>
          </ul>
        </div>

        <!-- Incident Response -->
        <div
          class="bg-gradient-to-br from-red-50 to-white border border-red-100 rounded-xl p-8 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-red-600 text-white rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 9v2m0 4v2m0 4v2M6 9v2m0 4v2m0 4v2m6-15h6a2 2 0 012 2v12a2 2 0 01-2 2h-6a2 2 0 01-2-2V5a2 2 0 012-2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-3">Incident Response & Recovery</h3>
          <p class="text-gray-700 mb-4">Swift containment and recovery from active security incidents. Our rapid
            response team minimizes damage and restores business continuity.</p>
          <ul class="text-sm text-gray-600 space-y-2">
            <li>• 24/7 emergency response hotline</li>
            <li>• Forensic investigation</li>
            <li>• Ransomware negotiation support</li>
            <li>• Post-incident analysis & reports</li>
          </ul>
        </div>

        <!-- Network Security & Firewalls -->
        <div
          class="bg-gradient-to-br from-indigo-50 to-white border border-indigo-100 rounded-xl p-8 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-indigo-600 text-white rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-3">Network Security & Firewalls</h3>
          <p class="text-gray-700 mb-4">Advanced firewall solutions with next-gen threat protection. Secure your network
            perimeter with application-level filtering and intrusion prevention.</p>
          <ul class="text-sm text-gray-600 space-y-2 mb-4">
            <li>• Next-Gen Firewall deployment</li>
            <li>• VPN & secure remote access</li>
            <li>• DDoS mitigation</li>
            <li>• Network segmentation</li>
          </ul>
          <a href="<?= $base ?>/why-every-business-needs-a-firewall/" class="inline-flex items-center gap-2 text-indigo-600 font-bold text-sm hover:text-indigo-800 transition">
             <i data-lucide="book-open" class="w-4 h-4"></i>
             Guide: Why you need a Firewall
          </a>
        </div>

        <!-- Endpoint Protection -->
        <div
          class="bg-gradient-to-br from-purple-50 to-white border border-purple-100 rounded-xl p-8 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-purple-600 text-white rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-3">Endpoint Protection & Detection</h3>
          <p class="text-gray-700 mb-4">Comprehensive endpoint defense for all devices. Detect and respond to threats on
            laptops, desktops, and mobile devices in real-time.</p>
          <ul class="text-sm text-gray-600 space-y-2">
            <li>• EDR (Endpoint Detection & Response)</li>
            <li>• Antivirus & anti-malware</li>
            <li>• Device control policies</li>
            <li>• Mobile threat defense</li>
          </ul>
        </div>

        <!-- Identity & Access Management -->
        <div
          class="bg-gradient-to-br from-cyan-50 to-white border border-cyan-100 rounded-xl p-8 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-cyan-600 text-white rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-3">Identity & Access Management (IAM)</h3>
          <p class="text-gray-700 mb-4">Robust identity governance and access controls. Ensure only authorized users
            access critical resources with the right permissions.</p>
          <ul class="text-sm text-gray-600 space-y-2">
            <li>• Single Sign-On (SSO)</li>
            <li>• Multi-factor authentication (MFA)</li>
            <li>• Privileged access management</li>
            <li>• User behavior analytics</li>
          </ul>
        </div>

        <!-- SIEM -->
        <div
          class="bg-gradient-to-br from-amber-50 to-white border border-amber-100 rounded-xl p-8 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-amber-600 text-white rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-3">Security Information & Event Management (SIEM)</h3>
          <p class="text-gray-700 mb-4">Centralized security event collection and analysis. Aggregate logs from all
            systems for comprehensive threat detection and compliance reporting.</p>
          <ul class="text-sm text-gray-600 space-y-2">
            <li>• Log aggregation & normalization</li>
            <li>• Real-time alerting</li>
            <li>• Compliance reporting</li>
            <li>• Security analytics</li>
          </ul>
        </div>

        <!-- Data Encryption & Privacy -->
        <div
          class="bg-gradient-to-br from-pink-50 to-white border border-pink-100 rounded-xl p-8 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-pink-600 text-white rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-3">Data Encryption & Privacy</h3>
          <p class="text-gray-700 mb-4">Protect sensitive data at rest and in transit. Ensure compliance with data
            protection regulations through encryption and privacy controls.</p>
          <ul class="text-sm text-gray-600 space-y-2">
            <li>• Disk encryption & key management</li>
            <li>• Data loss prevention (DLP)</li>
            <li>• Personally Identifiable Information (PII) protection</li>
            <li>• GDPR & PIPEDA compliance</li>
          </ul>
        </div>

        <!-- Cloud Security -->
        <div
          class="bg-gradient-to-br from-teal-50 to-white border border-teal-100 rounded-xl p-8 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-teal-600 text-white rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-3">Cloud Security</h3>
          <p class="text-gray-700 mb-4">Secure your cloud infrastructure and applications. Protect data in AWS, Azure,
            and Google Cloud with comprehensive cloud-native security solutions.</p>
          <ul class="text-sm text-gray-600 space-y-2">
            <li>• Cloud configuration assessment</li>
            <li>• Workload protection</li>
            <li>• Cloud access security brokers (CASB)</li>
            <li>• Container security</li>
          </ul>
        </div>

        <!-- SAST -->
        <div
          class="bg-gradient-to-br from-lime-50 to-white border border-lime-100 rounded-xl p-8 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-lime-600 text-white rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 20l4-16m4 4l4 4m0 0l1 1m-1-1l-1 1m1 1l1-1m-1 1l-1-1M4 12a8 8 0 1116 0 8 8 0 01-16 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold text-neutral-900 mb-3">Static Application Security Testing (SAST)</h3>
          <p class="text-gray-700 mb-4">Find security vulnerabilities in source code before deployment. Integrate
            security into your development pipeline with static code analysis.</p>
          <ul class="text-sm text-gray-600 space-y-2">
            <li>• Code vulnerability scanning</li>
            <li>• OWASP Top 10 detection</li>
            <li>• CI/CD pipeline integration</li>
            <li>• Developer security training</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- CASE STUDIES WITH TOGGLE -->
  <section class="py-24 bg-gradient-to-br from-slate-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-neutral-900 mb-2">Case Studies</h2>
        <div class="h-1 w-12 bg-orange-500 mx-auto my-4"></div>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Real-world examples of how our cybersecurity solutions have
          protected organizations from threats.</p>
      </div>

      <!-- Tab Navigation -->
      <div class="flex flex-wrap justify-center gap-4 mb-12">
        <button class="case-tab px-6 py-3 rounded-lg font-semibold transition bg-orange-500 text-white"
          data-case="case1">
          Ransomware Prevention
        </button>

        <button
          class="case-tab px-6 py-3 rounded-lg font-semibold transition bg-gray-200 text-gray-800 hover:bg-gray-300"
          data-case="case2">
          Cloud Misconfiguration
        </button>

        <button
          class="case-tab px-6 py-3 rounded-lg font-semibold transition bg-gray-200 text-gray-800 hover:bg-gray-300"
          data-case="case3">
          Insider Threat Response
        </button>

      </div>

      <!-- Case Study 1 -->
      <div id="case1" class="case-study bg-white rounded-xl shadow-lg p-10">

        <div class="grid md:grid-cols-3 gap-8">
          <div>
            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Financial Services Firm Stops Ransomware</h3>
            <p class="text-gray-700 mb-4">A mid-sized investment firm detected suspicious network behavior through our
              EDR platform before a ransomware attack could encrypt critical systems.</p>
            <div class="space-y-3">
              <div>
                <p class="text-sm font-semibold text-gray-600">Industry</p>
                <p class="text-lg font-bold text-neutral-900">Financial Services</p>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-600">Challenge</p>
                <p class="text-lg font-bold text-neutral-900">Vulnerable to lateral movement</p>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-600">Timeline</p>
                <p class="text-lg font-bold text-neutral-900">12-month engagement</p>
              </div>
            </div>
          </div>
          <div>
            <h4 class="font-bold text-neutral-900 mb-3">Solution Deployed</h4>
            <ul class="space-y-3 text-gray-700">
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>Endpoint Detection & Response (EDR) across 500+ devices</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>Network segmentation to isolate critical systems</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>MFA enforcement for privileged accounts</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>24/7 SOC monitoring with automated response</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>Employee security awareness training</span>
              </li>
            </ul>
          </div>
          <div class="bg-gradient-to-br from-orange-50 to-blue-50 rounded-lg p-6">
            <h4 class="font-bold text-neutral-900 mb-4">Results Achieved</h4>
            <div class="space-y-4">
              <div>
                <p class="text-sm text-gray-600">Attack Detected In</p>
                <p class="text-3xl font-bold text-orange-500">6 Minutes</p>
                <p class="text-xs text-gray-500">vs. 258-day industry average</p>
              </div>
              <div>
                <p class="text-sm text-gray-600">Threat Contained In</p>
                <p class="text-3xl font-bold text-blue-600">18 Minutes</p>
                <p class="text-xs text-gray-500">Minimal lateral movement</p>
              </div>
              <div>
                <p class="text-sm text-gray-600">Systems Protected</p>
                <p class="text-3xl font-bold text-green-600">100%</p>
                <p class="text-xs text-gray-500">No data loss or ransom paid</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Case Study 2 -->
      <div id="case2" class="case-study hidden bg-white rounded-xl shadow-lg p-10">
        <div class="grid md:grid-cols-3 gap-8">
          <div>
            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Healthcare Provider Fixes Cloud Exposure</h3>
            <p class="text-gray-700 mb-4">A hospital network's misconfigured S3 bucket exposed 2M patient records. Our
              cloud security assessment and remediation prevented a data breach.</p>
            <div class="space-y-3">
              <div>
                <p class="text-sm font-semibold text-gray-600">Industry</p>
                <p class="text-lg font-bold text-neutral-900">Healthcare</p>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-600">Challenge</p>
                <p class="text-lg font-bold text-neutral-900">Exposed patient data in cloud</p>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-600">Timeline</p>
                <p class="text-lg font-bold text-neutral-900">Emergency response + 6 months hardening</p>
              </div>
            </div>
          </div>
          <div>
            <h4 class="font-bold text-neutral-900 mb-3">Solution Deployed</h4>
            <ul class="space-y-3 text-gray-700">
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>Emergency S3 bucket access restrictions</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>Cloud Access Security Broker (CASB)</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>Encryption at rest for all cloud data</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>IAM policy audit and remediation</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>HIPAA compliance monitoring</span>
              </li>
            </ul>
          </div>
          <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-lg p-6">
            <h4 class="font-bold text-neutral-900 mb-4">Results Achieved</h4>
            <div class="space-y-4">
              <div>
                <p class="text-sm text-gray-600">Exposure Time</p>
                <p class="text-3xl font-bold text-blue-600">48 Hours</p>
                <p class="text-xs text-gray-500">Discovered and remediated quickly</p>
              </div>
              <div>
                <p class="text-sm text-gray-600">Compliance Status</p>
                <p class="text-3xl font-bold text-green-600">HIPAA Aligned</p>
                <p class="text-xs text-gray-500">No penalties or fines incurred</p>
              </div>
              <div>
                <p class="text-sm text-gray-600">Data Protected</p>
                <p class="text-3xl font-bold text-orange-500">2M Records</p>
                <p class="text-xs text-gray-500">Zero unauthorized access</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Case Study 3 -->
      <div id="case3" class="case-study hidden bg-white rounded-xl shadow-lg p-10">
        <div class="grid md:grid-cols-3 gap-8">
          <div>
            <h3 class="text-2xl font-bold text-neutral-900 mb-4">Tech Company Identifies Insider Threat</h3>
            <p class="text-gray-700 mb-4">A departing employee's suspicious data exfiltration was detected through
              behavioral analytics and IAM controls, preventing IP theft.</p>
            <div class="space-y-3">
              <div>
                <p class="text-sm font-semibold text-gray-600">Industry</p>
                <p class="text-lg font-bold text-neutral-900">Software Development</p>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-600">Challenge</p>
                <p class="text-lg font-bold text-neutral-900">Insider threat detection</p>
              </div>
              <div>
                <p class="text-sm font-semibold text-gray-600">Timeline</p>
                <p class="text-lg font-bold text-neutral-900">Detected day of attempted theft</p>
              </div>
            </div>
          </div>
          <div>
            <h4 class="font-bold text-neutral-900 mb-3">Solution Deployed</h4>
            <ul class="space-y-3 text-gray-700">
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>User and Entity Behavior Analytics (UEBA)</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>Data Loss Prevention (DLP) policies</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>Privileged Access Management (PAM)</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>Endpoint monitoring and USB restrictions</span>
              </li>
              <li class="flex gap-2">
                <span class="text-orange-500 font-bold">•</span>
                <span>Forensic investigation support</span>
              </li>
            </ul>
          </div>
          <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-lg p-6">
            <h4 class="font-bold text-neutral-900 mb-4">Results Achieved</h4>
            <div class="space-y-4">
              <div>
                <p class="text-sm text-gray-600">Alert Generated</p>
                <p class="text-3xl font-bold text-blue-600">12 Hours Early</p>
                <p class="text-xs text-gray-500">Before data transfer initiated</p>
              </div>
              <div>
                <p class="text-sm text-gray-600">Data Theft Prevented</p>
                <p class="text-3xl font-bold text-green-600">100%</p>
                <p class="text-xs text-gray-500">No proprietary code leaked</p>
              </div>
              <div>
                <p class="text-sm text-gray-600">Legal Action</p>
                <p class="text-3xl font-bold text-orange-500">Supported</p>
                <p class="text-xs text-gray-500">Forensic evidence collected</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECURITY BEST PRACTICES BY ROLE -->
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-neutral-900 mb-2">Security Best Practices by Role</h2>
        <div class="h-1 w-12 bg-orange-500 mx-auto my-4"></div>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Tailored security practices for different team members. Each
          role has unique responsibilities and risks.</p>
      </div>

      <div class="grid md:grid-cols-2 gap-8">
        <!-- Data Analysts -->
        <div class="border-l-4 border-orange-500 bg-gray-50 rounded-r-lg p-8">
          <button onclick="togglePractice(this)"
            class="w-full text-left flex items-center justify-between mb-6 hover:opacity-80 transition">
            <h3 class="text-2xl font-bold text-neutral-900">For Data Analysts</h3>
            <svg class="w-6 h-6 text-orange-500 transform transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
          </button>
          <div class="practice-content space-y-3">
            <div class="flex gap-3">
              <span class="text-orange-500 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Secure Data Handling</p>
                <p class="text-gray-600 text-sm">Use VPN/proxy before accessing databases. Never download sensitive data
                  to local machines.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-orange-500 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Query Auditing</p>
                <p class="text-gray-600 text-sm">Enable query logging and regularly review access logs for unauthorized
                  queries.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-orange-500 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Data Classification</p>
                <p class="text-gray-600 text-sm">Understand your organization's data classification levels and handle
                  accordingly.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-orange-500 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Multi-Factor Authentication</p>
                <p class="text-gray-600 text-sm">Always use MFA for database access and analytics tools.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-orange-500 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Report Suspicious Activity</p>
                <p class="text-gray-600 text-sm">Flag unusual access patterns or data requests immediately to IT
                  security.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Network Engineers -->
        <div class="border-l-4 border-blue-600 bg-gray-50 rounded-r-lg p-8">
          <button onclick="togglePractice(this)"
            class="w-full text-left flex items-center justify-between mb-6 hover:opacity-80 transition">
            <h3 class="text-2xl font-bold text-neutral-900">For Network Engineers</h3>
            <svg class="w-6 h-6 text-blue-600 transform transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
          </button>
          <div class="practice-content space-y-3">
            <div class="flex gap-3">
              <span class="text-blue-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Network Segmentation</p>
                <p class="text-gray-600 text-sm">Implement VLAN isolation for critical systems and DMZs for
                  external-facing services.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-blue-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Firewall Rule Reviews</p>
                <p class="text-gray-600 text-sm">Conduct quarterly audits to remove unnecessary rules and close attack
                  surface.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-blue-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">DDoS Mitigation</p>
                <p class="text-gray-600 text-sm">Deploy rate limiting and traffic filtering on border routers and edge
                  devices.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-blue-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Zero Trust Networking</p>
                <p class="text-gray-600 text-sm">Authenticate and authorize all traffic, even on internal networks.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-blue-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Monitoring & Alerts</p>
                <p class="text-gray-600 text-sm">Use SIEM to detect unusual traffic patterns and anomalous network
                  behavior.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Developers -->
        <div class="border-l-4 border-purple-600 bg-gray-50 rounded-r-lg p-8">
          <button onclick="togglePractice(this)"
            class="w-full text-left flex items-center justify-between mb-6 hover:opacity-80 transition">
            <h3 class="text-2xl font-bold text-neutral-900">For Developers</h3>
            <svg class="w-6 h-6 text-purple-600 transform transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
          </button>
          <div class="practice-content space-y-3">
            <div class="flex gap-3">
              <span class="text-purple-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Secure Coding Practices</p>
                <p class="text-gray-600 text-sm">Sanitize inputs, use parameterized queries, and validate all user data
                  to prevent injection attacks.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-purple-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Dependency Management</p>
                <p class="text-gray-600 text-sm">Keep libraries and frameworks updated. Use tools like OWASP
                  Dependency-Check regularly.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-purple-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Secrets Management</p>
                <p class="text-gray-600 text-sm">Never hardcode API keys or passwords. Use environment variables and
                  vaults.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-purple-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Code Reviews</p>
                <p class="text-gray-600 text-sm">Participate in peer reviews to catch security vulnerabilities before
                  they reach production.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-purple-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Logging & Monitoring</p>
                <p class="text-gray-600 text-sm">Implement comprehensive logging without exposing sensitive data.
                  Monitor for suspicious activity.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- System Engineers -->
        <div class="border-l-4 border-green-600 bg-gray-50 rounded-r-lg p-8">
          <button onclick="togglePractice(this)"
            class="w-full text-left flex items-center justify-between mb-6 hover:opacity-80 transition">
            <h3 class="text-2xl font-bold text-neutral-900">For System Engineers</h3>
            <svg class="w-6 h-6 text-green-600 transform transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
          </button>
          <div class="practice-content space-y-3">
            <div class="flex gap-3">
              <span class="text-green-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Patch Management</p>
                <p class="text-gray-600 text-sm">Apply security patches promptly. Use automated patch management tools
                  for critical systems.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-green-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Server Hardening</p>
                <p class="text-gray-600 text-sm">Disable unnecessary services, configure firewalls, and apply security
                  baselines to all systems.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-green-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Access Controls</p>
                <p class="text-gray-600 text-sm">Use role-based access control (RBAC) and the principle of least
                  privilege for all accounts.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-green-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Backup & Recovery</p>
                <p class="text-gray-600 text-sm">Maintain immutable backups offline. Test disaster recovery procedures
                  quarterly.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <span class="text-green-600 font-bold flex-shrink-0">✓</span>
              <div>
                <p class="font-semibold text-neutral-900">Audit Logging</p>
                <p class="text-gray-600 text-sm">Enable comprehensive audit logs and centralize them for analysis and
                  compliance reporting.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPLIANCE & STANDARDS SECTION -->
  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-neutral-900 mb-2">Compliance & Standards</h2>
        <div class="h-1 w-12 bg-orange-500 mx-auto my-4"></div>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Our services help you meet regulatory requirements and
          industry standards.</p>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-lg transition text-center">
          <h3 class="text-2xl font-bold text-neutral-900 mb-2">PIPEDA</h3>
          <p class="text-gray-600 mb-4">Personal Information Protection and Electronic Documents Act - Canadian privacy
            law protecting personal information.</p>
          <div class="text-sm text-gray-500">Personal data protection & consent management</div>
        </div>
        <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-lg transition text-center">
          <h3 class="text-2xl font-bold text-neutral-900 mb-2">HIPAA</h3>
          <p class="text-gray-600 mb-4">Health Insurance Portability and Accountability Act - compliance for healthcare
            organizations.</p>
          <div class="text-sm text-gray-500">Healthcare data protection & audit controls</div>
        </div>
        <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-lg transition text-center">
          <h3 class="text-2xl font-bold text-neutral-900 mb-2">PCI-DSS</h3>
          <p class="text-gray-600 mb-4">Payment Card Industry Data Security Standard - for organizations handling
            payment card data.</p>
          <div class="text-sm text-gray-500">Payment security & tokenization</div>
        </div>
        <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-lg transition text-center">
          <h3 class="text-2xl font-bold text-neutral-900 mb-2">SOC 2 Type II</h3>
          <p class="text-gray-600 mb-4">Service Organization Control compliance demonstrating security, availability,
            and confidentiality.</p>
          <div class="text-sm text-gray-500">Trust service criteria & audit readiness</div>
        </div>
        <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-lg transition text-center">
          <h3 class="text-2xl font-bold text-neutral-900 mb-2">ISO 27001</h3>
          <p class="text-gray-600 mb-4">International standard for information security management systems.</p>
          <div class="text-sm text-gray-500">ISMS implementation & certification</div>
        </div>
        <div class="bg-white rounded-lg p-8 shadow-md hover:shadow-lg transition text-center">
          <h3 class="text-2xl font-bold text-neutral-900 mb-2">NIST Framework</h3>
          <p class="text-gray-600 mb-4">Cybersecurity framework for managing and reducing cyber risk.</p>
          <div class="text-sm text-gray-500">Risk assessment & maturity modeling</div>
        </div>
      </div>
    </div>
  </section>

  <!-- IMPLEMENTATION PROCESS SECTION -->
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-neutral-900 mb-2">Our Implementation Process</h2>
        <div class="h-1 w-12 bg-orange-500 mx-auto my-4"></div>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">From assessment to deployment—our proven methodology ensures
          a smooth cybersecurity transformation.</p>
      </div>

      <div class="relative">
        <!-- Timeline -->
        <div class="grid md:grid-cols-5 gap-8">
          <!-- Step 1 -->
          <div class="relative">
            <div class="flex flex-col items-center">
              <div
                class="w-16 h-16 rounded-full bg-orange-500 text-white flex items-center justify-center font-bold text-2xl mb-4">
                1</div>
              <h3 class="text-xl font-bold text-neutral-900 mb-2 text-center">Discovery & Assessment</h3>
              <p class="text-gray-600 text-sm text-center">Comprehensive evaluation of your current security posture,
                identifying gaps and risks.</p>
            </div>
          </div>

          <!-- Connector -->
          <div class="hidden md:block absolute top-8 left-[20%] right-[80%] h-1 bg-orange-300"></div>

          <!-- Step 2 -->
          <div class="relative">
            <div class="flex flex-col items-center">
              <div
                class="w-16 h-16 rounded-full bg-orange-500 text-white flex items-center justify-center font-bold text-2xl mb-4">
                2</div>
              <h3 class="text-xl font-bold text-neutral-900 mb-2 text-center">Strategy & Planning</h3>
              <p class="text-gray-600 text-sm text-center">Develop a tailored roadmap aligned with your business goals
                and compliance requirements.</p>
            </div>
          </div>

          <!-- Connector -->
          <div class="hidden md:block absolute top-8 left-[40%] right-[60%] h-1 bg-orange-300"></div>

          <!-- Step 3 -->
          <div class="relative">
            <div class="flex flex-col items-center">
              <div
                class="w-16 h-16 rounded-full bg-orange-500 text-white flex items-center justify-center font-bold text-2xl mb-4">
                3</div>
              <h3 class="text-xl font-bold text-neutral-900 mb-2 text-center">Implementation</h3>
              <p class="text-gray-600 text-sm text-center">Deploy security tools, configure systems, and establish
                processes with minimal disruption.</p>
            </div>
          </div>

          <!-- Connector -->
          <div class="hidden md:block absolute top-8 left-[60%] right-[40%] h-1 bg-orange-300"></div>

          <!-- Step 4 -->
          <div class="relative">
            <div class="flex flex-col items-center">
              <div
                class="w-16 h-16 rounded-full bg-orange-500 text-white flex items-center justify-center font-bold text-2xl mb-4">
                4</div>
              <h3 class="text-xl font-bold text-neutral-900 mb-2 text-center">Training & Enablement</h3>
              <p class="text-gray-600 text-sm text-center">Educate your team on security practices and tools. Build a
                security-aware culture.</p>
            </div>
          </div>

          <!-- Connector -->
          <div class="hidden md:block absolute top-8 left-[80%] right-[20%] h-1 bg-orange-300"></div>

          <!-- Step 5 -->
          <div class="relative">
            <div class="flex flex-col items-center">
              <div
                class="w-16 h-16 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-2xl mb-4">
                5</div>
              <h3 class="text-xl font-bold text-neutral-900 mb-2 text-center">24/7 Monitoring</h3>
              <p class="text-gray-600 text-sm text-center">Continuous surveillance, threat detection, and rapid response
                to keep you secure.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Key Benefits -->
      <div class="grid md:grid-cols-3 gap-8 mt-20">
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 rounded">
          <h4 class="font-bold text-neutral-900 mb-2">Reduced Risk</h4>
          <p class="text-gray-700">Minimize exposure to cyber threats through proactive detection and rapid response.
          </p>
        </div>
        <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded">
          <h4 class="font-bold text-neutral-900 mb-2">Regulatory Compliance</h4>
          <p class="text-gray-700">Meet industry standards and regulatory requirements with confidence.</p>
        </div>
        <div class="bg-green-50 border-l-4 border-green-600 p-6 rounded">
          <h4 class="font-bold text-neutral-900 mb-2">Business Continuity</h4>
          <p class="text-gray-700">Keep your operations running smoothly even when threats emerge.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ROI & BENEFITS SECTION -->
  <section class="py-24 bg-gradient-to-br from-slate-900 to-blue-900 text-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid md:grid-cols-2 gap-16 items-center">
        <!-- Left Stats -->
        <div class="space-y-8">
          <div>
            <h2 class="text-4xl font-bold mb-4">Measurable Impact</h2>
            <p class="text-blue-100 text-lg">Our cybersecurity solutions deliver tangible business value and risk
              reduction.</p>
          </div>

          <div class="space-y-6">
            <div class="flex gap-4">
              <div class="text-4xl font-bold text-orange-400">80%</div>
              <div>
                <p class="font-semibold">Reduction in Security Incidents</p>
                <p class="text-blue-100 text-sm">Within first 12 months of implementation</p>
              </div>
            </div>

            <div class="flex gap-4">
              <div class="text-4xl font-bold text-orange-400">92%</div>
              <div>
                <p class="font-semibold">Faster Threat Detection</p>
                <p class="text-blue-100 text-sm">Compared to manual monitoring</p>
              </div>
            </div>

            <div class="flex gap-4">
              <div class="text-4xl font-bold text-orange-400">3.2x</div>
              <div>
                <p class="font-semibold">Average ROI</p>
                <p class="text-blue-100 text-sm">Within 24 months</p>
              </div>
            </div>

            <div class="flex gap-4">
              <div class="text-4xl font-bold text-orange-400">$2.8M</div>
              <div>
                <p class="font-semibold">Average Breach Cost Avoided</p>
                <p class="text-blue-100 text-sm">Per incident prevented</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Content -->
        <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl p-10">
          <h3 class="text-2xl font-bold mb-6">Why Organizations Choose Us</h3>
          <ul class="space-y-4">
            <li class="flex gap-3 items-start">
              <svg class="w-6 h-6 text-orange-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>30+ years of cybersecurity expertise</span>
            </li>
            <li class="flex gap-3 items-start">
              <svg class="w-6 h-6 text-orange-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Certified security professionals on staff</span>
            </li>
            <li class="flex gap-3 items-start">
              <svg class="w-6 h-6 text-orange-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>24/7 Security Operations Center (SOC)</span>
            </li>
            <li class="flex gap-3 items-start">
              <svg class="w-6 h-6 text-orange-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Industry partnerships with leading vendors</span>
            </li>
            <li class="flex gap-3 items-start">
              <svg class="w-6 h-6 text-orange-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
              <span>Transparent pricing and no hidden costs</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-16 bg-gray-100 text-center">
    <div class="max-w-3xl mx-auto px-6">
      <h2 class="text-3xl font-semibold mb-4">Need something custom?</h2>
      <p class="text-gray-600 mb-6">
        Our architects can design a deployment tailored to your enterprise.
      </p>
      <a href="#contact"
        class="inline-block bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">Let’s Talk</a>
    </div>
  </section>
  <!-- CONTACT CTA SECTION -->
  <section id="contact" class="py-24 bg-gray-50">
    <div class="max-w-3xl mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold text-neutral-900 mb-4">Protect Your Business Today</h2>
      <p class="text-lg text-gray-600 mb-12">Don't wait for a breach to invest in cybersecurity. Contact our experts now
        for a free security assessment.</p>

      <div class="bg-white rounded-xl shadow-lg p-12">
        <form class="space-y-6">
          <div class="grid md:grid-cols-2 gap-6">
            <input type="text" placeholder="Your Name"
              class="w-full border border-gray-300 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
              required />
            <input type="email" placeholder="Email Address"
              class="w-full border border-gray-300 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
              required />
          </div>
          <input type="tel" placeholder="Phone Number"
            class="w-full border border-gray-300 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"
            required />
          <textarea rows="4" placeholder="Tell us about your security concerns..."
            class="w-full border border-gray-300 px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 resize-none"
            required></textarea>
          <button type="submit"
            class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 rounded-lg transition">
            Send Message
          </button>
        </form>
      </div>

      <div class="mt-12 grid md:grid-cols-3 gap-8">
        <div>
          <p class="text-2xl font-bold text-orange-500 mb-1">1-844-447-8379</p>
          <p class="text-gray-600">Call our security team</p>
        </div>
        <div>
          <p class="text-2xl font-bold text-blue-600 mb-1">24/7</p>
          <p class="text-gray-600">Emergency support available</p>
        </div>
        <div>
          <p class="text-2xl font-bold text-green-600 mb-1">Free Consultation</p>
          <p class="text-gray-600">No obligation assessment</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER (Include from your existing file) -->
  <?php include("footer.php"); ?>

  <!-- JavaScript for Interactivity -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const tabs = document.querySelectorAll(".case-tab");
      const cases = document.querySelectorAll(".case-study");

      function showCase(id, tab) {
        // Hide all cases
        cases.forEach(c => {
          c.classList.add("hidden");
          c.classList.remove("animate-fadeIn");
        });

        // Show selected case
        const selected = document.getElementById(id);
        if (selected) {
          selected.classList.remove("hidden");
          selected.classList.add("animate-fadeIn");
        }

        // Reset tab styling
        tabs.forEach(t => {
          t.classList.remove("bg-orange-500", "text-white");
          t.classList.add("bg-gray-200", "text-gray-800");
        });

        // Activate clicked tab
        tab.classList.add("bg-orange-500", "text-white");
        tab.classList.remove("bg-gray-200", "text-gray-800");
      }

      // Attach click listeners
      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          const id = tab.dataset.case;
          showCase(id, tab);
        });
      });

      // Initialize first tab
      showCase("case1", tabs[0]);
    });
  </script>


</body>

</html>