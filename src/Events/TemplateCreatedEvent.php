<?php

namespace Scoutapm\Laravel\Events;

use Scoutapm\Agent;

class TemplateCreatedEvent {

    private $agent;

    /**
     * Create the event listener.
     *
     * @param Agent $agent
     */
    public function __construct(Agent $agent)
    {
        $this->agent = $agent;
    }

    /**
     * Handle the event.
     *
     * @param  object $event
     * @param  object $data
     * @return void
     */
    public function handle($event, $data)
    {
        $this->agent->startSpan('Template/Compile'); // Start when View is Creating
    }

}