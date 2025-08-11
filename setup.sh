#!/bin/bash

echo "Setting up Laravel with Docker..."

# Build and start containers
echo "Building and starting Docker containers..."
docker-compose up -d --build

# Wait for containers to be ready
echo "Waiting for containers to be ready..."
sleep 10

# Install Laravel if not exists
if [ ! -f "composer.json" ]; then
    echo "Installing Laravel..."
    docker-compose exec app composer create-project laravel/laravel . --prefer-dist
    
    # Copy our .env file
    docker-compose exec app cp .env.example .env
    docker-compose exec app cp /var/www/.env /var/www/.env
    
    # Generate application key
    echo "Generating application key..."
    docker-compose exec app php artisan key:generate
    
    # Run migrations
    echo "Running database migrations..."
    docker-compose exec app php artisan migrate
    
    # Set permissions
    echo "Setting permissions..."
    docker-compose exec app chown -R www-data:www-data /var/www
    docker-compose exec app chmod -R 755 /var/www/storage
    docker-compose exec app chmod -R 755 /var/www/bootstrap/cache
else
    echo "Laravel already installed. Installing dependencies..."
    docker-compose exec app composer install
    
    # Generate application key if not set
    docker-compose exec app php artisan key:generate --force
    
    # Run migrations
    echo "Running database migrations..."
    docker-compose exec app php artisan migrate
fi

echo "Setup complete!"
echo "Laravel app: http://localhost:8000"
echo "phpMyAdmin: http://localhost:8080"
echo "Database credentials:"
echo "  Host: localhost:3306"
echo "  Database: laravel"
echo "  Username: laravel"
echo "  Password: laravel"