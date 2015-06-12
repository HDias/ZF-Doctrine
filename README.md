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

Run tests

    phpunit ./path_to_folder_phpunit.xml

#### Estrutura do Projeto
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
            log/                * Code coverage application
        init_autoloader.php
        phpcs-ruleset.xml       * Code Sniffer configurations

#### Estrutura do Módulo
    module_root<named-after-module-namespace>/
        Module.php
        config/
            module.config.php
        public/
            images/
            css/
            js/
        phpcs/                  * Code Sniffer
            log/   
        phpmd/                  * Mess Detector
            log/
        src/
            <module_namespace>/
                <code files>
        test/                   * Run module tests
            phpunit.xml
            bootstrap.php
            log/                * Code coverage Module
            <module_namespace>/
                <test code files>
        view/
            <dir-named-after-module-namespace>/
                <dir-named-after-a-controller>/
                    <.phtml files>

## CodeSniffer

[Example xml] (https://github.com/squizlabs/PHP_CodeSniffer/wiki/Annotated-ruleset.xml)
    
Deve ser adicionado o caminho para os arquivos a serem verificado em phpcs.ruleset.xml:
    
    [...]
    <file>./path/</file>
    [...]

Arquivos exlcuídos da verificação
    
    [...]
    <exclude-pattern>./path</exclude-pattern>
    [...]
        
Run verification

    vendor/bin/phpcs --standard=phpcs-ruleset.xml    
    
## Mess Detector

[Rules](http://phpmd.org/rules/index.html)

    vendor/bin/phpmd <path_to_code>  xml cleancode,codesize,controversial,design,unusedcode,codesize --reportfile <module_path>/phpmd/log/phpmd.xml

