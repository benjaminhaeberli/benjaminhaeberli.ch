<?php

$debugbarRenderer = kirby()->session()->data()->pull('debugbar');
echo $debugbarRenderer->renderHead();
echo $debugbarRenderer->render();
