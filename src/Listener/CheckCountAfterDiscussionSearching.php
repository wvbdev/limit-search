<?php

namespace WvbForum\LimitSearch\Listener;

use Carbon\Carbon;
use Flarum\Discussion\Event\Searching;
use Flarum\Extension\ExtensionManager;
use Flarum\Group\Group;
use Flarum\User\User;
use Illuminate\Contracts\Events\Dispatcher;

class CheckCountAfterDiscussionSearching {

    public function subscribe(Dispatcher $event) {
        $event->listen(Searching::class, function (Activated $events) {
        });
    }
}
