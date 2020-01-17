<?php

namespace Deployer;

// Recipe content here...

task('clean:deployerConfig', function () {
    //$param = get('param');
    run("echo '{{release_path}}'");
    run("rm {{release_path}}/config/deploy.php");
});
