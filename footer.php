<?php $data = dk_get_site_data(); ?>
</main>

<!-- FOOTER -->
<footer class="py-12 bg-zinc-950 border-t border-zinc-900 text-center">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-6">
            <p class="font-display font-bold text-lg tracking-wider mb-2">
                DK <span class="text-neon">LASERMAN</span>
            </p>
            <p class="text-sm text-zinc-500 italic">Transformando la noche con luz y tecnología</p>
        </div>

        <div class="flex justify-center items-center gap-8 mb-6 text-sm text-zinc-400">
            <a href="tel:+5492995920418"
               onclick="trackEvent('InitiateContact', {method: 'phone', source: 'footer'})"
               class="hover:text-neon transition-colors">
                📞 +54 9 2995 920418
            </a>
            <a href="https://instagram.com/laseryshow" target="_blank"
               onclick="trackEvent('SocialClick', {platform: 'instagram', source: 'footer'})"
               class="hover:text-neon transition-colors">
                📱 @laseryshow
            </a>
            <a href="<?php echo dk_whatsapp_url('Hola, vi su página y me interesa cotizar'); ?>" target="_blank"
               onclick="trackEvent('InitiateContact', {method: 'whatsapp', source: 'footer'})"
               class="hover:text-neon transition-colors">
                💬 WhatsApp
            </a>
        </div>

        <div class="text-[10px] text-zinc-600 font-display tracking-[0.5em]">
            © <?php echo date('Y'); ?> DK LASER • ARGENTINA
        </div>
    </div>
</footer>

<!-- WHATSAPP FLOTANTE -->
<a href="<?php echo dk_whatsapp_url('Hola, vi su página y me interesa cotizar'); ?>"
   target="_blank"
   onclick="trackEvent('InitiateContact', {method: 'whatsapp', source: 'floating_button'})"
   class="fixed bottom-8 right-8 bg-neon w-16 h-16 flex items-center justify-center text-black rounded-full hover:scale-110 transition-transform shadow-lg z-50 neon-box">
    <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654z"/>
    </svg>
</a>

<?php wp_footer(); ?>
</body>
</html>
