<?php
namespace Oro\Bundle\MessageQueueBundle\Tests\DependencyInjection\Compiler\Mock;

use Oro\Component\MessageQueue\ZeroConfig\TopicSubscriber;

class DestinationNameTopicSubscriber implements TopicSubscriber
{
    public static function getSubscribedTopics()
    {
        return [
            'topic-subscriber-name' => [
                'destinationName' => 'subscriber-destination-name'
            ],
        ];
    }
}