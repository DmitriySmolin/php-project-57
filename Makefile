start:
	php artisan serve --host 0.0.0.0

build-frontend:
	npm run dev

setup: env-prepare install fix-fakerphp key prepare-db
	npm run build

env-prepare:
	cp -n .env.example .env

install:
	composer install
	npm ci

fix-fakerphp:
	cp -f src/Person.php vendor/fakerphp/faker/src/Faker/Provider/ru_RU/Person.php

key:
	php artisan key:gen --ansi

prepare-db:
	php artisan migrate:fresh --seed

validate:
	composer validate

lint:
	composer exec phpcs -v

lint-fix:
	composer exec phpcbf

test:
	php artisan test

test-coverage:
	XDEBUG_MODE=coverage php artisan test --coverage-clover ./build/logs/clover.xml

compose:
	docker-compose up

compose-test:
	docker-compose run web make test

compose-bash:
	docker-compose run web bash

compose-setup: compose-build
	docker-compose run web make setup

compose-build:
	docker-compose build

compose-db:
	docker-compose exec db psql -U postgres

compose-down:
	docker-compose down -v
