<?php
/**
 * SEO Configuration and Sitemap Generator
 * This file handles SEO meta tags and dynamic sitemap generation
 */

// Define base URL
define('BASE_URL', 'https://ceotvnqoc.shop');

// Function to generate meta tags
function generateMetaTags($title, $description, $keywords, $image = 'assets/profile.jpg') {
    $metaTags = [
        'title' => $title,
        'description' => $description,
        'keywords' => $keywords,
        'og:title' => $title,
        'og:description' => $description,
        'og:image' => BASE_URL . '/' . $image,
        'og:url' => BASE_URL . $_SERVER['REQUEST_URI'],
        'og:type' => 'website',
        'twitter:card' => 'summary_large_image',
        'twitter:title' => $title,
        'twitter:description' => $description,
        'twitter:image' => BASE_URL . '/' . $image
    ];
    
    return $metaTags;
}

// Function to generate JSON-LD structured data
function generateStructuredData() {
    $structuredData = [
        '@context' => 'https://schema.org',
        '@type' => 'Person',
        'name' => 'Tòng Văn Ngọc',
        'url' => BASE_URL,
        'image' => BASE_URL . '/assets/profile.jpg',
        'jobTitle' => 'Full-stack Developer & UI/UX Designer',
        'worksFor' => [
            '@type' => 'Organization',
            'name' => 'DevProfile Pro'
        ],
        'sameAs' => [
            'https://facebook.com/devprofile',
            'https://twitter.com/devprofile',
            'https://linkedin.com/in/devprofile'
        ],
        'description' => 'Full-stack developer specializing in PHP 8.x, MySQL, Tailwind CSS, and JavaScript with 5+ years of experience.'
    ];
    
    return json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

// Function to generate breadcrumb structured data
function generateBreadcrumbData() {
    $breadcrumbs = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Trang chủ',
                'item' => BASE_URL
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Hồ sơ cá nhân',
                'item' => BASE_URL . '/#profile'
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => 'Thông tin thanh toán',
                'item' => BASE_URL . '/#payment'
            ]
        ]
    ];
    
    return json_encode($breadcrumbs, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}

// Function to generate sitemap.xml content
function generateSitemap() {
    $pages = [
        [
            'url' => BASE_URL . '/',
            'lastmod' => date('Y-m-d'),
            'changefreq' => 'weekly',
            'priority' => '1.0'
        ],
        [
            'url' => BASE_URL . '/#profile',
            'lastmod' => date('Y-m-d'),
            'changefreq' => 'monthly',
            'priority' => '0.9'
        ],
        [
            'url' => BASE_URL . '/#payment',
            'lastmod' => date('Y-m-d'),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ],
        [
            'url' => BASE_URL . '/#contact',
            'lastmod' => date('Y-m-d'),
            'changefreq' => 'monthly',
            'priority' => '0.7'
        ],
        [
            'url' => BASE_URL . '/#about',
            'lastmod' => date('Y-m-d'),
            'changefreq' => 'monthly',
            'priority' => '0.6'
        ]
    ];
    
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    
    foreach ($pages as $page) {
        $xml .= '  <url>' . "\n";
        $xml .= '    <loc>' . htmlspecialchars($page['url']) . '</loc>' . "\n";
        $xml .= '    <lastmod>' . $page['lastmod'] . '</lastmod>' . "\n";
        $xml .= '    <changefreq>' . $page['changefreq'] . '</changefreq>' . "\n";
        $xml .= '    <priority>' . $page['priority'] . '</priority>' . "\n";
        $xml .= '  </url>' . "\n";
    }
    
    $xml .= '</urlset>';
    
    return $xml;
}

// Function to output meta tags as HTML
function outputMetaTags($metaTags) {
    $html = '';
    
    // Title tag
    $html .= '<title>' . htmlspecialchars($metaTags['title']) . '</title>' . "\n";
    
    // Basic meta tags
    $html .= '<meta name="description" content="' . htmlspecialchars($metaTags['description']) . '">' . "\n";
    $html .= '<meta name="keywords" content="' . htmlspecialchars($metaTags['keywords']) . '">' . "\n";
    
    // Open Graph tags
    $html .= '<meta property="og:title" content="' . htmlspecialchars($metaTags['og:title']) . '">' . "\n";
    $html .= '<meta property="og:description" content="' . htmlspecialchars($metaTags['og:description']) . '">' . "\n";
    $html .= '<meta property="og:image" content="' . htmlspecialchars($metaTags['og:image']) . '">' . "\n";
    $html .= '<meta property="og:url" content="' . htmlspecialchars($metaTags['og:url']) . '">' . "\n";
    $html .= '<meta property="og:type" content="' . htmlspecialchars($metaTags['og:type']) . '">' . "\n";
    
    // Twitter Card tags
    $html .= '<meta name="twitter:card" content="' . htmlspecialchars($metaTags['twitter:card']) . '">' . "\n";
    $html .= '<meta name="twitter:title" content="' . htmlspecialchars($metaTags['twitter:title']) . '">' . "\n";
    $html .= '<meta name="twitter:description" content="' . htmlspecialchars($metaTags['twitter:description']) . '">' . "\n";
    $html .= '<meta name="twitter:image" content="' . htmlspecialchars($metaTags['twitter:image']) . '">' . "\n";
    
    return $html;
}

// Function to check and serve sitemap
function serveSitemap() {
    if ($_SERVER['REQUEST_URI'] === '/sitemap.xml') {
        header('Content-Type: application/xml; charset=utf-8');
        echo generateSitemap();
        exit;
    }
}

// Call this function early in your application
serveSitemap();
?>