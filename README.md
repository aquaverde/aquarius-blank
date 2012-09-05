# Blank website using the aquarius CMS

This is a template that can be used to develop a website using the [aquarius CMS](http://aquarius-cms.com) developed by [aquaverde GmbH](http://aquaverde.ch).


# Installation

0. Change to your webroot (this example uses /var/www)

        cd /var/www

1. Clone this repository to your webroot

        git clone --recursive git://github.com/aquaverde/aquarius-blank.git .

2. Enable maintenance mode by running

        aquarius/core/bin/enable_maintenance 127.0.0.1
   
   This assumes that you'll be connecting from localhost. Instead, you may
   create the file AQUARIUS_MAINTENANCE.CASUAL
   
        touch aquarius/AQUARIUS_MAINTENANCE.CASUAL

   This too enables maintenance mode, allowing any hosts to run maintenance
   operations. Only use this on hosts that do not allow public access. Both
   methods will allow maintenance operations during two hours.

4. Ensure the Webserver has write-permissions on the aquarius-directory. This
   depends on your setup. It's easiest when the user you use to administer the
   files is the same as the webserver user.

3. Browse to http://localhost/aquarius/admin/setup.php to start setup.


# Changing the site

Assuming the installation went well, you can browse 
http://localhost/aquarius/admin/ to administer the site. To actually work on the
site, you will have to modify the templates in /var/www/aquarius/templates.

To do serious work, you'll want to change the origin-remote of the
repository to some other place, develop there, then push/pull changes to the
server when they're ready.

# Creating an installer pack

Many hosting providers do not have git installed or do not even offer shell access.
In such cases you can upload an installer pack to the server. To generate such a
pack, start from a aquarius installation, such as the cloned aquarius-blank
repository as explained above.

1. Change to the web root

        cd /var/www

2. Generate the adminer DB interface (optional, but handy when you have no other access to the DB)

        aquarius/core/bin/compile_adminer
    
3. Generate the installer pack

        aquarius/core/bin/packer all

    This will add all files the packer deems necessary. If you want to include still
    more files, you can add the paths as additional parameters, relative to the
    web-root.

    The packer script generates two files with a very long name. Example:
        aquarius_20120905-1537_v3.6.7-74-g8afa04b_all_52a0e.php
        aquarius_20120905-1537_v3.6.7-74-g8afa04b_all_52a0e.tar.bz

4. Upload the pack-files to the web-root of your server. Example:

        scp aquarius_20120905-1537_v3.6.7-74-g8afa04b_all_52a0e.* webmaster@aquarius-site.example:/var/www

4. Run the generated installer script

        http://aquarius-site.example/aquarius_20120905-1537_v3.6.7-74-g8afa04b_all_52a0e.php
    
    It is best to remove the packs right after installation, for they allow setup
    operations without authentication!

Installer packs may also be generated to perform upgrades of aquarius. In this
case, you might want to use the 'bare' alias with the packer, so that
site-specific templates and other files are not replaced.

        aquarius/core/bin/packer bare

# Licence

Permission is granted to use these example files as you see fit, though some may
come with further restrictions (included JS libraries). Note that the Aquarius
core is made available under a licence different from the arrangement for these
example files.