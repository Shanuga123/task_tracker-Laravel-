<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



## OverView
The Lightweight Task Tracker is a simple application built using Laravel that allows users to create, update, and delete tasks. The application provides real-time updates to notify users when tasks are created or modified. This project utilizes Laravel Echo and Pusher for real-time communication and is backed by a MySQL database.



## Features
1. User Authentication: Users can register, log in, and manage their tasks
2. Task Management: Create, read, update, and delete tasks. Each task has a title,task_code,date and description.
3. Real-Time Updates: Receive real-time notifications for task updates using Laravel Echo and Pusher.

## Requirements
1. PHP 8.1 or later
2. Laravel 9 or later
3. MySQL
4. Composer
5. Node.js and npm
6. Pusher account

## Installation
1. Clone the project `https://github.com/Shanuga123/task_tracker-Laravel-.git`
2. Navigate to the project's root directory using terminal
3. Create `.env` file - `cp .env.example .env`
4. Execute `composer install`
5. Execute `npm install`
6. Set application key - `php artisan key:generate --ansi`
7. Execute migrations and seed data - `php artisan migrate --seed`
8. Start vite server - `npm run dev`
9. Start Artisan server - `php artisan serve`

## Database Configuration
`DB_CONNECTION=mysql`


`DB_HOST=127.0.0.1`


`DB_PORT=3306`

`DB_DATABASE=your_database_name_here`


`DB_USERNAME=root`


`DB_PASSWORD=your_database_password_here`

## Pusher Configuration
`BROADCAST_DRIVER=pusher`


`PUSHER_APP_ID=your-pusher-app-id`


`PUSHER_APP_KEY=your-pusher-app-key`


`PUSHER_APP_SECRET=your-pusher-app-secret`


`PUSHER_APP_CLUSTER=mt1`


## Contribution
Feel free to fork the repository and submit pull requests. Ensure that you follow code style guidelines and include relevant tests.



## Contact
For questions or issues, please open an issue on the GitHub repository or contact `mshanuga2000@gmail.com`.