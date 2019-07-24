# Save Light

## WordPress Tutorial

### Installation and setup

1. Download WordPress from their [download](https://wordpress.org/download/) page.
1. Download XAAMP from their [download](https://www.apachefriends.org/download.html) page.
1. Place the WordPress zip into your xampp folder.
1. Visit http://localhost/phpmyadmin/ and create a Database called "wordpress"
1. Navigate to "User Accounts" and click "Add user account." Grant permissions.
1. Visit http://localhost/wordpress/SaveLight/ and click "Create a Configuration File"
1. Login.
1. Visit http://localhost/wordpress/SaveLight/wp-admin/ for back-end management.
1. Visit http://localhost/wordpress/SaveLight/ to view your front-end domain.

### Adding Themes

1. Visit https://athemes.com/theme/airi/ for the Airi theme and click "Download"
1. From http://localhost/wordpress/SaveLight/wp-admin/ choose Appearance > Themes > Add New > Upload Theme > Choose File > [airi.1.0.0.zip](https://athemes.com/theme/airi/?edd_action=free_downloads_process_download&download_id=1623736&price_ids=#edd-free-download-modal) > Install Now
1. Download recomended plugins with "Begin installing plugins" > Check all > Change "Bulk Actions" to "Install" > Apply
1. After installation is complete, Return to Required Plugins Installer and activate plugins. Check all > Activate (dropdown) > Apply
1. Go back to dashboard > Appearance > Import Demo Data
1. Import the Health Coach theme
1. Visit http://localhost/wordpress/SaveLight/ for your front-end.

### Customize layout

* #### [Traversy](https://www.youtube.com/watch?v=nqoM4dYHiyc&t=11m7s)
1. Appearance > Themes > Customize (current theme)
1. Header > Menu > Contained

## Deploy To Heroku

https://elements.heroku.com/buttons/ellefsen/wordpress-heroku-php

``` bash
# Clone repository.
$ git clone git://github.com/mhoofman/wordpress-heroku.git 
# Navigate to project directory.
$ cd wordpress-heroku
# Create heroku app.
$ heroku create domainname
# Rename app if you'd like.
$ heroku apps:rename newname
# Add heroku database.
$ heroku addons:create heroku-postgresql
# Promote your database (something like postgresql-opaque-96243, ).
$ heroku pg:promote HEROKU_POSTGRESQL_INSTANCE
# Deploy site to Heroku.
$ git add .
$ git push heroku master
```

In Heroku, navigate to your app > Settings > Reveal Config Vars to access your DATABASE_URL Environment Variable.

#### Pass environment variables into `wp.config.php`

``` php
$db = parse_url($_ENV["DATABASE_URL"]);

/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);
```

#### Clear out your database.
``` bash
$ heroku pg:reset DATABASE_URL
```