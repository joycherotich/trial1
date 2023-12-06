#!/bin/bash

set -e

# Additional actions before starting the application (e.g., migrations)
php artisan migrate --force

# Start the Apache web server
exec "$@"

dos2unix entrypoint.sh
