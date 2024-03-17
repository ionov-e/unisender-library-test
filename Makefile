build:
	docker compose build
serve:
	docker compose up -d
serve-recreate:
	docker compose up -d --force-recreate
stop:
	docker compose stop
up:
	docker compose up
down:
	docker compose down
destroy:
	docker compose down -v
exec:
	docker compose run php-fpm bash
