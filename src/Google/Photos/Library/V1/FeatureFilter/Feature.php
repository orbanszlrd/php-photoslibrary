<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1\FeatureFilter;

use UnexpectedValueException;

/**
 * The set of features that you can filter on.
 *
 * Protobuf type <code>google.photos.library.v1.FeatureFilter.Feature</code>
 */
class Feature
{
    /**
     * Treated as if no filters are applied. All features are included.
     *
     * Generated from protobuf enum <code>NONE = 0;</code>
     */
    const NONE = 0;
    /**
     * Media items that the user has marked as favorites in the Google Photos
     * app.
     *
     * Generated from protobuf enum <code>FAVORITES = 1;</code>
     */
    const FAVORITES = 1;

    private static $valueToName = [
        self::NONE => 'NONE',
        self::FAVORITES => 'FAVORITES',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Feature::class, \Google\Photos\Library\V1\FeatureFilter_Feature::class);

