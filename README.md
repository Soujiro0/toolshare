
# 📦 Project Setup Guide

Welcome to the project! This guide will walk you through setting up the development environment for both the frontend and backend.

---

## 🛠️ Prerequisites

Make sure you have the following installed on your machine:

- **[Node.js](https://nodejs.org/)** (for frontend)
- **[Composer](https://getcomposer.org/)** (for PHP dependencies)
- **[XAMPP](https://www.apachefriends.org/index.html)** (for MySQL database & local server)

---

## 🚀 Getting Started

### 1. Clone the Repository

```bash
git clone {your-repo-url}
cd {project-folder}
```

Replace `{your-repo-url}` with your actual repository URL and `{project-folder}` with the folder name.

repo url: https://github.com/Soujiro0/toolshare.git
---

## 🎨 Frontend Setup

```bash
cd frontend
npm install
```

Installs all the required frontend dependencies.

---

## 🔧 Backend Setup

Go back to the project root:

```bash
cd ..
cd backend
composer install
```

Installs all Laravel backend dependencies.

---

## ⚙️ Running the Project

### 1. Start the Frontend

From the project root:

```bash
cd frontend
npm run dev
```

This starts the frontend development server.

---

### 2. Start the Backend

From the project root:

```bash
cd backend
php artisan serve --host={your-device-ip} --port=8000
```

Replace `{your-device-ip}` with your actual local network IP (e.g., `192.168.1.10`).

---

## 🌐 Connect Frontend to Backend

Go to the **landing page** of the frontend.  
Tap the **menu button (☰) three times**, then **input the IP address** of the backend server.

This links the frontend with your running backend instance.

---

## ✅ Done!

You’re now ready to start developing and exploring the project.

Happy coding! 💻✨
