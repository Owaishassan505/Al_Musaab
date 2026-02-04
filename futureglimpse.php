<?php $base = "" ?><!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>The Future Glimpse | Al Musaab</title>
    <meta name="description"
        content="Explore the frontier of technology with Al Musaab. Immersive AR/VR, Predictive AI, and Next-Gen Networking solutions." />
    
    <!-- Google Fonts: Inter for that clean, professional Microsoft/QueryTel look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
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
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    },
                    animation: {
                        fadeInUp: 'fadeInUp 0.8s ease-out forwards',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            color: #111827;
            overflow-x: hidden;
        }

        /* QueryTel Button Styles */
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

        /* Gradient Text */
        .text-gradient-blue {
            background: linear-gradient(to right, #2563eb, #1e40af);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Glassmorphism Sections */
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.07);
        }

        /* Globe Container Fix */
        #globe-container canvas {
            pointer-events: none !important;
            position: absolute !important;
            inset: 0 !important;
            opacity: 0.6;
        }

        .section-padding {
            padding-top: 6rem;
            padding-bottom: 6rem;
        }

        /* Microsoft-style Layout Overlays */
        .hero-overlay {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.95) 0%, rgba(15, 23, 42, 0.7) 100%);
        }
    </style>
</head>

<body class="selection:bg-blue-600 selection:text-white">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GG72GW" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include('navbar.php'); ?>

    <!-- PREMIUM VIDEO HERO SECTION (Microsoft Style) -->
    <header class="relative min-h-[90vh] flex items-center overflow-hidden bg-brand-slate text-white">
        <!-- Background Asset (High Fidelity Texture) -->
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="w-full h-full object-cover">
                <source src="<?= $base ?>/assets/video/OfficeTechnologyConnection(1080p,h264)(1).mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 hero-overlay"></div>
        </div>

        <div class="container mx-auto px-6 relative z-20 grid lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fadeInUp">
                <span class="inline-block py-1 px-3 rounded-full bg-blue-600/20 border border-blue-500/30 text-blue-400 text-xs font-bold tracking-widest uppercase mb-6">
                    Vision 2030 Initialized
                </span>
                <h1 class="text-5xl lg:text-7xl font-extrabold leading-tight mb-6">
                    Tomorrow's <br>Technology, <br> <span class="text-brand-orange">Delivered Today.</span>
                </h1>
                <p class="text-xl text-gray-300 mb-10 max-w-lg leading-relaxed">
                    Al Musaab is redefining the frontier of information technology. From immersive workspaces to predictive infrastructure, we build the systems that power the next era of business.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#solutions" class="btn-query-orange">Explore Solutions</a>
                    <a href="/contactus" class="btn-query-white !bg-transparent !text-white !border-white/30 hover:!bg-white/10">Request a Briefing</a>
                </div>
            </div>

            <!-- Integrated Globe Visual -->
            <div class="relative h-[500px] hidden lg:block">
                <div id="globe-container" class="absolute inset-0 w-full h-full"></div>
            </div>
        </div>
    </header>

    <!-- THE FRONTIER PILLARS (Redesigned Mosaic) -->
    <section id="solutions" class="section-padding bg-gray-50 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:40px_40px]">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mb-20">
                <div class="flex items-center gap-4 mb-4">
                    <div class="h-px w-12 bg-blue-600"></div>
                    <h2 class="text-sm font-bold text-blue-600 uppercase tracking-widest">Innovation Ecosystem</h2>
                </div>
                <h3 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-8 leading-[1.1]">The Stack That Will <br><span class="text-gradient-blue">Define The Decade.</span></h3>
                <p class="text-lg text-gray-600 leading-relaxed max-w-2xl">
                    Our R&D roadmap focuses on the intersection of human cognitive intent and machine execution speed. We aren't just deploying tech; we're architecting future workflows.
                </p>
            </div>

            <div class="grid lg:grid-cols-12 gap-6 items-stretch">
                <!-- LEADING PILLAR: AR/VR (Mosaic Hero) -->
                <div class="lg:col-span-7 group relative overflow-hidden bg-white rounded-3xl border border-gray-200 shadow-sm transition-all hover:shadow-2xl hover:border-blue-200">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500/5 rounded-full blur-3xl -mr-20 -mt-20"></div>
                    <div class="p-10 relative z-10 h-full flex flex-col">
                        <div class="flex justify-between items-start mb-12">
                            <div class="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center shadow-lg transform group-hover:rotate-12 transition-transform">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                            </div>
                            <div class="text-right">
                                <span class="block text-[10px] font-black text-blue-600 uppercase tracking-tighter opacity-40">Status: Active Deployment</span>
                                <span class="block text-2xl font-bold text-gray-900">01</span>
                            </div>
                        </div>
                        <h4 class="text-3xl font-extrabold text-gray-900 mb-6 uppercase tracking-tight">Immersive Presence</h4>
                        <p class="text-gray-600 mb-10 text-lg leading-relaxed max-w-md">
                            Eliminating geographical barriers through spatial computing. We deploy head-worn infrastructure that allows teams to manipulate 3D twins of their physical operations in real-time.
                        </p>
                        
                        <div class="mt-auto grid grid-cols-2 md:grid-cols-4 gap-4 border-t border-gray-100 pt-8">
                            <div class="space-y-1">
                                <span class="text-[10px] font-bold text-gray-400 uppercase">Latency</span>
                                <p class="text-sm font-bold text-blue-600">< 11ms</p>
                            </div>
                            <div class="space-y-1">
                                <span class="text-[10px] font-bold text-gray-400 uppercase">Engine</span>
                                <p class="text-sm font-bold text-gray-700">OpenXR / Unity</p>
                            </div>
                            <div class="space-y-1">
                                <span class="text-[10px] font-bold text-gray-400 uppercase">Security</span>
                                <p class="text-sm font-bold text-gray-700">AES-256V</p>
                            </div>
                            <div class="space-y-1">
                                <span class="text-[10px] font-bold text-gray-400 uppercase">Tier</span>
                                <p class="text-sm font-bold text-gray-700">Enterprise+</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECOND PILLAR: AI (Mosaic Side) -->
                <div class="lg:col-span-5 group bg-brand-slate text-white rounded-3xl border border-gray-800 p-10 flex flex-col hover:bg-[#161e31] transition-colors relative overflow-hidden">
                    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-brand-orange/10 to-transparent"></div>
                    <div class="flex justify-between items-start mb-12">
                        <div class="w-16 h-16 bg-brand-orange text-white rounded-2xl flex items-center justify-center shadow-lg shadow-orange-500/20 group-hover:scale-110 transition-transform">
                            <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.989-2.386l-.548-.547z"></path></svg>
                        </div>
                        <span class="text-2xl font-bold opacity-20">02</span>
                    </div>
                    <h4 class="text-2xl font-extrabold mb-4 uppercase tracking-tight">Agentic AI Swarms</h4>
                    <p class="text-gray-400 mb-8 leading-relaxed">
                        Beyond basic automation. Our AI agents monitor network health, manage security patches, and optimize power consumption autonomously.
                    </p>
                    <div class="mt-auto flex flex-wrap gap-2 pt-6 border-t border-white/5">
                        <span class="px-3 py-1 bg-white/5 rounded-full text-[10px] font-bold uppercase tracking-wider text-orange-400">Deep Meta</span>
                        <span class="px-3 py-1 bg-white/5 rounded-full text-[10px] font-bold uppercase tracking-wider text-white/60">Auto-Heal</span>
                        <span class="px-3 py-1 bg-white/5 rounded-full text-[10px] font-bold uppercase tracking-wider text-white/60">Edge-Local</span>
                    </div>
                </div>

                <!-- THIRD PILLAR: Networking (Mosaic Full Width Row) -->
                <div class="lg:col-span-5 group bg-white rounded-3xl border border-gray-200 p-10 flex flex-col hover:border-blue-600/30 transition-all">
                    <div class="flex justify-between items-start mb-8">
                        <div class="w-14 h-14 bg-gray-100 text-gray-900 rounded-xl flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071a9.05 9.05 0 0112.728 0m-15.557-2.828a13.58 13.58 0 0119.092 0"></path></svg>
                        </div>
                        <span class="text-2xl font-bold text-gray-100 group-hover:text-blue-600/10 transition-colors">03</span>
                    </div>
                    <h4 class="text-2xl font-extrabold text-gray-900 mb-4 uppercase tracking-tight">Ubiquitous Connectivity</h4>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Data at the speed of thought. 100G industrial backbones and private wireless networks.
                    </p>
                    <div class="mt-auto space-y-3">
                        <div class="flex justify-between items-center text-xs">
                            <span class="font-bold text-gray-400 uppercase">Coverage Density</span>
                            <span class="font-black text-gray-900">99.999%</span>
                        </div>
                        <div class="w-full bg-gray-100 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-blue-600 h-full w-[99%]" style="width: 99.999%"></div>
                        </div>
                    </div>
                </div>

                <!-- FOURTH BLOCK: Statistics / Visual Break -->
                <div class="lg:col-span-7 bg-gradient-to-br from-blue-700 to-indigo-900 rounded-3xl p-10 text-white relative overflow-hidden flex items-center">
                    <div class="absolute inset-0 opacity-10 animate-pulse bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
                    <div class="relative z-10 w-full grid grid-cols-2 md:grid-cols-3 gap-8">
                        <div>
                            <p class="text-4xl font-black mb-1">10X</p>
                            <p class="text-xs uppercase font-bold tracking-widest text-blue-200">Processing Speed</p>
                        </div>
                        <div>
                            <p class="text-4xl font-black mb-1">ZERO</p>
                            <p class="text-xs uppercase font-bold tracking-widest text-blue-200">Downtime Target</p>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <p class="text-4xl font-black mb-1">2030</p>
                            <p class="text-xs uppercase font-bold tracking-widest text-blue-200">Roadmap Ready</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FULL-WIDTH CONTENT BREAK (Microsoft Style Image/Video) -->
    <section class="relative h-[600px] bg-brand-slate overflow-hidden">
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-50">
            <source src="<?= $base ?>/assets/video/Yealink.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-r from-brand-slate via-brand-slate/40 to-transparent"></div>
        <div class="relative z-10 container mx-auto px-6 h-full flex items-center">
            <div class="max-w-2xl text-white animate-fadeInUp">
                <h3 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">Technology in Motion</h3>
                <p class="text-lg text-gray-300 mb-8 leading-relaxed">
                    We don't just talk about the future; we build it. Our production environments feature the latest in Yealink collaboration, Fortinet security, and high-performance computation hardware.
                </p>
                <div class="flex gap-4">
                    <a href="/aboutus" class="btn-query-orange">Learn About Our Process</a>
                </div>
            </div>
        </div>
    </section>

    <!-- STRATEGIC ROADMAP (Microsoft Style Clean) -->
    <section class="section-padding bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <h2 class="text-sm font-bold text-blue-600 uppercase tracking-widest mb-4">Growth Timeline</h2>
                <h3 class="text-4xl font-extrabold text-gray-900 mb-6">Our Roadmap to 2030</h3>
                <p class="text-gray-600 text-lg">A phased approach to deploying frontier technology across the region.</p>
            </div>

            <div class="relative">
                <!-- Center Line -->
                <div class="absolute left-1/2 top-0 bottom-0 w-px bg-gray-200 hidden md:block"></div>

                <div class="space-y-12">
                    <!-- 2026 -->
                    <div class="relative flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 text-center md:text-right">
                            <h4 class="text-3xl font-extrabold text-blue-600 mb-2">2026</h4>
                            <p class="text-xl font-bold text-gray-900 mb-2">Omnipresent AR</p>
                            <p class="text-gray-600">Universal deployment of AR support across all Al Musaab managed infrastructures.</p>
                        </div>
                        <div class="w-4 h-4 rounded-full bg-blue-600 relative z-10 hidden md:block"></div>
                        <div class="md:w-1/2"></div>
                    </div>

                    <!-- 2027 -->
                    <div class="relative flex flex-col md:flex-row-reverse items-center gap-8">
                        <div class="md:w-1/2 text-center md:text-left">
                            <h4 class="text-3xl font-extrabold text-brand-orange mb-2">2027</h4>
                            <p class="text-xl font-bold text-gray-900 mb-2">Agentic Business</p>
                            <p class="text-gray-600">Full integration of autonomous AI agents into core ERP and logistics platforms.</p>
                        </div>
                        <div class="w-4 h-4 rounded-full bg-brand-orange relative z-10 hidden md:block"></div>
                        <div class="md:w-1/2"></div>
                    </div>

                    <!-- 2028+ -->
                    <div class="relative flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 text-center md:text-right">
                            <h4 class="text-3xl font-extrabold text-gray-900 mb-2">2028+</h4>
                            <p class="text-xl font-bold text-gray-900 mb-2">The Ubiquitous Cloud</p>
                            <p class="text-gray-600">Zero-latency edge computation for real-time remote robotics and surgical applications.</p>
                        </div>
                        <div class="w-4 h-4 rounded-full bg-gray-900 relative z-10 hidden md:block"></div>
                        <div class="md:w-1/2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="section-padding bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-6">Ready to Glimpse Your Future?</h2>
            <p class="text-lg text-gray-600 mb-10 max-w-2xl mx-auto">
                Join the leading businesses in Pakistan that are already using Al Musaab's frontier technology to gain a competitive edge.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/contactus" class="btn-query-orange">Contact Sales Team</a>
                <a href="#solutions" class="btn-query-dark">View Solutions</a>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <!-- THREE.JS GLOBE SCRIPT (Optimized) -->
    <script type="importmap">
    {
      "imports": {
        "three": "https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js"
      }
    }
    </script>
    <script type="module">
        import * as THREE from "https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js";
        import { OrbitControls } from "https://cdn.jsdelivr.net/npm/three@0.160.0/examples/jsm/controls/OrbitControls.js";

        const container = document.getElementById("globe-container");
        if (container) {
            let renderer, scene, camera, globe, ring, starsGeo, controls, animationId;
            let initialized = false;

            const initGlobe = () => {
                scene = new THREE.Scene();
                camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 2000);
                camera.position.set(0, 0, 4);

                renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true, powerPreference: "high-performance" });
                renderer.setPixelRatio(window.devicePixelRatio > 2 ? 2 : window.devicePixelRatio);
                renderer.setSize(container.clientWidth, container.clientHeight);
                container.appendChild(renderer.domElement);

                // Globe
                const texture = new THREE.TextureLoader().load("https://raw.githubusercontent.com/jeromeetienne/threex.planets/master/images/earthmap1k.jpg");
                globe = new THREE.Mesh(
                    new THREE.SphereGeometry(1.2, 32, 32),
                    new THREE.MeshStandardMaterial({ 
                        map: texture, 
                        emissive: 0x1e40af, 
                        emissiveIntensity: 0.15,
                        metalness: 0.2,
                        roughness: 0.8
                    })
                );
                scene.add(globe);

                // Atmosphere
                const atmosphere = new THREE.Mesh(
                    new THREE.SphereGeometry(1.24, 32, 32),
                    new THREE.MeshPhongMaterial({ color: 0x3b82f6, transparent: true, opacity: 0.15, blending: THREE.AdditiveBlending, side: THREE.BackSide })
                );
                scene.add(atmosphere);

                // Lights
                scene.add(new THREE.AmbientLight(0xffffff, 0.7));
                const light = new THREE.PointLight(0xffffff, 1.5);
                light.position.set(10, 10, 10);
                scene.add(light);

                // Controls
                controls = new OrbitControls(camera, renderer.domElement);
                controls.enableZoom = false; 
                controls.enablePan = false; 
                controls.autoRotate = true; 
                controls.autoRotateSpeed = 0.5;

                window.addEventListener("resize", onResize);
                animate();
                initialized = true;
            };

            const onResize = () => {
                camera.aspect = container.clientWidth / container.clientHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(container.clientWidth, container.clientHeight);
            };

            const animate = () => {
                animationId = requestAnimationFrame(animate);
                globe.rotation.y += 0.001;
                controls.update();
                renderer.render(scene, camera);
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        if (!initialized) initGlobe();
                        else if (!animationId) animate();
                    } else {
                        if (animationId) {
                            cancelAnimationFrame(animationId);
                            animationId = null;
                        }
                    }
                });
            }, { threshold: 0.1 });

            observer.observe(container);
        }
    </script>
</body>

</html>