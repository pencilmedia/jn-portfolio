Grunt PHP Starter Project

# grunt-php-starter

## Install
npm install && bower install

## Project
Starter package for any grunt-php based projects.

## Help
http://blog.cloudoki.com/grunt-browsersync-love/


## Run Heroku PHP project
Must include buildpacks:

$ heroku buildpacks:set heroku/nodejs

 Buildpack set. Next release on your-application will use heroku/nodejs.
 Run git push heroku master to create a new release using this buildpack.

$ heroku buildpacks:set heroku/php --index 2

 Buildpack set. Next release on your-application will use:
   1. heroku/nodejs
   2. heroku/php
 Run git push heroku master to create a new release using these buildpacks.



Install buildpack:
https://github.com/gcpantazis/heroku-buildpack-php-gruntjs




 Create Procfile

 Create app.js file