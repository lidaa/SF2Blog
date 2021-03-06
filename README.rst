Symfony 2 Blog
========================

Installation from an Archive
----------------------------

The easiest way to get started is to download an archive with vendors included
(http://symfony.com/download). Unpack it somewhere under your web server root
directory and you're done.

If you have downloaded an archive without the vendors, you must have ``git``
available to install the vendors:

    php bin/vendors install

Installation from Git
---------------------

We highly recommend you that you download the packaged version of this
distribution. If you still want to use Git, your are on your own.

Run the following commands:

    git clone https://github.com/lidaa/SF2Blog.git 

    cd SF2Blog 

    php bin/vendors install 


Configuration
-------------

Check that everything is working fine by going to the ``web/config.php`` page
in a browser and follow the instructions.

If you want to use the CLI, a console application is available at
``app/console``. Check first that your PHP is correctly configured for the CLI
by running ``app/check.php``.

Run
-------------

permission

    sudo chmod -R 777 app/cache

    sudo chmod -R 777 app/logs

Create database and tables

    php app/console doctrine:database:drop --force

    php app/console doctrine:database:create

    php app/console doctrine:schema:create

Load data fixtures

    php app/console doctrine:fixtures:load

Usage
-------

Load home page in your browser : http://localhost/SF2Blog/web/app_dev.php/

Load admin page in your browser : http://localhost/SF2Blog/web/app_dev.php/admin/dashboard (login=lidaa,pwd=lidaa)


Fin. 
-----

Enjoy! :)
