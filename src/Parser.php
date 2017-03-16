<?php
namespace Chronopost;

use Chronopost\Request\Search;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 9:43 AM
 */
class Parser
{
    public function parse($master,$response,$destination)
    {
        if(is_array($response))
        {
            foreach($response as &$item)
                $item = self::object($master,$item,$destination);
        }
        else
            $response = self::object($master,$response,$destination);
        return $response;
    }

    public function object($master, $sourceObject, $destination) {
        if(is_object($sourceObject)) {
            $destination = new $destination();
            $sourceReflection = new \ReflectionObject($sourceObject);
            $destinationReflection = new \ReflectionObject($destination);

            // For lazyload
            $propDest = $destinationReflection->getProperty("master");
            $propDest->setAccessible(true);
            $propDest->setValue($destination, $master);

            $sourceProperties = $sourceReflection->getProperties();
            foreach ($sourceProperties as $sourceProperty) {
                $sourceProperty->setAccessible(true);
                $name = $sourceProperty->getName();
                $value = $sourceProperty->getValue($sourceObject);

                if ($destinationReflection->hasProperty($name)) {
                    $propDest = $destinationReflection->getProperty($name);
                    $propDest->setAccessible(true);
                    if (is_array($value)) {
                        if (preg_match('/@var\s+([\w^\s]+)/', $propDest->getDocComment(), $matches)) {
                            list(, $type) = $matches;
                        }
                        foreach ($value as &$item)
                            $item = self::object($master, $item, "\\FacturationPro\\Entity\\" . $type);
                    }
                    $propDest->setValue($destination, $value);
                } else {
                    $destination->$name = $value;
                }
            }
        }
        else
            $destination = $sourceObject;
        return $destination;
    }
}