<?php
/**
 * Service
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GraphHopper Directions API
 *
 * You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Service Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Service implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Service';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'type' => 'string',
        'priority' => 'int',
        'name' => 'string',
        'address' => '\Swagger\Client\Model\Address',
        'duration' => 'int',
        'preparation_time' => 'int',
        'time_windows' => '\Swagger\Client\Model\TimeWindow[]',
        'size' => 'int[]',
        'required_skills' => 'string[]',
        'allowed_vehicles' => 'string[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'type' => 'type',
        'priority' => 'priority',
        'name' => 'name',
        'address' => 'address',
        'duration' => 'duration',
        'preparation_time' => 'preparation_time',
        'time_windows' => 'time_windows',
        'size' => 'size',
        'required_skills' => 'required_skills',
        'allowed_vehicles' => 'allowed_vehicles'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'priority' => 'setPriority',
        'name' => 'setName',
        'address' => 'setAddress',
        'duration' => 'setDuration',
        'preparation_time' => 'setPreparationTime',
        'time_windows' => 'setTimeWindows',
        'size' => 'setSize',
        'required_skills' => 'setRequiredSkills',
        'allowed_vehicles' => 'setAllowedVehicles'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'priority' => 'getPriority',
        'name' => 'getName',
        'address' => 'getAddress',
        'duration' => 'getDuration',
        'preparation_time' => 'getPreparationTime',
        'time_windows' => 'getTimeWindows',
        'size' => 'getSize',
        'required_skills' => 'getRequiredSkills',
        'allowed_vehicles' => 'getAllowedVehicles'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_SERVICE = 'service';
    const TYPE_PICKUP = 'pickup';
    const TYPE_DELIVERY = 'delivery';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SERVICE,
            self::TYPE_PICKUP,
            self::TYPE_DELIVERY,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['preparation_time'] = isset($data['preparation_time']) ? $data['preparation_time'] : null;
        $this->container['time_windows'] = isset($data['time_windows']) ? $data['time_windows'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['required_skills'] = isset($data['required_skills']) ? $data['required_skills'] : null;
        $this->container['allowed_vehicles'] = isset($data['allowed_vehicles']) ? $data['allowed_vehicles'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["service", "pickup", "delivery"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'service', 'pickup', 'delivery'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = ["service", "pickup", "delivery"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Unique identifier of service
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type type of service
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('service', 'pickup', 'delivery');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'service', 'pickup', 'delivery'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param int $priority priority of service
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name name of service
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address
     * @return \Swagger\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \Swagger\Client\Model\Address $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration duration of service, i.e. time in ms the corresponding activity takes
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets preparation_time
     * @return int
     */
    public function getPreparationTime()
    {
        return $this->container['preparation_time'];
    }

    /**
     * Sets preparation_time
     * @param int $preparation_time preparation time of service, e.g. search for a parking space. it only falls due if the location of previous activity differs from this location
     * @return $this
     */
    public function setPreparationTime($preparation_time)
    {
        $this->container['preparation_time'] = $preparation_time;

        return $this;
    }

    /**
     * Gets time_windows
     * @return \Swagger\Client\Model\TimeWindow[]
     */
    public function getTimeWindows()
    {
        return $this->container['time_windows'];
    }

    /**
     * Sets time_windows
     * @param \Swagger\Client\Model\TimeWindow[] $time_windows array of time windows. currently, only a single time window is allowed
     * @return $this
     */
    public function setTimeWindows($time_windows)
    {
        $this->container['time_windows'] = $time_windows;

        return $this;
    }

    /**
     * Gets size
     * @return int[]
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param int[] $size array of capacity dimensions
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets required_skills
     * @return string[]
     */
    public function getRequiredSkills()
    {
        return $this->container['required_skills'];
    }

    /**
     * Sets required_skills
     * @param string[] $required_skills array of required skills
     * @return $this
     */
    public function setRequiredSkills($required_skills)
    {
        $this->container['required_skills'] = $required_skills;

        return $this;
    }

    /**
     * Gets allowed_vehicles
     * @return string[]
     */
    public function getAllowedVehicles()
    {
        return $this->container['allowed_vehicles'];
    }

    /**
     * Sets allowed_vehicles
     * @param string[] $allowed_vehicles array of allowed vehicle ids
     * @return $this
     */
    public function setAllowedVehicles($allowed_vehicles)
    {
        $this->container['allowed_vehicles'] = $allowed_vehicles;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


