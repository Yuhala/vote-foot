
# Server setup
- Install LAMP stack and phpmyadmin
- Install composer

# Setup node version manager (nvm) and nodejs
- Setup nvm and nodejs with the following commands:
```
sudo apt install curl
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.1/install.sh | bash
# close and open your terminal for nvm install to take effect
nvm install node # install latest nodejs version

```
- For more info on nvm installation, read [here](https://github.com/nvm-sh/nvm).


- Setup npm manifests with the following commands:

# Setup npm

```
npm install
npm ci
npm run dev
npx mix

```

# Application setup

- Clone this repo to your system and `cd` into it.
- Run `composer install`
- Copy .env.example to .env Example for linux users : cp .env.example .env
- Set valid database credentials of env variables DB_DATABASE, DB_USERNAME, and DB_PASSWORD
- Run php artisan key:generate to generate application key
- Run php artisan migrate
- Run php artisan db:seed to seed your database


# Laravel commands
- Create db seeder: `php artisan make:seeder ProductSeeder`

# Useful commands and tips
- To check laravel version used by your app, use the command `php artisan --version`.