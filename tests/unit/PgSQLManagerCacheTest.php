<?php
/**
 * @link http://www.yiiframework.com/
 *
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\rbac\tests\unit;

use yii\cache\Cache;
use yii\cache\FileCache;

/**
 * PgSQLManagerTest.
 *
 * @group db
 * @group rbac
 * @group pgsql
 */
class PgSQLManagerCacheTest extends PgSQLManagerTest
{
    protected static $driverName = 'pgsql';

    /**
     * @return \yii\rbac\ManagerInterface
     */
    protected function createManager()
    {
        $manager = parent::createManager();
        $manager->cache = new Cache(new FileCache('@yii/tests/runtime/cache'));

        return $manager;
    }
}
