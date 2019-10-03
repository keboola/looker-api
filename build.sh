docker-compose run --rm --entrypoint sh build -c 'rm -rf /local/output/SwaggerClient-php'
docker-compose run --rm build
docker-compose run --rm --entrypoint sh build -c 'cp -r /local/output/SwaggerClient-php/* /local'
docker-compose run --rm --entrypoint sh build -c "sed 's/\(\S\)  /\1 \n/g' /local/README.md > /local/README2.md && mv /local/README2.md /local/README.md"
