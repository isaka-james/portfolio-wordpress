<?php
/*
*
* Home intro section for portfolio Canvas section
*
*
*/



function portfolio_canvas_intro_section_output()
{
  $portfolio_canvas_intro_show = get_theme_mod('portfolio_canvas_intro_show', '1');
  if (!$portfolio_canvas_intro_show) {
    return;
  }

  $portfolio_canvas_dfimgh = get_template_directory_uri() . '/assets/img/profile-img.png';
  $portfolio_canvas_intro_img = get_theme_mod('portfolio_canvas_intro_img', $portfolio_canvas_dfimgh);
  $portfolio_canvas_intro_subtitle = get_theme_mod('portfolio_canvas_intro_subtitle', __('WELCOME TO MY WORLD', 'portfolio-canvas'));
  $portfolio_canvas_intro_title = get_theme_mod('portfolio_canvas_intro_title', __('Hi, I\'m Jone Doe', 'portfolio-canvas'));
  $portfolio_canvas_intro_designation = get_theme_mod('portfolio_canvas_intro_designation', __('a Designer', 'portfolio-canvas'));
  $portfolio_canvas_intro_desc = get_theme_mod('portfolio_canvas_intro_desc');
  $portfolio_canvas_btn_text_one = get_theme_mod('portfolio_canvas_btn_text_one', __('Hire me', 'portfolio-canvas'));
  $portfolio_canvas_btn_url_one = get_theme_mod('portfolio_canvas_btn_url_one', '#');
  $portfolio_canvas_btn_text_two = get_theme_mod('portfolio_canvas_btn_text_two', __('Download CV', 'portfolio-canvas'));
  $portfolio_canvas_btn_url_two = get_theme_mod('portfolio_canvas_btn_url_two', '#');
?>
  <!-- home -->
  <section class="home" id="home">
    <div class="container">
      <div class="home-all-content">
        <div class="row">
          <div class="col-lg-6">
            <?php if ($portfolio_canvas_intro_img) : ?>
              <div class="hero-img">
                <img src="<?php echo esc_url($portfolio_canvas_intro_img); ?>" alt="<?php esc_attr($portfolio_canvas_intro_title); ?>">
              <?php else : ?>
                <div class="hero-img px-noimg">
                <?php endif; ?>
                </div>

              </div>
              <div class="col-lg-6">

                <div class="content">
                  <?php if ($portfolio_canvas_intro_subtitle) : ?>
                    <h5><?php echo esc_html($portfolio_canvas_intro_subtitle); ?></h5>
                  <?php endif; ?>
                  <?php if ($portfolio_canvas_intro_title) : ?>
                    <h1><?php echo esc_html($portfolio_canvas_intro_title); ?> <br><span id="type1"><?php echo esc_html($portfolio_canvas_intro_designation); ?></span></h1>
                  <?php endif; ?>
                  <?php if ($portfolio_canvas_intro_desc) : ?>
                    <p><?php echo esc_html($portfolio_canvas_intro_desc); ?></p>
                  <?php endif; ?>
                  <?php if ($portfolio_canvas_btn_url_one || $portfolio_canvas_btn_url_two) : ?>
                    <div class="pc-intro-btns">
                      <?php if ($portfolio_canvas_btn_url_one) : ?>

                        <a href="<?php echo esc_url($portfolio_canvas_btn_url_one); ?>" class="btn btn-hero hero-btn1"><?php echo esc_html($portfolio_canvas_btn_text_one); ?></a>
                      <?php endif; ?>
                      <?php if ($portfolio_canvas_btn_url_two) : ?>
                        <a href="<?php echo esc_url($portfolio_canvas_btn_url_two); ?>" class="btn btn-hero hero-btn2"><?php echo esc_html($portfolio_canvas_btn_text_two); ?></a>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                </div>

              </div>
          </div>
        </div>
      </div>
  </section>

<?php
}
add_action('portfolio_canvas_profile_intro', 'portfolio_canvas_intro_section_output');
