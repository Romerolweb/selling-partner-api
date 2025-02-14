<?php
/**
 * ContentStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\AplusContentV20201101;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ContentStatus Class Doc Comment
 *
 * @category Class
 * @description The submission status of the content document.
 * @package  SellingPartnerApi
 * @group 
 */
class ContentStatus
{
    /**
     * Possible values of this enum
     */
    const APPROVED = 'APPROVED';
    const DRAFT = 'DRAFT';
    const REJECTED = 'REJECTED';
    const SUBMITTED = 'SUBMITTED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPROVED,
            self::DRAFT,
            self::REJECTED,
            self::SUBMITTED,
        ];
    }
}


