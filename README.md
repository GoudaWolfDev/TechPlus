

<p align="center">
  <img src="favicon.png" alt="LapStore Logo" width="100" height="100">
</p>

<p align="center">
  <strong>A high-fidelity modern tech store mockup and fully interactive dark-themed administration dashboard.</strong>
  <br>
  <i>متجر إلكتروني عصري مخصص للأجهزة التقنية مدعوم بلوحة تحكم تفاعلية متطورة لإدارة المنتجات والطلبات.</i>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Developer-Gouda%20Nasralla-4F46E5?style=for-the-badge&logo=github" alt="Developer Badge">
  <img src="https://img.shields.io/badge/GitHub-GoudaWolfDev-06B6D4?style=for-the-badge&logo=github" alt="GitHub Badge">
  <img src="https://img.shields.io/badge/License-MIT-emerald?style=for-the-badge" alt="License Badge">
</p>

---

## 🌟 Key Features / المميزات الرئيسية

### 🎨 Frontend Showcase (المتجر الرئيسي)
* **Premium Aesthetics**: Stunning layouts utilizing electric navy, indigo, and cyan neon gradients.
* **Cairo Typography**: Professionally optimized Arabic fonts with modern scale weightings.
* **AOS Animation System**: Elegant fade-ins, zoom transitions, and smooth hover scales on scroll.
* **Services & Why Choose Us**: Dedicated sections marketing the core values of the business (Shipping, Maintenance, Warrantee, Support).
* **Responsive Store Layout**: A fully-fledged filterable catalog screen supporting category counts, custom price range sliders, and active brand selections.

### 📊 Admin Analytics & CRUD Dashboard (لوحة التحكم التفاعلية)
* **Obsidian Dark Theme**: A highly immersive obsidian dark-mode interface built for telemetry and administration.
* **Telemetry Statistics (KPI Cards)**: Visual indicators detailing total sales, active orders, product telemetry, and daily sessions.
* **Dynamic Charting (Chart.js)**: 
  * Linear multi-month charts mapping monthly income trends.
  * Doughnut charts automatically distributing inventory counts based on categories.
* **Mock Product CRUD**: A fully functional product manager allowing administrators to **Create, Read, Update, and Delete (CRUD)** items. Data is automatically persisted within `localStorage` for dynamic zero-latency browser testing!
* **Order Status Pipeline**: Interactive order logs allowing live status changes (Pending, Processing, Shipped, Completed, Cancelled) via integrated drop-downs.
* **Lead Developer Badge**: Prominently features creator profile card attributing the system to **Gouda Nasralla**.

---

## 🛠️ Technology Stack / التقنيات المستخدمة

* **Backend / Scripting**: PHP (Page modularity, components include layout injection)
* **Styling & Theme**: Tailwind CSS (Tailwind CDN Integration with custom primary Navy theme configurations)
* **Analytics**: Chart.js (Data visualizations & dynamic category telemetry)
* **Animations**: AOS Library (Animate On Scroll) & Custom Tailwind Keyframe micro-animations
* **Icons**: FontAwesome 6 (Vector graphics)
* **Fonts**: Google Fonts (Cairo Typeface)

---

## 📁 File Structure / هيكلية المجلدات

```text
LapStore/
├── assets/
│   ├── css/
│   │   └── style.css      # Custom specific overrides
│   └── js/
│       └── main.js       # Global scripts & mobile menu controller
├── includes/
│   ├── header.php        # Premium navbar & Tailwind core config
│   └── footer.php        # Dynamic attribution footer & social links
├── index.php             # Showcase homepage with features & products
├── store.php             # Responsive store with sidebar filters
├── dashboard.php         # Fully interactive administrative dark dashboard
└── favicon.png           # Site visual shortcut icon
```

---

## 🚀 Local Setup / طريقة التشغيل المحلية (XAMPP)

Follow these simple steps to run this project locally on your machine:

1. **Install XAMPP**: Ensure you have XAMPP installed on your Windows machine (download from [Apache Friends](https://www.apachefriends.org/)).
2. **Clone / Copy Repository**: Download this project and place it inside your XAMPP's public directory:
   ```bash
   C:\xampp\htdocs\projects\LapStore\
   ```
3. **Start Apache Server**: Open your **XAMPP Control Panel** and click **Start** next to the **Apache** service.
4. **Open Browser**: Launch your browser and navigate to the local host URL:
   ```text
   http://localhost/projects/LapStore/index.php
   ```
5. **Access Dashboard**: To view the premium admin area, either click the glowing **"لوحة التحكم"** button in the header navbar or visit:
   ```text
   http://localhost/projects/LapStore/dashboard.php
   ```

---

## 👨‍💻 Author & Lead Developer / المطور والمصمم

This showcase template was designed, styled, and programmed by:

* **Name**: **Gouda Nasralla (جودة نصر الله)**
* **GitHub**: [@GoudaWolfDev](https://github.com/GoudaWolfDev)
* **Role**: Full-Stack & UI/UX Software Engineer

> *Feel free to star ⭐ this repository if you find it helpful! For collaborations or technical inquiries, reach out at [contact@goudawolf.dev](mailto:contact@goudawolf.dev).*

---

## 📄 License / الترخيص

This project is licensed under the MIT License - see the LICENSE details for permissions.
