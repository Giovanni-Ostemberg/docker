## About The Project

This project was built to improve the knowledge about [Laravel](https://laravel.com) and [Docker](https://www.docker.com/).

It'll be a CRUD stock system with basic authentication and ability to manage products (Create, Read, Update and Delete) 


## How To

- Clone the repository
```bash
git clone git@github.com:Giovanni-Ostemberg/docker.git
```
- Copy the `.env.example` file to `.env`
```bash
cp .env.example .env
```
- Build and up the container
    * Using make file
    ```bash
    make up
    ```
    * Without make file
    ```bash
    docker-compose up -d
    ```
**The next commands are executed on the container, so run this command before:**
```bash
docker-compose exec app bash
```

- Execute the composer install
```bash
composer install
```
- Generate the App key
```bash
php artisan key:generate
```
- Storage folder permission (use it only locally)
```bash
chmod -R 777 storage/
```
- Migrate the Database
```bash
php artisan migrate
```

That's it!!!

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
