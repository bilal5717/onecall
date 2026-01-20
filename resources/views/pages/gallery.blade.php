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
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
        background-size: cover;
        background-position: center;
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
            id: 2,
            category: "electrical",
            title: "Smart Home Wiring",
            description: "Complete electrical wiring for smart home in Palm Jumeirah",
            image: "https://images.unsplash.com/photo-1621905252507-b35492cc74b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
        },
        {
            id: 3,
            category: "tesla",
            title: "Tesla Wall Charger",
            description: "Tesla Wall Connector installation in Jumeirah villa",
            image: "https://images.unsplash.com/photo-1549399542-7e3f8b79c341?ixlib=rb-4.0.3&auto=format&fit=crop&w-600&q=80"
        },
        {
            id: 4,
            category: "plumbing",
            title: "Bathroom Renovation",
            description: "Complete plumbing overhaul for luxury bathroom",
            image: "https://images.unsplash.com/photo-1584622781569-0584658f071d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
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
            id: 7,
            category: "ac",
            title: "VRF System Maintenance",
            description: "Regular maintenance of VRF AC systems in hotel",
            image: "https://images.unsplash.com/photo-1563291074-2bf8677ac0e5?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
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
            image: "https://images.unsplash.com/photo-1544636331-e26879cd4d9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
        },
        {
            id: 10,
            category: "plumbing",
            title: "Kitchen Plumbing",
            description: "Complete kitchen plumbing and fixture installation",
            image: "https://images.unsplash.com/photo-1558618047-3c8c76ca7d13?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
        },
        {
            id: 11,
            category: "glass",
            title: "Balcony Glass Railings",
            description: "Tempered glass railings for high-rise balcony",
            image: "https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
        },
        {
            id: 12,
            category: "tiling",
            title: "Swimming Pool Tiling",
            description: "Non-slip tile installation for swimming pool area",
            image: "https://images.unsplash.com/photo-1560749003-f4b1e17e2dff?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
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