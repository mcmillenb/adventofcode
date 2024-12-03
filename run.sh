#!/bin/bash

# Check if a script name was provided
if [ $# -eq 0 ]; then
    echo "Usage: ./run.sh <script.php> [arguments]"
    exit 1
fi

# Check if the specified PHP file exists
if [ ! -f "$1" ]; then
    echo "Error: File '$1' not found"
    exit 1
fi

# Build the Docker image if it doesn't exist
if ! docker images | grep -q "php-runner"; then
    echo "Building PHP runner Docker image..."
    docker build -t php-runner - <<EOF
FROM php:8.2-cli
WORKDIR /scripts
EOF
fi

# Run the PHP script in Docker, passing through all arguments
docker run -v "$(pwd):/scripts" php-runner php "$@"
