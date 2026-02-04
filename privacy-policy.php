<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Privacy Policy — Al Musaab</title>
    <meta name="description"
        content="Al Musaab Privacy Policy. Learn how we collect, use, store, and protect your information." />
    <link rel="icon" href="<?= $base . '/assets/images/Al-Musaab-logo.png' ?>" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        fadeInRight: { "0%": { opacity: 0, transform: "translateX(50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeInLeft: { "0%": { opacity: 0, transform: "translateX(-50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } },
                        floatY: { "0%,100%": { transform: "translateY(0)" }, "50%": { transform: "translateY(-20px)" } }
                    },
                    animation: {
                        fadeInRight: "fadeInRight 0.8s ease-out forwards",
                        fadeInLeft: "fadeInLeft 0.8s ease-out forwards",
                        fadeIn: "fadeIn 1s ease-out forwards",
                        floatY: "floatY 4s ease-in-out infinite"
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-white text-neutral-900 font-sans">
    <?php include "navbar.php"; ?>

    <!-- HERO SECTION -->
    <section class="bg-white py-24 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Text Column -->
                <div class="opacity-0 animate-fadeInLeft">
                    <div
                        class="inline-block mb-4 rounded-full bg-orange-50 px-4 py-1 text-xs font-semibold text-orange-700 shadow-sm ring-1 ring-orange-100">
                        Privacy & Security
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-neutral-900 leading-tight">
                        Privacy Matters.<br /> Here's How We Protect It.
                    </h1>
                    <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                        This Privacy Policy explains how we collect, use, store, and safeguard your information across
                        allAl Musaabservices in Pakistan. Your trust is our priority.
                    </p>
                    <div class="mt-8">
                        <a href="#contact"
                            class="inline-block bg-neutral-900 text-white px-6 py-3 rounded-md font-medium shadow hover:bg-neutral-800 transition">
                            Have Questions? Contact Us
                        </a>
                    </div>
                </div>

                <!-- Image Column with Floating Circle -->
                <div class="opacity-0 animate-fadeInRight relative" style="animation-delay: 0.2s">
                    <svg class="absolute right-1/2 translate-x-1/2 top-1/2 -translate-y-1/2 w-[360px] h-[360px] md:w-[420px] md:h-[420px] text-orange-500 drop-shadow-[0_0_10px_rgba(249,115,22,0.2)] animate-floatY"
                        viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="150" cy="150" r="130" stroke="currentColor" stroke-width="16" fill="none"
                            opacity="0.3" />
                    </svg>
                    <div class="relative z-10">
                        <img src="<?= $base ?>/assets/images/undraw_legal-counsel_kdnh.svg"
                            alt="Secure Data Illustration" class="w-full max-w-md mx-auto" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUICK NAVIGATION -->
    <section class="py-16 bg-gradient-to-r from-orange-50 to-blue-50 border-y border-orange-100">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl font-bold mb-8 text-neutral-900">Quick Navigation</h2>
            <div class="grid md:grid-cols-4 gap-4">
                <a href="#information-collected"
                    class="p-4 bg-white rounded-lg shadow hover:shadow-lg hover:border-l-4 hover:border-orange-500 border-l-4 border-transparent transition">
                    <div class="text-orange-600 font-semibold text-sm">1. Information Collected</div>
                </a>
                <a href="#how-we-use"
                    class="p-4 bg-white rounded-lg shadow hover:shadow-lg hover:border-l-4 hover:border-orange-500 border-l-4 border-transparent transition">
                    <div class="text-orange-600 font-semibold text-sm">2. How We Use It</div>
                </a>
                <a href="#sharing"
                    class="p-4 bg-white rounded-lg shadow hover:shadow-lg hover:border-l-4 hover:border-orange-500 border-l-4 border-transparent transition">
                    <div class="text-orange-600 font-semibold text-sm">3. How We Share</div>
                </a>
                <a href="#cookies"
                    class="p-4 bg-white rounded-lg shadow hover:shadow-lg hover:border-l-4 hover:border-orange-500 border-l-4 border-transparent transition">
                    <div class="text-orange-600 font-semibold text-sm">4. Cookies & Tracking</div>
                </a>
                <a href="#security"
                    class="p-4 bg-white rounded-lg shadow hover:shadow-lg hover:border-l-4 hover:border-orange-500 border-l-4 border-transparent transition">
                    <div class="text-orange-600 font-semibold text-sm">5. Data Security</div>
                </a>
                <a href="#rights"
                    class="p-4 bg-white rounded-lg shadow hover:shadow-lg hover:border-l-4 hover:border-orange-500 border-l-4 border-transparent transition">
                    <div class="text-orange-600 font-semibold text-sm">6. Your Rights</div>
                </a>
                <a href="#retention"
                    class="p-4 bg-white rounded-lg shadow hover:shadow-lg hover:border-l-4 hover:border-orange-500 border-l-4 border-transparent transition">
                    <div class="text-orange-600 font-semibold text-sm">7. Data Retention</div>
                </a>
                <a href="#contact-us"
                    class="p-4 bg-white rounded-lg shadow hover:shadow-lg hover:border-l-4 hover:border-orange-500 border-l-4 border-transparent transition">
                    <div class="text-orange-600 font-semibold text-sm">8. Contact Us</div>
                </a>
            </div>
        </div>
    </section>

    <!-- CONTENT SECTIONS -->
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto px-6 space-y-16">

            <!-- LAST UPDATED -->
            <div class="text-center mb-12 opacity-0 animate-fadeIn">
                <p class="text-sm text-gray-500 font-medium">Last Updated: December 1, 2025</p>
            </div>

            <!-- INTRO TEXT -->
            <div class="opacity-0 animate-fadeIn" style="animation-delay: 0.1s">
                <p class="text-neutral-700 leading-relaxed text-lg">
                    This Privacy Policy explains how Al Musaab ("QueryTel", "we", "our", or "us") collects, uses,
                    discloses, and protects your personal information when you visit our website, interact with our
                    online content and advertisements (including Meta Lead Ads), submit a form, request support, or use
                    any of our IT and related services. By using our website or providing your information to us, you
                    agree to the terms of this Privacy Policy.
                </p>
            </div>

            <!-- 1. INFORMATION WE COLLECT -->
            <div id="information-collected" class="opacity-0 animate-fadeIn" style="animation-delay: 0.2s">
                <div class="flex items-start gap-4 mb-6">
                    <div class="h-12 w-12 rounded-lg bg-blue-500 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="database" class="h-6 w-6 text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-neutral-900">1. Information We Collect</h2>
                    </div>
                </div>
                <p class="text-neutral-700 leading-relaxed mb-6">
                    We collect personal information that you provide directly to us, such as your name, email address,
                    phone number, company name, job title, and any details you choose to share about your IT
                    environment, service needs, or project requirements. This includes information submitted through
                    website contact forms, Meta Lead Ads (Instant Forms), newsletter sign-ups, quote or demo requests,
                    and support requests.
                </p>
                <p class="text-neutral-700 leading-relaxed mb-6">
                    We also automatically collect certain technical and usage information when you visit our website,
                    including your IP address, browser type, operating system, device identifiers, pages viewed, time
                    spent on pages, referring URLs, and general location information derived from your IP address. This
                    information is collected through cookies, pixels, and similar tracking technologies.
                </p>
                <p class="text-neutral-700 leading-relaxed">
                    When you receive remote support or technical assistance from us, we may collect diagnostic and
                    system information that you choose to share, or that is necessary to troubleshoot issues, such as
                    system logs, configuration details, and error reports.
                </p>
            </div>

            <!-- 2. HOW WE USE YOUR INFORMATION -->
            <div id="how-we-use" class="opacity-0 animate-fadeIn" style="animation-delay: 0.3s">
                <div class="flex items-start gap-4 mb-6">
                    <div class="h-12 w-12 rounded-lg bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="sparkles" class="h-6 w-6 text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-neutral-900">2. How We Use Your Information</h2>
                    </div>
                </div>
                <p class="text-neutral-700 leading-relaxed mb-6">
                    We use the personal information we collect to provide, manage, and improve our services, as well as
                    to communicate with you. This includes responding to your inquiries, processing service or
                    consultation requests, delivering IT and support services, managing client relationships, and
                    maintaining our business operations.
                </p>
                <p class="text-neutral-700 leading-relaxed mb-6">
                    Information collected through our website forms and Meta Lead Ads is used to contact you about your
                    inquiry, assess your needs, provide quotes or proposals, schedule consultations, and follow up on
                    your interest in our services.
                </p>
                <p class="text-neutral-700 leading-relaxed mb-6">
                    We also use your information to improve our website, services, and user experience, to perform
                    analytics and reporting, to monitor the performance of our marketing campaigns (including campaigns
                    run on Meta platforms and other advertising networks), and to develop new services and offerings.
                </p>
                <p class="text-neutral-700 leading-relaxed mb-6">
                    Where you have provided consent or where permitted by law, we may use your contact information to
                    send you service updates, newsletters, invitations to events, and marketing communications related
                    to QueryTel's services. You may opt out of marketing communications at any time.
                </p>
                <p class="text-neutral-700 leading-relaxed">
                    We may use your information to comply with legal and regulatory obligations, respond to lawful
                    requests, enforce our agreements, and protect our rights and systems.
                </p>
            </div>

            <!-- 3. HOW WE SHARE YOUR INFORMATION -->
            <div id="sharing" class="opacity-0 animate-fadeIn" style="animation-delay: 0.4s">
                <div class="flex items-start gap-4 mb-6">
                    <div class="h-12 w-12 rounded-lg bg-blue-500 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="share-2" class="h-6 w-6 text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-neutral-900">3. How We Share Your Information</h2>
                    </div>
                </div>
                <div class="bg-blue-50 rounded-lg p-8 border border-blue-100 space-y-6">
                    <div>
                        <h4 class="font-semibold text-neutral-900 mb-2">We Do Not Sell Your Data</h4>
                        <p class="text-sm text-neutral-700">We do not sell your personal information. We may share your
                            information with trusted third-party service providers who assist us in delivering our
                            services, such as website hosting providers, cloud platforms, communication tools, analytics
                            tools, and cybersecurity services. These providers are required to protect your information.
                        </p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-neutral-900 mb-2">Legal Disclosure</h4>
                        <p class="text-sm text-neutral-700">We may also disclose information when required by law or
                            when necessary to protect our rights, investigate fraud, or comply with government requests.
                        </p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-neutral-900 mb-2">Business Transfers</h4>
                        <p class="text-sm text-neutral-700">IfAl Musaabparticipates in a merger, acquisition, or
                            similar transaction, your information may be transferred accordingly.</p>
                    </div>
                </div>
            </div>

            <!-- 4. COOKIES & TRACKING TECHNOLOGIES -->
            <div id="cookies" class="opacity-0 animate-fadeIn" style="animation-delay: 0.5s">
                <div class="flex items-start gap-4 mb-6">
                    <div class="h-12 w-12 rounded-lg bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="cookie" class="h-6 w-6 text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-neutral-900">4. Cookies and Tracking Technologies</h2>
                    </div>
                </div>
                <div class="bg-orange-50 rounded-lg p-8 border border-orange-100">
                    <p class="text-neutral-700 leading-relaxed mb-4">
                        Our website uses cookies, pixels, and similar technologies to improve site functionality,
                        analyze traffic, and support advertising activities, including Meta and Google remarketing. You
                        can turn off cookies in your browser settings.
                    </p>
                    <div class="mt-6 p-4 bg-white rounded border border-orange-200">
                        <p class="text-sm text-gray-600">
                            <strong>Browser Settings:</strong> Most web browsers allow you to control cookies through
                            their settings. For more information, visit your browser's help section.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 5. DATA SECURITY -->
            <div id="security" class="opacity-0 animate-fadeIn" style="animation-delay: 0.6s">
                <div class="flex items-start gap-4 mb-6">
                    <div class="h-12 w-12 rounded-lg bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="lock" class="h-6 w-6 text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-neutral-900">5. Data Security</h2>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <p class="text-neutral-700 leading-relaxed mb-4">
                            We implement technical and administrative measures to protect your personal information,
                            including encryption, secure hosting, access controls, and periodic security reviews.
                            However, no method of transmission or storage is entirely safe.
                        </p>
                    </div>
                    <div class="bg-orange-50 rounded-lg p-6 border border-orange-100 space-y-3">
                        <div class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="h-5 w-5 text-orange-600"></i>
                            <span class="text-sm font-medium text-neutral-700">SSL/TLS Encryption</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="h-5 w-5 text-orange-600"></i>
                            <span class="text-sm font-medium text-neutral-700">Regular Security Audits</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="h-5 w-5 text-orange-600"></i>
                            <span class="text-sm font-medium text-neutral-700">Access Control Policies</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 6. YOUR RIGHTS -->
            <div id="rights" class="opacity-0 animate-fadeIn" style="animation-delay: 0.7s">
                <div class="flex items-start gap-4 mb-6">
                    <div class="h-12 w-12 rounded-lg bg-blue-500 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="shield-alert" class="h-6 w-6 text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-neutral-900">6. Your Rights</h2>
                    </div>
                </div>
                <p class="text-neutral-700 leading-relaxed mb-6">
                    Depending on your jurisdiction, you may have rights to access, correct, delete, or restrict the use
                    of your personal information. You may also withdraw consent to marketing communications at any time.
                </p>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="p-4 bg-blue-50 rounded border border-blue-200">
                        <h4 class="font-semibold text-neutral-900 mb-2">Right to Access</h4>
                        <p class="text-sm text-neutral-700">Request a copy of your personal data</p>
                    </div>
                    <div class="p-4 bg-blue-50 rounded border border-blue-200">
                        <h4 class="font-semibold text-neutral-900 mb-2">Right to Correction</h4>
                        <p class="text-sm text-neutral-700">Correct inaccurate information</p>
                    </div>
                    <div class="p-4 bg-blue-50 rounded border border-blue-200">
                        <h4 class="font-semibold text-neutral-900 mb-2">Right to Deletion</h4>
                        <p class="text-sm text-neutral-700">Request deletion of your data</p>
                    </div>
                    <div class="p-4 bg-blue-50 rounded border border-blue-200">
                        <h4 class="font-semibold text-neutral-900 mb-2">Right to Opt-Out</h4>
                        <p class="text-sm text-neutral-700">Unsubscribe from marketing</p>
                    </div>
                </div>
            </div>

            <!-- 7. DATA RETENTION -->
            <div id="retention" class="opacity-0 animate-fadeIn" style="animation-delay: 0.8s">
                <div class="flex items-start gap-4 mb-6">
                    <div class="h-12 w-12 rounded-lg bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="archive" class="h-6 w-6 text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-neutral-900">7. Data Retention</h2>
                    </div>
                </div>
                <p class="text-neutral-700 leading-relaxed">
                    We retain information only as long as necessary to deliver our services, ensure legal compliance,
                    and support our business operations. Data is securely deleted or anonymized when no longer required.
                </p>
            </div>

            <!-- 8. THIRD-PARTY LINKS -->
            <div class="opacity-0 animate-fadeIn" style="animation-delay: 0.9s">
                <div class="flex items-start gap-4 mb-6">
                    <div class="h-12 w-12 rounded-lg bg-blue-500 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="link" class="h-6 w-6 text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-neutral-900">8. Third-Party Links</h2>
                    </div>
                </div>
                <p class="text-neutral-700 leading-relaxed">
                    Our website may contain links to external websites thatAl Musaabdoes not operate or control. We are
                    not responsible for their privacy practices.
                </p>
            </div>

            <!-- 9. CHILDREN'S PRIVACY -->
            <div class="opacity-0 animate-fadeIn" style="animation-delay: 1s">
                <div class="flex items-start gap-4 mb-6">
                    <div class="h-12 w-12 rounded-lg bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="heart" class="h-6 w-6 text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-neutral-900">9. Children's Privacy</h2>
                    </div>
                </div>
                <p class="text-neutral-700 leading-relaxed">
                    We do not knowingly collect personal information from individuals under 13 years of age.
                </p>
            </div>

            <!-- 10. CHANGES TO THIS POLICY -->
            <div class="opacity-0 animate-fadeIn" style="animation-delay: 1.1s">
                <div class="flex items-start gap-4 mb-6">
                    <div class="h-12 w-12 rounded-lg bg-blue-500 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="refresh-cw" class="h-6 w-6 text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-neutral-900">10. Changes to This Policy</h2>
                    </div>
                </div>
                <p class="text-neutral-700 leading-relaxed">
                    We reserve the right to update this Privacy Policy from time to time. Updates will be posted on this
                    page, accompanied by a revised "Last Updated" date.
                </p>
            </div>

            <!-- 11. CONTACT US -->
            <div id="contact-us" class="opacity-0 animate-fadeIn" style="animation-delay: 1.2s">
                <div class="flex items-start gap-4 mb-6">
                    <div class="h-12 w-12 rounded-lg bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="mail" class="h-6 w-6 text-white"></i>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-3xl font-bold text-neutral-900">11. Contact Us</h2>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-lg p-8 border border-orange-100">
                        <h3 class="font-semibold text-neutral-900 mb-4">Al Musaab</h3>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3">
                                <i data-lucide="mail" class="h-5 w-5 text-orange-600 mt-1"></i>
                                <div>
                                    <p class="text-sm font-medium text-neutral-700">Email</p>
                                    <a href="mailto:callback@almusaab.com"
                                        class="text-orange-600 hover:underline">callback@almusaab.com</a>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i data-lucide="phone" class="h-5 w-5 text-orange-600 mt-1"></i>
                                <div>
                                    <p class="text-sm font-medium text-neutral-700">Phone</p>
                                    <a href="tel:+1-844-447-8379"
                                        class="text-orange-600 hover:underline">+1-844-447-8379</a>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i data-lucide="globe" class="h-5 w-5 text-orange-600 mt-1"></i>
                                <div>
                                    <p class="text-sm font-medium text-neutral-700">Website</p>
                                    <a href="https://almusaab.com" target="_blank"
                                        class="text-orange-600 hover:underline">https://almusaab.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-blue-50 to-sky-50 rounded-lg p-8 border border-blue-100">
                        <h4 class="font-semibold text-neutral-900 mb-4">Questions About Your Privacy?</h4>
                        <p class="text-sm text-neutral-700 leading-relaxed mb-4">
                            If you have concerns or questions about this Privacy Policy, or wish to exercise your rights
                            regarding your personal information, please reach out to us. We're committed to addressing
                            your concerns promptly and professionally.
                        </p>
                        <a href="<?= $base . '/contactus' ?>"
                            class="inline-block bg-blue-600 text-white px-4 py-2 rounded-md font-medium hover:bg-blue-700 transition text-sm">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
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
                        class="bg-neutral-900 text-white px-8 py-3 rounded hover:bg-neutral-800 transition">Send
                        Message</button>
                </div>
            </form>
        </div>
    </section>
    <?php include "footer.php"; ?>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>