start:
	php artisan serve
install:
	composer install
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 app routes
lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 app routes
test-coverage:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml



