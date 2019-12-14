<?php

exec('git status');
exec('git add --a');
exec('git commit -m "update"');
exec('git push');
exec('webnetkz');