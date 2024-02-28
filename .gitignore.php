# Ignore the wp-config.php file
wp-config.php

# Ignore specific wp-content subdirectories
wp-content/uploads/
wp-content/upgrade/
wp-content/backups/
wp-content/cache/
wp-content/plugins/
wp-content/mu-plugins/
wp-content/themes/some-theme-name/  # If you manage this theme outside of Git

# Ignore other files that are specific to the local environment or are sensitive
/.htaccess
/wp-content/debug.log
/wp-content/advanced-cache.php
/wp-content/wp-cache-config.php
/wp-content/object-cache.php

# Ignore node modules if you're using any npm packages
/node_modules/

# Ignore other files that are not part of the source code
/license.txt
/readme.html
