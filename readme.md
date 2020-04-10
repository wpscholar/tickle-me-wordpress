# Tickle Me WordPress

Notice: This plugin has been removed from the wordpress.org plugin directory.

## Description
Tickle Me WordPress is a fun security plugin.  Since WordPress 3.0 the login form shakes back and forth on failed logins.  Rather than return helpful error messages to potential hackers, this plugin returns the message "Oh... that tickles!" instead.

## Installation

### Manual

- Download the .zip file here: https://github.com/wpscholar/tickle-me-wordpress/archive/master.zip
- Upload the .zip file into WordPress.

### Composer

Add this to your `composer.json` file:

```
"repositories":[
    {
        "type": "vcs",
        "url": "https://github.com/wpscholar/tickle-me-wordpress"
    }
]
```

Run `composer install wpscholar/tickle-me-wordpress`.
