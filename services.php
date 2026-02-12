<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Primary SEO -->
    <title>IT Services in Pakistan | IT Support, Cloud & Security | Al Musaab</title>
    <meta name="description"
        content="Simple and reliable IT services in Pakistan: IT Support, Cloud, Security, and Networking. Helping local businesses grow since 1995." />
    <link rel="canonical" href="https://almusaab.com/services/" />
    <meta name="robots" content="index,follow,max-image-preview:large" />
    <link rel="icon" href="<?= $base . '/assets/favicon.svg' ?>" sizes="any" />
    <!-- Open Graph -->
    <meta property="og:title"
        content="IT Services in Pakistan | Managed IT, Cloud, Cybersecurity & VoIP | Al Musaab" />
    <meta property="og:description"
        content="See allAl Musaabservices: managed support, cloud, cybersecurity, warehousing & network infrastructure, and Office Connect VoIP." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://almusaab.com/services/" />
    <meta property="og:image"
        content="https://almusaab.com/wp-content/uploads/2021/10/Business-Strategy-Planning-2b-1024x576.png" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title"
        content="IT Services in Pakistan | Managed IT, Cloud, Cybersecurity & VoIP | Al Musaab" />
    <meta name="twitter:description"
        content="Browse the fullAl Musaabservices portfolio for Pakistani organizations." />
    <meta name="twitter:image"
        content="https://almusaab.com/wp-content/uploads/2021/10/Business-Strategy-Planning-2b-1024x576.png" />

    <!-- Performance hints -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preload" as="image"
        href="https://almusaab.com/wp-content/uploads/2021/10/Business-Strategy-Planning-2b-1024x576.png"
        imagesrcset="https://almusaab.com/wp-content/uploads/2021/10/Business-Strategy-Planning-2b-1024x576.png 1024w"
        imagesizes="(min-width:1024px) 60vw, 100vw">

    <!-- CSS/JS you already use -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
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

    <!-- Your existing styles -->
    <style>
        :root {
            --accent: #D83B01;
            --accent-2: #FFB900;
        }

        .qt-line {
            height: 6px;
            width: 64px;
            border-radius: 9999px;
            background: #D83B01;
            margin-inline: auto;
        }

        .qt-btn {
            border-radius: 2px;
            font-weight: 600;
        }

        .qt-btn-primary {
            background: #D83B01;
            color: #fff;
        }

        .qt-btn-primary:hover {
            background: #b93101;
        }

        .qt-btn-secondary {
            background: #fff;
            color: #1b1b1b;
            border: 1px solid #dcdcdc;
        }

        .qt-btn-secondary:hover {
            background: #f6f6f6;
            border-color: #cfcfcf;
        }

        .qt-card {
            border: 1px solid #e6e6e6;
            border-radius: 12px;
            background: #fff;
            transition: transform .2s, box-shadow .2s, border-color .2s;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .04);
        }

        .qt-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, .08);
            border-color: #D83B01;
        }

        .pill {
            border: 1px solid #dcdcdc;
            border-radius: 9999px;
            padding: .5rem .9rem;
            cursor: pointer;
        }

        .pill.active {
            background: #1b1b1b;
            color: #fff;
            border-color: #1b1b1b;
        }
    </style>

    <!-- Motion tokens -->
    <style>
        @media (prefers-reduced-motion:no-preference) {
            .anim-backdrop {
                animation: qtfade .16s ease-out forwards;
            }

            .anim-sheet-in {
                animation: qtsheet .18s cubic-bezier(.2, .8, .2, 1) forwards;
            }

            .anim-hero img {
                animation: qtzoom .6s ease-out forwards;
            }

            .anim-rise {
                animation: qtrise .22s ease-out both;
            }

            .anim-stagger>* {
                opacity: 0;
                transform: translateY(6px);
                animation: qtrise .24s ease-out forwards;
            }

            .anim-stagger>*:nth-child(1) {
                animation-delay: .06s;
            }

            .anim-stagger>*:nth-child(2) {
                animation-delay: .12s;
            }

            .anim-stagger>*:nth-child(3) {
                animation-delay: .18s;
            }

            .anim-stagger>*:nth-child(4) {
                animation-delay: .24s;
            }

            .anim-stagger>*:nth-child(5) {
                animation-delay: .30s;
            }
        }

        @keyframes qtfade {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes qtsheet {
            from {
                opacity: 0;
                transform: translateY(10px) scale(.985)
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1)
            }
        }

        @keyframes qtzoom {
            from {
                transform: scale(1.02)
            }

            to {
                transform: scale(1)
            }
        }

        @keyframes qtrise {
            from {
                opacity: 0;
                transform: translateY(6px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }
    </style>

    <!-- Fluent-style modal integration -->
    <style>
        html {
            color-scheme: light;
        }

        #svc-sheet-overlay {
            display: none;
        }

        #svc-sheet-overlay.is-open {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            overscroll-behavior: contain;
        }

        #svc-sheet {
            width: min(98vw, 1280px);
            max-height: 92vh;
            border-radius: 14px;
            will-change: transform, opacity;
        }

        #svc-sheet-overlay>[data-close] {
            background: rgba(12, 12, 12, .45);
            backdrop-filter: saturate(150%) blur(8px);
        }

        #svc-sheet-img {
            object-fit: fill;
        }
    </style>

    <!-- Structured Data: ItemList of services + Breadcrumbs -->
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"ItemList",
    "@id":"https://almusaab.com/services/#list",
    "name":"Al Musaab Services",
    "itemListOrder":"https://schema.org/ItemListOrderAscending",
    "itemListElement":[
      { "@type":"ListItem", "position":1, "url":"https://almusaab.com/managedservices/", "name":"Managed Services" },
      { "@type":"ListItem", "position":2, "url":"https://almusaab.com/cloud-security/", "name":"Cloud Security" },
      { "@type":"ListItem", "position":3, "url":"https://almusaab.com/officeconnect/", "name":"Office Connect (VoIP & SIP Trunking)" },
      { "@type":"ListItem", "position":4, "url":"https://almusaab.com/warehousing-solutions-and-network-infrastructure/", "name":"Warehousing & Network Infrastructure" }
    ],
    "url":"https://almusaab.com/services/"
  }
  </script>
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"BreadcrumbList",
    "itemListElement":[
      { "@type":"ListItem", "position":1, "name":"Home", "item":"https://almusaab.com/" },
      { "@type":"ListItem", "position":2, "name":"Services", "item":"https://almusaab.com/services/" }
    ]
  }
  </script>
</head>


<body class="bg-white text-neutral-900 font-sans">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GG72GW" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include("navbar.php"); ?>

    <!-- HERO -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-semibold tracking-tight leading-tight">
                    IT services that work quietly so you can work faster.
                </h1>
                <p class="mt-6 text-lg text-neutral-700">
                    From setting up a new office to keeping your data safe. Pick what you need or get a full package. Simple, reliable, and affordable.
                </p>
                <div class="mt-8 flex gap-3">
                    <a href="#catalog" class="qt-btn qt-btn-primary px-8 py-3">View Services</a>
                    <a href="<?= $base ?>/contactus" class="qt-btn qt-btn-secondary px-8 py-3">Contact Us</a>
                </div>
            </div>
            <div class="md:block hidden">
                <img src="<?= $base . '/assets/images/business2840.jpg' ?>" alt="Services Overview"
                    class="w-full rounded-xl " />
            </div>
        </div>
    </section>

    <!-- SEARCH + FILTERS -->
    <section id="catalog" class="bg-[#f9f9f9] py-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-6">
                <input id="svc-search" type="search" placeholder="Search services (e.g., Wi-Fi, VoIP, security)…"
                    class="w-full md:flex-1 border border-neutral-300 rounded-[2px] px-4 py-3 outline-none focus:border-neutral-800"
                    aria-label="Search services" />
                <div class="flex flex-wrap items-center gap-2" id="svc-filters">
                    <?php
                    $services = [
                        // title, category, desc, image(url), slug
                        // IT Support
                        ["24/7 Help Desk Support", "IT Support", "Technical support available 24/7 to fix any problem.", "/assets/images/24/7_help.png", "24-7-help-desk-support"],
                        ["Field Services", "IT Support", "On-site visits to install equipment and fix hardware.", "/assets/images/field-service.jpeg", "field-services"],
                        ["Server & Data Support", "IT Support", "Keeping your servers running smoothly and safely.", "/assets/images/Depositphotos_287797174_XL-1024x576.jpg", "datacenter-operations"],
                        ["Network & Router Support", "IT Support", "Setting up and managing your office Wi-Fi and cables.", "/assets/images/NIO.jpg", "network-infrastructure-operations"],
                        ["Computers & Mobile Support", "IT Support", "Setting up and fixing laptops, desktops, and phones.", "/assets/images/computer_support.png", "end-user-computing-infrastructure"],
                        ["New Office IT Setup", "IT Support", "We handle all IT setup for your new office or site.", "/assets/images/Greenfield-Project.jpg", "greenfield-projects"],
                        ["Buying IT Equipment", "IT Support", "We help you buy the right laptops and gear at best prices.", "/assets/images/1653946676832-1-1024x683.jpeg", "procurement-services"],
                        ["Extra IT Staff Support", "IT Support", "Providing temporary experts for your big IT projects.", "/assets/images/SAO1.webp", "staff-augmentation-outsourcing"],

                        // Security Services
                        ["Network Protection", "Security Services", "Protecting your network from hackers and threats.", "/assets/images/iNTERNET-SECURITY-1024x761.png", "infrastructure-security"],
                        ["24/7 Security Monitoring", "Security Services", "Continuous watch to stop attacks immediately.", "/assets/images/24-hour-security.webp", "24-hour-monitoring-mitigation"],
                        ["Update & Gap Checks", "Security Services", "Scanning for weak points and keeping software updated.", "/assets/images/Vulnerability-Monitoring-Assessment-Mitigation.webp", "patch-vulnerability-monitoring"],
                        ["Secure Office Connections", "Security Services", "Making sure your office devices connect safely.", "/assets/images/SOC-monitoring.png", "securing-segregation-it-ot"],
                        ["Security Certificate Management", "Security Services", "Managing website and email security certificates.", "/assets/images/Certificate-Management.webp", "certificate-management"],

                        // Web & App Services
                        ["Website Development", "Web & App Services", "Modern and fast websites for your business.", "/assets/images/depositphotos_652767038-stock-illustration-man-code-guy-writes-code.webp", "dynamic-web-development"],
                        ["E-Commerce Shop Setup", "Web & App Services", "Building secure online stores for your products.", "/assets/images/ecommerce.webp", "ecommerce-development-management"],
                        ["Staff Portals & Intranet", "Web & App Services", "Simple internal websites for your staff to work together.", "/assets/images/intranet.webp", "intranet-sharepoint-development-management"],
                        ["Online Product Catalogs", "Web & App Services", "Listing your products online with easy search.", "/assets/images/web-catalog.webp", "web-catalog-development-management"],
                        ["Auto-Chat Solutions", "Web & App Services", "Chatbots to answer customer questions automatically.", "/assets/images/chatbot.webp", "chatbot-deployment-training"],
                        ["Work Automation", "Web & App Services", "Automating boring tasks to save time and money.", "/assets/images/workflow-automation.webp", "workflow-automation"],

                        // Application Security
                        ["Secure User Setup", "Application Security", "Setting up new staff on software safely.", "/assets/images/Untitled-design-7.png", "secure-onboarding"],
                        ["One-Click Login (SSO)", "Application Security", "One safe login for all your business apps.", "/assets/images/Single-Sign-On-SSO.webp", "single-sign-on-sso"],
                        ["App Health Monitoring", "Application Security", "Watching your business apps for speed and safety.", "/assets/images/threat-monitoring.webp", "application-monitoring"],
                        ["Software Access Control", "Application Security", "Managing who can access what software in your office.", "/assets/images/undefined.png", "lifecycle-management"],

                        // Testing & Auditing
                        ["Security Guard Testing", "Testing & Auditing", "Testing your security to find gaps before hackers do.", "/assets/images/Penetration-testing-1.webp", "penetration-testing"],
                        ["Security Check-ups", "Testing & Auditing", "Checking if your security rules are working correctly.", "/assets/images/Untitled-design-9.png", "auditing-security-controls"],
                        ["Fixing Security Gaps", "Testing & Auditing", "Quickly fixing any weak points we find in your system.", "/assets/images/Untitled-design-10.png", "remediation"],
                    ];
                    $cats = array_values(array_unique(array_map(fn($s) => $s[1], $services)));
                    ?>
                    <span class="pill active" data-cat="all">All</span>
                    <?php foreach ($cats as $c): ?>
                        <span class="pill" data-cat="<?= htmlspecialchars($c) ?>"><?= htmlspecialchars($c) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- GRID -->
            <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-8" id="svc-grid">
                <?php foreach ($services as $s): ?>
                    <article class="qt-card overflow-hidden svc-card" data-cat="<?= htmlspecialchars($s[1]) ?>"
                        data-title="<?= htmlspecialchars(strtolower($s[0])) ?>">
                        <div class="h-2 bg-[color:var(--accent)]"></div>
                        <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                            <img src="<?= $base . htmlspecialchars($s[3]) ?>" alt="<?= htmlspecialchars($s[0]) ?>"
                                class="absolute inset-0 w-full h-full <?= ($s[4] === '24-7-help-desk-support') ? 'object-cover' : 'object-fill' ?>" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold mb-2"><?= htmlspecialchars($s[0]) ?></h3>
                            <p class="text-sm text-neutral-600 leading-relaxed"><?= htmlspecialchars($s[2]) ?></p>
                            <div class="mt-4">
                                <button class="qt-btn qt-btn-secondary px-4 py-2 text-sm svc-open"
                                    data-title="<?= htmlspecialchars($s[0]) ?>" data-desc="<?= htmlspecialchars($s[2]) ?>"
                                    data-img="<?= htmlspecialchars($s[3]) ?>" data-cat="<?= htmlspecialchars($s[1]) ?>"
                                    data-slug="<?= htmlspecialchars($s[4]) ?>">
                                    Quick view
                                </button>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-12">
                <div class="qt-line mb-6"></div>
                <h2 class="text-3xl font-semibold tracking-tight">FAQs</h2>
            </div>
            <div class="space-y-6">
                <details class="qt-card p-5">
                    <summary class="font-medium cursor-pointer">Can I combine multiple services?</summary>
                    <p class="mt-3 text-sm text-neutral-700">Yes. You can pick one service or many together. We will give you a clear and fixed price before we start any work.</p>
                </details>
                <details class="qt-card p-5">
                    <summary class="font-medium cursor-pointer">Do you handle new setups for multiple offices?</summary>
                    <p class="mt-3 text-sm text-neutral-700">Yes. We can setup IT for all your office locations. We handle everything carefully so your business stays online without any trouble.</p>
                </details>
                <details class="qt-card p-5">
                    <summary class="font-medium cursor-pointer">What kind of support do you provide?</summary>
                    <p class="mt-3 text-sm text-neutral-700">We offer 24/7 technical support. Our team is always ready to fix any problems quickly so your work never stops.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="py-20 bg-white text-center">
        <div class="max-w-4xl mx-auto px-6">
            <a href="<?= $base ?>/contactus" class="qt-btn qt-btn-primary inline-block px-10 py-4 text-lg">Request an
                Expert</a>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gray-100 text-center">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl font-semibold mb-4">Need something custom?</h2>
            <p class="text-gray-600 mb-6">Our architects can design a deployment tailored to your enterprise.</p>
            <a href="#contact"
                class="qt-btn qt-btn-secondary inline-block px-8 py-3 transition-colors duration-150">Let’s Talk</a>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-3xl mx-auto px-6">
            <h3 class="text-2xl font-semibold mb-8 text-center">Get In Touch</h3>
            <form class="space-y-6" action="sendmail.php" method="POST">
                <div class="grid md:grid-cols-2 gap-6">
                    <input type="text" name="name" placeholder="Your Name"
                        class="w-full border border-black px-4 py-3 rounded" required />
                    <input type="email" name="email" placeholder="Email Address"
                        class="w-full border border-black px-4 py-3 rounded" required />
                </div>
                <input type="tel" name="phone" placeholder="Phone Number"
                    class="w-full border border-black px-4 py-3 rounded" required />
                <textarea rows="4" name="message" placeholder="Your Message"
                    class="w-full border border-black px-4 py-3 rounded resize-none" required></textarea>
                <div class="text-center">
                    <button type="submit"
                        class="bg-neutral-900 text-white px-8 py-3 rounded hover:bg-neutral-800 transition">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </section>

    <?php include("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script> AOS.init({ duration: 800, easing: 'ease-out-cubic' }); </script>

    <!-- Filters + Search -->
    <script>
        const pills = document.querySelectorAll('#svc-filters .pill');
        const cards = document.querySelectorAll('.svc-card');
        pills.forEach(p => p.addEventListener('click', () => {
            pills.forEach(x => x.classList.remove('active'));
            p.classList.add('active');
            const cat = p.dataset.cat;
            cards.forEach(c => { c.style.display = (cat === 'all' || c.dataset.cat === cat) ? '' : 'none'; });
            document.getElementById('svc-search').value = '';
        }));

        const q = document.getElementById('svc-search');
        q.addEventListener('input', () => {
            const term = q.value.trim().toLowerCase();
            cards.forEach(c => { c.style.display = c.dataset.title.includes(term) ? '' : 'none'; });
            pills.forEach(x => x.classList.remove('active'));
            pills[0].classList.add('active'); // All
        });
    </script>

    <!-- SERVICE MODAL — Fluent-centered -->
    <div id="svc-sheet-overlay" class="fixed inset-0 z-[70]">
        <!-- Backdrop (acrylic boosted via CSS) -->
        <div class="absolute inset-0 bg-black/50 backdrop-blur-[2px] opacity-0 transition-opacity duration-150 ease-out"
            data-close></div>

        <!-- Dialog -->
        <section id="svc-sheet" role="dialog" aria-modal="true" aria-labelledby="svc-sheet-title"
            aria-describedby="svc-sheet-desc" class="relative my-8 bg-white rounded-[14px] border border-neutral-200 shadow-2xl overflow-hidden
                    opacity-0 scale-[.98] transition-all duration-150 ease-out grid grid-cols-1 md:grid-cols-2">
            <!-- Left: image panel -->
            <div id="svc-left" class="relative hidden md:block bg-neutral-100">
                <img id="svc-sheet-img" decoding="async" alt="" class="absolute inset-0 w-full h-full object-cover" />
                <div
                    class="pointer-events-none absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-black/45 to-transparent">
                </div>
            </div>

            <!-- Right: content column -->
            <div class="flex min-h-0 flex-col">
                <header class="px-6 md:px-8 pt-6">
                    <div class="flex items-start gap-3">
                        <span id="svc-sheet-cat"
                            class="text-xs font-semibold px-2 py-[6px] rounded-full border border-neutral-300 text-neutral-700 bg-neutral-50"></span>
                        <button id="svc-sheet-close" class="ml-auto qt-btn qt-btn-secondary px-3 py-1.5 text-sm"
                            aria-label="Close">Close</button>
                    </div>
                    <h2 id="svc-sheet-title"
                        class="mt-4 text-[26px] md:text-[34px] leading-tight font-semibold tracking-tight"></h2>
                </header>

                <main class="flex-1 min-h-0 overflow-y-auto px-6 md:px-8 pb-6">
                    <article id="svc-sheet-desc" class="mt-4 space-y-4 text-neutral-900"></article>

                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                        <a href="<?= $base ?>/contactus"
                            class="qt-btn qt-btn-primary px-6 py-3 text-base text-center sm:w-auto w-full">Talk to an Expert</a>
                        <a id="svc-sheet-quote" href="#"
                            class="qt-btn qt-btn-secondary px-6 py-3 text-base text-center sm:w-auto w-full">Contact Us</a>
                    </div>
                </main>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // ========= Long copy (valid JS) =========
            const longCopy = {
                // IT Support
                "24-7-help-desk-support": `Al Musaab provides 24/7 help desk support to keep your business running smoothly. Our team is always ready to fix any tech problems, answer questions, and help your staff quickly. We make sure you don't face any downtime, day or night.`,
                "field-services": `Al Musaab offers on-site visits to fix hardware and setup network cables. Our expert technicians come to your office to install equipment and solve physical IT problems as soon as they happen.`,
                "datacenter-operations": `Al Musaab manages your server rooms and data to make sure your business information is always safe and reachable. We monitor your systems daily to prevent any crashes or data loss.`,
                "network-infrastructure-operations": `Al Musaab sets up and manages your office Wi-Fi, routers, and network switches. We make sure you have stable and fast internet across your entire office without any interruptions.`,
                "end-user-computing-infrastructure": `Al Musaab handles all your office devices like laptops, desktops, and mobile phones. We set them up with the right software and rules so your team can work securely.`,
                "greenfield-projects": `Al Musaab handles the full IT setup for new offices. From initial wiring to setting up servers and Wi-Fi, we make sure your new office is ready for work from day one.`,
                "procurement-services": `Al Musaab helps you buy the best IT hardware and software at the right prices. We handle the shopping and delivery so you get the equipment that fits your business needs perfectly.`,
                "staff-augmentation-outsourcing": `Al Musaab provides expert IT staff to help your team with big projects. We give you the extra hands you need to finish work on time without hiring permanent staff.`,

                // Security Services
                "infrastructure-security": `Al Musaab protects your business network from hackers and online threats. We set up strong safety walls (firewalls) and monitor your data to keep everything safe for your team.`,
                "24-hour-monitoring-mitigation": `Al Musaab watches your systems 24 hours a day to stop any cyber attacks immediately. If we see anything strange, we fix it before it can harm your business.`,
                "patch-vulnerability-monitoring": `Al Musaab scans your systems for any weak points and keeps all your software updated. This stops hackers from finding easy ways into your business data.`,
                "securing-segregation-it-ot": `We separate your office devices from your critical business machines to make sure a problem in one area doesn't spread to the other. This keeps your main systems safe.`,
                "certificate-management": `Al Musaab manages your website security certificates to keep your online pages and emails safe. We make sure they never expire, so your customers always trust your site.`,

                // Web & App Services
                "dynamic-web-development": `Al Musaab builds fast and modern websites for your business that work perfectly on phones and computers. We make sure your site is easy to use and helps you get more customers.`,
                "ecommerce-development-management": `Al Musaab builds secure online shops where you can sell your products easily. We handle the payment setup and inventory so you can focus on selling.`,
                "intranet-sharepoint-development-management": `Al Musaab builds simple internal websites for your staff to share files and work together. This makes it easy for your team to communicate and find information.`,
                "web-catalog-development-management": `Al Musaab builds online product catalogs that are easy for customers to browse. We include a smart search feature so people can find exactly what they are looking for.`,
                "chatbot-deployment-training": `Al Musaab sets up auto-chat systems that answer common customer questions instantly. This saves your staff time and gives your customers quick answers 24/7.`,
                "workflow-automation": `Al Musaab automates repetitive office tasks like reporting and approvals. This saves your team hours of work every week and stops manual mistakes.`,

                // Application Security
                "secure-onboarding": `Al Musaab makes sure newly hired staff are set up with the right software and safety rules from their first day. We handle the permissions so they can start working safely.`,
                "single-sign-on-sso": `We set up one-click login for all your office software. This means your staff only needs to remember one password to access everything securely.`,
                "application-monitoring": `Al Musaab watches your business software to make sure it is always fast and safe. We fix any speed issues or threats before they affect your work.`,
                "lifecycle-management": `We manage who has access to your business software from the day they join until the day they leave. This keeps your sensitive company data safe.`,

                // Testing & Auditing
                "penetration-testing": `Al Musaab tests your security by trying to "hack" it like a real attacker would. This helps us find and fix any gaps before real hackers can find them.`,
                "auditing-security-controls": `We check your security rules to make sure they are actually working. We give you a clear report on what is safe and what needs to be improved.`,
                "remediation": `Al Musaab quickly fixes any gaps or weak points found in your security checks. We prioritize the most important areas to keep your business safe immediately.`
            };

            // Merge with any existing map
            window.longCopy = { ...(window.longCopy || {}), ...longCopy };

            // ========= Helpers =========
            const overlay = document.getElementById('svc-sheet-overlay');
            const backdrop = overlay.querySelector('[data-close]');
            const sheet = document.getElementById('svc-sheet');
            const left = document.getElementById('svc-left');
            const imgEl = document.getElementById('svc-sheet-img');
            const titleEl = document.getElementById('svc-sheet-title');
            const catEl = document.getElementById('svc-sheet-cat');
            const descEl = document.getElementById('svc-sheet-desc');
            const quoteEl = document.getElementById('svc-sheet-quote');
            const closeBtn = document.getElementById('svc-sheet-close');

            let isOpen = false;
            let lastFocus = null;
            let hideTimer = null;

            function slugify(s) { return (s || '').toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, ''); }
            function toHTMLBigFirst(txt) {
                const parts = (txt || '').trim().split(/\n\s*\n/).map(p => p.trim()).filter(Boolean);
                if (!parts.length) return '';
                const first = `<p class="text-[18px] md:text-[19px] leading-8 text-neutral-900">${parts[0]}</p>`;
                const rest = parts.slice(1).map(p => `<p class="text-[16px] md:text-[17px] leading-7 text-neutral-800">${p}</p>`).join('');
                return first + rest;
            }
            function getCopy({ title, slug, desc }) {
                const key = slug || slugify(title || '');
                const long = (window.longCopy && window.longCopy[key]) || '';
                if (long.trim()) return long;
                return (desc || '').trim();
            }

            // ========= Animations + visibility =========
            function show() {
                overlay.classList.add('is-open');  // visibility on

                // restart animations cleanly
                backdrop.classList.remove('anim-backdrop');
                sheet.classList.remove('anim-sheet-in');
                titleEl.classList.remove('anim-rise');
                descEl.classList.remove('anim-stagger');

                // force reflow so animations replay
                void overlay.offsetWidth;

                // apply animations
                backdrop.classList.add('anim-backdrop');
                sheet.classList.add('anim-sheet-in');
                titleEl.classList.add('anim-rise');
                descEl.classList.add('anim-stagger');

                document.documentElement.classList.add('overflow-hidden');
            }
            function hide() {
                backdrop.classList.add('opacity-0');
                sheet.classList.add('opacity-0', 'scale-[.98]');
                hideTimer = setTimeout(() => {
                    overlay.classList.remove('is-open'); // visibility off
                    document.documentElement.classList.remove('overflow-hidden');
                    if (lastFocus) lastFocus.focus({ preventScroll: true });
                }, 150);
            }

            // ========= Open/Close =========
            function openSheet({ title, desc, img, cat, slug }) {
                if (isOpen) return;
                if (hideTimer) clearTimeout(hideTimer);
                isOpen = true;

                lastFocus = document.activeElement;

                const key = slug || slugify(title);
                const copy = getCopy({ title, slug: key, desc });

                titleEl.textContent = title || '';
                catEl.textContent = cat || '';
                descEl.innerHTML = toHTMLBigFirst(copy);
                quoteEl && (quoteEl.href = "<?= $base ?>/contactus?s=" + encodeURIComponent(key));

                if (img) {
                    imgEl.src = img; imgEl.alt = title || 'Service image';
                    imgEl.style.objectFit = (key === '24-7-help-desk-support') ? 'cover' : 'fill';
                    left.classList.remove('hidden');
                    left.classList.remove('anim-hero');
                    void left.offsetWidth;
                    left.classList.add('anim-hero');
                } else {
                    imgEl.removeAttribute('src');
                    left.classList.add('hidden');
                    left.classList.remove('anim-hero');
                }

                backdrop.classList.add('opacity-0');
                sheet.classList.add('opacity-0', 'scale-[.98]');

                show();

                // Accessibility: move screen-reader focus to the title on open
                titleEl.setAttribute('tabindex', '-1');
                titleEl.focus({ preventScroll: true });
            }

            function closeSheet() {
                if (!isOpen) return;
                isOpen = false;
                hide();
            }

            // ========= Listeners =========
            document.addEventListener('click', (e) => {
                const btn = e.target.closest('.svc-open');
                if (btn) {
                    e.preventDefault();
                    openSheet({
                        title: btn.dataset.title,
                        desc: btn.dataset.desc,
                        img: btn.dataset.img,
                        cat: btn.dataset.cat,
                        slug: btn.dataset.slug
                    });
                    return;
                }
                if (e.target && e.target.hasAttribute('data-close')) closeSheet();
            });

            closeBtn.addEventListener('click', (e) => { e.preventDefault(); closeSheet(); });
            document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && isOpen) closeSheet(); });

            // Focus trap
            overlay.addEventListener('keydown', (e) => {
                if (!isOpen || e.key !== 'Tab') return;
                const f = sheet.querySelectorAll('a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])');
                if (!f.length) return;
                const first = f[0], last = f[f.length - 1];
                if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
                else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
            });

            // Optional API
            window.AlMusaabModal = { open: openSheet, close: closeSheet };
        });
    </script>
</body>

</html>