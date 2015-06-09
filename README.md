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

##Logs

## Tabela de Prioridades

    EMERG   = 0;  // Emergency: system is unusable
    ALERT   = 1;  // Alert: action must be taken immediately
    CRIT    = 2;  // Critical: critical conditions
    ERR     = 3;  // Error: error conditions
    WARN    = 4;  // Warning: warning conditions
    NOTICE  = 5;  // Notice: normal but significant condition
    INFO    = 6;  // Informational: informational messages
    DEBUG   = 7;  // Debug: debug messages