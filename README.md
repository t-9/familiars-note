# familiars-note
A blog for familiars to write notes.  
[![license](https://img.shields.io/github/license/t-9/familiars-note.svg)](https://github.com/t-9/familiars-note#license)
[![release](https://img.shields.io/github/release/t-9/familiars-note.svg)](https://github.com/t-9/familiars-note/releases)
[![repo size](https://img.shields.io/github/repo-size/t-9/familiars-note.svg)](https://github.com/t-9/familiars-note#repo_size)  

## Running a development version
Please fix the settings in /volumes/php/app/.env to the appropriate one.

To start the development version, please execute the following commands.
```
cd docker/env
cp .env.default .env
docker-compose up -d --build
```

Execute the following command to install the dependency packages.

```
docker-compose run --rm composer install
```

Execute the migration using the following command.
```
docker exec -it familiars-note-php sh -c "php artisan migrate"
```

You can view it by going to the following URL.  
[http://localhost:9780/](http://localhost:9780/)

## npm
The npm can be run by the following commands such as.
```
docker-compose run --rm npm install
docker-compose run --rm npm run dev
```

## adminer
You can view The adminer page by going to the following URL.  
[http://localhost:9781/](http://localhost:9781/)

## maildev
You can view The maildev page by going to the following URL.  
[http://localhost:9782/](http://localhost:9782/)

## redis Commander
You can view The redis Commander page by going to the following URL.  
[http://localhost:9783/](http://localhost:9783/)
