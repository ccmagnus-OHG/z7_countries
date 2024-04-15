<?php

declare(strict_types=1);

namespace Zeroseven\Countries\Hooks;

use TYPO3\CMS\Core\DataHandling\DataHandler;
use Zeroseven\Countries\Service\TCAService;

class DataHandlerHook implements HookInterface
{
    /**
     * Refresh pagetree, if the country configurations have changed on table "pages"
     *
     * @param bool $status
     * @param string $table
     * @param int|string $id
     * @param array $fieldArray
     * @param DataHandler $dataHandler
     */
    public function processDatamap_postProcessFieldArray(bool $status, string $table, $id, array $fieldArray, DataHandler $dataHandler): void
    {
        if (
            $table === 'pages'
            && ($config = TCAService::getEnableColumns($table))
            && !empty(array_intersect($config, array_keys($fieldArray)))
        ) {
            $dataHandler->pagetreeNeedsRefresh = true;
        }
    }

    public static function register(): void
    {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][self::class] = self::class;
    }
}
