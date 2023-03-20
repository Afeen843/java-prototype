<?php

/**
 * Interface DbInterface
 */
interface DbInterface
{


    /**
     * @param string $dbHost
     * @param string $dbUser
     * @param string $dbPassword
     * @param string $dbName
     * @return mixed
     */
    public function connectDB(string $dbHost = '', string $dbUser = '', string $dbPassword = '', string $dbName = '', int $dbPort = 3306);
}