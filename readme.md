## Laravel Dokku

This is a starter project for using Laravel on Dokku with PostgreSQL as the database.


## Getting Started

#Steps

1) Install [Dokku](https://github.com/progrium/dokku#installing) on your server or [spin up a new droplet](https://www.digitalocean.com/community/articles/how-to-use-the-digitalocean-dokku-application) with it preinstalled on Digital Ocean
2) If you installed it yourself please also follow steps [2 and 3](https://www.digitalocean.com/community/articles/how-to-use-the-digitalocean-dokku-application) to make sure you have successfully set it up
3) Install [Dokku PostgreSQL](https://github.com/Kloadut/dokku-pg-plugin/) plugin (Run on server as root)
````bash
cd /var/lib/dokku/plugins
git clone https://github.com/Kloadut/dokku-pg-plugin postgresql
dokku plugins-install
````
4) Install [dokku-user-env-compile](https://github.com/musicglue/dokku-user-env-compile) plugin (Run on server as root)
````bash
cd /var/lib/dokku/plugins
git clone https://github.com/musicglue/dokku-user-env-compile.git user-env-compile
dokku plugins-install
````
5) Clone this repo to your local machine and run the following commands
````bash
git clone https://github.com/joshstrange/laravel-dokku
cd laravel-dokku
composer update
git commit -am 'Composer Lock File'
git remote add dokku dokku@YOURHOSTNAME:YOURAPPNAME
git push dokku master
````
When this is done you should be able to visit the URL provided and see "Laravel Dokku Hello World"
6) Create PostgreSQL DB for your (Run on server as root), make sure to name the the exact same as your app above
````bash
dokku postgresql:create YOURAPPNAME
````
7) Add this line to your composer.json file in the "scripts" -> "post-install-cmd" section as the last command
````json
"php artisan migrate"
````
8) Commit and push your changes
````bash
git commit -am 'Adding DB migrations'
git push dokku master
````

