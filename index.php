<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="hero" class="relative bg-slate-50 overflow-hidden min-h-[90vh] pt-24 pb-16">
    <div class="absolute inset-x-0 top-0 h-60 bg-gradient-to-b from-cyan-100 to-transparent opacity-70 pointer-events-none"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            
            <div class="lg:text-right space-y-8" data-aos="fade-up" data-aos-duration="1000">
                <span class="inline-flex items-center gap-2 rounded-full bg-white border border-slate-200 px-4 py-2 text-sm font-medium text-slate-600 shadow-sm">
                    متجر تيك بلس - حلول تقنية بسيطة ومحترفة
                </span>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 leading-tight">
                    أحدث الأجهزة الذكية<br>
                    بأسلوب عملي وسهل
                </h1>

                <p class="max-w-2xl text-slate-600 text-base leading-8">
                    اكتشف مجموعة منتقاة من أجهزة اللابتوب والكاميرات وأنظمة الأمان مع أسعار واضحة ودعم فوري. تجربة مريحة من أول ضغطة حتى استلام المنتج.
                </p>

                <div class="flex flex-col sm:flex-row sm:justify-end gap-4">
                    <a href="store.php" class="inline-flex items-center justify-center rounded-full bg-accent px-8 py-4 text-base font-semibold text-white shadow-lg shadow-accent/20 transition hover:bg-cyan-600">
                        تصفح المتجر
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center rounded-full border border-slate-300 bg-white px-8 py-4 text-base font-semibold text-slate-700 transition hover:bg-slate-50">
                        تواصل معنا
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-4 text-center">
                    <div class="rounded-3xl bg-white border border-slate-200 p-5 shadow-sm">
                        <p class="text-2xl font-bold text-slate-900">12k+</p>
                        <p class="mt-2 text-sm text-slate-500">عميل راضٍ</p>
                    </div>
                    <div class="rounded-3xl bg-white border border-slate-200 p-5 shadow-sm">
                        <p class="text-2xl font-bold text-slate-900">100%</p>
                        <p class="mt-2 text-sm text-slate-500">منتجات موثوقة</p>
                    </div>
                    <div class="rounded-3xl bg-white border border-slate-200 p-5 shadow-sm">
                        <p class="text-2xl font-bold text-slate-900">24/7</p>
                        <p class="mt-2 text-sm text-slate-500">دعم فني دائم</p>
                    </div>
                </div>
            </div>

            <div class="relative" data-aos="fade-left" data-aos-duration="1000">
                <div class="absolute -right-10 top-10 h-48 w-48 rounded-full bg-cyan-100/70 blur-3xl"></div>
                <div class="absolute -left-10 bottom-10 h-40 w-40 rounded-full bg-violet-100/70 blur-3xl"></div>

                <div class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white shadow-2xl animate-float-card transition-transform duration-500 hover:-translate-y-1 hover:shadow-2xl max-w-[360px] mx-auto">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=80" alt="Laptop showcase" class="h-64 w-full object-cover">
                    <div class="p-5">
                        <div class="inline-flex items-center gap-2 rounded-full bg-slate-100 px-3 py-2 text-sm font-medium text-slate-600 mb-4">
                            <i class="fa-solid fa-star text-amber-400"></i>
                            تقييم 4.9
                        </div>
                        <h2 class="text-2xl font-bold text-slate-900 mb-3">MacBook Pro M2</h2>
                        <p class="text-slate-600 leading-7 mb-6">تصميم نحيف، أداء فائق، وتجربة استخدام مريحة لقبول جميع المهام.</p>
                        <div class="grid grid-cols-2 gap-3">
                            <span class="rounded-2xl border border-slate-200 bg-slate-50 py-2 text-sm text-slate-600">16GB RAM</span>
                            <span class="rounded-2xl border border-slate-200 bg-slate-50 py-2 text-sm text-slate-600">512GB SSD</span>
                            <span class="rounded-2xl border border-slate-200 bg-slate-50 py-2 text-sm text-slate-600">شاشة Retina</span>
                            <span class="rounded-2xl border border-slate-200 bg-slate-50 py-2 text-sm text-slate-600">توصيل سريع</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services / Categories Section -->
<section id="services" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">خدماتنا ومنتجاتنا</h2>
            <div class="w-24 h-1 bg-secondary mx-auto rounded-full"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">نقدم لك كل ما تحتاجه من حلول تقنية متكاملة بأعلى معايير الجودة.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 group border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-secondary transition duration-300">
                    <i class="fa-solid fa-laptop text-2xl text-secondary group-hover:text-white transition duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">أجهزة لابتوب</h3>
                <p class="text-gray-600 leading-relaxed">أحدث أجهزة اللابتوب لجميع الاستخدامات، من الدراسة والعمل إلى الألعاب والتصميم.</p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 group border border-gray-100" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-cyan-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-accent transition duration-300">
                    <i class="fa-solid fa-video text-2xl text-accent group-hover:text-white transition duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">كاميرات مراقبة</h3>
                <p class="text-gray-600 leading-relaxed">أنظمة أمنية متكاملة وكاميرات مراقبة عالية الدقة لحماية منزلك وممتلكاتك.</p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 group border border-gray-100" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-500 transition duration-300">
                    <i class="fa-solid fa-screwdriver-wrench text-2xl text-purple-500 group-hover:text-white transition duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">صيانة متخصصة</h3>
                <p class="text-gray-600 leading-relaxed">مركز صيانة معتمد لإصلاح جميع أعطال الكمبيوتر واللابتوب بأيدي خبراء.</p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 group border border-gray-100" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-green-500 transition duration-300">
                    <i class="fa-solid fa-desktop text-2xl text-green-500 group-hover:text-white transition duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">أجهزة كمبيوتر</h3>
                <p class="text-gray-600 leading-relaxed">تجميعات كمبيوتر احترافية للألعاب والأعمال الهندسية والمكتبية.</p>
            </div>

            <!-- Service 5 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 group border border-gray-100" data-aos="fade-up" data-aos-delay="500">
                <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-orange-500 transition duration-300">
                    <i class="fa-solid fa-keyboard text-2xl text-orange-500 group-hover:text-white transition duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">اكسسوارات</h3>
                <p class="text-gray-600 leading-relaxed">مجموعة متنوعة من الماوسات، الكيبوردات، السماعات، وشنط اللابتوب.</p>
            </div>

            <!-- Service 6 -->
            <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2 group border border-gray-100" data-aos="fade-up" data-aos-delay="600">
                <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-red-500 transition duration-300">
                    <i class="fa-solid fa-tv text-2xl text-red-500 group-hover:text-white transition duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">شاشات</h3>
                <p class="text-gray-600 leading-relaxed">شاشات كمبيوتر وتلفزيون بأحجام ودقات مختلفة لتجربة مشاهدة مثالية.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <div class="absolute inset-0 bg-grid-slate-900/[0.02] bg-[size:20px_20px] pointer-events-none"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-accent font-bold tracking-wider text-sm bg-accent/10 px-4 py-1.5 rounded-full border border-accent/20">لماذا تختار متجرنا؟</span>
            <h2 class="text-3xl md:text-4.5xl font-extrabold text-primary mt-4 mb-4">نحن لا نبيع التكنولوجيا فحسب، بل نبني الثقة</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-accent to-secondary mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white/75 backdrop-blur-md p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:border-accent/20 hover:-translate-y-1.5 transition duration-300 group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent text-accent group-hover:text-primary transition duration-300">
                    <i class="fa-solid fa-truck-fast text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">شحن سريع ومؤمن</h3>
                <p class="text-slate-500 text-sm leading-relaxed">توصيل لباب المنزل في أسرع وقت مع فحص المنتج قبل الاستلام لضمان راحتك الكاملة.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white/75 backdrop-blur-md p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:border-accent/20 hover:-translate-y-1.5 transition duration-300 group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 bg-secondary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary text-secondary group-hover:text-white transition duration-300">
                    <i class="fa-solid fa-shield-halved text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">ضمان حقيقي 100%</h3>
                <p class="text-slate-500 text-sm leading-relaxed">جميع أجهزتنا تأتي بضمان رسمي معتمد، نوفر لك الأمان التام الذي تبحث عنه.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white/75 backdrop-blur-md p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:border-accent/20 hover:-translate-y-1.5 transition duration-300 group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 text-indigo-600 group-hover:text-white transition duration-300">
                    <i class="fa-solid fa-headset text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">دعم فني متكامل</h3>
                <p class="text-slate-500 text-sm leading-relaxed">فريق دعم خبير ومستعد للإجابة على جميع استفساراتك ومساعدتك في اختيار جهازك المثالي.</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white/75 backdrop-blur-md p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:border-accent/20 hover:-translate-y-1.5 transition duration-300 group" data-aos="fade-up" data-aos-delay="400">
                <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-emerald-500 text-emerald-500 group-hover:text-white transition duration-300">
                    <i class="fa-solid fa-screwdriver-wrench text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">مركز صيانة احترافي</h3>
                <p class="text-slate-500 text-sm leading-relaxed">نقدم خدمات ما بعد البيع من صيانة وتحديث لأجهزتك بأيدي مهندسين متخصصين.</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-24 bg-white relative">
    <div class="container mx-auto px-4">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-16 gap-4">
            <div>
                <span class="text-secondary font-bold tracking-wider text-sm uppercase">أحدث الإضافات</span>
                <h2 class="text-3xl sm:text-4.5xl font-extrabold text-primary mt-2">وصل حديثاً للمتجر</h2>
                <div class="w-16 h-1.5 bg-gradient-to-r from-accent to-secondary rounded-full mt-3"></div>
            </div>
            <a href="store.php" class="bg-slate-50 hover:bg-slate-100 border border-slate-200 text-primary font-bold py-3 px-6 rounded-xl flex items-center gap-3 transition duration-300 group">
                تصفح المتجر بالكامل 
                <i class="fa-solid fa-arrow-left transition-transform group-hover:-translate-x-1.5"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php
            // Fetch newest 4 products
            $products_list = [];
            if (isset($db_fallback) && $db_fallback) {
                // Use fallback mock data
                $products_list = array_slice($mock_products, 0, 4);
            } else {
                $db_res = $conn->query("SELECT * FROM `products` ORDER BY id DESC LIMIT 4");
                if ($db_res) {
                    while ($row = $db_res->fetch_assoc()) {
                        $products_list[] = $row;
                    }
                }
                if (empty($products_list)) {
                    $products_list = array_slice($mock_products, 0, 4);
                }
            }

            foreach ($products_list as $product) {
                $price = number_format($product['price']);
                $category = htmlspecialchars($product['category']);
                $name = htmlspecialchars($product['name']);
                $description = htmlspecialchars($product['description'] ?? $product['desc'] ?? '');
                $image = htmlspecialchars($product['image'] ?? 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');
                ?>
                <!-- Product Card -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-2xl transition duration-500 border border-slate-100 overflow-hidden group" data-aos="zoom-in">
                    <div class="relative h-56 bg-slate-50 overflow-hidden">
                        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end justify-center pb-6">
                            <a href="store.php" class="bg-accent hover:bg-cyan-400 text-primary font-bold py-2.5 px-6 rounded-xl transition duration-300 text-sm shadow-lg shadow-accent/20">
                                عرض التفاصيل
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-bold text-slate-400"><?php echo $category; ?></span>
                            <div class="flex text-amber-400 text-xs gap-0.5">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <h3 class="font-extrabold text-lg text-primary mb-2 truncate group-hover:text-accent transition duration-300"><?php echo $name; ?></h3>
                        <p class="text-xs text-slate-400 mb-4 leading-relaxed line-clamp-2"><?php echo $description; ?></p>
                        <div class="flex justify-between items-center border-t border-slate-50 pt-4">
                            <span class="text-accent font-black text-lg"><?php echo $price; ?> ج.م</span>
                            <button class="w-10 h-10 rounded-xl bg-slate-50 hover:bg-accent text-slate-600 hover:text-primary flex items-center justify-center transition duration-300 shadow-inner">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>="p-6">
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-xs font-bold text-slate-400">اكسسوارات</span>
                        <div class="flex text-amber-400 text-xs gap-0.5">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <h3 class="font-extrabold text-lg text-primary mb-2 truncate group-hover:text-accent transition duration-300">Mechanical Keyboard</h3>
                    <p class="text-xs text-slate-400 mb-4 leading-relaxed line-clamp-2">كيبورد ميكانيكي لعشاق الألعاب والسرعة في الكتابة بإضاءة RGB خلابة.</p>
                    <div class="flex justify-between items-center border-t border-slate-50 pt-4">
                        <span class="text-accent font-black text-lg">3,200 ج.م</span>
                        <button class="w-10 h-10 rounded-xl bg-slate-50 hover:bg-accent text-slate-600 hover:text-primary flex items-center justify-center transition duration-300 shadow-inner">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-primary text-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-secondary rounded-full filter blur-3xl opacity-20 -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent rounded-full filter blur-3xl opacity-20 translate-y-1/2 -translate-x-1/2"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6">تواصل معنا الآن</h2>
                <p class="text-gray-300 mb-8 text-lg leading-relaxed">
                    هل لديك استفسار أو تحتاج إلى مساعدة في اختيار المنتج المناسب؟ فريقنا جاهز للرد على جميع استفساراتك.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-location-dot text-secondary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">القاهرة، مصر</h4>
                            <p class="text-gray-400">شارع التسعين، التجمع الخامس</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-phone text-secondary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">الهاتف</h4>
                            <p class="text-gray-400" dir="ltr">+20 10 1234 5678</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-envelope text-secondary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">البريد الإلكتروني</h4>
                            <p class="text-gray-400">contact@goudawolf.dev</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-2xl shadow-2xl">
                <form action="#" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-bold mb-2" for="name">الاسم</label>
                            <input type="text" id="name" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition duration-300 text-gray-800" placeholder="اسمك الكريم">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-bold mb-2" for="phone">رقم الهاتف</label>
                            <input type="tel" id="phone" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition duration-300 text-gray-800" placeholder="01xxxxxxxxx">
                        </div>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="email">البريد الإلكتروني</label>
                        <input type="email" id="email" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition duration-300 text-gray-800" placeholder="email@example.com">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-bold mb-2" for="message">الرسالة</label>
                        <textarea id="message" rows="4" class="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-200 focus:border-secondary focus:ring-2 focus:ring-secondary/20 outline-none transition duration-300 text-gray-800" placeholder="كيف يمكننا مساعدتك؟"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-secondary hover:bg-blue-600 text-white font-bold py-4 rounded-lg transition duration-300 shadow-lg hover:shadow-blue-500/30">
                        إرسال الرسالة
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
