<?php
/**
 * Main Template - DK Laserman  
 * Landing Page de Venta Optimizada para Conversión
 */
get_header();
$data = dk_get_site_data();
?>

<style>
/* Secciones expandibles de servicios */
.service-expanded {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease-out;
}
.service-expanded.active {
    max-height: 3000px;
    transition: max-height 0.8s ease-in;
}

/* Efecto de color en scroll para mobile */
.scroll-colorize {
    transition: filter 0.6s ease;
}
.scroll-colorize.in-view {
    filter: grayscale(0) !important;
}

@media (min-width: 768px) {
    .scroll-colorize:hover {
        filter: grayscale(0) !important;
    }
}

/* Botones segmentados con estética láser */
.laser-btn {
    position: relative;
    overflow: hidden;
    border: 2px solid rgba(0, 255, 29, 0.3);
    background: linear-gradient(135deg, rgba(0, 255, 29, 0.05) 0%, rgba(0, 255, 29, 0.02) 100%);
    transition: all 0.3s ease;
}
.laser-btn:hover {
    border-color: #00ff1d;
    background: linear-gradient(135deg, rgba(0, 255, 29, 0.15) 0%, rgba(0, 255, 29, 0.05) 100%);
    box-shadow: 0 0 30px rgba(0, 255, 29, 0.3), inset 0 0 20px rgba(0, 255, 29, 0.1);
}
.laser-btn::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent 30%, rgba(0, 255, 29, 0.1) 50%, transparent 70%);
    transform: rotate(45deg);
    animation: laser-sweep 3s infinite;
}
@keyframes laser-sweep {
    0% { transform: translateX(-100%) rotate(45deg); }
    100% { transform: translateX(100%) rotate(45deg); }
}

/* Variantes sutiles para cada tipo */
.laser-btn-solid::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(0, 255, 29, 0.2), transparent);
    transition: left 0.5s;
}
.laser-btn-solid:hover::after {
    left: 100%;
}

.laser-btn-dashed {
    border-style: dashed;
    border-width: 2px;
}

.laser-btn-double {
    border-style: double;
    border-width: 3px;
}

/* Líneas decorativas láser */
.laser-line {
    height: 1px;
    background: linear-gradient(90deg, transparent 0%, #00ff1d 50%, transparent 100%);
    opacity: 0.3;
    animation: pulse-line 2s infinite;
}
@keyframes pulse-line {
    0%, 100% { opacity: 0.3; }
    50% { opacity: 0.7; }
}

/* Decoración de esquinas */
.corner-laser {
    position: absolute;
    width: 20px;
    height: 20px;
    border: 1px solid rgba(0, 255, 29, 0.5);
    pointer-events: none;
}
.corner-laser-tl { top: -1px; left: -1px; border-right: none; border-bottom: none; }
.corner-laser-tr { top: -1px; right: -1px; border-left: none; border-bottom: none; }
.corner-laser-bl { bottom: -1px; left: -1px; border-right: none; border-top: none; }
.corner-laser-br { bottom: -1px; right: -1px; border-left: none; border-top: none; }
</style>

<!-- ============================================ -->
<!-- 1️⃣ HERO - IMPACTO INICIAL -->
<!-- ============================================ -->
<section id="inicio" class="min-h-screen flex flex-col justify-center items-center text-center px-4 md:px-6 relative overflow-hidden pt-24 md:pt-0">
    <img src="<?php echo esc_url($data['hero_image']); ?>"
         class="absolute inset-0 w-full h-full object-cover opacity-30 grayscale"
         alt="Hero Background">
    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/80 to-transparent"></div>

    <div class="relative z-10 max-w-5xl">
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-display font-bold leading-tight mb-6">
            El Futuro de los<br>
            <span class="text-neon neon-glow">Espectáculos en Argentina</span>
        </h1>

        <p class="text-lg md:text-xl text-zinc-300 mb-12 max-w-3xl mx-auto font-light">
            El único espectáculo de Laserman en Latinoamérica + Túneles inmersivos + Proyecciones de alto impacto
        </p>

        <!-- Línea decorativa láser -->
        <div class="laser-line w-32 mx-auto mb-8"></div>

        <div class="flex flex-col gap-4 justify-center max-w-2xl mx-auto relative">
            <!-- Esquinas decorativas -->
            <div class="corner-laser corner-laser-tl"></div>
            <div class="corner-laser corner-laser-tr"></div>
            <div class="corner-laser corner-laser-bl"></div>
            <div class="corner-laser corner-laser-br"></div>

            <a href="#contacto"
               onclick="trackEvent('InitiateContact', {method: 'hero_cta', client_type: 'entretenimiento', event_id: generateEventId()})"
               class="laser-btn laser-btn-solid relative px-12 py-5 text-neon text-base font-bold tracking-wide uppercase text-center group">
                <span class="relative z-10">⚡ DISCOTECA / BOLICHE</span>
            </a>

            <a href="#contacto"
               onclick="trackEvent('InitiateContact', {method: 'hero_cta', client_type: 'institucional', event_id: generateEventId()})"
               class="laser-btn laser-btn-dashed relative px-12 py-5 text-neon text-base font-bold tracking-wide uppercase text-center group">
                <span class="relative z-10">🏛️ MUNICIPALIDAD / CULTURA</span>
            </a>

            <a href="#contacto"
               onclick="trackEvent('InitiateContact', {method: 'hero_cta', client_type: 'corporativo', event_id: generateEventId()})"
               class="laser-btn laser-btn-double relative px-12 py-5 text-neon text-base font-bold tracking-wide uppercase text-center group">
                <span class="relative z-10">💼 PRODUCTOR / EMPRESA</span>
            </a>
        </div>

        <!-- Línea decorativa láser -->
        <div class="laser-line w-32 mx-auto mt-8"></div>
    </div>
</section>

<!-- ============================================ -->
<!-- 2️⃣ PRUEBA SOCIAL RÁPIDA -->
<!-- ============================================ -->
<section class="py-20 px-4 md:px-6 bg-zinc-950 border-y border-zinc-900">
    <div class="max-w-7xl mx-auto">

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16">
            <div class="text-center border border-zinc-900 p-8 hover:border-neon transition-colors">
                <div class="text-5xl md:text-6xl font-display font-black text-neon mb-3 neon-glow">15+</div>
                <div class="text-xs text-zinc-400 uppercase tracking-widest">Años de Experiencia</div>
            </div>
            <div class="text-center border border-zinc-900 p-8 hover:border-neon transition-colors">
                <div class="text-5xl md:text-6xl font-display font-black text-neon mb-3 neon-glow">50+</div>
                <div class="text-xs text-zinc-400 uppercase tracking-widest">Shows Realizados</div>
            </div>
            <div class="text-center border border-zinc-900 p-8 hover:border-neon transition-colors">
                <div class="text-5xl md:text-6xl font-display font-black text-neon mb-3 neon-glow">8</div>
                <div class="text-xs text-zinc-400 uppercase tracking-widest">Fiestas Nacionales</div>
            </div>
            <div class="text-center border border-zinc-900 p-8 hover:border-neon transition-colors">
                <div class="text-5xl md:text-6xl font-display font-black text-neon mb-3 neon-glow">43</div>
                <div class="text-xs text-zinc-400 uppercase tracking-widest">Ciudades Recorridas</div>
            </div>
        </div>

        <!-- Logos Gobiernos -->
        <div class="text-center">
            <p class="text-[10px] text-zinc-600 uppercase tracking-[0.5em] mb-8">Gobiernos que confiaron en nosotros</p>
            <div class="grid grid-cols-2 gap-6 md:gap-8 max-w-md mx-auto">
                <img src="https://laserman.com.ar/wp-content/uploads/2026/01/LOGO-rio-negro.png" alt="Río Negro" class="h-16 md:h-20 w-auto mx-auto opacity-70 hover:opacity-100 transition-opacity">
                <img src="https://laserman.com.ar/wp-content/uploads/2026/01/LOGO-misiones.png" alt="Misiones" class="h-16 md:h-20 w-auto mx-auto opacity-70 hover:opacity-100 transition-opacity">
                <img src="https://laserman.com.ar/wp-content/uploads/2026/01/LOGO-formosa.png" alt="Formosa" class="h-16 md:h-20 w-auto mx-auto opacity-70 hover:opacity-100 transition-opacity">
                <img src="https://laserman.com.ar/wp-content/uploads/2026/01/LOGO-NEUQUEN2.png" alt="Neuquén" class="h-16 md:h-20 w-auto mx-auto opacity-70 hover:opacity-100 transition-opacity">
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- 3️⃣ QUÉ OFRECEMOS - 5 SERVICIOS -->
<!-- ============================================ -->
<section id="servicios" class="py-32 px-3 md:px-6 bg-dark">
    <div class="max-w-7xl mx-auto">

        <div class="mb-20 text-center">
            <span class="text-neon font-display text-[10px] tracking-[0.6em] block mb-4">QUÉ OFRECEMOS</span>
            <h2 class="text-4xl md:text-6xl font-display font-bold uppercase leading-tight">
                5 Formas de Transformar<br>
                <span class="text-neon font-light">tu Evento</span>
            </h2>
            <div class="h-[1px] w-20 bg-neon mt-8 mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-px bg-zinc-900 border border-zinc-900">

            <!-- SERVICIO 1: SHOW LASERMAN ⭐ -->
            <div class="relative bg-dark lg:col-span-2 flex flex-col">
                <div class="p-4 md:p-10 group hover:bg-zinc-900/30 transition-all">
                    <div class="absolute top-6 right-6 bg-neon text-black px-4 py-1 text-[9px] font-black tracking-widest z-10">
                        ⭐ MÁS PEDIDO
                    </div>
                    <div class="mb-6">
                        <img src="<?php echo esc_url($data['services'][0]['image']); ?>"
                             class="w-full aspect-video object-cover scroll-colorize"
                             style="filter: grayscale(1);"
                             alt="Show Laserman">
                    </div>
                    <h3 class="text-3xl font-display font-bold uppercase mb-2 text-neon">Show Laserman</h3>
                    <p class="text-xs text-zinc-500 uppercase tracking-widest mb-4">El único en Argentina</p>
                    <p class="text-sm text-zinc-300 leading-relaxed mb-6">
                        Un artista manipula rayos láser en vivo. Performance futurista que combina música, coreografía y tecnología.
                        <span class="text-white font-bold">Altamente viral - cada asistente filma y comparte.</span>
                    </p>
                    <button onclick="toggleService('laserman'); trackEvent('ServiceView', {service: 'laserman', featured: true, event_id: generateEventId()})"
                       class="inline-block text-neon text-xs uppercase tracking-widest hover:underline mb-4">
                        MÁS INFO →
                    </button>
                </div>

                <!-- Sección expandible -->
                <div id="service-laserman" class="service-expanded border-t border-zinc-900">
                    <div class="p-4 md:p-10 bg-zinc-900/50">
                        <h4 class="text-2xl font-display font-bold text-white mb-6">Galería Show Laserman</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="row-span-2">
                                <img src="https://laserman.com.ar/wp-content/uploads/2026/01/Generated-Image-November-25-2025-8_20PM-1.png"
                                     class="w-full h-full object-cover" alt="Laserman 1">
                            </div>
                            <img src="https://laserman.com.ar/wp-content/uploads/2026/01/dale-m-s-realismo-de-movimiento-humano--e1769290346532.png"
                                 class="w-full aspect-square object-cover" alt="Laserman 2">
                            <img src="https://laserman.com.ar/wp-content/uploads/2026/01/LASERMAN-007_4_2_2-frame-at-0m16s-1-e1769288168804.jpg"
                                 class="w-full aspect-square object-cover" alt="Laserman 3">
                            <img src="https://laserman.com.ar/wp-content/uploads/2026/01/grok-video-d4940b4d-eda5-483b-befd-e28384c7cfda-3-frame-at-0m5s.jpg"
                                 class="w-full aspect-video object-cover col-span-2" alt="Laserman 4">
                        </div>
                        <a href="#contacto" class="mt-6 inline-block px-8 py-3 bg-neon text-black font-bold uppercase text-sm hover:bg-white transition">
                            Cotizar Show Laserman
                        </a>
                    </div>
                </div>
            </div>

            <!-- SERVICIO 2: TÚNELES INMERSIVOS -->
            <div class="relative bg-dark flex flex-col">
                <div class="p-4 md:p-10 group hover:bg-zinc-900/30 transition-all">
                    <div class="mb-6">
                        <img src="https://laserman.com.ar/wp-content/uploads/2026/01/b.jpg"
                             class="w-full aspect-video object-cover scroll-colorize"
                             style="filter: grayscale(1);"
                             alt="Túneles">
                    </div>
                    <h3 class="text-2xl font-display font-bold uppercase mb-2">Túneles Inmersivos</h3>
                    <p class="text-xs text-zinc-500 uppercase tracking-widest mb-4">Efecto WOW garantizado</p>
                    <p class="text-sm text-zinc-300 leading-relaxed mb-6">
                        Entrada espectacular para tu evento. Ideal para recepciones, fiestas de 15, casamientos y activaciones de marca.
                    </p>
                    <button onclick="toggleService('tuneles'); trackEvent('ServiceView', {service: 'tuneles', event_id: generateEventId()})"
                       class="inline-block text-neon text-xs uppercase tracking-widest hover:underline mb-4">
                        MÁS INFO →
                    </button>
                </div>

                <!-- Sección expandible -->
                <div id="service-tuneles" class="service-expanded border-t border-zinc-900">
                    <div class="p-4 md:p-10 bg-zinc-900/50">
                        <h4 class="text-2xl font-display font-bold text-white mb-6">Galería Túneles</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="row-span-2">
                                <img src="https://laserman.com.ar/wp-content/uploads/2026/01/task_01kfe7ne94frmsjd5kj4ty3can_1768930654_img_0.webp"
                                     class="w-full h-full object-cover" alt="Túnel 1">
                            </div>
                            <img src="https://laserman.com.ar/wp-content/uploads/2025/12/Captura-de-Pantalla-2024-09-22-a-las-05.50.08-e1765383365353.png"
                                 class="w-full aspect-video object-cover" alt="Túnel 2">
                            <img src="https://laserman.com.ar/wp-content/uploads/2026/01/VID_20250818_052243_191-frame-at-0m4s.jpg"
                                 class="w-full aspect-video object-cover" alt="Túnel 3">
                            <img src="https://laserman.com.ar/wp-content/uploads/2026/01/corrientes-01.jpg"
                                 class="w-full aspect-video object-cover col-span-2" alt="Túnel 4">
                        </div>
                        <a href="#contacto" class="mt-6 inline-block px-8 py-3 bg-neon text-black font-bold uppercase text-sm hover:bg-white transition">
                            Cotizar Túneles
                        </a>
                    </div>
                </div>
            </div>

            <!-- SERVICIO 3: PROYECCIONES LÁSER -->
            <div class="relative bg-dark flex flex-col">
                <div class="p-4 md:p-10 group hover:bg-zinc-900/30 transition-all">
                    <div class="mb-6">
                        <img src="<?php echo esc_url($data['services'][2]['image']); ?>"
                             class="w-full aspect-video object-cover scroll-colorize"
                             style="filter: grayscale(1);"
                             alt="Proyecciones">
                    </div>
                    <h3 class="text-2xl font-display font-bold uppercase mb-2">Proyecciones de Alto Impacto</h3>
                    <p class="text-xs text-zinc-500 uppercase tracking-widest mb-4">Tu marca en grande</p>
                    <p class="text-sm text-zinc-300 leading-relaxed mb-6">
                        Logos, animaciones y mensajes proyectados en edificios, montañas o cualquier superficie. Visible a kilómetros.
                    </p>
                    <button onclick="toggleService('proyecciones'); trackEvent('ServiceView', {service: 'proyecciones', event_id: generateEventId()})"
                       class="inline-block text-neon text-xs uppercase tracking-widest hover:underline mb-4">
                        MÁS INFO →
                    </button>
                </div>

                <!-- Sección expandible -->
                <div id="service-proyecciones" class="service-expanded border-t border-zinc-900">
                    <div class="p-4 md:p-10 bg-zinc-900/50">
                        <h4 class="text-2xl font-display font-bold text-white mb-6">Galería Proyecciones</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="row-span-2">
                                <img src="https://laserman.com.ar/wp-content/uploads/2025/12/baja-DEOPAnRTAMENTO.jpg"
                                     class="w-full h-full object-cover" alt="Proyección 1">
                            </div>
                            <img src="https://laserman.com.ar/wp-content/uploads/2025/12/GOPR1347_1691738660171-scaled.jpg"
                                 class="w-full aspect-video object-cover" alt="Proyección 2">
                            <img src="https://laserman.com.ar/inicio/wp-content/uploads/2025/08/Artboard-3-e1755670756831.jpg"
                                 class="w-full aspect-video object-cover" alt="Proyección 3">
                            <img src="https://laserman.com.ar/wp-content/uploads/2025/12/IMG-20250809-WA00121.jpg"
                                 class="w-full aspect-video object-cover col-span-2" alt="Proyección 4">
                        </div>
                        <a href="#contacto" class="mt-6 inline-block px-8 py-3 bg-neon text-black font-bold uppercase text-sm hover:bg-white transition">
                            Cotizar Proyecciones
                        </a>
                    </div>
                </div>
            </div>

            <!-- SERVICIO 4: SHOW LED -->
            <div class="relative bg-dark flex flex-col">
                <div class="p-4 md:p-10 group hover:bg-zinc-900/30 transition-all">
                    <div class="mb-6">
                        <img src="https://laserman.com.ar/wp-content/uploads/2025/12/Generated-Image-October-29-2025-8_45AM-e1765355240381.png"
                             class="w-full aspect-video object-cover scroll-colorize"
                             style="filter: grayscale(1);"
                             alt="Show LED">
                    </div>
                    <h3 class="text-2xl font-display font-bold uppercase mb-2">Show de Robots LED</h3>
                    <p class="text-xs text-zinc-500 uppercase tracking-widest mb-4">El clásico que nunca falla</p>
                    <p class="text-sm text-zinc-300 leading-relaxed mb-6">
                        15 años animando eventos. Desde fiestas privadas hasta festivales masivos. Apuesta segura.
                    </p>
                    <button onclick="toggleService('led'); trackEvent('ServiceView', {service: 'show_led', event_id: generateEventId()})"
                       class="inline-block text-neon text-xs uppercase tracking-widest hover:underline mb-4">
                        MÁS INFO →
                    </button>
                </div>

                <!-- Sección expandible -->
                <div id="service-led" class="service-expanded border-t border-zinc-900">
                    <div class="p-4 md:p-10 bg-zinc-900/50">
                        <h4 class="text-2xl font-display font-bold text-white mb-6">Galería Show LED</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="row-span-2">
                                <img src="https://laserman.com.ar/inicio/wp-content/uploads/2025/08/descarga-4-1-e1755670891680.jpeg" 
                                     class="w-full h-full object-cover" alt="LED 1">
                            </div>
                            <img src="https://laserman.com.ar/inicio/wp-content/uploads/2025/08/descarga-4-1-e1755670891680.jpeg" 
                                 class="w-full aspect-video object-cover" alt="LED 2">
                            <img src="https://laserman.com.ar/inicio/wp-content/uploads/2025/08/descarga-4-1-e1755670891680.jpeg" 
                                 class="w-full aspect-video object-cover" alt="LED 3">
                            <img src="https://laserman.com.ar/inicio/wp-content/uploads/2025/08/descarga-4-1-e1755670891680.jpeg" 
                                 class="w-full aspect-video object-cover col-span-2" alt="LED 4">
                        </div>
                        <a href="#contacto" class="mt-6 inline-block px-8 py-3 bg-neon text-black font-bold uppercase text-sm hover:bg-white transition">
                            Cotizar Show LED
                        </a>
                    </div>
                </div>
            </div>

            <!-- SERVICIO 5: PAQUETE COMPLETO -->
            <div class="relative bg-dark flex flex-col">
                <div class="p-4 md:p-10 group hover:bg-zinc-900/30 transition-all">
                    <div class="absolute top-6 right-6 bg-neon/20 text-neon border border-neon px-4 py-1 text-[9px] font-black tracking-widest z-10">
                        💰 MEJOR VALOR
                    </div>
                    <div class="mb-6">
                        <img src="<?php echo esc_url($data['services'][4]['image'] ?? $data['services'][0]['image']); ?>"
                             class="w-full aspect-video object-cover scroll-colorize"
                             style="filter: grayscale(1);"
                             alt="Paquete Completo">
                    </div>
                    <h3 class="text-2xl font-display font-bold uppercase mb-2">Experiencia Completa</h3>
                    <p class="text-xs text-zinc-500 uppercase tracking-widest mb-4">Todo en uno</p>
                    <p class="text-sm text-zinc-300 leading-relaxed mb-6">
                        Combiná Laserman + Túneles + Proyecciones para un evento que nadie va a olvidar. Consultá por paquetes.
                    </p>
                    <button onclick="toggleService('paquete'); trackEvent('ServiceView', {service: 'paquete_completo', value_offer: true, event_id: generateEventId()})"
                       class="inline-block text-neon text-xs uppercase tracking-widest hover:underline mb-4">
                        MÁS INFO →
                    </button>
                </div>

                <!-- Sección expandible -->
                <div id="service-paquete" class="service-expanded border-t border-zinc-900">
                    <div class="p-4 md:p-10 bg-zinc-900/50">
                        <h4 class="text-2xl font-display font-bold text-white mb-6">Paquete Completo</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="row-span-2">
                                <img src="https://laserman.com.ar/inicio/wp-content/uploads/2025/08/300x100_03.jpg" 
                                     class="w-full h-full object-cover" alt="Paquete 1">
                            </div>
                            <img src="https://laserman.com.ar/inicio/wp-content/uploads/2025/08/Artboard-3-e1755670756831.jpg" 
                                 class="w-full aspect-video object-cover" alt="Paquete 2">
                            <img src="https://laserman.com.ar/inicio/wp-content/uploads/2025/08/descarga-3-1-e1755670840590.jpeg" 
                                 class="w-full aspect-video object-cover" alt="Paquete 3">
                            <img src="https://laserman.com.ar/inicio/wp-content/uploads/2025/08/Sin-titulo-1-scaled-e1755927729200.jpeg" 
                                 class="w-full aspect-video object-cover col-span-2" alt="Paquete 4">
                        </div>
                        <a href="#contacto" class="mt-6 inline-block px-8 py-3 bg-neon text-black font-bold uppercase text-sm hover:bg-white transition">
                            Cotizar Paquete Completo
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA bajo servicios -->
        <div class="text-center mt-16 relative">
            <div class="laser-line w-48 mx-auto mb-6"></div>
            <h3 class="text-neon text-sm mb-8 tracking-[0.3em] uppercase">Elegí tu tipo de evento</h3>

            <div class="flex flex-col md:flex-row gap-4 justify-center items-stretch max-w-5xl mx-auto">
                <a href="#contacto"
                   onclick="trackEvent('LeadGeneration', {source: 'services_cta', client_type: 'entretenimiento', event_id: generateEventId()})"
                   class="laser-btn laser-btn-solid relative flex-1 px-8 py-5 text-neon font-bold text-sm uppercase tracking-widest text-center">
                    <span class="relative z-10">⚡ DISCOTECA / NOCHE</span>
                </a>

                <a href="#contacto"
                   onclick="trackEvent('LeadGeneration', {source: 'services_cta', client_type: 'institucional', event_id: generateEventId()})"
                   class="laser-btn laser-btn-dashed relative flex-1 px-8 py-5 text-neon font-bold text-sm uppercase tracking-widest text-center">
                    <span class="relative z-10">🏛️ MUNICIPALIDAD / CULTURA</span>
                </a>

                <a href="#contacto"
                   onclick="trackEvent('LeadGeneration', {source: 'services_cta', client_type: 'corporativo', event_id: generateEventId()})"
                   class="laser-btn laser-btn-double relative flex-1 px-8 py-5 text-neon font-bold text-sm uppercase tracking-widest text-center">
                    <span class="relative z-10">💼 CORPORATIVO / PRIVADO</span>
                </a>
            </div>

            <div class="laser-line w-48 mx-auto mt-6"></div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- 4️⃣ VIDEO DESTACADO -->
<!-- ============================================ -->
<section id="galeria" class="py-32 px-3 md:px-6 bg-zinc-950 border-y border-zinc-900">
    <div class="max-w-7xl mx-auto">

        <div class="mb-20 text-center">
            <span class="text-neon font-display text-[10px] tracking-[0.6em] block mb-4">VIDEO DESTACADO</span>
            <h2 class="text-4xl md:text-6xl font-display font-bold uppercase leading-tight">
                Mirá el Show<br>
                <span class="text-neon font-light">en Acción</span>
            </h2>
            <div class="h-[1px] w-20 bg-neon mt-8 mx-auto"></div>
            <p class="mt-8 text-zinc-400 text-sm">Así se vive un evento con DK Laser</p>
        </div>

        <!-- Videos Grid -->
        <div class="grid md:grid-cols-3 gap-2 md:gap-4">
            <a href="https://youtube.com/shorts/R-4Ant-nqGk" target="_blank"
               onclick="trackEvent('VideoView', {video: 'promo_principal', platform: 'youtube', event_id: generateEventId()})"
               class="relative aspect-[9/16] group overflow-hidden border border-zinc-900 hover:border-neon transition-all">
                <img src="<?php echo esc_url($data['videos'][0]['thumbnail'] ?? 'https://laserman.com.ar/inicio/wp-content/uploads/2025/08/Generated-File-July-30-2025-11_37PM-frame-at-0m0s.jpg'); ?>"
                     class="w-full h-full object-cover scroll-colorize"
                     style="filter: grayscale(1);"
                     alt="Promo Principal Laserman">
                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                    <div class="w-16 h-16 border-2 border-neon rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-neon ml-1" fill="currentColor" viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                    </div>
                </div>
                <div class="absolute bottom-4 left-4 right-4">
                    <p class="text-white text-sm font-bold">Promo Principal Laserman</p>
                    <p class="text-zinc-400 text-xs mt-1">El show más viral</p>
                </div>
            </a>

            <a href="https://www.youtube.com/shorts/h6-5NnUaf44" target="_blank"
               onclick="trackEvent('VideoView', {video: 'fiesta_chocolate', platform: 'youtube', event_id: generateEventId()})"
               class="relative aspect-[9/16] group overflow-hidden border border-zinc-900 hover:border-neon transition-all">
                <img src="<?php echo esc_url($data['videos'][1]['thumbnail'] ?? 'https://laserman.com.ar/inicio/wp-content/uploads/2025/08/Generated-File-July-14-2025-11_44PM-frame-at-0m0s.jpg'); ?>"
                     class="w-full h-full object-cover scroll-colorize"
                     style="filter: grayscale(1);"
                     alt="Fiesta del Chocolate">
                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                    <div class="w-16 h-16 border-2 border-neon rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-neon ml-1" fill="currentColor" viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                    </div>
                </div>
                <div class="absolute bottom-4 left-4 right-4">
                    <p class="text-white text-sm font-bold">Fiesta del Chocolate</p>
                    <p class="text-zinc-400 text-xs mt-1">Bariloche, Río Negro</p>
                </div>
            </a>

            <a href="https://youtube.com/shorts/rVg2YEs9OWk" target="_blank"
               onclick="trackEvent('VideoView', {video: 'fiesta_pionero', platform: 'youtube', event_id: generateEventId()})"
               class="relative aspect-[9/16] group overflow-hidden border border-zinc-900 hover:border-neon transition-all">
                <img src="<?php echo esc_url($data['videos'][2]['thumbnail'] ?? 'https://laserman.com.ar/inicio/wp-content/uploads/2025/08/359722384291094536-frame-at-0m4s-e1755810774492.jpg'); ?>"
                     class="w-full h-full object-cover scroll-colorize"
                     style="filter: grayscale(1);"
                     alt="Fiesta del Pionero">
                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors flex items-center justify-center">
                    <div class="w-16 h-16 border-2 border-neon rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-neon ml-1" fill="currentColor" viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                    </div>
                </div>
                <div class="absolute bottom-4 left-4 right-4">
                    <p class="text-white text-sm font-bold">Fiesta del Pionero</p>
                    <p class="text-zinc-400 text-xs mt-1">Centenario, Neuquén</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- 5️⃣ IMPACTO NACIONAL -->
<!-- ============================================ -->
<section id="clientes" class="py-32 px-4 md:px-6 bg-dark">
    <div class="max-w-7xl mx-auto">

        <div class="mb-20 text-center">
            <span class="text-neon font-display text-[10px] tracking-[0.6em] block mb-4">IMPACTO NACIONAL</span>
            <h2 class="text-4xl md:text-6xl font-display font-bold uppercase leading-tight">
                Donde ya<br>
                <span class="text-neon font-light">Brillamos</span>
            </h2>
            <div class="h-[1px] w-20 bg-neon mt-8 mx-auto"></div>
        </div>

        <!-- Fiestas Nacionales (Badges) -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-16">
            <?php foreach ($data['festivals'] as $festival) : ?>
            <div class="border border-zinc-900 p-6 hover:border-neon transition-all">
                <div class="flex items-start justify-between mb-2">
                    <h4 class="text-lg font-display font-light uppercase text-white">
                        <?php echo esc_html($festival['name']); ?>
                    </h4>
                    <span class="text-neon text-xs">✓</span>
                </div>
                <p class="text-[10px] text-zinc-500 tracking-wider uppercase">
                    <?php echo esc_html($festival['location']); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Marcas que Confiaron -->
        <div class="border-t border-zinc-900 pt-12">
            <p class="text-center text-[10px] text-zinc-600 uppercase tracking-[0.5em] mb-8">Marcas que confiaron</p>
            <div class="flex flex-wrap justify-center items-center gap-12 opacity-50 hover:opacity-100 transition-opacity">
                <span class="text-sm text-zinc-500 uppercase tracking-widest font-display">Sancor</span>
                <span class="text-sm text-zinc-500 uppercase tracking-widest font-display">Banco Patagonia</span>
                <span class="text-sm text-zinc-500 uppercase tracking-widest font-display">BPN</span>
                <span class="text-sm text-zinc-500 uppercase tracking-widest font-display">Casinos del Río</span>
                <span class="text-sm text-zinc-500 uppercase tracking-widest font-display">CAIC</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- 6️⃣ TESTIMONIOS -->
<!-- ============================================ -->
<section id="testimonios" class="py-32 px-3 md:px-6 bg-zinc-950 border-y border-zinc-900">
    <div class="max-w-6xl mx-auto">

        <div class="mb-20 text-center">
            <span class="text-neon font-display text-[10px] tracking-[0.6em] block mb-4">TESTIMONIOS</span>
            <h2 class="text-4xl md:text-6xl font-display font-bold uppercase leading-tight">
                Lo que Dicen<br>
                <span class="text-neon font-light">de Nosotros</span>
            </h2>
            <div class="h-[1px] w-20 bg-neon mt-8 mx-auto"></div>
        </div>

        <div class="grid md:grid-cols-3 gap-px bg-zinc-900 border border-zinc-900">
            <?php foreach ($data['testimonials'] as $testimonial) : ?>
            <div class="p-5 md:p-10 bg-dark hover:bg-zinc-900/50 transition-all">
                <div class="text-neon mb-4 text-lg">⭐⭐⭐⭐⭐</div>
                <p class="text-white/60 italic mb-8 text-sm leading-relaxed">
                    "<?php echo esc_html($testimonial['quote']); ?>"
                </p>
                <div class="border-t border-zinc-900 pt-4">
                    <p class="font-bold text-white text-sm uppercase tracking-wide">
                        <?php echo esc_html($testimonial['name']); ?>
                    </p>
                    <p class="text-[10px] text-zinc-500 uppercase tracking-widest mt-2">
                        <?php echo esc_html($testimonial['role']); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================ -->
<!-- 7️⃣ CTA FINAL - CIERRE DE VENTA -->
<!-- ============================================ -->
<section id="contacto" class="py-32 px-4 md:px-6 bg-dark relative overflow-hidden">
    <img src="<?php echo esc_url($data['hero_image']); ?>"
         class="absolute inset-0 w-full h-full object-cover opacity-20 grayscale"
         alt="Background">
    <div class="absolute inset-0 bg-gradient-to-t from-dark via-dark/90 to-dark"></div>

    <div class="max-w-3xl mx-auto relative z-10">

        <div class="mb-12 text-center">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold uppercase mb-6 leading-tight">
                ¿Listo para un Evento<br>
                <span class="text-neon neon-glow">Inolvidable?</span>
            </h2>
            <p class="text-xl text-zinc-300 mb-4">Gira Nacional 2026 - Cupos Limitados</p>
            <p class="text-sm text-zinc-500">Respondemos en menos de 24hs</p>
        </div>

        <div class="border-2 border-neon/30 bg-neon/5 p-12">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-neon to-transparent opacity-50"></div>

            <form id="contactForm" class="space-y-6 mb-8">
                <input type="text"
                       name="nombre"
                       placeholder="NOMBRE"
                       required
                       class="w-full bg-transparent border-b border-zinc-800 py-3 text-white outline-none focus:border-neon text-center tracking-widest text-sm">

                <input type="email"
                       name="email"
                       placeholder="EMAIL"
                       required
                       class="w-full bg-transparent border-b border-zinc-800 py-3 text-white outline-none focus:border-neon text-center tracking-widest text-sm">

                <input type="tel"
                       name="telefono"
                       placeholder="WHATSAPP"
                       required
                       class="w-full bg-transparent border-b border-zinc-800 py-3 text-white outline-none focus:border-neon text-center tracking-widest text-sm">

                <select name="servicio"
                        class="w-full bg-transparent border-b border-zinc-800 py-3 text-white outline-none focus:border-neon text-center tracking-widest text-sm"
                        required>
                    <option value="" class="bg-black">TIPO DE EVENTO</option>
                    <option value="laserman" class="bg-black">Show Laserman</option>
                    <option value="paquete" class="bg-black">Paquete Completo</option>
                    <option value="tuneles" class="bg-black">Túneles</option>
                    <option value="proyecciones" class="bg-black">Proyecciones</option>
                    <option value="led" class="bg-black">Show LED</option>
                </select>

                <button type="submit"
                        id="submitBtn"
                        class="w-full py-5 bg-neon text-black font-bold font-display tracking-[0.2em] hover:bg-white transition-colors uppercase text-base shadow-lg neon-box flex items-center justify-center gap-3">
                    <span id="btnSpinner" class="hidden">
                        <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </span>
                    <span id="btnText">COTIZÁ AHORA - ES GRATIS →</span>
                </button>

                <!-- Mensaje de éxito -->
                <div id="formSuccess" class="hidden p-6 border-2 border-neon bg-neon/10 text-center">
                    <div class="text-4xl mb-3">✅</div>
                    <p class="text-white font-bold text-lg mb-2">¡GRACIAS!</p>
                    <p class="text-zinc-300 text-sm">Tu consulta fue enviada correctamente. Te contactaremos en menos de 24hs.</p>
                </div>

                <!-- Mensaje de error -->
                <div id="formError" class="hidden p-6 border-2 border-red-500 bg-red-500/10 text-center">
                    <div class="text-4xl mb-3">❌</div>
                    <p class="text-white font-bold text-lg mb-2">Error al enviar</p>
                    <p class="text-zinc-300 text-sm">Por favor, intenta nuevamente o contáctanos por WhatsApp.</p>
                </div>
            </form>

            <!-- Contacto Directo -->
            <div class="grid md:grid-cols-2 gap-4">
                <a href="<?php echo dk_whatsapp_url('Hola, quiero cotizar un evento'); ?>"
                   target="_blank"
                   onclick="trackEvent('InitiateContact', {method: 'whatsapp', source: 'cta_final', event_id: generateEventId()})"
                   class="p-6 border border-zinc-800 hover:border-neon transition-all text-center group">
                    <div class="text-3xl mb-2">💬</div>
                    <p class="text-sm font-bold text-white uppercase group-hover:text-neon transition-colors">Hablemos por WhatsApp</p>
                    <p class="text-[10px] text-zinc-500 mt-1">+54 9 2995 920418</p>
                </a>
                <a href="tel:+5492995920418"
                   onclick="trackEvent('InitiateContact', {method: 'phone', source: 'cta_final', event_id: generateEventId()})"
                   class="p-6 border border-zinc-800 hover:border-neon transition-all text-center group">
                    <div class="text-3xl mb-2">📞</div>
                    <p class="text-sm font-bold text-white uppercase group-hover:text-neon transition-colors">Llamar Ahora</p>
                    <p class="text-[10px] text-zinc-500 mt-1">Respuesta inmediata</p>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// ========================================
// GENERADOR DE EVENT_ID ÚNICO PARA DEDUPLICACIÓN
// ========================================
function generateEventId() {
    const timestamp = Date.now();
    const random = Math.random().toString(36).substr(2, 9);
    return `laserman_${timestamp}_${random}`;
}

// ========================================
// TOGGLE DE SERVICIOS EXPANDIBLES
// ========================================
function toggleService(serviceId) {
    const expanded = document.getElementById('service-' + serviceId);
    const allExpanded = document.querySelectorAll('.service-expanded');

    // Cerrar todos los demás
    allExpanded.forEach(el => {
        if (el.id !== 'service-' + serviceId) {
            el.classList.remove('active');
        }
    });

    // Toggle el actual
    expanded.classList.toggle('active');
}

// ========================================
// EFECTO DE COLOR EN SCROLL (MOBILE)
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    const colorizeElements = document.querySelectorAll('.scroll-colorize');
    
    // Intersection Observer para detectar cuando el elemento está en el centro
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && entry.intersectionRatio >= 0.5) {
                entry.target.classList.add('in-view');
            } else {
                entry.target.classList.remove('in-view');
            }
        });
    }, {
        threshold: [0.5], // Activar cuando el 50% del elemento esté visible
        rootMargin: '-25% 0px -25% 0px' // Centrado en pantalla
    });
    
    colorizeElements.forEach(el => observer.observe(el));
});
</script>

<?php get_footer(); ?>
