<?php

namespace Base\Test;

interface BootstrapAwareInterface
{
    /**
     * Retorna um array de string com o nome dos Modulos
     *
     * @return array
     */
    public static function getModules();

    /**
     * Retorna um array (key=>value) de namespaces
     *
     * @return array
     */
    public static function getNamespaces();
}