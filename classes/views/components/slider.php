<?php
/**
 * Prepares the variables that are used in our slider component template
 */
namespace Views\Components;

defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

class Slider extends Component {  

    /**
     * The basic attributes for our class
     * 
     * @return Void
     */
    public function init() {
        
        // Our attributes
		$this->defaults			= ['customize' => ['main_width' => 0], 'meta' => ['slider' => []]];
		$this->properties 	= ['slides' => []];

    }

    /**
     * Automatically returns the right title based on the template we're looking at
     * 
     * @return Void
     */
    public function populate() {

		global $post;

		$size = $this->atts['customize']['main_width'] > 970 ? 'linden-2x' : 'linden';

		foreach( $this->atts['slider'] as $slide ) {
			if( $slide['video'] ) {
				$this->properties['slides'][] = $this->formatVideo( $slide['video'] );
			} elseif( $slide['image'] && is_numeric(rtrim($slide['image'], ',')) ) {
				$this->properties['slides'][] = wp_get_attachment_image( rtrim($slide['image'], ','), $size, '', ['itemprop' => 'image']); 	
			}
		}

		// Make sure there are no empty slides
		$this->properties['slides'] = array_filter($this->properties['slides']);

	}
	
	/**
	 * Formats the video based upon the source url
	 * 
	 * @param 	string $src 	The source url for the video
	 * @return 	string $video 	The string for the formatted video
	 */
	private function formatVideo( $src = '' ) {

        $height = $this->atts['customize']['main_width'] ? $this->atts['customize']['main_width']/1.70 : 570;
        $width  = $this->atts['customize']['main_width'] ? $this->atts['customize']['main_width'] : 970;

		// Youtube and Vimeo video's
		if( preg_match('#^https?://(?:www\.)?(?:youtube\.com/watch|youtu\.be/)#', $src) || preg_match('#^https?://(.+\.)?vimeo\.com/.*#', $src) ) {

			// Format the url into the embedding urls
			if( strpos($src, 'youtube.com/watch?v=') !== false || strpos($src, 'youtu.be') !== false ) {
				$video        = parse_url($src);
				$src          = isset($video['query']) ? 'https://www.youtube.com/embed/' . str_replace('v=', '', $video['query']) : 'https://www.youtube.com/embed' . $video['path'];  
			}

			if( strpos($src, 'vimeo.com') !== false ) {
				$src          = 'https://player.vimeo.com/video' . parse_url($src)['path'];
			} 
			
			$video        = '<div class="wp-video" itemprop="video" itemscope="itemscope" itemtype="http://schema.org/VideoObject"><iframe width="' . $width . '" height="' . $height . '"' . $src . ' frameborder="0" allowfullscreen="true"></iframe></div>';
		
		// Regular video's
		} else {
			$video  = wp_video_shortcode( ['height' => $height, 'src' => $src, 'width' => $width] );
		}

		return $video;
	}

}