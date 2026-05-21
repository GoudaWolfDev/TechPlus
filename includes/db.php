<?php
// self-healing database connection file for متجر تيك بلس
// Developed by Gouda Nasralla (@GoudaWolfDev)

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'lapstore';

$conn = null;
$db_fallback = false;

// Try to connect to MySQL server
try {
    // Disable error reporting temporarily to handle connection failures gracefully
    mysqli_report(MYSQLI_REPORT_OFF);
    
    $conn = @new mysqli($db_host, $db_user, $db_pass);
    
    if ($conn->connect_error) {
        $db_fallback = true;
    } else {
        // Connected to MySQL server! Let's check if the database exists or create it
        $db_check = $conn->query("CREATE DATABASE IF NOT EXISTS `$db_name` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
        if (!$db_check) {
            $db_fallback = true;
        } else {
            // Select the database
            $conn->select_db($db_name);
            $conn->set_charset("utf8mb4");
            
            // Create products table
            $create_products_table = "CREATE TABLE IF NOT EXISTS `products` (
                `id` INT AUTO_INCREMENT PRIMARY KEY,
                `name` VARCHAR(255) NOT NULL,
                `category` VARCHAR(100) NOT NULL,
                `price` DECIMAL(10,2) NOT NULL,
                `description` TEXT,
                `image` VARCHAR(255) DEFAULT NULL,
                `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
            
            $conn->query($create_products_table);
            
            // Create orders table
            $create_orders_table = "CREATE TABLE IF NOT EXISTS `orders` (
                `id` VARCHAR(50) PRIMARY KEY,
                `customer` VARCHAR(255) NOT NULL,
                `product` VARCHAR(255) NOT NULL,
                `total` DECIMAL(10,2) NOT NULL,
                `status` VARCHAR(50) NOT NULL,
                `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";
            
            $conn->query($create_orders_table);
            
            // Seed products if empty
            $prod_count_res = $conn->query("SELECT COUNT(*) as cnt FROM `products`");
            $prod_count_row = $prod_count_res->fetch_assoc();
            if ($prod_count_row['cnt'] == 0) {
                $default_products = [
                    [
                        "name" => "MacBook Pro M2 2023",
                        "category" => "لابتوب",
                        "price" => 45000.00,
                        "desc" => "شريحة Apple M2 القوية، ذاكرة 16GB، سعة 512GB SSD شاشة Retina خيالية.",
                        "image" => "https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    ],
                    [
                        "name" => "Sony Alpha a7 III",
                        "category" => "كاميرات",
                        "price" => 65000.00,
                        "desc" => "كاميرا ميرورليس احترافية بعدسة خارقة لتصوير سينمائي فائق الدقة.",
                        "image" => "https://images.unsplash.com/photo-1550009158-9ebf69173e03?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    ],
                    [
                        "name" => "Dell UltraSharp 27\"",
                        "category" => "شاشات",
                        "price" => 12500.00,
                        "desc" => "شاشة مصممي الجرافيك وصناع المحتوى بدقة 4K فائقة الوضوح والألوان.",
                        "image" => "https://images.unsplash.com/photo-1587831990711-23ca6441447b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    ],
                    [
                        "name" => "Mechanical Keyboard",
                        "category" => "اكسسوارات",
                        "price" => 3200.00,
                        "desc" => "كيبورد ميكانيكي لعشاق الألعاب والسرعة في الكتابة بإضاءة RGB خلابة.",
                        "image" => "https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    ],
                    [
                        "name" => "Dell XPS 15",
                        "category" => "لابتوب",
                        "price" => 38500.00,
                        "desc" => "شاشة لمس InfinityEdge بدقة 4K، معالج Core i7 خارق وهارد SSD فائق السرعة.",
                        "image" => "https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    ],
                    [
                        "name" => "Smart Home Hub",
                        "category" => "أنظمة أمنية",
                        "price" => 5500.00,
                        "desc" => "جهاز تحكم مركزي متكامل للربط بين أجهزة الأمان وكاميرات المراقبة بالمنزل.",
                        "image" => "https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                    ]
                ];
                
                $stmt = $conn->prepare("INSERT INTO `products` (`name`, `category`, `price`, `description`, `image`) VALUES (?, ?, ?, ?, ?)");
                foreach ($default_products as $p) {
                    $stmt->bind_param("ssdss", $p['name'], $p['category'], $p['price'], $p['desc'], $p['image']);
                    $stmt->execute();
                }
                $stmt->close();
            }
            
            // Seed orders if empty
            $ord_count_res = $conn->query("SELECT COUNT(*) as cnt FROM `orders`");
            $ord_count_row = $ord_count_res->fetch_assoc();
            if ($ord_count_row['cnt'] == 0) {
                $default_orders = [
                    ["id" => "ORD-9842", "customer" => "أحمد عبد الله", "product" => "MacBook Pro M2", "total" => 45000.00, "status" => "مكتمل"],
                    ["id" => "ORD-9841", "customer" => "محمد علي", "product" => "Dell UltraSharp 27\"", "total" => 12500.00, "status" => "قيد التجهيز"],
                    ["id" => "ORD-9840", "customer" => "إبراهيم مصطفى", "product" => "Sony Alpha a7 III", "total" => 65000.00, "status" => "قيد الانتظار"],
                    ["id" => "ORD-9839", "customer" => "ياسر محمود", "product" => "Mechanical Keyboard", "total" => 3200.00, "status" => "تم الشحن"],
                    ["id" => "ORD-9838", "customer" => "عبد الرحمن حسن", "product" => "Smart Home Hub", "total" => 5500.00, "status" => "ملغي"]
                ];
                
                $stmt = $conn->prepare("INSERT INTO `orders` (`id`, `customer`, `product`, `total`, `status`) VALUES (?, ?, ?, ?, ?)");
                foreach ($default_orders as $o) {
                    $stmt->bind_param("ssdds", $o['id'], $o['customer'], $o['product'], $o['total'], $o['status']);
                    $stmt->execute();
                }
                $stmt->close();
            }
        }
    }
} catch (Exception $e) {
    $db_fallback = true;
}

// Global Static Mock Data for Fallback Mode
$mock_products = [
    [
        "id" => 1,
        "name" => "MacBook Pro M2 2023",
        "category" => "لابتوب",
        "price" => 45000.00,
        "description" => "شريحة Apple M2 القوية، ذاكرة 16GB، سعة 512GB SSD شاشة Retina خيالية.",
        "image" => "https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
    ],
    [
        "id" => 2,
        "name" => "Sony Alpha a7 III",
        "category" => "كاميرات",
        "price" => 65000.00,
        "description" => "كاميرا ميرورليس احترافية بعدسة خارقة لتصوير سينمائي فائق الدقة.",
        "image" => "https://images.unsplash.com/photo-1550009158-9ebf69173e03?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
    ],
    [
        "id" => 3,
        "name" => "Dell UltraSharp 27\"",
        "category" => "شاشات",
        "price" => 12500.00,
        "description" => "شاشة مصممي الجرافيك وصناع المحتوى بدقة 4K فائقة الوضوح والألوان.",
        "image" => "https://images.unsplash.com/photo-1587831990711-23ca6441447b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
    ],
    [
        "id" => 4,
        "name" => "Mechanical Keyboard",
        "category" => "اكسسوارات",
        "price" => 3200.00,
        "description" => "كيبورد ميكانيكي لعشاق الألعاب والسرعة في الكتابة بإضاءة RGB خلابة.",
        "image" => "https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
    ],
    [
        "id" => 5,
        "name" => "Dell XPS 15",
        "category" => "لابتوب",
        "price" => 38500.00,
        "description" => "شاشة لمس InfinityEdge بدقة 4K، معالج Core i7 خارق وهارد SSD فائق السرعة.",
        "image" => "https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
    ],
    [
        "id" => 6,
        "name" => "Smart Home Hub",
        "category" => "أنظمة أمنية",
        "price" => 5500.00,
        "description" => "جهاز تحكم مركزي متكامل للربط بين أجهزة الأمان وكاميرات المراقبة بالمنزل.",
        "image" => "https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
    ]
];

$mock_orders = [
    ["id" => "ORD-9842", "customer" => "أحمد عبد الله", "product" => "MacBook Pro M2", "total" => 45000.00, "status" => "مكتمل"],
    ["id" => "ORD-9841", "customer" => "محمد علي", "product" => "Dell UltraSharp 27\"", "total" => 12500.00, "status" => "قيد التجهيز"],
    ["id" => "ORD-9840", "customer" => "إبراهيم مصطفى", "product" => "Sony Alpha a7 III", "total" => 65000.00, "status" => "قيد الانتظار"],
    ["id" => "ORD-9839", "customer" => "ياسر محمود", "product" => "Mechanical Keyboard", "total" => 3200.00, "status" => "تم الشحن"],
    ["id" => "ORD-9838", "customer" => "عبد الرحمن حسن", "product" => "Smart Home Hub", "total" => 5500.00, "status" => "ملغي"]
];
?>
