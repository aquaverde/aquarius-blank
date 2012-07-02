# Blank website using the Aquarius CMS

This is a template that can be used to develop a Website using the Aquarius
CMS developed by [aquaverde GmbH](http://aquaverde.ch).


# Installation

Assuming you're using Debian or a derivative.

0. Become the webserver user 
        su www-data || sudo su www-data
1. Clone this repository to your webroot (this example assumes /var/www)
        git clone --recursive git://github.com/aquaverde/aquarius-blank.git /var/www
2. Enable maintenance mode
        /var/www/aquarius/core/bin/enable_maintenance 127.0.0.1
   This example assumes you'll be connecting from localhost.
3. Browse to http://localhost/aquarius/core/backend/setup.php

To do serious work, you'll want to change the origin-remote of the
repository to some other place, develop there, then push/pull changes to the
server when they're ready.


# Changing the site

Assuming the installation went well, you can browse 
http://localhost/aquarius/admin/ to administer the site. To actually work on the
site, you will have to modify the templates in /var/www/aquarius/templates.


# Licence

Permission is granted to use these example files as you see fit, though some may
come with further restrictions (included JS libraries). Note that the Aquarius
core is made available under a licence different from the arrangement for these
example files.