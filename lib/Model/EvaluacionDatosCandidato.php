<?php



namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class EvaluacionDatosCandidato implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $apihubModelName = 'Evaluacion_datosCandidato';

    protected static $apihubTypes = [
        'nombre_completo' => 'string',
        'sexo' => 'string',
        'fecha_nacimiento' => 'string',
        'correo_electronico' => 'string',
        'domicilio' => '\APIHub\Client\Model\EvaluacionDatosCandidatoDomicilio'
    ];

    protected static $apihubFormats = [
        'nombre_completo' => null,
        'sexo' => null,
        'fecha_nacimiento' => 'date',
        'correo_electronico' => null,
        'domicilio' => null
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
        'nombre_completo' => 'nombreCompleto',
        'sexo' => 'sexo',
        'fecha_nacimiento' => 'fechaNacimiento',
        'correo_electronico' => 'correoElectronico',
        'domicilio' => 'domicilio'
    ];

    protected static $setters = [
        'nombre_completo' => 'setNombreCompleto',
        'sexo' => 'setSexo',
        'fecha_nacimiento' => 'setFechaNacimiento',
        'correo_electronico' => 'setCorreoElectronico',
        'domicilio' => 'setDomicilio'
    ];

    protected static $getters = [
        'nombre_completo' => 'getNombreCompleto',
        'sexo' => 'getSexo',
        'fecha_nacimiento' => 'getFechaNacimiento',
        'correo_electronico' => 'getCorreoElectronico',
        'domicilio' => 'getDomicilio'
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
        $this->container['nombre_completo'] = isset($data['nombre_completo']) ? $data['nombre_completo'] : null;
        $this->container['sexo'] = isset($data['sexo']) ? $data['sexo'] : null;
        $this->container['fecha_nacimiento'] = isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null;
        $this->container['correo_electronico'] = isset($data['correo_electronico']) ? $data['correo_electronico'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
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


    public function getNombreCompleto()
    {
        return $this->container['nombre_completo'];
    }

    public function setNombreCompleto($nombre_completo)
    {
        $this->container['nombre_completo'] = $nombre_completo;

        return $this;
    }

    public function getSexo()
    {
        return $this->container['sexo'];
    }

    public function setSexo($sexo)
    {
        $this->container['sexo'] = $sexo;

        return $this;
    }

    public function getFechaNacimiento()
    {
        return $this->container['fecha_nacimiento'];
    }

    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->container['fecha_nacimiento'] = $fecha_nacimiento;

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

    public function getDomicilio()
    {
        return $this->container['domicilio'];
    }

    public function setDomicilio($domicilio)
    {
        $this->container['domicilio'] = $domicilio;

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


