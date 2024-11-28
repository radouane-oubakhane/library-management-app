<?php

namespace App\DTO\borrow;

class BorrowBookResponse
{
    public function __construct(
        public int                      $id,
        public string                   $title,
        public string                   $author_first_name,
        public string                   $author_last_name,
        public BorrowCategoryResponse $category,
        public string                   $isbn,
        public string                   $description,
        public int                      $stock,
        public string                   $publisher,
        public string                   $published_at,
        public string                   $language,
        public string                   $edition,
        public string                   $picture,
    ) {}

}
