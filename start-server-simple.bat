@echo off
REM Simple batch script to start the local PHP dev server.
REM This site is PHP-driven (index.php front controller), so PHP is required -
REM Python's http.server cannot execute it.
REM Server will be accessible on localhost and on your local network

echo ========================================
echo  Milestone School - Local Server
echo ========================================
echo.

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

echo [ERROR] PHP is not installed!
echo Please install PHP from https://www.php.net/downloads.php
echo.
pause
exit /b 1

:end
pause
