<?php
/**
 * @package wordpress-stubs
 */

/**
 */
class WP_Customize_Image_Control extends WP_Customize_Upload_Control {

	/**
	 * @param WP_Customize_Manager                                                                                                                                                                                                                                                                                                                                                                               $manager
	 * @param string                                                                                                                                                                                                                                                                                                                                                                                             $id
	 * @param array{instance_number?: int, manager?: WP_Customize_Manager, id?: string, settings?: string|array<int|string, string>, setting?: string, capability?: string, priority?: int, section?: string, label?: string, description?: string, choices?: array<string, string>, input_attrs?: array<string, string>, allow_addition?: bool, json?: array<mixed>, type?: string, active_callback?: callable} $args {
	 *     @type int                              $instance_number
	 *     @type WP_Customize_Manager             $manager
	 *     @type string                           $id
	 *     @type string|array<int|string, string> $settings
	 *     @type string                           $setting
	 *     @type string                           $capability
	 *     @type int                              $priority
	 *     @type string                           $section
	 *     @type string                           $label
	 *     @type string                           $description
	 *     @type array<string, string>            $choices
	 *     @type array<string, string>            $input_attrs
	 *     @type bool                             $allow_addition
	 *     @type array<mixed>                     $json
	 *     @type string                           $type
	 *     @type callable                         $active_callback
	 * }
	 */
	public function __construct( $manager, $id, $args = array() ) {
	}
}
