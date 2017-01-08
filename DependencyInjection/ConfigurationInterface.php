<?php

namespace Nbonneau\GoogleCalendarBundle\DependencyInjection;

interface ConfigurationInterface {
    
    const CONFIG_NODE_NAME = 'nbonneau_google_calendar';
    
    const CLIENT_SECRET_PATH_LABEL = 'client_secret_path';
    const APP_NAME_LABEL = 'app_name';
    const CREDENTIALS_PATH_LABEL = 'credentials_path';
    const SCOPE_LABEL = 'scope';
}
