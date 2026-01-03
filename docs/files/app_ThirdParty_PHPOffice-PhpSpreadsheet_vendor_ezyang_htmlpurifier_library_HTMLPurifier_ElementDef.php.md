# app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ElementDef.php

- Path: `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ElementDef.php`
- Type: PHP
- Size: 7523 bytes

## Summary (from docblocks)

Structure that stores an HTML element definition. Used by
HTMLPurifier_HTMLDefinition and HTMLPurifier_HTMLModule.
@note This class is inspected by HTMLPurifier_Printer_HTMLDefinition.
      Please update that class too.
@warning If you add new properties to this class, you MUST update
         the mergeIn() method.

Does the definition work by itself, or is it created solely
for the purpose of merging into another definition?
@type bool

Associative array of attribute name to HTMLPurifier_AttrDef.
@type array
@note Before being processed by HTMLPurifier_AttrCollections
      when modules are finalized during
      HTMLPurifier_HTMLDefinition->setup(), this array may also
      contain an array at index 0 that indicates which attribute
      collections to load into the full array. It may also
      contain string indentifiers in lieu of HTMLPurifier_AttrDef,
      see HTMLPurifier_AttrTypes on how they are expanded during
      HTMLPurifier_HTMLDefinition->setup() processing.

List of tags HTMLPurifier_AttrTransform to be done before validation.
@type array

List of tags HTMLPurifier_AttrTransform to be done after validation.
@type array

HTMLPurifier_ChildDef of this tag.
@type HTMLPurifier_ChildDef

Abstract string representation of internal ChildDef rules.
@see HTMLPurifier_ContentSets for how this is parsed and then transformed
into an HTMLPurifier_ChildDef.
@warning This is a temporary variable that is not available after
     being processed by HTMLDefinition
@type string

Value of $child->type, used to determine which ChildDef to use,
used in combination with $content_model.
@warning This must be lowercase
@warning This is a temporary variable that is not available after
     being processed by HTMLDefinition
@type string

Does the element have a content model (#PCDATA | Inline)*? This
is important for chameleon ins and del processing in
HTMLPurifier_ChildDef_Chameleon. Dynamically set: modules don't
have to worry about this one.
@type bool

List of the names of required attributes this element has.
Dynamically populated by HTMLPurifier_HTMLDefinition::getElement()
@type array

Lookup table of tags excluded from all descendants of this tag.
@type array
@note SGML permits exclusions for all descendants, but this is
      not possible with DTDs or XML Schemas. W3C has elected to
      use complicated compositions of content_models to simulate
      exclusion for children, but we go the simpler, SGML-style
      route of flat-out exclusions, which correctly apply to
      all descendants and not just children. Note that the XHTML
      Modularization Abstract Modules are blithely unaware of such
      distinctions.

This tag is explicitly auto-closed by the following tags.
@type array

If a foreign element is found in this element, test if it is
allowed by this sub-element; if it is, instead of closing the
current element, place it inside this element.
@type string

Whether or not this is a formatting element affected by the
"Active Formatting Elements" algorithm.
@type bool

Low-level factory constructor for creating new standalone element defs

Merges the values of another element definition into this one.
Values from the new element def take precedence if a value is
not mergeable.
@param HTMLPurifier_ElementDef $def

Merges one array into another, removes values which equal false
@param $a1 Array by reference that is merged into
@param $a2 Array that merges into $a1

## References

**Models Used**
- `content_model`

**Database Tables (inferred)**
- `all`
- `the`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\PHPOffice-PhpSpreadsheet\vendor\ezyang\htmlpurifier\library\HTMLPurifier\ElementDef.php`

**Classes**:
- `is`
- `too`
- `HTMLPurifier_ElementDef`

**Functions/Methods**:
- `create($content_model, $content_model_type, $attr)`
- `mergeIn($def)`
- `_mergeAssocArray(&$a1, $a2)`

