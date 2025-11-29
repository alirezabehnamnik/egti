<h1 align="center">🎮 EGTI – Esports Tournament Engine</h1>

<p align="center">
  <strong>A complete esports tournament management system built as my first Laravel project.</strong><br>
  <em>Published strictly as a portfolio project. Not licensed for commercial deployment.</em>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Framework-Laravel%208-red?style=for-the-badge">
  <img src="https://img.shields.io/badge/Language-PHP%20%7C%20MySQL-blue?style=for-the-badge">
  <img src="https://img.shields.io/badge/Frontend-Blade%20%7C%20Bootstrap-blueviolet?style=for-the-badge">
  <img src="https://img.shields.io/badge/Status-Showcase%20Only-yellow?style=for-the-badge">
  <img src="https://img.shields.io/badge/License-Portfolio%20Only-lightgrey?style=for-the-badge">
</p>

---

## 📌 Overview

EGTI (Esports Game Tournament Interface) is a fully functional tournament management platform created in **2020**.  
This was my **first real Laravel project**, where I learned and practiced:

- Real-world backend architecture  
- Multi-role workflows (admin, moderator, captain, player)  
- Match & bracket logic  
- Migrations, seeders, and Eloquent relationships  
- Admin dashboards & tournament pages  

This repository is provided **ONLY for educational and portfolio purposes**.  
It is **not licensed for commercial or production use**.

---

## ✨ Features

### 🛡 Tournament Management
- Create & configure esports tournaments  
- Registration rules & windows  
- Team registration with admin approval  
- Group stage & knockout brackets  
- Match scheduling & progression  

### 👥 Team & Player System
- Create teams (captain + members)  
- Edit team info and lineup  
- Auto-generated team pages  
- Basic player verification  
- Captain dashboard  

### 🏆 Match Handling
- Submit match results  
- Upload screenshot proof  
- Admin/moderator validation  
- Auto progression in brackets  

### 🔧 Admin Panel
- Manage tournaments  
- Review teams  
- Approve match results  
- Manage announcements & rules pages  

### 📱 User Interface
- Responsive Blade + Bootstrap  
- Tournament pages  
- Team profiles  
- Match history  

---

## 🛠 Tech Stack

| Category      | Technology          |
|--------------|---------------------|
| Backend      | Laravel 8           |
| Frontend     | Blade, Bootstrap    |
| Database     | MySQL               |
| Auth         | Laravel Auth        |
| Storage      | Local Disk          |
| Language     | PHP 8               |
| Environment  | Docker (development)|

---

## 🧱 Architecture (Simplified)

```text
EGTI/
 ├── app/
 │   ├── Models/
 │   ├── Http/
 │   ├── Controllers/
 │   └── Services/
 ├── resources/
 │   └── views/
 ├── public/
 ├── routes/
 │   └── web.php
 ├── database/
 │   ├── migrations/
 │   └── seeders/
 ├── docker/
 │   └── nginx.conf
 ├── docker-compose.yml
 ├── Dockerfile
 ├── .env.example
 ├── README.md
 └── LICENSE
```

---

## 🚀 Getting Started (Docker – Development Only)

> This setup is for **local development / review only**,  
> not intended for production deployment.

### Requirements
- Docker + Docker Compose  
- Git  

---

### 1️⃣ Clone the repository

```bash
git clone https://github.com/alirezabehnamnik/egti.git
cd egti
```

---

### 2️⃣ Create a new `.env` file

```bash
cp .env.example .env
```

---

### 3️⃣ Start Docker stack

```bash
docker compose up -d --build
```

---

### 4️⃣ Install dependencies

```bash
docker compose exec app composer install
```

---

### 5️⃣ Generate application key

```bash
docker compose exec app php artisan key:generate
```

---

### 6️⃣ Run migrations

```bash
docker compose exec app php artisan migrate --seed
```

If no seeders:

```bash
docker compose exec app php artisan migrate
```

---

### 7️⃣ Access the application

```
http://localhost:8000
```

---

## 📦 Optional Frontend

```bash
docker compose exec app npm install
docker compose exec app npm run dev
```

---

## 🧹 Useful Docker Commands

```bash
docker compose down
docker compose down -v
docker compose logs app
docker compose logs web
docker compose logs db
```

---

## ⚠ License & Usage Restrictions

This project is **NOT open-source**.  
It is provided **strictly for portfolio use**.

You may NOT:
- Use commercially  
- Deploy publicly  
- Redistribute or sell the code  
- Copy large parts  
- Host tournaments  

You MAY:
- Read the code  
- Learn from it  
- Use for interviews  

See `LICENSE` for details.

---

## 👤 Author

**Alireza Behnamnik**  
Full Stack Developer  
Email: info@Alirezabehnamnik.com
Portfolio: https://Alirezabehnamnik.com
