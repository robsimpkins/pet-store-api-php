# Pet Store API

## Description
Develop an API for a pet store using a microservices architecture. The API requirements can be found at [https://petstore.swagger.io/](https://petstore.swagger.io/).

## Usage
1. Clone the repository:

       git clone https://github.com/robsimpkins/pet-store-api-php.git && cd pet-store-api-php

1. Create an `.env` file by copying the `.env.example` file. The `.env.example` file already contains some default values for running the project locally.

       cp src/.env.example src/.env

1. Generate and set an `APP_KEY` in the `.env` file:

       # Linux
       appKey=$(openssl rand -hex 32); sed -i "s/APP_KEY=/APP_KEY=${appKey}/" ./src/.env

       # MacOS
       appKey=$(openssl rand -hex 32); sed -i '' -e "s/APP_KEY=/APP_KEY=${appKey}/" ./src/.env

1. Generate and set an `API_KEY` in the `.env` file:

       # Linux
       apiKey=$(openssl rand -hex 32); sed -i "s/API_KEY=/API_KEY=${apiKey}/" ./src/.env

       # MacOS
       apiKey=$(openssl rand -hex 32); sed -i '' -e "s/API_KEY=/API_KEY=${apiKey}/" ./src/.env

1. Build the Docker images:

       docker-compose build

1. Start Docker containers:

       docker-compose up -d

1. Install PHP dependencies:

       docker-compose exec php composer install

1. The microservice API can be accessed on `localhost:8080` and the MySQL database can be accessed on `localhost:3306`.

# Credit
-   The Dockerfile and docker-compose implementation used where copied from this [Github repository](https://github.com/aschmelyun/docker-compose-laravel) and [Medium article](https://medium.com/@aschmelyun/the-beauty-of-docker-for-local-laravel-development-b5eb6caf0946) by @aschmelyun.