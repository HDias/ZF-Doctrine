#ZF-Doctrine

##Applicação ZF2 + DoctrineORMMOdule + ZendDeveloperTools 

###Criar tabelas

"O banco de dados deve ser previamente criado."

Para gerar as tabelas a partir das entities:

`vendor/bin/doctrine-module orm:schema-tool:create`


##Web Server Setup

### Apache Setup

Deve ser configurado o virtual host para pasta public/.
A configuração de ser próxima a exibida abaixo.

    <VirtualHost *:80>
        ServerName local.zf2-demo
        DocumentRoot /path/to/zf2-demo/public
        SetEnv APP_ENV "prod"                #add this in production
        <Directory /path/to/zf2-demo/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>