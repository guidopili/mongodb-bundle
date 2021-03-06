<?php

declare(strict_types=1);

namespace Facile\MongoDbBundle\Tests\unit\Services\Loggers\Model;

use Facile\MongoDbBundle\Models\Query;
use PHPUnit\Framework\TestCase;

class LogEventTest extends TestCase
{
    public function test_construction()
    {
        $event = new Query();
        $event->setCollection('test_collection');
        $event->setMethod('find');
        $event->setExecutionTime(1000);
        $event->setData(['_id'=>'1000000000001']);

        self::assertEquals('test_collection', $event->getCollection());
        self::assertEquals('find',$event->getMethod());
        self::assertEquals(1000,$event->getExecutionTime());
        self::assertEquals(['_id'=>'1000000000001'],$event->getData());
    }
}
