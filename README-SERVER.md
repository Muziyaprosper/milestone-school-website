# Running the Website Locally

## Quick Start

### Option 1: Using the Batch Script (Recommended)

Simply double-click one of these files:

- **`start-server.bat`** - Tries multiple methods (Python, Node.js, PHP)
- **`start-server-simple.bat`** - Simple version using Python only

The server will start on `http://localhost:8000` and your browser will open automatically.

Press `Ctrl+C` in the terminal to stop the server.

---

## Manual Methods

### Method 1: Python (Easiest)

If you have Python installed:

```bash
# Python 3
python -m http.server 8000

# Python 2
python2 -m SimpleHTTPServer 8000
```

Then open `http://localhost:8000` in your browser.

### Method 2: Node.js

If you have Node.js installed:

```bash
# Install http-server globally (one time)
npm install -g http-server

# Run the server
http-server -p 8000 -o
```

Or use npx (no installation needed):

```bash
npx http-server -p 8000 -o
```

### Method 3: PHP

If you have PHP installed:

```bash
php -S localhost:8000
```

---

## VS Code Users

If you're using VS Code, you can use the **Live Server** extension:

1. Install the "Live Server" extension
2. Right-click on `index.html`
3. Select "Open with Live Server"

---

## Troubleshooting

### Port Already in Use

If port 8000 is already in use, you can:

1. Change the `PORT` variable in the batch script to a different number (e.g., 8080, 3000)
2. Or close the application using port 8000

### Python Not Found

- Download Python from https://www.python.org/downloads/
- Make sure to check "Add Python to PATH" during installation

### Node.js Not Found

- Download Node.js from https://nodejs.org/
- The installer will add Node.js to your PATH automatically

---

## Notes

- The server will serve files from the current directory
- Make sure you're in the project root folder when running the script
- All HTML files should be accessible via `http://localhost:8000/filename.html`
- The homepage is at `http://localhost:8000/index.html` or just `http://localhost:8000/`
