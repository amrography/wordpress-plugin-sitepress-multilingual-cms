<?php
    if ( ! class_exists( 'AxisPluginConfig' ) ) {
        class AxisPluginConfig {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }
				add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
            }

            public function initSettings() {
                $this->theme = wp_get_theme();
                $this->setArguments();
                $this->setSections();
                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }
                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }
			
            /**
             * Filter hook for filtering the default value of any given field. Very useful in development mode.
             * */
            function change_defaults( $defaults ) {
                $defaults['str_replace'] = 'Testing filter hook!';

                return $defaults;
            }

            // Remove the demo link and the notice of integrated demo from the redux-framework plugin
            function remove_demo() {

                // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
                if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                    remove_filter( 'plugin_row_meta', array(
                        ReduxFrameworkPlugin::instance(),
                        'plugin_metalinks'
                    ), null, 2 );

                    // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                    remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
                }
            }

            public function setSections() {

                /**
                 * Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
                 * */
                // Background Patterns Reader
                $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
                $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
                $sample_patterns      = array();

                if ( is_dir( $sample_patterns_path ) ) :

                    if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) :
                        $sample_patterns = array();

                        while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                            if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                                $name              = explode( '.', $sample_patterns_file );
                                $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                                $sample_patterns[] = array(
                                    'alt' => $name,
                                    'img' => $sample_patterns_url . $sample_patterns_file
                                );
                            }
                        }
                    endif;
                endif;

                ob_start();

                $ct          = wp_get_theme();
                $this->theme = $ct;
                $item_name   = $this->theme->get( 'Name' );
                $tags        = $this->theme->Tags;
                $screenshot  = $this->theme->get_screenshot();
                $class       = $screenshot ? 'has-screenshot' : '';

                $customize_title = sprintf( __( 'Customize &#8220;%s&#8221;', 'axis' ), $this->theme->display( 'Name' ) );

                ?>
                <div id="current-theme" class="<?php echo esc_attr( $class ); ?>">
                    <?php if ( $screenshot ) : ?>
                        <?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
                            <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize"
                               title="<?php echo esc_attr( $customize_title ); ?>">
                                <img src="<?php echo esc_url( $screenshot ); ?>"
                                     alt="<?php esc_attr_e( 'Current theme preview', 'axis' ); ?>"/>
                            </a>
                        <?php endif; ?>
                        <img class="hide-if-customize" src="<?php echo esc_url( $screenshot ); ?>"
                             alt="<?php esc_attr_e( 'Current theme preview', 'axis' ); ?>"/>
                    <?php endif; ?>

                    <h4><?php echo $this->theme->display( 'Name' ); ?></h4>

                    <div>
                        <ul class="theme-info">
                            <li><?php printf( __( 'By %s', 'axis' ), $this->theme->display( 'Author' ) ); ?></li>
                            <li><?php printf( __( 'Version %s', 'axis' ), $this->theme->display( 'Version' ) ); ?></li>
                            <li><?php echo '<strong>' . __( 'Tags', 'axis' ) . ':</strong> '; ?><?php printf( $this->theme->display( 'Tags' ) ); ?></li>
                        </ul>
                        <p class="theme-description"><?php echo $this->theme->display( 'Description' ); ?></p>
                        <?php
                            if ( $this->theme->parent() ) {
                                printf( ' <p class="howto">' . __( 'This <a href="%1$s">child theme</a> requires its parent theme, %2$s.', 'axis' ) . '</p>', __( 'https://codex.wordpress.org/Child_Themes', 'axis' ), $this->theme->parent()->display( 'Name' ) );
                            }
                        ?>

                    </div>
                </div>

                <?php
                $item_info = ob_get_contents();

                ob_end_clean();

                $sampleHTML = '';
                if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
                    Redux_Functions::initWpFilesystem();

                    global $wp_filesystem;

                    $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
                }

                // ACTUAL DECLARATION OF SECTIONS
				require_once('sections/main.php');
				require_once('sections/background.php');
				require_once('sections/countdown.php');
				require_once('sections/subscribe.php');
				require_once('sections/service.php');
				require_once('sections/contact_info.php');
				require_once('sections/contact_form.php');
				require_once('sections/map.php');
				require_once('sections/footer.php');
				require_once('sections/seo.php');
				require_once('sections/export.php');
            }

            public function setArguments() {
				 $this->theme  = wp_get_theme();

                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'             => 'axisConfig',
                    'display_name'         => __( 'Axis', 'axis' ),
                    'display_version'      => '1.0.0',
                    'menu_type'            => 'menu',
                    'allow_sub_menu'       => true,
                    'menu_title'           => __( 'Axis', 'axis' ),
                    'page_title'           => __( 'Axis Plugin Options', 'xenia' ),
                    'footer_credit'        => '',
                    'async_typography'     => true,
                    'admin_bar'            => true,
                    'admin_bar_icon'     => 'dashicons-portfolio',
                    'admin_bar_priority' => 50,
					
					'global_variable'      => '',
                    // Set a different name for your global variable other than the opt_name
					
                    'dev_mode'             => false, //disable.
                    'update_notice'        => false,
                    'customizer'           => true,
                    'page_priority'        => null,
                    'page_permissions'     => 'manage_options',
                    'menu_icon'            => 'dashicons-art',
                    'last_tab'             => '', 
                    'page_icon'            => 'icon-themes',
                    'page_slug'            => 'axis_options',
                    'save_defaults'        => true,
                    'default_show'         => false,
                    'default_mark'         => '',
                    'show_import_export'   => true,

                    // CAREFUL -> These options are for advanced use only
                    'transient_time'       => 60 * MINUTE_IN_SECONDS,
                    'output'               => true,
                    'database'             => '',
                    'system_info'          => false,

                    // HINTS
                    'hints'                => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),
                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );
                
            }

        }

        global $reduxConfig;
        $reduxConfig = new AxisPluginConfig();
    } else {
        echo "Axis Plugin has been called for twice!";
    }

	include_once('font-awesome/icons.php');
?>