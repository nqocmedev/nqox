<?php
// SEO configuration
$page_title = "DevProfile Pro - Hồ sơ Chuyên gia & Thanh toán";
$page_description = "Hồ sơ cá nhân hệ thống thanh toán QR Code và liên hệ đa nền tảng";
$page_keywords = "developer profile, thanh toán QR, PHP developer, fullstack, web development";
$page_author = "Tòng Văn Ngọc";
$page_url = "https://ceotcnqoc.shop";
$page_image = "assets/profile.jpg";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="author" content="<?php echo $page_author; ?>">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:image" content="<?php echo $page_image; ?>">
    <meta property="og:url" content="<?php echo $page_url; ?>">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="<?php echo $page_url; ?>">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        accent: '#8B5CF6',
                    },
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s ease-in-out infinite',
                        'bounce-slow': 'bounce 2s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
    <!-- Cherry Blossom Container -->
    <div id="cherry-blossom-container"></div>
    
    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-gradient-to-r from-primary to-accent rounded-lg flex items-center justify-center">
                        <i class="fas fa-code text-white text-xl"></i>
                    </div>
                    <h1 class="text-2xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">
                        DevProfile<span class="text-gray-700"> CEO TVN</span>
                    </h1>
                </div>
                
                <nav class="hidden md:flex space-x-8">
                    <a href="#profile" class="font-medium hover:text-primary transition-colors">Hồ Sơ</a>
                    <a href="#payment" class="font-medium hover:text-primary transition-colors">Thanh Toán</a>
                    <a href="#contact" class="font-medium hover:text-primary transition-colors">Liên Hệ</a>
                    <a href="#about" class="font-medium hover:text-primary transition-colors">Giới Thiệu</a>
                </nav>
                
                <button id="mobile-menu-btn" class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Breaking News Bar -->
        <div class="bg-gradient-to-r from-primary to-accent text-white py-2 overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="flex items-center">
                    <span class="bg-white text-primary font-bold px-3 py-1 rounded mr-4 text-sm">MỚI</span>
                    <div class="breaking-news-content flex-1 overflow-hidden">
                        <div class="breaking-news-text whitespace-nowrap inline-block animate-marquee">
                            🚀 Chào mừng đến với DevProfile Pro - Nền tảng hồ sơ chuyên nghiệp của TVN! 
                            ✨ Hỗ trợ thanh toán QR Code • Liên hệ đa nền tảng • UI/UX tuyệt đẹp •
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-lg">
            <div class="flex flex-col py-4 px-4 space-y-3">
                <a href="#profile" class="font-medium hover:text-primary transition-colors py-2">Hồ Sơ</a>
                <a href="#payment" class="font-medium hover:text-primary transition-colors py-2">Thanh Toán</a>
                <a href="#contact" class="font-medium hover:text-primary transition-colors py-2">Liên Hệ</a>
                <a href="#about" class="font-medium hover:text-primary transition-colors py-2">Giới Thiệu</a>
            </div>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Profile Section -->
        <section id="profile" class="mb-16 scroll-mt-20">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                <!-- Profile Card -->
                <div class="w-full md:w-1/3">
                    <div class="bg-white rounded-2xl shadow-2xl p-6 transform hover:-translate-y-2 transition-transform duration-300">
                        <div class="relative mb-6">
                            <div class="w-40 h-40 mx-auto rounded-full bg-gradient-to-r from-primary to-accent p-1">
                                <img src="assets/profile.jpg" alt="Profile Picture" class="w-full h-full rounded-full object-cover">
                            </div>
                            <div class="absolute bottom-4 right-1/4 w-10 h-10 bg-green-500 rounded-full flex items-center justify-center border-4 border-white">
                                <i class="fas fa-check text-white text-sm"></i>
                            </div>
                        </div>
                        
                        <div class="text-center mb-6">
                            <h2 class="text-2xl font-bold flex items-center justify-center">
                                Tòng Văn Ngọc
                                <span class="ml-2 bg-blue-500 text-white text-xs font-semibold px-2 py-1 rounded-full flex items-center">
                                    <i class="fas fa-check-circle mr-1"></i>
                                </span>
                            </h2>
                            <p class="text-gray-600 mt-2">Full-stack Developer & UI/UX Designer</p>
                            <div class="flex justify-center mt-4 space-x-2">
                                <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">PHP 8.x</span>
                                <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">MySQL</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">Tailwind</span>
                                <span class="bg-yellow-100 text-yellow-800 text-xs px-3 py-1 rounded-full">JavaScript</span>
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Email</p>
                                    <p class="font-medium">tvngocc@gmail.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-phone text-green-600"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Điện thoại</p>
                                    <p class="font-medium">+84 83 696 8496</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-map-marker-alt text-purple-600"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Địa chỉ</p>
                                    <p class="font-medium">Tủa Chùa, Điện Biên, Việt Nam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Profile Details -->
                <div class="w-full md:w-2/3">
                    <div class="bg-white rounded-2xl shadow-xl p-8">
                        <h3 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                            <i class="fas fa-user-circle mr-3 text-primary"></i> Thông Tin Hồ Sơ
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-gradient-to-r from-blue-50 to-white p-5 rounded-xl border border-blue-100">
                                <h4 class="font-bold text-lg mb-3 text-gray-800 flex items-center">
                                    <i class="fas fa-laptop-code mr-2 text-primary"></i> Kỹ Năng Chuyên Môn
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-green-500 mr-2 text-sm"></i>
                                        <span>PHP 8.x & Laravel Framework</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-green-500 mr-2 text-sm"></i>
                                        <span>MySQL Database & Optimization</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-green-500 mr-2 text-sm"></i>
                                        <span>Tailwind CSS & Responsive Design</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-check-circle text-green-500 mr-2 text-sm"></i>
                                        <span>JavaScript (ES6+) & React.js</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="bg-gradient-to-r from-green-50 to-white p-5 rounded-xl border border-green-100">
                                <h4 class="font-bold text-lg mb-3 text-gray-800 flex items-center">
                                    <i class="fas fa-trophy mr-2 text-secondary"></i> Thành Tựu
                                </h4>
                                <ul class="space-y-2">
                                    <li class="flex items-center">
                                        <i class="fas fa-award text-yellow-500 mr-2 text-sm"></i>
                                        <span>Top Developer 2026 (TỰ XƯNG)</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-award text-yellow-500 mr-2 text-sm"></i>
                                        <span>5+ Years Experience (TỰ XƯNG)</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-award text-yellow-500 mr-2 text-sm"></i>
                                        <span>50+ Projects Completed (TỰ XƯNG)</span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fas fa-award text-yellow-500 mr-2 text-sm"></i>
                                        <span>Full-stack Certified (TỰ XƯNG)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mb-8">
                            <h4 class="font-bold text-lg mb-4 text-gray-800 flex items-center">
                                <i class="fas fa-briefcase mr-2 text-primary"></i> Kinh Nghiệm Làm Việc
                            </h4>
                            <div class="space-y-4">
                                <div class="border-l-4 border-primary pl-4 py-1">
                                    <h5 class="font-bold">Senior Full-stack Developer (TỰ XƯNG)</h5>
                                    <p class="text-gray-600">TechVision Inc. • 2021 - Hiện tại (TỰ XƯNG)</p>
                                    <p class="text-gray-700 mt-1">Phát triển hệ thống quản lý doanh nghiệp với PHP 8.x và React.js (TỰ XƯNG)</p>
                                </div>
                                <div class="border-l-4 border-green-500 pl-4 py-1">
                                    <h5 class="font-bold">Web Developer</h5>
                                    <p class="text-gray-600">Digital Solutions Co. • 2019 - 2021 (TỰ XƯNG)</p>
                                    <p class="text-gray-700 mt-1">Xây dựng website thương mại điện tử với Laravel và MySQL</p>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="font-bold text-lg mb-4 text-gray-800 flex items-center">
                                <i class="fas fa-graduation-cap mr-2 text-primary"></i> Học Vấn
                            </h4>
                            <div class="border-l-4 border-accent pl-4 py-1">
                                <h5 class="font-bold">Quản lý Thông tin</h5>
                                <p class="text-gray-600">Trường Đại học Nông Lâm Thái Nguyên</p>
                                <p class="text-gray-700 mt-1">Chuyên ngành Quản lý Thông tin & Công nghệ Web</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Payment Section -->
        <section id="payment" class="mb-16 scroll-mt-20">
            <div class="bg-gradient-to-r from-primary to-accent rounded-2xl shadow-2xl p-1">
                <div class="bg-white rounded-2xl p-8">
                    <h3 class="text-2xl font-bold mb-2 text-gray-800 flex items-center">
                        <i class="fas fa-qrcode mr-3 text-primary"></i> Thông Tin Thanh Toán
                    </h3>
                    <p class="text-gray-600 mb-8">Quét mã QR để chuyển khoản hoặc sử dụng thông tin tài khoản ngân hàng bên dưới</p>
                    
                    <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                        <!-- QR Code -->
                        <div class="w-full md:w-1/2 lg:w-1/3">
                            <div class="bg-gradient-to-br from-gray-50 to-white p-6 rounded-2xl shadow-lg border border-gray-200">
                                <div class="text-center mb-4">
                                    <h4 class="font-bold text-xl text-gray-800">QR Code Thanh Toán</h4>
                                    <p class="text-gray-600 text-sm">Quét bằng ứng dụng ngân hàng</p>
                                </div>
                                <div class="flex justify-center">
                                    <div class="relative p-4 bg-white rounded-xl shadow-inner">
                                        <!-- QR Code Image -->
                                        <img src="assets/qr-code.png" alt="QR Code Payment" class="w-64 h-64 mx-auto">
                                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-2 rounded-lg">
                                            <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                                                <i class="fas fa-qrcode text-white text-xl"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center mt-4 text-gray-700">
                                    <i class="fas fa-lightbulb text-yellow-500 mr-1"></i>
                                    Hỗ trợ VietQR, Momo, Zalopay, VNPay
                                </p>
                            </div>
                        </div>
                        
                        <!-- Bank Information -->
                        <div class="w-full md:w-2/3 lg:w-2/3">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Bank Card 1 -->
                                <div class="bg-gradient-to-r from-blue-50 to-white rounded-xl p-6 border border-blue-200 shadow-md hover:shadow-lg transition-shadow">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                            <i class="fas fa-university text-blue-600 text-xl"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-lg">Viettinbank</h4>
                                            <p class="text-gray-600 text-sm">Ngân hàng TMCP Công Thương Việt Nam</p>
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <div>
                                            <p class="text-gray-500 text-sm">Số tài khoản</p>
                                            <p class="font-mono font-bold text-lg text-gray-800">103885396004</p>
                                        </div>
                                        <div>
                                            <p class="text-gray-500 text-sm">Chủ tài khoản</p>
                                            <p class="font-medium text-gray-800">TONG VAN NGOC</p>
                                        </div>
                                        <div>
                                            <p class="text-gray-500 text-sm">Chi nhánh</p>
                                            <p class="font-medium text-gray-800">Thái Nguyên</p>
                                        </div>
                                    </div>
                                    <button class="mt-5 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition-colors flex items-center justify-center" onclick="copyToClipboard('0123 4567 8901')">
                                        <i class="far fa-copy mr-2"></i> Sao chép số tài khoản
                                    </button>
                                </div>
                                
                                <!-- Bank Card 2 -->
                                <div class="bg-gradient-to-r from-green-50 to-white rounded-xl p-6 border border-green-200 shadow-md hover:shadow-lg transition-shadow">
                                    <div class="flex items-center mb-4">
                                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                            <i class="fas fa-mobile-alt text-green-600 text-xl"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-lg">Ví MoMo</h4>
                                            <p class="text-gray-600 text-sm">Ví điện tử</p>
                                        </div>
                                    </div>
                                    <div class="space-y-3">
                                        <div>
                                            <p class="text-gray-500 text-sm">Số điện thoại</p>
                                            <p class="font-mono font-bold text-lg text-gray-800">0836968496</p>
                                        </div>
                                        <div>
                                            <p class="text-gray-500 text-sm">Chủ ví</p>
                                            <p class="font-medium text-gray-800">Tòng Văn Ngọc</p>
                                        </div>
                                        <div>
                                            <p class="text-gray-500 text-sm">Ưu đãi</p>
                                            <p class="font-medium text-gray-800">Giảm 10% phí chuyển khoản</p>
                                        </div>
                                    </div>
                                    <button class="mt-5 w-full bg-green-600 hover:bg-green-700 text-white font-medium py-3 rounded-lg transition-colors flex items-center justify-center" onclick="copyToClipboard('0123456789')">
                                        <i class="far fa-copy mr-2"></i> Sao chép số điện thoại
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Payment Notice -->
                            <div class="mt-8 p-5 bg-yellow-50 border border-yellow-200 rounded-xl">
                                <h4 class="font-bold text-lg mb-2 text-gray-800 flex items-center">
                                    <i class="fas fa-exclamation-circle text-yellow-600 mr-2"></i> Lưu ý khi thanh toán
                                </h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-1 text-sm"></i>
                                        <span>Vui lòng ghi nội dung chuyển khoản theo cú pháp: <code class="bg-gray-100 px-2 py-1 rounded">TEN_SANPHAM_SDT</code></span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-1 text-sm"></i>
                                        <span>Thanh toán sẽ được xử lý tự động trong vòng 5-10 phút</span>
                                    </li>
                                    <li class="flex items-start">
                                        <i class="fas fa-check text-green-500 mr-2 mt-1 text-sm"></i>
                                        <span>Liên hệ hỗ trợ thanh toán qua Zalo: <span class="font-bold">083 696 8496</span> nếu có vấn đề</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- About Section -->
        <section id="about" class="mb-16 scroll-mt-20">
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h3 class="text-2xl font-bold mb-6 text-gray-800 flex items-center">
                    <i class="fas fa-info-circle mr-3 text-primary"></i> Giới Thiệu Website
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-gradient-to-br from-blue-50 to-white p-6 rounded-xl border border-blue-100 text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-user-tie text-blue-600 text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Hồ Sơ Chuyên Nghiệp</h4>
                        <p class="text-gray-600">Trình bày thông tin cá nhân, kỹ năng và kinh nghiệm một cách chuyên nghiệp, ấn tượng</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-green-50 to-white p-6 rounded-xl border border-green-100 text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-qrcode text-green-600 text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Thanh Toán Đa Nền Tảng</h4>
                        <p class="text-gray-600">Hỗ trợ nhiều phương thức thanh toán qua QR Code và thông tin ngân hàng đầy đủ</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-purple-50 to-white p-6 rounded-xl border border-purple-100 text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-comments text-purple-600 text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Liên Hệ Tức Thì</h4>
                        <p class="text-gray-600">Kết nối nhanh chóng với admin qua Zalo, Facebook, Telegram chỉ với 1 click</p>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-gray-50 to-white p-6 rounded-xl border border-gray-200">
                    <h4 class="font-bold text-lg mb-4 text-gray-800">Công Nghệ Sử Dụng</h4>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex items-center bg-white px-4 py-2 rounded-lg shadow-sm">
                            <i class="fab fa-php text-purple-600 text-2xl mr-2"></i>
                            <span class="font-medium">PHP 8.x</span>
                        </div>
                        <div class="flex items-center bg-white px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-database text-blue-600 text-2xl mr-2"></i>
                            <span class="font-medium">MySQL</span>
                        </div>
                        <div class="flex items-center bg-white px-4 py-2 rounded-lg shadow-sm">
                            <i class="fab fa-js-square text-yellow-500 text-2xl mr-2"></i>
                            <span class="font-medium">JavaScript</span>
                        </div>
                        <div class="flex items-center bg-white px-4 py-2 rounded-lg shadow-sm">
                            <i class="fab fa-css3-alt text-blue-500 text-2xl mr-2"></i>
                            <span class="font-medium">Tailwind CSS</span>
                        </div>
                        <div class="flex items-center bg-white px-4 py-2 rounded-lg shadow-sm">
                            <i class="fas fa-bolt text-green-600 text-2xl mr-2"></i>
                            <span class="font-medium">UI/UX Hiệu Ứng</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-10 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-primary to-accent rounded-lg flex items-center justify-center">
                            <i class="fas fa-code text-white text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold ml-3">DevProfile<span class="text-blue-300"> TVN</span></h2>
                    </div>
                    <p class="text-gray-400">Nền tảng hồ sơ chuyên nghiệp tích hợp thanh toán và liên hệ đa nền tảng dành cho developers.</p>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Thông Tin Liên Hệ</h3>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-3 mt-1 text-primary"></i>
                            <span>Khu Bờ Ao Sư Phạm, Ngõ 25, Nhà Số 13 Tổ 67 Phan Đình Phùng TP Thái Nguyên</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mr-3 mt-1 text-primary"></i>
                            <span>+84 836 968 496</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mr-3 mt-1 text-primary"></i>
                            <span>tvngocc@gmail.com</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Liên Kết Nhanh</h3>
                    <ul class="space-y-2">
                        <li><a href="#profile" class="text-gray-400 hover:text-white transition-colors">Hồ Sơ Cá Nhân</a></li>
                        <li><a href="#payment" class="text-gray-400 hover:text-white transition-colors">Thanh Toán</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Liên Hệ Admin</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">Giới Thiệu</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-xl font-bold mb-4">Kết Nối Với Chúng Tôi</h3>
                    <div class="flex space-x-4 mb-6">
                        <a href="fb.com/vnqocyeuem" class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-400 rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center hover:bg-purple-700 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                    <p class="text-gray-400">Đăng ký nhận tin mới nhất</p>
                    <div class="mt-2 flex">
                        <input type="email" placeholder="Email của bạn" class="flex-1 px-4 py-2 rounded-l-lg text-gray-900">
                        <button class="bg-primary hover:bg-blue-700 px-4 py-2 rounded-r-lg">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-6 text-center text-gray-500">
                <p>&copy; <?php echo date('Y'); ?> CEOTVNQOC.SHOP - Tất cả quyền được bảo lưu.</p>
                <p class="mt-2">Khu Bờ Ao Sư Phạm, Ngõ 25, Nhà Số 13 Tổ 67 Phan Đình Phùng TP Thái Nguyên • Điện thoại: +84 836968496</p>
            </div>
        </div>
    </footer>
    
    <!-- Floating Action Buttons (Contact Admin) -->
    <div class="fixed right-6 bottom-6 z-50 flex flex-col space-y-4">
        <!-- Zalo Button -->
        <a href="https://zalo.me/0387905496" target="_blank" class="relative group">
            <div class="absolute right-full mr-3 bg-white text-gray-800 px-3 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                Liên hệ Zalo
                <div class="absolute top-1/2 right-0 transform translate-x-1/2 -translate-y-1/2 rotate-45 w-2 h-2 bg-white"></div>
            </div>
            <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all hover:scale-110">
                <span class="text-white font-bold text-lg">Z</span>
            </div>
        </a>
        
        <!-- Facebook Button -->
        <a href="https://facebook.com/vnqocyeuem" target="_blank" class="relative group">
            <div class="absolute right-full mr-3 bg-white text-gray-800 px-3 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                Facebook Messenger
                <div class="absolute top-1/2 right-0 transform translate-x-1/2 -translate-y-1/2 rotate-45 w-2 h-2 bg-white"></div>
            </div>
            <div class="w-14 h-14 bg-blue-800 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all hover:scale-110">
                <i class="fab fa-facebook-messenger text-white text-2xl"></i>
            </div>
        </a>
        
        <!-- Telegram Button -->
        <a href="https://t.me/tvnqoc" target="_blank" class="relative group">
            <div class="absolute right-full mr-3 bg-white text-gray-800 px-3 py-2 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                Telegram
                <div class="absolute top-1/2 right-0 transform translate-x-1/2 -translate-y-1/2 rotate-45 w-2 h-2 bg-white"></div>
            </div>
            <div class="w-14 h-14 bg-blue-500 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all hover:scale-110">
                <i class="fab fa-telegram-plane text-white text-2xl"></i>
            </div>
        </a>
    </div>
    
    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed right-6 bottom-24 w-12 h-12 bg-primary rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all opacity-0 invisible">
        <i class="fas fa-arrow-up text-white text-xl"></i>
    </button>
    
    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>