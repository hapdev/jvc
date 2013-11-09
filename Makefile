.PHONY: all
all: cs test

.PHONY: cs
cs:
	./vendor/bin/phpcs --standard=PSR2 --extensions=php src/ test/

.PHONY: test
test:
	./vendor/bin/phpunit
