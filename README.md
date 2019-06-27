# (WIP) php-fpm + Stackdriver Debugger example

- `GOOGLE_APPLICATIONS_CREDENTIALS`: GCP service account key which has **Stackdriver Debugger Agent** role. 

```bash
export GOOGLE_APPLICATION_CREDENTIALS=/path/to/key.json
docker-compose up -d
docker-compose run php composer install
curl http://localhost:8080
```

## Start cloud debugger daemon

```bash
docker-compose exec php ash
$ vendor/bin/google-cloud-debugger -c daemonConfig.php
```

