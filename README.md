# php-fpm + stackdriver debugger example

- `GOOGLE_APPLICATIONS_CREDENTIALS`: service account key which can access Stackdriver Debugger

```bash
export GOOGLE_APPLICATION_CREDENTIALS=/path/to/key.json
docker-compose up -d
docker-compose run php composer install
curl http://localhost:8080
```

## Start cloud debugger daemon

```bash
docker-compose exec php ash
$ vendor/bin/google-cloud-debugger -s /src
```

