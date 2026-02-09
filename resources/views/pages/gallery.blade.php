@extends('layouts.app')

@section('content')
<style>
    /* Color Variables */
    :root {
        --primary: #990000;
        --primary-dark: #000000;
        --tesla-silver: #d0d1d2;
    }
    
    /* Gallery Page Styles */
    .gallery-page {
        padding-top: 30px;
        background-color: #f8f9fa;
        min-height: 100vh;
    }
    
    /* Gallery Header */
   .gallery-header {
    background:
        linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
        url('./images/bgimages/banner.jpg');
    background-size: cover;
    background-position: top center; /* 👈 yahan change */
    color: white;
    padding: 100px 0;
    text-align: center;
    margin-bottom: 60px;
    position: relative;
}


    
    .gallery-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--primary);
    }
    
    .gallery-header h1 {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .gallery-header p {
        font-size: 1.2rem;
        max-width: 700px;
        margin: 0 auto;
        color: var(--tesla-silver);
    }
    
    /* Category Filter */
    .category-filter {
        margin-bottom: 40px;
    }
    
    .filter-buttons {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .filter-btn {
        padding: 10px 25px;
        background-color: white;
        border: 2px solid var(--tesla-silver);
        color: var(--primary-dark);
        font-weight: 600;
        border-radius: 30px;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .filter-btn:hover,
    .filter-btn.active {
        background-color: var(--primary);
        color: white;
        border-color: var(--primary);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(153, 0, 0, 0.2);
    }
    
    /* Gallery Grid */
    .gallery-container {
        padding: 0 15px;
        max-width: 1400px;
        margin: 0 auto 80px;
    }
    
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 25px;
    }
    
    .gallery-item {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
        background-color: white;
        height: 280px;
    }
    
    .gallery-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    
    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .gallery-item:hover img {
        transform: scale(1.05);
    }
    
    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        color: white;
        padding: 30px 20px 20px;
        transform: translateY(100%);
        transition: transform 0.4s ease;
    }
    
    .gallery-item:hover .gallery-overlay {
        transform: translateY(0);
    }
    
    .gallery-category {
        display: inline-block;
        background-color: var(--primary);
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 10px;
    }
    
    .gallery-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 5px;
    }
    
    .gallery-description {
        font-size: 0.9rem;
        color: var(--tesla-silver);
    }
    
    /* Image Modal */
    .image-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.9);
        z-index: 999999;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
    
    .modal-content {
        max-width: 90%;
        max-height: 90%;
        position: relative;
    }
    
    .modal-img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }
    
    .modal-close {
        position: absolute;
        top: -40px;
        right: 0;
        background: var(--primary);
        color: white;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 1.5rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;
    }
    
    .modal-close:hover {
        background-color: #cc0000;
    }
    
    .modal-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
        color: white;
        padding: 20px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }
    
    .modal-title {
        font-size: 1.5rem;
        margin-bottom: 5px;
    }
    
    /* Loading Animation */
    .loading {
        display: none;
        text-align: center;
        padding: 30px;
        color: var(--primary);
    }
    
    .loading-spinner {
        display: inline-block;
        width: 40px;
        height: 40px;
        border: 4px solid var(--tesla-silver);
        border-top: 4px solid var(--primary);
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin-bottom: 15px;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .gallery-header {
            padding: 70px 0;
        }
        
        .gallery-header h1 {
            font-size: 2.5rem;
        }
        
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }
        
        .gallery-item {
            height: 250px;
        }
        
        .filter-buttons {
            gap: 8px;
        }
        
        .filter-btn {
            padding: 8px 18px;
            font-size: 0.9rem;
        }
    }
    
    @media (max-width: 576px) {
        .gallery-header {
            padding: 50px 0;
        }
        
        .gallery-header h1 {
            font-size: 2rem;
        }
        
        .gallery-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }
        
        .gallery-container {
            padding: 0 10px;
        }
    }
</style>

<div class="gallery-page">
    <!-- Gallery Header -->
    <section class="gallery-header">
        <div class="container">
            <h1>Our Project Gallery</h1>
            <p>Explore our portfolio of completed projects across Dubai. From AC installations to Tesla charger setups, see our quality workmanship in action.</p>
        </div>
    </section>
    
    <!-- Category Filter -->
    <section class="category-filter">
        <div class="container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="ac">AC & Ventilation</button>
                <button class="filter-btn" data-filter="electrical">Electrical Work</button>
                <button class="filter-btn" data-filter="plumbing">Plumbing</button>
                <button class="filter-btn" data-filter="tesla">Tesla Chargers</button>
                <button class="filter-btn" data-filter="glass">Aluminum & Glass</button>
                <button class="filter-btn" data-filter="tiling">Tiling Work</button>
            </div>
        </div>
    </section>
    
    <!-- Gallery Grid -->
    <section class="gallery-container">
        <div class="gallery-grid" id="galleryGrid">
            <!-- Gallery items will be inserted here by JavaScript -->
        </div>
        
        <div class="loading" id="loading">
            <div class="loading-spinner"></div>
            <p>Loading more projects...</p>
        </div>
    </section>
    
    <!-- Image Modal -->
    <div class="image-modal" id="imageModal">
        <div class="modal-content">
            <button class="modal-close" id="modalClose">&times;</button>
            <img class="modal-img" id="modalImg" src="" alt="">
            <div class="modal-info">
                <h3 class="modal-title" id="modalTitle"></h3>
                <p id="modalDesc"></p>
            </div>
        </div>
    </div>
</div>

<script>
    // Gallery data
    const galleryData = [
        {
            id: 1,
            category: "ac",
            title: "Central AC Installation",
            description: "Commercial building AC system installation in Downtown Dubai",
            image: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
        },
         {
            id: 1,
            category: "ac",
            title: "Exhaust Ventilation System",
            description: "Removes stale, polluted indoor air to create negative pressure",
            image: "https://cdn.stamped.io/tr:h-800:/uploads/photos/248540_1920693370922_4d067d37_47ed_4cf5_ae15_1a78dce26dcb.jpg"
        },
         {
            id: 1,
            category: "ac",
            title: "Supply Ventilation System",
            description: "Actively brings filtered fresh outdoor air into the building",
            image: "https://idealfix.sa/wp-content/uploads/2023/09/close-up-heat-pump-outside-home-1024x731.jpg"
        },
         {
            id: 1,
            category: "ac",
            title: "Balanced Ventilation System",
            description: "Simultaneously supplies fresh air and exhausts stale air",
            image: "https://assets.thehansindia.com/h-upload/2023/10/15/1389598-air-conditioning.webp"
        },
          {
            id: 1,
            category: "ac",
            title: "Heat Recovery Ventilation (HRV) System",
            description: "Simultaneously supplies fresh air and exhausts stale air",
            image: "https://www.socool.sg/wp-content/uploads/2023/09/Picture-53-1080x675.jpg"
        },
        {
            id: 2,
            category: "electrical",
            title: "Smart Home Wiring",
            description: "Complete electrical wiring for smart home in Palm Jumeirah",
            image: "https://images.unsplash.com/photo-1621905252507-b35492cc74b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
        },
        {
            id: 2,
            category: "electrical",
            title: "Electrical Installation Services",
            description: "Involves setting up new wiring, outlets, switches, lighting fixtures",
            image: "https://png.pngtree.com/thumb_back/fh260/background/20240913/pngtree-electrician-working-on-electrical-panels-in-a-factory-image_16174281.jpg"
        },
         {
            id: 2,
            category: "electrical",
            title: "Electrical Repair Services",
            description: "Fixes faults like tripped breakers, flickering lights, faulty outlets",
            image: "https://hometriangle.com/blogs/content/images/2024/08/hometriangle-blog-electrical-repairs.jpg"
        },
         {
            id: 2,
            category: "electrical",
            title: "Electrical Upgrade Services",
            description: "Modernizes outdated systems, such as upgrading breaker panels from 100A to 200A+,",
            image: "https://ntelectrician.com/wp-content/uploads/2024/07/iStock-1469656864-e1721671595402.jpg"
        },
          {
            id: 2,
            category: "electrical",
            title: "Frequent Circuit Breaker Tripping",
            description: "Breakers trip repeatedly due to overloaded circuits, faulty wiring",
            image: "https://carelabz.com/wp-content/uploads/2017/12/Circuit-Breakers.jpg"
        },
        {
            id: 3,
            category: "tesla",
            title: "Universal Wall Connector",
            description: "Similar to the standard Wall Connector but with dual NACS + J1772 plugs",
            image: "https://media.istockphoto.com/id/1227575736/photo/tesla-electric-vehicles-awaiting-preparation-for-sale-tesla-ev-model-3-s-and-x-are-a-key-to-a.jpg?s=612x612&w=0&k=20&c=8IRdMx5xhXTG7m-bUqfh6n-OrGaofgeNgEINN3DWjso="
        },
        {
            id: 4,
            category: "plumbing",
            title: "Bathroom Renovation",
            description: "Complete plumbing overhaul for luxury bathroom",
            image: "https://plus.unsplash.com/premium_photo-1683134534707-f35641f4b2a2?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        },
         {
            id: 4,
            category: "plumbing",
            title: "Pipe Installation & Repiping Services",
            description: "Sets up new water supply or drainage pipes, or replaces old/rusted ones",
            image: "https://img.freepik.com/premium-photo/professional-plumber-with-water-tap-tools_106035-1719.jpg"
        },
         {
            id: 4,
            category: "plumbing",
            title: "Fixture Installation & Repair Services",
            description: "Installs or repairs bathroom/kitchen fixtures like faucets, showers, toilets, sinks, bathtubs",
            image: "https://thumbs.dreamstime.com/b/plumbing-tools-kitchen-renovation-background-47973708.jpg"
        },
         {
            id: 4,
            category: "plumbing",
            title: "Leak Detection & Repair Services",
            description: "Finds and fixes hidden or visible leaks in pipes, faucets, toilets",
            image: "https://goldcoastplumbingexperts.com.au/wp-content/uploads/2023/09/water-bursting-from-main-1080x675.jpg"
        },
       
        {
            id: 4,
            category: "plumbing",
            title: "Drain Cleaning & Unclogging Services",
            description: "Removes blockages from sinks, toilets, showers, and main sewer lines using snaking",
            image: "https://kingdomplumbing.ca/wp-content/uploads/2024/10/Chilliwack-Drain-Cleaning-Service-by-KPH-1024x682.jpg"
        },
        {
            id: 5,
            category: "glass",
            title: "Office Glass Partition",
            description: "Frameless glass partitions for corporate office in DIFC",
            image: "https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
        },
        {
            id: 6,
            category: "tiling",
            title: "Marble Floor Tiling",
            description: "Italian marble tiling for luxury villa entrance",
            image: "https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
        },
         {
            id: 6,
            category: "tiling",
            title: "Floor Tiling",
            description: "Involves laying tiles on horizontal surfaces like living room floors, kitchen floors",
            image: "https://cdn.shopify.com/s/files/1/0518/0601/1582/files/Tiling_a_floor.jpg?v=1667837188"
        },
         {
            id: 6,
            category: "tiling",
            title: "wall Tiling",
            description: "Applies tiles to vertical surfaces such as bathroom walls, kitchen backsplashes,",
            image: "https://wp.wallsandfloors.co.uk/wp-content/uploads/2017/07/tile-adhesive.jpg"
        },
        {
            id: 6,
            category: "tiling",
            title: "Bathroom / Wet Area Tiling",
            description: "Specializes in waterproof tiling for showers, bathtubs, toilet areas, and full bathrooms using water,",
            image: "https://www.rubi.com/us/blog/wp-content/uploads/2022/05/tile-bathroom.jpg"
        },
         {
            id: 6,
            category: "tiling",
            title: "Mosaic / Patterned Tiling",
            description: "Involves installing small mosaic tiles, decorative borders, or intricate patterns (like herringbone, basketweave,",
            image: "https://media.designcafe.com/wp-content/uploads/2022/03/30132954/mosaic-bathroom-tiles-in-a-pastel-pattern.jpg"
        },
        {
            id: 7,
            category: "ac",
            title: "VRF System Maintenance",
            description: "Regular maintenance of VRF AC systems in hotel",
            image: "https://st2.depositphotos.com/1010613/6332/i/450/depositphotos_63322175-stock-photo-repairer-repairing-air-conditioner.jpg"
        },
        {
            id: 8,
            category: "electrical",
            title: "LED Lighting Setup",
            description: "Energy-efficient LED lighting for retail store",
            image: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
        },
        {
            id: 9,
            category: "tesla",
            title: "Dual Charger Installation",
            description: "Dual Tesla charger setup for luxury apartment building",
            image: "https://play-lh.googleusercontent.com/QwMEzDXpLRHOxxkBhLNqMMahSUrB3J3RiOznJvYbYwP1VW69VpyUxpq-ZdSgiVIVKEw=w526-h296-rw"
        },
         {
            id: 9,
            category: "tesla",
            title: "Wall Connector",
            description: "Hardwired home charging station (NACS plug) that installs on a wall for the fastest home charging,",
            image: "https://www.rootelectric.com/wp-content/uploads/2023/05/tesla-home-Wall-Charger-Installation.jpg"
        },
          {
            id: 9,
            category: "tesla",
            title: "Supercharger",
            description: "Tesla's high-speed public DC fast-charging network (V3/V4 up to 250+ kW)",
            image: "https://evbite.com/wp-content/uploads/2019/03/teslasupercharger.jpg"
        },
         {
            id: 9,
            category: "tesla",
            title: "Mobile Connector",
            description: "Portable charger that plugs into standard household outlets (120V for slow trickle charging or 240V",
            image: "https://i.ebayimg.com/images/g/PcMAAOSwOiFj49l6/s-l1200.jpg"
        },
          {
            id: 9,
            category: "tesla",
            title: "Dual-Port EV Charger",
            description: "A modern Level 2 or DC fast charger with two connectors/ports (e.g., NACS + J1772 or dual CCS),",
            image: "https://www.tesla.com/sites/default/files/images/charging/multiple-wall-connectors.jpg"
        },
        {
            id: 10,
            category: "plumbing",
            title: "Kitchen Plumbing",
            description: "Complete kitchen plumbing and fixture installation",
            image: "https://plus.unsplash.com/premium_photo-1683134517704-3cdd744faff8?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        },
        {
            id: 11,
            category: "glass",
            title: "Balcony Glass Railings",
            description: "Tempered glass railings for high-rise balcony",
            image: "https://static.vecteezy.com/system/resources/thumbnails/050/972/813/small/modern-balcony-with-potted-plants-and-a-glass-railing-ideal-for-depicting-urban-living-or-ecofriendly-design-photo.jpg"
        },
         {
            id: 11,
            category: "glass",
            title: "Aluminium Sliding Glass Doors",
            description: "Panels slide horizontally along tracks for easy operation, maximizing wide openings and unobstructed views",
            image: "https://maitechnicalservices.com/wp-content/uploads/2025/01/aluminium-glass-doors-16-1024x638-1.jpg"
        },
         {
            id: 11,
            category: "glass",
            title: "Aluminium Pivot Glass Doors",
            description: "Pivot on a central or offset axis (top/bottom) for a dramatic, luxurious swing",
            image: "https://www.raumplus.com/fileadmin/_processed_/4/5/csm_1580_5c5085e079.jpg"
        },
          {
            id: 11,
            category: "glass",
            title: "Aluminium Hinged (French-Style) Glass Doors",
            description: "Traditional swing-open doors on side hinges, often in pairs with full or partial glass for classic elegance",
            image: "https://www.choicesonline.co.uk/choices-mk4-common-files/common-images/BEDFORD-GWAD-IMAGES/04/french-doors-bedford.jpg"
        },
         {
            id: 11,
            category: "glass",
            title: "Fully Glazed Aluminium Pivot or Hinged Doors",
            description: "Entirely glass-fronted with slim aluminium frames (minimal or no panels) for maximum transparency and modern minimalist look",
            image: "https://evolveartisanal.com/wp-content/uploads/2023/04/Alugate-pivot-door-Welcome-1.jpg"
        },
        {
            id: 12,
            category: "tiling",
            title: "Swimming Pool Tiling",
            description: "Non-slip tile installation for swimming pool area",
            image: "https://apwbuildingservices.co.uk/wp-content/uploads/2016/04/swimming-pool-tiling-services-hertfordshire-1.jpg"
        }
        
        
    ];
    
    // Category names for display
    const categoryNames = {
        "ac": "AC & Ventilation",
        "electrical": "Electrical Work",
        "plumbing": "Plumbing",
        "tesla": "Tesla Chargers",
        "glass": "Aluminum & Glass",
        "tiling": "Tiling Work"
    };
    
    // DOM Elements
    const galleryGrid = document.getElementById('galleryGrid');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const imageModal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImg');
    const modalTitle = document.getElementById('modalTitle');
    const modalDesc = document.getElementById('modalDesc');
    const modalClose = document.getElementById('modalClose');
    const loadingElement = document.getElementById('loading');
    
    // Initialize gallery
    function initGallery() {
        renderGallery(galleryData);
        setupEventListeners();
    }
    
    // Render gallery items
    function renderGallery(items) {
        galleryGrid.innerHTML = '';
        
        items.forEach(item => {
            const galleryItem = document.createElement('div');
            galleryItem.className = 'gallery-item';
            galleryItem.dataset.category = item.category;
            
            galleryItem.innerHTML = `
                <img src="${item.image}" alt="${item.title}" loading="lazy">
                <div class="gallery-overlay">
                    <span class="gallery-category">${categoryNames[item.category] || item.category}</span>
                    <h3 class="gallery-title">${item.title}</h3>
                    <p class="gallery-description">${item.description}</p>
                </div>
            `;
            
            galleryItem.addEventListener('click', () => openModal(item));
            galleryGrid.appendChild(galleryItem);
        });
    }
    
    // Filter gallery by category
    function filterGallery(category) {
        const items = category === 'all' 
            ? galleryData 
            : galleryData.filter(item => item.category === category);
        
        renderGallery(items);
        
        // Update active button
        filterButtons.forEach(btn => {
            btn.classList.remove('active');
            if (btn.dataset.filter === category) {
                btn.classList.add('active');
            }
        });
    }
    
    // Open image modal
    function openModal(item) {
        modalImg.src = item.image;
        modalImg.alt = item.title;
        modalTitle.textContent = item.title;
        modalDesc.textContent = item.description;
        imageModal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
    
    // Close image modal
    function closeModal() {
        imageModal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
    
    // Setup event listeners
    function setupEventListeners() {
        // Filter buttons
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterGallery(button.dataset.filter);
            });
        });
        
        // Modal close button
        modalClose.addEventListener('click', closeModal);
        
        // Close modal when clicking outside
        imageModal.addEventListener('click', (e) => {
            if (e.target === imageModal) {
                closeModal();
            }
        });
        
        // Close modal with ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && imageModal.style.display === 'flex') {
                closeModal();
            }
        });
        
        // Simulate loading more items on scroll
        window.addEventListener('scroll', () => {
            const scrollPosition = window.innerHeight + window.scrollY;
            const pageHeight = document.documentElement.scrollHeight;
            
            // When near bottom, show loading animation
            if (scrollPosition >= pageHeight - 200 && !loadingElement.style.display) {
                loadingElement.style.display = 'block';
                
                // Simulate API call delay
                setTimeout(() => {
                    // In a real app, you would load more data here
                    loadingElement.style.display = 'none';
                    
                    // For demo, just show a message
                    if (galleryData.length < 20) {
                        console.log('Loading more gallery items...');
                    }
                }, 1500);
            }
        });
    }
    
    // Initialize on DOM load
    document.addEventListener('DOMContentLoaded', initGallery);
</script>
@endsection