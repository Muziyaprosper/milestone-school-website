@echo off
REM Batch script to start a local web server for Milestone School Website
REM This script will try multiple methods to start a local server

echo ========================================
echo  Milestone School - Local Server
echo ========================================
echo.

REM Set the port (default: 8000)
set PORT=8000
set URL=http://localhost:%PORT%

REM Check if port is already in use
netstat -an | findstr ":%PORT%" >nul
if %errorlevel% == 0 (
    echo [WARNING] Port %PORT% is already in use!
    echo Please close the application using port %PORT% or change the PORT variable.
    echo.
    pause
    exit /b 1
)

echo Starting local server on %URL%
echo Press Ctrl+C to stop the server
echo.

REM Method 1: Try Python's http.server (Python 3)
python --version >nul 2>&1
if %errorlevel% == 0 (
    echo [INFO] Using Python HTTP Server...
    echo.
    start "" "%URL%"
    timeout /t 2 /nobreak >nul
    python -m http.server %PORT%
    goto :end
)

REM Method 2: Try Python 2 (if Python 3 not available)
python2 --version >nul 2>&1
if %errorlevel% == 0 (
    echo [INFO] Using Python 2 HTTP Server...
    echo.
    start "" "%URL%"
    timeout /t 2 /nobreak >nul
    python2 -m SimpleHTTPServer %PORT%
    goto :end
)

REM Method 3: Try Node.js http-server (if installed globally)
where http-server >nul 2>&1
if %errorlevel% == 0 (
    echo [INFO] Using Node.js http-server...
    echo.
    start "" "%URL%"
    timeout /t 2 /nobreak >nul
    http-server -p %PORT% -o
    goto :end
)

REM Method 4: Try npx http-server (no global install needed)
where node >nul 2>&1
if %errorlevel% == 0 (
    echo [INFO] Using npx http-server (Node.js detected)...
    echo.
    start "" "%URL%"
    timeout /t 2 /nobreak >nul
    npx --yes http-server -p %PORT% -o
    goto :end
)

REM Method 5: Try PHP built-in server
where php >nul 2>&1
if %errorlevel% == 0 (
    echo [INFO] Using PHP built-in server...
    echo.
    start "" "%URL%"
    timeout /t 2 /nobreak >nul
    php -S localhost:%PORT%
    goto :end
)

REM If no method works, show error message
echo [ERROR] No suitable web server found!
echo.
echo Please install one of the following:
echo   1. Python 3 (recommended): https://www.python.org/downloads/
echo   2. Node.js: https://nodejs.org/
echo   3. PHP: https://www.php.net/downloads.php
echo.
echo Or use a simple alternative:
echo   - Live Server extension in VS Code
echo   - XAMPP, WAMP, or MAMP
echo.
pause
exit /b 1

:end
echo.
echo Server stopped.
pause
