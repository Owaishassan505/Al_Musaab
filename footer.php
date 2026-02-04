<footer class="bg-[#f3f3f3] text-sm text-neutral-600 border-t border-neutral-200">
    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-4 gap-10">

        <!-- Column 1: Logo + Brief + NAP + Social Media -->
        <div>
            <img src="<?= $base . '/assets/images/Al-Musaab-logo.png' ?>" alt="QueryTel Logo" class="h-10 mb-4"
                loading="lazy" />


            <b>Al-Musaab</b> <br>
            <p>Empowering businesses with reliable managed IT, cybersecurity, and scalable infrastructure since
                1995.</p>

            <div class="mt-4 space-y-1">
                <p><strong>Address:</strong> Office#212 Anum Estate Building, Shahrah e Faisal, Karachi, ON 75350, Pakistan</p>
                <p><strong>Hours:</strong> Mon–Fri 8:00–17:00 (local)</p>
                <p><strong>Tel:</strong> <a href="tel:+922134321900" class="hover:underline">+92-213-4321900</a></p>
                <p><strong>Email:</strong> <a href="mailto:callback@almusaab.com"
                        class="hover:underline">callback@almusaab.com</a></p>
            </div>



            <div class="mt-6 max-w-md">
                <h2 class="mb-2 text-lg font-semibold">Subscribe to our Newsletter</h2>
                <form id="newsletter-form" class="gap-2">
                    <input type="email" name="email" placeholder="Your Email"
                        class="w-full border border-black px-4 py-2 rounded" required />
                    <button type="submit"
                        class="bg-neutral-900 text-white px-2 py-3 rounded hover:bg-neutral-800 transition w-full mt-2">
                        Subscribe
                    </button>
                </form>
                <div id="newsletter-message" class="mt-2 text-sm"></div>
            </div>



            <!-- Social Media -->

            <div class="mt-6">
                <h4 class="text-neutral-800 font-semibold mb-2">Follow Us</h4>
                <div class="flex space-x-4">

                    <!-- LinkedIn -->
                    <!-- <a href="https://www.linkedin.com/company/querytel-inc" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-blue-700 transition" aria-label="LinkedIn">
                        <i class="fab fa-linkedin fa-lg"></i>
                    </a> -->

                    <!-- X / Twitter -->
                    <!-- <a href="https://x.com/askquerytel" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-black transition" aria-label="X">
                        <i class="fab fa-x-twitter fa-lg"></i>
                    </a> -->

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/ask.almusaab2000" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-pink-600 transition" aria-label="Instagram">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/profile.php?id=61586972250984" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-blue-600 transition" aria-label="Facebook">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <!-- <a href="https://www.youtube.com/@querytel9280" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-red-600 transition" aria-label="YouTube">
                        <i class="fab fa-youtube fa-lg"></i> -->
                    </a>

                </div>
            </div>

        </div>



        <!-- Column 2: Quick Links -->
        <div>
            <h4 class="text-neutral-800 font-semibold mb-3">Quick Links</h4>
            <ul class="space-y-2">
                <li><a href="<?= $base ?>/" class="hover:underline">Home</a></li>
                <li><a href="<?= $base ?>/aboutus/" class="hover:underline">About Us</a></li>
                <li><a href="<?= $base ?>/ai-automation/" class="hover:underline">AI Automation</a></li>
                <li><a href="<?= $base ?>/services/" class="hover:underline">Services</a></li>
                <li><a href="<?= $base ?>/futureglimpse/" class="hover:underline">Future Glimpses</a></li>
                <li><a href="<?= $base ?>/knowledge-base/" class="hover:underline">Knowledge Base</a></li>
                <li><a href="<?= $base ?>/contactus/" class="hover:underline">Contact Us</a></li>
                <li><a href="<?= $base ?>/careers/" class="hover:underline">Careers</a></li>
                <li><a href="<?= $base ?>/privacy-policy/" class="hover:underline">Privacy Policy</a></li>
            </ul>
        </div>

        <!-- Column 3: Solutions -->
        <div>
            <h4 class="text-neutral-800 font-semibold mb-3">Solutions</h4>
            <ul class="space-y-2">
                <li><a href="<?= $base ?>/managedservices/" class="hover:underline">Managed Services</a></li>
                <li><a href="<?= $base ?>/cloud-security/" class="hover:underline">Cloud Security</a></li>
                <li><a href="<?= $base ?>/development/" class="hover:underline">Development</a></li>
            </ul>

            <h5 class="mt-4 font-semibold text-neutral-800">Cybersecurity</h5>
            <ul class="mt-2 space-y-2">
                <li><a href="<?= $base ?>/cybersecurity-services/" class="hover:underline">Cybersecurity Services</a></li>
                <li><a href="<?= $base ?>/soc24/" class="hover:underline">SOC 24</a></li>
                <li><a href="<?= $base ?>/sdwanassessment/" class="hover:underline">SD-WAN Assessment</a></li>
                <li><a href="<?= $base ?>/malwarebytesforhome/" class="hover:underline">Malwarebytes for Home</a></li>
                <li><a href="<?= $base ?>/malwarebytesforbusiness/" class="hover:underline">Malwarebytes for Business</a>
                </li>
            </ul>
        </div>

        <!-- Column 4: Infrastructure & Industries -->
        <div>
            <h4 class="text-neutral-800 font-semibold mb-3">Office Connect</h4>
            <ul class="space-y-2">
                <li><a href="<?= $base ?>/officeconnect/" class="hover:underline">Office Connect</a></li>
                <li><a href="<?= $base ?>/officeconnectplans/" class="hover:underline">Office Connect Plans</a></li>
            </ul>

            <h5 class="mt-4 font-semibold text-neutral-800">Cyber Cloud</h5>
            <ul class="mt-2 space-y-2">
                <li><a href="<?= $base ?>/cyberbackup/" class="hover:underline">Cyber Backup</a></li>
                <li><a href="<?= $base ?>/cyberprotect/" class="hover:underline">Cyber Protect</a></li>
                <li><a href="<?= $base ?>/cybernotary/" class="hover:underline">Cyber Notary</a></li>
                <li><a href="<?= $base ?>/cyberfiles/" class="hover:underline">Cyber Files</a></li>
                <li><a href="<?= $base ?>/disasterrecoverycloud/" class="hover:underline">Disaster Recovery Cloud</a>
                </li>
            </ul>

            <h4 class="text-neutral-800 font-semibold mt-6 mb-3">Industries</h4>
            <ul class="space-y-2">
                <li><a href="<?= $base ?>/retail/" class="hover:underline">Retail</a></li>
                <li><a href="<?= $base ?>/warehousing-solutions-and-network-infrastructure/"
                        class="hover:underline">Warehousing</a></li>
                <li><a href="<?= $base ?>/healthcare/" class="hover:underline">Healthcare</a></li>
                <li><a href="<?= $base ?>/generaloffice/" class="hover:underline">General Office</a></li>
            </ul>

        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bottom bar -->
    <div class="border-t border-neutral-200 text-center text-xs py-6 bg-[#eeeeee]">
        &copy; 2025 Al Musaab All rights reserved.
    </div>

    <!-- SiteNavigationElement JSON-LD (mirrors navbar items) -->
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"SiteNavigationElement",
    "name":[
      "Home","About Us","AI Automation","Cloud Security","Development","Managed Services","Office Connect","Office Connect Plans",
      "Cyber Backup","Cyber Protect","Cyber Notary","Cyber Files","Disaster Recovery Cloud",
      "Cybersecurity Services","SOC 24","SD-WAN Assessment","Malwarebytes for Home","Malwarebytes for Business",
      "Retail","Warehousing","Healthcare","General Office","Contact","Careers","Knowledge Base"
    ],
    "url":[
      "<?= $base ?>/",
      "<?= $base ?>/aboutus/",
      "<?= $base ?>/ai-automation/",
      "<?= $base ?>/cloud-security/",
      "<?= $base ?>/development/",
      "<?= $base ?>/managedservices/",
      "<?= $base ?>/officeconnect/",
      "<?= $base ?>/officeconnectplans/",
      "<?= $base ?>/cyberbackup/",
      "<?= $base ?>/cyberprotect/",
      "<?= $base ?>/cybernotary/",
      "<?= $base ?>/cyberfiles/",
      "<?= $base ?>/disasterrecoverycloud/",
      "<?= $base ?>/cybersecurity-services/",
      "<?= $base ?>/soc24/",
      "<?= $base ?>/sdwanassessment/",
      "<?= $base ?>/malwarebytesforhome/",
      "<?= $base ?>/malwarebytesforbusiness/",
      "<?= $base ?>/retail/",
      "<?= $base ?>/warehousing-solutions-and-network-infrastructure/",
      "<?= $base ?>/healthcare/",
      "<?= $base ?>/generaloffice/",
      "<?= $base ?>/contactus/",
      "<?= $base ?>/careers/",
      "<?= $base ?>/knowledge-base/"
    ]
  }
  </script>
</footer>

<!-- Live Chat Widget -->

<script>
    document.getElementById('newsletter-form').addEventListener('submit', async function (e) {
        e.preventDefault();
        const form = e.target;
        const data = new FormData(form);
        const messageBox = document.getElementById('newsletter-message');

        messageBox.textContent = "Submitting...";
        messageBox.className = "mt-2 text-sm text-gray-500";

        try {
            const res = await fetch("<?= $base ?>/subscribe.php", {
                method: "POST",
                body: data
            });
            const result = await res.json();

            if (result.success) {
                messageBox.textContent = result.message;
                messageBox.className = "mt-2 text-sm text-green-600";
                form.reset();
            } else {
                console.error("Subscription error:", result.message, "Email:", form.email.value);
                messageBox.textContent = result.message;
                messageBox.className = "mt-2 text-sm text-red-600";
            }
        } catch (err) {
            console.error("AJAX error:", err);
            messageBox.textContent = "Something went wrong. Check console logs.";
            messageBox.className = "mt-2 text-sm text-red-600";
        }
    });
</script>