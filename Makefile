dev:
	- docker-compose down && docker-compose up -d

up:
	- docker-compose up -d

down:
	- docker-compose down

bash:
	-	docker-compose exec app bash

migrate:
	- docker-compose exec api php artisan migrate
