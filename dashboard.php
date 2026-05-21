<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم | متجر تيك بلس Admin Dashboard</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    
    <!-- Google Fonts: Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkBg: '#090D16', // Deep Obsidian Dark
                        darkCard: '#111827', // Dark Grey Card
                        darkBorder: '#1F2937', // Grey border
                        accent: '#06B6D4', // Cyan Neon
                        secondary: '#4F46E5', // Electric Indigo
                    },
                    fontFamily: {
                        sans: ['Cairo', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Scrollbar for premium dark theme */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #090D16;
        }
        ::-webkit-scrollbar-thumb {
            background: #1F2937;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #06B6D4;
        }
        /* Glassmorphism scroll and glowing */
        .neon-glow {
            box-shadow: 0 0 15px rgba(6, 182, 212, 0.15);
        }
        .neon-glow-indigo {
            box-shadow: 0 0 15px rgba(79, 70, 229, 0.15);
        }
    </style>
</head>
<body class="bg-darkBg text-slate-100 font-sans min-h-screen flex flex-col md:flex-row overflow-x-hidden">

    <!-- Sidebar Navigation -->
    <aside class="w-full md:w-64 bg-darkCard border-b md:border-b-0 md:border-l border-darkBorder flex-shrink-0 flex flex-col transition duration-300">
        <!-- Sidebar Header / Logo -->
        <div class="p-6 border-b border-darkBorder flex justify-between items-center">
            <a href="index.php" class="text-xl font-bold flex items-center gap-2 tracking-wide group">
                <i class="fa-solid fa-laptop-code text-accent group-hover:rotate-12 transition duration-300"></i>
                <span class="text-white">Lap<span class="text-accent">Store</span></span>
            </a>
            <span class="text-xs bg-accent/10 border border-accent/30 text-accent font-semibold px-2 py-0.5 rounded">Admin</span>
        </div>

        <!-- Admin Info -->
        <div class="p-6 border-b border-darkBorder bg-darkBg/50 flex items-center gap-3">
            <div class="relative">
                <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-accent to-secondary flex items-center justify-center font-bold text-white shadow-md text-lg">
                    GN
                </div>
                <span class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-darkCard rounded-full animate-pulse"></span>
            </div>
            <div>
                <h4 class="font-bold text-sm text-white">جودة نصر الله</h4>
                <p class="text-xs text-slate-400 flex items-center gap-1 mt-0.5">
                    <i class="fa-solid fa-crown text-amber-500 text-[10px]"></i>
                    المالك والمطور
                </p>
            </div>
        </div>

        <!-- Sidebar Navigation Links -->
        <nav class="flex-1 p-4 space-y-1">
            <a href="#analytics" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-secondary/20 border-r-4 border-secondary text-white font-bold transition">
                <i class="fa-solid fa-chart-pie text-accent"></i>
                <span>الإحصائيات والتحليلات</span>
            </a>
            <a href="#products-section" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800/50 text-slate-300 hover:text-white font-semibold transition">
                <i class="fa-solid fa-box-open text-slate-400"></i>
                <span>إدارة المنتجات</span>
            </a>
            <a href="#orders-section" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800/50 text-slate-300 hover:text-white font-semibold transition">
                <i class="fa-solid fa-receipt text-slate-400"></i>
                <span>إدارة الطلبات</span>
            </a>
            <a href="index.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800/50 text-slate-300 hover:text-white font-semibold transition">
                <i class="fa-solid fa-house text-slate-400"></i>
                <span>تصفح الموقع الرئيسي</span>
            </a>
            <a href="store.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800/50 text-slate-300 hover:text-white font-semibold transition">
                <i class="fa-solid fa-shop text-slate-400"></i>
                <span>تصفح المتجر</span>
            </a>
        </nav>

        <!-- Sidebar Footer Attribution -->
        <div class="p-6 border-t border-darkBorder bg-darkBg/30 text-center">
            <p class="text-[10px] text-slate-500">تم التطوير بكل حب بواسطة</p>
            <a href="https://github.com/GoudaWolfDev" target="_blank" class="text-xs text-accent font-bold hover:underline mt-1 block">
                <i class="fa-brands fa-github text-xs"></i> GoudaWolfDev
            </a>
        </div>
    </aside>

    <!-- Main Content Body -->
    <main class="flex-1 flex flex-col min-w-0">
        
        <!-- Header / Toolbar -->
        <header class="bg-darkCard border-b border-darkBorder h-20 px-8 flex justify-between items-center flex-shrink-0">
            <div class="flex items-center gap-3">
                <h1 class="text-xl font-black text-white">لوحة الإدارة والتحليلات</h1>
                <span class="text-xs bg-slate-800 border border-slate-700 text-slate-400 px-3 py-1 rounded-full hidden sm:inline-block">التحديث التلقائي نشط</span>
            </div>
            
            <div class="flex items-center gap-4">
                <!-- Notifications -->
                <button class="w-10 h-10 rounded-xl bg-darkBg hover:bg-slate-800 border border-darkBorder flex items-center justify-center text-slate-300 hover:text-accent transition relative" title="التنبيهات">
                    <i class="fa-regular fa-bell"></i>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-rose-500 rounded-full"></span>
                </button>
                
                <!-- Quick Visit Home Button -->
                <a href="index.php" class="bg-accent/10 border border-accent/30 text-accent hover:bg-accent hover:text-primary font-bold py-2 px-4 rounded-xl text-sm transition duration-300 flex items-center gap-2">
                    <i class="fa-solid fa-up-right-from-square text-xs"></i>
                    الموقع الرئيسي
                </a>
            </div>
        </header>

        <!-- Content Area -->
        <div class="flex-grow p-8 space-y-8 overflow-y-auto">

            <!-- KPI Statistics Cards Grid -->
            <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1: Sales -->
                <div class="bg-darkCard p-6 rounded-2xl border border-darkBorder neon-glow-indigo relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-secondary/5 rounded-full filter blur-xl group-hover:scale-150 transition duration-500"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">إجمالي المبيعات</p>
                            <h3 class="text-2xl font-black text-white mt-2">1,245,800 ج.م</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] font-bold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-md mt-3">
                                <i class="fa-solid fa-circle-arrow-up"></i>
                                +12.5%
                            </span>
                            <span class="text-[10px] text-slate-500 mr-1.5">مقارنة بالشهر الماضي</span>
                        </div>
                        <div class="w-12 h-12 bg-secondary/20 border border-secondary/30 text-secondary rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-money-bill-trend-up text-xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Orders -->
                <div class="bg-darkCard p-6 rounded-2xl border border-darkBorder relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-amber-500/5 rounded-full filter blur-xl group-hover:scale-150 transition duration-500"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">الطلبات النشطة</p>
                            <h3 class="text-2xl font-black text-white mt-2">148 طلب</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] font-bold text-amber-400 bg-amber-500/10 px-2 py-0.5 rounded-md mt-3">
                                <i class="fa-solid fa-rotate animate-spin text-[10px]"></i>
                                قيد التجهيز
                            </span>
                            <span class="text-[10px] text-slate-500 mr-1.5">12 طلب بالانتظار</span>
                        </div>
                        <div class="w-12 h-12 bg-amber-500/10 border border-amber-500/20 text-amber-500 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-receipt text-xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Products -->
                <div class="bg-darkCard p-6 rounded-2xl border border-darkBorder neon-glow relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-accent/5 rounded-full filter blur-xl group-hover:scale-150 transition duration-500"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">المنتجات بالمتجر</p>
                            <h3 id="kpi-products-count" class="text-2xl font-black text-white mt-2">--</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] font-bold text-accent bg-accent/10 px-2 py-0.5 rounded-md mt-3">
                                <i class="fa-solid fa-box"></i>
                                نشطة بالكامل
                            </span>
                            <span class="text-[10px] text-slate-500 mr-1.5">تحديث فوري</span>
                        </div>
                        <div class="w-12 h-12 bg-accent/10 border border-accent/20 text-accent rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-laptop text-xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Visitors -->
                <div class="bg-darkCard p-6 rounded-2xl border border-darkBorder relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-rose-500/5 rounded-full filter blur-xl group-hover:scale-150 transition duration-500"></div>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">زيارات اليوم</p>
                            <h3 class="text-2xl font-black text-white mt-2">14,230 زائر</h3>
                            <span class="inline-flex items-center gap-1 text-[11px] font-bold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-md mt-3">
                                <i class="fa-solid fa-arrow-trend-up"></i>
                                +18.4%
                            </span>
                            <span class="text-[10px] text-slate-500 mr-1.5">نشاط مرتفع الآن</span>
                        </div>
                        <div class="w-12 h-12 bg-rose-500/10 border border-rose-500/20 text-rose-500 rounded-xl flex items-center justify-center">
                            <i class="fa-solid fa-users text-xl"></i>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Analytics Charts Section -->
            <section id="analytics" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Sales Linear Graph -->
                <div class="bg-darkCard p-6 rounded-2xl border border-darkBorder lg:col-span-2">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="font-extrabold text-lg text-white">إحصائيات المبيعات والأرباح لعام 2026</h3>
                            <p class="text-xs text-slate-400 mt-1">رصد لحجم المبيعات الشهري بالجنيه المصري</p>
                        </div>
                        <span class="text-xs bg-slate-800 text-slate-300 py-1 px-3 rounded-lg border border-slate-700">تحديث شهري</span>
                    </div>
                    <div class="h-80 relative">
                        <canvas id="salesLineChart"></canvas>
                    </div>
                </div>

                <!-- Categories Doughnut Graph -->
                <div class="bg-darkCard p-6 rounded-2xl border border-darkBorder">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h3 class="font-extrabold text-lg text-white">توزيع المنتجات</h3>
                            <p class="text-xs text-slate-400 mt-1">نسبة الفئات المختلفة المتوفرة في المخزن</p>
                        </div>
                    </div>
                    <div class="h-80 relative flex items-center justify-center">
                        <canvas id="categoriesDoughnutChart"></canvas>
                    </div>
                </div>
            </section>

            <!-- Product Interactive CRUD Section -->
            <section id="products-section" class="bg-darkCard rounded-2xl border border-darkBorder overflow-hidden">
                <!-- Section Header and Tools -->
                <div class="p-6 border-b border-darkBorder flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-slate-900/30">
                    <div>
                        <h3 class="font-extrabold text-lg text-white flex items-center gap-2">
                            <i class="fa-solid fa-laptop text-accent"></i>
                            جدول إدارة منتجات المتجر
                        </h3>
                        <p class="text-xs text-slate-400 mt-1">تعديل فوري للمنتجات وحفظ تلقائي في الذاكرة المحلية للمتصفح (localStorage)</p>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-3 w-full sm:w-auto">
                        <!-- Search input -->
                        <div class="relative w-full sm:w-64">
                            <input type="text" id="productSearch" oninput="filterProducts()" placeholder="البحث عن منتج..." class="w-full pl-4 pr-10 py-2.5 rounded-xl bg-darkBg border border-darkBorder text-slate-200 text-sm focus:border-accent outline-none transition">
                            <i class="fa-solid fa-magnifying-glass absolute top-3.5 right-3.5 text-slate-400 text-xs"></i>
                        </div>
                        
                        <!-- Add Button -->
                        <button onclick="openProductModal('add')" class="bg-accent hover:bg-cyan-400 text-primary font-extrabold py-2.5 px-5 rounded-xl text-sm transition duration-300 flex items-center justify-center gap-2 w-full sm:w-auto shadow-lg shadow-accent/15">
                            <i class="fa-solid fa-circle-plus"></i>
                            إضافة منتج جديد
                        </button>
                    </div>
                </div>

                <!-- Products Table -->
                <div class="overflow-x-auto">
                    <table class="w-full text-right border-collapse">
                        <thead>
                            <tr class="bg-darkBg/60 text-slate-300 border-b border-darkBorder text-xs uppercase tracking-wider font-bold">
                                <th class="p-4">اسم المنتج</th>
                                <th class="p-4">الفئة</th>
                                <th class="p-4">السعر</th>
                                <th class="p-4">الوصف</th>
                                <th class="p-4 text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody id="products-table-body" class="divide-y divide-darkBorder text-sm text-slate-300">
                            <!-- Injected by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Orders Management Section -->
            <section id="orders-section" class="bg-darkCard rounded-2xl border border-darkBorder overflow-hidden">
                <!-- Section Header -->
                <div class="p-6 border-b border-darkBorder bg-slate-900/30">
                    <h3 class="font-extrabold text-lg text-white flex items-center gap-2">
                        <i class="fa-solid fa-receipt text-accent"></i>
                        إدارة الطلبات الأخيرة
                    </h3>
                    <p class="text-xs text-slate-400 mt-1">متابعة حالة الطلبات وتحديثها مباشرة لتغيير التدفق البرمجي</p>
                </div>

                <!-- Orders Table -->
                <div class="overflow-x-auto">
                    <table class="w-full text-right border-collapse">
                        <thead>
                            <tr class="bg-darkBg/60 text-slate-300 border-b border-darkBorder text-xs font-bold">
                                <th class="p-4">رقم الطلب</th>
                                <th class="p-4">العميل</th>
                                <th class="p-4">المنتج</th>
                                <th class="p-4">المجموع</th>
                                <th class="p-4">حالة الطلب</th>
                                <th class="p-4 text-center">الإجراء</th>
                            </tr>
                        </thead>
                        <tbody id="orders-table-body" class="divide-y divide-darkBorder text-sm text-slate-300">
                            <!-- Injected by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </section>

        </div>
    </main>

    <!-- Product CRUD Modal (Add / Edit) -->
    <div id="productModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/75 backdrop-blur-sm opacity-0 pointer-events-none transition duration-300">
        <div class="bg-darkCard border border-darkBorder rounded-2xl w-full max-w-lg overflow-hidden shadow-2xl transform scale-95 transition duration-300">
            <!-- Modal Header -->
            <div class="p-6 border-b border-darkBorder bg-slate-900/40 flex justify-between items-center">
                <h3 id="modalTitle" class="font-black text-lg text-white">إضافة منتج جديد</h3>
                <button onclick="closeProductModal()" class="text-slate-400 hover:text-white text-lg focus:outline-none">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            
            <!-- Modal Form -->
            <form id="productForm" onsubmit="saveProduct(event)" class="p-6 space-y-5">
                <!-- Hidden product index for editing -->
                <input type="hidden" id="modalProductIndex">

                <div>
                    <label class="block text-xs font-bold text-slate-400 mb-2 uppercase tracking-wide">اسم المنتج</label>
                    <input type="text" id="modalProductName" required class="w-full px-4 py-3 rounded-xl bg-darkBg border border-darkBorder text-slate-200 text-sm focus:border-accent outline-none transition" placeholder="مثال: MacBook Pro M2">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-400 mb-2 uppercase tracking-wide">الفئة</label>
                        <select id="modalProductCategory" required class="w-full px-4 py-3 rounded-xl bg-darkBg border border-darkBorder text-slate-300 text-sm focus:border-accent outline-none transition cursor-pointer">
                            <option value="لابتوب">لابتوب</option>
                            <option value="كاميرات">كاميرات</option>
                            <option value="شاشات">شاشات</option>
                            <option value="اكسسوارات">اكسسوارات</option>
                            <option value="أنظمة أمنية">أنظمة أمنية</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-400 mb-2 uppercase tracking-wide">السعر (ج.م)</label>
                        <input type="number" id="modalProductPrice" required class="w-full px-4 py-3 rounded-xl bg-darkBg border border-darkBorder text-slate-200 text-sm focus:border-accent outline-none transition" placeholder="مثال: 45000">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-400 mb-2 uppercase tracking-wide">وصف المنتج</label>
                    <textarea id="modalProductDesc" rows="3" required class="w-full px-4 py-3 rounded-xl bg-darkBg border border-darkBorder text-slate-200 text-sm focus:border-accent outline-none transition" placeholder="اكتب تفاصيل ومواصفات المنتج بدقة..."></textarea>
                </div>

                <!-- Action buttons -->
                <div class="flex gap-4 pt-4 border-t border-darkBorder">
                    <button type="submit" class="flex-1 bg-accent hover:bg-cyan-400 text-primary font-black py-3 rounded-xl transition duration-300 shadow-lg shadow-accent/15">
                        حفظ التغييرات
                    </button>
                    <button type="button" onclick="closeProductModal()" class="flex-1 bg-slate-800 hover:bg-slate-700 text-slate-300 font-bold py-3 rounded-xl border border-slate-700 transition">
                        إلغاء
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Success Toast Alert -->
    <div id="toast" class="fixed bottom-8 left-8 z-50 bg-emerald-500 text-white font-bold py-4 px-6 rounded-xl shadow-2xl flex items-center gap-3 transform translate-y-24 opacity-0 transition duration-500 pointer-events-none">
        <i class="fa-solid fa-circle-check text-xl"></i>
        <span id="toastMessage">تم حفظ التعديلات بنجاح!</span>
    </div>

    <!-- Script Operations Logic -->
    <script>
        // Setup initial default product dataset
        const defaultProducts = [
            { name: "MacBook Pro M2 2023", category: "لابتوب", price: 45000, desc: "شريحة Apple M2 القوية، ذاكرة 16GB، سعة 512GB SSD شاشة Retina خيالية." },
            { name: "Sony Alpha a7 III", category: "كاميرات", price: 65000, desc: "كاميرا ميرورليس احترافية بعدسة خارقة لتصوير سينمائي فائق الدقة." },
            { name: "Dell UltraSharp 27\"", category: "شاشات", price: 12500, desc: "شاشة مصممي الجرافيك وصناع المحتوى بدقة 4K فائقة الوضوح والألوان." },
            { name: "Mechanical Keyboard", category: "اكسسوارات", price: 3200, desc: "كيبورد ميكانيكي لعشاق الألعاب والسرعة في الكتابة بإضاءة RGB خلابة." },
            { name: "Dell XPS 15", category: "لابتوب", price: 38500, desc: "شاشة لمس InfinityEdge بدقة 4K، معالج Core i7 خارق وهارد SSD فائق السرعة." },
            { name: "Smart Home Hub", category: "أنظمة أمنية", price: 5500, desc: "جهاز تحكم مركزي متكامل للربط بين أجهزة الأمان وكاميرات المراقبة بالمنزل." }
        ];

        // Setup initial mock orders dataset
        const defaultOrders = [
            { id: "ORD-9842", customer: "أحمد عبد الله", product: "MacBook Pro M2", total: 45000, status: "مكتمل" },
            { id: "ORD-9841", customer: "محمد علي", product: "Dell UltraSharp 27\"", total: 12500, status: "قيد التجهيز" },
            { id: "ORD-9840", customer: "إبراهيم مصطفى", product: "Sony Alpha a7 III", total: 65000, status: "قيد الانتظار" },
            { id: "ORD-9839", customer: "ياسر محمود", product: "Mechanical Keyboard", total: 3200, status: "تم الشحن" },
            { id: "ORD-9838", customer: "عبد الرحمن حسن", product: "Smart Home Hub", total: 5500, status: "ملغي" }
        ];

        // State holder
        let products = [];
        let orders = [];

        // Initialization
        document.addEventListener('DOMContentLoaded', () => {
            // Load products from localStorage or set defaults
            if (!localStorage.getItem('lapstore_products')) {
                localStorage.setItem('lapstore_products', JSON.stringify(defaultProducts));
            }
            products = JSON.parse(localStorage.getItem('lapstore_products'));

            // Load orders from localStorage or set defaults
            if (!localStorage.getItem('lapstore_orders')) {
                localStorage.setItem('lapstore_orders', JSON.stringify(defaultOrders));
            }
            orders = JSON.parse(localStorage.getItem('lapstore_orders'));

            // Render components
            renderProducts();
            renderOrders();
            renderCharts();
        });

        // Toast alert helper
        function triggerToast(message, type = "success") {
            const toast = document.getElementById('toast');
            const toastMsg = document.getElementById('toastMessage');
            
            toastMsg.innerText = message;
            if (type === "error") {
                toast.classList.remove('bg-emerald-500');
                toast.classList.add('bg-rose-500');
            } else {
                toast.classList.remove('bg-rose-500');
                toast.classList.add('bg-emerald-500');
            }

            // Slide in
            toast.classList.remove('translate-y-24', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');

            setTimeout(() => {
                // Slide out
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-24', 'opacity-0');
            }, 3000);
        }

        // Render products in the datatable
        function renderProducts(filtered = products) {
            const body = document.getElementById('products-table-body');
            body.innerHTML = '';

            filtered.forEach((product, idx) => {
                const tr = document.createElement('tr');
                tr.className = "hover:bg-slate-800/20 transition";
                tr.innerHTML = `
                    <td class="p-4 font-bold text-white">${product.name}</td>
                    <td class="p-4">
                        <span class="text-xs bg-slate-800 border border-slate-700 text-accent font-semibold px-2.5 py-1 rounded-lg">
                            ${product.category}
                        </span>
                    </td>
                    <td class="p-4 font-extrabold text-accent">${Number(product.price).toLocaleString()} ج.م</td>
                    <td class="p-4 text-xs text-slate-400 max-w-xs truncate" title="${product.desc}">${product.desc}</td>
                    <td class="p-4 text-center">
                        <div class="flex gap-2 justify-center">
                            <button onclick="openProductModal('edit', ${idx})" class="w-8 h-8 rounded-lg bg-indigo-600/20 text-indigo-400 border border-indigo-500/20 hover:bg-indigo-600 hover:text-white transition flex items-center justify-center" title="تعديل">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <button onclick="deleteProduct(${idx})" class="w-8 h-8 rounded-lg bg-rose-600/20 text-rose-400 border border-rose-500/20 hover:bg-rose-600 hover:text-white transition flex items-center justify-center" title="حذف">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </div>
                    </td>
                `;
                body.appendChild(tr);
            });

            // Update KPI count
            document.getElementById('kpi-products-count').innerText = `${products.length} منتجات`;
        }

        // Filter products in search
        function filterProducts() {
            const query = document.getElementById('productSearch').value.toLowerCase();
            const filtered = products.filter(p => 
                p.name.toLowerCase().includes(query) || 
                p.category.toLowerCase().includes(query) ||
                p.desc.toLowerCase().includes(query)
            );
            renderProducts(filtered);
        }

        // Modal Operations
        function openProductModal(mode, index = null) {
            const modal = document.getElementById('productModal');
            const title = document.getElementById('modalTitle');
            const form = document.getElementById('productForm');
            
            // Clean
            form.reset();

            if (mode === 'add') {
                title.innerText = 'إضافة منتج جديد للمتجر';
                document.getElementById('modalProductIndex').value = '';
            } else if (mode === 'edit' && index !== null) {
                const product = products[index];
                title.innerText = 'تعديل بيانات المنتج';
                document.getElementById('modalProductIndex').value = index;
                document.getElementById('modalProductName').value = product.name;
                document.getElementById('modalProductCategory').value = product.category;
                document.getElementById('modalProductPrice').value = product.price;
                document.getElementById('modalProductDesc').value = product.desc;
            }

            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.querySelector('.transform').classList.remove('scale-95');
            modal.querySelector('.transform').classList.add('scale-100');
        }

        function closeProductModal() {
            const modal = document.getElementById('productModal');
            modal.classList.add('opacity-0', 'pointer-events-none');
            modal.querySelector('.transform').classList.remove('scale-100');
            modal.querySelector('.transform').classList.add('scale-95');
        }

        // Add / Edit submission
        function saveProduct(event) {
            event.preventDefault();
            
            const index = document.getElementById('modalProductIndex').value;
            const name = document.getElementById('modalProductName').value;
            const category = document.getElementById('modalProductCategory').value;
            const price = parseFloat(document.getElementById('modalProductPrice').value);
            const desc = document.getElementById('modalProductDesc').value;

            const productData = { name, category, price, desc };

            if (index === '') {
                // Add Mode
                products.push(productData);
                triggerToast('تمت إضافة المنتج الجديد بنجاح!');
            } else {
                // Edit Mode
                products[parseInt(index)] = productData;
                triggerToast('تم تحديث بيانات المنتج بنجاح!');
            }

            // Persist
            localStorage.setItem('lapstore_products', JSON.stringify(products));
            renderProducts();
            closeProductModal();
            updateChartValues();
        }

        // Delete Product
        function deleteProduct(index) {
            if (confirm('هل أنت متأكد من رغبتك في حذف هذا المنتج؟')) {
                products.splice(index, 1);
                localStorage.setItem('lapstore_products', JSON.stringify(products));
                renderProducts();
                triggerToast('تم حذف المنتج بنجاح!', 'error');
                updateChartValues();
            }
        }

        // Render Orders Table
        function renderOrders() {
            const body = document.getElementById('orders-table-body');
            body.innerHTML = '';

            orders.forEach((order, idx) => {
                let badgeClass = "bg-slate-800 text-slate-300";
                if (order.status === "مكتمل") badgeClass = "bg-emerald-500/10 border border-emerald-500/20 text-emerald-400";
                else if (order.status === "قيد التجهيز") badgeClass = "bg-blue-500/10 border border-blue-500/20 text-blue-400";
                else if (order.status === "قيد الانتظار") badgeClass = "bg-amber-500/10 border border-amber-500/20 text-amber-400";
                else if (order.status === "تم الشحن") badgeClass = "bg-purple-500/10 border border-purple-500/20 text-purple-400";
                else if (order.status === "ملغي") badgeClass = "bg-rose-500/10 border border-rose-500/20 text-rose-400";

                const tr = document.createElement('tr');
                tr.className = "hover:bg-slate-800/20 transition";
                tr.innerHTML = `
                    <td class="p-4 font-mono font-bold text-slate-400">${order.id}</td>
                    <td class="p-4 font-bold text-white">${order.customer}</td>
                    <td class="p-4 text-slate-300">${order.product}</td>
                    <td class="p-4 font-bold text-accent">${Number(order.total).toLocaleString()} ج.م</td>
                    <td class="p-4">
                        <span class="text-xs font-semibold px-2.5 py-1.5 rounded-lg ${badgeClass}">
                            ${order.status}
                        </span>
                    </td>
                    <td class="p-4 text-center">
                        <select onchange="updateOrderStatus(${idx}, this.value)" class="text-xs bg-darkBg border border-darkBorder rounded-lg px-2 py-1.5 focus:border-accent text-slate-300 outline-none cursor-pointer">
                            <option value="قيد الانتظار" ${order.status === 'قيد الانتظار' ? 'selected' : ''}>قيد الانتظار</option>
                            <option value="قيد التجهيز" ${order.status === 'قيد التجهيز' ? 'selected' : ''}>قيد التجهيز</option>
                            <option value="تم الشحن" ${order.status === 'تم الشحن' ? 'selected' : ''}>تم الشحن</option>
                            <option value="مكتمل" ${order.status === 'مكتمل' ? 'selected' : ''}>مكتمل</option>
                            <option value="ملغي" ${order.status === 'ملغي' ? 'selected' : ''}>ملغي</option>
                        </select>
                    </td>
                `;
                body.appendChild(tr);
            });
        }

        // Update order status
        function updateOrderStatus(index, newStatus) {
            orders[index].status = newStatus;
            localStorage.setItem('lapstore_orders', JSON.stringify(orders));
            renderOrders();
            triggerToast('تم تحديث حالة الطلب بنجاح!');
        }

        // Charting Logic
        let salesChart = null;
        let doughnutChart = null;

        function renderCharts() {
            // 1. Sales Line Chart
            const salesCtx = document.getElementById('salesLineChart').getContext('2d');
            salesChart = new Chart(salesCtx, {
                type: 'line',
                data: {
                    labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'],
                    datasets: [{
                        label: 'المبيعات الشهرية (ج.م)',
                        data: [45000, 68000, 115000, 150000, 195000, 180000, 240000, 290000, 275000, 310000, 385000, 420000],
                        borderColor: '#06B6D4',
                        backgroundColor: 'rgba(6, 182, 212, 0.05)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#0B0F19',
                        pointBorderColor: '#06B6D4',
                        pointBorderWidth: 2,
                        pointRadius: 5,
                        pointHoverRadius: 7
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            grid: {
                                color: '#1F2937'
                            },
                            ticks: {
                                color: '#94A3B8',
                                font: {
                                    family: 'Cairo'
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                color: '#94A3B8',
                                font: {
                                    family: 'Cairo'
                                }
                            }
                        }
                    }
                }
            });

            // 2. Categories doughnut Chart
            const doughnutCtx = document.getElementById('categoriesDoughnutChart').getContext('2d');
            doughnutChart = new Chart(doughnutCtx, {
                type: 'doughnut',
                data: {
                    labels: ['لابتوب', 'كاميرات', 'شاشات', 'اكسسوارات', 'أنظمة أمنية'],
                    datasets: [{
                        data: [10, 10, 10, 10, 10], // Injected on calculate
                        backgroundColor: ['#4F46E5', '#06B6D4', '#8B5CF6', '#F59E0B', '#10B981'],
                        borderColor: '#111827',
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: '#94A3B8',
                                font: {
                                    family: 'Cairo',
                                    size: 11
                                },
                                padding: 15
                            }
                        }
                    },
                    cutout: '65%'
                }
            });

            updateChartValues();
        }

        // Dynamically compute category counts and inject in Doughnut Chart
        function updateChartValues() {
            if (!doughnutChart) return;

            const counts = {
                'لابتوب': 0,
                'كاميرات': 0,
                'شاشات': 0,
                'اكسسوارات': 0,
                'أنظمة أمنية': 0
            };

            products.forEach(p => {
                if (counts[p.category] !== undefined) {
                    counts[p.category]++;
                }
            });

            doughnutChart.data.datasets[0].data = [
                counts['لابتوب'],
                counts['كاميرات'],
                counts['شاشات'],
                counts['اكسسوارات'],
                counts['أنظمة أمنية']
            ];
            
            doughnutChart.update();
        }
    </script>
</body>
</html>
