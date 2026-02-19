<?php
/**
 * DK Laserman Theme - Functions CLEAN VERSION
 *
 * @package DK_Laserman
 * @version 2026.01.27
 *
 * TRACKING: Solo dataLayer.push() - GTM maneja todo
 */

if (!defined('ABSPATH')) exit;

/**
 * Theme Setup
 */
function dk_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => __('Menú Principal', 'dk-laserman'),
    ));
}
add_action('after_setup_theme', 'dk_setup');

/**
 * Enqueue Scripts & Styles
 */
function dk_scripts() {
    // Google Fonts
    wp_enqueue_style('dk-fonts', 'https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&family=DM+Sans:wght@100..1000&display=swap', array(), null);

    // Tailwind CSS
    wp_enqueue_script('tailwindcss', 'https://cdn.tailwindcss.com', array(), '3.4', false);

    // Theme styles
    wp_enqueue_style('dk-style', get_stylesheet_uri(), array(), '2026.01');

    // Tailwind config
    wp_add_inline_script('tailwindcss', "
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['DM Sans', 'sans-serif'],
                        display: ['Unbounded', 'sans-serif'],
                    },
                    colors: {
                        neon: '#00ff1d',
                        dark: '#090f0a',
                        surface: '#0c140d'
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'glow-pulse': 'glowPulse 2s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        glowPulse: {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(0, 255, 29, 0.3)' },
                            '50%': { boxShadow: '0 0 40px rgba(0, 255, 29, 0.6)' },
                        }
                    }
                }
            }
        }
    ");
}
add_action('wp_enqueue_scripts', 'dk_scripts');

/**
 * Site Data Configuration
 */
function dk_get_site_data() {
    $uploads = 'https://laserman.com.ar/wp-content/uploads/2025';
    $uploads_old = 'https://laserman.com.ar/inicio/wp-content/uploads/2025/08';

    return array(
        // Contact
        'whatsapp' => '+5492995920418',
        'whatsapp_display' => '299 592 0418',
        'email' => 'info@laserman.com.ar',
        'phone' => '+54 9 299 592 0418',
        'location' => 'Neuquén, Patagonia Argentina',
        'instagram' => 'https://www.instagram.com/laseryshow/',

        // Images
        'hero_image' => 'https://laserman.com.ar/wp-content/uploads/2026/01/Video_Realista_Backstage_Subida_Escenario.mp4_snapshot_00.07.721.jpg',
        'tuneles_image' => $uploads . '/12/Imagen-de-WhatsApp-2025-05-12-a-las-20.07.43_2440bd38.jpg',
        'mapping_image' => $uploads . '/12/IMG-20251104-WA0002.jpg',
        'sponsors_image' => $uploads . '/12/IMG-20250809-WA00121.jpg',
        'custom_image' => $uploads . '/12/Generated-Image-October-29-2025-8_45AM-e1765355240381.png',

        // Videos
        'laserman_video' => 'https://youtube.com/shorts/UejPB4htjps',
        'tuneles_video' => 'https://youtube.com/shorts/ToSEWX40VYk',

        // Logos
        'logo_rionegro' => 'https://laserman.com.ar/wp-content/uploads/2026/01/LOGO-rio-negro.png',
        'logo_misiones' => 'https://laserman.com.ar/wp-content/uploads/2026/01/LOGO-misiones.png',
        'logo_formosa' => 'https://laserman.com.ar/wp-content/uploads/2026/01/LOGO-formosa.png',
        'logo_neuquen' => 'https://laserman.com.ar/wp-content/uploads/2026/01/LOGO-NEUQUEN2.png',

        // Brand logos
        'brand_logos' => array(
            $uploads_old . '/klipartz.com_.png',
            $uploads_old . '/sancor-2-scaled.png',
            $uploads_old . '/banco-patagonia.png',
            $uploads_old . '/bpn-nuestro.png',
            $uploads_old . '/logo-casinos-del-rio.png',
        ),

        // Stats
        'stats' => array(
            array('number' => '15+', 'label' => 'Años'),
            array('number' => '50+', 'label' => 'Fiestas Nacionales'),
            array('number' => '∞', 'label' => 'Momentos Únicos'),
        ),

        // Services
        'services' => array(
            array(
                'id' => 'laserman',
                'icon' => '⚡',
                'title' => 'Show Laserman',
                'description' => 'El único en Argentina - Performance futurista con rayos láser en vivo',
                'image' => 'https://laserman.com.ar/wp-content/uploads/2026/01/ChatGPT-Image-20-ene-2026-05_23_02-p.m.png',
            ),
            array(
                'id' => 'tuneles',
                'icon' => '🚪',
                'title' => 'Túneles de Ingreso',
                'description' => 'Transformá la entrada en una experiencia inmersiva de luz',
                'image' => $uploads . '/12/Imagen-de-WhatsApp-2025-05-12-a-las-20.07.43_2440bd38.jpg',
            ),
            array(
                'id' => 'mapping',
                'icon' => '🏔️',
                'title' => 'Mapping Láser',
                'description' => 'Proyecciones sobre edificios, monumentos y montañas',
                'image' => $uploads . '/12/IMG-20251104-WA0002.jpg',
            ),
            array(
                'id' => 'sponsors',
                'icon' => '💰',
                'title' => 'Sponsors & Marcas',
                'description' => 'Logos proyectados a escala monumental para patrocinadores',
                'image' => $uploads . '/12/IMG-20250809-WA00121.jpg',
            ),
            array(
                'id' => 'custom',
                'icon' => '🎨',
                'title' => 'Experiencia Custom',
                'description' => 'Co-creamos experiencias únicas según tu visión',
                'image' => '',
            ),
        ),

        // Festivals
        'festivals' => array(
            array('name' => 'Fiesta del Chocolate', 'location' => 'Bariloche, Río Negro'),
            array('name' => 'Fiesta del Pionero', 'location' => 'Centenario, Neuquén'),
            array('name' => 'Fiesta de la Navidad', 'location' => 'Leandro N. Alem, Misiones'),
            array('name' => 'Fiesta del Tomate', 'location' => 'Lamarque, Río Negro'),
            array('name' => 'Fiesta del Chef Patagónico', 'location' => 'Villa Pehuenia, Neuquén'),
            array('name' => 'Fiesta de la Actividad Física', 'location' => 'Cipolletti, Río Negro'),
        ),

        // Testimonials
        'testimonials' => array(
            array(
                'quote' => 'Rompimos los moldes de lo tradicional. Fue algo disruptivo que logró captar la atención, sobre todo de los jóvenes.',
                'name' => 'Julieta Corroza',
                'role' => 'Ministra de Desarrollo Humano, Neuquén',
            ),
            array(
                'quote' => 'Nunca se vio algo así. Es único, innovador. La gente filma, saca fotos. Las proyecciones se viralizan solas.',
                'name' => 'Juan Cruz',
                'role' => 'Jefe de Prensa, Fiesta del Pionero',
            ),
            array(
                'quote' => 'La profesionalidad y el impacto del show superaron nuestras expectativas. Fue el punto más comentado del evento.',
                'name' => 'Productora de Shows',
                'role' => 'Buenos Aires',
            ),
        ),

        // Segments
        'segments' => array(
            array(
                'id' => 'municipal',
                'icon' => '🏛️',
                'title' => 'Fiesta Nacional',
                'subtitle' => 'Municipal, Provincial',
                'quality' => 'hot',
                'enabled' => true,
            ),
            array(
                'id' => 'corporativo',
                'icon' => '🏢',
                'title' => 'Corporativo',
                'subtitle' => 'Empresas, Lanzamientos',
                'quality' => 'hot',
                'enabled' => true,
            ),
            array(
                'id' => 'festival',
                'icon' => '🎤',
                'title' => 'Festival',
                'subtitle' => 'Productores, Boliches',
                'quality' => 'hot',
                'enabled' => true,
            ),
            array(
                'id' => 'social',
                'icon' => '🎂',
                'title' => 'Evento Social',
                'subtitle' => '15 años, Casamientos',
                'quality' => 'excluded',
                'enabled' => false,
            ),
        ),
    );
}

/**
 * Footer Scripts - SOLO TRACKING CON DATALAYER
 * GTM se encarga del resto (Meta Pixel, GA4, etc.)
 */
function dk_footer_scripts() {
    ?>
    <script>
    // ==========================================
    // TRACKING LIMPIO - Solo dataLayer.push()
    // ==========================================

    // Generar event_id único para deduplicación
    function generateEventId() {
        const timestamp = Date.now();
        const random = Math.random().toString(36).substr(2, 9);
        return `laserman_${timestamp}_${random}`;
    }

    // Leer cookie (para capturar _fbp y _fbc)
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
        return null;
    }

    // Función de tracking - SOLO dataLayer.push()
    function trackEvent(eventName, params = {}) {
        // Generar event_id si no existe
        if (!params.event_id) {
            params.event_id = generateEventId();
        }

        const eventData = {
            event: eventName,
            ...params
        };

        console.log('📊 Event:', eventName, eventData);

        // SOLO dataLayer - GTM maneja el resto
        if (window.dataLayer) {
            window.dataLayer.push(eventData);
        }
    }

    // Capturar user_data completo (solo en formulario)
    function getUserData() {
        return {
            fbp: getCookie('_fbp'),
            fbc: getCookie('_fbc')
            // IP y User Agent se capturan automáticamente en GTM Server
        };
    }

    // ==========================================
    // INITIALIZATION
    // ==========================================
    document.addEventListener('DOMContentLoaded', function() {

        // Header scroll effect
        const header = document.getElementById('header');
        if (header) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('bg-black/95', 'backdrop-blur-md', 'border-b', 'border-white/5');
                } else {
                    header.classList.remove('bg-black/95', 'backdrop-blur-md', 'border-b', 'border-white/5');
                }
            });
        }

        // Fade in animations
        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

        // Track PageView
        trackEvent('PageView', {
            page_title: document.title,
            page_url: window.location.href,
            page_path: window.location.pathname
        });

        // Scroll depth tracking
        let scrollTracked = { 25: false, 50: false, 75: false, 100: false };
        window.addEventListener('scroll', () => {
            const scrollPercent = Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100);
            [25, 50, 75, 100].forEach(threshold => {
                if (scrollPercent >= threshold && !scrollTracked[threshold]) {
                    scrollTracked[threshold] = true;
                    trackEvent('ScrollDepth', { depth: threshold });
                }
            });
        });

        // Time on page tracking
        let timeOnPage = 0;
        setInterval(() => {
            timeOnPage += 30;
            if (timeOnPage === 60) trackEvent('TimeOnPage', { seconds: 60 });
            if (timeOnPage === 180) trackEvent('TimeOnPage', { seconds: 180 });
        }, 30000);

        // Active nav link effect
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                if (window.scrollY >= section.offsetTop - 100) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('text-neon');
                link.classList.add('text-white/60');
                if (link.getAttribute('data-section') === current) {
                    link.classList.add('text-neon');
                    link.classList.remove('text-white/60');
                }
            });
        });

        // ==========================================
        // FORM SUBMIT - CRÍTICO PARA META CAPI
        // ==========================================
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(contactForm);
                const data = {
                    nombre: formData.get('nombre'),
                    email: formData.get('email'),
                    telefono: formData.get('telefono'),
                    servicio: formData.get('servicio')
                };

                // Get segment from session if available
                const userSegment = sessionStorage.getItem('user_segment') || data.servicio;
                const leadQuality = sessionStorage.getItem('lead_quality') || 'warm';

                // Show loading
                const submitBtn = document.getElementById('submitBtn');
                const btnText = document.getElementById('btnText');
                const btnSpinner = document.getElementById('btnSpinner');
                const formSuccess = document.getElementById('formSuccess');
                const formError = document.getElementById('formError');

                btnText.textContent = 'Enviando...';
                btnSpinner.classList.remove('hidden');
                submitBtn.disabled = true;
                formSuccess.classList.add('hidden');
                formError.classList.add('hidden');

                // Track FormSubmit event
                trackEvent('FormSubmit', {
                    form_name: 'contact_form',
                    segment_type: userSegment,
                    service_interest: data.servicio,
                    lead_quality: leadQuality
                });

                // Track as Lead (evento estándar de Meta)
                trackEvent('Lead', {
                    event_id: eventId,
                    user_data: userData,
                    content_name: 'contact_form',
                    content_category: userSegment,
                    value: data.servicio === 'paquete' ? 100 : 50,
                    currency: 'ARS'
                });

                // Save to localStorage
                try {
                    let leads = JSON.parse(localStorage.getItem('dk_leads') || '[]');
                    leads.push({
                        ...data,
                        timestamp: new Date().toISOString(),
                        segment: userSegment
                    });
                    localStorage.setItem('dk_leads', JSON.stringify(leads));
                } catch(e) {}

                // Simulate successful submission (replace with real endpoint if needed)
                setTimeout(() => {
                    // Success
                    btnText.textContent = '¡Enviado!';
                    btnSpinner.classList.add('hidden');
                    formSuccess.classList.remove('hidden');
                    contactForm.reset();

                    // Track success
                    trackEvent('FormSubmitSuccess', {
                        form_name: 'contact_form',
                        segment_type: userSegment
                    });

                    // Reset button after 3s
                    setTimeout(() => {
                        btnText.textContent = 'COTIZÁ AHORA - ES GRATIS →';
                        submitBtn.disabled = false;
                    }, 3000);
                }, 1000);
            });
        }
    });

    // ==========================================
    // SEGMENT SELECTION
    // ==========================================
    function selectSegment(segmentType, leadQuality) {
        trackEvent('SegmentSelection', {
            segment_type: segmentType,
            lead_quality: leadQuality
        });

        if (segmentType === 'social') {
            document.getElementById('excludedMessage').classList.remove('hidden');
            return;
        }

        document.getElementById('excludedMessage').classList.add('hidden');
        sessionStorage.setItem('user_segment', segmentType);
        sessionStorage.setItem('lead_quality', leadQuality);

        // Scroll to section
        const segmentSections = {
            'municipal': 'clientes',
            'corporativo': 'servicios',
            'festival': 'show'
        };

        const targetSection = segmentSections[segmentType] || 'show';
        const section = document.getElementById(targetSection);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // ==========================================
    // MOBILE MENU
    // ==========================================
    function toggleMobileMenu() {
        document.getElementById('mobileMenu').classList.toggle('open');
    }
    </script>
    <?php
}
add_action('wp_footer', 'dk_footer_scripts');

/**
 * Get WhatsApp URL
 */
function dk_whatsapp_url($message = '') {
    $data = dk_get_site_data();
    $phone = preg_replace('/[^0-9]/', '', $data['whatsapp']);
    $url = 'https://wa.me/' . $phone;
    if ($message) {
        $url .= '?text=' . urlencode($message);
    }
    return $url;
}

/**
 * Body Classes
 */
function dk_body_classes($classes) {
    $classes[] = 'bg-dark';
    $classes[] = 'text-white';
    $classes[] = 'font-sans';
    return $classes;
}
add_filter('body_class', 'dk_body_classes');
