<?php


namespace Homework\Questions\Setup\Patch\Data;
use Magento\Framework\Setup\Patch\PatchInterface;

class AddDataFAQ implements \Magento\Framework\Setup\Patch\DataPatchInterface
{

    /**
     * @var \Magento\Framework\Setup\ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    public function __construct(
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup
    )
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    public function apply()
    {
        $this->moduleDataSetup->startSetup();
        $questList = [
            ['quest'=>'How many years are we in the market?', 'answ'=>'long long time', 'customer_id'=>1],
            ['quest'=>'What services do we offer?', 'answ'=>'all you can imagine', 'customer_id'=>1],
            ['quest'=>'How fast do our products arrive?', 'answ'=>'depending on how close you are', 'customer_id'=>1],
        ];
        $connection = $this->moduleDataSetup->getConnection();
        $petTbl = $connection->getTableName('question');
        foreach ($questList as $quest) {
            $connection->insertForce($petTbl, $quest);
        }
        $this->moduleDataSetup->endSetup();
    }

    public static function getDependencies()
    {
        return[];
    }

    public function getAliases()
    {
        return [];
    }
}
