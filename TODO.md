Assertion::scalar($value);
Assertion::isObject($value);
Assertion::isJsonString($value);
Assertion::uuid($value);

Assertion::length($value, $length);
Assertion::minLength($value, $length);
Assertion::maxLength($value, $length);
Assertion::betweenLength($value, $minLength, $maxLength);

Assertion::keyExists($value, $key);
Assertion::count($value, $key);
Assertion::notEmptyKey($value, $key);

Assertion::isInstanceOf($value, $className);
Assertion::notIsInstanceOf($value, $className);
Assertion::classExists($value);
Assertion::subclassOf($value, $className);
Assertion::methodExists($value, $object)
Assertion::implementsInterface($value, $interfaceName);

Assertion::directory($value);
Assertion::file($value);
Assertion::readable($value);
Assertion::writeable($value);

Assertion::true($value);
Assertion::false($value);
