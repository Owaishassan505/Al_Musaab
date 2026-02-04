<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO & Metadata -->
    <title>Fire Safety Equipment Supplier Pakistan | Al-Musaab</title>
    <meta name="description"
        content="Al-Musaab supplies fire fighting equipment across Pakistan. Fire extinguishers, alarm systems, sprinklers, hose reels, fire suits, respirators and safety training." />
    <meta name="keywords"
        content="Fire Extinguisher Pakistan, Fire Alarm System Karachi, Fire Safety Equipment, Fire Fighting Foam, Sprinkler System Pakistan" />
    <link rel="canonical" href="https://almusaab.com/fire-safety-systems/" />

    <!-- Icons -->
    <link rel="icon" href="<?= $base . '/assets/favicon.svg' ?>" sizes="any" />

    <!-- Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

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
                    }
                }
            }
        };
    </script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        #loader {
            position: fixed;
            inset: 0;
            background: white;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        #loader.hidden {
            opacity: 0;
            visibility: hidden;
        }
        .loader-spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #f97316;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Core Brand Buttons Matching Site Theme */
        .btn-query-orange {
            background-color: #f97316;
            color: #ffffff;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-size: 0.8125rem;
        }
        .btn-query-orange:hover {
            background-color: #ea580c;
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(249, 115, 22, 0.3);
        }

        .btn-query-white {
            background-color: #ffffff;
            color: #111827;
            border: 1px solid #d1d5db;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-size: 0.8125rem;
        }
        .btn-query-white:hover {
            border-color: #9ca3af;
            background-color: #f9fafb;
        }
    </style>
</head>

<body class="bg-white text-neutral-950">
    <!-- Page Loader -->
    <div id="loader">
        <div class="loader-spinner"></div>
    </div>

    <!-- Header -->
    <?php include("navbar.php"); ?>

    <!-- SIMPLE HERO SECTION (Matched to Office Connect Theme) -->
    <section id="hero" class="bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
            <!-- Text Column -->
            <div class="animate-fadeInLeft">
                <h1 class="text-5xl lg:text-6xl font-extrabold tracking-tight text-neutral-900 leading-tight">
                    <span class="text-brand-orange">Fire Safety</span> Systems for Industrial Continuity
                </h1>
                <p class="mt-8 text-xl text-gray-600 leading-relaxed max-w-xl">
                    Protect your workforce and critical infrastructure with NFPA-compliant detection and suppression systems. Engineered for zero-failure performance.
                </p>
                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="#fire-extinguishers" class="btn-query-orange">View Equipment</a>
                    <a href="<?= $base ?>/contactus" class="btn-query-white">Request Site Audit</a>
                </div>
            </div>

            <!-- Image Column -->
            <div class="animate-fadeInRight">
                <img src="<?= $base ?>/assets/images/firefighter.png" alt="Fire Safety Protection" 
                    class="w-full h-auto" />
            </div>
        </div>
    </section>

    <!-- Overview: What We Supply  -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <div>
                    <h2 class="text-2xl font-black text-brand-slate uppercase tracking-tighter mb-6 leading-none">
                        Your One-Stop Fire Safety Partner
                    </h2>
                    <div class="space-y-4 text-[15px] font-medium text-gray-500 leading-relaxed">
                        <p>
                            In the Pakistani industrial heartland, fire safety isn't just a
                            requirement — it's the technical backbone of business
                            continuity. Al-Musaab provides NFPA-compliant detection and
                            suppression systems that protect your workforce and your digital
                            infrastructure.
                        </p>
                        <p>
                            We serve as your technical partner in Karachi, Lahore, and
                            beyond, ensuring that your fire safety protocols are as advanced
                            as your networking logic. From data center gaseous suppression
                            to refinery-grade hydrant networks, we deliver zero-downtime
                            safety.
                        </p>
                    </div>
                </div>
                <div class="relative group">
                    <div class="aspect-square bg-brand-slate rounded-lg overflow-hidden border-4 border-white shadow-2xl relative z-10">
                        <img src="<?= $base ?>/assets/images/fire-safety-pro.png" alt="Fire System"
                            class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fire Extinguishers Section -->
    <section id="fire-extinguishers" class="py-16 bg-white border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-12">
                <span class="text-[10px] font-black text-brand-orange uppercase tracking-[0.4em] mb-2 block">Portable Fire Fighting</span>
                <h2 class="text-3xl font-black text-brand-slate uppercase tracking-tighter leading-none">
                    Fire Extinguishers
                </h2>
                <p class="mt-4 text-[15px] text-gray-500 font-medium max-w-3xl leading-relaxed">
                    Different fires need different extinguishers. Using the wrong type
                    can make things worse. We supply extinguishers for every fire class
                    and train your staff on proper use.
                </p>
            </div>

            <div class="mb-10 overflow-hidden border-gray-200">
                <img src="<?= $base ?>/assets/images/Fire-extinguishers-the-hub-1024x746.webp" alt="Range of Fire Extinguishers"
                    class="w-full h-80 md:h-full object-fill" />
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- CO2 Extinguisher -->
                <div class="p-6 bg-white border border-gray-200 rounded-lg hover:shadow-lg transition-all">
                    <div class="w-10 h-10 bg-brand-slate text-white rounded flex items-center justify-center mb-4">
                        <i data-lucide="zap" class="w-5 h-5"></i>
                    </div>
                    <h3 class="text-[16px] font-black text-brand-slate uppercase tracking-tighter mb-2">
                        CO2 Extinguisher
                    </h3>
                    <p class="text-[13px] text-gray-500 font-medium leading-relaxed mb-3">
                        For electrical fires. Non-conductive and leaves no residue. Safe
                        to use around computers, servers, electrical panels and
                        generators.
                    </p>
                    <span class="text-[11px] font-bold text-brand-orange uppercase tracking-wide">Class B & C Fires</span>
                </div>

                <!-- DCP Extinguisher -->
                <div class="p-6 bg-white border border-gray-200 rounded-lg hover:shadow-lg transition-all">
                    <div class="w-10 h-10 bg-brand-slate text-white rounded flex items-center justify-center mb-4">
                        <i data-lucide="flame" class="w-5 h-5"></i>
                    </div>
                    <h3 class="text-[16px] font-black text-brand-slate uppercase tracking-tighter mb-2">
                        DCP Extinguisher
                    </h3>
                    <p class="text-[13px] text-gray-500 font-medium leading-relaxed mb-3">
                        Dry Chemical Powder. The most versatile type. Works on wood,
                        paper, flammable liquids, and electrical fires. Standard choice
                        for offices and factories.
                    </p>
                    <span class="text-[11px] font-bold text-brand-orange uppercase tracking-wide">Class A, B & C Fires</span>
                </div>

                <!-- Foam Extinguisher -->
                <div class="p-6 bg-white border border-gray-200 rounded-lg hover:shadow-lg transition-all">
                    <div class="w-10 h-10 bg-brand-slate text-white rounded flex items-center justify-center mb-4">
                        <i data-lucide="droplets" class="w-5 h-5"></i>
                    </div>
                    <h3 class="text-[16px] font-black text-brand-slate uppercase tracking-tighter mb-2">
                        Foam Extinguisher
                    </h3>
                    <p class="text-[13px] text-gray-500 font-medium leading-relaxed mb-3">
                        Creates a blanket over burning liquids to smother flames. Best for
                        petrol stations, paint shops, and areas with flammable liquids.
                    </p>
                    <span class="text-[11px] font-bold text-brand-orange uppercase tracking-wide">Class A & B Fires</span>
                </div>

                <!-- Wet Chemical -->
                <div class="p-6 bg-white border border-gray-200 rounded-lg hover:shadow-lg transition-all">
                    <div class="w-10 h-10 bg-brand-slate text-white rounded flex items-center justify-center mb-4">
                        <i data-lucide="utensils" class="w-5 h-5"></i>
                    </div>
                    <h3 class="text-[16px] font-black text-brand-slate uppercase tracking-tighter mb-2">
                        Wet Chemical
                    </h3>
                    <p class="text-[13px] text-gray-500 font-medium leading-relaxed mb-3">
                        Specifically designed for kitchen fires involving cooking oils and
                        fats. Cools and creates a soapy layer to prevent re-ignition.
                    </p>
                    <span class="text-[11px] font-bold text-brand-orange uppercase tracking-wide">Class K (Kitchen) Fires</span>
                </div>
            </div>

            <div class="mt-8 p-6 bg-brand-slate text-white rounded-lg">
                <h4 class="text-[14px] font-black uppercase tracking-tight mb-2">
                    Quick Guide: Which Extinguisher for What?
                </h4>
                <div class="grid md:grid-cols-4 gap-4 text-[12px] font-medium text-gray-400">
                    <div>
                        <span class="text-brand-orange font-bold uppercase">Electrical Equipment:</span>
                        Use CO2 only. Never water or foam.
                    </div>
                    <div>
                        <span class="text-brand-orange font-bold uppercase">Paper/Wood/Fabric:</span>
                        DCP, Water, or Foam work fine.
                    </div>
                    <div>
                        <span class="text-brand-orange font-bold uppercase">Petrol/Diesel/Oil:</span>
                        Foam or DCP. Never water.
                    </div>
                    <div>
                        <span class="text-brand-orange font-bold uppercase">Kitchen Grease:</span> Wet
                        Chemical only. DCP makes it worse.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fire Ball & Quick Response -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-[10px] font-black text-brand-orange uppercase tracking-[0.4em] mb-2 block">Automatic Fire Suppression</span>
                    <h2 class="text-3xl font-black text-brand-slate uppercase tracking-tighter leading-none mb-6">
                        Fire Ball
                    </h2>
                    <p class="text-[15px] text-gray-500 font-medium leading-relaxed mb-6">
                        The Fire Ball is a self-activating fire extinguisher that requires
                        no training to use. When it comes into contact with fire, it
                        self-detonates within 3 to 5 seconds, releasing dry chemical
                        powder to suppress the flames.
                    </p>
                    <p class="text-[15px] text-gray-500 font-medium leading-relaxed mb-6">
                        It's ideal for areas where fires might start when no one is
                        around—electrical panels, storage rooms, server racks, or vehicle
                        engine compartments. Just mount it or place it in a high-risk
                        area. It does the rest automatically.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-start text-[14px] font-medium text-gray-600">
                            <i data-lucide="check-circle" class="w-4 h-4 text-brand-orange mr-3 mt-0.5 shrink-0"></i>
                            No training required—anyone can use it
                        </li>
                        <li class="flex items-start text-[14px] font-medium text-gray-600">
                            <i data-lucide="check-circle" class="w-4 h-4 text-brand-orange mr-3 mt-0.5 shrink-0"></i>
                            Self-activates on contact with flame
                        </li>
                        <li class="flex items-start text-[14px] font-medium text-gray-600">
                            <i data-lucide="check-circle" class="w-4 h-4 text-brand-orange mr-3 mt-0.5 shrink-0"></i>
                            Non-toxic and eco-friendly
                        </li>
                        <li class="flex items-start text-[14px] font-medium text-gray-600">
                            <i data-lucide="check-circle" class="w-4 h-4 text-brand-orange mr-3 mt-0.5 shrink-0"></i>
                            5-year shelf life
                        </li>
                    </ul>
                </div>
                <div class="bg-slate-100 rounded-lg p-8 relative overflow-hidden">
                    <img src="<?= $base ?>/assets/images/Fire-Extinguisher-Ball.webp" alt="Fire Ball Deployment"
                        class="w-full h-48 object-cover rounded-lg mb-6 shadow-sm" />
                    <h3 class="text-[18px] font-black text-brand-slate uppercase tracking-tighter mb-4">
                        Other Quick-Response Equipment
                    </h3>
                    <div class="space-y-4">
                        <div class="p-4 bg-white rounded border border-gray-200">
                            <h4 class="text-[14px] font-black text-brand-slate mb-1">
                                Emergency Revolving Light
                            </h4>
                            <p class="text-[12px] text-gray-500 font-medium">
                                High-visibility warning light for emergency vehicles, factory
                                floors, and evacuation routes. Available in red, amber, and
                                blue.
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded border border-gray-200">
                            <h4 class="text-[14px] font-black text-brand-slate mb-1">
                                Fire Blanket
                            </h4>
                            <p class="text-[12px] text-gray-500 font-medium">
                                Heat-resistant blanket for smothering small fires or wrapping
                                around a person whose clothes have caught fire. Essential for
                                kitchens and workshops.
                            </p>
                        </div>
                        <div class="p-4 bg-white rounded border border-gray-200">
                            <h4 class="text-[14px] font-black text-brand-slate mb-1">
                                Power Megaphone
                            </h4>
                            <p class="text-[12px] text-gray-500 font-medium">
                                For giving clear instructions during evacuations. Built-in
                                siren and whistle functions. Works in large spaces like
                                factories and warehouses.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fire Alarm & Detection Systems -->
    <section class="py-16 bg-slate-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-12">
                <span class="text-[10px] font-black text-brand-orange uppercase tracking-[0.4em] mb-2 block">Early Warning Systems</span>
                <h2 class="text-3xl font-black text-brand-slate uppercase tracking-tighter leading-none">
                    Fire Alarm & Detection
                </h2>
                <p class="mt-4 text-[15px] text-gray-500 font-medium max-w-3xl leading-relaxed">
                    Early detection saves lives. A good alarm system gives people time
                    to evacuate and firefighters time to respond before the fire
                    spreads. We supply and install both conventional and addressable
                    systems.
                </p>
            </div>

            <div class="mb-10 rounded-xl overflow-hidden shadow-sm border border-gray-200">
                <img src="<?= $base ?>/assets/images/fire-alarm.webp" alt="Fire Alarm System Components"
                    class="w-full h-64 md:h-full object-cover" />
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Smoke Detectors -->
                <div class="p-8 bg-white border border-gray-200 rounded-lg">
                    <div class="w-12 h-12 bg-brand-orange text-white rounded flex items-center justify-center mb-6">
                        <i data-lucide="radio" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-[18px] font-black text-brand-slate uppercase tracking-tighter mb-3">
                        Smoke Detectors
                    </h3>
                    <p class="text-[14px] text-gray-500 font-medium leading-relaxed mb-4">
                        Photoelectric and ionization types available. Photoelectric
                        detectors are better for slow, smoldering fires. Ionization
                        detectors respond faster to fast-flaming fires. We help you choose
                        based on your environment.
                    </p>
                    <p class="text-[12px] text-gray-400 font-bold uppercase tracking-tight">
                        Conventional & Addressable Options
                    </p>
                </div>

                <!-- Heat Detectors -->
                <div class="p-8 bg-white border border-gray-200 rounded-lg">
                    <div class="w-12 h-12 bg-brand-orange text-white rounded flex items-center justify-center mb-6">
                        <i data-lucide="thermometer" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-[18px] font-black text-brand-slate uppercase tracking-tighter mb-3">
                        Heat Detectors
                    </h3>
                    <p class="text-[14px] text-gray-500 font-medium leading-relaxed mb-4">
                        For kitchens, garages, and dusty environments where smoke
                        detectors would give false alarms. Triggers when temperature rises
                        above a set point or rises too quickly.
                    </p>
                    <p class="text-[12px] text-gray-400 font-bold uppercase tracking-tight">
                        Fixed Temperature & Rate-of-Rise
                    </p>
                </div>

                <!-- Control Panels -->
                <div class="p-8 bg-white border border-gray-200 rounded-lg">
                    <div class="w-12 h-12 bg-brand-orange text-white rounded flex items-center justify-center mb-6">
                        <i data-lucide="layout-dashboard" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-[18px] font-black text-brand-slate uppercase tracking-tighter mb-3">
                        Fire Alarm Panels
                    </h3>
                    <p class="text-[14px] text-gray-500 font-medium leading-relaxed mb-4">
                        The brain of your fire alarm system. Receives signals from
                        detectors and triggers alarms, sprinklers, and notifications.
                        Addressable panels show exactly which detector triggered.
                    </p>
                    <p class="text-[12px] text-gray-400 font-bold uppercase tracking-tight">
                        2-Zone to 32-Zone Systems
                    </p>
                </div>
            </div>

            <div class="mt-8 grid md:grid-cols-2 gap-6">
                <div class="p-6 bg-white border border-gray-200 rounded-lg">
                    <h4 class="text-[14px] font-black text-brand-slate uppercase tracking-tighter mb-2">
                        Manual Call Points
                    </h4>
                    <p class="text-[13px] text-gray-500 font-medium leading-relaxed">
                        Break-glass units installed at exits and along escape routes.
                        Allows anyone to manually trigger the alarm if they spot a fire.
                        Required by building codes at specific intervals.
                    </p>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-lg">
                    <h4 class="text-[14px] font-black text-brand-slate uppercase tracking-tighter mb-2">
                        Alarm Sounders & Strobes
                    </h4>
                    <p class="text-[13px] text-gray-500 font-medium leading-relaxed">
                        Loud sirens and flashing lights to alert everyone in the building.
                        We calculate the right number and placement to ensure the alarm is
                        heard everywhere, including noisy factory floors.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sprinkler & Suppression Systems -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-12">
                <span class="text-[10px] font-black text-brand-orange uppercase tracking-[0.4em] mb-2 block">Automatic Fire Suppression</span>
                <h2 class="text-3xl font-black text-brand-slate uppercase tracking-tighter leading-none">
                    Sprinkler & Hydrant Systems
                </h2>
            </div>

            <div class="mb-12 rounded-xl overflow-hidden shadow-sm border border-gray-200">
                <img src="<?= $base ?>/assets/images/sprinkler.webp" alt="Industrial Sprinkler and Hydrant Setup"
                    class="w-full h-64 md:h-120 object-cover" />
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-xl font-black text-brand-slate uppercase tracking-tighter mb-4">
                        Fire Sprinkler Systems
                    </h3>
                    <p class="text-[15px] text-gray-500 font-medium leading-relaxed mb-6">
                        Sprinklers are the most effective automatic fire suppression
                        method. Each sprinkler head contains a heat-sensitive element that
                        breaks at a specific temperature, releasing water directly over
                        the fire. Only the sprinklers near the fire activate—not the whole
                        building.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-slate-100 rounded flex items-center justify-center mr-4 shrink-0">
                                <i data-lucide="droplet" class="w-4 h-4 text-brand-orange"></i>
                            </div>
                            <div>
                                <h4 class="text-[14px] font-black text-brand-slate mb-1">
                                    Upright Sprinklers
                                </h4>
                                <p class="text-[12px] text-gray-500 font-medium">
                                    Water sprays upward and deflects down. For areas with
                                    exposed piping like warehouses.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-slate-100 rounded flex items-center justify-center mr-4 shrink-0">
                                <i data-lucide="droplet" class="w-4 h-4 text-brand-orange"></i>
                            </div>
                            <div>
                                <h4 class="text-[14px] font-black text-brand-slate mb-1">
                                    Pendant Sprinklers
                                </h4>
                                <p class="text-[12px] text-gray-500 font-medium">
                                    Hangs down from ceiling. Most common in offices and
                                    commercial buildings with concealed piping.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-slate-100 rounded flex items-center justify-center mr-4 shrink-0">
                                <i data-lucide="droplet" class="w-4 h-4 text-brand-orange"></i>
                            </div>
                            <div>
                                <h4 class="text-[14px] font-black text-brand-slate mb-1">
                                    Sidewall Sprinklers
                                </h4>
                                <p class="text-[12px] text-gray-500 font-medium">
                                    Mounts on wall instead of ceiling. Good for corridors and
                                    rooms where ceiling access is difficult.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-black text-brand-slate uppercase tracking-tighter mb-4">
                        Fire Hydrant System
                    </h3>
                    <p class="text-[15px] text-gray-500 font-medium leading-relaxed mb-6">
                        For large buildings and industrial sites, a hydrant system
                        provides high-pressure water supply for firefighting. Includes
                        internal hydrants (hose reels inside the building) and external
                        hydrants for fire brigade use.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-slate-100 rounded flex items-center justify-center mr-4 shrink-0">
                                <i data-lucide="rotate-cw" class="w-4 h-4 text-brand-orange"></i>
                            </div>
                            <div>
                                <h4 class="text-[14px] font-black text-brand-slate mb-1">
                                    Hose Reel
                                </h4>
                                <p class="text-[12px] text-gray-500 font-medium">
                                    Wall-mounted reel with 30m hose. For first-response
                                    firefighting by building occupants. Easy to use—just pull
                                    and turn on.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-slate-100 rounded flex items-center justify-center mr-4 shrink-0">
                                <i data-lucide="target" class="w-4 h-4 text-brand-orange"></i>
                            </div>
                            <div>
                                <h4 class="text-[14px] font-black text-brand-slate mb-1">
                                    Fire Water Monitor
                                </h4>
                                <p class="text-[12px] text-gray-500 font-medium">
                                    High-flow water cannon for industrial fires. Can be mounted
                                    on roofs or vehicles. Adjustable nozzle for different spray
                                    patterns.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-slate-100 rounded flex items-center justify-center mr-4 shrink-0">
                                <i data-lucide="gauge" class="w-4 h-4 text-brand-orange"></i>
                            </div>
                            <div>
                                <h4 class="text-[14px] font-black text-brand-slate mb-1">
                                    Fire Pump
                                </h4>
                                <p class="text-[12px] text-gray-500 font-medium">
                                    Diesel or electric pumps to maintain water pressure.
                                    Essential when city water pressure isn't enough for upper
                                    floors or large areas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Foam Systems -->
    <section class="py-16 bg-slate-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-10 rounded-xl overflow-hidden shadow-sm border border-gray-200">
                <img src="<?= $base ?>/assets/images/firewall-article-hero.png" alt="Firefighting Foam Unit"
                    class="w-full h-64 md:h-100 object-cover" />
            </div>
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <div>
                    <span class="text-[10px] font-black text-brand-orange uppercase tracking-[0.4em] mb-2 block">For Flammable Liquid Fires</span>
                    <h2 class="text-3xl font-black text-brand-slate uppercase tracking-tighter leading-none mb-6">
                        Fire Fighting Foam
                    </h2>
                    <p class="text-[15px] text-gray-500 font-medium leading-relaxed mb-6">
                        Water alone doesn't work on oil, petrol, or chemical fires—it can
                        actually spread the fire. Foam creates a blanket that smothers the
                        flames, cools the fuel, and prevents re-ignition.
                    </p>
                    <p class="text-[15px] text-gray-500 font-medium leading-relaxed mb-6">
                        We supply AFFF (Aqueous Film Forming Foam) concentrate and the
                        equipment to apply it. Essential for fuel storage areas, chemical
                        plants, airports, and any facility handling flammable liquids.
                    </p>
                    <div class="p-4 bg-white border border-gray-200 rounded">
                        <h4 class="text-[14px] font-black text-brand-slate mb-2">
                            AFFF Foam Concentrate
                        </h4>
                        <p class="text-[13px] text-gray-500 font-medium">
                            3% and 6% concentrates available. Mixed with water through
                            proportioning equipment to create firefighting foam. Effective
                            on Class A and B fires.
                        </p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="p-6 bg-white border border-gray-200 rounded-lg">
                        <h4 class="text-[16px] font-black text-brand-slate uppercase tracking-tighter mb-3">
                            High Expansion Foam Generator
                        </h4>
                        <p class="text-[13px] text-gray-500 font-medium leading-relaxed">
                            Produces massive volumes of foam to flood enclosed spaces. Used
                            in aircraft hangars, ship holds, and large storage areas. The
                            foam fills the space, cutting off oxygen and suppressing fire.
                        </p>
                    </div>
                    <div class="p-6 bg-white border border-gray-200 rounded-lg">
                        <h4 class="text-[16px] font-black text-brand-slate uppercase tracking-tighter mb-3">
                            Mobile Foam Unit
                        </h4>
                        <p class="text-[13px] text-gray-500 font-medium leading-relaxed">
                            Portable unit on wheels with foam tank, proportioner, and hose.
                            Can be moved to where it's needed. Ideal for oil terminals,
                            paint shops, boiler rooms, and petroleum tank farms.
                        </p>
                    </div>
                    <div class="p-6 bg-white border border-gray-200 rounded-lg">
                        <h4 class="text-[16px] font-black text-brand-slate uppercase tracking-tighter mb-3">
                            Foam Monitors & Nozzles
                        </h4>
                        <p class="text-[13px] text-gray-500 font-medium leading-relaxed">
                            Fixed or portable devices for directing foam onto fires from a
                            safe distance. Different nozzle types for different foam
                            expansion ratios and throw distances.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Personal Protective Equipment -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-12">
                <span class="text-[10px] font-black text-brand-orange uppercase tracking-[0.4em] mb-2 block">Protect Your People</span>
                <h2 class="text-3xl font-black text-brand-slate uppercase tracking-tighter leading-none">
                    Personal Protective Equipment
                </h2>
                <p class="mt-4 text-[15px] text-gray-500 font-medium max-w-3xl leading-relaxed">
                    For fire marshals, emergency response teams, and anyone who might
                    need to enter or escape a fire situation. Proper PPE can mean the
                    difference between life and death.
                </p>
            </div>

            <div class="mb-10 overflow-hidden">
                <img src="<?= $base ?>/assets/images/fire-suit.jpeg" alt="Fire Safety PPE Suit and Equipment"
                    class="w-full h-64 md:h-full object-cover" />
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 bg-slate-50 border border-gray-200 rounded-lg text-center">
                    <div class="w-10 h-10 bg-brand-slate text-white rounded-lg flex items-center justify-center mb-4 mx-auto">
                        <i data-lucide="shirt" class="w-5 h-5 text-brand-orange"></i>
                    </div>
                    <h3 class="text-[16px] font-black text-brand-slate uppercase tracking-tighter mb-2">
                        Aluminized Fire Suit
                    </h3>
                    <p class="text-[13px] text-gray-500 font-medium leading-relaxed">
                        Full-body suit with heat-reflective aluminum coating. Protects
                        against radiant heat up to 1000°C.
                    </p>
                </div>

                <div class="p-6 bg-slate-50 border border-gray-200 rounded-lg text-center">
                    <div class="w-10 h-10 bg-brand-slate text-white rounded-lg flex items-center justify-center mb-4 mx-auto">
                        <i data-lucide="wind" class="w-5 h-5 text-brand-orange"></i>
                    </div>
                    <h3 class="text-[16px] font-black text-brand-slate uppercase tracking-tighter mb-2">
                        Respirator Mask
                    </h3>
                    <p class="text-[13px] text-gray-500 font-medium leading-relaxed">
                        Full-face mask with filters for smoke and toxic gases. Multi-hazard protection.
                    </p>
                </div>

                <div class="p-6 bg-slate-50 border border-gray-200 rounded-lg text-center">
                    <div class="w-10 h-10 bg-brand-slate text-white rounded-lg flex items-center justify-center mb-4 mx-auto">
                        <i data-lucide="shield" class="w-5 h-5 text-brand-orange"></i>
                    </div>
                    <h3 class="text-[16px] font-black text-brand-slate uppercase tracking-tighter mb-2">
                        Fire Hood & Helmet
                    </h3>
                    <p class="text-[13px] text-gray-500 font-medium leading-relaxed">
                        Heat-resistant hood and face shield for impact and heat protection.
                    </p>
                </div>

                <div class="p-6 bg-slate-50 border border-gray-200 rounded-lg text-center">
                    <div class="w-10 h-10 bg-brand-slate text-white rounded-lg flex items-center justify-center mb-4 mx-auto">
                        <i data-lucide="footprints" class="w-5 h-5 text-brand-orange"></i>
                    </div>
                    <h3 class="text-[16px] font-black text-brand-slate uppercase tracking-tighter mb-2">
                        Firefighter Boots
                    </h3>
                    <p class="text-[13px] text-gray-500 font-medium leading-relaxed">
                        Steel-toe boots with heat-resistant, slip-resistant soles.
                    </p>
                </div>
            </div>

            <div class="mt-8 p-6 bg-brand-orange text-white rounded-lg text-center lg:text-left">
                <h4 class="text-[14px] font-black uppercase tracking-tight mb-2">
                    Emergency Escape Equipment
                </h4>
                <p class="text-[13px] font-medium leading-relaxed">
                    We also supply <strong>Smoke Escape Hoods</strong>—compact,
                    disposable masks that give 15-30 minutes of protection for building
                    occupants to evacuate through smoke.
                </p>
            </div>
        </div>
    </section>

    <!-- Training Section -->
    <section class="py-16 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="mb-12 rounded-xl overflow-hidden border border-gray-200 shadow-lg">
                <img src="<?= $base ?>/assets/images/fire-safety-training.jpeg" alt="Hands-on Fire Safety Training"
                    class="w-full h-64 md:h-full object-cover" />
            </div>
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-[10px] font-black text-brand-orange uppercase tracking-[0.4em] mb-2 block">Know What To Do</span>
                    <h2 class="text-3xl font-black text-brand-slate uppercase tracking-tighter leading-none mb-6">
                        Fire Safety Training
                    </h2>
                    <p class="text-[15px] text-gray-500 font-medium leading-relaxed mb-6 italic">
                        "Equipment is useless if your staff doesn't know how to use it—or
                        panics when they need to."
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-brand-orange mr-3 mt-0.5 shrink-0"></i>
                            <div>
                                <h4 class="text-[14px] font-black text-brand-slate mb-1 italic">Extinguisher Training</h4>
                                <p class="text-[13px] text-gray-500 font-medium leading-relaxed">Hands-on practice with live fire. Learn the PASS technique.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-brand-orange mr-3 mt-0.5 shrink-0"></i>
                            <div>
                                <h4 class="text-[14px] font-black text-brand-slate mb-1 italic">Evacuation Drills</h4>
                                <p class="text-[13px] text-gray-500 font-medium leading-relaxed">Plan and practice evacuation routes. Assign fire wardens.</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i data-lucide="check" class="w-5 h-5 text-brand-orange mr-3 mt-0.5 shrink-0"></i>
                            <div>
                                <h4 class="text-[14px] font-black text-brand-slate mb-1 italic">Marshal Training</h4>
                                <p class="text-[13px] text-gray-500 font-medium leading-relaxed">Advanced training for designated staff and coordination.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg p-8 shadow-xl">
                    <h3 class="text-[18px] font-black text-brand-slate uppercase tracking-tighter mb-6 italic border-b border-gray-100 pb-2">
                        Training Includes
                    </h3>
                    <div class="space-y-4 text-[14px] font-medium">
                        <div class="flex items-center justify-between py-3 border-b border-gray-50">
                            <span class="text-gray-600">Fire behavior and spread</span>
                            <i data-lucide="check-circle" class="w-4 h-4 text-brand-orange"></i>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-gray-50">
                            <span class="text-gray-600">Fire classes and responses</span>
                            <i data-lucide="check-circle" class="w-4 h-4 text-brand-orange"></i>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-gray-50">
                            <span class="text-gray-600">Equipment operation</span>
                            <i data-lucide="check-circle" class="w-4 h-4 text-brand-orange"></i>
                        </div>
                        <div class="flex items-center justify-between py-3 border-b border-gray-50">
                            <span class="text-gray-600">Evacuation procedures</span>
                            <i data-lucide="check-circle" class="w-4 h-4 text-brand-orange"></i>
                        </div>
                        <div class="flex items-center justify-between py-3">
                            <span class="text-gray-600">First aid protocols</span>
                            <i data-lucide="check-circle" class="w-4 h-4 text-brand-orange"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between border border-gray-200 rounded-lg p-8 shadow-xl group">
            <div class="mb-4 md:mb-0">
                <h4 class="text-[18px] font-black uppercase tracking-tighter text-brand-slate mb-1">
                    Need Fire Safety Equipment?
                </h4>
                <p class="text-[14px] text-gray-500 font-medium">
                    Get a free site assessment and quotation. We deliver across Pakistan.
                </p>
            </div>
            <a href="<?= $base ?>/contactus" class="btn-query-orange">Request Quote</a>
        </div>
    </section>

    <!-- Footer -->
    <?php include("footer.php"); ?>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Hide loader after page load
        window.addEventListener('load', () => {
            const loader = document.getElementById('loader');
            if (loader) {
                setTimeout(() => {
                    loader.classList.add('hidden');
                }, 500);
            }
        });
    </script>
</body>

</html>
