<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MonomersFixture
 */
class MonomersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'monomer_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'abbreviation' => 'Lorem ip',
                'CAS' => 'Lorem ipsum dolor ',
                'SMILES' => 'Lorem ipsum dolor sit amet',
                'InChI' => 'Lorem ipsum dolor sit amet',
                'InChIKey' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
