# 📦 Project Setup Guide

Welcome to the project! This guide walks you through setting up the development environment for both the frontend and backend.

---

## 🛠️ Prerequisites

Ensure the following are installed on your machine:

- **[Node.js](https://nodejs.org/)** – For frontend development.
- **[Composer](https://getcomposer.org/)** – For managing PHP dependencies.
- **[XAMPP](https://www.apachefriends.org/index.html)** – For running Apache and MySQL locally.

---

## ✅ Getting Started

### 1. Clone the Repository

```bash
git clone https://github.com/Soujiro0/toolshare.git
cd toolshare
```

---

## 🎨 Frontend Setup

```bash
cd frontend
npm install
```

This installs all the required frontend dependencies.

---

## 🔧 Backend Setup

```bash
cd ../backend
composer install
php artisan storage:link
```

- Installs Laravel backend dependencies.
- Creates a symbolic link from `public/storage` to `storage/app/public` for file access.

---

## ⚙️ Running the Project

### 1. Start the Frontend

```bash
cd ../frontend
npm run dev
```

This launches the frontend development server.

---

### 2. Start the Backend

```bash
cd ../backend
php artisan serve --host=192.168.1.10 --port=8000
```

> Replace `192.168.1.10` with your actual device IP address to make the server accessible over LAN.

---

## 🌐 Connect Frontend to Backend

1. Launch the frontend in a browser or the APK.
2. On the landing page, **tap the menu button (☰) three times**.
3. **Input the backend server IP address** (e.g., `http://192.168.1.10:8000`) to connect.

---

## 📱 Mobile App (APK)

You can download the Android APK here:  
🔗 [APK Download Folder](https://drive.google.com/drive/folders/1zSicne66b7gPFA9NABxJ8wxX6-WoKlQ-?usp=sharing)

---

## ✅ You're Ready!

Everything is set up. Start developing and exploring the project.

**Happy coding! 💻🚀**
