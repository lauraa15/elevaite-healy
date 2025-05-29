#!/bin/bash

# Move to Laravel app root
cd /home/site/wwwroot

# Jalankan migration (opsional)
php artisan migrate --force

# Jalankan Laravel
php artisan serve --host=0.0.0.0 --port=8080
