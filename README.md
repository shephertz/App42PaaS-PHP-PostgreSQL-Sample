Getting Started with App42PaaS-Php-PostgreSQL Sample Application:
----------------------------------------------------

This application is basically a simple User Input Form that takes input from user and saves it in database.

<b>[Download the source code from git.](https://github.com/shephertz/App42PaaS-Php-PostgreSQL-Sample/archive/master.zip)</b>

Project Configuration:
----------------------

In order to configure this application following steps are to be done:

1. Open Config.properties.

2. Update the details of your PostgreSql service in it.

         app42.paas.db.username = <your_database_username>
         app42.paas.db.port = <your_service_port>
         app42.paas.db.password = <your_database_password>
         app42.paas.db.ip = <your_service_ip>
         app42.paas.db.name = <your_database_name>

3. Make the binary of this Application and start deploying your app on App42PaaS.
        
         $ app42 deploy
         $ Enter App Name: <your_app_name>
         $ Would you like to deploy from the current directory? [Yn]: n
         $ Binary Deployment Path: <your_binary_path>
         $ This process may take a while, be patient with it.
         $ Deploying Application... OK
         $ Please wait it may take few minutes.
         $ Latest Status....|
         $ App deployed successfully.




