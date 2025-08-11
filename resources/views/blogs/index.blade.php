<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Laravel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            font-weight: 300;
        }
        
        header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        main {
            padding: 3rem 0;
        }
        
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .blog-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .blog-image {
            height: 200px;
            background: linear-gradient(45deg, #f0f2f5, #e9ecef);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 1.1rem;
        }
        
        .blog-content {
            padding: 1.5rem;
        }
        
        .blog-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }
        
        .blog-excerpt {
            color: #6c757d;
            margin-bottom: 1rem;
            line-height: 1.5;
        }
        
        .blog-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
            color: #6c757d;
        }
        
        .read-more {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .read-more:hover {
            color: #764ba2;
        }
        
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: #6c757d;
        }
        
        .empty-state h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #495057;
        }
        
        .empty-state p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        }
        
        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem 0;
            margin-top: 4rem;
        }
        
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }
            
            .blog-grid {
                grid-template-columns: 1fr;
            }
            
            .container {
                padding: 0 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Blog Laravel</h1>
            <p>Tempat berbagi pengetahuan dan pengalaman</p>
        </div>
    </header>
    
    <main>
        <div class="container">
            @if(count($blogs) > 0)
                <div class="blog-grid">
                    @foreach($blogs as $blog)
                        <article class="blog-card">
                            <div class="blog-image">
                                <span>📝 {{ $blog['title'] }}</span>
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">{{ $blog['title'] }}</h2>
                                <p class="blog-excerpt">{{ $blog['excerpt'] }}</p>
                                <div class="blog-meta">
                                    <span>{{ $blog['date'] }} • {{ $blog['author'] }}</span>
                                    <a href="#" class="read-more">Baca Selengkapnya →</a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <h2>📝 Belum Ada Artikel</h2>
                    <p>Belum ada artikel blog yang tersedia. Silakan kembali lagi nanti!</p>
                    <a href="#" class="btn">Kembali ke Beranda</a>
                </div>
            @endif
        </div>
    </main>
    
    <footer>
        <div class="container">
            <p>&copy; 2024 Blog Laravel. Dibuat dengan ❤️ menggunakan Laravel.</p>
        </div>
    </footer>
</body>
</html>