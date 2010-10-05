<?php

namespace Bundle\ForumBundle\Search;

class Search
{
    /**
     * @Validation({
     *   @NotBlank(),
     *   @MinLength(limit=3, message="Just a little too short.")
     * })
     */
    public $query;
}
