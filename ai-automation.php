<?php $base = ""; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>AI Agents for Workflow Automation | Al Musaab</title>
    <meta name="description"
        content="Transform your business with custom AI Agents that automate workflows across Healthcare, Supply Chain, Law Firms, Consultancies, and Engineering. Al Musaab delivers intelligent automation that saves time and reduces costs." />
    <meta name="robots" content="index,follow,max-image-preview:large" />

    <link rel="canonical" href="https://almusaab.com/ai-agents/" />
    <link rel="alternate" hreflang="en-ca" href="https://almusaab.com/ai-agents/" />
    <meta name="theme-color" content="#0f172a" />
    <link rel="icon" href="<?= $base . '/assets/favicon.svg' ?>" sizes="any" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="AI Agents for Workflow Automation | Al Musaab" />
    <meta property="og:url" content="https://almusaab.com/ai-agents/" />
    <meta property="og:site_name" content="Al Musaab" />
    <meta property="og:locale" content="en_CA" />
    <meta property="og:image" content="<?= $base . '/assets/images/Al-Musaab-logo1.png' ?>" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="AI Agents for Workflow Automation | Al Musaab" />

    <script type="application/ld+json">
    {
        "@context":"https://schema.org",
        "@type":"Service",
        "serviceType":["AI Agent Development", "Workflow Automation"],
        "provider":{"@id":"https://almusaab.com/#org"},
        "areaServed":"CA"
    }
    </script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        fadeInUp: { "0%": { opacity: 0, transform: "translateY(16px)" }, "100%": { opacity: 1, transform: "translateY(0)" } },
                        floatY: { "0%,100%": { transform: "translateY(0)" }, "50%": { transform: "translateY(-12px)" } },
                        pulse1: { "0%,100%": { opacity: 1, r: 60 }, "50%": { opacity: 0.5, r: 50 } },
                        pulse2: { "0%,100%": { opacity: 1, r: 50 }, "50%": { opacity: 0.4, r: 40 } },
                        slideRight: { "0%": { transform: "translateX(-20px)", opacity: 0 }, "100%": { transform: "translateX(0)", opacity: 1 } },
                        slideDown: { "0%": { transform: "translateY(-20px)", opacity: 0 }, "100%": { transform: "translateY(0)", opacity: 1 } },
                        rotate: { "0%": { transform: "rotate(0deg)" }, "100%": { transform: "rotate(360deg)" } }
                    },
                    animation: {
                        fadeInUp: "fadeInUp .7s ease-out forwards",
                        floatY: "floatY 6s ease-in-out infinite",
                        pulse1: "pulse1 3s ease-in-out infinite",
                        pulse2: "pulse2 4s ease-in-out infinite",
                        slideRight: "slideRight 0.8s ease-out forwards",
                        slideDown: "slideDown 0.8s ease-out forwards",
                        rotate: "rotate 20s linear infinite"
                    }
                }
            }
        }
    </script>

    <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                    'gtm.start': new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-57GG72GW');
    </script>

</head>

<body class="bg-white text-neutral-900 font-sans">
    <?php include("navbar.php"); ?>

    <!-- HERO: AI Agents - Animated Workflow Visualization -->
    <section class="relative overflow-hidden bg-gradient-to-br from-white via-blue-50/30 to-white py-20 md:py-32">
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GG72GW" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>

        <!-- Animated background orbs -->
        <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-blue-400/5 rounded-full blur-3xl animate-floatY">
        </div>
        <div
            class="absolute -bottom-20 -left-20 w-[300px] h-[300px] bg-orange-400/5 rounded-full blur-3xl animate-pulse">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left: Text Content -->
                <div class="opacity-0 animate-fadeInUp">
                    <span
                        class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase mb-4">
                        <span class="inline-block h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span>
                        Workflow Automation
                    </span>

                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold leading-tight text-neutral-900 mb-6">
                        Let AI Work <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-blue-600">While You
                            Sleep</span>
                    </h1>

                    <p class="text-lg text-neutral-600 mb-6">
                        AI Agents don't get tired. They don't make mistakes. They don't take vacations. They handle the
                        workflows that consume your team's time and drain your budget—automatically, 24/7.
                    </p>

                    <div class="space-y-3 mb-8">
                        <div class="flex items-start gap-3">
                            <svg class="h-6 w-6 text-orange-600 flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span class="text-neutral-700"><strong>Instant Response:</strong> Detect issues and act in
                                seconds, not hours</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="h-6 w-6 text-blue-600 flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span class="text-neutral-700"><strong>100% Consistency:</strong> Zero human error. Same
                                quality every single time.</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="h-6 w-6 text-orange-600 flex-shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span class="text-neutral-700"><strong>Infinite Scale:</strong> Handle 10x more volume
                                without hiring 10x more people.</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="<?= $base ?? '' ?>/contactus"
                            class="inline-flex items-center justify-center gap-2 bg-orange-600 text-white px-6 py-3.5 rounded-lg font-semibold hover:bg-orange-700 transition">
                            Start Your Agent Today
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13 5l7 7-7 7-1.5-1.5L16 13H4v-2h12l-4.5-4.5L13 5z" />
                            </svg>
                        </a>
                        <a href="#impact"
                            class="inline-flex items-center justify-center gap-2 border-2 border-neutral-300 text-neutral-700 px-6 py-3.5 rounded-lg font-semibold hover:border-orange-300 hover:bg-orange-50 transition">
                            Learn More
                        </a>
                    </div>
                </div>

                <!-- Right: Animated Workflow Visualization -->
                <div class="relative h-[450px] flex items-center justify-center">
                    <!-- Workflow visualization SVG -->
                    <svg class="w-full h-full max-w-sm" viewBox="0 0 300 400" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#f97316;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#fb923c;stop-opacity:1" />
                            </linearGradient>
                            <linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#2563eb;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:1" />
                            </linearGradient>
                        </defs>

                        <!-- Input node -->
                        <g class="animate-slideDown" style="animation-delay: 0.2s">
                            <rect x="50" y="20" width="200" height="50" rx="8" fill="url(#grad1)" />
                            <text x="150" y="52" font-size="14" font-weight="bold" text-anchor="middle" fill="white">📥
                                Event Detected</text>
                        </g>

                        <!-- Arrow 1 -->
                        <line x1="150" y1="70" x2="150" y2="100" stroke="#cbd5e1" stroke-width="2" />
                        <polygon points="150,100 145,90 155,90" fill="#cbd5e1" />

                        <!-- Processing node -->
                        <g class="animate-slideDown" style="animation-delay: 0.4s">
                            <rect x="50" y="100" width="200" height="50" rx="8" fill="url(#grad2)" />
                            <text x="150" y="132" font-size="14" font-weight="bold" text-anchor="middle" fill="white">⚙️
                                AI Analysis</text>
                        </g>

                        <!-- Arrow 2 -->
                        <line x1="150" y1="150" x2="150" y2="180" stroke="#cbd5e1" stroke-width="2" />
                        <polygon points="150,180 145,170 155,170" fill="#cbd5e1" />

                        <!-- Decision node -->
                        <g class="animate-slideDown" style="animation-delay: 0.6s">
                            <rect x="50" y="180" width="200" height="50" rx="8" fill="url(#grad1)" />
                            <text x="150" y="212" font-size="14" font-weight="bold" text-anchor="middle" fill="white">🧠
                                Smart Decision</text>
                        </g>

                        <!-- Arrow 3 -->
                        <line x1="150" y1="230" x2="150" y2="260" stroke="#cbd5e1" stroke-width="2" />
                        <polygon points="150,260 145,250 155,250" fill="#cbd5e1" />

                        <!-- Action node -->
                        <g class="animate-slideDown" style="animation-delay: 0.8s">
                            <rect x="50" y="260" width="200" height="50" rx="8" fill="url(#grad2)" />
                            <text x="150" y="292" font-size="14" font-weight="bold" text-anchor="middle" fill="white">✅
                                Action Taken</text>
                        </g>

                        <!-- Arrow 4 -->
                        <line x1="150" y1="310" x2="150" y2="340" stroke="#cbd5e1" stroke-width="2" />
                        <polygon points="150,340 145,330 155,330" fill="#cbd5e1" />

                        <!-- Result node -->
                        <g class="animate-slideDown" style="animation-delay: 1s">
                            <rect x="50" y="340" width="200" height="50" rx="8" fill="url(#grad1)" />
                            <text x="150" y="372" font-size="14" font-weight="bold" text-anchor="middle" fill="white">📊
                                Problem Solved</text>
                        </g>

                        <!-- Timing annotation -->
                        <g class="animate-slideRight" style="animation-delay: 1.2s">
                            <rect x="250" y="180" width="48" height="50" rx="6" fill="#fef3c7" />
                            <text x="274" y="200" font-size="13" font-weight="bold" text-anchor="middle"
                                fill="#b45309">~2 sec</text>
                            <text x="274" y="220" font-size="10" text-anchor="middle" fill="#b45309">Total</text>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- IMPORTANCE: Why AI Agents Matter Now -->
    <section id="impact" class="relative bg-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-16">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase mb-4">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span> The Urgency
                </span>
                <h2 class="text-3xl md:text-5xl font-bold text-neutral-900 mb-6">Why Your Business Can't Wait</h2>
                <p class="text-lg text-neutral-600">
                    In 2026, automation isn't a luxury—it's survival. Your competitors are already deploying AI agents.
                    Every day you wait costs you productivity, revenue, and market share.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="rounded-xl border border-slate-200 bg-gradient-to-br from-orange-50 to-white p-8">
                    <div class="text-4xl mb-4">⏱️</div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-3">Manual Work is Killing Productivity</h3>
                    <p class="text-neutral-600">
                        Your team spends <strong>30-40% of their day</strong> on repetitive, manual tasks. That's 2-3
                        hours per person, every day. Multiplied across your organization, that's thousands of lost hours
                        annually—and lost revenue.
                    </p>
                </div>

                <div class="rounded-xl border border-slate-200 bg-gradient-to-br from-blue-50 to-white p-8">
                    <div class="text-4xl mb-4">💰</div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-3">Errors Are Expensive</h3>
                    <p class="text-neutral-600">
                        One missed deadline, forgotten follow-up, or data entry error can cascade into customer
                        complaints, lost contracts, compliance fines, or operational failures. Each error costs money
                        and trust.
                    </p>
                </div>

                <div class="rounded-xl border border-slate-200 bg-gradient-to-br from-amber-50 to-white p-8">
                    <div class="text-4xl mb-4">👥</div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-3">You Can't Scale Hiring</h3>
                    <p class="text-neutral-600">
                        Hiring more people to handle volume increases is slow, expensive, and risky. Benefits, payroll,
                        training, turnover—it never keeps pace with demand. Agents scale instantly.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- IMPACT: The Business Transformation -->
    <section class="relative bg-gradient-to-br from-slate-50 to-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900">The Real Impact of AI Agents</h2>
                <p class="mt-4 text-lg text-neutral-600">See how organizations like yours transform when automation
                    takes over the repetitive work.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-neutral-900 mb-6">Operational Impact</h3>
                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 text-orange-600 font-bold text-lg">↓</div>
                            <div>
                                <h4 class="font-bold text-neutral-900">Response Time: 96% Faster</h4>
                                <p class="text-sm text-neutral-600 mt-1">From hours to seconds. Issues get resolved
                                    before customers even notice them.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 text-blue-600 font-bold text-lg">↑</div>
                            <div>
                                <h4 class="font-bold text-neutral-900">Consistency: 100% Adherence</h4>
                                <p class="text-sm text-neutral-600 mt-1">AI agents never have a bad day. Same process,
                                    same quality, every single time.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 text-orange-600 font-bold text-lg">↓</div>
                            <div>
                                <h4 class="font-bold text-neutral-900">Error Rate: 99.2% Lower</h4>
                                <p class="text-sm text-neutral-600 mt-1">Machines don't forget, don't skip steps, don't
                                    get distracted. Errors nearly disappear.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 text-blue-600 font-bold text-lg">↑</div>
                            <div>
                                <h4 class="font-bold text-neutral-900">Throughput: 5-10x Volume</h4>
                                <p class="text-sm text-neutral-600 mt-1">Same team, same budget, massively more work
                                    completed. No hiring required.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl font-bold text-neutral-900 mb-6">Financial Impact</h3>
                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 text-orange-600 font-bold text-lg">💵</div>
                            <div>
                                <h4 class="font-bold text-neutral-900">Cost Savings: 40-60% per Process</h4>
                                <p class="text-sm text-neutral-600 mt-1">Eliminate manual labor costs. Reduce errors
                                    that cost money. One agent replaces 2-3 FTEs.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 text-blue-600 font-bold text-lg">📈</div>
                            <div>
                                <h4 class="font-bold text-neutral-900">Revenue Growth: 15-30% Increase</h4>
                                <p class="text-sm text-neutral-600 mt-1">Better customer experience = more sales. Faster
                                    responses = more conversions. Scale without constraints.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 text-orange-600 font-bold text-lg">🎯</div>
                            <div>
                                <h4 class="font-bold text-neutral-900">ROI: 3-6 Months</h4>
                                <p class="text-sm text-neutral-600 mt-1">Most clients recoup their investment in their
                                    first agent within a quarter. Ongoing returns compound.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="flex-shrink-0 text-blue-600 font-bold text-lg">💼</div>
                            <div>
                                <h4 class="font-bold text-neutral-900">Margin Expansion: +8-15%</h4>
                                <p class="text-sm text-neutral-600 mt-1">Cut operating costs while improving quality.
                                    Your profit margin grows faster than revenue.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BENEFITS: The People Transformation -->
    <section class="relative bg-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900">Your Team Gets Their Life Back</h2>
                <p class="mt-4 text-lg text-neutral-600">AI Agents handle the busywork. Your people focus on what they
                    do best: thinking, innovating, and building relationships.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="rounded-2xl bg-gradient-to-br from-orange-50 to-white border border-orange-200 p-8">
                    <h3 class="text-2xl font-bold text-neutral-900 mb-6">❌ Without Automation</h3>
                    <ul class="space-y-3 text-neutral-600">
                        <li class="flex gap-3">
                            <span class="text-orange-600 font-bold">→</span>
                            <span>8+ hours spent on manual notifications & follow-ups</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-orange-600 font-bold">→</span>
                            <span>Errors slip through (exhaustion, distraction)</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-orange-600 font-bold">→</span>
                            <span>Crisis response is slow (hours of human coordination)</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-orange-600 font-bold">→</span>
                            <span>Your team can't scale without hiring 3x more people</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-orange-600 font-bold">→</span>
                            <span>High employee burnout (repetitive work kills morale)</span>
                        </li>
                    </ul>
                </div>

                <div class="rounded-2xl bg-gradient-to-br from-blue-50 to-white border border-blue-200 p-8">
                    <h3 class="text-2xl font-bold text-neutral-900 mb-6">✅ With AI Agents</h3>
                    <ul class="space-y-3 text-neutral-600">
                        <li class="flex gap-3">
                            <span class="text-blue-600 font-bold">→</span>
                            <span><strong>2 seconds:</strong> Agent detects, notifies, and acts</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-600 font-bold">→</span>
                            <span>Zero human error (no fatigue, perfect consistency)</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-600 font-bold">→</span>
                            <span>Crisis handled before it escalates</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-600 font-bold">→</span>
                            <span>Scale 10x volume with same team size</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-blue-600 font-bold">→</span>
                            <span>Your team focuses on strategy, innovation, growth</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 rounded-xl bg-gradient-to-r from-amber-50 to-orange-50 border border-orange-200 p-8">
                <h3 class="text-xl font-bold text-neutral-900 mb-4">🎯 The Real Win: Employee Satisfaction Soars</h3>
                <p class="text-neutral-600 mb-4">
                    When your team stops spending their day on repetitive busywork and starts working on meaningful
                    projects, everything changes. Turnover drops. Engagement rises. Talented people actually want to
                    work for you. That's not just good management—that's competitive advantage.
                </p>
                <p class="text-neutral-700 font-semibold">
                    "We used to lose 3-4 senior people per year to burnout. After implementing AI agents, we haven't
                    lost anyone in 18 months. They're excited to come to work again." — Operations Director, Healthcare
                    Network
                </p>
            </div>
        </div>
    </section>

    <!-- CASE STUDIES -->
    <section class="relative bg-white py-24">
        <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
            <svg class="absolute inset-0 h-full w-full text-slate-100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="grid-cs" width="8" height="8" patternUnits="userSpaceOnUse">
                        <path d="M8 0H0V8" fill="none" stroke="currentColor" stroke-width=".35" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-cs)" />
            </svg>
        </div>

        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-3xl animate-fadeInUp mb-16">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span> Case Studies
                </span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-semibold tracking-tight text-neutral-900">
                    Real Agents. Real Results.
                </h2>
                <p class="mt-3 text-neutral-600">
                    Watch how AI Agents transform operations. These aren't hypothetical — they're live in production.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-2">
                <!-- Case 1 -->
                <article class="rounded-2xl border border-slate-200 bg-white p-8 shadow-md hover:shadow-lg transition">
                    <div class="flex items-start gap-4 mb-6">
                        <div
                            class="h-16 w-16 rounded-xl bg-orange-100 flex items-center justify-center text-3xl flex-shrink-0">
                            🚢</div>
                        <div>
                            <h3 class="text-xl font-bold text-neutral-900">Supply Chain: Disruption Handler</h3>
                            <p class="text-sm text-orange-600 font-semibold mt-1">Global Logistics</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-bold text-sm text-neutral-900 mb-2">THE PROBLEM</h4>
                            <p class="text-sm text-neutral-600">Shipment delayed 24+ hours. Manager manually notifies
                                customers, checks backup suppliers, recalculates ETAs, updates CRM. Time: 3-4 hours.
                                Errors: frequent.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm text-neutral-900 mb-2">THE AGENT</h4>
                            <p class="text-sm text-neutral-600">Monitors FedEx/Maersk APIs + weather feeds. On delay
                                >24h: auto-notifies VIP customers, checks inventory, triggers rush orders, updates CRM.
                                Time: ~2 seconds.</p>
                        </div>
                        <div class="rounded-lg bg-orange-50 border border-orange-200 p-4">
                            <div class="grid grid-cols-3 gap-3 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-orange-600">4 hrs</div>
                                    <div class="text-xs text-neutral-600">Saved/incident</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-orange-600">$12K</div>
                                    <div class="text-xs text-neutral-600">Monthly savings</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-orange-600">23%</div>
                                    <div class="text-xs text-neutral-600">↑ Satisfaction</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Case 2 -->
                <article class="rounded-2xl border border-slate-200 bg-white p-8 shadow-md hover:shadow-lg transition">
                    <div class="flex items-start gap-4 mb-6">
                        <div
                            class="h-16 w-16 rounded-xl bg-blue-100 flex items-center justify-center text-3xl flex-shrink-0">
                            🏥</div>
                        <div>
                            <h3 class="text-xl font-bold text-neutral-900">Healthcare: Referral Concierge</h3>
                            <p class="text-sm text-blue-600 font-semibold mt-1">Regional Hospital Network</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-bold text-sm text-neutral-900 mb-2">THE PROBLEM</h4>
                            <p class="text-sm text-neutral-600">Doctor refers patient. Patient forgets to call.
                                Specialist never gets insurance info. Referral dies. 62% drop rate. Appointment waits:
                                weeks.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm text-neutral-900 mb-2">THE AGENT</h4>
                            <p class="text-sm text-neutral-600">Monitors EHR for new referrals. Checks insurance, calls
                                patient, collects missing docs, faxes complete package to specialist, nags both sides
                                until appointment booked.</p>
                        </div>
                        <div class="rounded-lg bg-blue-50 border border-blue-200 p-4">
                            <div class="grid grid-cols-3 gap-3 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">85%</div>
                                    <div class="text-xs text-neutral-600">Completion rate</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">6 days</div>
                                    <div class="text-xs text-neutral-600">To appointment</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-blue-600">31%</div>
                                    <div class="text-xs text-neutral-600">↑ Throughput</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Case 3 -->
                <article class="rounded-2xl border border-slate-200 bg-white p-8 shadow-md hover:shadow-lg transition">
                    <div class="flex items-start gap-4 mb-6">
                        <div
                            class="h-16 w-16 rounded-xl bg-amber-100 flex items-center justify-center text-3xl flex-shrink-0">
                            ⚖️</div>
                        <div>
                            <h3 class="text-xl font-bold text-neutral-900">Legal: Document Analyzer</h3>
                            <p class="text-sm text-amber-600 font-semibold mt-1">Mid-Size Law Firm</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-bold text-sm text-neutral-900 mb-2">THE PROBLEM</h4>
                            <p class="text-sm text-neutral-600">Junior lawyers read 100-page contracts, flag risks,
                                compare to templates, create summaries. Time/contract: 20 hours. Red flags missed:
                                regularly.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm text-neutral-900 mb-2">THE AGENT</h4>
                            <p class="text-sm text-neutral-600">Ingests contract, uses NLP to extract clauses, compares
                                to firm templates, rates risk, alerts partner on anomalies. Generates executive summary
                                with recommendations.</p>
                        </div>
                        <div class="rounded-lg bg-amber-50 border border-amber-200 p-4">
                            <div class="grid grid-cols-3 gap-3 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-amber-600">18 hrs</div>
                                    <div class="text-xs text-neutral-600">Saved/review</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-amber-600">$85K</div>
                                    <div class="text-xs text-neutral-600">Annual recovery</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-amber-600">60%</div>
                                    <div class="text-xs text-neutral-600">↓ Turnaround</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Case 4 -->
                <article class="rounded-2xl border border-slate-200 bg-white p-8 shadow-md hover:shadow-lg transition">
                    <div class="flex items-start gap-4 mb-6">
                        <div
                            class="h-16 w-16 rounded-xl bg-cyan-100 flex items-center justify-center text-3xl flex-shrink-0">
                            📊</div>
                        <div>
                            <h3 class="text-xl font-bold text-neutral-900">Consulting: Lead Qualifier</h3>
                            <p class="text-sm text-cyan-600 font-semibold mt-1">Management Firm</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-bold text-sm text-neutral-900 mb-2">THE PROBLEM</h4>
                            <p class="text-sm text-neutral-600">100+ leads/week. Sales team drowns in emails.
                                Low-quality leads waste 5+ hours/week. Good prospects fall through cracks. Response:
                                slow.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm text-neutral-900 mb-2">THE AGENT</h4>
                            <p class="text-sm text-neutral-600">Receives all leads. Scores fit (budget, industry, pain
                                points). Categorizes hot/warm/nurture. Sends personalized outreach. Routes hot leads to
                                consultants instantly.</p>
                        </div>
                        <div class="rounded-lg bg-cyan-50 border border-cyan-200 p-4">
                            <div class="grid grid-cols-3 gap-3 text-center">
                                <div>
                                    <div class="text-2xl font-bold text-cyan-600">3.2x</div>
                                    <div class="text-xs text-neutral-600">Conversion ↑</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-cyan-600">5 min</div>
                                    <div class="text-xs text-neutral-600">Response time</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-cyan-600">$2.3M</div>
                                    <div class="text-xs text-neutral-600">New revenue/year</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES -->
    <section class="relative bg-gradient-to-br from-orange-50 to-blue-50 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900">
                    Every Industry. Your Workflow.
                </h2>
                <p class="mt-4 text-lg text-neutral-600">
                    Healthcare. Supply Chain. Legal. Consulting. Engineering. Finance. Travel. Real Estate. We build
                    agents for any workflow
                    that's costing you time and money.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="rounded-xl border border-slate-200 bg-white p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center mb-3">
                        <i class="fas fa-hospital-user text-blue-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-neutral-900">Healthcare</h3>
                    <p class="text-sm text-neutral-600 mt-2">Referral follow-up, insurance verification, appointment
                        scheduling, EHR management</p>
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-lg bg-orange-100 flex items-center justify-center mb-3">
                        <i class="fas fa-truck text-orange-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-neutral-900">Supply Chain</h3>
                    <p class="text-sm text-neutral-600 mt-2">Disruption alerts, inventory coordination, supplier
                        management, customer notifications</p>
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-lg bg-purple-100 flex items-center justify-center mb-3">
                        <i class="fas fa-gavel text-purple-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-neutral-900">Legal</h3>
                    <p class="text-sm text-neutral-600 mt-2">Contract analysis, document review, compliance, research,
                        communications</p>
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center mb-3">
                        <i class="fas fa-chart-line text-green-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-neutral-900">Consulting</h3>
                    <p class="text-sm text-neutral-600 mt-2">Lead qualification, proposal automation, market research,
                        client management</p>
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center mb-3">
                        <i class="fas fa-wrench text-red-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-neutral-900">Engineering</h3>
                    <p class="text-sm text-neutral-600 mt-2">Predictive maintenance, QA monitoring, equipment alerts,
                        process optimization</p>
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-lg bg-yellow-100 flex items-center justify-center mb-3">
                        <i class="fas fa-money-bill-wave text-yellow-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-neutral-900">Finance</h3>
                    <p class="text-sm text-neutral-600 mt-2">Fraud detection, KYC verification, compliance alerts,
                        investment analysis</p>
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-lg bg-cyan-100 flex items-center justify-center mb-3">
                        <i class="fas fa-plane text-cyan-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-neutral-900">Travel Agencies</h3>
                    <p class="text-sm text-neutral-600 mt-2">Booking confirmations, itinerary management, customer
                        support, visa tracking, schedule changes</p>
                </div>
                <div class="rounded-xl border border-slate-200 bg-white p-6 hover:shadow-lg transition">
                    <div class="w-12 h-12 rounded-lg bg-amber-100 flex items-center justify-center mb-3">
                        <i class="fas fa-home text-amber-600 text-xl"></i>
                    </div>
                    <h3 class="font-bold text-lg text-neutral-900">Real Estate</h3>
                    <p class="text-sm text-neutral-600 mt-2">Lead qualification, property inquiries, showing scheduling,
                        document management, follow-ups</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WORKFLOW VISUALIZATION SECTION -->
    <section class="relative bg-white py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-16">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase mb-4">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span> Under the Hood
                </span>
                <h2 class="text-3xl md:text-5xl font-bold text-neutral-900 mb-6">Understanding Workflow Automation</h2>
                <p class="text-lg text-neutral-600">
                    See exactly how AI Agents transform your business processes from manual chaos to automated
                    excellence. We'll walk you through a real workflow and show you how it becomes intelligent,
                    self-managing, and always-on.
                </p>
            </div>

            <!-- System Architecture Diagram Card -->
            <div class="rounded-3xl border border-slate-200 bg-slate-50 shadow-xl overflow-hidden">
                <!-- Header / Toolbar -->
                <div class="bg-white border-b border-slate-200 px-6 py-4 flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <div class="h-3 w-3 rounded-full bg-red-400"></div>
                        <div class="h-3 w-3 rounded-full bg-amber-400"></div>
                        <div class="h-3 w-3 rounded-full bg-green-400"></div>
                    </div>
                    <div class="text-xs font-mono text-slate-400">AGENT_WORKFLOW_V1.0.exe</div>
                </div>

                <div class="grid lg:grid-cols-3 divide-y lg:divide-y-0 lg:divide-x divide-slate-200">

                    <!-- STEP 1: INPUT -->
                    <div class="p-8 lg:p-10 bg-white relative group">
                        <div class="absolute top-0 left-0 w-1 h-full bg-orange-500"></div>
                        <span
                            class="inline-block px-3 py-1 rounded-full bg-orange-100 text-orange-700 text-xs font-bold mb-6">01.
                            INGEST</span>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Triggers & Inputs</h3>
                        <p class="text-sm text-neutral-600 mb-8 leading-relaxed">The agent listens 24/7 across your
                            ecosystem. It instantly detects new data, requests, or time-based events.</p>

                        <div class="space-y-3">
                            <div class="flex items-center gap-3 p-3 rounded-lg bg-slate-50 border border-slate-100">
                                <i class="fas fa-envelope text-slate-400 w-5"></i>
                                <span class="text-sm font-medium text-slate-700">Inbound Emails</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 rounded-lg bg-slate-50 border border-slate-100">
                                <i class="fas fa-database text-slate-400 w-5"></i>
                                <span class="text-sm font-medium text-slate-700">Database Updates</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 rounded-lg bg-slate-50 border border-slate-100">
                                <i class="fas fa-globe text-slate-400 w-5"></i>
                                <span class="text-sm font-medium text-slate-700">API Webhooks</span>
                            </div>
                        </div>

                        <!-- Arrow for desktop -->
                        <div
                            class="hidden lg:flex absolute -right-4 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-slate-200 text-slate-400 h-8 w-8 rounded-full items-center justify-center">
                            <i class="fas fa-arrow-right text-xs"></i>
                        </div>
                    </div>

                    <!-- STEP 2: PROCESS (The Core) -->
                    <div class="p-8 lg:p-10 bg-slate-50/50 relative">
                        <span
                            class="inline-block px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-xs font-bold mb-6">02.
                            PROCESS</span>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">The Cognitive Core</h3>
                        <p class="text-sm text-neutral-600 mb-8 leading-relaxed">Where the "thinking" happens. The agent
                            follows your rules, consults LLMs for context, and validates security.</p>

                        <div class="space-y-4">
                            <!-- Logic Block -->
                            <div class="p-4 rounded-xl bg-white border border-blue-100 shadow-sm">
                                <div class="flex items-center gap-2 mb-2">
                                    <i class="fas fa-brain text-blue-500"></i>
                                    <span class="text-xs font-bold text-blue-600 uppercase">Analysis</span>
                                </div>
                                <p class="text-xs text-neutral-600">"Is this invoice valid? Does it match the PO?"</p>
                            </div>

                            <!-- Logic Block -->
                            <div class="p-4 rounded-xl bg-white border border-purple-100 shadow-sm">
                                <div class="flex items-center gap-2 mb-2">
                                    <i class="fas fa-shield-alt text-purple-500"></i>
                                    <span class="text-xs font-bold text-purple-600 uppercase">Guardrails</span>
                                </div>
                                <p class="text-xs text-neutral-600">"Check permission level. Mask sensitive PII data."
                                </p>
                            </div>

                            <!-- Logic Block -->
                            <div class="p-4 rounded-xl bg-white border border-green-100 shadow-sm">
                                <div class="flex items-center gap-2 mb-2">
                                    <i class="fas fa-code-branch text-green-500"></i>
                                    <span class="text-xs font-bold text-green-600 uppercase">Decision</span>
                                </div>
                                <p class="text-xs text-neutral-600">"Approved. Route to payment API."</p>
                            </div>
                        </div>

                        <!-- Arrow for desktop -->
                        <div
                            class="hidden lg:flex absolute -right-4 top-1/2 transform -translate-y-1/2 z-10 bg-white border border-slate-200 text-slate-400 h-8 w-8 rounded-full items-center justify-center">
                            <i class="fas fa-arrow-right text-xs"></i>
                        </div>
                    </div>

                    <!-- STEP 3: ACTION -->
                    <div class="p-8 lg:p-10 bg-white relative">
                        <div class="absolute top-0 right-0 w-1 h-full bg-green-500"></div>
                        <span
                            class="inline-block px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold mb-6">03.
                            EXECUTE</span>
                        <h3 class="text-xl font-bold text-neutral-900 mb-4">Action & Handoff</h3>
                        <p class="text-sm text-neutral-600 mb-8 leading-relaxed">The agent completes the task in your
                            systems. It logs the result and notifies humans only if an exception occurs.</p>

                        <div class="space-y-3">
                            <div
                                class="flex items-center justify-between p-3 rounded-lg bg-green-50 border border-green-100">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-check-circle text-green-600 w-5"></i>
                                    <span class="text-sm font-medium text-slate-700">Update CRM/ERP</span>
                                </div>
                                <span
                                    class="text-[10px] font-bold text-green-700 bg-white px-2 py-0.5 rounded border border-green-200">DONE</span>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 rounded-lg bg-green-50 border border-green-100">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-paper-plane text-green-600 w-5"></i>
                                    <span class="text-sm font-medium text-slate-700">Send Confirmation</span>
                                </div>
                                <span
                                    class="text-[10px] font-bold text-green-700 bg-white px-2 py-0.5 rounded border border-green-200">SENT</span>
                            </div>
                            <div
                                class="flex items-center justify-between p-3 rounded-lg bg-slate-50 border border-slate-200 opacity-60">
                                <div class="flex items-center gap-3">
                                    <i class="fas fa-user text-slate-500 w-5"></i>
                                    <span class="text-sm font-medium text-slate-700">Escalate to Human</span>
                                </div>
                                <span
                                    class="text-[10px] font-bold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200">SKIPPED</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Real World Use Case Text -->
            <div class="mt-12 text-center text-sm text-neutral-500">
                <p>Example: A single <strong>Invoice Processing Agent</strong> performs this loop ~500 times per hour,
                    replacing weeks of manual data entry.</p>
            </div>
        </div>
    </section>

    <!-- 24/7 PRODUCTIVITY SECTION -->
    <section class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-orange-900 py-20 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span
                        class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-300 uppercase mb-4">
                        <span class="h-1.5 w-1.5 rounded-full bg-orange-300"></span> Always On
                    </span>
                    <h2 class="text-3xl md:text-5xl font-bold mb-6">
                        24/7 Productivity: The Math That Changes Everything
                    </h2>
                    <p class="text-lg text-blue-100 mb-6">
                        Your team works 40 hours a week. An AI Agent works infinitely. Here's why that matters.
                    </p>

                    <div class="space-y-6">
                        <div class="bg-white/10 backdrop-blur border border-white/20 rounded-lg p-6">
                            <h3 class="text-xl font-bold mb-3 flex items-center gap-3">
                                <i class="fas fa-user text-orange-300 text-2xl"></i>
                                Traditional Employee: 8 Hours/Day
                            </h3>
                            <ul class="space-y-2 text-blue-50">
                                <li class="flex gap-2">
                                    <span class="text-orange-300">•</span>
                                    <span>Works Monday-Friday (5 days/week = ~250 days/year)</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-orange-300">•</span>
                                    <span>Vacation, sick days, holidays (-20-30 days/year)</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-orange-300">•</span>
                                    <span>Meetings, training, breaks reduce actual work hours</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-orange-300">•</span>
                                    <span>Average productive time: ~1,500 hours/year</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-orange-300">•</span>
                                    <span>Fatigue = slower work and more errors over time</span>
                                </li>
                            </ul>
                        </div>

                        <div class="bg-orange-500/20 backdrop-blur border border-orange-400/30 rounded-lg p-6">
                            <h3 class="text-xl font-bold mb-3 flex items-center gap-3">
                                <i class="fas fa-robot text-orange-300 text-2xl"></i>
                                AI Agent: 24/7 Availability
                            </h3>
                            <ul class="space-y-2 text-blue-50">
                                <li class="flex gap-2">
                                    <span class="text-orange-300">•</span>
                                    <span>Works every single day, every hour, every minute</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-orange-300">•</span>
                                    <span>No vacations, no sick days, no holidays</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-orange-300">•</span>
                                    <span>No breaks, no fatigue, zero performance degradation</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-orange-300">•</span>
                                    <span>Equivalent: ~8,760 hours/year of perfect work</span>
                                </li>
                                <li class="flex gap-2">
                                    <span class="text-orange-300">•</span>
                                    <span>Same quality, same speed, every single time</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div
                        class="mt-8 bg-gradient-to-r from-orange-400/20 to-yellow-400/20 border border-orange-400/50 rounded-lg p-6">
                        <h4 class="font-bold text-lg mb-3">The Advantage: 5.8x More Productivity</h4>
                        <p class="text-blue-100 mb-3">
                            One AI Agent provides the equivalent work output of <strong>~6 full-time employees</strong>
                            without:
                        </p>
                        <ul class="space-y-2 text-blue-50">
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Salary, benefits, or hiring costs</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Training or onboarding time</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Turnover or knowledge loss</li>
                            <li><i class="fas fa-check text-green-400 mr-2"></i>Managing, supervising, or performance
                                reviews</li>
                        </ul>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur rounded-2xl border border-white/10 p-8">
                    <div class="space-y-6">
                        <div class="text-center">
                            <div class="text-5xl font-bold text-orange-300 mb-2">1,500 hrs</div>
                            <p class="text-blue-100">Employee/year</p>
                        </div>
                        <div class="w-full h-2 bg-white/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-orange-400 to-orange-600" style="width: 17%"></div>
                        </div>

                        <div class="text-center pt-4">
                            <div class="text-5xl font-bold text-green-300 mb-2">8,760 hrs</div>
                            <p class="text-blue-100">Agent/year</p>
                        </div>
                        <div class="w-full h-2 bg-white/10 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-green-400 to-green-600" style="width: 100%"></div>
                        </div>

                        <div class="mt-8 pt-8 border-t border-white/10">
                            <p class="text-blue-100 mb-4">Example: Lead Management for Consulting</p>
                            <div class="space-y-3">
                                <div class="flex justify-between text-sm">
                                    <span>Employee can handle:</span>
                                    <span class="font-bold text-orange-300">~100 leads/month</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Agent can handle:</span>
                                    <span class="font-bold text-green-300">~2,000 leads/month</span>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span>Quality:</span>
                                    <span class="font-bold text-green-300">100% consistent</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECURITY & CUSTOMIZATION SECTION -->
    <section class="relative bg-white py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl mb-16">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase mb-4">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span> Your Agent, Your Control
                </span>
                <h2 class="text-3xl md:text-5xl font-bold text-neutral-900 mb-6">Enterprise-Grade Security & Full
                    Ownership</h2>
                <p class="text-lg text-neutral-600">
                    You don't rent an AI Agent. You own it. We build it exclusively for your business with security that
                    matches your industry's strictest standards.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Security -->
                <div>
                    <h3 class="text-2xl font-bold text-neutral-900 mb-8 flex items-center gap-3">
                        <i class="fas fa-shield-alt text-orange-600 text-3xl"></i>
                        Security You Control
                    </h3>
                    <div class="space-y-6">
                        <div class="border-l-4 border-orange-600 pl-6">
                            <h4 class="font-bold text-neutral-900 mb-2 flex items-center gap-2">
                                <i class="fas fa-lock text-orange-600"></i>
                                Zero Credential Exposure
                            </h4>
                            <p class="text-neutral-600 text-sm">
                                Your API keys, passwords, and authentication tokens are encrypted and stored in your
                                private environment. Never transmitted, never exposed to third parties. Your credentials
                                stay yours.
                            </p>
                        </div>

                        <div class="border-l-4 border-blue-600 pl-6">
                            <h4 class="font-bold text-neutral-900 mb-2 flex items-center gap-2">
                                <i class="fas fa-database text-blue-600"></i>
                                Confidential Data Protection
                            </h4>
                            <p class="text-neutral-600 text-sm">
                                Patient records, legal contracts, financial data, customer info—nothing leaves your
                                infrastructure without explicit rules you set. Enterprise encryption at rest and in
                                transit.
                            </p>
                        </div>

                        <div class="border-l-4 border-green-600 pl-6">
                            <h4 class="font-bold text-neutral-900 mb-2 flex items-center gap-2">
                                <i class="fas fa-list-check text-green-600"></i>
                                Compliance Ready
                            </h4>
                            <p class="text-neutral-600 text-sm">
                                HIPAA, GDPR, SOC 2, PCI-DSS compliant. Full audit trails. Your agent logs every action,
                                every API call, every decision—for compliance audits and security reviews.
                            </p>
                        </div>

                        <div class="border-l-4 border-purple-600 pl-6">
                            <h4 class="font-bold text-neutral-900 mb-2 flex items-center gap-2">
                                <i class="fas fa-server text-purple-600"></i>
                                On-Premises or Private Cloud
                            </h4>
                            <p class="text-neutral-600 text-sm">
                                Deploy on your own infrastructure if you prefer. No cloud dependency. Complete control
                                over where data lives and who can access it.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Customization -->
                <div>
                    <h3 class="text-2xl font-bold text-neutral-900 mb-8 flex items-center gap-3">
                        <i class="fas fa-sliders-h text-blue-600 text-3xl"></i>
                        100% Customized to You
                    </h3>
                    <div class="space-y-6">
                        <div class="border-l-4 border-orange-600 pl-6">
                            <h4 class="font-bold text-neutral-900 mb-2 flex items-center gap-2">
                                <i class="fas fa-magic text-orange-600"></i>
                                Built for Your Workflow
                            </h4>
                            <p class="text-neutral-600 text-sm">
                                Not a template. Not a generic SaaS tool. Your agent is built from scratch around YOUR
                                exact process, YOUR systems, YOUR business logic.
                            </p>
                        </div>

                        <div class="border-l-4 border-blue-600 pl-6">
                            <h4 class="font-bold text-neutral-900 mb-2 flex items-center gap-2">
                                <i class="fas fa-link text-blue-600"></i>
                                Native System Integration
                            </h4>
                            <p class="text-neutral-600 text-sm">
                                Connects directly to your ERP, CRM, HIS, or custom systems via APIs. No middleware, no
                                data copying, no sync delays. Real-time integration.
                            </p>
                        </div>

                        <div class="border-l-4 border-green-600 pl-6">
                            <h4 class="font-bold text-neutral-900 mb-2 flex items-center gap-2">
                                <i class="fas fa-tools text-green-600"></i>
                                You Own the Code
                            </h4>
                            <p class="text-neutral-600 text-sm">
                                Full access to the agent's codebase. Make changes, add features, or transfer to another
                                team. It's yours—not locked into our platform.
                            </p>
                        </div>

                        <div class="border-l-4 border-purple-600 pl-6">
                            <h4 class="font-bold text-neutral-900 mb-2 flex items-center gap-2">
                                <i class="fas fa-chart-line text-purple-600"></i>
                                Evolves With You
                            </h4>
                            <p class="text-neutral-600 text-sm">
                                As your business changes, the agent adapts. New systems? New rules? New processes? We
                                update it. You control the roadmap.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-16 rounded-2xl bg-gradient-to-r from-orange-50 to-blue-50 border border-orange-200 p-8">
                <h3 class="text-2xl font-bold text-neutral-900 mb-4 flex items-center gap-3">
                    <i class="fas fa-handshake text-orange-600 text-2xl"></i>
                    The Difference: Partnership, Not Vendor Lock-In
                </h3>
                <div class="grid md:grid-cols-3 gap-6 mt-6">
                    <div>
                        <h4 class="font-bold text-neutral-900 mb-2">SaaS Tool Mindset</h4>
                        <p class="text-sm text-neutral-600">
                            "Use our platform. We own the code. If you leave, your data is stuck. You can't modify it.
                            You're locked in."
                        </p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-arrow-right text-orange-600 text-2xl mb-2"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-neutral-900 mb-2">Al Musaab Agent Mindset</h4>
                        <p class="text-sm text-neutral-600">
                            "We build it. You own it. You have the code. You control the security. If you want to leave,
                            take it with you. No vendor lock-in."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOW WE BUILD -->
    <section class="relative bg-white py-24">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-3xl mb-16">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span> Our Process
                </span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-semibold tracking-tight text-neutral-900">
                    From Vision to Production
                </h2>
                <p class="mt-4 text-base text-neutral-600">
                    We don't just hand you code. We design, build, test, and train your team. Full partnership from day
                    one.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="rounded-xl border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="h-10 w-10 rounded-full bg-orange-600 text-white flex items-center justify-center font-bold">
                            1</div>
                        <h3 class="text-lg font-bold text-neutral-900">Discovery</h3>
                    </div>
                    <p class="text-neutral-600 text-sm">We map your workflows, identify bottlenecks, define success
                        metrics. Weekly workshops with your team.</p>
                </div>

                <div class="rounded-xl border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="h-10 w-10 rounded-full bg-orange-600 text-white flex items-center justify-center font-bold">
                            2</div>
                        <h3 class="text-lg font-bold text-neutral-900">Design</h3>
                    </div>
                    <p class="text-neutral-600 text-sm">Agent architecture, logic flows, API integrations, decision
                        trees. You approve everything before we code.</p>
                </div>

                <div class="rounded-xl border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="h-10 w-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold">
                            3</div>
                        <h3 class="text-lg font-bold text-neutral-900">Build & Test</h3>
                    </div>
                    <p class="text-neutral-600 text-sm">Modern AI/ML stacks (LLMs, APIs, databases). Rigorous testing in
                        sandbox. Zero production surprises.</p>
                </div>

                <div class="rounded-xl border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-8">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="h-10 w-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold">
                            4</div>
                        <h3 class="text-lg font-bold text-neutral-900">Launch & Support</h3>
                    </div>
                    <p class="text-neutral-600 text-sm">Gradual rollout with monitoring. Team training, dashboards,
                        alerting. We stay for continuous improvement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="relative bg-white py-20">
        <div class="max-w-4xl mx-auto px-6">
            <!-- Main Content -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left: Text & CTA -->
                <div>
                    <span
                        class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase mb-4">
                        <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span> How We Work
                    </span>

                    <h2 class="text-4xl md:text-5xl font-bold text-neutral-900 mb-6 leading-tight">
                        Start
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-blue-600">
                            Building</span>
                    </h2>

                    <p class="text-lg text-neutral-600 mb-8">
                        We understand your workflow. We automate it. Your team gets back 20-30 hours every week.
                    </p>

                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-handshake text-orange-600 font-bold"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-neutral-900 mb-1">We Meet Your Team First</h4>
                                <p class="text-sm text-neutral-600">We learn how you actually work. Then we build around
                                    that.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-calendar-check text-blue-600 font-bold"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-neutral-900 mb-1">Ready to Use in 4-6 Weeks</h4>
                                <p class="text-sm text-neutral-600">No year-long projects. We ship fast and iterate
                                    together.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-1">
                                <i class="fas fa-chart-line text-green-600 font-bold"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-neutral-900 mb-1">Payback in 3-4 Months</h4>
                                <p class="text-sm text-neutral-600">Your savings exceed costs before the agent is even
                                    fully optimized.</p>
                            </div>
                        </div>
                    </div>

                    <a href="<?= $base . '/contactus' ?>"
                        class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-orange-600 to-orange-600 hover:from-orange-700 hover:to-orange-700 text-white px-8 py-4 rounded-lg font-semibold transition">
                        Schedule a 30-Minute Call
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M13 5l7 7-7 7-1.5-1.5L16 13H4v-2h12l-4.5-4.5L13 5z" />
                        </svg>
                    </a>

                    <p class="text-xs text-neutral-500 mt-4">
                        Just a conversation. See if this makes sense for you.
                    </p>
                </div>

                <!-- Right: Quick Questions -->
                <div class="space-y-6">
                    <div class="bg-gradient-to-br from-orange-50 to-white border border-orange-200 rounded-xl p-6">
                        <h4 class="font-bold text-neutral-900 mb-3 flex items-center gap-2">
                            <i class="fas fa-industry text-orange-600"></i>
                            Your Industry
                        </h4>
                        <p class="text-sm text-neutral-600">Healthcare, Legal, Finance, Supply Chain, Real Estate, and
                            more.</p>
                    </div>

                    <div class="bg-gradient-to-br from-blue-50 to-white border border-blue-200 rounded-xl p-6">
                        <h4 class="font-bold text-neutral-900 mb-3 flex items-center gap-2">
                            <i class="fas fa-hourglass-half text-blue-600"></i>
                            Your Problem
                        </h4>
                        <p class="text-sm text-neutral-600">Manual work, data entry, approvals, scheduling. What takes
                            your time?</p>
                    </div>

                    <div class="bg-gradient-to-br from-green-50 to-white border border-green-200 rounded-xl p-6">
                        <h4 class="font-bold text-neutral-900 mb-3 flex items-center gap-2">
                            <i class="fas fa-rocket text-green-600"></i>
                            We Automate It
                        </h4>
                        <p class="text-sm text-neutral-600">Custom AI agent. Runs 24/7. Works perfectly for your
                            business.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BUSINESS INQUIRY FORM -->
    <section class="relative bg-white py-20">
        <div class="max-w-2xl mx-auto px-6">
            <div class="text-center mb-12">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase mb-4">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span> Your Details
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-4">Tell Us About Your Business</h2>
                <p class="text-neutral-600">Share a bit about yourself and we'll craft a custom proposal within 24
                    hours.</p>
            </div>

            <form method="POST" action="<?= $base ?>/ai-agents-inquiry.php" class="space-y-5">
                <!-- Row 1: Name & Email -->
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-neutral-900 mb-2">Your Name *</label>
                        <input type="text" id="name" name="name" required placeholder="John Smith"
                            class="w-full px-4 py-3 border border-slate-200 rounded-lg bg-white/50 backdrop-blur focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent transition">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-neutral-900 mb-2">Your Email
                            *</label>
                        <input type="email" id="email" name="email" required placeholder="john@company.com"
                            class="w-full px-4 py-3 border border-slate-200 rounded-lg bg-white/50 backdrop-blur focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent transition">
                    </div>
                </div>

                <!-- Row 2: Phone & Industry -->
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-neutral-900 mb-2">Your Phone
                            *</label>
                        <input type="tel" id="phone" name="phone" required placeholder="(555) 123-4567"
                            class="w-full px-4 py-3 border border-slate-200 rounded-lg bg-white/50 backdrop-blur focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent transition">
                    </div>
                    <div>
                        <label for="industry" class="block text-sm font-semibold text-neutral-900 mb-2">Your
                            Industry</label>
                        <select id="industry" name="industry"
                            class="w-full px-4 py-3 border border-slate-200 rounded-lg bg-white/50 backdrop-blur focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent transition">
                            <option value="">Select industry...</option>
                            <option value="Healthcare">Healthcare</option>
                            <option value="Supply Chain & Logistics">Supply Chain & Logistics</option>
                            <option value="Legal Services">Legal Services</option>
                            <option value="Consulting">Consulting</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Finance">Finance</option>
                            <option value="Travel & Hospitality">Travel & Hospitality</option>
                            <option value="Real Estate">Real Estate</option>
                            <option value="Retail">Retail</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                <!-- Row 3: Pain Point -->
                <div>
                    <label for="pain_point" class="block text-sm font-semibold text-neutral-900 mb-2">What's Eating Your
                        Team's Time?</label>
                    <select id="pain_point" name="pain_point"
                        class="w-full px-4 py-3 border border-slate-200 rounded-lg bg-white/50 backdrop-blur focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent transition">
                        <option value="">Select what wastes the most time...</option>
                        <option value="Manual Data Entry">Manual Data Entry</option>
                        <option value="Invoice Processing">Invoice Processing</option>
                        <option value="Appointment Scheduling">Appointment Scheduling</option>
                        <option value="Lead Qualification">Lead Qualification</option>
                        <option value="Document Management">Document Management</option>
                        <option value="Customer Support">Customer Support</option>
                        <option value="Reporting & Analytics">Reporting & Analytics</option>
                        <option value="Approval Workflows">Approval Workflows</option>
                        <option value="Order Processing">Order Processing</option>
                        <option value="Multiple Tasks">Multiple Tasks</option>
                    </select>
                </div>

                <!-- Row 4: Hours Per Week -->
                <div>
                    <label for="hours" class="block text-sm font-semibold text-neutral-900 mb-2">Hours Per Week Spent on
                        This?</label>
                    <select id="hours" name="hours"
                        class="w-full px-4 py-3 border border-slate-200 rounded-lg bg-white/50 backdrop-blur focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent transition">
                        <option value="">Select...</option>
                        <option value="5-10 hours">5-10 hours</option>
                        <option value="10-20 hours">10-20 hours</option>
                        <option value="20-40 hours">20-40 hours</option>
                        <option value="40+ hours">40+ hours</option>
                    </select>
                </div>

                <!-- Row 5: Message -->
                <div>
                    <label for="message" class="block text-sm font-semibold text-neutral-900 mb-2">Anything Else?
                        (Optional)</label>
                    <textarea id="message" name="message" rows="3"
                        placeholder="Systems you use, specific challenges, timeline..."
                        class="w-full px-4 py-3 border border-slate-200 rounded-lg bg-white/50 backdrop-blur focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent transition resize-none"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-orange-600 to-orange-600 hover:from-orange-700 hover:to-orange-700 text-white font-semibold py-3 rounded-lg transition flex items-center justify-center gap-2">
                        <i class="fas fa-paper-plane"></i>
                        Send My Information
                    </button>
                    <p class="text-xs text-neutral-500 text-center mt-3">
                        We'll review and follow up within 24 hours with next steps.
                    </p>
                </div>
            </form>
        </div>
    </section>

    <?php include("footer.php"); ?>

</body>

</html>