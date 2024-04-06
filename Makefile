start:
	php artisan serve
install:
	composer install
	cp -n .env.example .env
	php artisan key:gen --ansi
	php artisan migrate
    php artisan db:seed
	npm ci
	npm run build
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 app tests
lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 app tests
test:
	composer exec --verbose phpunit tests
test-coverage:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml
stan:
	composer exec --verbose phpstan analyze app bootstrap config database public routes tests
build-frontend:
	npm run dev
