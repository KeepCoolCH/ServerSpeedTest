# 🚀 Server-to-Client Speed Test Tool

This lightweight tool allows you to measure the **download speed** from your server to a client’s browser using PHP and a simple HTML interface.

## 📦 Overview

- Frontend: Pure HTML + JavaScript
- Backend: PHP script that streams a large file (up to 500 MB)
- Purpose: Test the actual download throughput between your server and the browser

## 🌐 Features

- One-click download speed test
- Real-time Mbps display
- Backend dynamically generates a large data stream (no storage required)
- No external dependencies
- Fully self-hosted

## 🧾 Files

| File           | Description                                      |
|----------------|--------------------------------------------------|
| `index.html`   | The user interface (start button + result)       |
| `speedtest.php`| The PHP endpoint generating the test file stream|

## 🚀 Usage

1. Upload both files (`index.html` and `speedtest.php`) to your PHP-enabled server.
2. Open `index.html` in a browser.
3. Click **"Start Test"** to begin measuring your download speed.
4. The measured Mbps value will be displayed after the download completes.

## ⚙️ Configuration

To change the test file size, open `speedtest.php` and modify this line:

```php
$sizeInBytes = 500 * 1024 * 1024; // Default: 500 MB
```

Set it to any value you want (e.g., 50 MB, 10 MB).

## 📈 Notes

- The download speed is calculated based on how long it takes the browser to download the test data from the server.
- Make sure your server has enough bandwidth to fully test your client’s connection.
- Caching is disabled to ensure accurate results.
- Works in modern browsers with JavaScript enabled.

## 🔒 Privacy

- No data is uploaded.
- No tracking or analytics.
- Fully offline-capable if run on localhost.

## 📄 License

MIT License – free for personal and commercial use.

---
