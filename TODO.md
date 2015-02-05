Assertion::uuid($value);

Assertion::length($value, $length);
Assertion::minLength($value, $length);
Assertion::maxLength($value, $length);
Assertion::betweenLength($value, $minLength, $maxLength);

Assertion::classExists($value);
Assertion::methodExists($value, $object);
Assertion::isInstanceOf($value, $className);
Assertion::implements($value, $interfaceName);
Assertion::extends($value, $className);
