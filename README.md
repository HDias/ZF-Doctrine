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

###[Tabela de Prioridades] (http://framework.zend.com/manual/current/en/modules/zend.log.overview.html#using-built-in-priorities)

[Class Logger - Metods] (http://framework.zend.com/apidoc/2.0/classes/Zend.Log.Logger.html)

    EMERG   = 0;  // Emergency: system is unusable
    ALERT   = 1;  // Alert: action must be taken immediately
    CRIT    = 2;  // Critical: critical conditions
    ERR     = 3;  // Error: error conditions
    WARN    = 4;  // Warning: warning conditions
    NOTICE  = 5;  // Notice: normal but significant condition
    INFO    = 6;  // Informational: informational messages
    DEBUG   = 7;  // Debug: debug messages
    
##Tests

### Estrutura do Projeto
        application_root/
            config/
                application.config.php
                autoload/
                    global.php
                    local.php
                    // etc.
            data/
            module/
            vendor/
            public/
                .htaccess
                index.php
            tests/                  * Run all Tests
                log/                * Todos os dados de cobertura de Testes
            init_autoloader.php

#### Estrutura do Modulo

        module_root<named-after-module-namespace>/
            Module.php
            autoload_classmap.php
            autoload_function.php
            autoload_register.php
            config/
                module.config.php
            public/
                images/
                css/
                js/
            src/
                <module_namespace>/
                    <code files>
            test/                  * Run module tests
                phpunit.xml
                bootstrap.php
                log/               * Dados do Módulo de cobertura de Testes
                <module_namespace>/
                    <test code files>
            view/
                <dir-named-after-module-namespace>/
                    <dir-named-after-a-controller>/
                        <.phtml files>

   