<?php

declare(strict_types=1);

namespace PoP\UsersWP\Conditional\CustomPosts\TypeAPIs;

use PoP\CustomPostsWP\TypeAPIs\CustomPostTypeAPIHelpers;
use PoP\Users\Conditional\CustomPosts\TypeAPIs\CustomPostUserTypeAPIInterface;

/**
 * Methods to interact with the Type, to be implemented by the underlying CMS
 */
class CustomPostUserTypeAPI implements CustomPostUserTypeAPIInterface
{
    public function getAuthorID($postObjectOrID)
    {
        list(
            $post,
            $postID,
        ) = CustomPostTypeAPIHelpers::getCustomPostObjectAndID($postObjectOrID);
        return $post->post_author;
    }
}