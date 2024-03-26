jQuery(document).ready(function ($) {


  /**
  * scroll home page sections on clicking related customizer sections
  */
   $('body').on('click', '#sub-accordion-panel-cww_homepage_panel .control-subsection .accordion-section-title', function(event) {
       var section_id = $(this).parent('.control-subsection').attr('id');
       homeScrollToSection( section_id );
   });


function homeScrollToSection( section_id ){
       var preview_section_id = "cww-banner-section";

       var $contents = jQuery('#customize-preview iframe').contents();

       switch ( section_id ) {

          case 'accordion-section-cww_homepage_section':
           preview_section_id = "cww-banner-section";
           break;

          case 'accordion-section-cww_homepage_about_section':
           preview_section_id = "cww-about-section";
           break;

          case 'accordion-section-cww_homepage_cta_section':
           preview_section_id = "cww-cta-section";
           break;

          case 'accordion-section-cww_homepage_service_section':
           preview_section_id = "cww-service-section";
           break;

          case 'accordion-section-cww_homepage_portfolio_section':
           preview_section_id = "cww-portfolio-section";
           break;

          case 'accordion-section-cww_homepage_blog_section':
           preview_section_id = "cww-blog-section";
           break;

          case 'accordion-section-cww_homepage_contact_section':
           preview_section_id = "cww-contact-section";
           break;

           case 'accordion-section-cww_homepage_skill_section':
           preview_section_id = "cww-skill-section";
           break;    

           case 'accordion-section-cww_homepage_woo_section':
           preview_section_id = "cww-woo-products";
           break;       
               
       }

       if( $contents.find('#'+preview_section_id).length > 0 ){
           $contents.find("html, body").animate({
           scrollTop: $contents.find( "#" + preview_section_id ).offset().top - 82
           }, 500);
       }
    }



  /**
  * Header & Footer
  */
  $('body').on('click', '#accordion-section-cww_header_section,#accordion-section-cww_footer_section', function(event) {
         var section_id = $(this).attr('id');
         headerScrollToSection( section_id );
  });

  function headerScrollToSection( section_id ){
     var preview_section_id = "masthead";

     var $contents = jQuery('#customize-preview iframe').contents();

     switch ( section_id ) {

         case 'accordion-section-cww_header_section':
         preview_section_id = "masthead";
         break;

          case 'accordion-section-cww_footer_section':
         preview_section_id = "colophon";
         break;
                     
     }

     if( $contents.find('#'+preview_section_id).length > 0 ){
         $contents.find("html, body").animate({
         scrollTop: $contents.find( "#" + preview_section_id ).offset().top - 82
         }, 500);
     }
  }


 
});//Main document ending