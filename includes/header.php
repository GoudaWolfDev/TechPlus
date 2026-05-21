<?php include_once __DIR__ . '/db.php'; ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>متجر تيك بلس - Premium Tech Store | Developed by Gouda Nasralla</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    
    <!-- Google Fonts: Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0B0F19', // Slate 950 Deep Navy
                        secondary: '#4F46E5', // Indigo 600
                        accent: '#06B6D4', // Cyan 500
                    },
                    fontFamily: {
                        sans: ['Cairo', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-primary text-white shadow-xl sticky top-0 z-50 border-b border-white/5">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="index.php" class="text-2xl font-bold flex items-center gap-2 tracking-wide group">
                    <i class="fa-solid fa-laptop-code text-accent group-hover:rotate-12 transition duration-300"></i>
                    <span class="text-white">متجر <span class="text-accent">تيك بلس</span></span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8 space-x-reverse">
                    <a href="index.php" class="hover:text-accent font-semibold transition duration-300">الرئيسية</a>
                    <a href="store.php" class="hover:text-accent font-semibold transition duration-300">المتجر</a>
                    <a href="index.php#services" class="hover:text-accent font-semibold transition duration-300">خدماتنا</a>
                    <a href="index.php#contact" class="hover:text-accent font-semibold transition duration-300">اتصل بنا</a>
                    
                    <a href="dashboard.php" class="bg-secondary/20 hover:bg-secondary/40 text-accent font-bold py-2 px-5 rounded-full border border-secondary/50 hover:border-accent transition duration-300 flex items-center gap-2">
                        <i class="fa-solid fa-chart-line text-sm"></i>
                        لوحة التحكم
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden text-2xl hover:text-accent focus:outline-none transition duration-300">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-slate-900 border-t border-white/10 py-4 px-4 space-y-3">
            <a href="index.php" class="block py-2 px-3 rounded hover:bg-slate-800 hover:text-accent transition duration-300 font-semibold">الرئيسية</a>
            <a href="store.php" class="block py-2 px-3 rounded hover:bg-slate-800 hover:text-accent transition duration-300 font-semibold">المتجر</a>
            <a href="index.php#services" class="block py-2 px-3 rounded hover:bg-slate-800 hover:text-accent transition duration-300 font-semibold">خدماتنا</a>
            <a href="index.php#contact" class="block py-2 px-3 rounded hover:bg-slate-800 hover:text-accent transition duration-300 font-semibold">اتصل بنا</a>
            <a href="dashboard.php" class="block py-2.5 px-4 bg-secondary/30 text-accent rounded-lg border border-secondary hover:bg-secondary/50 transition duration-300 font-bold flex items-center justify-center gap-2">
                <i class="fa-solid fa-chart-line"></i>
                لوحة التحكم
            </a>
        </div>
    </nav>
