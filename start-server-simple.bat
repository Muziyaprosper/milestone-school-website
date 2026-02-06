@echo off
REM Simple batch script to start local server (Python only)
REM This is a simpler version that only uses Python

echo ========================================
echo  Milestone School - Local Server
echo ========================================
echo.

set PORT=8000
set URL=http://localhost:%PORT%

echo Starting server on %URL%...
echo Press Ctrl+C to stop the server
echo.

REM Try Python 3 first
python --version >nul 2>&1
if %errorlevel% == 0 (
    echo [INFO] Using Python HTTP Server...
    start "" "%URL%"
    timeout /t 1 /nobreak >nul
    python -m http.server %PORT%
    goto :end
)

REM Try Python 2
python2 --version >nul 2>&1
if %errorlevel% == 0 (
    echo [INFO] Using Python 2 HTTP Server...
    start "" "%URL%"
    timeout /t 1 /nobreak >nul
    python2 -m SimpleHTTPServer %PORT%
    goto :end
)

echo [ERROR] Python is not installed!
echo Please install Python from https://www.python.org/downloads/
echo.
pause
exit /b 1

:end
pause
