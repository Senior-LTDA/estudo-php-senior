from php:8.5-cli

workdir /app

copy index.php .

expose 8007

cmd ["php", "-S", "0.0.0.0:8007"]