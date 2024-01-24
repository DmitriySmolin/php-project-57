start:
	php artisan serve
install:
	composer install
validate:
	composer validate
lint:
	composer exec phpcs -v
lint-fix:
	composer exec phpcbf
test:
	composer exec --verbose phpunit tests
test-coverage:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml
stan:
	composer exec --verbose phpstan analyze app bootstrap config database public routes tests





