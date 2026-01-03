# app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLModule.php

- Path: `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLModule.php`
- Type: PHP
- Size: 10195 bytes

## Summary (from docblocks)

Represents an XHTML 1.1 module, with information on elements, tags
and attributes.
@note Even though this is technically XHTML 1.1, it is also used for
      regular HTML parsing. We are using modulization as a convenient
      way to represent the internals of HTMLDefinition, and our
      implementation is by no means conforming and does not directly
      use the normative DTDs or XML schemas.
@note The public variables in a module should almost directly
      correspond to the variables in HTMLPurifier_HTMLDefinition.
      However, the prefix info carries no special meaning in these
      objects (include it anyway if that's the correspondence though).
@todo Consider making some member functions protected

Short unique string identifier of the module.
@type string

Informally, a list of elements this module changes.
Not used in any significant way.
@type array

Associative array of element names to element definitions.
Some definitions may be incomplete, to be merged in later
with the full definition.
@type array

Associative array of content set names to content set additions.
This is commonly used to, say, add an A element to the Inline
content set. This corresponds to an internal variable $content_sets
and NOT info_content_sets member variable of HTMLDefinition.
@type array

Associative array of attribute collection names to attribute
collection additions. More rarely used for adding attributes to
the global collections. Example is the StyleAttribute module adding
the style attribute to the Core. Corresponds to HTMLDefinition's
attr_collections->info, since the object's data is only info,
with extra behavior associated with it.
@type array

Associative array of deprecated tag name to HTMLPurifier_TagTransform.
@type array

List of HTMLPurifier_AttrTransform to be performed before validation.
@type array

List of HTMLPurifier_AttrTransform to be performed after validation.
@type array

List of HTMLPurifier_Injector to be performed during well-formedness fixing.
An injector will only be invoked if all of it's pre-requisites are met;
if an injector fails setup, there will be no error; it will simply be
silently disabled.
@type array

Boolean flag that indicates whether or not getChildDef is implemented.
For optimization reasons: may save a call to a function. Be sure
to set it if you do implement getChildDef(), otherwise it will have
no effect!
@type bool

Boolean flag whether or not this module is safe. If it is not safe, all
of its members are unsafe. Modules are safe by default (this might be
slightly dangerous, but it doesn't make much sense to force HTML Purifier,
which is based off of safe HTML, to explicitly say, "This is safe," even
though there are modules which are "unsafe")
@type bool
@note Previously, safety could be applied at an element level granularity.
      We've removed this ability, so in order to add "unsafe" elements
      or attributes, a dedicated module with this property set to false
      must be used.

Retrieves a proper HTMLPurifier_ChildDef subclass based on
content_model and content_model_type member variables of
the HTMLPurifier_ElementDef class. There is a similar function
in HTMLPurifier_HTMLDefinition.
@param HTMLPurifier_ElementDef $def
@return HTMLPurifier_ChildDef subclass

Convenience function that sets up a new element
@param string $element Name of element to add
@param string|bool $type What content set should element be registered to?
             Set as false to skip this step.
@param string|HTMLPurifier_ChildDef $contents Allowed children in form of:
             "$content_model_type: $content_model"
@param array|string $attr_includes What attribute collections to register to
             element?
@param array $attr What unique attributes does the element define?
@see HTMLPurifier_ElementDef:: for in-depth descriptions of these parameters.
@return HTMLPurifier_ElementDef Created element definition object, so you
        can set advanced parameters

Convenience function that creates a totally blank, non-standalone
element.
@param string $element Name of element to create
@return HTMLPurifier_ElementDef Created element

Convenience function that registers an element to a content set
@param string $element Element to register
@param string $type Name content set (warning: case sensitive, usually upper-case
       first letter)

Convenience function that transforms single-string contents
into separate content model and content model type
@param string $contents Allowed children in form of:
                 "$content_model_type: $content_model"
@return array
@note If contents is an object, an array of two nulls will be
      returned, and the callee needs to take the original $contents
      and use it directly.

Convenience function that merges a list of attribute includes into
an attribute array.
@param array $attr Reference to attr array to modify
@param array $attr_includes Array of includes / string include to merge in

Convenience function that generates a lookup table with boolean
true as value.
@param string $list List of values to turn into a lookup
@note You can also pass an arbitrary number of arguments in
      place of the regular argument
@return array array equivalent of list

Lazy load construction of the module after determining whether
or not it's needed, and also when a finalized configuration object
is available.
@param HTMLPurifier_Config $config

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\php-htmldiff\vendor\ezyang\htmlpurifier\library\HTMLPurifier\HTMLModule.php`

**Classes**:
- `HTMLPurifier_HTMLModule`

**Functions/Methods**:
- `getChildDef($def)`
- `addElement($element, $type, $contents, $attr_includes = array()`
- `addBlankElement($element)`
- `addElementToContentSet($element, $type)`
- `parseContents($contents)`
- `mergeInAttrIncludes(&$attr, $attr_includes)`
- `makeLookup($list)`
- `setup($config)`

