<?php

if ( ! class_exists( 'WP_Customize_Control' ) ) {
  return; 
}

class CWW_Portfolio_Customize_Seperator_Control extends WP_Customize_Control {
     public function render_content() { ?>
       <div class="customize-control-seperator">
          <div class="label"><?php echo esc_html( $this->label ); ?></div>
           
          <?php if($this->description): ?>
     			<div class="customizer-desc-wrapp">
     				<?php echo esc_html( $this->description ); ?>
     			</div>  
   			<?php endif; ?>
        
       </div>
      
<?php     
  }     

}



    /**
     * Pro customizer section.
     *
     * 
     * 
     */
    class CWW_Portfolio_Customize_Section_Pro extends WP_Customize_Section {

        
        public $type = 'cww-portfolio-pro';

        /**
         * Custom button text to output.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $pro_text = '';

        /**
         * Custom pro button URL.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $pro_url = '';

        /**
         * Add custom parameters to pass to the JS via JSON.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        public function json() {
            $json = parent::json();
            $json['pro_text'] = $this->pro_text;
            $json['pro_url']  = esc_url( $this->pro_url );
            return $json;
        }

        /**
         * Outputs the Underscore.js template.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        protected function render_template() { ?>

            <li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
                <h3 class="accordion-section-title">
                    {{ data.title }}
                    <# if ( data.pro_text && data.pro_url ) { #>
                        <a href="{{ data.pro_url }}" class="button button-secondary alignright btn-cww-pro" target="_blank">{{ data.pro_text }}</a>
                    <# } #>
                </h3>
            </li>
        <?php }
    }