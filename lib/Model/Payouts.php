<?php
/**
 * Payouts
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\EbayFinanceApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eBay Finances API
 *
 * This API is used to retrieve seller payouts and monetary transaction details related to those payouts.
 *
 * The version of the OpenAPI document: v1.12.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\EbayFinanceApiClient\Model;

use \ArrayAccess;
use \OpenAPI\EbayFinanceApiClient\ObjectSerializer;

/**
 * Payouts Class Doc Comment
 *
 * @category Class
 * @description This type is the base response type of the &lt;strong&gt;getPayouts&lt;/strong&gt; method, and contains an array of one or more payouts (that match the input criteria), the total count of payouts in the response, and various pagination data for the results set.
 * @package  OpenAPI\EbayFinanceApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Payouts implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payouts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'href' => 'string',
        'limit' => 'int',
        'next' => 'string',
        'offset' => 'int',
        'payouts' => '\OpenAPI\EbayFinanceApiClient\Model\Payout[]',
        'prev' => 'string',
        'total' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'href' => null,
        'limit' => 'int32',
        'next' => null,
        'offset' => 'int32',
        'payouts' => null,
        'prev' => null,
        'total' => 'int32'
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
        'href' => 'href',
        'limit' => 'limit',
        'next' => 'next',
        'offset' => 'offset',
        'payouts' => 'payouts',
        'prev' => 'prev',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'href' => 'setHref',
        'limit' => 'setLimit',
        'next' => 'setNext',
        'offset' => 'setOffset',
        'payouts' => 'setPayouts',
        'prev' => 'setPrev',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'href' => 'getHref',
        'limit' => 'getLimit',
        'next' => 'getNext',
        'offset' => 'getOffset',
        'payouts' => 'getPayouts',
        'prev' => 'getPrev',
        'total' => 'getTotal'
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
        $this->container['href'] = $data['href'] ?? null;
        $this->container['limit'] = $data['limit'] ?? null;
        $this->container['next'] = $data['next'] ?? null;
        $this->container['offset'] = $data['offset'] ?? null;
        $this->container['payouts'] = $data['payouts'] ?? null;
        $this->container['prev'] = $data['prev'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets href
     *
     * @return string|null
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string|null $href The URI of the <b>getPayouts</b> call request that produced the current page of the result set.
     *
     * @return self
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit The maximum number of payouts that may be returned per page of the result set. The <strong>limit</strong> value can be passed in as a query parameter, or if omitted, its value defaults to <code>20</code>. <br /><br /><span class=\"tablenote\"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer payouts than the <strong>limit</strong> value.  To determine the number of pages in a result set, divide the <b>total</b> value (total number of payouts matching input criteria) by this <strong>limit</strong> value, and then round up to the next integer. For example, if the <b>total</b> value was <code>120</code> (120 total payouts) and the <strong>limit</strong> value was <code>50</code> (show 50 payouts per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getPayouts</strong> calls to view all payouts matching the input criteria. </span><br/><br/><b>Maximum:</b> <code>200</code> <br /> <b>Default:</b> <code>20</code>
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets next
     *
     * @return string|null
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param string|null $next The <b>getPayouts</b> call URI to use if you wish to view the next page of the result set. <br/><br/>This field is only returned if there is a next page of results to view based on the current input criteria.
     *
     * @return self
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset This integer value indicates the actual position that the first payout returned on the current page has in the results set. So, if you wanted to view the 11th payout of the result set, you would set the <strong>offset</strong> value in the request to <code>10</code>. <br><br>In the request, you can use the <b>offset</b> parameter in conjunction with the <b>limit</b> parameter to control the pagination of the output. For example, if <b>offset</b> is set to <code>30</code> and <b>limit</b> is set to <code>10</code>, the call retrieves payouts 31 thru 40 from the resulting collection of payouts. <br /><br /> <span class=\"tablenote\"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>.</span><br/><br/><b>Default:</b> <code>0</code> (zero)
     *
     * @return self
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets payouts
     *
     * @return \OpenAPI\EbayFinanceApiClient\Model\Payout[]|null
     */
    public function getPayouts()
    {
        return $this->container['payouts'];
    }

    /**
     * Sets payouts
     *
     * @param \OpenAPI\EbayFinanceApiClient\Model\Payout[]|null $payouts An array of one or more payouts that match the input criteria. Details for each payout include the unique identifier of the payout, the status of the payout, the amount of the payout, and the number of monetary transactions associated with the payout.
     *
     * @return self
     */
    public function setPayouts($payouts)
    {
        $this->container['payouts'] = $payouts;

        return $this;
    }

    /**
     * Gets prev
     *
     * @return string|null
     */
    public function getPrev()
    {
        return $this->container['prev'];
    }

    /**
     * Sets prev
     *
     * @param string|null $prev The <b>getPayouts</b> call URI to use if you wish to view the previous page of the result set. <br/><br/>This field is only returned if there is a previous page of results to view based on the current input criteria.
     *
     * @return self
     */
    public function setPrev($prev)
    {
        $this->container['prev'] = $prev;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total This integer value is the total number of payouts in the results set based on the current input criteria. Based on the total number of payouts that match the criteria, and on the <strong>limit</strong> and <strong>offset</strong> values, there may be additional pages in the results set.
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

