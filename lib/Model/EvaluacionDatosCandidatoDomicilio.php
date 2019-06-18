<?php



namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class EvaluacionDatosCandidatoDomicilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $apihubModelName = 'Evaluacion_datosCandidato_domicilio';

    protected static $apihubTypes = [
        'calle' => 'string',
        'colonia' => 'string',
        'codigo_postal' => 'string',
        'ciudad' => 'string',
        'delegacion' => 'string',
        'estado' => 'string'
    ];

    protected static $apihubFormats = [
        'calle' => null,
        'colonia' => null,
        'codigo_postal' => null,
        'ciudad' => null,
        'delegacion' => null,
        'estado' => null
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
        'calle' => 'calle',
        'colonia' => 'colonia',
        'codigo_postal' => 'codigoPostal',
        'ciudad' => 'ciudad',
        'delegacion' => 'delegacion',
        'estado' => 'estado'
    ];

    protected static $setters = [
        'calle' => 'setCalle',
        'colonia' => 'setColonia',
        'codigo_postal' => 'setCodigoPostal',
        'ciudad' => 'setCiudad',
        'delegacion' => 'setDelegacion',
        'estado' => 'setEstado'
    ];

    protected static $getters = [
        'calle' => 'getCalle',
        'colonia' => 'getColonia',
        'codigo_postal' => 'getCodigoPostal',
        'ciudad' => 'getCiudad',
        'delegacion' => 'getDelegacion',
        'estado' => 'getEstado'
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
        $this->container['calle'] = isset($data['calle']) ? $data['calle'] : null;
        $this->container['colonia'] = isset($data['colonia']) ? $data['colonia'] : null;
        $this->container['codigo_postal'] = isset($data['codigo_postal']) ? $data['codigo_postal'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['delegacion'] = isset($data['delegacion']) ? $data['delegacion'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
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


    public function getCalle()
    {
        return $this->container['calle'];
    }

    public function setCalle($calle)
    {
        $this->container['calle'] = $calle;

        return $this;
    }

    public function getColonia()
    {
        return $this->container['colonia'];
    }

    public function setColonia($colonia)
    {
        $this->container['colonia'] = $colonia;

        return $this;
    }

    public function getCodigoPostal()
    {
        return $this->container['codigo_postal'];
    }

    public function setCodigoPostal($codigo_postal)
    {
        $this->container['codigo_postal'] = $codigo_postal;

        return $this;
    }

    public function getCiudad()
    {
        return $this->container['ciudad'];
    }

    public function setCiudad($ciudad)
    {
        $this->container['ciudad'] = $ciudad;

        return $this;
    }

    public function getDelegacion()
    {
        return $this->container['delegacion'];
    }

    public function setDelegacion($delegacion)
    {
        $this->container['delegacion'] = $delegacion;

        return $this;
    }

    public function getEstado()
    {
        return $this->container['estado'];
    }

    public function setEstado($estado)
    {
        $this->container['estado'] = $estado;

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


