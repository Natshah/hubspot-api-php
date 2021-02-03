<?php
/**
 * AccountingAppUrls
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting Extension
 *
 * These APIs allow you to interact with HubSpot's Accounting Extension. It allows you to: * Specify the URLs that HubSpot will use when making webhook requests to your external accounting system. * Respond to webhook calls made to your external accounting system by HubSpot
 *
 * The version of the OpenAPI document: v3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Extensions\Accounting\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Extensions\Accounting\ObjectSerializer;

/**
 * AccountingAppUrls Class Doc Comment
 *
 * @category Class
 * @description The URL endpoints that HubSpot will send requests to an external accounting system for certain actions.
 * @package  HubSpot\Client\Crm\Extensions\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountingAppUrls implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountingAppUrls';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'get_invoice_url' => 'string',
        'search_customer_url' => 'string',
        'get_invoice_pdf_url' => 'string',
        'customer_url_template' => 'string',
        'product_url_template' => 'string',
        'invoice_url_template' => 'string',
        'create_invoice_url' => 'string',
        'search_invoice_url' => 'string',
        'search_product_url' => 'string',
        'get_terms_url' => 'string',
        'create_customer_url' => 'string',
        'search_tax_url' => 'string',
        'exchange_rate_url' => 'string',
        'search_url' => 'string',
        'search_count_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'get_invoice_url' => null,
        'search_customer_url' => null,
        'get_invoice_pdf_url' => null,
        'customer_url_template' => null,
        'product_url_template' => null,
        'invoice_url_template' => null,
        'create_invoice_url' => null,
        'search_invoice_url' => null,
        'search_product_url' => null,
        'get_terms_url' => null,
        'create_customer_url' => null,
        'search_tax_url' => null,
        'exchange_rate_url' => null,
        'search_url' => null,
        'search_count_url' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'get_invoice_url' => 'getInvoiceUrl',
        'search_customer_url' => 'searchCustomerUrl',
        'get_invoice_pdf_url' => 'getInvoicePdfUrl',
        'customer_url_template' => 'customerUrlTemplate',
        'product_url_template' => 'productUrlTemplate',
        'invoice_url_template' => 'invoiceUrlTemplate',
        'create_invoice_url' => 'createInvoiceUrl',
        'search_invoice_url' => 'searchInvoiceUrl',
        'search_product_url' => 'searchProductUrl',
        'get_terms_url' => 'getTermsUrl',
        'create_customer_url' => 'createCustomerUrl',
        'search_tax_url' => 'searchTaxUrl',
        'exchange_rate_url' => 'exchangeRateUrl',
        'search_url' => 'searchUrl',
        'search_count_url' => 'searchCountUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'get_invoice_url' => 'setGetInvoiceUrl',
        'search_customer_url' => 'setSearchCustomerUrl',
        'get_invoice_pdf_url' => 'setGetInvoicePdfUrl',
        'customer_url_template' => 'setCustomerUrlTemplate',
        'product_url_template' => 'setProductUrlTemplate',
        'invoice_url_template' => 'setInvoiceUrlTemplate',
        'create_invoice_url' => 'setCreateInvoiceUrl',
        'search_invoice_url' => 'setSearchInvoiceUrl',
        'search_product_url' => 'setSearchProductUrl',
        'get_terms_url' => 'setGetTermsUrl',
        'create_customer_url' => 'setCreateCustomerUrl',
        'search_tax_url' => 'setSearchTaxUrl',
        'exchange_rate_url' => 'setExchangeRateUrl',
        'search_url' => 'setSearchUrl',
        'search_count_url' => 'setSearchCountUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'get_invoice_url' => 'getGetInvoiceUrl',
        'search_customer_url' => 'getSearchCustomerUrl',
        'get_invoice_pdf_url' => 'getGetInvoicePdfUrl',
        'customer_url_template' => 'getCustomerUrlTemplate',
        'product_url_template' => 'getProductUrlTemplate',
        'invoice_url_template' => 'getInvoiceUrlTemplate',
        'create_invoice_url' => 'getCreateInvoiceUrl',
        'search_invoice_url' => 'getSearchInvoiceUrl',
        'search_product_url' => 'getSearchProductUrl',
        'get_terms_url' => 'getGetTermsUrl',
        'create_customer_url' => 'getCreateCustomerUrl',
        'search_tax_url' => 'getSearchTaxUrl',
        'exchange_rate_url' => 'getExchangeRateUrl',
        'search_url' => 'getSearchUrl',
        'search_count_url' => 'getSearchCountUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['get_invoice_url'] = isset($data['get_invoice_url']) ? $data['get_invoice_url'] : null;
        $this->container['search_customer_url'] = isset($data['search_customer_url']) ? $data['search_customer_url'] : null;
        $this->container['get_invoice_pdf_url'] = isset($data['get_invoice_pdf_url']) ? $data['get_invoice_pdf_url'] : null;
        $this->container['customer_url_template'] = isset($data['customer_url_template']) ? $data['customer_url_template'] : null;
        $this->container['product_url_template'] = isset($data['product_url_template']) ? $data['product_url_template'] : null;
        $this->container['invoice_url_template'] = isset($data['invoice_url_template']) ? $data['invoice_url_template'] : null;
        $this->container['create_invoice_url'] = isset($data['create_invoice_url']) ? $data['create_invoice_url'] : null;
        $this->container['search_invoice_url'] = isset($data['search_invoice_url']) ? $data['search_invoice_url'] : null;
        $this->container['search_product_url'] = isset($data['search_product_url']) ? $data['search_product_url'] : null;
        $this->container['get_terms_url'] = isset($data['get_terms_url']) ? $data['get_terms_url'] : null;
        $this->container['create_customer_url'] = isset($data['create_customer_url']) ? $data['create_customer_url'] : null;
        $this->container['search_tax_url'] = isset($data['search_tax_url']) ? $data['search_tax_url'] : null;
        $this->container['exchange_rate_url'] = isset($data['exchange_rate_url']) ? $data['exchange_rate_url'] : null;
        $this->container['search_url'] = isset($data['search_url']) ? $data['search_url'] : null;
        $this->container['search_count_url'] = isset($data['search_count_url']) ? $data['search_count_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['get_invoice_url'] === null) {
            $invalidProperties[] = "'get_invoice_url' can't be null";
        }
        if ($this->container['search_customer_url'] === null) {
            $invalidProperties[] = "'search_customer_url' can't be null";
        }
        if ($this->container['get_invoice_pdf_url'] === null) {
            $invalidProperties[] = "'get_invoice_pdf_url' can't be null";
        }
        if ($this->container['customer_url_template'] === null) {
            $invalidProperties[] = "'customer_url_template' can't be null";
        }
        if ($this->container['product_url_template'] === null) {
            $invalidProperties[] = "'product_url_template' can't be null";
        }
        if ($this->container['invoice_url_template'] === null) {
            $invalidProperties[] = "'invoice_url_template' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets get_invoice_url
     *
     * @return string
     */
    public function getGetInvoiceUrl()
    {
        return $this->container['get_invoice_url'];
    }

    /**
     * Sets get_invoice_url
     *
     * @param string $get_invoice_url A URL that specifies the endpoint where invoices can be retrieved.
     *
     * @return $this
     */
    public function setGetInvoiceUrl($get_invoice_url)
    {
        $this->container['get_invoice_url'] = $get_invoice_url;

        return $this;
    }

    /**
     * Gets search_customer_url
     *
     * @return string
     */
    public function getSearchCustomerUrl()
    {
        return $this->container['search_customer_url'];
    }

    /**
     * Sets search_customer_url
     *
     * @param string $search_customer_url A URL that specifies the endpoint where a customer search can be performed.
     *
     * @return $this
     */
    public function setSearchCustomerUrl($search_customer_url)
    {
        $this->container['search_customer_url'] = $search_customer_url;

        return $this;
    }

    /**
     * Gets get_invoice_pdf_url
     *
     * @return string
     */
    public function getGetInvoicePdfUrl()
    {
        return $this->container['get_invoice_pdf_url'];
    }

    /**
     * Sets get_invoice_pdf_url
     *
     * @param string $get_invoice_pdf_url A URL that specifies the endpoint where an invoice PDF can be retrieved.
     *
     * @return $this
     */
    public function setGetInvoicePdfUrl($get_invoice_pdf_url)
    {
        $this->container['get_invoice_pdf_url'] = $get_invoice_pdf_url;

        return $this;
    }

    /**
     * Gets customer_url_template
     *
     * @return string
     */
    public function getCustomerUrlTemplate()
    {
        return $this->container['customer_url_template'];
    }

    /**
     * Sets customer_url_template
     *
     * @param string $customer_url_template A template URL that indicates the endpoint where a customer can be fetched by ID. Note that ${CUSTOMER_ID} in this URL will be replaced by the actual customer ID. For example: https://myapp.com/api/customers/${CUSTOMER_ID}
     *
     * @return $this
     */
    public function setCustomerUrlTemplate($customer_url_template)
    {
        $this->container['customer_url_template'] = $customer_url_template;

        return $this;
    }

    /**
     * Gets product_url_template
     *
     * @return string
     */
    public function getProductUrlTemplate()
    {
        return $this->container['product_url_template'];
    }

    /**
     * Sets product_url_template
     *
     * @param string $product_url_template A template URL that indicates the endpoint where a product can be fetched by ID. Note that ${PRODUCT_ID} in this URL will be replaced by the actual product ID. For example: https://myapp.com/api/products/${PRODUCT_ID}
     *
     * @return $this
     */
    public function setProductUrlTemplate($product_url_template)
    {
        $this->container['product_url_template'] = $product_url_template;

        return $this;
    }

    /**
     * Gets invoice_url_template
     *
     * @return string
     */
    public function getInvoiceUrlTemplate()
    {
        return $this->container['invoice_url_template'];
    }

    /**
     * Sets invoice_url_template
     *
     * @param string $invoice_url_template A template URL that indicates the endpoint where an invoice can be fetched by ID. Note that ${INVOICE_ID} in this URL will be replaced by the actual invoice ID. For example: https://myapp.com/api/invoices/${INVOICE_ID}
     *
     * @return $this
     */
    public function setInvoiceUrlTemplate($invoice_url_template)
    {
        $this->container['invoice_url_template'] = $invoice_url_template;

        return $this;
    }

    /**
     * Gets create_invoice_url
     *
     * @return string|null
     */
    public function getCreateInvoiceUrl()
    {
        return $this->container['create_invoice_url'];
    }

    /**
     * Sets create_invoice_url
     *
     * @param string|null $create_invoice_url A URL that specifies the endpoint where an invoices can be created.
     *
     * @return $this
     */
    public function setCreateInvoiceUrl($create_invoice_url)
    {
        $this->container['create_invoice_url'] = $create_invoice_url;

        return $this;
    }

    /**
     * Gets search_invoice_url
     *
     * @return string|null
     */
    public function getSearchInvoiceUrl()
    {
        return $this->container['search_invoice_url'];
    }

    /**
     * Sets search_invoice_url
     *
     * @param string|null $search_invoice_url A URL that specifies the endpoint where an invoice search can be performed.
     *
     * @return $this
     */
    public function setSearchInvoiceUrl($search_invoice_url)
    {
        $this->container['search_invoice_url'] = $search_invoice_url;

        return $this;
    }

    /**
     * Gets search_product_url
     *
     * @return string|null
     */
    public function getSearchProductUrl()
    {
        return $this->container['search_product_url'];
    }

    /**
     * Sets search_product_url
     *
     * @param string|null $search_product_url A URL that specifies the endpoint where a product search can be performed.
     *
     * @return $this
     */
    public function setSearchProductUrl($search_product_url)
    {
        $this->container['search_product_url'] = $search_product_url;

        return $this;
    }

    /**
     * Gets get_terms_url
     *
     * @return string|null
     */
    public function getGetTermsUrl()
    {
        return $this->container['get_terms_url'];
    }

    /**
     * Sets get_terms_url
     *
     * @param string|null $get_terms_url A URL that specifies the endpoint where payment terms can be retrieved.
     *
     * @return $this
     */
    public function setGetTermsUrl($get_terms_url)
    {
        $this->container['get_terms_url'] = $get_terms_url;

        return $this;
    }

    /**
     * Gets create_customer_url
     *
     * @return string|null
     */
    public function getCreateCustomerUrl()
    {
        return $this->container['create_customer_url'];
    }

    /**
     * Sets create_customer_url
     *
     * @param string|null $create_customer_url A URL that specifies the endpoint where a new customer can be created.
     *
     * @return $this
     */
    public function setCreateCustomerUrl($create_customer_url)
    {
        $this->container['create_customer_url'] = $create_customer_url;

        return $this;
    }

    /**
     * Gets search_tax_url
     *
     * @return string|null
     */
    public function getSearchTaxUrl()
    {
        return $this->container['search_tax_url'];
    }

    /**
     * Sets search_tax_url
     *
     * @param string|null $search_tax_url A URL that specifies the endpoint where a tax search can be performed.
     *
     * @return $this
     */
    public function setSearchTaxUrl($search_tax_url)
    {
        $this->container['search_tax_url'] = $search_tax_url;

        return $this;
    }

    /**
     * Gets exchange_rate_url
     *
     * @return string|null
     */
    public function getExchangeRateUrl()
    {
        return $this->container['exchange_rate_url'];
    }

    /**
     * Sets exchange_rate_url
     *
     * @param string|null $exchange_rate_url A URL that specifies the endpoint where exchange rates can be queried.
     *
     * @return $this
     */
    public function setExchangeRateUrl($exchange_rate_url)
    {
        $this->container['exchange_rate_url'] = $exchange_rate_url;

        return $this;
    }

    /**
     * Gets search_url
     *
     * @return string|null
     */
    public function getSearchUrl()
    {
        return $this->container['search_url'];
    }

    /**
     * Sets search_url
     *
     * @param string|null $search_url search_url
     *
     * @return $this
     */
    public function setSearchUrl($search_url)
    {
        $this->container['search_url'] = $search_url;

        return $this;
    }

    /**
     * Gets search_count_url
     *
     * @return string|null
     */
    public function getSearchCountUrl()
    {
        return $this->container['search_count_url'];
    }

    /**
     * Sets search_count_url
     *
     * @param string|null $search_count_url search_count_url
     *
     * @return $this
     */
    public function setSearchCountUrl($search_count_url)
    {
        $this->container['search_count_url'] = $search_count_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


