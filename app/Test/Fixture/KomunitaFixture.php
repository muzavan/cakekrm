<?php
/**
 * Komunita Fixture
 */
class KomunitaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'nama_lembaga' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'deskripsi_lembaga' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'kategori' => array('type' => 'integer', 'null' => false, 'default' => '3', 'length' => 10, 'unsigned' => true, 'key' => 'index'),
		'alamat' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'lat' => array('type' => 'decimal', 'null' => false, 'default' => '-6.89117', 'length' => '9,5', 'unsigned' => false),
		'lng' => array('type' => 'decimal', 'null' => false, 'default' => '107.61061', 'length' => '9,5', 'unsigned' => false),
		'contact_person' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'posisi' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'nomor_telepon' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'website' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'media_sosial' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created_at' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'updated_at' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'komunitass_kategori_foreign' => array('column' => 'kategori', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nama_lembaga' => 'Lorem ipsum dolor sit amet',
			'deskripsi_lembaga' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'kategori' => 1,
			'alamat' => 'Lorem ipsum dolor sit amet',
			'lat' => '',
			'lng' => '',
			'contact_person' => 'Lorem ipsum dolor sit amet',
			'posisi' => 'Lorem ipsum dolor sit amet',
			'nomor_telepon' => 'Lorem ipsum dolor sit amet',
			'website' => 'Lorem ipsum dolor sit amet',
			'media_sosial' => 'Lorem ipsum dolor sit amet',
			'created_at' => 1442894466,
			'updated_at' => 1442894466
		),
	);

}
