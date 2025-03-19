FROM php:latest

# Set the working directory
WORKDIR /app

# Copy PHP script and log files into the container
COPY main.php .
COPY log_day1.log .
COPY log_day2.log .

# Set the command to execute the PHP script
CMD ["php", "main.php"]
