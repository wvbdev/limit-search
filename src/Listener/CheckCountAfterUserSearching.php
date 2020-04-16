<?php

namespace WvbForum\LimitSearch\Listener;

use Carbon\Carbon;
use Flarum\Extension\ExtensionManager;
use Flarum\User\Event\Searching;
use Flarum\Group\Group;
use Flarum\User\User;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Database;

class CheckCountAfterUserSearching {

    public function subscribe(Dispatcher $event) {
        $event->listen(Searching::class, function (Activated $events) {

        });
    }
}
