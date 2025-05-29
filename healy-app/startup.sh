# #!/bin/bash

# cd /home/site/wwwroot

# # Install dependencies
# composer install --no-dev --optimize-autoloader

# # Set permissions
# chmod -R 775 storage
# chmod -R 775 bootstrap/cache

# # Laravel caches
# php artisan config:cache
# php artisan route:cache
# php artisan view:cache

# # Jalankan server PHP internal di port 8080
# php -S 0.0.0.0:8080 -t public
