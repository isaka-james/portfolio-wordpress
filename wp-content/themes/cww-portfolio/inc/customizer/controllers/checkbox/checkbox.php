<?php
/**
 * Customizer Heading.
 *
 * @since   1.0.0
 * 
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return; 
}

/**
 * Checkbox control
 */
class CWW_Portfolio_Checkbox extends WP_Customize_Control {

	/**
	 * The control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'cww-portfolio-checkbox-toggle';

	/**
	 * Send to _js json.
	 *
	 * @return array
	 */
	public function json() {
		$json         = parent::json();
		$json['id']   = $this->id;
		$json['link'] = $this->get_link();

		return $json;
	}

	/**
	 * Render control.
	 */
	protected function content_template() {
		?>
		<div class="checkbox-toggle-outer-wrapp">
		<div class="checkbox-toggle-wrap">
			<span>{{{data.label}}}</span>
			<input {{{data.link}}} type="checkbox" id="{{{data.id}}}"/><label for="{{{data.id}}}"></label>
		</div>
		<# if ( data.description ) { #>
		<div class="chk-desc">{{{data.description}}}</div>
		<# } #>
		</div>
		<?php
	}
}
