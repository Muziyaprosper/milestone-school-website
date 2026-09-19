@echo off
REM Batch script to start a local web server for Milestone School Website
REM This script will try multiple methods to start a local server
REM Server will be accessible on localhost and on your local network

echo ========================================
echo  Milestone School - Local Server
echo ========================================
echo.

REM Set the port (default: 8000)
set PORT=8000
set HOST=0.0.0.0
set URL=http://localhost:%PORT%

REM Get local IP address for mobile access
echo [INFO] Detecting your local IP address...
for /f "tokens=2 delims=:" %%a in ('ipconfig ^| findstr /c:"IPv4"') do (
    set LOCAL_IP=%%a
    goto :ip_found
)
:ip_found
set LOCAL_IP=%LOCAL_IP: =%
if "%LOCAL_IP%"=="" (
    echo [WARNING] Could not detect local IP address automatically.
    echo Please check your IP address manually using: ipconfig
    set LOCAL_IP=YOUR_IP_HERE
)

REM Check if port is already in use
netstat -an | findstr ":%PORT%" >nul
if %errorlevel% == 0 (
    echo [WARNING] Port %PORT% is already in use!
    echo Please close the application using port %PORT% or change the PORT variable.
    echo.
    pause
    exit /b 1
)

echo.
echo ========================================
echo  Server Information
echo ========================================
echo Local access:  %URL%
echo Network access: http://%LOCAL_IP%:%PORT%
echo.
echo To access from mobile device:
echo   1. Make sure your mobile device is on the same Wi-Fi network
echo   2. Open browser on mobile and go to: http://%LOCAL_IP%:%PORT%
echo.
echo Press Ctrl+C to stop the server
echo ========================================
echo.

REM This site is PHP-driven (single index.php front controller + includes/
REM and pages/ templates), so it must be served by something that executes
REM PHP. Python's http.server / Node's http-server only serve static files
REM and cannot run this site correctly.
where php >nul 2>&1
if %errorlevel% == 0 (
    echo [INFO] Using PHP built-in server with router.php...
    echo [INFO] Server accessible at: http://%LOCAL_IP%:%PORT%
    echo.
    start "" "%URL%"
    timeout /t 2 /nobreak >nul
    php -S %HOST%:%PORT% router.php
    goto :end
)

REM PHP not found
echo [ERROR] PHP is not installed or not on PATH!
echo.
echo This site requires PHP to run locally (it uses a PHP front controller).
echo Please install PHP: https://www.php.net/downloads.php
echo.
echo Or use a simple alternative:
echo   - XAMPP, WAMP, or MAMP (bundle Apache + PHP together)
echo.
pause
exit /b 1

:end
echo.
echo Server stopped.
pause
