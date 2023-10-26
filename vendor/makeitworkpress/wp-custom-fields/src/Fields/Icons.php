<?php
 /** 
  * Displays a text input field
  */
namespace MakeitWorkPress\WP_Custom_Fields\Fields;
use MakeitWorkPress\WP_Custom_Fields\Field as Field;
use MakeitWorkPress\WP_Custom_Fields\Framework as Framework;

// Bail if accessed directly
if ( ! defined('ABSPATH') ) {
    die;
}

class Icons implements Field {
    
    /**
     * Prepares the variables and renders the field
     * 
     * @param   array $field The array with field attributes data-alpha
     * @return  void
     */     
    public static function render( array $field = [] ): void {
        
        $configurations = self::configurations();
        $exclude        = isset($field['exclude']) ? $field['exclude'] : [];
        $iconsets       = $configurations['properties']['icons'];
        $search         = isset($field['search']) ? esc_attr($field['search']) : $configurations['labels']['search'];
        $type           = isset($field['multiple']) && $field['multiple'] == true ? 'checkbox' : 'radio'; ?>
        
            <input class="wpcf-icons-search" placeholder="<?php echo $search; ?>" type="search" />

            <div class="wpcf-icons">

                <?php foreach( $iconsets as $set => $icons ) { ?>

                    <?php if( in_array($set, $exclude) ) { 
                        continue; 
                    } ?>

                    <p class="wpcf-icons-title"><?php echo esc_html($set); ?></p>
                    <ul class="wpcf-icon-list">
            
                        <?php 
                            foreach( $icons as $icon => $label ) {

                                if( $set == 'dashicons' ) {
                                    $display_icon = '<i class="dashicons dashicons-before ' . esc_attr($icon) . '"></i>';
                                } elseif( $set == 'font-awesome-regular' ) {
                                    $display_icon   = '<i class="far fa-' . esc_attr($icon) . '"></i>';
                                } elseif( $set == 'font-awesome-solid' ) {
                                    $display_icon   = '<i class="fas fa-' . esc_attr($icon) . '"></i>';
                                } elseif( $set == 'font-awesome-brands' ) {
                                    $display_icon   = '<i class="fab fa-' . esc_attr($icon) . '"></i>';
                                } elseif( $set == 'material' ) {
                                    $display_icon   = '<i class="material-icons">' . esc_html($icon) . '</i>';
                                }                
                                
                                $display_icon   = apply_filters('wp_custom_fields_displayed_icon', $display_icon, $icon, $set);
                                $id             = esc_attr( $field['id'] . '-' . $icon );
                                $name           = $type == 'checkbox' ? esc_attr($field['name'] . '[' . $icon . ']') : esc_attr($field['name']);
                                
                                // Get the values for a set
                                if( $type == 'checkbox' && is_array($field['values']) ) {
                                    $selected = in_array($icon, $field['values']) ? ' checked="checked" ' : '';
                                } else {
                                    $selected = $icon == $field['values'] ? ' checked="checked" ' : '';
                                }

                        ?>
                            <li data-icon="<?php echo $icon; ?>">
                                <input type="<?php echo $type; ?>" name="<?php echo $name; ?>" id="<?php echo $id; ?>" value="<?php echo $icon; ?>" <?php echo $selected; ?> />               
                                <label for="<?php echo $id; ?>"><?php echo $display_icon; ?></label>
                            </li>                  
                        <?php } ?>

                    </ul>
                <?php } ?>
            
            </div> 
        
        <?php
  
    }
    
    /**
     * Returns the global configurations for this field
     *
     * @return array $configurations The configurations
     */      
    public static function configurations(): array {

        $configurations = [
            'type'          => 'icons',
            'defaults'      => '',
            'labels'        => [
                'search'        => __('Search Icons', 'wpcf')
            ],
            'properties'    => [
                'icons' => Framework::$icons
            ]
        ];
            
        return apply_filters( 'wp_custom_fields_icons_config', $configurations );

    }
    
}