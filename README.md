# 💼 Laravel Portfolio Website

A **modern, responsive personal portfolio** built with **Laravel 12**, featuring **15 dynamic sections**, **user authentication** via Laravel Breeze, and a **MySQL-backed article system**.  
Clean UI, custom CSS, Font Awesome icons, and a modular Blade structure make this perfect for showcasing personal or business work.



## 📸 Screenshots

| Desktop View                                           | Mobile View                                           |
| ------------------------------------------------------ | ----------------------------------------------------- |
| ![Desktop](./public/screenshots/desktop.jpg)           | ![Mobile](./public/screenshots/mobile.jpg)            |





## 🛠 Built With

- [Laravel 12](https://laravel.com/)
- [Laravel Breeze](https://laravel.com/docs/12.x/starter-kits#laravel-breeze)
- [Blade Templating](https://laravel.com/docs/blade)
- [Font Awesome](https://fontawesome.com/)
- [MySQL](https://www.mysql.com/)
- [Vite](https://vitejs.dev/)
- [Composer](https://getcomposer.org/)
- [normalize.css](https://necolas.github.io/normalize.css/)



## ✨ Features

- ✅ **15 Sections**: Home, Articles, Gallery, Features, Testimonials, Team, Services, Skills, Work Steps, Events, Pricing, Videos, Stats, Discount, Footer  
- 🎯 **Responsive**: Fully responsive using custom CSS and normalize.css  
- 🔐 **Authentication**: Laravel Breeze login/register system  
- ✏️ **Dynamic Articles**: MySQL-powered CRUD articles  
- 🔧 **Modular Blade Views**: Reusable layouts/components  
- 🎨 **Static Assets**: `/public/Imgs/` and `/public/css/` folders  
- 🔍 **SEO Optimized**: Semantic HTML + Clean URLs  



## 📦 Getting Started

### 1️⃣ Clone the repo

```bash
git clone https://github.com/testfordb/laravel-project.git
cd laravel-project
````

### 2️⃣ Install dependencies

```bash
composer install
npm install
```

### 3️⃣ Configure environment

```bash
cp .env.example .env
php artisan key:generate
```

Update your `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_portfolio
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Migrate and seed

```bash
php artisan migrate
php artisan db:seed --class=ArticleSeeder
```

### 5️⃣ Add static assets

Place images in:

```
public/Imgs/
```

Sample files:

* `logo.png`
* `hero.jpg`, `gallery-1.jpg`, `team-01.jpg`, `service-1.png`, etc.

Place styles in:

```
public/css/
```

Includes:

* `normalize.css`
* `Styles.css`
* `all.min.css`

### 6️⃣ Build frontend assets

```bash
npm run build
```

### 7️⃣ Serve the app

```bash
php artisan serve
```

Visit 👉 [http://localhost:8000](http://localhost:8000)

---

## 🗂 Project Structure

```
laravel-project/
├── app/
│   └── Http/Controllers/{HomeController, ArticleController, Auth/*}
├── public/
│   ├── css/
│   └── Imgs/
├── resources/views/
│   ├── layouts/app.blade.php
│   ├── auth/login.blade.php
│   ├── home.blade.php
│   ├── articles.blade.php
│   └── (other sections like gallery, services, team, etc.)
├── database/migrations/
│   └── create_users_table.php, create_articles_table.php
├── routes/web.php
├── .env
```



## 🌐 Routes

| URL             | Controller                     | Description       |
| --------------- | ------------------------------ | ----------------- |
| `/`             | `HomeController@index`         | Homepage          |
| `/articles`     | `ArticleController@index`      | Article listing   |
| `/services`     | `HomeController@services`      | Services section  |
| `/team-members` | `HomeController@teamMembers`   | Team section      |
| `/login`        | `Auth\LoginController@show`    | User login        |
| `/register`     | `Auth\RegisterController@show` | User registration |

Run `php artisan route:list` for more.



## 🚀 Deployment

### Server Setup

* PHP >= 8.3
* MySQL
* Composer
* Node.js

### Deployment Steps

```bash
composer install --optimize-autoloader --no-dev
npm install && npm run build
php artisan migrate --force
php artisan db:seed --force
```

Configure web server to point to `/public`.



## 🧰 Troubleshooting

| Issue                  | Solution                                        |
| ---------------------- | ----------------------------------------------- |
| `No application key`   | Run `php artisan key:generate`                  |
| `Auth::routes() error` | Remove it; Breeze handles auth now              |
| `DB errors`            | Check `.env` and ensure DB exists + run migrate |
| `Assets 404`           | Confirm `Imgs/` and `css/` in `/public`         |



## 🤝 Contributing

```bash
git checkout -b feature/your-feature
git commit -m "Add your feature"
git push origin feature/your-feature
```

> Follow PSR-12 — Run `vendor/bin/pint` to lint.



## 📜 License

This project is licensed under the [MIT License](LICENSE) © 2025 [testfordb](https://github.com/testfordb)
