#ZF-Doctrine

##Applicação ZF2 + DoctrineORMMOdule + ZendDeveloperTools 

###Criar tabelas

"O banco de dados deve ser previamente criado."

Para gerar as tabelas a partir das entities:

`vendor/bin/doctrine-module orm:schema-tool:create`


##Web Server Setup

### Apache Setup

To setup apache, setup a virtual host to point to the public/ directory of the
project and you should be ready to go! It should look something like below:

    <VirtualHost *:80>
        ServerName local.zf2-demo
        DocumentRoot /path/to/zf2-demo/public
        SetEnv APPLICATION_ENV "prod"                #add this in production
        <Directory /path/to/zf2-demo/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>