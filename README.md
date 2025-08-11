# Laravel Docker Setup

Setup Laravel dengan PHP menggunakan Docker dan Docker Compose yang siap untuk development. Project ini menyediakan environment lengkap dengan Laravel, MySQL, Nginx, dan phpMyAdmin.

## 🚀 Features

- **Laravel 11** dengan PHP 8.2-FPM
- **MySQL 8.0** sebagai database utama
- **Nginx** sebagai web server
- **phpMyAdmin** untuk manajemen database
- **Composer** untuk dependency management
- **Auto-setup script** untuk instalasi cepat
- **Hot reload** untuk development

## 📋 Prerequisites

Pastikan sistem Anda sudah terinstall:
- [Docker](https://docs.docker.com/get-docker/) (versi 20.10+)
- [Docker Compose](https://docs.docker.com/compose/install/) (versi 2.0+)
- Git

## 🛠️ Quick Start

### 1. Clone Repository
```bash
git clone <repository-url>
cd laraweb
```

### 2. Setup untuk Repository yang Sudah Lengkap (Recommended)

**Jika Anda clone repository yang sudah memiliki semua file Laravel lengkap:**

```bash
# 1. Copy environment file
cp .env.example .env

# 2. Build dan start containers
docker-compose up -d --build

# 3. Install dependencies
docker-compose exec app composer install

# 4. Generate application key
docker-compose exec app php artisan key:generate

# 5. Run database migrations
docker-compose exec app php artisan migrate

# 6. Set proper permissions
docker-compose exec app chown -R www-data:www-data /var/www
docker-compose exec app chmod -R 755 /var/www/storage /var/www/bootstrap/cache
```

### 3. Setup Otomatis (Untuk Fresh Installation)

**Jika Anda ingin install Laravel dari awal:**

```bash
chmod +x setup.sh
./setup.sh
```

**Setup script akan otomatis:**
- Build semua Docker containers
- Install Laravel framework
- Konfigurasi database MySQL
- Menjalankan migrasi database
- Mengatur permission yang benar

> ⚠️ **Catatan Penting**: `setup.sh` dirancang untuk fresh installation. Jika repository sudah memiliki semua file Laravel lengkap, gunakan **Setup untuk Repository yang Sudah Lengkap** di atas untuk menghindari konflik atau overwrite file yang sudah ada.

### 4. Akses Aplikasi
Setelah setup selesai, buka browser dan akses:
- **Laravel App**: http://localhost:8000
- **phpMyAdmin**: http://localhost:8080

## 🔧 Manual Setup (Alternatif)

Jika Anda ingin setup manual atau troubleshooting:

### 1. Build dan Start Containers
```bash
docker-compose up -d --build
```

### 2. Install Laravel (jika belum ada)
```bash
# Install Laravel di temporary directory
docker-compose exec app composer create-project laravel/laravel /tmp/laravel --prefer-dist

# Copy files ke working directory
docker-compose exec app bash -c "cp -r /tmp/laravel/* /var/www/ && cp /tmp/laravel/.* /var/www/ 2>/dev/null || true"
```

### 3. Konfigurasi Environment
```bash
# Update .env file dengan konfigurasi database MySQL
# DB_CONNECTION=mysql
# DB_HOST=db
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=laravel
# DB_PASSWORD=laravel
```

### 4. Generate Application Key & Migrate
```bash
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate --force
```

### 5. Set Permissions
```bash
docker-compose exec app chown -R www-data:www-data /var/www
docker-compose exec app chmod -R 755 /var/www/storage /var/www/bootstrap/cache
```

## 🌐 Services & Ports

| Service | Container Name | Port | Description |
|---------|----------------|------|-------------|
| **Laravel App** | `laravel-app` | Internal:9000 | PHP 8.2-FPM Application |
| **Nginx** | `laravel-webserver` | 8000 | Web Server |
| **MySQL** | `laravel-db` | 3306 | Database Server |
| **phpMyAdmin** | `laravel-phpmyadmin` | 8080 | Database Management |

## 🗄️ Database Configuration

### Koneksi dari Host Machine
```
Host: localhost
Port: 3306
Database: laravel
Username: laravel
Password: laravel
```

### Koneksi dari dalam Container
```
Host: db
Port: 3306
Database: laravel
Username: laravel
Password: laravel
```

### Root Access
```
Username: root
Password: root
```

### phpMyAdmin Access
- URL: http://localhost:8080
- Server: `db`
- Username: `root` atau `laravel`
- Password: `root` atau `laravel`

## 📁 Project Structure

```
.
├── docker/                     # Docker configuration files
│   └── nginx/
│       └── default.conf       # Nginx server configuration
├── app/                        # Laravel application logic
│   ├── Http/Controllers/       # Controllers
│   ├── Models/                 # Eloquent models
│   └── Providers/              # Service providers
├── config/                     # Laravel configuration files
├── database/
│   ├── migrations/             # Database migrations
│   ├── seeders/                # Database seeders
│   └── factories/              # Model factories
├── public/                     # Web server document root
├── resources/
│   ├── views/                  # Blade templates
│   ├── css/                    # CSS files
│   └── js/                     # JavaScript files
├── routes/                     # Route definitions
├── storage/                    # File storage & logs
├── vendor/                     # Composer dependencies
├── docker-compose.yml          # Docker services configuration
├── Dockerfile                  # PHP/Laravel container definition
├── .env                        # Environment variables
├── .env.example                # Environment template
├── composer.json               # PHP dependencies
├── package.json                # Node.js dependencies
├── setup.sh                    # Auto-setup script
└── README.md                   # Project documentation
```

## 💡 Development Tips

### 1. Hot Reload untuk Frontend
```bash
# Install Node.js dependencies
docker-compose exec app npm install

# Run Vite development server
docker-compose exec app npm run dev
```

### 2. Database Seeding
```bash
# Create seeder
docker-compose exec app php artisan make:seeder UserSeeder

# Run specific seeder
docker-compose exec app php artisan db:seed --class=UserSeeder

# Run all seeders
docker-compose exec app php artisan db:seed

# Fresh migration with seeding
docker-compose exec app php artisan migrate:fresh --seed
```

### 3. Testing
```bash
# Run tests
docker-compose exec app php artisan test

# Run specific test
docker-compose exec app php artisan test --filter=UserTest

# Run tests with coverage
docker-compose exec app php artisan test --coverage
```

### 4. Queue Management
```bash
# Run queue worker
docker-compose exec app php artisan queue:work

# Create job
docker-compose exec app php artisan make:job ProcessPayment

# List failed jobs
docker-compose exec app php artisan queue:failed
```

## 💻 Development Workflow

### Daily Development Commands
```bash
# Start development environment
docker-compose up -d

# Stop development environment
docker-compose down

# View logs
docker-compose logs -f

# Access container shell
docker-compose exec app bash
```

## 🚨 Troubleshooting

### Common Issues & Solutions

#### 1. Permission Issues
```bash
# Fix file permissions
docker-compose exec app chown -R www-data:www-data /var/www
docker-compose exec app chmod -R 755 /var/www/storage
docker-compose exec app chmod -R 755 /var/www/bootstrap/cache
```

#### 2. Database Connection Issues
```bash
# Check if database container is running
docker-compose ps

# Check database logs
docker-compose logs db

# Test database connection
docker-compose exec app php artisan tinker
# Then run: DB::connection()->getPdo();
```

#### 3. Clear All Caches
```bash
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan view:clear
docker-compose exec app php artisan route:clear
docker-compose exec app composer dump-autoload
```

#### 4. Rebuild Containers
```bash
# Stop all containers
docker-compose down

# Remove volumes (WARNING: This will delete database data)
docker-compose down -v

# Rebuild and start
docker-compose up -d --build
```

#### 5. Laravel App Not Loading
```bash
# Check nginx logs
docker-compose logs webserver

# Check PHP-FPM logs
docker-compose logs app

# Verify .env configuration
docker-compose exec app cat .env
```

#### 6. Port Already in Use
```bash
# Check what's using the port
lsof -i :8000
lsof -i :3306
lsof -i :8080

# Kill process or change ports in docker-compose.yml
```

### 🎨 Artisan Commands
```bash
# Menjalankan artisan command
docker-compose exec app php artisan <command>

# Generate files
docker-compose exec app php artisan make:controller HomeController
docker-compose exec app php artisan make:model Product -m
docker-compose exec app php artisan make:migration create_products_table
docker-compose exec app php artisan make:seeder ProductSeeder
docker-compose exec app php artisan make:factory ProductFactory
docker-compose exec app php artisan make:request ProductRequest

# Cache management
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan view:clear
docker-compose exec app php artisan route:clear

# Optimization
docker-compose exec app php artisan optimize
docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
```

### 📦 Composer Commands
```bash
# Install dependencies
docker-compose exec app composer install

# Update dependencies
docker-compose exec app composer update

# Install package baru
docker-compose exec app composer require <package-name>

# Install dev dependencies
docker-compose exec app composer require --dev <package-name>

# Remove package
docker-compose exec app composer remove <package-name>

# Dump autoload
docker-compose exec app composer dump-autoload
```

## 🚀 Production Deployment

### Environment Variables untuk Production
```bash
# Copy dan edit environment file
cp .env .env.production

# Update values untuk production:
# APP_ENV=production
# APP_DEBUG=false
# APP_URL=https://yourdomain.com
```

### Optimization untuk Production
```bash
# Cache configuration
docker-compose exec app php artisan config:cache

# Cache routes
docker-compose exec app php artisan route:cache

# Cache views
docker-compose exec app php artisan view:cache

# Optimize autoloader
docker-compose exec app composer install --optimize-autoloader --no-dev
```

### Security Checklist
- [ ] Update `APP_KEY` dengan key yang unik
- [ ] Set `APP_DEBUG=false`
- [ ] Gunakan HTTPS di production
- [ ] Backup database secara berkala
- [ ] Monitor logs aplikasi
- [ ] Update dependencies secara berkala

## ❓ FAQ (Frequently Asked Questions)

### Q: Saya sudah clone repository yang lengkap, apakah perlu menjalankan setup.sh?
**A:** Tidak perlu. Gunakan **Setup untuk Repository yang Sudah Lengkap** karena `setup.sh` dirancang untuk fresh installation dan bisa overwrite file yang sudah ada.

### Q: Apa perbedaan antara setup untuk repository lengkap vs setup.sh?
**A:** 
- **Repository Lengkap**: Menggunakan file Laravel yang sudah ada, hanya perlu install dependencies dan konfigurasi
- **setup.sh**: Install Laravel dari awal, cocok untuk project baru atau empty repository

### Q: File apa saja yang sudah harus ada di repository lengkap?
**A:** Repository lengkap harus memiliki:
- Semua folder Laravel (`app/`, `config/`, `database/`, `resources/`, dll)
- File `composer.json` dan `composer.lock`
- File `.env.example`
- File `artisan`
- Folder `vendor/` (opsional, bisa di-generate ulang)

### Q: Bagaimana cara memastikan setup berhasil?
**A:** 
1. Cek semua container berjalan: `docker-compose ps`
2. Akses http://localhost:8000 - harus muncul halaman Laravel
3. Akses http://localhost:8080 - harus muncul phpMyAdmin
4. Tidak ada error di logs: `docker-compose logs`

### Q: Apakah perlu menjalankan migrasi setiap kali setup?
**A:** Ya, karena database di-reset setiap kali container di-rebuild. Gunakan `php artisan migrate` atau `php artisan migrate:fresh --seed` jika ada seeder.

## 🤝 Contributing

Kontribusi sangat diterima! Untuk berkontribusi:

1. Fork repository ini
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📝 License

Project ini menggunakan [MIT License](https://opensource.org/licenses/MIT).

## 📞 Support

Jika Anda mengalami masalah atau memiliki pertanyaan:

1. Cek [Troubleshooting](#-troubleshooting) section
2. Buka [GitHub Issues](https://github.com/your-repo/issues)
3. Baca [Laravel Documentation](https://laravel.com/docs)

## 🙏 Acknowledgments

- [Laravel Framework](https://laravel.com) - The PHP framework
- [Docker](https://docker.com) - Containerization platform
- [MySQL](https://mysql.com) - Database system
- [Nginx](https://nginx.org) - Web server

---

**Happy Coding! 🎉**
