<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teaching Problems - Child Psychology Resource</title>
  <meta name="description" content="Resources for teachers and parents to help children with psychological and behavioral challenges">
  <meta name="keywords" content="child psychology, teaching problems, children behavior, parenting resources, teacher resources">

  <!-- Favicons -->
  <link href="{{ url('forntend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ url('forntend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ url('frontend/assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Teaching Problems</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="about">About</a></li>
          <li><a href="services">Services</a></li>
          <li><a href="diseases">Diseases</a></li>
          <li><a href="team">Team</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="register">Log In</a>
    </div>
  </header>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search About Any Diseases</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 2rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        header h1 {
            margin-bottom: 1rem;
        }

        .search-filter {
            display: flex;
            justify-content: center;
            gap: 1rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .search-filter input, .search-filter select {
            padding: 0.8rem 1rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
        }

        .search-filter input {
            flex: 2;
            min-width: 300px;
        }

        .search-filter select {
            flex: 1;
            min-width: 200px;
        }

        .video-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            padding: 0 2rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .video-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .video-card:hover {
            transform: translateY(-5px);
        }

        .thumbnail {
            position: relative;
            width: 100%;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
            overflow: hidden;
        }

        .thumbnail img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 3rem;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .video-card:hover .play-icon {
            opacity: 1;
        }

        .video-info {
            padding: 1rem;
        }

        .video-info h3 {
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .video-info p {
            color: #7f8c8d;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .video-info .category {
            display: inline-block;
            background-color: #e0f7fa;
            color: #00838f;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        /* Video Modal */
        .video-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            overflow: auto;
        }

        .modal-content {
            background-color: #fff;
            margin: 2% auto;
            padding: 20px;
            width: 80%;
            max-width: 1000px;
            border-radius: 8px;
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 2rem;
            color: #aaa;
            cursor: pointer;
        }

        .close-btn:hover {
            color: #333;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            margin-bottom: 1rem;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .video-info h2 {
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .video-info p {
            color: #7f8c8d;
        }

        @media (max-width: 768px) {
            .search-filter {
                flex-direction: column;
            }
            
            .search-filter input, .search-filter select {
                width: 100%;
            }
            
            .video-gallery {
                grid-template-columns: 1fr;
                padding: 0 1rem;
            }
            
            .modal-content {
                width: 95%;
                margin: 5% auto;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>DISEASES SEARCH BAR</h1>
        <div class="search-filter">
            <input type="text" id="searchInput" placeholder="Search videos...">
            <select id="categoryFilter">
                <option value="all">All Categories</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
            </select>
        </div>
    </header>

    <main>
        <div class="video-gallery" id="videoGallery">
            <!-- Videos will be dynamically inserted here -->
        </div>
    </main>

    <div class="video-modal" id="videoModal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="video-container">
                <iframe id="modalVideo" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video-info">
                <h2 id="videoTitle"></h2>
                <p id="videoDescription"></p>
            </div>
        </div>
    </div>

    <script>
        // Sample video data
        const videos = [
            {
                id: 'UtuR7glK2yI',
                title: 'S1',
                description: 'Coming Soon.',
                category: 'Coming Soon',
                thumbnail: 'https://img.freepik.com/free-vector/abstract-grunge-style-coming-soon-with-black-splatter_1017-26690.jpg?semt=ais_hybrid&w=740'
            },
            {
                id: 'UtuR7glK2yI',
                title: 'S2',
                description: 'Coming Soon!',
                category: 'Coming Soon',
                thumbnail: 'https://img.freepik.com/free-vector/abstract-grunge-style-coming-soon-with-black-splatter_1017-26690.jpg?semt=ais_hybrid&w=740'
            },
            {
                id: 'UtuR7glK2yI',
                title: 'S3',
                description: 'Coming Soon',
                category: 'Coming Soon',
                thumbnail: 'https://img.freepik.com/free-vector/abstract-grunge-style-coming-soon-with-black-splatter_1017-26690.jpg?semt=ais_hybrid&w=740'
            },
            {
                id: 'UtuR7glK2yI',
                title: 'S4',
                description: 'Coming Soon',
                category: 'Coming Soon',
                thumbnail: 'https://img.freepik.com/free-vector/abstract-grunge-style-coming-soon-with-black-splatter_1017-26690.jpg?semt=ais_hybrid&w=740'
            },
            {
                id: 'UtuR7glK2yI',
                title: 'S5',
                description: 'Coming Soon',
                category: 'Coming Soon',
                thumbnail: 'https://img.freepik.com/free-vector/abstract-grunge-style-coming-soon-with-black-splatter_1017-26690.jpg?semt=ais_hybrid&w=740'
            },
            {
                id: 'UtuR7glK2yI',
                title: 'S6',
                description: 'Coming Soon',
                category: 'Coming Soon',
                thumbnail: 'https://img.freepik.com/free-vector/abstract-grunge-style-coming-soon-with-black-splatter_1017-26690.jpg?semt=ais_hybrid&w=740'
            }
        ];

        // DOM Elements
        const videoGallery = document.getElementById('videoGallery');
        const searchInput = document.getElementById('searchInput');
        const categoryFilter = document.getElementById('categoryFilter');
        const videoModal = document.getElementById('videoModal');
        const modalVideo = document.getElementById('modalVideo');
        const videoTitle = document.getElementById('videoTitle');
        const videoDescription = document.getElementById('videoDescription');
        const closeBtn = document.querySelector('.close-btn');

        // Display videos
        function displayVideos(videosToDisplay) {
            videoGallery.innerHTML = '';
            
            videosToDisplay.forEach(video => {
                const videoCard = document.createElement('div');
                videoCard.className = 'video-card';
                videoCard.dataset.category = video.category;
                
                videoCard.innerHTML = `
                    <div class="thumbnail">
                        <img src="${video.thumbnail}" alt="${video.title}">
                        <div class="play-icon">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-info">
                        <h3>${video.title}</h3>
                        <p>${video.description}</p>
                        <span class="category">${video.category}</span>
                    </div>
                `;
                
                videoCard.addEventListener('click', () => openModal(video));
                videoGallery.appendChild(videoCard);
            });
        }

        // Filter videos
        function filterVideos() {
            const searchTerm = searchInput.value.toLowerCase();
            const category = categoryFilter.value;
            
            const filteredVideos = videos.filter(video => {
                const matchesSearch = video.title.toLowerCase().includes(searchTerm) || 
                                    video.description.toLowerCase().includes(searchTerm);
                const matchesCategory = category === 'all' || video.category === category;
                
                return matchesSearch && matchesCategory;
            });
            
            displayVideos(filteredVideos);
        }

        // Open modal with video
        function openModal(video) {
            modalVideo.src = `https://www.youtube.com/embed/${video.id}?autoplay=1`;
            videoTitle.textContent = video.title;
            videoDescription.textContent = video.description;
            videoModal.style.display = 'block';
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        // Close modal
        function closeModal() {
            modalVideo.src = '';
            videoModal.style.display = 'none';
            document.body.style.overflow = 'auto'; // Enable scrolling
        }

        // Event listeners
        searchInput.addEventListener('input', filterVideos);
        categoryFilter.addEventListener('change', filterVideos);
        closeBtn.addEventListener('click', closeModal);
        window.addEventListener('click', (e) => {
            if (e.target === videoModal) {
                closeModal();
            }
        });

        // Initialize
        displayVideos(videos);
    </script>
</body>
</html>


