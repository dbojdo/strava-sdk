<?php

namespace Goosfraba\StravaSDK\Access;

/**
 * Represents the scope of the access to the resource
 */
final class Scope implements \Stringable
{
    private const RESOURCE_PROFILE = "profile";
    private const RESOURCE_ACTIVITY = "activity";
    private const PERMISSION_READ = "read";
    private const PERMISSION_READ_ALL = "read_all";
    private const PERMISSION_WRITE = "write";

    private ?string $resource;
    private array $permissions;

    private function __construct(?string $resource, array $permissions)
    {
        $this->resource = $resource;
        $this->permissions = $permissions;
    }

    /**
     * Creates general scope ("read" or "read_all")
     *
     * @param bool $readAll false for "read", true for "read_all" scope (false by default)
     * @return Scope the scope
     */
    public static function general(bool $readAll = false): self
    {
        return new self(null, self::buildPermissions($readAll, null));
    }

    /**
     * Creates profile resource scope ("read" or "read_all", "write")
     *
     * @param bool $readAll false for the "read", true for the "read_all" scope (false by default)
     * @param bool $write set to true for the "write" scope
     * @return Scope the scope
     */
    public static function profile(bool $readAll = false, bool $write = false): self
    {
        return new self(self::RESOURCE_PROFILE, self::buildPermissions($readAll, $write));
    }

    /**
     * Creates activity resource scope ("read" or "read_all", "write")
     *
     * @param bool $readAll false for the "read", true for the "read_all" scope (false by default)
     * @param bool $write set to true for the "write" scope
     * @return Scope the scope
     */
    public static function activity(bool $readAll = false, bool $write = false): self
    {
        return new self(self::RESOURCE_ACTIVITY, self::buildPermissions($readAll, $write));
    }

    /**
     * @inheritDoc
     */
    public function __toString(): string
    {
        $scopes = array_map(function (string $permission) {
            return $this->resource ? sprintf("%s:%s", $this->resource, $permission) : $permission;
        }, $this->permissions);

        return implode(",", $scopes);
    }

    /**
     * Builds the permissions array based on read / write scope values
     *
     * @param bool $readAll false for the "read", true for the "read_all" scope
     * @param bool $write set to true for the "write" scope
     * @return array the array of the permissions
     */
    private static function buildPermissions(bool $readAll, ?bool $write): array
    {
        $permissions = [$readAll ? self::PERMISSION_READ_ALL : self::PERMISSION_READ];
        if ($write) {
            $permissions[] = self::PERMISSION_WRITE;
        }

        return $permissions;
    }
}
