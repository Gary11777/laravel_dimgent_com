# Dimgent Technologies Website Setup

Modern Laravel website for Dimgent Technologies built with Tailwind CSS and Alpine.js.

## Setup Instructions

### 1. Install Dependencies

```bash
composer install
npm install
```

### 2. Environment Setup

Copy `.env.example` to `.env` and configure your database settings:

```bash
cp .env.example .env
php artisan key:generate
```

### 3. Add Images

Copy the required images from `drafts/pics` to `public/images`:

**Windows PowerShell:**
```powershell
Copy-Item -Path "drafts\pics\logo.png" -Destination "public\images\logo.png"
Copy-Item -Path "drafts\pics\main_photo_of_garand101.jpg" -Destination "public\images\main_photo_of_garand101.jpg"
```

**Linux/Mac:**
```bash
cp drafts/pics/logo.png public/images/logo.png
cp drafts/pics/main_photo_of_garand101.jpg public/images/main_photo_of_garand101.jpg
```

Or manually copy:
- `drafts/pics/logo.png` → `public/images/logo.png`
- `drafts/pics/main_photo_of_garand101.jpg` → `public/images/main_photo_of_garand101.jpg`

### 4. Build Assets

```bash
npm run build
# or for development with hot reload
npm run dev
```

### 5. Run the Application

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

## Pages

- **Home** (`/`) - Landing page with company overview
- **Products** (`/products`) - Product showcase featuring Garand-101
- **Services** (`/services`) - Service offerings
- **Projects** (`/projects`) - Completed projects showcase
- **About** (`/about`) - Company information
- **Contacts** (`/contacts`) - Contact information and form

## Content Management

Content for each page is stored in `drafts/content/`:
- `home.txt`
- `products.txt`
- `services.txt`
- `projects.txt`
- `contacts.txt`
- `about.txt`

Edit these files to update page content without modifying the templates.

## Technologies Used

- **Laravel** - PHP framework
- **Tailwind CSS** - Utility-first CSS framework (v4)
- **Alpine.js** - Lightweight JavaScript framework for interactivity
- **Vite** - Build tool

## Features

- ✅ Responsive design (mobile-friendly)
- ✅ Modern UI with Tailwind CSS
- ✅ Interactive mobile menu with Alpine.js
- ✅ Clean, professional design
- ✅ Easy content management via text files
- ✅ SEO-friendly structure
