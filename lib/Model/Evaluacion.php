<?php



namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class Evaluacion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $apihubModelName = 'Evaluacion';

    protected static $apihubTypes = [
        'nombre_evaluacion' => 'string',
        'fecha_aplicacion' => 'string',
        'folio_aplicacion' => 'int',
        'tiempo_respuesta' => 'string',
        'datos_candidato' => '\APIHub\Client\Model\EvaluacionDatosCandidato',
        'perfil' => '\APIHub\Client\Model\EvaluacionPerfil',
        'variables_globales' => '\APIHub\Client\Model\EvaluacionVariablesGlobales',
        'variables_locales' => '\APIHub\Client\Model\EvaluacionVariablesLocales'
    ];

    protected static $apihubFormats = [
        'nombre_evaluacion' => null,
        'fecha_aplicacion' => 'date-time',
        'folio_aplicacion' => null,
        'tiempo_respuesta' => null,
        'datos_candidato' => null,
        'perfil' => null,
        'variables_globales' => null,
        'variables_locales' => null
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
        'nombre_evaluacion' => 'nombreEvaluacion',
        'fecha_aplicacion' => 'fechaAplicacion',
        'folio_aplicacion' => 'folioAplicacion',
        'tiempo_respuesta' => 'tiempoRespuesta',
        'datos_candidato' => 'datosCandidato',
        'perfil' => 'perfil',
        'variables_globales' => 'variablesGlobales',
        'variables_locales' => 'variablesLocales'
    ];

    protected static $setters = [
        'nombre_evaluacion' => 'setNombreEvaluacion',
        'fecha_aplicacion' => 'setFechaAplicacion',
        'folio_aplicacion' => 'setFolioAplicacion',
        'tiempo_respuesta' => 'setTiempoRespuesta',
        'datos_candidato' => 'setDatosCandidato',
        'perfil' => 'setPerfil',
        'variables_globales' => 'setVariablesGlobales',
        'variables_locales' => 'setVariablesLocales'
    ];

    protected static $getters = [
        'nombre_evaluacion' => 'getNombreEvaluacion',
        'fecha_aplicacion' => 'getFechaAplicacion',
        'folio_aplicacion' => 'getFolioAplicacion',
        'tiempo_respuesta' => 'getTiempoRespuesta',
        'datos_candidato' => 'getDatosCandidato',
        'perfil' => 'getPerfil',
        'variables_globales' => 'getVariablesGlobales',
        'variables_locales' => 'getVariablesLocales'
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
        $this->container['nombre_evaluacion'] = isset($data['nombre_evaluacion']) ? $data['nombre_evaluacion'] : null;
        $this->container['fecha_aplicacion'] = isset($data['fecha_aplicacion']) ? $data['fecha_aplicacion'] : null;
        $this->container['folio_aplicacion'] = isset($data['folio_aplicacion']) ? $data['folio_aplicacion'] : null;
        $this->container['tiempo_respuesta'] = isset($data['tiempo_respuesta']) ? $data['tiempo_respuesta'] : null;
        $this->container['datos_candidato'] = isset($data['datos_candidato']) ? $data['datos_candidato'] : null;
        $this->container['perfil'] = isset($data['perfil']) ? $data['perfil'] : null;
        $this->container['variables_globales'] = isset($data['variables_globales']) ? $data['variables_globales'] : null;
        $this->container['variables_locales'] = isset($data['variables_locales']) ? $data['variables_locales'] : null;
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


    public function getNombreEvaluacion()
    {
        return $this->container['nombre_evaluacion'];
    }

    public function setNombreEvaluacion($nombre_evaluacion)
    {
        $this->container['nombre_evaluacion'] = $nombre_evaluacion;

        return $this;
    }

    public function getFechaAplicacion()
    {
        return $this->container['fecha_aplicacion'];
    }

    public function setFechaAplicacion($fecha_aplicacion)
    {
        $this->container['fecha_aplicacion'] = $fecha_aplicacion;

        return $this;
    }

    public function getFolioAplicacion()
    {
        return $this->container['folio_aplicacion'];
    }

    public function setFolioAplicacion($folio_aplicacion)
    {
        $this->container['folio_aplicacion'] = $folio_aplicacion;

        return $this;
    }

    public function getTiempoRespuesta()
    {
        return $this->container['tiempo_respuesta'];
    }

    public function setTiempoRespuesta($tiempo_respuesta)
    {
        $this->container['tiempo_respuesta'] = $tiempo_respuesta;

        return $this;
    }

    public function getDatosCandidato()
    {
        return $this->container['datos_candidato'];
    }

    public function setDatosCandidato($datos_candidato)
    {
        $this->container['datos_candidato'] = $datos_candidato;

        return $this;
    }

    public function getPerfil()
    {
        return $this->container['perfil'];
    }

    public function setPerfil($perfil)
    {
        $this->container['perfil'] = $perfil;

        return $this;
    }

    public function getVariablesGlobales()
    {
        return $this->container['variables_globales'];
    }

    public function setVariablesGlobales($variables_globales)
    {
        $this->container['variables_globales'] = $variables_globales;

        return $this;
    }

    public function getVariablesLocales()
    {
        return $this->container['variables_locales'];
    }

    public function setVariablesLocales($variables_locales)
    {
        $this->container['variables_locales'] = $variables_locales;

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


