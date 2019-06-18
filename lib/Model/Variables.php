<?php



namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class Variables implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $apihubModelName = 'variables';

    protected static $apihubTypes = [
        'indicador' => 'string',
        'porcentaje_obtenido' => 'int',
        'semaforizacion' => 'string',
        'texto_interpretacion' => 'string'
    ];

    protected static $apihubFormats = [
        'indicador' => null,
        'porcentaje_obtenido' => null,
        'semaforizacion' => null,
        'texto_interpretacion' => null
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
        'indicador' => 'indicador',
        'porcentaje_obtenido' => 'porcentajeObtenido',
        'semaforizacion' => 'semaforizacion',
        'texto_interpretacion' => 'textoInterpretacion'
    ];

    protected static $setters = [
        'indicador' => 'setIndicador',
        'porcentaje_obtenido' => 'setPorcentajeObtenido',
        'semaforizacion' => 'setSemaforizacion',
        'texto_interpretacion' => 'setTextoInterpretacion'
    ];

    protected static $getters = [
        'indicador' => 'getIndicador',
        'porcentaje_obtenido' => 'getPorcentajeObtenido',
        'semaforizacion' => 'getSemaforizacion',
        'texto_interpretacion' => 'getTextoInterpretacion'
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
        $this->container['indicador'] = isset($data['indicador']) ? $data['indicador'] : null;
        $this->container['porcentaje_obtenido'] = isset($data['porcentaje_obtenido']) ? $data['porcentaje_obtenido'] : null;
        $this->container['semaforizacion'] = isset($data['semaforizacion']) ? $data['semaforizacion'] : null;
        $this->container['texto_interpretacion'] = isset($data['texto_interpretacion']) ? $data['texto_interpretacion'] : null;
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


    public function getIndicador()
    {
        return $this->container['indicador'];
    }

    public function setIndicador($indicador)
    {
        $this->container['indicador'] = $indicador;

        return $this;
    }

    public function getPorcentajeObtenido()
    {
        return $this->container['porcentaje_obtenido'];
    }

    public function setPorcentajeObtenido($porcentaje_obtenido)
    {
        $this->container['porcentaje_obtenido'] = $porcentaje_obtenido;

        return $this;
    }

    public function getSemaforizacion()
    {
        return $this->container['semaforizacion'];
    }

    public function setSemaforizacion($semaforizacion)
    {
        $this->container['semaforizacion'] = $semaforizacion;

        return $this;
    }

    public function getTextoInterpretacion()
    {
        return $this->container['texto_interpretacion'];
    }

    public function setTextoInterpretacion($texto_interpretacion)
    {
        $this->container['texto_interpretacion'] = $texto_interpretacion;

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


