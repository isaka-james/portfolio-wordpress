<?php
/*
*
* Home intro section for portfolix section
*
*
*/



function go_portfolio_intro_section_output()
{
  $go_portfolio_intro_show = get_theme_mod('go_portfolio_intro_show', 1);
  if (!$go_portfolio_intro_show) {
    return;
  }

  $go_portfolio_dfimgh = get_template_directory_uri() . '/assets/img/profile-img.png';
  $go_portfolio_intro_img = get_theme_mod('go_portfolio_intro_img', $go_portfolio_dfimgh);
  $go_portfolio_intro_subtitle = get_theme_mod('go_portfolio_intro_subtitle');
  $go_portfolio_intro_title = get_theme_mod('go_portfolio_intro_title', __('Hey! I\'m', 'go-portfolio'));
  $go_portfolio_intro_designation = get_theme_mod('go_portfolio_intro_designation', __('A Web Designer', 'go-portfolio'));
  $go_portfolio_intro_desc = get_theme_mod('go_portfolio_intro_desc');
  $go_portfolio_btn_text_one = get_theme_mod('go_portfolio_btn_text_one', __('Hire me', 'go-portfolio'));
  $go_portfolio_btn_url_one = get_theme_mod('go_portfolio_btn_url_one', '/?p=30');
  $go_portfolio_btn_text_two = get_theme_mod('go_portfolio_btn_text_two', __('Download CV', 'go-portfolio'));
  $go_portfolio_btn_url_two = get_theme_mod('go_portfolio_btn_url_two', '#');
?>
  <!-- home -->
  <section class="home" id="home">
    <div class="container">
      <div class="home-all-content">
        <div class="row">
          <div class="col-lg-6">
            <div class="content">
              <?php if ($go_portfolio_intro_subtitle) : ?>
                <h5><?php echo esc_html($go_portfolio_intro_subtitle); ?></h5>
              <?php endif; ?>
              <?php if ($go_portfolio_intro_title) : ?>
                <h1><?php echo esc_html($go_portfolio_intro_title); ?> <br><span id="type1"><?php echo esc_html($go_portfolio_intro_designation); ?></span></h1>
              <?php endif; ?>
              <?php if ($go_portfolio_intro_desc) : ?>
                <p><?php echo esc_html($go_portfolio_intro_desc); ?></p>
              <?php endif; ?>
              <?php if ($go_portfolio_btn_url_one || $go_portfolio_btn_url_two) : ?>
                <div class="pc-intro-btns">
                  <?php if ($go_portfolio_btn_url_one) : ?>

                    <a href="/?p=30" class="btn btn-hero hero-btn1"><?php echo esc_html($go_portfolio_btn_text_one); ?></a>
                  <?php endif; ?>
                  <?php if ($go_portfolio_btn_url_two) : ?>
                    <a href="<?php echo esc_url($go_portfolio_btn_url_two); ?>" class="btn btn-hero hero-btn2"><?php echo esc_html($go_portfolio_btn_text_two); ?></a>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>

          </div>
          <div class="col-lg-6">
            <?php if ($go_portfolio_intro_img) : ?>
              <div class="hero-img">
                <img src="<?php echo esc_url($go_portfolio_intro_img); ?>" alt="<?php esc_attr($go_portfolio_intro_title); ?>">
              <?php else : ?>
                <div class="hero-img px-noimg">
                <?php endif; ?>
                </div>

              </div>
          </div>
        </div>
      </div>
  </section>

<?php
}
add_action('go_portfolio_profile_intro', 'go_portfolio_intro_section_output');
