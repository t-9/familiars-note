# familiars-note
A blog for familiars to write notes.

## Running a development version
To start the development version, please execute the following commands.
```
cd docker/env
cp .env.default .env
docker-compose up -d --build
```

Execute the following command to install the dependency packages.

```
docker exec -it familiars-note-composer composer install
```

You can view it by going to the following URL.  
[http://localhost:9780/](http://localhost:9780/)

## npm
npm can be run by the following commands such as.
```
docker exec -it familiars-note-npm sh -c "npm install && npm run dev"
```
