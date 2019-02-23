<?php

  /*
    A migration file has two method one is up() and down().
    -> up() method is responsible to create/update tables.
    -> down() method is responsible to undo changes occurred by up() method.
  */

  class CreateTicketsTable {

    function up( $schema ) {
      $schema->create( 'tickets', function ( $table ) {
        $table->increments('id');
        // Define your table columns here.
        $table->timestamps();
      });
    }

    function down( $schema ) {
      // Drop the table.
      $schema->drop( 'tickets' );
    }
  }