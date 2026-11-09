<?php

/**
 * Server-side onsite SEO for the React SPA shell.
 *
 * The SPA ships one index.html for every marketing URL. Without rewriting
 * title / description / canonical / JSON-LD here, Google sees duplicates of
 * the homepage document. Keep this file free of Laravel so the locked front
 * controllers can require it before the framework boots.
 */

if (! function_exists('vcarde_spa_seo_e')) {
    function vcarde_spa_seo_e(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}

if (! function_exists('vcarde_spa_seo_path')) {
    function vcarde_spa_seo_path(?string $requestUri = null): string
    {
        $uri = $requestUri;
        if ($uri === null) {
            $uri = $_SERVER['REQUEST_URI'] ?? '/';
        }
        $path = rawurldecode((string) (parse_url($uri, PHP_URL_PATH) ?: '/'));
        $path = '/'.trim($path, '/');
        if ($path === '/') {
            return '/';
        }

        return rtrim($path, '/') ?: '/';
    }
}

if (! function_exists('vcarde_spa_seo_areas')) {
    /**
     * @return array<string, array{name:string, kind:string}>
     */
    function vcarde_spa_seo_areas(): array
    {
        return [
            'mylapore' => ['name' => 'Mylapore', 'kind' => 'near'],
            'tambaram' => ['name' => 'Tambaram', 'kind' => 'near'],
            'adyar' => ['name' => 'Adyar', 'kind' => 'near'],
            't-nagar' => ['name' => 'T. Nagar', 'kind' => 'near'],
            'anna-nagar' => ['name' => 'Anna Nagar', 'kind' => 'near'],
            'velachery' => ['name' => 'Velachery', 'kind' => 'near'],
            'omr' => ['name' => 'OMR', 'kind' => 'near'],
            'ecr' => ['name' => 'ECR', 'kind' => 'near'],
            'sholinganallur' => ['name' => 'Sholinganallur', 'kind' => 'near'],
            'perungudi' => ['name' => 'Perungudi', 'kind' => 'near'],
            'thoraipakkam' => ['name' => 'Thoraipakkam', 'kind' => 'near'],
            'pallavaram' => ['name' => 'Pallavaram', 'kind' => 'near'],
            'chromepet' => ['name' => 'Chromepet', 'kind' => 'near'],
            'porur' => ['name' => 'Porur', 'kind' => 'near'],
            'nungambakkam' => ['name' => 'Nungambakkam', 'kind' => 'near'],
            'guindy' => ['name' => 'Guindy', 'kind' => 'near'],
            'ambattur' => ['name' => 'Ambattur', 'kind' => 'near'],
            'vadapalani' => ['name' => 'Vadapalani', 'kind' => 'near'],
            'kodambakkam' => ['name' => 'Kodambakkam', 'kind' => 'near'],
            'royapettah' => ['name' => 'Royapettah', 'kind' => 'near'],
            'teynampet' => ['name' => 'Teynampet', 'kind' => 'near'],
            'besant-nagar' => ['name' => 'Besant Nagar', 'kind' => 'near'],
            'alwarpet' => ['name' => 'Alwarpet', 'kind' => 'near'],
            'medavakkam' => ['name' => 'Medavakkam', 'kind' => 'near'],
            'avadi' => ['name' => 'Avadi', 'kind' => 'near'],
            'chennai' => ['name' => 'Chennai', 'kind' => 'city'],
            'mumbai' => ['name' => 'Mumbai', 'kind' => 'city'],
            'delhi' => ['name' => 'Delhi', 'kind' => 'city'],
            'bengaluru' => ['name' => 'Bengaluru', 'kind' => 'city'],
            'hyderabad' => ['name' => 'Hyderabad', 'kind' => 'city'],
            'pune' => ['name' => 'Pune', 'kind' => 'city'],
            'kolkata' => ['name' => 'Kolkata', 'kind' => 'city'],
            'ahmedabad' => ['name' => 'Ahmedabad', 'kind' => 'city'],
            'jaipur' => ['name' => 'Jaipur', 'kind' => 'city'],
            'surat' => ['name' => 'Surat', 'kind' => 'city'],
            'lucknow' => ['name' => 'Lucknow', 'kind' => 'city'],
            'coimbatore' => ['name' => 'Coimbatore', 'kind' => 'city'],
            'madurai' => ['name' => 'Madurai', 'kind' => 'city'],
            'kochi' => ['name' => 'Kochi', 'kind' => 'city'],
            'chandigarh' => ['name' => 'Chandigarh', 'kind' => 'city'],
            'gurugram' => ['name' => 'Gurugram', 'kind' => 'city'],
            'noida' => ['name' => 'Noida', 'kind' => 'city'],
            'indore' => ['name' => 'Indore', 'kind' => 'city'],
            'nagpur' => ['name' => 'Nagpur', 'kind' => 'city'],
            'visakhapatnam' => ['name' => 'Visakhapatnam', 'kind' => 'city'],
            'vijayawada' => ['name' => 'Vijayawada', 'kind' => 'city'],
            'mysuru' => ['name' => 'Mysuru', 'kind' => 'city'],
            'thiruvananthapuram' => ['name' => 'Thiruvananthapuram', 'kind' => 'city'],
            'bhopal' => ['name' => 'Bhopal', 'kind' => 'city'],
            'vadodara' => ['name' => 'Vadodara', 'kind' => 'city'],
            'patna' => ['name' => 'Patna', 'kind' => 'city'],
        ];
    }
}

if (! function_exists('vcarde_spa_seo_pages')) {
    /**
     * @return array<string, array<string, mixed>>
     */
    function vcarde_spa_seo_pages(): array
    {
        $ogDefault = 'https://vcarde.com/spa-home/og.jpg';
        $ogCard = 'https://vcarde.com/spa-home/cards/vcarde-cmyk.jpg';
        $ogMetal = 'https://vcarde.com/spa-home/cards/lotus-front.jpg';
        $ogReview = 'https://vcarde.com/spa-home/nfc/google-review.jpg';

        return [
            '/' => [
                'title' => 'NFC Business Card in India from ₹499 | VCARDe',
                'description' => 'Buy a custom NFC business card from ₹499. Tap to share your contact, WhatsApp, and a live profile. Free shipping in India. Printed in Mylapore, Chennai. No app needed.',
                'og_description' => 'Buy a custom NFC business card from ₹499. Tap to share your contact. Free shipping in India. Printed in Chennai.',
                'h1' => 'NFC business cards printed in Chennai',
                'image' => $ogDefault,
                'type' => 'website',
                'priority' => '1.0',
                'changefreq' => 'weekly',
            ],
            '/nfc-business-cards' => [
                'title' => 'NFC Business Card — PVC, Bamboo & Metal from ₹499 | VCARDe',
                'description' => 'Order a custom NFC business card with a free digital profile. PVC from ₹499, bamboo from ₹799, metal from ₹1,499. NTAG chip, QR backup, free shipping in India.',
                'h1' => 'NFC Business Card',
                'image' => $ogCard,
                'type' => 'website',
                'priority' => '0.9',
                'changefreq' => 'weekly',
            ],
            '/pvc-nfc-business-card' => [
                'title' => 'PVC NFC Business Card from ₹499 | VCARDe',
                'description' => 'Custom PVC NFC business card from ₹499. CR80 size, NTAG 213 chip, full colour, foil and UV options. Free shipping in India from Chennai.',
                'h1' => 'PVC NFC business card',
                'image' => $ogCard,
                'type' => 'product',
                'priority' => '0.85',
                'changefreq' => 'weekly',
            ],
            '/metal-nfc-business-card' => [
                'title' => 'Metal NFC Business Card from ₹1,499 | VCARDe',
                'description' => 'Steel-face metal NFC business card with NTAG inlay from ₹1,499. Printed in Chennai with free shipping in India. Free live digital profile included.',
                'h1' => 'Metal NFC business card',
                'image' => $ogMetal,
                'type' => 'product',
                'priority' => '0.85',
                'changefreq' => 'weekly',
            ],
            '/nfc-google-reviews' => [
                'title' => 'NFC Google Review Card from ₹299 | VCARDe',
                'description' => 'NFC card that opens your Google review page on tap. Horizontal or vertical. From ₹299 with free shipping in India. Printed in Chennai.',
                'h1' => 'NFC Google review card',
                'image' => $ogReview,
                'type' => 'product',
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ],
            '/nfc-vs-qr' => [
                'title' => 'NFC vs QR Code Business Card | VCARDe',
                'description' => 'Compare NFC tap cards and QR codes for sharing contacts. VCARDe prints both on one card so iPhone and Android recipients can open your live profile.',
                'h1' => 'NFC vs QR for business cards',
                'image' => $ogCard,
                'type' => 'article',
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
            '/qr-code-generator' => [
                'title' => 'QR Code Generator — Dynamic QR & Short Links | QRCodely by VCARDe',
                'description' => 'Create dynamic QR codes with logo, colour, short URLs, and analytics. Built for print, cards, posters, and WhatsApp. From the team behind VCARDe.',
                'h1' => 'QR code generator',
                'image' => $ogDefault,
                'type' => 'website',
                'priority' => '0.7',
                'changefreq' => 'monthly',
            ],
            '/nfc-business-card-guide' => [
                'title' => 'NFC Business Card Guide for India | VCARDe',
                'description' => 'Practical guide to the NFC business card in India: how the chip works, price, iPhone support, QR backup, and how to order from Chennai.',
                'h1' => 'NFC business card guide for India',
                'image' => $ogCard,
                'type' => 'article',
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
            '/nfc-cards' => [
                'title' => 'NFC Cards Explained — Price in India | VCARDe',
                'description' => 'What NFC cards are, how they differ from paper visiting cards, NFC vs QR, and NFC card price in India from ₹499 for PVC to ₹1,499 for metal.',
                'h1' => 'NFC cards and the NFC business card, explained',
                'image' => $ogCard,
                'type' => 'article',
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ],
            '/about' => [
                'title' => 'About VCARDe — NFC Business Card Printer in Chennai',
                'description' => 'VCARDe prints NFC business cards and hosts free digital visiting cards from Mylapore, Chennai. Sister studio of GNK Services. Ships anywhere in India.',
                'h1' => 'About VCARDe',
                'image' => $ogDefault,
                'type' => 'website',
                'priority' => '0.7',
                'changefreq' => 'monthly',
            ],
            '/templates' => [
                'title' => 'Digital Visiting Card & WhatsApp Store Templates | VCARDe',
                'description' => 'Browse digital visiting card and WhatsApp store templates from VCARDe. Pair any design with a printed NFC business card and a free live profile.',
                'h1' => 'Digital visiting cards and WhatsApp stores',
                'image' => $ogDefault,
                'type' => 'website',
                'priority' => '0.7',
                'changefreq' => 'monthly',
            ],
            '/faq' => [
                'title' => 'NFC Business Card FAQ | VCARDe',
                'description' => 'Answers about NFC business cards: iPhone support, price in India, QR backup, free digital profile, shipping, and how to order from VCARDe Chennai.',
                'h1' => 'NFC business card FAQ',
                'image' => $ogDefault,
                'type' => 'website',
                'priority' => '0.6',
                'changefreq' => 'monthly',
            ],
            '/press' => [
                'title' => 'Press Kit — VCARDe NFC Business Cards',
                'description' => 'Press and listing details for VCARDe NFC business cards: product range, NTAG chip, prices from ₹499, Chennai address, and media contact.',
                'h1' => 'Press kit',
                'image' => $ogDefault,
                'type' => 'website',
                'priority' => '0.5',
                'changefreq' => 'yearly',
            ],
            '/contact' => [
                'title' => 'Contact VCARDe — NFC Business Cards, Chennai',
                'description' => 'Contact VCARDe for NFC business cards and digital visiting cards. Press and orders from Mylapore, Chennai. Call or send a message online.',
                'h1' => 'Contact VCARDe',
                'image' => $ogDefault,
                'type' => 'website',
                'priority' => '0.6',
                'changefreq' => 'monthly',
            ],
            '/nfc-card-near' => [
                'title' => 'Buy NFC Card Near You — Chennai & India Delivery | VCARDe',
                'description' => 'Buy an NFC business card near you. Printed in Mylapore, Chennai with free delivery across Chennai areas and major Indian cities.',
                'h1' => 'NFC business cards near Chennai and across India',
                'image' => $ogDefault,
                'type' => 'website',
                'priority' => '0.8',
                'changefreq' => 'weekly',
            ],
        ];
    }
}

if (! function_exists('vcarde_spa_seo_meta')) {
    /**
     * @return array<string, mixed>
     */
    function vcarde_spa_seo_meta(?string $path = null): array
    {
        $path = $path === null ? vcarde_spa_seo_path() : vcarde_spa_seo_path($path);
        $pages = vcarde_spa_seo_pages();
        $site = 'https://vcarde.com';
        $logo = $site.'/spa-home/brand/logo-vcarde.png';

        if (preg_match('#^/nfc-card-near/([a-z0-9-]+)$#', $path, $m) === 1) {
            $slug = $m[1];
            $areas = vcarde_spa_seo_areas();
            if (isset($areas[$slug])) {
                $area = $areas[$slug];
                $name = $area['name'];
                if ($area['kind'] === 'near') {
                    $title = 'Buy NFC Card near '.$name.' | Free Delivery | VCARDe';
                    $description = 'Buy a custom NFC business card near '.$name.', Chennai. Printed in Mylapore from ₹499 with free digital profile and free shipping in India.';
                    $h1 = 'Buy NFC card near '.$name;
                } else {
                    $title = 'NFC Business Card in '.$name.' | Free Shipping | VCARDe';
                    $description = 'Order an NFC business card in '.$name.' from VCARDe. Printed in Chennai from ₹499 with free shipping across India and a free live digital profile.';
                    $h1 = 'NFC business card in '.$name;
                }

                return [
                    'path' => $path,
                    'canonical' => $site.$path,
                    'title' => $title,
                    'description' => $description,
                    'og_description' => $description,
                    'h1' => $h1,
                    'image' => $site.'/spa-home/og.jpg',
                    'type' => 'website',
                    'robots' => 'index, follow, max-image-preview:large',
                    'json_ld' => [
                        [
                            '@context' => 'https://schema.org',
                            '@type' => 'Service',
                            'name' => $h1,
                            'serviceType' => 'NFC business card printing',
                            'url' => $site.$path,
                            'areaServed' => [
                                '@type' => 'Place',
                                'name' => $name.($area['kind'] === 'near' ? ', Chennai' : ''),
                            ],
                            'provider' => [
                                '@type' => 'Organization',
                                'name' => 'VCARDe',
                                'url' => $site.'/',
                            ],
                            'offers' => [
                                '@type' => 'Offer',
                                'priceCurrency' => 'INR',
                                'price' => '499',
                                'availability' => 'https://schema.org/InStock',
                            ],
                        ],
                    ],
                ];
            }
        }

        $page = $pages[$path] ?? [
            'title' => 'VCARDe — NFC Business Cards & Digital Visiting Cards',
            'description' => 'VCARDe prints NFC business cards and hosts free digital visiting cards. Free shipping in India from Chennai.',
            'h1' => 'VCARDe',
            'image' => $site.'/spa-home/og.jpg',
            'type' => 'website',
            'robots' => 'noindex, follow',
        ];

        $canonical = $site.($path === '/' ? '/' : $path);
        $description = (string) $page['description'];
        $ogDescription = (string) ($page['og_description'] ?? $description);
        $title = (string) $page['title'];
        $h1 = (string) ($page['h1'] ?? 'VCARDe');
        $image = (string) ($page['image'] ?? $site.'/spa-home/og.jpg');
        $type = (string) ($page['type'] ?? 'website');
        $robots = (string) ($page['robots'] ?? 'index, follow, max-image-preview:large');

        $org = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            '@id' => $site.'/#organization',
            'name' => 'VCARDe',
            'url' => $site.'/',
            'logo' => $logo,
            'email' => 'cc@vcarde.com',
            'telephone' => ['+91-7904721939', '+91-9600933258'],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'No.1/6, South Mada Street, Mylapore',
                'addressLocality' => 'Chennai',
                'postalCode' => '600004',
                'addressRegion' => 'Tamil Nadu',
                'addressCountry' => 'IN',
            ],
            'sameAs' => [
                'https://m.vcarde.com',
            ],
        ];

        $local = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            '@id' => $site.'/#business',
            'name' => 'VCARDe NFC Business Cards',
            'image' => $image,
            'url' => $site.'/',
            'telephone' => '+91-7904721939',
            'priceRange' => '₹499–₹1499',
            'address' => $org['address'],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 13.0339,
                'longitude' => 80.2697,
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => [
                    'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday',
                ],
                'opens' => '10:00',
                'closes' => '19:00',
            ],
            'parentOrganization' => [
                '@type' => 'Organization',
                'name' => 'GNK Services',
            ],
        ];

        $webpage = [
            '@context' => 'https://schema.org',
            '@type' => $type === 'article' ? 'Article' : ($type === 'product' ? 'Product' : 'WebPage'),
            'name' => $h1,
            'headline' => $h1,
            'description' => $description,
            'url' => $canonical,
            'isPartOf' => [
                '@type' => 'WebSite',
                'name' => 'VCARDe',
                'url' => $site.'/',
            ],
            'publisher' => [
                '@id' => $site.'/#organization',
            ],
        ];

        if ($type === 'product') {
            $webpage['offers'] = [
                '@type' => 'Offer',
                'priceCurrency' => 'INR',
                'price' => str_contains($title, '1,499') || str_contains($title, '₹1,499') ? '1499' : (str_contains($title, '299') ? '299' : '499'),
                'availability' => 'https://schema.org/InStock',
                'url' => $canonical,
            ];
            $webpage['brand'] = [
                '@type' => 'Brand',
                'name' => 'VCARDe',
            ];
            $webpage['image'] = $image;
        }

        $jsonLd = [$org, $local, $webpage];
        if ($path === '/') {
            $jsonLd[] = [
                '@context' => 'https://schema.org',
                '@type' => 'WebSite',
                '@id' => $site.'/#website',
                'name' => 'VCARDe',
                'url' => $site.'/',
                'publisher' => ['@id' => $site.'/#organization'],
            ];
        }

        return [
            'path' => $path,
            'canonical' => $canonical,
            'title' => $title,
            'description' => $description,
            'og_description' => $ogDescription,
            'h1' => $h1,
            'image' => $image,
            'type' => $type === 'product' ? 'product' : ($type === 'article' ? 'article' : 'website'),
            'robots' => $robots,
            'json_ld' => $jsonLd,
        ];
    }
}

if (! function_exists('vcarde_spa_seo_replace_meta')) {
    function vcarde_spa_seo_replace_meta(string $html, string $attrName, string $attrValue, string $content): string
    {
        $pattern = '/<meta\s+[^>]*'.$attrName.'=["\']'.preg_quote($attrValue, '/').'["\'][^>]*>/i';
        $tag = '<meta '.$attrName.'="'.vcarde_spa_seo_e($attrValue).'" content="'.vcarde_spa_seo_e($content).'" />';
        if (preg_match($pattern, $html) === 1) {
            return (string) preg_replace($pattern, $tag, $html, 1);
        }

        return str_replace('</head>', '    '.$tag."\n  </head>", $html);
    }
}

if (! function_exists('vcarde_spa_seo_apply')) {
    function vcarde_spa_seo_apply(string $html, ?string $path = null): string
    {
        $meta = vcarde_spa_seo_meta($path);
        $title = vcarde_spa_seo_e($meta['title']);
        $description = vcarde_spa_seo_e($meta['description']);
        $ogDescription = vcarde_spa_seo_e($meta['og_description']);
        $canonical = vcarde_spa_seo_e($meta['canonical']);
        $image = vcarde_spa_seo_e($meta['image']);
        $type = vcarde_spa_seo_e($meta['type']);
        $robots = vcarde_spa_seo_e($meta['robots']);
        $h1 = vcarde_spa_seo_e($meta['h1']);

        $html = preg_replace('/<title>.*?<\/title>/is', '<title>'.$title.'</title>', $html, 1) ?? $html;
        $html = vcarde_spa_seo_replace_meta($html, 'name', 'description', $meta['description']);
        $html = vcarde_spa_seo_replace_meta($html, 'name', 'robots', $meta['robots']);
        $html = vcarde_spa_seo_replace_meta($html, 'property', 'og:title', $meta['title']);
        $html = vcarde_spa_seo_replace_meta($html, 'property', 'og:description', $meta['og_description']);
        $html = vcarde_spa_seo_replace_meta($html, 'property', 'og:url', $meta['canonical']);
        $html = vcarde_spa_seo_replace_meta($html, 'property', 'og:image', $meta['image']);
        $html = vcarde_spa_seo_replace_meta($html, 'property', 'og:type', $meta['type']);
        $html = vcarde_spa_seo_replace_meta($html, 'name', 'twitter:card', 'summary_large_image');
        $html = vcarde_spa_seo_replace_meta($html, 'name', 'twitter:title', $meta['title']);
        $html = vcarde_spa_seo_replace_meta($html, 'name', 'twitter:description', $meta['og_description']);
        $html = vcarde_spa_seo_replace_meta($html, 'name', 'twitter:image', $meta['image']);

        if (preg_match('/<link\s+rel=["\']canonical["\'][^>]*>/i', $html) === 1) {
            $html = preg_replace(
                '/<link\s+rel=["\']canonical["\'][^>]*>/i',
                '<link rel="canonical" href="'.$canonical.'" />',
                $html,
                1
            ) ?? $html;
        } else {
            $html = str_replace('</head>', '    <link rel="canonical" href="'.$canonical.'" />'."\n  </head>", $html);
        }

        $ldBlocks = '';
        foreach ($meta['json_ld'] as $block) {
            $json = json_encode($block, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP);
            if ($json === false) {
                continue;
            }
            $ldBlocks .= "    <script type=\"application/ld+json\">".$json."</script>\n";
        }

        $noscript = "    <noscript>\n"
            ."      <main>\n"
            ."        <h1>{$h1}</h1>\n"
            ."        <p>{$description}</p>\n"
            ."        <p><a href=\"https://vcarde.com/nfc-business-cards\">NFC business cards</a> · "
            ."<a href=\"https://vcarde.com/about\">About VCARDe</a> · "
            ."<a href=\"https://vcarde.com/contact\">Contact</a> · "
            ."<a href=\"https://vcarde.com/faq\">FAQ</a></p>\n"
            ."        <p>VCARDe · No.1/6, South Mada Street, Mylapore, Chennai - 600004 · "
            ."<a href=\"tel:+917904721939\">+91 79 04 72 19 39</a></p>\n"
            ."      </main>\n"
            ."    </noscript>\n";

        $injection = $ldBlocks;
        $html = str_replace('</head>', $injection.'  </head>', $html);
        $html = str_replace('<div id="root"></div>', '<div id="root"></div>'."\n".$noscript, $html);

        // Silence unused locals when static analysis runs.
        unset($ogDescription, $image, $type, $robots);

        return $html;
    }
}

if (! function_exists('vcarde_spa_seo_sitemap_urls')) {
    /**
     * @return list<array{loc:string,changefreq:string,priority:string}>
     */
    function vcarde_spa_seo_sitemap_urls(): array
    {
        $urls = [];
        foreach (vcarde_spa_seo_pages() as $path => $page) {
            $urls[] = [
                'loc' => 'https://vcarde.com'.($path === '/' ? '/' : $path),
                'changefreq' => (string) ($page['changefreq'] ?? 'monthly'),
                'priority' => (string) ($page['priority'] ?? '0.5'),
            ];
        }
        foreach (vcarde_spa_seo_areas() as $slug => $area) {
            $urls[] = [
                'loc' => 'https://vcarde.com/nfc-card-near/'.$slug,
                'changefreq' => 'weekly',
                'priority' => $area['kind'] === 'near' ? '0.7' : '0.65',
            ];
        }

        return $urls;
    }
}
