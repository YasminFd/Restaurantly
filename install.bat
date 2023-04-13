@echo off


REM Install composer
call composer install

REM Install npm dependencies
call npm install 

REM Configure the .env file
copy .env.example .env

REM Generate key
call php artisan key:generate

REM Start installation process
php artisan application:install
if %errorlevel% neq 0 exit /b %errorlevel%

REM Start npm run dev
start "NPM run dev" npm run dev

REM Show the application
start "Serve" php artisan serve 

REM Open localhost
start http://localhost:8000

