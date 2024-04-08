start:
	php artisan serve --host 0.0.0.0

build-frontend:
	npm run dev

setup: env-prepare install key prepare-db
	npm run build

env-prepare:
	cp -n .env.example .env

install:
	composer install
	npm ci

key:
	php artisan key:gen --ansi

prepare-db:
	php artisan migrate:fresh --seed

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12  tests/ app/ routes/ lang/ database/

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12  tests/ app/ routes/ lang/ database/

phpstan:
	vendor/bin/phpstan analyse tests/ app/ lang/ database/ src/

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
