<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Managed IT Services in Pakistan | Al Musaab</title>
  <meta name="description"
    content="Reliable managed IT services for businesses in Pakistan: 24/7 monitoring, IT support, servers, firewalls, and backups. Expert support for your business." />
  <meta name="robots" content="index,follow,max-image-preview:large" />
  <link rel="canonical" href="https://almusaab.com/managedservices/" />
  <link rel="alternate" hreflang="en-pk" href="https://almusaab.com/managedservices/" />
  <meta name="theme-color" content="#0f172a" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Managed IT Services in Pakistan | Al Musaab" />
  <meta property="og:description"
    content="Proactive IT support: desktops, servers, firewall monitoring, and backups. Trusted local experts for your business." />
  <meta property="og:url" content="https://almusaab.com/managedservices/" />
  <meta property="og:site_name" content="Al Musaab" />
  <meta property="og:locale" content="en_PK" />
  <meta property="og:image"
    content="https://almusaab.com/wp-content/uploads/2025/02/Blue-Modern-7-Step-Types-Of-Waste-Diagram-Timeline-Infographic-Brainstorm.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-57GG72GW');</script>
  <!-- End Google Tag Manager -->

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Managed IT Services in Pakistan | Al Musaab" />
  <meta name="twitter:description"
    content="End-to-end managed IT with 24/7 monitoring, helpdesk, and cloud. Talk to our Karachi team." />
  <meta name="twitter:image"
    content="https://almusaab.com/wp-content/uploads/2025/02/Blue-Modern-7-Step-Types-Of-Waste-Diagram-Timeline-Infographic-Brainstorm.png" />

  <!-- Icons -->
  <link rel="icon" href="<?= $base . '/assets/favicon.svg' ?>" sizes="any" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="<?= $base . '/assets/favicon.svg' ?>" sizes="any" />

  <!-- Page animations & Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              blue: '#1e40af',
              orange: '#f97316',
              slate: '#0f172a'
            }
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
          keyframes: {
            fadeInRight: { "0%": { opacity: 0, transform: "translateX(50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
            fadeInLeft: { "0%": { opacity: 0, transform: "translateX(-50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
            fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } },
            fadeInUp: { "0%": { opacity: 0, transform: "translateY(20px)" }, "100%": { opacity: 1, transform: "translateY(0)" } }
          },
          animation: {
            fadeInRight: "fadeInRight 0.8s ease-out forwards",
            fadeInLeft: "fadeInLeft 0.8s ease-out forwards",
            fadeIn: "fadeIn 1s ease-out forwards",
            fadeInUp: "fadeInUp 0.8s ease-out forwards"
          }
        }
      }
    };
  </script>

  <style>
    body { font-family: 'Inter', sans-serif; }
    
    .btn-query-orange {
        background-color: #f97316;
        color: #ffffff;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .btn-query-orange:hover {
        background-color: #ea580c;
        transform: translateY(-2px);
        box-shadow: 0 10px 15px -3px rgba(249, 115, 22, 0.3);
    }

    .btn-query-dark {
        background-color: #111827;
        color: #ffffff;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .btn-query-dark:hover {
        background-color: #1f2937;
        transform: translateY(-2px);
    }

    .btn-query-white {
        background-color: #ffffff;
        color: #111827;
        border: 1px solid #d1d5db;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .btn-query-white:hover {
        border-color: #9ca3af;
        background-color: #f9fafb;
    }
  </style>

  <!-- Schema: Organization (site entity reference) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "@id": "https://almusaab.com/#org",
    "name": "Al Musaab",
    "url": "https://almusaab.com/",
    "logo": "<?= $base . '/assets/images/Al-Musaab-logo1.png' ?>",
    "sameAs": ["https://www.linkedin.com/company/querytel"]
  }
  </script>

  <!-- Schema: Service (this page) -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"Service",
    "@id":"https://almusaab.com/managedservices/#service",
    "serviceType":"Managed IT Services",
    "provider":{"@id":"https://almusaab.com/#org"},
    "areaServed":"PK",
    "description":"Reliable IT support for your business: desktops, servers, security, backups, and 24/7 helpdesk.",
    "offers":{
      "@type":"OfferCatalog",
      "name":"Managed Services",
      "itemListElement":[
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Desktop & Notebook Management"}},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Server Administration & Backups"}},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Firewall Monitoring & Reporting"}},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Cloud Services & Security"}}
      ]
    }
  }
  </script>

  <!-- Schema: WebPage + Breadcrumbs -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"WebPage",
    "@id":"https://almusaab.com/managedservices/#webpage",
    "url":"https://almusaab.com/managedservices/",
    "name":"Managed IT Services",
    "inLanguage":"en-PK",
    "isPartOf":{"@id":"https://almusaab.com/#website"},
    "about":{"@id":"https://almusaab.com/managedservices/#service"},
    "lastReviewed":"2025-08-18",
    "breadcrumb":{"@id":"https://almusaab.com/managedservices/#breadcrumb"}
  }
  </script>

  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"BreadcrumbList",
    "@id":"https://almusaab.com/managedservices/#breadcrumb",
    "itemListElement":[
      {"@type":"ListItem","position":1,"name":"Home","item":"https://almusaab.com/"},
      {"@type":"ListItem","position":2,"name":"Managed Services","item":"https://almusaab.com/managedservices/"}
    ]
  }
  </script>
</head>


<body class="bg-white text-neutral-900 font-sans">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GG72GW" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- HEADER -->
  <?php include("navbar.php"); ?>

  <!-- PREMIUM LIGHT HERO SECTION -->
  <section class="relative bg-white overflow-hidden py-24 lg:py-32">
    <!-- Subtle Background Shapes -->
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-[600px] h-[600px] bg-blue-50 rounded-full blur-3xl opacity-60"></div>
    <div class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-[400px] h-[400px] bg-orange-50 rounded-full blur-3xl opacity-40"></div>

    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center relative z-10">
      <!-- Left Column: Content -->
      <div class="animate-fadeInUp">
        <div class="flex items-center gap-3 mb-6">
            <span class="h-px w-8 bg-blue-600"></span>
            <span class="text-sm font-bold text-blue-600 uppercase tracking-widest">Global Managed IT Services</span>
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold text-neutral-900 leading-[1.15] mb-6">
          Reliable IT Support <br><span class="text-brand-orange">Simplified</span> for Scale.
        </h1>
        <p class="text-xl text-gray-600 mb-10 max-w-xl leading-relaxed">
          We handle your enterprise infrastructure, cloud operations, and user support with 24/7 proactive monitoring. Focus on your business goals while we handle the technical precision.
        </p>
        <div class="flex flex-wrap gap-4">
            <a href="/contactus" class="btn-query-orange">Talk to an Expert</a>
            <a href="#services" class="btn-query-white">Explore Solutions</a>
        </div>

        <div class="mt-12 flex items-center gap-8 grayscale opacity-60">
            <div class="text-xs font-bold text-gray-400 uppercase tracking-widest">Trusted Backend For</div>
            <div class="h-6 w-px bg-gray-200"></div>
            <!-- Client niche icons could go here -->
            <span class="text-sm font-bold text-gray-400">Retail</span>
            <span class="text-sm font-bold text-gray-400">Healthcare</span>
            <span class="text-sm font-bold text-gray-400">Logistics</span>
        </div>
      </div>

      <!-- Right Column: Premium Visual -->
      <div class="relative animate-fadeInRight">
        <div class="absolute inset-0 bg-blue-600/5 rounded-[2.5rem] rotate-3 translate-x-4"></div>
        <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl shadow-blue-900/10 border border-gray-100">
            <img 
                src="<?= $base . '/assets/images/Blue-Modern-7-Step-Types-Of-Waste-Diagram-Timeline-Infographic-Brainstorm.png' ?>" 
                alt="Modern IT Operations Center" 
                class="w-full object-cover aspect-[4/3] scale-105"
            />
        </div>
        <!-- Floating Stat Badge -->
        <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl border border-gray-100 animate-bounce-slow">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                </div>
                <div>
                    <div class="text-2xl font-black text-neutral-900">99.9%</div>
                    <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">System Uptime</div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section><style>@keyframes bounce-slow { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } .animate-bounce-slow { animation: bounce-slow 4s ease-in-out infinite; }</style>
<!-- 
  <section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h1 class="text-4xl md:text-5xl font-bold text-neutral-900">
        Let’s Talk
      </h1>
      <p class="mt-4 text-gray-600 text-lg">
        Contact us to get the best IT support for your office in Pakistan.
      </p>
    </div>
  </section> -->

  <!-- <section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">
   
      <div class="animate-fadeInLeft">
        <p class="text-sm uppercase tracking-wide text-orange-600 font-semibold mb-2">
          Need IT Support? We are here to help!
        </p>
        <h2 class="text-3xl font-bold text-neutral-900 mb-6">
          Starting from <span class="text-blue-700">$49/User</span>
        </h2>
        <h3 class="text-xl font-semibold text-neutral-800 mb-6">
          Everything Included:
        </h3>

        <ul class="space-y-6 text-gray-700 text-base leading-relaxed">
          <li class="flex items-start gap-3">
            <span class="text-blue-600 mt-1">•</span>
            PC & Laptop Support: Fixing errors, antivirus, remote help, and yearly cleanup.
          </li>
          <li class="flex items-start gap-3">
            <span class="text-blue-600 mt-1">•</span>
            Server Support: Managing users, daily backups, and onsite/remote help.
          </li>
          <li class="flex items-start gap-3">
            <span class="text-blue-600 mt-1">•</span>
            24/7 Security: Continuous watching of your network with weekly reports.
          </li>
        </ul>

        <div class="mt-8 flex items-center gap-3 group hover:scale-105 transition-transform">
          <svg class="w-6 h-6 text-orange-500 group-hover:text-orange-600" fill="none" stroke="currentColor"
            stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2 8.5l7.5 7.5M2 16l5-5 6.5 6.5L8 22l-6-6z" />
          </svg>
          <span class="text-xl font-semibold text-neutral-900 group-hover:text-blue-700 transition">
            +92-213-4321900
          </span>
        </div>
      </div>

    
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 animate-fadeInRight delay-200">
        <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
          <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M9 12h6M12 3v3m0 15v-3m9-6h-3M6 12H3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <span class="text-sm font-medium text-neutral-800">Secure Remote & On-Site Support</span>
        </div>

        <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
          <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M3 3h18v18H3z" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <span class="text-sm font-medium text-neutral-800">Office Connect</span>
        </div>

        <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
          <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M6 2v20M18 2v20M6 6h12M6 18h12" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <span class="text-sm font-medium text-neutral-800">IP Telephone System</span>
        </div>

        <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
          <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M12 12l8-5-8-5-8 5 8 5zm0 0v8" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <span class="text-sm font-medium text-neutral-800">Cloud Services & Security</span>
        </div>

        <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
          <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M4 4h16v4H4zM4 16h16v4H4zM4 10h16v4H4z" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <span class="text-sm font-medium text-neutral-800">Desktops, Servers & Network Equipment</span>
        </div>

        <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
          <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M2 12h4M18 12h4M12 2v4M12 18v4" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <span class="text-sm font-medium text-neutral-800">Internet & Wi-Fi Connections</span>
        </div>
      </div>
    </div>
  </section> -->

  <section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">
      <!-- Left Block -->
      <div class="space-y-6 animate-fadeInLeft">
        <img src="<?= $base . '/assets/images/Helpdesk-support-768x512.jpg' ?>" alt="IT Monitoring"
          class="w-full max-w-md mx-auto md:mx-0 rounded" />
        <h3 class="text-2xl md:text-3xl font-semibold text-neutral-900 leading-tight">
          We Watch Your Office IT Day and Night to Prevent Problems
        </h3>
        <div class="h-px w-20 bg-gray-300"></div>
        <p class="text-gray-700 leading-relaxed text-base">
          Yes, Al Musaab provides 24-hour technical support to all our clients. This means our team of experts is always available whenever you need help, day or night.
        </p>
        <p class="text-gray-700 leading-relaxed text-base">
          We use simple and secure support software to fix your problems quickly without wasting your time.
        </p>
      </div>

      <!-- Right Block -->
      <div class="space-y-6 animate-fadeInRight">
        <img src="<?= $base . '/assets/images/cyber-security-live-monitoring-4-768x512.jpg' ?>" alt="Cyber Security"
          class="w-full max-w-md mx-auto md:mx-0 rounded shadow-lg" />
        <h3 class="text-2xl md:text-3xl font-semibold text-neutral-900 leading-tight">
          Live Security Monitoring:
          <span class="block text-blue-700 font-bold mt-2">Keeping Your Data Safe is Our Priority</span>
        </h3>
        <div class="h-px w-20 bg-gray-300"></div>
        <p class="text-gray-700 leading-relaxed text-base">
          Every year, thousands of businesses lose millions of rupees due to online hackers. Most attacks happen without anyone noticing for many months.
        </p>
        <p class="text-gray-700 leading-relaxed text-base">
          This is very dangerous for your business. That’s why we watch your system live to stop hackers before they can steal your information.
        </p>
        <p class="text-gray-700 leading-relaxed text-base">
          Our security tools include real-time alerts, daily checks for weak points, and expert assessments to keep your office safe.
        </p>
      </div>
    </div>

    <!-- Image Row -->
    <!-- Insurance Section -->
    <div class="max-w-7xl mx-auto px-6 mt-20 grid md:grid-cols-2 gap-16 items-center">
      <!-- Text Column -->
      <div class="space-y-6">
        <h3 class="text-3xl md:text-4xl font-semibold text-neutral-900 leading-tight">
          Full Insurance Protection
        </h3>
        <div class="h-1 w-24 bg-gradient-to-r from-orange-500 to-orange-300 rounded-full"></div>
        <p class="text-gray-700 leading-relaxed text-lg">
          Our team of experts works with the highest level of care. We have multi-million dollar insurance to cover all our projects. This means you don't have to worry—your business and property are fully protected if anything goes wrong during our work.
        </p>
      </div>

      <!-- Image Column -->
      <div class="relative">
        <img src="<?= $base . '/assets/images/Insurance-b-768x512.jpg' ?>" alt="Insurance Tech"
          class="w-full h-auto rounded-2xl shadow-xl border border-gray-100" />
        <div class="absolute inset-0 bg-gradient-to-tr from-black/10 to-transparent rounded-2xl"></div>
      </div>
    </div>


  </section>

  <section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6 md:flex md:gap-16">
      <!-- Left Panel -->
      <div class="flex-1 flex flex-col justify-between space-y-6">
        <span class="inline-block w-fit bg-orange-500 text-white text-sm font-semibold px-4 py-2 rounded">
          ONLINE APPOINTMENTS
        </span>

        <div class="h-px w-20 bg-gray-300"></div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
          Want to make your business faster and more successful?
        </h2>
        <p class="text-gray-600">
          In today’s world, your technology must be fast, safe, and ready to grow with your business.
        </p>
        <p class="text-gray-600">
          Old computers and slow internet can waste your time and cause you to lose customers.
        </p>
        <p class="text-gray-600">
          We provide modern IT solutions to keep your business connected and protected at all times.
        </p>
        <p class="text-gray-600">
          It’s time to upgrade your office IT with our help!
        </p>
        <div class="h-px w-20 bg-gray-300"></div>
      </div>

      <!-- Right Panel -->
      <div class="flex-1 flex">
        <div class="flex bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden w-full">
          <!-- Orange Stripe -->
          <div class="w-2 bg-orange-500"></div>

          <!-- Content -->
          <div class="p-10 space-y-6 flex flex-col justify-between w-full">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.21 0 4.29.535 6.121 1.476M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
              </div>
            <h3 class="text-2xl font-semibold text-gray-900">
                Free Office IT Check-up
              </h3>
            </div>
            <p class="text-gray-700">
                We will visit your office to check your computers and Wi-Fi. We will find any parts that are old or slow and need to be fixed.
            </p>
            <p class="text-gray-700">
                If we find any problems, we will give you a clear plan to fix them so your office can work faster and better.
            </p>
            <p class="text-gray-700">
                Remember, good IT is the secret to a successful and unstoppable business.
            </p>
            <div>
              <a href="#contact"
                class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded transition">
                Book Now
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white py-24">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-extrabold text-orange-600 mb-2">
        Our Services
      </h2>
      <h3 class="text-xl md:text-2xl font-semibold text-gray-900">
        Using Cloud Technology:
        <span class="font-bold text-black">Keep Your Data Safe and Reachable</span>
      </h3>
      <p class="text-gray-600 max-w-2xl mx-auto mt-4">
        Cloud technology makes sure you never lose your important files. See how our cloud services can help your business stay safe.
      </p>
      <div class="w-12 h-1 bg-orange-500 mx-auto mt-6 mb-12"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">
      <!-- Backup Card -->
      <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-lg transition duration-300">
        <img src="<?= $base . '/assets/images/cloud-backup-2-peyrttrxdpbszezhj8jp7zwnwsjr7z7gja2sxmpl14.png' ?>"
          alt="Cloud Backup" class="w-full h-44 object-cover rounded-xl mb-6" />
        <h4 class="text-xl font-semibold text-gray-900 mb-4">
          Backup & Disaster Recovery
        </h4>
        <ul class="text-gray-700 space-y-3 text-sm text-left">
          <li>
            • We save your data safely on the cloud using the best tools.
          </li>
          <li>
            • You can reach your files from any device, anywhere in the world.
          </li>
          <li>
            • If your computer breaks, we can bring your work back online quickly.
          </li>
        </ul>
      </div>

      <!-- Migration Card -->
      <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-lg transition duration-300">
        <img src="<?= $base . '/assets/images/cloud-migration-peysasr0s0k6lyc0fkn78pqa18wc78kzja4evhjooo.jpg' ?>"
          alt="Migration" class="w-full h-44 object-cover rounded-xl mb-6" />
        <h4 class="text-xl font-semibold text-gray-900 mb-4">Migration</h4>
        <ul class="text-gray-700 space-y-3 text-sm text-left">
          <li>• Our expert team handles the full move for you.</li>
          <li>
            • We move your data and apps from any old server to the cloud.
          </li>
          <li>• We make sure all your databases are moved safely.</li>
          <li>
            • We setup all the settings so you can start working immediately.
          </li>
        </ul>
      </div>

      <!-- Security Card -->
      <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm hover:shadow-lg transition duration-300">
        <img src="<?= $base . '/assets/images/cloud-security-peyryzvyyweku7h5cgztxoxxj32fk1qb8v8xyf1mt4.png' ?>"
          alt="Cloud Security" class="w-full h-44 object-cover rounded-xl mb-6" />
        <h4 class="text-xl font-semibold text-gray-900 mb-4">
          Cloud Security
        </h4>
        <ul class="text-gray-700 space-y-3 text-sm text-left">
          <li>
            • We use strong security to protect your data from hackers.
          </li>
          <li>
            • We manage who can access your files to keep them private.
          </li>
          <li>
            • We watch your cloud system 24/7 to stop any attacks.
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="relative bg-gray-50 py-20 overflow-hidden">
    <!-- Top Heading -->
    <div class="text-center max-w-4xl mx-auto px-6 mb-20">
      <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
        Are You Spending Too Much on
        <span class="text-blue-900">Office Calls?</span>
      </h2>
      <p class="mt-4 text-gray-700 text-base md:text-lg">
        Our <strong>Office Connect</strong> service gives you a professional office phone system and fast internet without high costs. Save your money for what matters!
      </p>
      <div class="w-16 h-1 bg-orange-500 mx-auto mt-6"></div>
    </div>

    <!-- Content Area -->
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center relative z-10">
      <!-- Text -->
      <div class="text-gray-900">
        <h3 class="text-2xl md:text-3xl font-bold mb-4">
          Professional Email for Your Business
        </h3>
        <div class="w-12 h-1 bg-orange-500 mb-6"></div>
        <p class="text-gray-700 text-base md:text-lg mb-4">
            Setting up professional business emails doesn't have to be expensive or hard. We handle the full setup so your team can communicate easily.
        </p>
        <p class="text-gray-700 text-base md:text-lg">
            Our prices are low and we don't have any hidden fees. Our experts have set up systems for hundreds of happy clients across Pakistan.
        </p>
      </div>
      <!-- Image with circle -->
      <div class="relative">
        <!-- Circle behind image -->
        <div class="absolute -top-16 -left-16 z-0">
          <div class="w-[360px] h-[360px] border-[40px] rounded-full animate-float-fast"
            style="border-color: #0602ff; opacity: 0.3"></div>
        </div>

        <!-- Image -->
        <img src="<?= $base . '/assets/images/hosted-pbx1-469x500-1.jpg' ?>" alt="Cloud PBX"
          class="relative z-10 w-full max-w-md mx-auto rounded-xl shadow-2xl object-cover" />
      </div>
    </div>
  </section>

  <style>
    @keyframes floatFast {

      0%,
      100% {
        transform: translateY(-50px);
      }

      50% {
        transform: translateY(50px);
      }
    }

    .animate-float-fast {
      animation: floatFast 3s ease-in-out infinite;
    }
  </style>

  <section class="relative bg-[#f9fbff] py-24 overflow-hidden">
    <!-- Background Accent Circle -->
    <div class="absolute -top-20 -left-20 w-[300px] h-[300px] bg-[#002bff]/10 rounded-full z-0"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 grid lg:grid-cols-3 gap-16 items-start">
      <!-- Left Column -->
      <div>
        <h2 class="text-3xl font-extrabold text-gray-900 leading-tight mb-6">
          Clear Voice Calls for Your Business
        </h2>
        <hr class="w-16 border-t-2 border-orange-500 mb-6" />
        <p class="text-gray-700 text-base mb-6">
          Stop using poor-quality phone systems that frustrate your customers. Switch to our high-quality office phone solutions.
        </p>
        <ul class="space-y-4 text-sm text-gray-700">
          <li class="flex gap-2">
            <span class="mt-1 text-orange-500 text-xl">•</span>
            Get international numbers easily and connect them to your office phone system.
          </li>
          <li class="flex gap-2">
            <span class="mt-1 text-orange-500 text-xl">•</span>
            Enjoy clear and reliable voice calls no matter where you are.
          </li>
          <li class="flex gap-2">
            <span class="mt-1 text-orange-500 text-xl">•</span>
            We make it very easy to upgrade your current office phone setup.
          </li>
          <li class="flex gap-2">
            <span class="mt-1 text-orange-500 text-xl">•</span>
            No startup fees, no hidden costs, and no long-term contracts.
          </li>
        </ul>
      </div>

      <!-- Center Image -->
      <div class="flex justify-center">
        <img src="<?= $base . '/assets/images/hosted-pbx2-429x469-1.jpg' ?>" alt="Office Connect Diagram"
          class="w-full max-w-sm rounded-xl shadow-xl" />
      </div>

      <!-- Right Column -->
      <div>
        <h2 class="text-3xl font-extrabold text-gray-900 leading-tight mb-6">
          We Handle the Hard Work to Help Your Business Grow
        </h2>
        <hr class="w-16 border-t-2 border-orange-500 mb-6" />
        <ul class="space-y-4 text-sm text-gray-700">
          <li class="flex gap-2">
            <span class="mt-1 text-orange-500 text-xl">•</span>
            We check your network thoroughly before we start any service.
          </li>
          <li class="flex gap-2">
            <span class="mt-1 text-orange-500 text-xl">•</span>
            We quickly replace any faulty equipment so your work never stops.
          </li>
          <li class="flex gap-2">
            <span class="mt-1 text-orange-500 text-xl">•</span>
            Manage all your office phone contacts from one simple screen.
          </li>
          <li class="flex gap-2">
            <span class="mt-1 text-orange-500 text-xl">•</span>
            Free features like call forwarding, voicemail, and keeping your old number.
          </li>
          <li class="flex gap-2">
            <span class="mt-1 text-orange-500 text-xl">•</span>
            Ditch the old fax machine. Our Digital Fax lets you send and receive faxes through your email. All for as low as $99.99.
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="relative bg-[#0b0f1a] text-white py-24 overflow-hidden">
    <!-- Background Glow -->
    <div class="absolute -top-20 -left-32 w-[400px] h-[400px] bg-blue-500/20 rounded-full blur-3xl z-0"></div>

    <!-- Grid Layout -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20 items-center">
      <!-- Text Content -->
      <div class="relative z-20">
        <h2 class="text-3xl md:text-4xl font-extrabold leading-tight mb-6">
          Secure Your Business with <br />
          <span class="text-blue-400">Quick Technical Help & Remote Access</span>
        </h2>
        <div class="w-16 h-1 bg-blue-500 mb-8"></div>
        <p class="text-gray-300 mb-6 leading-relaxed">
            In today's world, everything is online. This means your business must be extra careful about protecting your private information.
        </p>
        <p class="text-gray-300 mb-6 leading-relaxed">
            Get peace of mind with our expert support. We can help you through the internet in just 15 minutes to fix any problems.
        </p>
        <p class="text-gray-300 mb-6 leading-relaxed">
            We use the most secure tools and two-step verification to make sure only our experts can access your system safely.
        </p>
        <p class="text-gray-300 leading-relaxed">
            We are your trusted partner for all technical and structural safety needs in Pakistan.
        </p>
      </div>

      <!-- Overlapping Image -->
      <div class="relative z-10">
        <div class="relative">
          <div class="absolute -top-6 -left-6 w-full h-full bg-blue-600/30 rounded-xl -z-10"></div>
          <img src="<?= $base . '/assets/images/undraw_workspace_s6wf.svg' ?>" alt="Remote Support Team"
            class="w-full max-w-lg rounded-xl " />
        </div>
      </div>
    </div>
  </section>

  <section class="relative bg-white py-24 overflow-hidden">
    <!-- Decorative Background Shape -->
    <div class="absolute -top-48 -left-48 w-[700px] h-[700px] bg-blue-100 rounded-full blur-3xl opacity-20 z-0"></div>

    <!-- Image Row -->
    <div class="relative z-10 mt-24 grid md:grid-cols-2 gap-8 max-w-7xl mx-auto px-6 animate-fadeIn delay-200">
      <img src="<?= $base . '/assets/images/Business-Strategy-Planning-2b-1024x576.png' ?>" alt="IT Strategy Planning"
        class="w-full h-auto rounded-lg shadow-md" />
      <img src="<?= $base . '/assets/images/cyber-security-live-monitoring-2-1024x576.jpg' ?>" alt="Network Monitoring"
        class="w-full h-auto rounded-lg shadow-md" />
    </div>

    <!-- Text Section -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 mt-20 grid md:grid-cols-2 gap-16 items-start">
      <!-- IT Strategy Planning -->
      <div class="space-y-6">
        <h3 class="text-3xl font-extrabold text-neutral-900 leading-snug">
          Grow Your <span class="text-blue-700">Business</span> with 
          Smart IT Planning
        </h3>
        <div class="h-px w-20 bg-gray-300"></div>

        <div class="space-y-4">
          <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-blue-700 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" />
            </svg>
            <p class="text-gray-700 text-base leading-relaxed">
              When your technology works perfectly, your business can grow faster and reach more customers.
            </p>
          </div>

          <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-blue-700 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" />
            </svg>
            <p class="text-gray-700 text-base leading-relaxed">
              In today’s fast-paced IT world, an optimized infrastructure is essential — but expensive.
            </p>
          </div>

          <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-blue-700 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" />
            </svg>
            <p class="text-gray-700 text-base leading-relaxed">
              That’s where we come in — offering premium tech solutions while reducing your IT spend.
            </p>
          </div>

          <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-blue-700 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" />
            </svg>
            <p class="text-gray-700 text-base leading-relaxed">
              We dive deep into your infrastructure to align connectivity, safety, and system stability.
            </p>
          </div>

          <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-blue-700 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" />
            </svg>
            <p class="text-gray-700 text-base leading-relaxed">
              Hundreds of businesses across Pakistan trust our smart planning to stay ahead of the competition.
            </p>
          </div>
        </div>

      </div>

      <!-- Network and Email Monitoring -->
      <div class="space-y-6">
        <h3 class="text-3xl font-extrabold text-neutral-900 leading-snug">
          Avoid Disasters with <span class="text-blue-700">Continuous</span>
          Office Monitoring
        </h3>
        <div class="h-px w-20 bg-gray-300"></div>

        <div class="space-y-4">
          <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-blue-700 mt-1" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" />
            </svg>
            <p class="text-gray-700 text-base leading-relaxed">
              Imagine your internet stops working in the middle of a big meeting. Your work stops and customers get upset.
            </p>
          </div>

          <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-blue-700 mt-1" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" />
            </svg>
            <p class="text-gray-700 text-base leading-relaxed">
              Or worse — sensitive emails get leaked, risking your business secrets.
            </p>
          </div>

          <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-blue-700 mt-1" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" />
            </svg>
            <p class="text-gray-700 text-base leading-relaxed">
              The solution? Continued monitoring of your networks and mail systems.
            </p>
          </div>

          <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-blue-700 mt-1" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" />
            </svg>
            <p class="text-gray-700 text-base leading-relaxed">
              Would you be doing it yourself? Costly. Frustrating. Probably won’t work.
            </p>
          </div>

          <div class="flex items-start gap-3">
            <svg class="w-5 h-5 text-blue-700 mt-1" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" />
            </svg>
            <p class="text-gray-700 text-base leading-relaxed">
              With Al Musaab, our SOC 24 monitors all your hardware and cloud infrastructure and provides proactive
              support.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white py-24" id="essentials">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-extrabold text-neutral-900">Office Essentials</h2>
        <div class="w-12 h-1 bg-orange-500 mx-auto mt-4"></div>
        <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto">
          Common IT services you need to keep your office running smoothly.
        </p>
      </div>

      <div class="grid md:grid-cols-3 gap-10">
        <!-- Card 1 -->
        <div class="essential-card opacity-0 translate-y-8 transition-all duration-700 ease-out">
          <img src="<?= $base . '/assets/images/professional-it-consultant-1024x683.jpg' ?>" alt="IT Consultation"
            class="w-full h-56 object-cover rounded-t-2xl" />
          <div class="bg-gray-50 p-6 rounded-b-2xl shadow-sm hover:shadow-md transition hover:scale-[1.03]">
            <h3 class="text-lg font-semibold text-neutral-900 mb-2">
              Expert IT Advice
            </h3>
            <p class="text-gray-700 text-sm leading-relaxed">
                We look at your current office setup and give you a simple plan to make everything faster and stop any recurring problems.
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="essential-card opacity-0 translate-y-8 transition-all duration-700 ease-out delay-150">
          <img src="<?= $base . '/assets/images/Mac-Services-b-1024x683.jpg' ?>" alt="MAC Services"
            class="w-full h-56 object-cover rounded-t-2xl" />
          <div class="bg-gray-50 p-6 rounded-b-2xl shadow-sm hover:shadow-md transition hover:scale-[1.03]">
            <h3 class="text-lg font-semibold text-neutral-900 mb-2">
                Office Moves & Setup
              </h3>
              <p class="text-gray-700 text-sm leading-relaxed">
                Moving to a new office or adding new staff? We handle all the wiring, computer setup, and software so you can start working immediately.
              </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="essential-card opacity-0 translate-y-8 transition-all duration-700 ease-out delay-300">
          <img src="<?= $base . '/assets/images/computer-service-4b-1024x683.jpg' ?>" alt="Break-Fix"
            class="w-full h-56 object-cover rounded-t-2xl" />
          <div class="bg-gray-50 p-6 rounded-b-2xl shadow-sm hover:shadow-md transition hover:scale-[1.03]">
            <h3 class="text-lg font-semibold text-neutral-900 mb-2">
                Emergency Repairs
              </h3>
              <p class="text-gray-700 text-sm leading-relaxed">
                If something breaks, we fix it fast. We offer quick on-site help to get your broken computers or internet back up and running.
              </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Animation Styles -->
  <style>
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fadeInUp {
      animation: fadeInUp 0.8s ease-out forwards;
    }

    .delay-150 {
      animation-delay: 0.15s;
    }

    .delay-300 {
      animation-delay: 0.3s;
    }
  </style>

  <section class="relative bg-gray-50 py-24 overflow-hidden">
    <!-- Content Area -->
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center relative z-10">
      <!-- Text -->
      <div class="text-gray-900">
        <h3 class="text-3xl font-bold mb-4">
          Easy Computer & Hardware Buying
        </h3>
        <div class="w-12 h-1 bg-orange-500 mb-6"></div>
        <p class="text-gray-700 text-base md:text-lg mb-6">
            We help you buy the right computers and equipment at the best prices, handling everything from delivery to setup.
        </p>

        <ul class="space-y-4 text-gray-700 text-base md:text-lg">
          <li class="flex items-start gap-3">
            <span class="text-orange-500 mt-1 text-xl">•</span>
            Get high-quality products at the best market price.
          </li>
          <li class="flex items-start gap-3">
            <span class="text-orange-500 mt-1 text-xl">•</span>
            We handle the warranty and repairs for you.
          </li>
          <li class="flex items-start gap-3">
            <span class="text-orange-500 mt-1 text-xl">•</span>
            We suggest the best brands that work for your budget.
          </li>
          <li class="flex items-start gap-3">
            <span class="text-orange-500 mt-1 text-xl">•</span>
            We check every computer before it reaches your office.
          </li>
          <li class="flex items-start gap-3">
            <span class="text-orange-500 mt-1 text-xl">•</span>
            No need to worry about fake or low-quality parts.
          </li>
          <li class="flex items-start gap-3">
            <span class="text-orange-500 mt-1 text-xl">•</span>
            Quick delivery across all major cities in Pakistan.
          </li>
        </ul>
      </div>

      <!-- Image with circle -->
      <div class="relative">
        <!-- Circle behind image -->
        <div class="absolute -top-16 -left-16 z-0">
          <div class="w-[360px] h-[360px] border-[40px] rounded-full animate-float-fast"
            style="border-color: #0602ff; opacity: 0.3"></div>
        </div>

        <!-- Image -->
        <img src="<?= $base . '/assets/images/Depositphotos_714451488_XL1.jpg' ?>" alt="Procurement"
          class="h-96 mx-auto object-cover relative rounded-xl shadow-2xl w-full z-10" />
      </div>
    </div>
  </section>

  <section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6">
      <!-- Top Heading -->
      <div class="text-center mb-20">
        <h2 class="text-4xl font-extrabold text-neutral-900">
          A Good Website Helps You Grow Your Business
        </h2>
        <p class="text-lg text-gray-600 mt-4">
            Most customers in Pakistan check your website before they decide to visit or buy from you.
        </p>
        <div class="w-10 h-1 bg-orange-500 mx-auto mt-6"></div>
      </div>

      <!-- Split Layout -->
      <div class="grid md:grid-cols-2 gap-16 items-center">
        <!-- Left Text Content -->
        <div class="space-y-6">
          <h3 class="text-2xl font-bold text-neutral-900">
            It all starts with your idea
          </h3>

          <div class="space-y-4 text-base text-gray-700 leading-relaxed">
            <p>
                Tell us your vision and we will build a beautiful, fast website for you.
            </p>
            <p>
                You can easily monitor our progress, share files, and give feedback anytime you want.
            </p>
            <p>
                We also offer free monthly updates to keep your site fresh and up-to-date.
            </p>
            <p>
              <span class="font-semibold text-neutral-900">Easy to Manage:</span>
              Track how many people are visiting your site from one simple dashboard.
            </p>
            <p>
              <span class="font-semibold text-neutral-900">Professional Design:</span>
              We make your business look world-class and trustworthy online.
            </p>
            <p>
              <span class="font-semibold text-neutral-900">No Hidden Costs:</span>
              Everything you need to stay online is included in one simple plan.
            </p>
          </div>

        </div>

        <!-- Right Image -->
        <div>
          <img src="<?= $base . '/assets/images/webde.jpg' ?>" alt="Website Planning"
            class="w-full rounded-lg border border-gray-200" />
        </div>
      </div>
    </div>
  </section>

  <section class="relative bg-white py-24 overflow-hidden">
    <!-- Decorative Background Shape -->
    <div class="absolute -top-48 -left-48 w-[700px] h-[700px] bg-blue-100 rounded-full blur-3xl opacity-20 z-0"></div>

    <!-- Image Row -->
    <div class="relative z-10 mt-24 grid md:grid-cols-2 gap-8 max-w-7xl mx-auto px-6 animate-fadeIn delay-200">
      <img src="<?= $base . '/assets/images/website-design-working-2-1024x411.jpeg' ?>" alt="IT Strategy Planning"
        class="w-full h-auto rounded-lg shadow-md" />
      <img src="<?= $base . '/assets/images/web-design-update-b-1024x411.png' ?>" alt="Network Monitoring"
        class="w-full h-auto rounded-lg shadow-md" />
    </div>

    <!-- Text Section -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 mt-20 grid md:grid-cols-2 gap-16 items-start">
      <!-- IT Strategy Planning -->
      <div class="space-y-6">
        <h3 class="text-3xl font-extrabold text-neutral-900 leading-snug">
          Get more than just a website
        </h3>
        <div class="h-px w-20 bg-gray-300"></div>

        <div class="space-py-4">
          <p class="text-gray-700 text-base leading-relaxed">
            Our websites include fast hosting, security, and everything your business needs. If you want to sell products online, we also build complete e-commerce stores for you.
          </p>
        </div>
      </div>

      <!-- Network and Email Monitoring -->

      <div class="space-y-6">
        <h3 class="text-3xl font-extrabold text-neutral-900 leading-snug">
          How It Works
        </h3>
        <div class="h-px w-20 bg-gray-300"></div>

        <div class="space-y-4">
          <p class="text-gray-700 text-base leading-relaxed">
            First, we <b>listen</b> to you to understand your business and what you want to achieve.
          </p>
          <p class="text-gray-700 text-base leading-relaxed">
            Then we <b>design</b> a website that is unique to your brand and speaks directly to your customers in Pakistan.
          </p>
          <p class="text-gray-700 text-base leading-relaxed">
            Every part of your new website will have a purpose—to grow your business and build your reputation. <b>This is more than just design; it's a tool for your success.</b>
          </p>
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

  <!-- Floating animation -->
  <style>
    @keyframes float-slow {
      0% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-10px);
      }

      100% {
        transform: translateY(0);
      }
    }

    .animate-float-slow {
      animation: float-slow 8s ease-in-out infinite;
    }
  </style>

  <!-- Tailwind animation (include this once globally) -->
  <style>
    @keyframes float {
      0% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-15px);
      }

      100% {
        transform: translateY(0);
      }
    }

    .animate-float {
      animation: float 6s ease-in-out infinite;
    }
  </style>

  <!-- CONTACT FORM -->
  <section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-3xl mx-auto px-6">
      <h3 class="text-2xl font-semibold mb-8 text-center">Get In Touch</h3>
      <form class="space-y-6" action="sendmail.php" method="POST">
        <div class="grid md:grid-cols-2 gap-6">
          <input type="text" name="name" placeholder="Your Name" class="w-full border border-black px-4 py-3 rounded"
            required />
          <input type="email" name="email" placeholder="Email Address"
            class="w-full border border-black px-4 py-3 rounded" required />
        </div>
        <input type="tel" name="phone" placeholder="Phone Number" class="w-full border border-black px-4 py-3 rounded"
          required />
        <textarea rows="4" name="message" placeholder="Your Message"
          class="w-full border border-black px-4 py-3 rounded resize-none" required></textarea>
        <div class="text-center">
          <button type="submit" class="bg-neutral-900 text-white px-8 py-3 rounded hover:bg-neutral-800 transition">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </section>
  <?php include("footer.php"); ?>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const iframe = document.querySelector("#map-iframe");
      if (!iframe) return;

      const observer = new IntersectionObserver(
        (entries) => {
          if (entries[0].isIntersecting) {
            iframe.src = iframe.dataset.src;
            observer.disconnect();
          }
        },
        { rootMargin: "200px" }
      );

      observer.observe(iframe);
    });
  </script>
</body>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll(".essential-card");

    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.remove("opacity-0", "translate-y-8");
            entry.target.classList.add("opacity-100", "translate-y-0");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1 }
    );

    cards.forEach((card) => {
      observer.observe(card);
    });
  });
</script>

</html>