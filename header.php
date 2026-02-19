<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Show de manipulación láser único en Latinoamérica. 15 años transformando fiestas nacionales, eventos corporativos y festivales con tecnología de vanguardia.">

    <!-- Open Graph -->
    <meta property="og:title" content="DK LASERMAN | El Show Láser #1 de Argentina">
    <meta property="og:description" content="El único espectáculo de manipulación láser en vivo de Latinoamérica para eventos de alto nivel.">
    <meta property="og:image" content="https://laserman.com.ar/wp-content/uploads/2025/12/Video_Realista_Backstage_Subida_Escenario.mp4_snapshot_00.07.721.jpg">
    <meta property="og:type" content="website">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WQD926FF');</script>
    <!-- End Google Tag Manager -->

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1323852599172314');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1323852599172314&ev=PageView&noscript=1"/></noscript>
    <!-- End Meta Pixel Code -->

    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WBKCLZNN');</script>
    <!-- End Google Tag Manager -->

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1323852599172314');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1323852599172314&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->

    <style>
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            background-color: #090f0a;
            color: #ffffff;
            font-family: 'DM Sans', sans-serif;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            letter-spacing: -0.02em;
        }

        .neon-glow {
            text-shadow: 0 0 10px rgba(0, 255, 29, 0.5), 0 0 20px rgba(0, 255, 29, 0.3);
        }
        .neon-box {
            box-shadow: 0 0 30px rgba(0, 255, 29, 0.2);
        }
        
        .bg-pattern {
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(0, 255, 29, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 50%, rgba(0, 255, 29, 0.03) 0%, transparent 50%);
        }
        
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .card-hover:hover {
            transform: translateY(-8px);
        }
        
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
            pointer-events: none;
        }
        .mobile-menu.open {
            transform: translateX(0);
            pointer-events: auto;
        }

        /* Márgenes responsivos para móvil - fotos más grandes */
        @media (max-width: 767px) {
            .section-mobile-adjust {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
            .grid-mobile-adjust {
                gap: 0.5rem !important;
            }
            .card-mobile-adjust {
                padding: 1.25rem !important;
            }
        }
        
        @keyframes glowPulse {
            0%, 100% { box-shadow: 0 0 20px rgba(0, 255, 29, 0.3); }
            50% { box-shadow: 0 0 40px rgba(0, 255, 29, 0.6); }
        }
        .animate-glow-pulse {
            animation: glowPulse 2s ease-in-out infinite;
        }
        
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #090f0a; }
        ::-webkit-scrollbar-thumb { background: #00ff1d33; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #00ff1d66; }
    </style>
</head>

<body <?php body_class('bg-pattern'); ?>>

<?php wp_body_open(); ?>

<?php $data = dk_get_site_data(); ?>

<!-- HEADER -->
<header id="header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        
        <!-- Logo -->
        <a href="#inicio" class="flex items-center gap-3 group">
            <div class="w-2 h-2 bg-neon rounded-full animate-pulse shadow-[0_0_10px_#00ff1d]"></div>
            <span class="font-display font-bold text-lg tracking-wider">
                DK <span class="text-neon neon-glow">LASERMAN</span>
            </span>
        </a>
        
        <!-- Nav Desktop -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="#servicios" class="text-[10px] text-white/40 hover:text-neon transition-colors uppercase tracking-[0.3em]">Servicios</a>
            <a href="#galeria" class="text-[10px] text-white/40 hover:text-neon transition-colors uppercase tracking-[0.3em]">Videos</a>
            <a href="#clientes" class="text-[10px] text-white/40 hover:text-neon transition-colors uppercase tracking-[0.3em]">Trayectoria</a>
            <a href="#contacto"
               onclick="trackEvent('InitiateContact', {method: 'nav_click', source: 'header'})"
               class="px-6 py-2 bg-neon text-black text-[9px] font-black uppercase tracking-widest hover:scale-105 transition-transform">
                Cotizar
            </a>
        </nav>
        
        <!-- Hamburger Mobile -->
        <button class="md:hidden text-white p-2" onclick="toggleMobileMenu()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

</header>

<!-- Mobile Menu (fuera del header para evitar superposición) -->
<div id="mobileMenu" class="mobile-menu fixed inset-0 bg-black/98 z-[9999] flex flex-col items-center justify-center gap-8 md:hidden">
    <button onclick="toggleMobileMenu()" class="absolute top-6 right-6 text-white/50 hover:text-neon transition-colors">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
    <a href="#servicios" onclick="toggleMobileMenu()" class="text-2xl font-display font-bold text-white hover:text-neon transition-colors">Servicios</a>
    <a href="#galeria" onclick="toggleMobileMenu()" class="text-2xl font-display font-bold text-white hover:text-neon transition-colors">Videos</a>
    <a href="#clientes" onclick="toggleMobileMenu()" class="text-2xl font-display font-bold text-white hover:text-neon transition-colors">Trayectoria</a>
    <a href="#testimonios" onclick="toggleMobileMenu()" class="text-2xl font-display font-bold text-white hover:text-neon transition-colors">Testimonios</a>
    <a href="#contacto" onclick="toggleMobileMenu(); trackEvent('InitiateContact', {method: 'mobile_menu', source: 'header'})" class="px-8 py-3 bg-neon text-black font-bold uppercase tracking-wide hover:bg-white transition-colors">Cotizar Ahora</a>
</div>

<main>
