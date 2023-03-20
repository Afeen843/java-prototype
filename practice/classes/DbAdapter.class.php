<?php

include_once('DbInterface.class.php');

/**
 * Class DbAdapter
 */
abstract class DbAdapter implements DbInterface
{

    /**
     * @var Dbhost
     */
    protected $_dbHost;

    /**
     * @var $_dbUser
     */
    protected $_dbUser;

    /**
     * @var $_dbPassword
     */
    protected $_dbPassword;

    /**
     * @var $_dbName
     */
    protected $_dbName;

    /**
     * @var $_dbPort
     */
    protected $_dbPort;

    /**
     * @var $_dbConnection
     */
    protected $_dbConnection;

    /**
     * DbAdapter constructor.
     */
    public function __construct()
    {

    }


    /**
     * @param string $dbHost
     * @param string $dbUser
     * @param string $dbPassword
     * @param string $dbName
     * @param int $dbPort
     * @return false|mixed|mysqli
     */
    public function connectDB(string $dbHost = '', string $dbUser = '', string $dbPassword = '', string $dbName = '', int $dbPort = 3306)
    {
        /**
         * fetching variables
         */
        $this->_dbHost = $dbHost;
        $this->_dbUser = $dbUser;
        $this->_dbPassword = $dbPassword;
        $this->_dbName = $dbName;
        $this->_dbPort = $dbPort;

        try {
            /** if dbconnection  */
            if (!$this->_dbConnection) {
                $dbConnect = mysqli_connect($this->_dbHost, $this->_dbUser, $this->_dbPassword, $this->_dbName, $dbPort);
                if ($dbConnect) {
                    $this->_dbConnection = $dbConnect;
                }
            }
        } catch (\MongoDB\Driver\Exception\Exception $exception) {
            $this->_dbConnection = false;
        }

        return $this->_dbConnection;
    }



}