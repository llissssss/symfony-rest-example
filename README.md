FOS Rest + Serializer example
=============================

Rest intro

# REST
- Resources (auto generation) => Department
- Resources (manual definition) => FooBarController
- Sub resources
php bin/console debug:router


# SERIALIZATION
- Serialize entities (no type definition required)
- Serialize models (type definition required)
- Exclusion strategies
- Virtual properties
- Circular references