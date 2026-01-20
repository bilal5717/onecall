@props(['title', 'description', 'keywords', 'image' => asset('images/logo/logo.png'), 'type' => 'website'])

<!-- Primary Meta Tags -->
<title>{{ $title }} | OneCall Technical Services</title>
<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="author" content="OneCall Technical Services">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:site_name" content="OneCall Technical Services">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="{{ $title }}">
<meta property="twitter:description" content="{{ $description }}">
<meta property="twitter:image" content="{{ $image }}">

<!-- Canonical URL -->
<link rel="canonical" href="{{ url()->current() }}">

<!-- Structured Data / JSON-LD -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "HomeAndConstructionBusiness",
    "name": "OneCall Technical Services",
    "description": "{{ $description }}",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('images/logo/logo.png') }}",
    "telephone": "+971501234567",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Dubai",
        "addressRegion": "Dubai",
        "addressCountry": "AE"
    },
    "openingHours": "Mo-Su 00:00-23:59",
    "priceRange": "$$",
    "sameAs": [
        "https://www.facebook.com/onecall",
        "https://www.instagram.com/onecall"
    ],
    "areaServed": [
        "Dubai Marina",
        "JLT", 
        "Business Bay",
        "Al Barsha",
        "Deira",
        "Downtown Dubai",
        "JVC",
        "Arabian Ranches",
        "Palm Jumeirah"
    ],
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Technical Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Electrical Services"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Plumbing Services"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "AC Repair Services"
                }
            }
        ]
    }
}
</script>