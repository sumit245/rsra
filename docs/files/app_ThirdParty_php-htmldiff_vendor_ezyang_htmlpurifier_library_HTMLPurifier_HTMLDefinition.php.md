# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLDefinition.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLDefinition.php`
- Type: PHP
- Size: 17747 bytes

## Summary (from docblocks)

Definition of the purified HTML that describes allowed children,
attributes, and many other things.
Conventions:
All member variables that are prefixed with info
(including the main $info array) are used by HTML Purifier internals
and should not be directly edited when customizing the HTMLDefinition.
They can usually be set via configuration directives or custom
modules.
On the other hand, member variables without the info prefix are used
internally by the HTMLDefinition and MUST NOT be used by other HTML
Purifier internals. Many of them, however, are public, and may be
edited by userspace code to tweak the behavior of HTMLDefinition.
@note This class is inspected by Printer_HTMLDefinition; please
      update that class if things here change.
@warning Directives that change this object's structure must be in
         the HTML or Attr namespace!

Associative array of element names to HTMLPurifier_ElementDef.
@type HTMLPurifier_ElementDef[]

Associative array of global attribute name to attribute definition.
@type array

String name of parent element HTML will be going into.
@type string

Definition for parent element, allows parent element to be a
tag that's not allowed inside the HTML fragment.
@type HTMLPurifier_ElementDef

String name of element used to wrap inline elements in block context.
@type string
@note This is rarely used except for BLOCKQUOTEs in strict mode

Associative array of deprecated tag name to HTMLPurifier_TagTransform.
@type array

Indexed list of HTMLPurifier_AttrTransform to be performed before validation.
@type HTMLPurifier_AttrTransform[]

Indexed list of HTMLPurifier_AttrTransform to be performed after validation.
@type HTMLPurifier_AttrTransform[]

Nested lookup array of content set name (Block, Inline) to
element name to whether or not it belongs in that content set.
@type array

Indexed list of HTMLPurifier_Injector to be used.
@type HTMLPurifier_Injector[]

Doctype object
@type HTMLPurifier_Doctype

Adds a custom attribute to a pre-existing element
@note This is strictly convenience, and does not have a corresponding
      method in HTMLPurifier_HTMLModule
@param string $element_name Element name to add attribute to
@param string $attr_name Name of attribute
@param mixed $def Attribute definition, can be string or object, see
            HTMLPurifier_AttrTypes for details

Adds a custom element to your HTML definition
@see HTMLPurifier_HTMLModule::addElement() for detailed
      parameter and return value descriptions.

Adds a blank element to your HTML definition, for overriding
existing behavior
@param string $element_name
@return HTMLPurifier_ElementDef
@see HTMLPurifier_HTMLModule::addBlankElement() for detailed
      parameter and return value descriptions.

Retrieves a reference to the anonymous module, so you can
bust out advanced features without having to make your own
module.
@return HTMLPurifier_HTMLModule

@type string

@type HTMLPurifier_HTMLModuleManager

Performs low-cost, preliminary initialization.

@param HTMLPurifier_Config $config

Extract out the information from the manager
@param HTMLPurifier_Config $config

Sets up stuff based on config. We need a better way of doing this.
@param HTMLPurifier_Config $config

Parses a TinyMCE-flavored Allowed Elements and Attributes list into
separate lists for processing. Format is element[attr1|attr2],element2...
@warning Although it's largely drawn from TinyMCE's implementation,
     it is different, and you'll probably have to modify your lists
@param array $list String list to parse
@return array
@todo Give this its own class, probably static interface

## References

**Database Tables (inferred)**
- `the`
- `TinyMCE`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLDefinition.php`

**Classes**:
- `is`
- `if`
- `HTMLPurifier_HTMLDefinition extends HTMLPurifier_Definition`

**Functions/Methods**:
- `addAttribute($element_name, $attr_name, $def)`
- `addElement($element_name, $type, $contents, $attr_collections, $attributes = array()`
- `addBlankElement($element_name)`
- `getAnonymousModule()`
- `__construct()`
- `doSetup($config)`
- `processModules($config)`
- `setupConfigStuff($config)`
- `parseTinyMCEAllowedList($list)`

