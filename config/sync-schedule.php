<?php

return [
    /*
     * An Oh Dear API token.
     *
     * You can generate a token on the account settings screen at Oh Dear.
     */
    'api_token' => env('OH_DEAR_API_TOKEN'),

    /*
     *  The id of the site you want to sync the schedule with.
     *
     * You'll find this id on the settings page of a site at Oh Dear.
     */
    'site_id' => env('OH_DEAR_SITE_ID'),
];
