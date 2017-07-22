cp ./larabit/.env.example ./larabit/.env
docker-compose build --no-cache
docker-compose up --force-recreate
