cp ./larabit/.env.example ./larabit/.env
docker-compose build
#docker-compose build --no-cache
docker-compose up --force-recreate -d
docker-compose exec web sh /build.sh
docker-compose exec web cd /var/www && npm install -g && npm install gulp -g && gulp 
--development 
