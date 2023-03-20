<?php

interface ebizSoapInterface{

    /** End point url  */
    const EBIZ_ENDPOINT_URL = 'https://soap.ebizcharge.net/eBizService.svc?singleWsdl';

    /** Soap Client options */

    /**
     *
     * Ebizcharge Version
     *
     * @const: EBIZCHARGE_VERSION
     */
    const EBIZCHARGE_VERSION = '3.6.0.0';

    /**
     * Transaction Error
     *
     * @const: EBIZCHARGE_TRANSACTION_ERROR
     */
    const EBIZCHARGE_TRANSACTION_ERROR = "Transaction Authentication Error with EBizCharge Payment Gateway";

    /**
     *
     * Envoirnment Prefix
     *
     * @const: ENVOIRNMENT_PREFIX
     */
    const ENVOIRNMENT_PREFIX = 'Mag-2';

    /**
     * ACH
     *
     * @const ACH
     */
    const ACH = 'ACH';

    /**
     * Ebizcharge Magento Software
     *
     * @const EBIZCHARGE_MAGENTO_SOFTWARE
     */
    const EBIZCHARGE_MAGENTO_SOFTWARE = 'Magento2';

    /**
     *  Ebizcharge Division Id
     *
     * @const: EBIZCHARGE_DIVISION_ID
     */
    const EBIZCHARGE_DIVISION_ID = 'Magento2';

    /**
     * EBizCharge SOAP API Gateway URL
     *
     * @const EBIZCHARGE_SOAP_API_GATEWAY_URL
     */
    const EBIZCHARGE_SOAP_API_GATEWAY_URL = 'https://soap.ebizcharge.net';

    /**
     * Recurring Payment Status SUSPENDED
     *
     * @const RECURRING_PAYMENT_STATUS_SUSPENDED
     */
    const RECURRING_PAYMENT_STATUS_SUSPENDED = 1;

    /**
     * Recurring Payment Status UNSUSPENDED
     *
     * @const RECURRING_PAYMENT_STATUS_UNSUSPENDED
     */
    const RECURRING_PAYMENT_STATUS_UNSUSPENDED = 0;

    /**
     * Staging EBizCharge API Gateway URL
     *
     * @const EBIZCHARGE_SOAP_WSDL_API_GATEAY_STAGING_URL
     */
    const EBIZCHARGE_SOAP_WSDL_API_GATEAY_STAGING_URL = 'https://ebizsoapapidev1.azurewebsites.net/eBizService.svc?singleWsdl';

    /**
     * Production EBizCharge API Gateway URL
     *
     * @const EBIZCHARGE_SOAP_WSDL_API_GATEAY_PRODUCTION_URL
     */
    const EBIZCHARGE_SOAP_WSDL_API_GATEAY_PRODUCTION_URL = 'https://soap.ebizcharge.net/eBizService.svc?singleWsdl';

    /**
     * WSDL Trace
     *
     * @const EBIZCHARGE_SOAP_WSDL_TRACE
     */
    const EBIZCHARGE_SOAP_WSDL_TRACE = true;

    /**
     * WSDL Exceptions
     *
     * @const EBIZCHARGE_SOAP_WSDL_EXCEPTIONS
     */
    const EBIZCHARGE_SOAP_WSDL_EXCEPTIONS = true;

    /**
     * SOAP WSDL Cache
     *
     * @const EBIZCHARGE_SOAP_WSDL_CACHE
     */
    const EBIZCHARGE_SOAP_WSDL_CACHE = WSDL_CACHE_NONE;

    /**
     * SOAP WSDL Connection Timeout
     *
     * @const EBIZCHARGE_SOAP_WSDL_CONNECTION_TIMEOUT
     */
    const EBIZCHARGE_SOAP_WSDL_CONNECTION_TIMEOUT = 180;

    /**
     * SOAP WSDL SSL verify Peer
     *
     * @const EBIZCHARGE_SOAP_WSDL_SSL_VERIFY_PEER
     */
    const EBIZCHARGE_SOAP_WSDL_SSL_VERIFY_PEER = false;

    /**
     * SOAP WSDL Verify Peer Name
     *
     * @const EBIZCHARGE_SOAP_WSDL_SSL_VERIFY_PEER_NAME
     */
    const EBIZCHARGE_SOAP_WSDL_SSL_VERIFY_PEER_NAME = false;

    /**
     * SOAP WSDL SSL Allow self Signed
     *
     * @const EBIZCHARGE_SOAP_WSDL_SSL_ALLOW_SELF_SIGNED
     */
    const EBIZCHARGE_SOAP_WSDL_SSL_ALLOW_SELF_SIGNED = false;

    /**
     * Ebizcharge Field Type
     *
     * @const EBIZCHARGE_DEFAULT_FIELD_TYPE
     */
    const EBIZCHARGE_DEFAULT_FIELD_TYPE = 'Software';

    /**
     * Ebizcharge Not Equal Operator
     *
     * @const EBIZCHARGE_DEFAULT_EQUAL_NOT_OPERATOR
     */
    const EBIZCHARGE_DEFAULT_EQUAL_NOT_OPERATOR = 'notequal';

    /**
     * Ebizcharge Equal Operator
     *
     * @const EBIZCHARGE_DEFAULT_EQUAL_OPERATOR
     */
    const EBIZCHARGE_DEFAULT_EQUAL_OPERATOR = 'equal';

    /**
     * Ebizcharge Request Limit
     *
     * @const EBIZCHARGE_DEFAULT_REQUEST_MAX_LIMIT
     */
    const EBIZCHARGE_DEFAULT_REQUEST_MAX_LIMIT = 1000;

    /**
     * Ebizcharge Default Request Limit
     *
     * @const: EBIZCHARGE_DEFAULT_REQUEST_LIMIT
     */
    const EBIZCHARGE_DEFAULT_REQUEST_LIMIT = 1000;

    /**
     * Request Start Limit
     *
     * @const EBIZCHARGE_DEFAULT_REQUEST_START_LIMIT
     */
    const EBIZCHARGE_DEFAULT_REQUEST_START_LIMIT = 0;

    /**
     * Ebizcharge Default Request Previouse Range
     *
     * @const EBIZCHARGE_DEFAULT_REQUEST_PREVIOUSE_YEAR_RANGE
     */
    const EBIZCHARGE_DEFAULT_REQUEST_PREVIOUSE_YEAR_RANGE = 5;

    /**
     * Ebizcharge Sort Column
     *
     * @const EBIZCHARGE_DEFAULT_SORT_COLUMN
     */
    const EBIZCHARGE_DEFAULT_SORT_COLUMN = 'CustomerId';

    /**
     *  Default Include Items
     *
     * @const EBIZCHARGE_DEFAULT_INCLUDE_ITEMS
     */
    const EBIZCHARGE_DEFAULT_INCLUDE_ITEMS = 1;

    /**
     *  Ebizcharge Default Max Size
     *
     * @const EBIZCHARGE_DEFAULT_MAX_SIZE
     */
    const EBIZCHARGE_DEFAULT_MAX_SIZE = 0;

    /**
     * Ebizcharge Default Position
     *
     * @const EBIZCHARGE_DEFAULT_POSITION
     */
    const EBIZCHARGE_DEFAULT_POSITION = 0;

    const EBiz_PAYMENT_TILE='EBizcharge';
    const EBiz_API_SECURITY_KEY='2f3f142f-333a-487d-a8a4-6825faf6fb6f';
    const EBiz_API_USERNAME='woocomm1';
    const EBiz_API_PASSWORD='woocomm1';


}