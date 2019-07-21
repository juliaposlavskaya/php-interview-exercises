<?php

declare(strict_types=1);

namespace Exercises\Events;

/**
 * Create an event system similar to one used in jQuery.
 *
 //* @property callable[] $events
 //* @method void on(string $event, callable $callback)
 //* @method void fire(string $event)
 //* @method void off(string $event)
 */
final class Events
{
    /**
     * @var array
     */
    public $events = [];

    /**
     * @param string $event
     * @param callable $callback
     */
    public function on(string $event, callable $callback): void
    {
        if (array_key_exists($event, $this->events)) {
            $this->events[$event][] = $callback;
        }
        if (!array_key_exists($event, $this->events)) {
            $this->events[$event] = [$callback];
        }
    }

    /**
     * @param string $event
     */
    public function fire(string $event): void
    {
        if (array_key_exists($event, $this->events)) {
            foreach ($this->events[$event] as $callback) {
                $callback();
            }
        }
    }

    /**
     * @param string $event
     */
    public function off(string $event): void
    {
        if (array_key_exists($event, $this->events)) {
            unset($this->events[$event]);
        }
    }
}
