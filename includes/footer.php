    <!-- Footer -->
    <footer class="bg-primary text-gray-300 py-12 mt-auto">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- About -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-laptop-code text-accent"></i>
                        متجر تيك بلس
                    </h3>
                    <p class="text-sm leading-relaxed">
                        وجهتك الأولى لأحدث أجهزة اللابتوب، كاميرات المراقبة، وأنظمة الأمان. نقدم أفضل المنتجات بأسعار تنافسية وخدمة صيانة متميزة.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">روابط سريعة</h3>
                    <ul class="space-y-2">
                        <li><a href="index.php" class="hover:text-accent transition duration-300">الرئيسية</a></li>
                        <li><a href="store.php" class="hover:text-accent transition duration-300">المتجر</a></li>
                        <li><a href="#services" class="hover:text-accent transition duration-300">خدمات الصيانة</a></li>
                        <li><a href="#contact" class="hover:text-accent transition duration-300">تواصل معنا</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">تواصل معنا</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-location-dot text-secondary"></i>
                            <span>القاهرة، مصر</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-secondary"></i>
                            <span dir="ltr">+20 10 1234 5678</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-secondary"></i>
                            <span>contact@goudawolf.dev</span>
                        </li>
                    </ul>
                    <!-- Social Icons -->
                    <div class="flex gap-4 mt-6">
                        <a href="https://github.com/GoudaWolfDev" target="_blank" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-secondary hover:text-white transition duration-300" title="GitHub">
                            <i class="fa-brands fa-github text-lg"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-accent hover:text-white transition duration-300" title="LinkedIn">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-pink-600 hover:text-white transition duration-300" title="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-10 pt-6 text-center text-sm flex flex-col md:flex-row justify-between items-center gap-4 text-gray-400">
                <p>&copy; 2026 متجر تيك بلس. جميع الحقوق محفوظة.</p>
                <p>تم التطوير بكل حب بواسطة <a href="https://github.com/GoudaWolfDev" target="_blank" class="text-secondary hover:text-accent font-semibold transition duration-300"><i class="fa-solid fa-code text-xs"></i> جودة نصر الله (GoudaWolfDev)</a></p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
    
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>
</body>
</html>
