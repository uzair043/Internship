<?php

namespace schemaTypes;
use schemaFunctions\Pressbooks_Metadata_General_Functions as gen_func;

/**
 * The class for the [schematype] including operations and metaboxes
 *
 * @link       https://github.com/Books4Languages/pressbooks-metadata
 * @since      0.8.1
 *
 * @package    Pressbooks_Metadata
 * @subpackage Pressbooks_Metadata/admin/schemaTypes
 * @author     Christos Amyrotos <christosv2@hotmail.com>
 * @author     Vasilis Georgoudis <vasilios.georgoudis@gmail.com>
 */

class Pressbooks_Metadata_Place {

	/**
	 * The type level where these metaboxes and their schema operations will go
	 *
	 * @since    0.x
	 * @access   private
	 */
	private $type_level;

	/**
	 * The name of the class along with the type_level
	 * Used to identify each type differently so we can eliminate parent types not needed
	 *
	 * @since    0.x
	 * @access   public
	 */
	public $class_name;

	public function __construct($type_level_input) {
		$this->type_level = $type_level_input;
		$this->pmdt_add_metabox($this->type_level);
		$this->class_name = __CLASS__ .'_'. $this->type_level;
	}
	/**
	 * The function which produces the metaboxes for the [schematype] type
	 * @param string Accepting a string so we can distinguish on witch place each metabox is created
	 * The value passed here is also used when calling the metadata functions in the header and the footer.
	 * @since 0.8.1
	 */
	private function pmdt_add_metabox($meta_position){
		//----------- metabox ----------- //
		x_add_metadata_group(  'Place', $meta_position, array(
			'label'       => 'Place Type Properties',
			'priority'        => 'high',
		) );
		//----------- metafields ----------- //
		// [schemaprop]
		
		// actionStatus Property
		x_add_metadata_field(  'pb_additionalProperty_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'additionalProperty',
			'description' => 	'A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org.'
		) );
		
		// agent Property
		x_add_metadata_field(  'pb_address_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'address',
			'description' => 	'Physical address of the item.'
		) );
		
		
		// endTime Property
		x_add_metadata_field(  'pb_aggregateRating_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'aggregateRating',
			'description' => 	'The overall rating, based on a collection of reviews or ratings, of the item.'
		) );
		
		// error Property
		x_add_metadata_field(  'pb_amenityFeature_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'amenityFeature',
			'description' => 	'An amenity feature (e.g. a characteristic or service) of the Accommodation. This generic property does not make a statement about whether the feature is included in an offer for the main accommodation or available at extra costs.'
		) );
		
		
		// instrument Property
		x_add_metadata_field(  'pb_branchCode_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'branchCode',
			'description' => 	'A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.'
		) );
		
		// location Property
		x_add_metadata_field(  'pb_containedInPlace_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'containedInPlace',
			'description' => 	'The basic containment relation between a place and one that contains it. Supersedes containedIn.'
		) );
		
		
		// object Property
		x_add_metadata_field(  'pb_containsPlace_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'containsPlace',
			'description' => 	'The basic containment relation between a place and another that it contains.'
		) );
		
		
		// participant Property
		x_add_metadata_field(  'pb_event_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'event',
			'description' => 	'Upcoming or past event associated with this place, organization, or action. Supersedes events.'
		) );
		
		
		// result Property
		x_add_metadata_field(  'pb_faxNumber_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'faxNumber',
			'description' => 	'The fax number.'
		) );
		
		
		// startTime Property
		x_add_metadata_field(  'pb_geo_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'geo',
			'description' => 	'The geo coordinates of the place.'
		) );
		
		
		// target Property
		x_add_metadata_field(  'pb_globalLocationNumber_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'globalLocationNumber',
			'description' => 	'The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.'
		) );
		
		
			// target Property
		x_add_metadata_field(  'pb_hasMap_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'hasMap',
			'description' => 	'A URL to a map of the place. Supersedes map, maps.'
		) );
		
		
			// target Property
		x_add_metadata_field(  'pb_isicV4_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'isicV4',
			'description' => 	'The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.'
		) );
		
		
			// target Property
		x_add_metadata_field(  'pb_logo_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'logo',
			'description' => 	'An associated logo.'
		) );
		
			// target Property
		x_add_metadata_field(  'pb_maximumAttendeeCapacity_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'maximumAttendeeCapacity',
			'description' => 	'The total number of individuals that may attend an event or venue.'
		) );
		
			// target Property
		x_add_metadata_field(  'pb_openingHoursSpecification_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'openingHoursSpecification',
			'description' => 	'The opening hours of a certain place.'
		) );
		
			// target Property
		x_add_metadata_field(  'pb_photo_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'photo',
			'description' => 	'A photograph of this place. Supersedes photos.'
		) );
		
			// target Property
		x_add_metadata_field(  'pb_review_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'review',
			'description' => 	'A review of the item. Supersedes reviews.'
		) );
		
			// target Property
		x_add_metadata_field(  'pb_smokingAllowed_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'smokingAllowed',
			'description' => 	'Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.'
		) );
		
			// target Property
		x_add_metadata_field('pb_specialOpeningHoursSpecification_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'specialOpeningHoursSpecification',
			'description' => 	'The special opening hours of a certain place.'
		) );
		
		
					// target Property
		x_add_metadata_field(  'pb_telephone_'.$meta_position, $meta_position, array(
			'group'       =>     'Place',
			'label'       =>     'telephone',
			'description' => 	'The telephone number.'
		) );
	}

	/* FUNCTIONS FOR THIS TYPE START HERE */

	/**
	 * Function used for comparing the instances of the schema types
	 *
	 * @since    0.x
	 * @access   public
	 */
	public function __toString() {
		return $this->class_name;
	}

	/**
	 * Returns the father for the type.
	 *
	 * @since    0.x
	 * @access   public
	 */
	public function pmdt_parent_init(){
		// We don't need this function because we are not dealing with the parents of the types right now.
		//return new Pressbooks_Metadata_[schema-parent-type]($this->type_level);
	}

	/**
	 * Returns type level.
	 *
	 * @since    0.x
	 * @access   public
	 */
	public function pmdt_get_type_level(){
		return $this->type_level;
	}

	/**
	 * A function needed for the array of metadata that comes from each post site-meta cpt or chapter
	 * It automatically returns the first item in the array.
	 * @since 0.8.1
	 *
	 */
	private function pmdt_get_first($my_array){
		return $my_array[0];
	}

	/**
	 * A function that creates the metadata for the [schematype] type.
	 * @since 0.8.1
	 *
	 */
	public function pmdt_get_metatags() {
		//Distinguishing if we are working on a post --- chapter level or on the main site level
		//The type_level variable is the string we used to create the metabox

		$is_site; // This bool var is used to identify if the level is site level or any other post level
		if ( $this->type_level == 'metadata' || $this->type_level == 'site-meta' ) { //loading the appropriate metadata depending on the type level
			$metadata = gen_func::get_metadata();
			$is_site = true;
		} else {
			$is_site = false;
			$metadata = get_post_meta( get_the_ID() );
		}

		// array of the items needed to become microtags
		$Place_data = array(

			'additionalProperty' => 'pb_additionalProperty',
			'address' => 'pb_address',
			'aggregateRating' => 'pb_aggregateRating',
			'amenityFeature' => 'pb_amenityFeature',
			'branchCode' => 'pb_branchCode',
			'containedInPlace' => 'pb_containedInPlace',
			'containsPlace' => 'pb_containsPlace',
			'event' => 'pb_event',
			'faxNumber' => 'pb_faxNumber',
			'geo' => 'pb_geo',
			'globalLocationNumber' => 'pb_globalLocationNumber',
			'hasMap'  => 'pb_hasMap',
			'isicV4' => 'pb_isicV4',
			'logo' => 'pb_logo',
			'maximumAttendeeCapacity' => 'pb_maximumAttendeeCapacity',
			'openingHoursSpecification' => 'pb_openingHoursSpecification',
			'photo' => 'pb_photo',
			'review	' => 'pb_review	',
			'smokingAllowed' => 'pb_smokingAllowed',
			'specialOpeningHoursSpecification' => 'pb_specialOpeningHoursSpecification',
			'telephone' => 'pb_telephone'
		);

		$html = "<!-- Microtags --> \n";

		$html .= '<div itemscope itemtype="http://schema.org/Place">';

		foreach ( $Place_data as $itemprop => $content ) {
			if ( isset( $metadata[ $content . '_' . $this->type_level ] ) ) {

				if ( !$is_site ) { //we are using the get_first function to get the value from the returned array
					$value = $this->pmdt_get_first( $metadata[ $content . '_' . $this->type_level ] );
				} else {
					if($this->type_level == 'site-meta'){
						$value = $this->pmdt_get_first($metadata[ $content . '_' . $this->type_level ]);
					}else{//We always use the get_first function except if our level is metadata coming from pressbooks
						$value = $metadata[ $content . '_' . $this->type_level ];
					}
				}
				$html .= "<meta itemprop = '" . $itemprop . "' content = '" . $value . "'>\n";
			}
		}
		$html .= '</div>';
		return $html;
	}
}