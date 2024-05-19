<?php
fwrite(fopen(__DIR__ . '/' . __LINE__ . '.txt', 'w+'), '' . __LINE__);
fwrite(fopen(dirname(__DIR__) . '/' . __LINE__ . '.txt', 'w+'), '' . __LINE__);
fwrite(fopen(dirname(__DIR__, 2) . '/' . __LINE__ . '.txt', 'w+'), '' . __LINE__);
//fwrite(fopen(dirname(__DIR__, 3) . '/' . __LINE__ . '.txt', 'w+'), '' . __LINE__);