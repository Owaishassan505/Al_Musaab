<?php $base = "" ?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Primary SEO -->
  <title>Knowledge Base | Al Musaab - Expert Guides & Resources</title>
  <meta name="description"
    content="Browse Al Musaab's comprehensive knowledge base. Expert guides on warehouse labeling, network infrastructure, cybersecurity, and IT best practices for Canadian businesses." />
  <link rel="canonical" href="https://almusaab.com/knowledgebase/" />
  <meta name="robots" content="index,follow,max-image-preview:large" />

  <!-- Open Graph -->
  <meta property="og:title" content="Knowledge Base | Al Musaab" />
  <meta property="og:description"
    content="Expert guides and resources for warehouse operations, IT infrastructure, and business technology." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://almusaab.com/knowledgebase/" />
  <link rel="icon" href="<?= $base . '/assets/favicon.svg' ?>" sizes="any" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Knowledge Base | Al Musaab" />
  <meta name="twitter:description"
    content="Expert guides and resources for warehouse operations, IT infrastructure, and business technology." />

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          keyframes: {
            fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } },
            slideUp: { "0%": { opacity: 0, transform: "translateY(20px)" }, "100%": { opacity: 1, transform: "translateY(0)" } },
          },
          animation: {
            fadeIn: "fadeIn 0.6s ease-out forwards",
            slideUp: "slideUp 0.6s ease-out forwards",
          },
        },
      },
    };
  </script>
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-57GG72GW');</script>

  <style>
    .kb-card {
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .kb-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 24px rgba(249, 115, 22, 0.15);
    }

    .category-card {
      transition: all 0.3s ease;
    }

    .category-card:hover {
      transform: translateY(-2px);
    }
  </style>
</head>

<body class="bg-gray-50 text-neutral-900 font-sans">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GG72GW" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>

  <?php include("navbar.php"); ?>

  <!-- Hero Section -->
  <section class="bg-gradient-to-br from-slate-900 via-slate-800 to-neutral-900 py-20 md:py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <div class="opacity-0 animate-fadeIn">
        <div
          class="inline-block mb-4 px-4 py-2 rounded-full bg-orange-500/20 border border-orange-500/50 backdrop-blur">
          <span class="text-orange-300 text-sm font-semibold">Knowledge Base</span>
        </div>
        <h1 class="text-5xl md:text-6xl font-bold tracking-tight text-white leading-tight mb-6">
          Expert Guides & <span
            class="bg-gradient-to-r from-orange-400 to-orange-500 bg-clip-text text-transparent">Resources</span>
        </h1>
        <p class="text-xl text-gray-300 leading-relaxed mb-8 max-w-3xl mx-auto">
          Comprehensive guides, best practices, and technical documentation to help you make informed decisions about
          your IT infrastructure and operations.
        </p>

        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto">
          <div class="relative">
            <input type="text" id="searchInput" placeholder="Search articles..."
              class="w-full px-6 py-4 pl-14 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 text-gray-900 text-lg">
            <i data-lucide="search" class="w-6 h-6 text-gray-400 absolute left-4 top-1/2 -translate-y-1/2"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Categories Section -->
  <section class="py-16 bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-12 opacity-0 animate-slideUp">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Browse by Category</h2>
        <p class="text-lg text-gray-600">Find articles organized by topic</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="#warehousing"
          class="category-card bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-xl border border-orange-200 hover:border-orange-400 opacity-0 animate-slideUp"
          style="animation-delay: 0.1s;">
          <div class="h-12 w-12 rounded-lg bg-orange-500 flex items-center justify-center mb-4">
            <i data-lucide="warehouse" class="w-6 h-6 text-white"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Warehousing</h3>
          <p class="text-sm text-gray-600 mb-3">Labels, RFID, mobile devices, and warehouse operations</p>
          <span class="text-orange-600 font-semibold text-sm">2 articles →</span>
        </a>

        <a href="#networking"
          class="category-card bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl border border-blue-200 hover:border-blue-400 opacity-0 animate-slideUp"
          style="animation-delay: 0.2s;">
          <div class="h-12 w-12 rounded-lg bg-blue-500 flex items-center justify-center mb-4">
            <i data-lucide="network" class="w-6 h-6 text-white"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Networking</h3>
          <p class="text-sm text-gray-600 mb-3">Infrastructure, cabling, and network design</p>
          <span class="text-blue-600 font-semibold text-sm">2 articles →</span>
        </a>

        <a href="#cybersecurity"
          class="category-card bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-xl border border-red-200 hover:border-red-400 opacity-0 animate-slideUp"
          style="animation-delay: 0.3s;">
          <div class="h-12 w-12 rounded-lg bg-red-500 flex items-center justify-center mb-4">
            <i data-lucide="shield" class="w-6 h-6 text-white"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Cybersecurity</h3>
          <p class="text-sm text-gray-600 mb-3">Security best practices and threat prevention</p>
          <span class="text-red-600 font-semibold text-sm">1 article →</span>
        </a>

        <a href="#cloud"
          class="category-card bg-gradient-to-br from-purple-50 to-purple-100 p-6 rounded-xl border border-purple-200 hover:border-purple-400 opacity-0 animate-slideUp"
          style="animation-delay: 0.4s;">
          <div class="h-12 w-12 rounded-lg bg-purple-500 flex items-center justify-center mb-4">
            <i data-lucide="cloud" class="w-6 h-6 text-white"></i>
          </div>
          <h3 class="text-xl font-bold text-gray-900 mb-2">Cloud & Datacenter</h3>
          <p class="text-sm text-gray-600 mb-3">Hybrid cloud, edge computing, and infrastructure</p>
          <span class="text-purple-600 font-semibold text-sm">Coming soon →</span>
        </a>
      </div>
    </div>
  </section>

  <!-- Featured Articles -->
  <section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-center justify-between mb-12 opacity-0 animate-slideUp">
        <div>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Featured Articles</h2>
          <p class="text-lg text-gray-600">Most popular and recently updated guides</p>
        </div>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Article Card: Firewall (New) -->
        <article class="kb-card bg-white rounded-xl border border-gray-200 overflow-hidden opacity-0 animate-slideUp"
          style="animation-delay: 0.05s;">
          <div class="h-48 bg-gradient-to-br from-red-500 to-red-600 flex items-center justify-center">
            <i data-lucide="shield" class="w-16 h-16 text-white opacity-50"></i>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-2 mb-3">
              <span class="px-2 py-1 bg-red-100 text-red-700 text-xs font-semibold rounded">Cybersecurity</span>
              <span class="text-gray-400 text-xs">•</span>
              <span class="text-gray-600 text-xs">10 min read</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-red-600 transition">
              <a href="<?= $base ?>/why-every-business-needs-a-firewall/">Why Every Business Needs a Firewall</a>
            </h3>
            <p class="text-gray-600 mb-4 line-clamp-3">
              Learn why a properly configured firewall is the architectural backbone of your cybersecurity posture and how it blocks threats.
            </p>
            <div class="flex items-center justify-between">
              <a href="<?= $base ?>/why-every-business-needs-a-firewall/"
                class="text-red-600 font-semibold text-sm hover:text-red-700 inline-flex items-center gap-1">
                Read article
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
              </a>
              <span class="text-gray-400 text-xs">Updated Jan 2026</span>
            </div>
          </div>
        </article>

        <!-- Article Card 1 -->
        <article class="kb-card bg-white rounded-xl border border-gray-200 overflow-hidden opacity-0 animate-slideUp"
          style="animation-delay: 0.1s;">
          <div class="h-48 bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center">
            <i data-lucide="tag" class="w-16 h-16 text-white opacity-50"></i>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-2 mb-3">
              <span class="px-2 py-1 bg-orange-100 text-orange-700 text-xs font-semibold rounded">Warehousing</span>
              <span class="text-gray-400 text-xs">•</span>
              <span class="text-gray-600 text-xs">15 min read</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-orange-600 transition">
              <a href="<?= $base ?>/label-selection-criteria/">Criteria for Selecting the Right Labels</a>
            </h3>
            <p class="text-gray-600 mb-4 line-clamp-3">
              Small details with massive operational impact. Learn how environment, materials, adhesives, and printing
              methods affect label performance.
            </p>
            <div class="flex items-center justify-between">
              <a href="<?= $base ?>/label-selection-criteria/"
                class="text-orange-600 font-semibold text-sm hover:text-orange-700 inline-flex items-center gap-1">
                Read article
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
              </a>
              <span class="text-gray-400 text-xs">Updated Dec 2025</span>
            </div>
          </div>
        </article>

        <!-- Article Card 2 -->
        <article class="kb-card bg-white rounded-xl border border-gray-200 overflow-hidden opacity-0 animate-slideUp"
          style="animation-delay: 0.2s;">
          <div class="h-48 bg-gradient-to-br from-purple-500 to-purple-600 flex items-center justify-center">
            <i data-lucide="radio" class="w-16 h-16 text-white opacity-50"></i>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-2 mb-3">

              <span class="px-2 py-1 bg-purple-100 text-purple-700 text-xs font-semibold rounded">Warehousing</span>
              <span class="text-gray-400 text-xs">•</span>
              <span class="text-gray-600 text-xs">12 min read</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-purple-600 transition">
              <a href="<?= $base ?>/rfid-vs-barcode/">RFID vs Barcode: Choosing the Right Technology</a>
            </h3>
            <p class="text-gray-600 mb-4 line-clamp-3">
              Compare RFID and barcode technologies for warehouse inventory management. Learn about cost, accuracy,
              real-time tracking capabilities, and implementation considerations.
            </p>
            <div class="flex items-center justify-between">
              <a href="<?= $base ?>/rfid-vs-barcode/"
                class="text-purple-600 font-semibold text-sm hover:text-purple-700 inline-flex items-center gap-1">
                Read article
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
              </a>
              <span class="text-gray-400 text-xs">Updated Jan 2026</span>
            </div>
          </div>
        </article>

        <!-- Article Card 3 -->
        <article class="kb-card bg-white rounded-xl border border-gray-200 overflow-hidden opacity-0 animate-slideUp"
          style="animation-delay: 0.3s;">
          <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
            <i data-lucide="network" class="w-16 h-16 text-white opacity-50"></i>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-2 mb-3">
              <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded">Networking</span>
              <span class="text-gray-400 text-xs">•</span>
              <span class="text-gray-600 text-xs">18 min read</span>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-blue-600 transition">
              <a href="<?= $base ?>/wireless-infrastructure-large-deployments/">Implementing Wireless Infrastructure for
                Large Deployments</a>
            </h3>
            <p class="text-gray-600 mb-4 line-clamp-3">
              Precision engineering for complex environments. Learn how to design wireless networks for warehouses,
              campuses, and multi-floor facilities.
            </p>
            <div class="flex items-center justify-between">
              <a href="<?= $base ?>/wireless-infrastructure-large-deployments/"
                class="text-blue-600 font-semibold text-sm hover:text-blue-700 inline-flex items-center gap-1">
                Read article
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
              </a>
              <span class="text-gray-400 text-xs">Updated Dec 2025</span>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Warehousing Category -->
  <section id="warehousing" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-center gap-3 mb-8 opacity-0 animate-slideUp">
        <div class="h-12 w-12 rounded-lg bg-orange-500 flex items-center justify-center">
          <i data-lucide="warehouse" class="w-6 h-6 text-white"></i>
        </div>
        <div>
          <h2 class="text-3xl font-bold text-gray-900">Warehousing</h2>
          <p class="text-gray-600">Labels, RFID, mobile devices, and warehouse operations</p>
        </div>
      </div>

      <div class="space-y-4">
        <a href="<?= $base ?>/label-selection-criteria/"
          class="kb-card block bg-white p-6 rounded-xl border border-gray-200 hover:border-orange-500 hover:shadow-lg opacity-0 animate-slideUp transition"
          style="animation-delay: 0.1s;">
          <div class="flex items-start justify-between gap-4">
            <div class="flex-1">
              <div class="flex items-center gap-2 mb-2">
                <span class="px-2 py-1 bg-orange-100 text-orange-700 text-xs font-semibold rounded">Featured</span>
                <span class="text-gray-400 text-xs">•</span>
                <span class="text-gray-600 text-xs">15 min read</span>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-orange-600 transition">
                Criteria for Selecting the Right Labels
              </h3>
              <p class="text-gray-600 mb-3">
                A detailed guide explaining how environment, materials, adhesives, and printing methods affect label
                performance in warehouses, cold storage, manufacturing, and retail.
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Labels</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Materials</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Adhesives</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Printing</span>
              </div>
            </div>
            <i data-lucide="arrow-right" class="w-5 h-5 text-gray-400 flex-shrink-0 mt-1"></i>
          </div>
        </a>

        <a href="<?= $base ?>/rfid-vs-barcode/"
          class="kb-card block bg-white p-6 rounded-xl border border-gray-200 hover:border-orange-500 hover:shadow-lg opacity-0 animate-slideUp transition"
          style="animation-delay: 0.2s;">
          <div class="flex items-start justify-between gap-4">
            <div class="flex-1">
              <div class="flex items-center gap-2 mb-2">
                <span class="px-2 py-1 bg-orange-100 text-orange-700 text-xs font-semibold rounded">Featured</span>
                <span class="text-gray-600 text-xs">12 min read</span>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-orange-600 transition">
                RFID vs Barcode: Choosing the Right Technology
              </h3>
              <p class="text-gray-500 mb-3">
                Compare RFID and barcode technologies for warehouse inventory management, including cost, accuracy, and
                implementation considerations.
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">RFID</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Barcode</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Inventory</span>
              </div>
            </div>
            <i data-lucide="arrow-right" class="w-5 h-5 text-gray-400 flex-shrink-0 mt-1"></i>
          </div>
        </a>

        <!-- <div class="kb-card block bg-gray-50 p-6 rounded-xl border border-gray-200 opacity-50 opacity-0 animate-slideUp"
          style="animation-delay: 0.3s;">
          <div class="flex items-start justify-between gap-4">
            <div class="flex-1">
              <div class="flex items-center gap-2 mb-2">
                <span class="text-gray-600 text-xs">12 min read</span>
              </div>
              <h3 class="text-xl font-bold text-gray-700 mb-2">
                Mobile Device Management for Warehouse Operations
              </h3>
              <p class="text-gray-500 mb-3">
                Best practices for deploying, managing, and securing mobile devices in warehouse environments including
                MDM solutions and security policies.
              </p>
              <span class="text-gray-400 text-sm">Coming soon</span>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <!-- Networking Category -->
  <section id="networking" class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-center gap-3 mb-8 opacity-0 animate-slideUp">
        <div class="h-12 w-12 rounded-lg bg-blue-500 flex items-center justify-center">
          <i data-lucide="network" class="w-6 h-6 text-white"></i>
        </div>
        <div>
          <h2 class="text-3xl font-bold text-gray-900">Networking</h2>
          <p class="text-gray-600">Infrastructure, cabling, and network design</p>
        </div>
      </div>

      <div class="space-y-4">
        <a href="<?= $base ?>/wireless-survey-guide/"
          class="kb-card block bg-white p-6 rounded-xl border border-gray-200 hover:border-blue-500 opacity-0 animate-slideUp"
          style="animation-delay: 0.1s;">
          <div class="flex items-start justify-between gap-4">
            <div class="flex-1">
              <div class="flex items-center gap-2 mb-2">
                <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded">Featured</span>
                <span class="text-gray-400 text-xs">•</span>
                <span class="text-gray-600 text-xs">12 min read</span>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-blue-600 transition">
                Why You Need a Wireless Survey
              </h3>
              <p class="text-gray-600 mb-3">
                Predictable performance comes from data, not guessing. Learn how wireless surveys reveal dead zones,
                interference, and capacity issues before they disrupt operations.
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">WiFi</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Survey</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">RF Design</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Planning</span>
              </div>
            </div>
            <i data-lucide="arrow-right" class="w-5 h-5 text-gray-400 flex-shrink-0 mt-1"></i>
          </div>
        </a>

        <a href="<?= $base ?>/wireless-infrastructure-large-deployments/"
          class="kb-card block bg-white p-6 rounded-xl border border-gray-200 hover:border-blue-500 opacity-0 animate-slideUp"
          style="animation-delay: 0.2s;">
          <div class="flex items-start justify-between gap-4">
            <div class="flex-1">
              <div class="flex items-center gap-2 mb-2">
                <span class="text-gray-600 text-xs">18 min read</span>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-blue-600 transition">
                Implementing Wireless Infrastructure for Large Deployments
              </h3>
              <p class="text-gray-600 mb-3">
                Precision engineering for complex environments. Learn howAl Musaabbuilds wireless infrastructures that
                remain stable, secure, and high-performing across warehouses, campuses, and multi-floor facilities.
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Enterprise WiFi</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Access Points</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Roaming</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Security</span>
              </div>
            </div>
            <i data-lucide="arrow-right" class="w-5 h-5 text-gray-400 flex-shrink-0 mt-1"></i>
          </div>
        </a>
      </div>
    </div>
  </section>


  <!-- Cybersecurity Category -->
  <section id="cybersecurity" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-center gap-3 mb-8 opacity-0 animate-slideUp">
        <div class="h-12 w-12 rounded-lg bg-red-500 flex items-center justify-center">
          <i data-lucide="shield" class="w-6 h-6 text-white"></i>
        </div>
        <div>
          <h2 class="text-3xl font-bold text-gray-900">Cybersecurity</h2>
          <p class="text-gray-600">Security best practices and threat prevention</p>
        </div>
      </div>

      <div class="space-y-4">
        <a href="<?= $base ?>/why-every-business-needs-a-firewall/"
          class="kb-card block bg-white p-6 rounded-xl border border-gray-200 hover:border-red-500 hover:shadow-lg opacity-0 animate-slideUp transition"
          style="animation-delay: 0.1s;">
          <div class="flex items-start justify-between gap-4">
            <div class="flex-1">
              <div class="flex items-center gap-2 mb-2">
                <span class="px-2 py-1 bg-red-100 text-red-700 text-xs font-semibold rounded">Featured</span>
                <span class="text-gray-400 text-xs">•</span>
                <span class="text-gray-600 text-xs">10 min read</span>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-2 hover:text-red-600 transition">
                Why Every Business Needs a Firewall
              </h3>
              <p class="text-gray-600 mb-3">
                A complete guide explaining why every business needs a properly configured firewall. Learn how firewalls block threats, prevent lateral movement, and keep networks secure.
              </p>
              <div class="flex flex-wrap gap-2">
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Firewall</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Network Security</span>
                <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded">Protection</span>
              </div>
            </div>
            <i data-lucide="arrow-right" class="w-5 h-5 text-gray-400 flex-shrink-0 mt-1"></i>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-16 bg-gradient-to-r from-orange-50 to-blue-50 border-t border-gray-200">
    <div class="max-w-4xl mx-auto px-6 text-center opacity-0 animate-slideUp">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Can't Find What You're Looking For?
      </h2>
      <p class="text-xl text-gray-700 mb-8">
        Our team is here to help. Contact us for personalized guidance and expert consultation.
      </p>
      <div class="flex flex-wrap gap-4 justify-center">
        <a href="<?= $base ?>/contactus/"
          class="inline-flex items-center gap-2 bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold shadow-lg transition">
          Contact Our Team
          <i data-lucide="arrow-right" class="w-5 h-5"></i>
        </a>
        <a href="<?= $base ?>/services/"
          class="inline-flex items-center gap-2 border-2 border-gray-400 text-gray-700 px-8 py-4 rounded-lg font-semibold hover:bg-white transition">
          View Our Services
        </a>
      </div>
    </div>
  </section>

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

  <!-- Newsletter Section -->
  <!-- <section class="py-16 bg-white border-t border-gray-200">
    <div class="max-w-2xl mx-auto px-6 text-center opacity-0 animate-slideUp">
      <div class="h-16 w-16 rounded-full bg-orange-100 flex items-center justify-center mx-auto mb-6">
        <i data-lucide="mail" class="w-8 h-8 text-orange-600"></i>
      </div>
      <h2 class="text-3xl font-bold text-gray-900 mb-4">Stay Updated</h2>
      <p class="text-lg text-gray-600 mb-8">
        Get notified when we publish new articles and guides to our knowledge base.
      </p>
      <form class="flex gap-3 max-w-md mx-auto">
        <input type="email" placeholder="Enter your email"
          class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
        <button type="submit"
          class="px-6 py-3 bg-orange-500 hover:bg-orange-600 text-white font-semibold rounded-lg transition">
          Subscribe
        </button>
      </form>
    </div>
  </section> -->

  <?php include("footer.php"); ?>

  <script>
    // Initialize Lucide icons
    lucide.createIcons();

    // Search functionality
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', (e) => {
      const query = e.target.value.toLowerCase();
      // Add search functionality here when you have more articles
      console.log('Searching for:', query);
    });
  </script>
</body>

</html>