<?php



namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class EvaluacionVariablesGlobales implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $apihubModelName = 'Evaluacion_variablesGlobales';

    protected static $apihubTypes = [
        'personalizadas' => '\APIHub\Client\Model\Variable[]',
        'no_personalizadas' => '\APIHub\Client\Model\Variable[]'
    ];

    protected static $apihubFormats = [
        'personalizadas' => null,
        'no_personalizadas' => null
    ];

    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }

    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }

    protected static $attributeMap = [
        'personalizadas' => 'personalizadas',
        'no_personalizadas' => 'noPersonalizadas'
    ];

    protected static $setters = [
        'personalizadas' => 'setPersonalizadas',
        'no_personalizadas' => 'setNoPersonalizadas'
    ];

    protected static $getters = [
        'personalizadas' => 'getPersonalizadas',
        'no_personalizadas' => 'getNoPersonalizadas'
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

    public function getModelName()
    {
        return self::$apihubModelName;
    }

    

    

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['personalizadas'] = isset($data['personalizadas']) ? $data['personalizadas'] : null;
        $this->container['no_personalizadas'] = isset($data['no_personalizadas']) ? $data['no_personalizadas'] : null;
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    public function getPersonalizadas()
    {
        return $this->container['personalizadas'];
    }

    public function setPersonalizadas($personalizadas)
    {
        $this->container['personalizadas'] = $personalizadas;

        return $this;
    }

    public function getNoPersonalizadas()
    {
        return $this->container['no_personalizadas'];
    }

    public function setNoPersonalizadas($no_personalizadas)
    {
        $this->container['no_personalizadas'] = $no_personalizadas;

        return $this;
    }
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


