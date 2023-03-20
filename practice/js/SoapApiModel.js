/**
 *
 * SOAP API Model
 *
 *
 * */

/**
 *
 * @type {{soapApiUser: string, _init: SoapApiModel._init, connectApi: SoapApiModel.connectApi, soapApiPassword: string, soapApiUrl: string, soapApiKey: string}}
 */
const SoapApiModel = {

    soapApiUrl: '',
    soapApiUser: '',
    soapApiPassword: '',
    soapApiKey: '',

    /**
     * Soap Api Init
     * @param $
     * @param soapApiUrl
     * @param soapApiUser
     * @param soapApiPassword
     * @param soapApiKey
     * @private
     */
    init: function (soapApiUrl, soapApiUser, soapApiPassword, soapApiKey) {


        /** initialize **/
        this.connectApi(soapApiUrl, soapApiUser, soapApiPassword, soapApiKey);
    },

    /**
     * Soap Api Model
     * @param $
     * @param soapApiUrl
     * @param soapApiUser
     * @param soapApiPassword
     * @param soapApiKey
     */
    connectApi: function (soapApiUrl, soapApiUser, soapApiPassword, soapApiKey) {

        this.soapApiUrl = soapApiUrl;
        this.soapApiUser = soapApiUser;
        this.soapApiPassword = soapApiPassword;
        this.soapApiKey = soapApiKey;

        console.log(SoapApiModel);
    },

    GetCustomer: function () {

        console.log('this  is get Customer');
    }


};