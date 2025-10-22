# app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Freebase.php

- Path: `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Freebase.php`
- Type: PHP
- Size: 9061 bytes

## Summary (from docblocks)

Service definition for Freebase (v1).
<p>
Find Freebase entities using textual queries and other constraints.</p>
<p>
For more information about this service, see the API
<a href="https://developers.google.com/freebase/" target="_blank">Documentation</a>
</p>
@author Google, Inc.

Constructs the internal representation of the Freebase service.
@param Google_Client $client

Reconcile entities to Freebase open data. (reconcile)
@param array $optParams Optional parameters.
@opt_param float confidence Required confidence for a candidate to match.
Must be between .5 and 1.0
@opt_param string kind Classifications of entity e.g. type, category, title.
@opt_param string lang Languages for names and values. First language is used
for display. Default is 'en'.
@opt_param int limit Maximum number of candidates to return.
@opt_param string name Name of entity.
@opt_param string prop Property values for entity formatted as :
@return Google_Service_Freebase_ReconcileGet

Search Freebase open data. (search)
@param array $optParams Optional parameters.
@opt_param string as_of_time A mql as_of_time value to use with mql_output
queries.
@opt_param string callback JS method name for JSONP callbacks.
@opt_param int cursor The cursor value to use for the next page of results.
@opt_param string domain Restrict to topics with this Freebase domain id.
@opt_param string encode The encoding of the response. You can use this
parameter to enable html encoding.
@opt_param bool exact Query on exact name and keys only.
@opt_param string filter A filter to apply to the query.
@opt_param string format Structural format of the json response.
@opt_param string help The keyword to request help on.
@opt_param bool indent Whether to indent the json results or not.
@opt_param string lang The code of the language to run the query with.
Default is 'en'.
@opt_param int limit Maximum number of results to return.
@opt_param string mid A mid to use instead of a query.
@opt_param string mql_output The MQL query to run againist the results to
extract more data.
@opt_param string output An output expression to request data from matches.
@opt_param bool prefixed Prefix match against names and aliases.
@opt_param string query Query term to search for.
@opt_param string scoring Relevance scoring algorithm to use.
@opt_param string spell Request 'did you mean' suggestions
@opt_param bool stemmed Query on stemmed names and aliases. May not be used
with prefixed.
@opt_param string type Restrict to topics with this Freebase type id.
@opt_param string with A rule to match against.
@opt_param string without A rule to not match against.

## References

**Database Tables (inferred)**
- `matches`

## Symbols

# Symbols

**Files documented**: 1

## `app\ThirdParty\Google\google-api-php-client\vendor\google\apiclient-services\src\Google\Service\Freebase.php`

**Classes**:
- `Google_Service_Freebase extends Google_Service`

**Functions/Methods**:
- `__construct(Google_Client $client)`
- `reconcile($optParams = array()`
- `search($optParams = array()`

