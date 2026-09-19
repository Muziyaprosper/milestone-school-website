# Running the Website Locally

This site is PHP-driven: a single front controller (`index.php`) routes clean
URLs like `/about` to templates in `pages/`, which share layout partials from
`includes/`. **PHP must be installed** to run it locally - a static file
server (Python's `http.server`, Node's `http-server`, VS Code Live Server)
cannot execute PHP and will not work.

## Quick Start

### Option 1: Using the Batch Script (Recommended)

Simply double-click one of these files:

- **`start-server.bat`** or **`start-server-simple.bat`** - both start PHP's
  built-in server with `router.php`, which mirrors the `.htaccess` rewrite
  rules used in production so clean URLs work the same locally.

The server will start on `http://localhost:8000` and your browser will open automatically.

**Mobile Access:** The server is accessible on your local network. When you start the server, it will display your local IP address. Connect your mobile device to the same Wi-Fi network and access the website using the displayed IP address (e.g., `http://192.168.1.100:8000`).

Press `Ctrl+C` in the terminal to stop the server.

---

## Manual Method

If you have PHP installed:

```bash
php -S localhost:8000 router.php
```

`router.php` is required - running `php -S localhost:8000` without it will
404 on every clean URL (e.g. `/about`) since PHP's built-in server otherwise
only serves files that exist at that exact path.

Then open `http://localhost:8000` in your browser.

---

## Troubleshooting

### Port Already in Use

If port 8000 is already in use, you can:

1. Change the `PORT` variable in the batch script to a different number (e.g., 8080, 3000)
2. Or close the application using port 8000

### PHP Not Found

- Download PHP from https://www.php.net/downloads.php
- Or install XAMPP/WAMP/MAMP, which bundle Apache + PHP together
- Make sure `php` is on your PATH (`php -v` should work in a terminal)

---

## Mobile Device Access

The server is configured to be accessible on your local network, allowing you to test the website on mobile devices.

### Steps to Access from Mobile:

1. **Start the server** using one of the batch scripts
2. **Note the IP address** displayed in the console (e.g., `http://192.168.1.100:8000`)
3. **Connect your mobile device** to the same Wi-Fi network as your computer
4. **Open a browser** on your mobile device
5. **Enter the IP address** shown in the server console (e.g., `http://192.168.1.100:8000`)

### Troubleshooting Mobile Access:

- **Can't connect?** Make sure both devices are on the same Wi-Fi network
- **Firewall blocking?** You may need to allow the server through Windows Firewall
- **IP address not showing?** Run `ipconfig` in Command Prompt and look for "IPv4 Address" under your active network adapter

---

## Notes

- Pages are served at clean URLs, e.g. `http://localhost:8000/about` (not `/about.html` or `/about.php`)
- The homepage is at `http://localhost:8000/`
- `router.php` is a local-dev-only helper; the live Apache/cPanel host uses `.htaccess` instead
- For mobile access, use your computer's local IP address instead of `localhost`
