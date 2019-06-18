<?php



namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class Consulta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $apihubModelName = 'Consulta';

    protected static $apihubTypes = [
        'fecha_inicial' => 'string',
        'fecha_final' => 'string',
        'correo_electronico' => 'string',
        'folio_empresa' => 'string'
    ];

    protected static $apihubFormats = [
        'fecha_inicial' => 'date',
        'fecha_final' => 'date',
        'correo_electronico' => null,
        'folio_empresa' => null
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
        'fecha_inicial' => 'fechaInicial',
        'fecha_final' => 'fechaFinal',
        'correo_electronico' => 'correoElectronico',
        'folio_empresa' => 'folioEmpresa'
    ];

    protected static $setters = [
        'fecha_inicial' => 'setFechaInicial',
        'fecha_final' => 'setFechaFinal',
        'correo_electronico' => 'setCorreoElectronico',
        'folio_empresa' => 'setFolioEmpresa'
    ];

    protected static $getters = [
        'fecha_inicial' => 'getFechaInicial',
        'fecha_final' => 'getFechaFinal',
        'correo_electronico' => 'getCorreoElectronico',
        'folio_empresa' => 'getFolioEmpresa'
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
        $this->container['fecha_inicial'] = isset($data['fecha_inicial']) ? $data['fecha_inicial'] : null;
        $this->container['fecha_final'] = isset($data['fecha_final']) ? $data['fecha_final'] : null;
        $this->container['correo_electronico'] = isset($data['correo_electronico']) ? $data['correo_electronico'] : null;
        $this->container['folio_empresa'] = isset($data['folio_empresa']) ? $data['folio_empresa'] : null;
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fecha_inicial'] === null) {
            $invalidProperties[] = "'fecha_inicial' can't be null";
        }
        if ($this->container['fecha_final'] === null) {
            $invalidProperties[] = "'fecha_final' can't be null";
        }
        if ($this->container['correo_electronico'] === null) {
            $invalidProperties[] = "'correo_electronico' can't be null";
        }
        return $invalidProperties;
    }

    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    public function getFechaInicial()
    {
        return $this->container['fecha_inicial'];
    }

    public function setFechaInicial($fecha_inicial)
    {
        $this->container['fecha_inicial'] = $fecha_inicial;

        return $this;
    }

    public function getFechaFinal()
    {
        return $this->container['fecha_final'];
    }

    public function setFechaFinal($fecha_final)
    {
        $this->container['fecha_final'] = $fecha_final;

        return $this;
    }

    public function getCorreoElectronico()
    {
        return $this->container['correo_electronico'];
    }

    public function setCorreoElectronico($correo_electronico)
    {
        $this->container['correo_electronico'] = $correo_electronico;

        return $this;
    }

    public function getFolioEmpresa()
    {
        return $this->container['folio_empresa'];
    }

    public function setFolioEmpresa($folio_empresa)
    {
        $this->container['folio_empresa'] = $folio_empresa;

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


