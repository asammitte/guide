<?php
declare(strict_types=1);

namespace climb\guide\core\domain\hydrator;

class Hydrator
{
    /** @var array */
    private $reflectionClassMap;

    /**
     * @param $class
     * @param array $data
     * @return mixed
     * @throws \ReflectionException
     */
    public function hydrate($class, array $data)
    {
        $reflection = $this->getReflectionClass($class);
        $target = $reflection->newInstanceWithoutConstructor();
        foreach ($data as $name => $value) {
            $property = $reflection->getProperty($name);
            if ($property->isPrivate() || $property->isProtected()) {
                $property->setAccessible(true);
            }
            $property->setValue($target, $value);
        }
        return $target;
    }

    /**
     * @param $object
     * @param array $fields
     * @return array
     * @throws \ReflectionException
     */
    public function extract($object, array $fields)
    {
        $result = [];
        $reflection = $this->getReflectionClass(get_class($object));
        foreach ($fields as $name) {
            $property = $reflection->getProperty($name);
            if ($property->isPrivate() || $property->isProtected()) {
                $property->setAccessible(true);
            }
            $result[$property->getName()] = $property->getValue($object);
        }
        return $result;
    }

    /**
     * @param string $className
     * @return mixed
     * @throws \ReflectionException
     */
    private function getReflectionClass(string $className)
    {
        if (!isset($this->reflectionClassMap[$className])) {
            $this->reflectionClassMap[$className] = new \ReflectionClass($className);
        }
        return $this->reflectionClassMap[$className];
    }
}
