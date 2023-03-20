<?php

include_once('DbAdapter.class.php');

/**
 * Class SoapApi
 */
class SoapApi implements ebizSoapInterface
{
   protected SoapClient $soapClient;

    /**
     * SoapApi constructor.
     * @throws SoapFault
     */
    public function __construct()
    {
        try{
        $this->soapClient = new \SoapClient(self::EBIZ_ENDPOINT_URL, $this->getSoapOptions());
        }catch (SoapFault $e){
            $e->getMessage();
        }

    }

    /**
     * Connect DB
     *
     * @param string $dbHost
     * @param string $dbUser
     * @param string $dbPassword
     * @param string $dbName
     * @return mixed
     */
    public function connectDB(string $dbHost = '', string $dbUser = '', string $dbPassword = '', string $dbName = '', int $dbPort=3306)
    {
        return parent::connectDB($dbHost, $dbUser, $dbPassword, $dbName, $dbPort);

    }

    public function getSoapOptions()
    {

        return [
            'trace' => self::EBIZCHARGE_SOAP_WSDL_TRACE,
            'exceptions' => self::EBIZCHARGE_SOAP_WSDL_EXCEPTIONS,
            'cache_wsdl' => self::EBIZCHARGE_SOAP_WSDL_CACHE,
            'connection_timeout' => self::EBIZCHARGE_SOAP_WSDL_CONNECTION_TIMEOUT,
            'stream_context' => stream_context_create(
                [
                    'ssl' => [
                        'verify_peer' => self::EBIZCHARGE_SOAP_WSDL_SSL_VERIFY_PEER,
                        'verify_peer_name' => self::EBIZCHARGE_SOAP_WSDL_SSL_VERIFY_PEER_NAME,
                        'allow_self_signed' => self::EBIZCHARGE_SOAP_WSDL_SSL_ALLOW_SELF_SIGNED
                    ]
                ]
            )
        ];
    }

    public function getToken(): array
    {
        return array(
            'SecurityId' => self::EBiz_API_SECURITY_KEY,
            'UserId' => self::EBiz_API_USERNAME,
            'Password' => self::EBiz_API_PASSWORD
        );

    }


    public function SearchCustomer(string $start='1', string $limit='100')
    {
        $searchCustomer = [
            'securityToken' => $this->getToken(),
            'customerId' => '',
            'start' => $start,
            'limit' => $limit
        ];

        $SearchCustomer = $this->soapClient->SearchCustomers($searchCustomer);

        $result = $SearchCustomer->SearchCustomersResult->Customer;

        return (array)$result;


    }


}