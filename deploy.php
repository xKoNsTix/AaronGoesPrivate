<?php
namespace Deployer;
require 'recipe/common.php';

set('repository','git@github.com:xkonstix/AaronGoesPrivate');


set('shared_files', ['public/wp-config.php', 'public/.htaccess']);
set('shared_dirs', ['public/wp-content/uploads']);




// Hosts
host('lillesand')
        ->set('remote_user','aaron')    

        ->set('deploy_path', '/var/www/aaron');
 

// Composer
set('composer_action', false);

// Tasks
desc('Deploy your project');
task('deploy', [
    //'deploy:info',
    'deploy:prepare',
    //'deploy:lock',
    //'deploy:release',
   // 'deploy:update_code',
    //'deploy:shared',
    //'deploy:writable',
    //'deploy:clear_paths',
    //'deploy:symlink',
    //'deploy:unlock',
     'deploy:publish'
]);



// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');