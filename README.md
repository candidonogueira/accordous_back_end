# accordous_back_end

Docker Image Based on project: https://github.com/aschmelyun/docker-compose-laravel

To run the project, follow these steps:

1 - docker-compose up -d --build <br />
2 - docker-compose run --rm composer install
3 - docker-compose run --rm npm run dev
4 - docker-compose run --rm artisan migrate

The RESTful application will be available at: http: // localhost: 8088 /
