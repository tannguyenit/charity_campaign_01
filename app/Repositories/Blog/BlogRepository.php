<?php
namespace App\Repositories\Blog;

use App\Models\Blog;
use App\Repositories\BaseRepository;
use App\Repositories\Blog\BlogRepositoryInterface;
use Illuminate\Container\Container;

class BlogRepository extends BaseRepository implements BlogRepositoryInterface
{
    protected $container;

    public function __construct(Container $container)
    {
        parent::__construct($container);
    }

    public function model()
    {
        return Blog::class;
    }
}
