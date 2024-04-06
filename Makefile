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
	composer exec --verbose phpcs -- --standard=PSR12  tests/ app/ routes/

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12  tests/ app/ routes/

test:
	php artisan test

test-coverage:
	XDEBUG_MODE=coverage php artisan test --coverage-clover ./build/logs/clover.xml


