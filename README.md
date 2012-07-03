# Blank website using the aquarius CMS

This is a template that can be used to develop a website using the aquarius
CMS developed by [aquaverde GmbH](http://aquaverde.ch).


# Installation

1. Clone this repository to your webroot (this example assumes /var/www)

        git clone --recursive git://github.com/aquaverde/aquarius-blank.git /var/www

2. Enable maintenance mode by running

        /var/www/aquarius/core/bin/enable_maintenance 127.0.0.1
   
   This example assumes you'll be connecting from localhost. Instead, you may
   create the file
   
        /var/www/aquarius/AQUARIUS_MAINTENANCE.CASUAL

   This too enables maintenance mode. The second method is less secure. Both
   methods will allow maintenance operations during two hours.

4. Ensure the Webserver has write-permissions on the aquarius-directory. This
   depends on your setup. It's easiest when the user you use to administer the
   files is the same as the webserver user.

3. Browse to http://localhost/aquarius/core/backend/setup.php to start setup.


# Changing the site

Assuming the installation went well, you can browse 
http://localhost/aquarius/admin/ to administer the site. To actually work on the
site, you will have to modify the templates in /var/www/aquarius/templates.

To do serious work, you'll want to change the origin-remote of the
repository to some other place, develop there, then push/pull changes to the
server when they're ready.


# Licence

Permission is granted to use these example files as you see fit, though some may
come with further restrictions (included JS libraries). Note that the Aquarius
core is made available under a licence different from the arrangement for these
example files.