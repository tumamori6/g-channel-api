# Step1
heroku create {app-name} --buildpack heroku/php
git push -> add Procfile/composer.json/index.php
composer update
heroku git:remote -a {app-name}
heroku addons:create cleardb:ignite --app {app-name}

# Step2
### Create connect MySQL Workbench
heroku config
`CLEARDB_DATABASE_URL: mysql://[Username]:[Password]@[Hostname]...


