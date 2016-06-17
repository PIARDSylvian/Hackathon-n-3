# Hackathon N°3 : site "Road Trip"



## Description
This application is dedicated to managing holiday trips with friends.

The need : some friends want to go together to some place for a holiday and try to
organise a trip.
They know how much money each one can spend, when they are available, but somehow they
don't known where they can go with that budget.

This application answers this need by suggesting interesting places given a budget.
Each member of the group of friends can connect himself to private area in the website.
Everyone can find a place given its personal budget and availability,
and submit to everyone of the group the selected place.
Everyone can vote and also may suggest another place.

## Prerequistes

- PHP 5.5
- MySQL 5+, with the login/password of your root user.
- Apache
- Git
- Composer


## Installation on Ubuntu

Enter the following commands on your Terminal :
```sh
cd /var/www/html/
```

If your SSH key is set up :
```sh
git clone git@github.com:PIARDSylvian/Hackathon-n-3.git
```

else :
```sh
git clone https://github.com/PIARDSylvian/Hackathon-n-3.git
```

Switch to the dev branch
```sh
git checkout dev
```

Now install symfony and other packages

If your composer is correctly installed in the /usr/local/bin/, enter :
```sh
composer install
```
else, call composer.phar from the location where it is installed.
and run the same command by replacing "composer" with /path of your composer.phar]/composer.phar.

TO COMPLETE INSTALL DOC : DATABASE

Answer "y" anytimes the prompt asks.

```sh
php app/console doctrine:database:create hackathon_road_trip
php app/console doctrine:schema:update --force
php app/console doctrine:fixtures:load
sh chmod.sh
```


### Test the website

In your browser, enter :

`http://localhost/Hackathon-n-3/web/app.php`

Connect with the following :
- username : `test`
- password : `test`





