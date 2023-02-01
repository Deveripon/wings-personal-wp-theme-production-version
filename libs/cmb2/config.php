 <?php 
    /**
     * Add new cmb2 boxes to page
    */
    function wings_biography_meta_boxes(){
      /**
       * CMB2 boxe For sidebar alignment functionality
       * */  
      $sidebar_align =  new_cmb2_box([
            'title' => 'Sidebar Alignment',
            'id'    => 'sidebar_alignment',
            'object_types' => 'page',
        ]);
        /**
         * Add some value to the sidebar alignment options
        */
         $sidebar_align ->  add_field([
            'name' => 'Sidebar align',
            'type' => 'select',
            'id' => 'sidebar_align',
            'options' => [
                'right' =>'Right',
                'left' =>'Left',
                'full' =>'Full Width',
            ],
            'default' =>'Right',           
                
         ]);
/*************************************************************************************************************/

      /**
       * New cmb2 box for custom post type support of various functionality
      */
       $books =  new_cmb2_box([
            'title' => 'Books Descriptions',
            'id' => 'book_title',
            'object_types' => 'books',
         ]);

         /**
          * Add some field for custom page type functionality
          * @descriptions add field for custom page type functionality
         */
          $books-> add_field([
          'name' => 'Book Description',
          'type' => 'textarea_small',
          'id' => 'book_desc',
         /**
         * Add some field for custom page type functionality
         * @Cover image add field for custom page type functionality
         */
          ]);
           $books-> add_field([
           'name' => 'Add Book Cover Page',
           'type' => 'file',
           'id' => 'book_cover_page',
            'options' => array(
            'url' => false, // Hide the text input for the url
            ),
             'text' => array(
             'add_upload_file_text' => 'Add Book Cover Image', // Change upload button text. Default: "Add or Upload File"
             'button' => 'upload cover image', // Change button text
             ),
             'preview_size' =>   [200,400], // Change size
             
               /**
               * Add some field for custom page type functionality
               * @Book Publisher name add field for custom page type functionality
               */
           ]);
              $books-> add_field([
              'name' => 'Publisher Name',
              'type' => 'text',
              'id' => 'publisher_name',
                 /**
                 * Add some field for custom page type functionality
                 * @Book published date add field for custom page type functionality
                 */
              ]);
              $books-> add_field([
              'name' => 'Published Date',
              'type' => 'text_date',
              // 'timezone_meta_key' => 'wiki_test_timezone',
              // 'date_format' => 'l jS \of F Y',
              'id' => 'published_date',

                 /**
                 * Add some field for custom page type functionality
                 * @Books ISBN Number add field for custom page type functionality
                 */
              ]);
                $books-> add_field([
                'name' => 'ISBN Number',
                'type' => 'text',
                'id' => 'isbn_number',
                    /**
                    * Add some field for custom page type functionality
                    * @Books languages field add field for custom page type functionality
                    */
                ]);
                $books-> add_field([
                'name' => 'Languages',
                'type' => 'text',
                'id' => 'language',

                ]);
                  /**
                  * Add some field for custom page type functionality
                  * @Books page quantity add field for custom page type functionality
                  */
                $books-> add_field([
                'name' => 'Page Quantity',
                'type' => 'text',
                'id' => 'page_quantity',
                ]);
                  /**
                  * Add some field for custom page type functionality
                  * @Books Download link add field for custom page type functionality
                  */
                $books-> add_field([
                   'name' => 'Book Download Link',
                   'type' => 'text',
                   'id' => 'book_download_link',
                   ]);


/**
 * Social massage headings for
*/
 $social_massage = new_cmb2_box([
 'title' => 'Heading',
 'id' => 'heading',
 'object_types' => 'massage',
 ]);
 /**
 * Add some value to the sidebar alignment options
 */
  $social_massage -> add_field([
 'name' => 'Heading',
 'type' => 'text',
 'id' => 'heading',
 ]);






         
    }

    add_action('cmb2_init', 'wings_biography_meta_boxes'); 
 
 
 
 
 
 
 
 
 
 
 
 ?>