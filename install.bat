@echo off


REM Install composer
echo "Downloading Composer"
call composer install

REM Install npm dependencies
echo "Downloading npm"
call npm install 

REM Configure the .env file
echo "Copying .env.example file"
copy .env.example .env

REM Generate key
echo "Generating key"
call php artisan key:generate

REM Start installation process
echo "Installing application"
php artisan application:install
if %errorlevel% neq 0 pause /b %errorlevel%

REM Start npm run dev
echo "Running npm run dev"
start "NPM run dev" npm run dev

REM Show the application
echo "Starting serve"
start "Serve" php artisan serve 

REM Open localhost
echo "Openning localhost"
start http://localhost:8000