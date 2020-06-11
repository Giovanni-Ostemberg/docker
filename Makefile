dev:
	- docker-compose down && docker-compose up -d

prepare:
	- docker-compose down && docker-compose up -d
	- docker-compose exec app composer install
	- docker-compose exec app npm install
	- docker-compose exec app npm run dev

up:
	- docker-compose up -d

down:
	- docker-compose down

bash:
	- docker-compose exec app bash

migrate:
	- docker-compose exec app php artisan migrate
