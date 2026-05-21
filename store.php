<?php include 'includes/header.php'; ?>
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

<!-- Page Header -->
<div class="bg-primary py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">المتجر</h1>
        <div class="flex items-center gap-2 text-gray-400 text-sm">
            <a href="index.php" class="hover:text-white transition">الرئيسية</a>
            <i class="fa-solid fa-chevron-left text-xs"></i>
            <span class="text-white">المتجر</span>
        </div>
    </div>
</div>

<!-- Main Content -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Sidebar Filters -->
            <aside class="w-full lg:w-1/4" data-aos="fade-left">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 sticky top-24">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-bold text-lg text-primary">تصفية المنتجات</h3>
                        <button class="text-sm text-red-500 hover:underline">مسح الكل</button>
                    </div>

                    <!-- Categories -->
                    <div class="mb-8">
                        <h4 class="font-bold text-gray-700 mb-3">الأقسام</h4>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox" class="w-4 h-4 rounded border-gray-300 text-secondary focus:ring-secondary">
                                    <span class="text-gray-600 group-hover:text-secondary transition">لابتوب</span>
                                    <span class="mr-auto text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">120</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox" class="w-4 h-4 rounded border-gray-300 text-secondary focus:ring-secondary">
                                    <span class="text-gray-600 group-hover:text-secondary transition">كاميرات مراقبة</span>
                                    <span class="mr-auto text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">45</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox" class="w-4 h-4 rounded border-gray-300 text-secondary focus:ring-secondary">
                                    <span class="text-gray-600 group-hover:text-secondary transition">اكسسوارات</span>
                                    <span class="mr-auto text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">230</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer group">
                                    <input type="checkbox" class="w-4 h-4 rounded border-gray-300 text-secondary focus:ring-secondary">
                                    <span class="text-gray-600 group-hover:text-secondary transition">شاشات</span>
                                    <span class="mr-auto text-xs text-gray-400 bg-gray-100 px-2 py-0.5 rounded-full">32</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <!-- Price Range -->
                    <div class="mb-8">
                        <h4 class="font-bold text-gray-700 mb-3">السعر</h4>
                        <div class="flex items-center gap-2 mb-4">
                            <input type="number" placeholder="من" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:border-secondary outline-none">
                            <span class="text-gray-400">-</span>
                            <input type="number" placeholder="إلى" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-sm focus:border-secondary outline-none">
                        </div>
                        <input type="range" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-secondary">
                    </div>

                    <!-- Brands -->
                    <div>
                        <h4 class="font-bold text-gray-700 mb-3">الماركة</h4>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-300 text-secondary focus:ring-secondary">
                                <span class="text-gray-600">Dell</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-300 text-secondary focus:ring-secondary">
                                <span class="text-gray-600">HP</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-300 text-secondary focus:ring-secondary">
                                <span class="text-gray-600">Apple</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded border-gray-300 text-secondary focus:ring-secondary">
                                <span class="text-gray-600">Lenovo</span>
                            </label>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Product Grid -->
            <main class="w-full lg:w-3/4">
                <!-- Toolbar -->
                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 mb-6 flex flex-col sm:flex-row justify-between items-center gap-4">
                    <p class="text-gray-500 text-sm">عرض <span class="font-bold text-primary">1-9</span> من أصل <span class="font-bold text-primary">120</span> منتج</p>
                    <div class="flex items-center gap-2">
                        <label class="text-sm text-gray-600">ترتيب حسب:</label>
                        <select class="border-none bg-gray-50 rounded-lg text-sm px-3 py-2 focus:ring-0 cursor-pointer hover:bg-gray-100 transition">
                            <option>الأكثر مبيعاً</option>
                            <option>الأحدث</option>
                            <option>السعر: من الأقل للأعلى</option>
                            <option>السعر: من الأعلى للأقل</option>
                        </select>
                    </div>
                </div>

                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product 1 -->
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative h-56 bg-gray-100 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center gap-2">
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-75">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-100">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded">لابتوب</span>
                                <div class="flex text-yellow-400 text-xs">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </div>
                            </div>
                            <h3 class="font-bold text-primary mb-2 hover:text-secondary transition cursor-pointer">MacBook Pro M2 2023</h3>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-secondary font-bold text-xl">45,000 ج.م</span>
                                <button class="w-10 h-10 rounded-lg bg-primary text-white hover:bg-secondary transition flex items-center justify-center">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden group" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative h-56 bg-gray-100 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center gap-2">
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-75">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-100">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded">لابتوب</span>
                                <div class="flex text-yellow-400 text-xs">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <h3 class="font-bold text-primary mb-2 hover:text-secondary transition cursor-pointer">Dell XPS 15</h3>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-secondary font-bold text-xl">38,500 ج.م</span>
                                <button class="w-10 h-10 rounded-lg bg-primary text-white hover:bg-secondary transition flex items-center justify-center">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden group" data-aos="fade-up" data-aos-delay="300">
                        <div class="relative h-56 bg-gray-100 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1550009158-9ebf69173e03?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <span class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">خصم 20%</span>
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center gap-2">
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-75">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-100">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded">كاميرات</span>
                                <div class="flex text-yellow-400 text-xs">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <h3 class="font-bold text-primary mb-2 hover:text-secondary transition cursor-pointer">Sony Alpha A7 III</h3>
                            <div class="flex justify-between items-center mt-4">
                                <div class="flex flex-col">
                                    <span class="text-gray-400 text-sm line-through">75,000 ج.م</span>
                                    <span class="text-secondary font-bold text-xl">60,000 ج.م</span>
                                </div>
                                <button class="w-10 h-10 rounded-lg bg-primary text-white hover:bg-secondary transition flex items-center justify-center">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden group" data-aos="fade-up" data-aos-delay="400">
                        <div class="relative h-56 bg-gray-100 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center gap-2">
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-75">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-100">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded">اكسسوارات</span>
                                <div class="flex text-yellow-400 text-xs">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <h3 class="font-bold text-primary mb-2 hover:text-secondary transition cursor-pointer">Mechanical Keyboard RGB</h3>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-secondary font-bold text-xl">2,500 ج.م</span>
                                <button class="w-10 h-10 rounded-lg bg-primary text-white hover:bg-secondary transition flex items-center justify-center">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden group" data-aos="fade-up" data-aos-delay="500">
                        <div class="relative h-56 bg-gray-100 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center gap-2">
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-75">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-100">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded">شاشات</span>
                                <div class="flex text-yellow-400 text-xs">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <h3 class="font-bold text-primary mb-2 hover:text-secondary transition cursor-pointer">LG UltraGear 27"</h3>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-secondary font-bold text-xl">15,000 ج.م</span>
                                <button class="w-10 h-10 rounded-lg bg-primary text-white hover:bg-secondary transition flex items-center justify-center">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 overflow-hidden group" data-aos="fade-up" data-aos-delay="600">
                        <div class="relative h-56 bg-gray-100 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1558611848-73f7eb4001a1?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Product" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center gap-2">
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-75">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="w-10 h-10 bg-white rounded-full text-primary hover:bg-secondary hover:text-white transition flex items-center justify-center shadow-lg transform translate-y-4 group-hover:translate-y-0 duration-300 delay-100">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-start mb-2">
                                <span class="text-xs text-gray-400 bg-gray-50 px-2 py-1 rounded">أنظمة أمنية</span>
                                <div class="flex text-yellow-400 text-xs">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                            </div>
                            <h3 class="font-bold text-primary mb-2 hover:text-secondary transition cursor-pointer">Smart Home Hub</h3>
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-secondary font-bold text-xl">5,500 ج.م</span>
                                <button class="w-10 h-10 rounded-lg bg-primary text-white hover:bg-secondary transition flex items-center justify-center">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center gap-2">
                    <button class="w-10 h-10 rounded-lg border border-gray-200 flex items-center justify-center hover:bg-secondary hover:text-white hover:border-secondary transition">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    <button class="w-10 h-10 rounded-lg bg-secondary text-white flex items-center justify-center">1</button>
                    <button class="w-10 h-10 rounded-lg border border-gray-200 flex items-center justify-center hover:bg-secondary hover:text-white hover:border-secondary transition">2</button>
                    <button class="w-10 h-10 rounded-lg border border-gray-200 flex items-center justify-center hover:bg-secondary hover:text-white hover:border-secondary transition">3</button>
                    <button class="w-10 h-10 rounded-lg border border-gray-200 flex items-center justify-center hover:bg-secondary hover:text-white hover:border-secondary transition">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                </div>
            </main>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
