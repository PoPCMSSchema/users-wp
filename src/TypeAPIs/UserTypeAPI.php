<?php

declare(strict_types=1);

namespace PoP\UsersWP\TypeAPIs;

use WP_User;
use PoP\Users\TypeAPIs\UserTypeAPIInterface;
/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class UserTypeAPI implements UserTypeAPIInterface
{
    /**
     * Indicates if the passed object is of type User
     *
     * @param [type] $object
     * @return boolean
     */
    public function isInstanceOfUserType($object): bool
    {
        return $object instanceof WP_User;
    }
}