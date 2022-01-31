<?php
/**
 * APIActivitySet
 *
 * PHP version 5
 *
 * @category Class
 * @package  SternerStuff\InsightlyPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Insightly API v3.1
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v3.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.25
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SternerStuff\InsightlyPHP\Model;

use \ArrayAccess;
use \SternerStuff\InsightlyPHP\ObjectSerializer;

/**
 * APIActivitySet Class Doc Comment
 *
 * @category Class
 * @package  SternerStuff\InsightlyPHP
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class APIActivitySet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APIActivitySet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activityset_id' => 'int',
        'name' => 'string',
        'for_contacts' => 'bool',
        'for_organisations' => 'bool',
        'for_opportunities' => 'bool',
        'for_projects' => 'bool',
        'for_leads' => 'bool',
        'owner_user_id' => 'int',
        'activities' => '\SternerStuff\InsightlyPHP\Model\APIActivity[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activityset_id' => 'int64',
        'name' => null,
        'for_contacts' => null,
        'for_organisations' => null,
        'for_opportunities' => null,
        'for_projects' => null,
        'for_leads' => null,
        'owner_user_id' => 'int32',
        'activities' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'activityset_id' => 'ACTIVITYSET_ID',
        'name' => 'NAME',
        'for_contacts' => 'FOR_CONTACTS',
        'for_organisations' => 'FOR_ORGANISATIONS',
        'for_opportunities' => 'FOR_OPPORTUNITIES',
        'for_projects' => 'FOR_PROJECTS',
        'for_leads' => 'FOR_LEADS',
        'owner_user_id' => 'OWNER_USER_ID',
        'activities' => 'ACTIVITIES'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityset_id' => 'setActivitysetId',
        'name' => 'setName',
        'for_contacts' => 'setForContacts',
        'for_organisations' => 'setForOrganisations',
        'for_opportunities' => 'setForOpportunities',
        'for_projects' => 'setForProjects',
        'for_leads' => 'setForLeads',
        'owner_user_id' => 'setOwnerUserId',
        'activities' => 'setActivities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityset_id' => 'getActivitysetId',
        'name' => 'getName',
        'for_contacts' => 'getForContacts',
        'for_organisations' => 'getForOrganisations',
        'for_opportunities' => 'getForOpportunities',
        'for_projects' => 'getForProjects',
        'for_leads' => 'getForLeads',
        'owner_user_id' => 'getOwnerUserId',
        'activities' => 'getActivities'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['activityset_id'] = isset($data['activityset_id']) ? $data['activityset_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['for_contacts'] = isset($data['for_contacts']) ? $data['for_contacts'] : null;
        $this->container['for_organisations'] = isset($data['for_organisations']) ? $data['for_organisations'] : null;
        $this->container['for_opportunities'] = isset($data['for_opportunities']) ? $data['for_opportunities'] : null;
        $this->container['for_projects'] = isset($data['for_projects']) ? $data['for_projects'] : null;
        $this->container['for_leads'] = isset($data['for_leads']) ? $data['for_leads'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['activities'] = isset($data['activities']) ? $data['activities'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets activityset_id
     *
     * @return int
     */
    public function getActivitysetId()
    {
        return $this->container['activityset_id'];
    }

    /**
     * Sets activityset_id
     *
     * @param int $activityset_id activityset_id
     *
     * @return $this
     */
    public function setActivitysetId($activityset_id)
    {
        $this->container['activityset_id'] = $activityset_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets for_contacts
     *
     * @return bool
     */
    public function getForContacts()
    {
        return $this->container['for_contacts'];
    }

    /**
     * Sets for_contacts
     *
     * @param bool $for_contacts for_contacts
     *
     * @return $this
     */
    public function setForContacts($for_contacts)
    {
        $this->container['for_contacts'] = $for_contacts;

        return $this;
    }

    /**
     * Gets for_organisations
     *
     * @return bool
     */
    public function getForOrganisations()
    {
        return $this->container['for_organisations'];
    }

    /**
     * Sets for_organisations
     *
     * @param bool $for_organisations for_organisations
     *
     * @return $this
     */
    public function setForOrganisations($for_organisations)
    {
        $this->container['for_organisations'] = $for_organisations;

        return $this;
    }

    /**
     * Gets for_opportunities
     *
     * @return bool
     */
    public function getForOpportunities()
    {
        return $this->container['for_opportunities'];
    }

    /**
     * Sets for_opportunities
     *
     * @param bool $for_opportunities for_opportunities
     *
     * @return $this
     */
    public function setForOpportunities($for_opportunities)
    {
        $this->container['for_opportunities'] = $for_opportunities;

        return $this;
    }

    /**
     * Gets for_projects
     *
     * @return bool
     */
    public function getForProjects()
    {
        return $this->container['for_projects'];
    }

    /**
     * Sets for_projects
     *
     * @param bool $for_projects for_projects
     *
     * @return $this
     */
    public function setForProjects($for_projects)
    {
        $this->container['for_projects'] = $for_projects;

        return $this;
    }

    /**
     * Gets for_leads
     *
     * @return bool
     */
    public function getForLeads()
    {
        return $this->container['for_leads'];
    }

    /**
     * Sets for_leads
     *
     * @param bool $for_leads for_leads
     *
     * @return $this
     */
    public function setForLeads($for_leads)
    {
        $this->container['for_leads'] = $for_leads;

        return $this;
    }

    /**
     * Gets owner_user_id
     *
     * @return int
     */
    public function getOwnerUserId()
    {
        return $this->container['owner_user_id'];
    }

    /**
     * Sets owner_user_id
     *
     * @param int $owner_user_id owner_user_id
     *
     * @return $this
     */
    public function setOwnerUserId($owner_user_id)
    {
        $this->container['owner_user_id'] = $owner_user_id;

        return $this;
    }

    /**
     * Gets activities
     *
     * @return \SternerStuff\InsightlyPHP\Model\APIActivity[]
     */
    public function getActivities()
    {
        return $this->container['activities'];
    }

    /**
     * Sets activities
     *
     * @param \SternerStuff\InsightlyPHP\Model\APIActivity[] $activities activities
     *
     * @return $this
     */
    public function setActivities($activities)
    {
        $this->container['activities'] = $activities;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
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


