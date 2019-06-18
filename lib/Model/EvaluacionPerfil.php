<?php



namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class EvaluacionPerfil implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $apihubModelName = 'Evaluacion_perfil';

    protected static $apihubTypes = [
        'nombre' => 'string',
        'porcentaje_total' => 'string'
    ];

    protected static $apihubFormats = [
        'nombre' => null,
        'porcentaje_total' => null
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
        'nombre' => 'nombre',
        'porcentaje_total' => 'porcentajeTotal'
    ];

    protected static $setters = [
        'nombre' => 'setNombre',
        'porcentaje_total' => 'setPorcentajeTotal'
    ];

    protected static $getters = [
        'nombre' => 'getNombre',
        'porcentaje_total' => 'getPorcentajeTotal'
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
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['porcentaje_total'] = isset($data['porcentaje_total']) ? $data['porcentaje_total'] : null;
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


    public function getNombre()
    {
        return $this->container['nombre'];
    }

    public function setNombre($nombre)
    {
        $this->container['nombre'] = $nombre;

        return $this;
    }

    public function getPorcentajeTotal()
    {
        return $this->container['porcentaje_total'];
    }

    public function setPorcentajeTotal($porcentaje_total)
    {
        $this->container['porcentaje_total'] = $porcentaje_total;

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


