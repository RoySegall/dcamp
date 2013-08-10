<?php

/**
 * @file
 * Holds the migration classes for DrupalCamp migrate module.
 */

/**
 * Migrating elements.
 */
class DrupalCampElements extends DrupalCampMigrate {
  public $entityType = 'node';
  public $bundle = 'elements';

  public $csvColumns = array(
    array('id', 'Unique ID'),
    array('title', 'Title'),
    array('body', 'Body'),
    array('icon', 'Icon'),
    array('position', 'Position'),
    array('page', 'Page'),
    array('users', 'Users'),
  );

  public $dependencies = array('DrupalCampUsers');

  public function __construct() {
    parent::__construct();

    //Migrate users - don't work.
    $this->addFieldMapping('title', 'title');
    $this->addFieldMapping('body', 'body');
    $this->addFieldMapping('field_icon', 'icon');
    $this->addFieldMapping('field_position', 'position');
    $this->addFieldMapping('field_page', 'page');
    $this->addFieldMapping('field_user', 'users')
      ->sourceMigration(array('DrupalCampUsers'));
  }
}

/**
 * Migrate slide show.
 */
class DrupalCampSlideShow extends DrupalCampMigrate {
  public $entityType = 'node';
  public $bundle = 'slideshow';

  public $csvColumns = array(
    array('id', 'Unique ID'),
    array('title', 'Title'),
    array('image', 'Image'),
  );

  public function __construct() {
    parent::__construct();

    $this->addFieldMapping('title', 'title');

    $this->addFieldMapping('field_image', 'image')
      ->separator(';');
    $this->addFieldMapping('field_image:file_replace')
      ->defaultValue(FILE_EXISTS_REPLACE);
    $this->addFieldMapping('field_image:source_dir')
      ->defaultValue(drupal_get_path('module', 'dcamp_migrate') . '/images');
    $this->addFieldMapping('field_image:destination_dir', 'destination');
  }
}

/**
 * Migrating users.
 */
class DrupalCampUsers extends Migration {
  /**
   * Map the field and properties to the CSV header.
   */
  public $csvColumns = array(
    array('id', 'ID'),
    array('name', 'Username'),
    array('pass', 'Password'),
    array('mail', 'Email'),
    array('first_name', 'First name'),
    array('last_name', 'Last name'),
    array('organization', 'Organization'),
    array('picture', 'Picture'),
  );

  public $entityType = 'user';

  public function __construct() {
    parent::__construct();
    $this->description = t('Import users from a CSV file.');

    $this->addFieldMapping('name', 'name');
    $this->addFieldMapping('pass', 'pass');
    $this->addFieldMapping('mail', 'mail');
    $this->addFieldMapping('field_profile_first', 'first_name');
    $this->addFieldMapping('field_profile_last', 'last_name');
    $this->addFieldMapping('field_profile_org', 'organization');
    $this->addFieldMapping('status')
      ->defaultValue(TRUE);

    $this->addFieldMapping('picture', 'picture')
      ->defaultValue(FILE_EXISTS_REPLACE);

    // Create a map object for tracking the relationships between source rows
    $key = array(
      'id' => array(
        'type' => 'varchar',
        'length' => 255,
        'not null' => TRUE,
      ),
    );
    $destination_handler = new MigrateDestinationUser();
    $this->map = new MigrateSQLMap($this->machineName, $key, $destination_handler->getKeySchema());

    // Create a MigrateSource object.
    $this->source = new MigrateSourceCSV(drupal_get_path('module', 'dcamp_migrate') . '/csv/' . $this->entityType . '/user.csv', $this->csvColumns, array('header_rows' => 1));
    $this->destination = new MigrateDestinationUser();
  }

  /**
   * Granting a role to the user from the CSV.
   */
  function complete($entity, $row) {
    // Copy the file.
    $uri = file_unmanaged_copy(DRUPAL_ROOT . '/' . drupal_get_path('module', 'dcamp_migrate') . '/images/' . $row->picture, 'public://pictures');

    // Create the file manage entry.
    $file = new stdClass;
    $file->uid = $entity->uid;
    $file->filename = $row->picture;
    $file->uri = $uri;
    $file->status = 1;
    $file->filemime = 'image/png';
    file_save($file);

    // Update the user picture.
    $file->status = 0;
    $edit = array ('picture' => $file);
    user_save($entity, $edit);
  }
}
