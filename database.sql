-- Database schema for LapStore project
-- This file creates the project schema and seeds initial sample data.

CREATE DATABASE IF NOT EXISTS `lapstore`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `lapstore`;

CREATE TABLE IF NOT EXISTS `products` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `category` VARCHAR(100) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `description` TEXT,
  `image` VARCHAR(255) DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `orders` (
  `id` VARCHAR(50) PRIMARY KEY,
  `customer` VARCHAR(255) NOT NULL,
  `product` VARCHAR(255) NOT NULL,
  `total` DECIMAL(10,2) NOT NULL,
  `status` VARCHAR(50) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`name`, `category`, `price`, `description`, `image`) VALUES
  ('MacBook Pro M2 2023', 'لابتوب', 45000.00, 'شريحة Apple M2 القوية، ذاكرة 16GB، سعة 512GB SSD شاشة Retina خيالية.', 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
  ('Sony Alpha a7 III', 'كاميرات', 65000.00, 'كاميرا ميرورليس احترافية بعدسة خارقة لتصوير سينمائي فائق الدقة.', 'https://images.unsplash.com/photo-1550009158-9ebf69173e03?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
  ('Dell UltraSharp 27"', 'شاشات', 12500.00, 'شاشة مصممي الجرافيك وصناع المحتوى بدقة 4K فائقة الوضوح والألوان.', 'https://images.unsplash.com/photo-1587831990711-23ca6441447b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
  ('Mechanical Keyboard', 'اكسسوارات', 3200.00, 'كيبورد ميكانيكي لعشاق الألعاب والسرعة في الكتابة بإضاءة RGB خلابة.', 'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
  ('Dell XPS 15', 'لابتوب', 38500.00, 'شاشة لمس InfinityEdge بدقة 4K، معالج Core i7 خارق وهارد SSD فائق السرعة.', 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'),
  ('Smart Home Hub', 'أنظمة أمنية', 5500.00, 'جهاز تحكم مركزي متكامل للربط بين أجهزة الأمان وكاميرات المراقبة بالمنزل.', 'https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');

INSERT INTO `orders` (`id`, `customer`, `product`, `total`, `status`) VALUES
  ('ORD-9842', 'أحمد عبد الله', 'MacBook Pro M2', 45000.00, 'مكتمل'),
  ('ORD-9841', 'محمد علي', 'Dell UltraSharp 27"', 12500.00, 'قيد التجهيز'),
  ('ORD-9840', 'إبراهيم مصطفى', 'Sony Alpha a7 III', 65000.00, 'قيد الانتظار'),
  ('ORD-9839', 'ياسر محمود', 'Mechanical Keyboard', 3200.00, 'تم الشحن'),
  ('ORD-9838', 'عبد الرحمن حسن', 'Smart Home Hub', 5500.00, 'ملغي');
