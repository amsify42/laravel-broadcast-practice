## Installation
Clone the repo and run
```
composer install
```
Make sure to create db and have these vars set in `.env`
```
DB_DATABASE=you-db-name
DB_USERNAME=root
DB_PASSWORD=your-password
```
and run
```
php artisan migrate
```
Create pusher account on https://pusher.com/ get app credentials from pusher and add these vars in `.env` file in root of app
```
BROADCAST_DRIVER=pusher
```
and
```
PUSHER_APP_ID=112233
PUSHER_APP_KEY=your_app_key
PUSHER_APP_SECRET=your_app_secret
PUSHER_APP_CLUSTER=ap2
```
then install npm packages
```
npm install
```
and for all laravel mix
```
npm run dev
```
or
```
npm run prod
```
and you are ready to test.