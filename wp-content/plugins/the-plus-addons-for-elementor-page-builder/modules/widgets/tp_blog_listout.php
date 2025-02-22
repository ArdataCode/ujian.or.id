<?php
/**
 * Widget Name: Blog Post Listing
 * Description: Different style of Blog Post listing layouts.
 * Author: Theplus
 * Author URI: https://posimyth.com
 *
 * @package ThePlus
 */

namespace TheplusAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Class L_ThePlus_Blog_ListOut
 */
class L_ThePlus_Blog_ListOut extends Widget_Base {

	/**
	 * Document Link For Need help.
	 *
	 * @since 5.3.3
	 *
	 * @var tp_doc of the class.
	 */
	public $tp_doc = L_THEPLUS_Tpdoc;

	/**
	 * Get Widget Name.
	 *
	 * @since 1.0.0
	 */
	public function get_name() {
		return 'tp-blog-listout';
	}

	/**
	 * Get Widget Title.
	 *
	 * @since 1.0.0
	 */
	public function get_title() {
		return esc_html__( 'Blog/Post Listing', 'tpebl' );
	}

	/**
	 * Get Widget Icon.
	 *
	 * @since 1.0.0
	 */
	public function get_icon() {
		return 'fa fa-newspaper-o theplus_backend_icon';
	}

	/**
	 * Get Widget categories.
	 *
	 * @since 1.0.0
	 */
	public function get_categories() {
		return array( 'plus-listing' );
	}

	/**
	 * Get Widget keywords.
	 *
	 * @since 1.0.0
	 */
	public function get_keywords() {
		return array( 'blog list', 'tp', 'listing', 'bloglisting', 'theplus', 'Elementor blog' );
	}

	/**
	 * Get Docs Url.
	 *
	 * @since 1.0.0
	 */
	public function get_custom_help_url() {
		$doc_url = $this->tp_doc . 'blog-listing';

		return esc_url( $doc_url );
	}

	/**
	 * Update is_reload_preview_required.
	 *
	 * @since 1.0.0
	 * @version 5.4.2
	 */
	public function is_reload_preview_required() {
		return true;
	}

	/**
	 * Register controls.
	 *
	 * @since 1.0.0
	 *
	 * @version 5.4.2
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			array(
				'label' => esc_html__( 'Content Layout', 'tpebl' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);
		$this->add_control(
			'style',
			array(
				'label'   => esc_html__( 'Style', 'tpebl' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'style-1',
				'options' => array(
					'style-1' => esc_html__( 'Style 1', 'tpebl' ),
					'style-2' => esc_html__( 'Style 2 (PRO)', 'tpebl' ),
					'style-3' => esc_html__( 'Style 3 (PRO)', 'tpebl' ),
					'style-4' => esc_html__( 'Style 4 (PRO)', 'tpebl' ),
				),
			)
		);
		$this->add_control(
			'style_pro_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
				'condition'   => array(
					'style!' => array( 'style-1' ),
				),
			)
		);
		$this->add_control(
			'layout',
			array(
				'label'   => esc_html__( 'Layout', 'tpebl' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'grid',
				'options' => array(
					'grid'     => esc_html__( 'Grid', 'tpebl' ),
					'masonry'  => esc_html__( 'Masonry', 'tpebl' ),
					'metro'    => esc_html__( 'Metro', 'tpebl' ),
					'carousel' => esc_html__( 'Carousel (PRO)', 'tpebl' ),
				),
			)
		);
		$this->add_control(
			'how_it_works_grid',
			array(
				'label'     => wp_kses_post( "<a class='tp-docs-link' href='" . esc_url( $this->tp_doc ) . "show-blog-posts-in-grid-layout-in-elementor/?utm_source=wpbackend&utm_medium=elementoreditor&utm_campaign=widget' target='_blank' rel='noopener noreferrer'> Learn How it works  <i class='eicon-help-o'></i> </a>" ),
				'type'      => Controls_Manager::HEADING,
				'condition' => array(
					'layout' => 'grid',
				),
			)
		);
		$this->add_control(
			'how_it_works_Masonry',
			array(
				'label'     => wp_kses_post( "<a class='tp-docs-link' href='" . esc_url( $this->tp_doc ) . "show-blog-posts-in-masonry-grid-layout-in-elementor/?utm_source=wpbackend&utm_medium=elementoreditor&utm_campaign=widget' target='_blank' rel='noopener noreferrer'> Learn How it works  <i class='eicon-help-o'></i> </a>" ),
				'type'      => Controls_Manager::HEADING,
				'condition' => array(
					'layout' => 'masonry',
				),
			)
		);
		$this->add_control(
			'how_it_works_Metro',
			array(
				'label'     => wp_kses_post( "<a class='tp-docs-link' href='" . esc_url( $this->tp_doc ) . "show-blog-posts-in-metro-layout-in-elementor/?utm_source=wpbackend&utm_medium=elementoreditor&utm_campaign=widget' target='_blank' rel='noopener noreferrer'> Learn How it works  <i class='eicon-help-o'></i> </a>" ),
				'type'      => Controls_Manager::HEADING,
				'condition' => array(
					'layout' => 'metro',
				),
			)
		);
		$this->add_control(
			'layout_pro_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
				'condition'   => array(
					'layout' => 'carousel',
				),
			)
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'content_source_section',
			array(
				'label' => esc_html__( 'Content Source', 'tpebl' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);
		$this->add_control(
			'post_category',
			array(
				'type'        => Controls_Manager::SELECT2,
				'label'       => esc_html__( 'Select Category', 'tpebl' ),
				'default'     => '',
				'label_block' => true,
				'multiple'    => true,
				'options'     => l_theplus_get_categories(),
			)
		);
		$this->add_control(
			'post_tags',
			array(
				'type'        => Controls_Manager::SELECT2,
				'label'       => esc_html__( 'Select Tags', 'tpebl' ),
				'default'     => '',
				'label_block' => true,
				'multiple'    => true,
				'options'     => l_theplus_get_tags(),
			)
		);
		$this->add_control(
			'display_posts',
			array(
				'label'   => esc_html__( 'Maximum Posts Display', 'tpebl' ),
				'type'    => Controls_Manager::NUMBER,
				'min'     => 1,
				'max'     => 200,
				'step'    => 1,
				'default' => 8,
			)
		);
		$this->add_control(
			'post_offset',
			array(
				'label'   => wp_kses_post( "Offset Posts <a class='tp-docs-link' href='" . esc_url( $this->tp_doc ) . "hide-recent-blog-post-from-list-in-elementor/?utm_source=wpbackend&utm_medium=elementoreditor&utm_campaign=widget' target='_blank' rel='noopener noreferrer'> <i class='eicon-help-o'></i> </a>" ),
				'type'    => Controls_Manager::NUMBER,
				'min'     => 0,
				'max'     => 50,
				'step'    => 1,
				'default' => '',
			)
		);
		$this->add_control(
			'post_offset_Note',
			array(
				'type'        => Controls_Manager::RAW_HTML,
				'raw'         => '<p class="tp-controller-notice"><i>Note : Hide posts from the beginning of listing.</i></p>',
				'label_block' => true,
			)
		);
		$this->add_control(
			'post_order_by',
			array(
				'label'   => wp_kses_post( "Order By <a class='tp-docs-link' href='" . esc_url( $this->tp_doc ) . "show-recent-blog-posts-in-elementor/?utm_source=wpbackend&utm_medium=elementoreditor&utm_campaign=widget' target='_blank' rel='noopener noreferrer'> <i class='eicon-help-o'></i> </a>" ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'date',
				'options' => l_theplus_orderby_arr(),
			)
		);
		$this->add_control(
			'post_order',
			array(
				'label'   => esc_html__( 'Order', 'tpebl' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => l_theplus_order_arr(),
			)
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'columns_section',
			array(
				'label'     => esc_html__( 'Columns Manage', 'tpebl' ),
				'tab'       => Controls_Manager::TAB_CONTENT,
				'condition' => array(
					'layout!' => array( 'carousel' ),
				),
			)
		);
		$this->add_control(
			'desktop_column',
			array(
				'label'     => esc_html__( 'Desktop Column', 'tpebl' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => '3',
				'options'   => l_theplus_get_columns_list(),
				'condition' => array(
					'layout!' => array( 'metro', 'carousel' ),
				),
			)
		);
		$this->add_control(
			'tablet_column',
			array(
				'label'     => esc_html__( 'Tablet Column', 'tpebl' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => '4',
				'options'   => l_theplus_get_columns_list(),
				'condition' => array(
					'layout!' => array( 'metro', 'carousel' ),
				),
			)
		);
		$this->add_control(
			'mobile_column',
			array(
				'label'     => esc_html__( 'Mobile Column', 'tpebl' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => '6',
				'options'   => l_theplus_get_columns_list(),
				'condition' => array(
					'layout!' => array( 'metro', 'carousel' ),
				),
			)
		);
		$this->add_control(
			'metro_column',
			array(
				'label'     => esc_html__( 'Metro Column', 'tpebl' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => '3',
				'options'   => array(
					'3' => esc_html__( 'Column 3', 'tpebl' ),
					'4' => esc_html__( 'Column 4 (PRO)', 'tpebl' ),
					'5' => esc_html__( 'Column 5 (PRO)', 'tpebl' ),
					'6' => esc_html__( 'Column 6 (PRO)', 'tpebl' ),
				),
				'condition' => array(
					'layout' => array( 'metro' ),
				),
			)
		);
		$this->add_control(
			'metro_style_3',
			array(
				'label'     => esc_html__( 'Metro Style', 'tpebl' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'style-1',
				'options'   => l_theplus_get_style_list( 1 ),
				'condition' => array(
					'metro_column' => '3',
					'layout'       => array( 'metro' ),
				),
			)
		);
		$this->add_control(
			'plus_pro_metro_column_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
				'condition'   => array(
					'metro_column!' => '3',
					'layout'        => array( 'metro' ),
				),
			)
		);
		$this->add_responsive_control(
			'columns_gap',
			array(
				'label'      => esc_html__( 'Columns Gap/Space Between', 'tpebl' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%', 'em' ),
				'default'    => array(
					'top'    => '15',
					'right'  => '15',
					'bottom' => '15',
					'left'   => '15',
				),
				'separator'  => 'before',
				'condition'  => array(
					'layout!' => array( 'carousel' ),
				),
				'selectors'  => array(
					'{{WRAPPER}} .blog-list .post-inner-loop .grid-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
			)
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'extra_option_section',
			array(
				'label' => esc_html__( 'Extra Options', 'tpebl' ),
				'tab'   => Controls_Manager::TAB_CONTENT,
			)
		);
		$this->add_control(
			'post_title_tag',
			array(
				'label'     => esc_html__( 'Title Tag', 'tpebl' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'h3',
				'options'   => l_theplus_get_tags_options(),
				'separator' => 'after',
			)
		);
		$this->add_control(
			'display_title_limit',
			array(
				'label'     => esc_html__( 'Title Limit', 'tpebl' ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'Show', 'tpebl' ),
				'label_off' => esc_html__( 'Hide', 'tpebl' ),
				'default'   => 'no',
			)
		);
		$this->add_control(
			'display_title_limit_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
				'condition'   => array(
					'display_title_limit' => array( 'yes' ),
				),
			)
		);
		$this->add_control(
			'display_post_category',
			array(
				'label'     => esc_html__( 'Display Category Post', 'tpebl' ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'Show', 'tpebl' ),
				'label_off' => esc_html__( 'Hide', 'tpebl' ),
				'default'   => 'yes',
				'condition' => array(
					'style!' => array( 'style-1' ),
				),
			)
		);
		$this->add_control(
			'display_post_category_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
				'condition'   => array(
					'style!'                => array( 'style-1' ),
					'display_post_category' => array( 'yes' ),
				),
			)
		);
		$this->add_control(
			'display_excerpt',
			array(
				'label'     => esc_html__( 'Display Excerpt/Content', 'tpebl' ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'Show', 'tpebl' ),
				'label_off' => esc_html__( 'Hide', 'tpebl' ),
				'default'   => 'yes',
			)
		);
		$this->add_control(
			'post_excerpt_count',
			array(
				'label'     => wp_kses_post( "Excerpt/Content Count <a class='tp-docs-link' href='" . esc_url( $this->tp_doc ) . "limit-post-excerpt-in-elementor-blog-posts/?utm_source=wpbackend&utm_medium=elementoreditor&utm_campaign=widget' target='_blank' rel='noopener noreferrer'> <i class='eicon-help-o'></i> </a>" ),
				'type'      => Controls_Manager::NUMBER,
				'min'       => 5,
				'max'       => 500,
				'step'      => 2,
				'default'   => 30,
				'separator' => 'after',
				'condition' => array(
					'display_excerpt' => 'yes',
				),
			)
		);
		$this->add_control(
			'display_thumbnail',
			array(
				'label'     => esc_html__( 'Display Image Size', 'tpebl' ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'Show', 'tpebl' ),
				'label_off' => esc_html__( 'Hide', 'tpebl' ),
				'default'   => 'no',
				'condition' => array(
					'layout!' => 'carousel',
				),
			)
		);
		$this->add_control(
			'display_thumbnail_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
				'condition'   => array(
					'layout!'           => 'carousel',
					'display_thumbnail' => array( 'yes' ),
				),
			)
		);
		$this->add_control(
			'display_post_meta',
			array(
				'label'     => esc_html__( 'Display Post Meta', 'tpebl' ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'Show', 'tpebl' ),
				'label_off' => esc_html__( 'Hide', 'tpebl' ),
				'default'   => 'yes',
			)
		);
		$this->add_control(
			'post_meta_tag_style',
			array(
				'label'     => esc_html__( 'Post Meta Tag', 'tpebl' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'style-1',
				'options'   => l_theplus_get_style_list( 1 ),
				'condition' => array(
					'display_post_meta' => 'yes',
				),
			)
		);
		$this->add_control(
			'filter_category',
			array(
				'label'     => wp_kses_post( "Category Wise Filter <a class='tp-docs-link' href='" . esc_url( $this->tp_doc ) . "add-category-wise-filter-in-blog-post-in-elementor/?utm_source=wpbackend&utm_medium=elementoreditor&utm_campaign=widget' target='_blank' rel='noopener noreferrer'> <i class='eicon-help-o'></i> </a>" ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'Show', 'tpebl' ),
				'label_off' => esc_html__( 'Hide', 'tpebl' ),
				'default'   => 'no',
				'condition' => array(
					'layout!' => 'carousel',
				),
			)
		);
		$this->add_control(
			'filter_category_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
				'condition'   => array(
					'layout!'         => 'carousel',
					'filter_category' => array( 'yes' ),
				),
			)
		);
		$this->add_control(
			'post_extra_option',
			array(
				'label'     => esc_html__( 'More Post Loading Options', 'tpebl' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'none',
				'options'   => array(
					'none'       => esc_html__( 'Select Options', 'tpebl' ),
					'pagination' => esc_html__( 'Pagination (PRO)', 'tpebl' ),
					'load_more'  => esc_html__( 'Load More (PRO)', 'tpebl' ),
					'lazy_load'  => esc_html__( 'Lazy Load (PRO)', 'tpebl' ),
				),
				'condition' => array(
					'layout!' => array( 'carousel' ),
				),
			)
		);
		$this->add_control(
			'post_extra_pro_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
				'condition'   => array(
					'post_extra_option!' => array( 'none' ),
				),
			)
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_meta_tag_style',
			array(
				'label'     => esc_html__( 'Post Meta Tag', 'tpebl' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => array(
					'display_post_meta' => 'yes',
				),
			)
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'     => 'meta_tag_typography',
				'label'    => esc_html__( 'Typography', 'tpebl' ),
				'global'   => array(
					'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
				),
				'selector' => '{{WRAPPER}} .blog-list .post-inner-loop .post-meta-info span',
			)
		);
		$this->start_controls_tabs( 'tabs_post_meta_style' );
		$this->start_controls_tab(
			'tab_post_meta_normal',
			array(
				'label' => esc_html__( 'Normal', 'tpebl' ),
			)
		);
		$this->add_control(
			'post_meta_color',
			array(
				'label'     => esc_html__( 'Post Meta Color', 'tpebl' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .blog-list .post-inner-loop .post-meta-info span,{{WRAPPER}} .blog-list .post-inner-loop .post-meta-info span a' => 'color: {{VALUE}}',
				),
			)
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'tab_post_meta_hover',
			array(
				'label' => esc_html__( 'Hover', 'tpebl' ),
			)
		);
		$this->add_control(
			'post_meta_color_hover',
			array(
				'label'     => esc_html__( 'Post Meta Color', 'tpebl' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .blog-list .post-inner-loop .blog-list-content:hover .post-meta-info span,{{WRAPPER}} .blog-list .post-inner-loop .blog-list-content:hover .post-meta-info span a' => 'color: {{VALUE}}',
				),
			)
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();

		$this->start_controls_section(
			'section_post_category_style',
			array(
				'label'     => esc_html__( 'Category Post', 'tpebl' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => array(
					'display_post_category' => 'yes',
					'style!'                => 'style-1',
				),
			)
		);
		$this->add_control(
			'section_post_category_style_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
			)
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_title_style',
			array(
				'label' => esc_html__( 'Title', 'tpebl' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'     => 'title_typography',
				'label'    => esc_html__( 'Typography', 'tpebl' ),
				'global'   => array(
					'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
				),
				'selector' => '{{WRAPPER}} .blog-list .post-inner-loop .post-title,{{WRAPPER}} .blog-list .post-inner-loop .post-title a',
			)
		);
		$this->start_controls_tabs( 'tabs_title_style' );
		$this->start_controls_tab(
			'tab_title_normal',
			array(
				'label' => esc_html__( 'Normal', 'tpebl' ),
			)
		);
		$this->add_control(
			'title_color',
			array(
				'label'     => esc_html__( 'Title Color', 'tpebl' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .blog-list .post-inner-loop .post-title,{{WRAPPER}} .blog-list .post-inner-loop .post-title a' => 'color: {{VALUE}}',
				),
			)
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'tab_title_hover',
			array(
				'label' => esc_html__( 'Hover', 'tpebl' ),
			)
		);
		$this->add_control(
			'title_hover_color',
			array(
				'label'     => esc_html__( 'Title Color', 'tpebl' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .blog-list .post-inner-loop .blog-list-content:hover .post-title,{{WRAPPER}} .blog-list .post-inner-loop .blog-list-content:hover .post-title a' => 'color: {{VALUE}}',
				),
			)
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();

		$this->start_controls_section(
			'section_excerpt_style',
			array(
				'label'     => esc_html__( 'Excerpt/Content', 'tpebl' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => array(
					'display_excerpt' => 'yes',
				),
			)
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'     => 'excerpt_typography',
				'label'    => esc_html__( 'Typography', 'tpebl' ),
				'global'   => array(
					'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
				),
				'selector' => '{{WRAPPER}} .blog-list .post-inner-loop .entry-content,{{WRAPPER}} .blog-list .post-inner-loop .entry-content p',
			)
		);
		$this->start_controls_tabs( 'tabs_excerpt_style' );
		$this->start_controls_tab(
			'tab_excerpt_normal',
			array(
				'label' => esc_html__( 'Normal', 'tpebl' ),
			)
		);
		$this->add_control(
			'excerpt_color',
			array(
				'label'     => esc_html__( 'Content Color', 'tpebl' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .blog-list .post-inner-loop .entry-content,{{WRAPPER}} .blog-list .post-inner-loop .entry-content p' => 'color: {{VALUE}}',
				),
			)
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'tab_excerpt_hover',
			array(
				'label' => esc_html__( 'Hover', 'tpebl' ),
			)
		);
		$this->add_control(
			'excerpt_hover_color',
			array(
				'label'     => esc_html__( 'Content Color', 'tpebl' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}} .blog-list .post-inner-loop .blog-list-content:hover .entry-content,{{WRAPPER}} .blog-list .post-inner-loop .blog-list-content:hover .entry-content p' => 'color: {{VALUE}}',
				),
			)
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_bg_style',
			array(
				'label' => esc_html__( 'Content Background', 'tpebl' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);
		$this->start_controls_tabs( 'tabs_content_bg_style' );
		$this->start_controls_tab(
			'tab_content_normal',
			array(
				'label' => esc_html__( 'Normal', 'tpebl' ),
			)
		);
		$this->add_group_control(
			Group_Control_Background::get_type(),
			array(
				'name'     => 'contnet_background',
				'types'    => array( 'classic', 'gradient' ),
				'selector' => '{{WRAPPER}} .blog-list.blog-style-1 .post-content-bottom',
			)
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'tab_content_hover',
			array(
				'label' => esc_html__( 'Hover', 'tpebl' ),
			)
		);
		$this->add_group_control(
			Group_Control_Background::get_type(),
			array(
				'name'     => 'content_hover_background',
				'types'    => array( 'classic', 'gradient' ),
				'selector' => '{{WRAPPER}} .blog-list.blog-style-1 .blog-list-content:hover .post-content-bottom',
			)
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();

		$this->start_controls_section(
			'section_post_image_style',
			array(
				'label' => esc_html__( 'Featured Image', 'tpebl' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);
		$this->add_control(
			'hover_image_style',
			array(
				'label'   => esc_html__( 'Image Hover Effect', 'tpebl' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'style-1',
				'options' => l_theplus_get_style_list( 1, 'yes' ),
			)
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_filter_category_styling',
			array(
				'label'     => esc_html__( 'Filter Category', 'tpebl' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => array(
					'filter_category' => 'yes',
				),
			)
		);
		$this->add_control(
			'section_filter_category_styling_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
			)
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_box_loop_styling',
			array(
				'label' => esc_html__( 'Box Loop Background Style', 'tpebl' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);
		$this->add_responsive_control(
			'content_inner_padding',
			array(
				'label'      => esc_html__( 'Padding', 'tpebl' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%', 'em' ),
				'selectors'  => array(
					'{{WRAPPER}} .blog-list .post-inner-loop .grid-item .blog-list-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
				'condition'  => array(
					'style!' => array( 'style-1', 'style-4' ),
				),
			)
		);
		$this->start_controls_tabs( 'tabs_border_style' );
		$this->start_controls_tab(
			'tab_border_normal',
			array(
				'label'     => esc_html__( 'Normal', 'tpebl' ),
				'condition' => array(
					'box_border' => 'yes',
				),
			)
		);
		$this->add_responsive_control(
			'border_radius',
			array(
				'label'      => esc_html__( 'Border Radius', 'tpebl' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%' ),
				'selectors'  => array(
					'{{WRAPPER}} .blog-list .post-inner-loop .grid-item .blog-list-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
				'condition'  => array(
					'box_border' => 'yes',
				),
			)
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'tab_border_hover',
			array(
				'label'     => esc_html__( 'Hover', 'tpebl' ),
				'condition' => array(
					'box_border' => 'yes',
				),
			)
		);
		$this->add_responsive_control(
			'border_hover_radius',
			array(
				'label'      => esc_html__( 'Border Radius', 'tpebl' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => array( 'px', '%' ),
				'selectors'  => array(
					'{{WRAPPER}} .blog-list .post-inner-loop .grid-item .blog-list-content:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				),
				'condition'  => array(
					'box_border' => 'yes',
				),
			)
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->start_controls_tabs( 'tabs_background_style' );
		$this->start_controls_tab(
			'tab_background_normal',
			array(
				'label' => esc_html__( 'Normal', 'tpebl' ),
			)
		);
		$this->add_group_control(
			Group_Control_Background::get_type(),
			array(
				'name'     => 'box_background',
				'types'    => array( 'classic', 'gradient' ),
				'selector' => '{{WRAPPER}} .blog-list .post-inner-loop .grid-item .blog-list-content',
			)
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'tab_background_hover',
			array(
				'label' => esc_html__( 'Hover', 'tpebl' ),
			)
		);
		$this->add_group_control(
			Group_Control_Background::get_type(),
			array(
				'name'     => 'box_active_background',
				'types'    => array( 'classic', 'gradient' ),
				'selector' => '{{WRAPPER}} .blog-list .post-inner-loop .grid-item .blog-list-content:hover',
			)
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();

		$this->start_controls_section(
			'section_carousel_options_styling',
			array(
				'label'     => esc_html__( 'Carousel Options', 'tpebl' ),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => array(
					'layout' => 'carousel',
				),
			)
		);
		$this->add_control(
			'section_carousel_options_styling_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
			)
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_extra_options_styling',
			array(
				'label' => esc_html__( 'Extra Options', 'tpebl' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);
		$this->add_control(
			'messy_column',
			array(
				'label'     => esc_html__( 'Messy Columns', 'tpebl' ),
				'type'      => Controls_Manager::SWITCHER,
				'label_on'  => esc_html__( 'On', 'tpebl' ),
				'label_off' => esc_html__( 'Off', 'tpebl' ),
				'default'   => 'no',
			)
		);
		$this->add_control(
			'messy_column_options',
			array(
				'label'       => esc_html__( 'Unlock more possibilities', 'tpebl' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => '',
				'description' => theplus_pro_ver_notice(),
				'classes'     => 'plus-pro-version',
				'condition'   => array(
					'messy_column' => array( 'yes' ),
				),
			)
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_animation_styling',
			array(
				'label' => esc_html__( 'On Scroll View Animation', 'tpebl' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_control(
			'animation_effects',
			array(
				'label'   => esc_html__( 'Choose Animation Effect', 'tpebl' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'no-animation',
				'options' => l_theplus_get_animation_options(),
			)
		);
		$this->add_control(
			'animation_delay',
			array(
				'type'      => Controls_Manager::SLIDER,
				'label'     => esc_html__( 'Animation Delay', 'tpebl' ),
				'default'   => array(
					'unit' => '',
					'size' => 50,
				),
				'range'     => array(
					'' => array(
						'min'  => 0,
						'max'  => 4000,
						'step' => 15,
					),
				),
				'condition' => array(
					'animation_effects!' => 'no-animation',
				),
			)
		);
		$this->add_control(
			'animated_column_list',
			array(
				'label'     => esc_html__( 'List Load Animation', 'tpebl' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => '',
				'options'   => array(
					''        => esc_html__( 'Content Animation Block', 'tpebl' ),
					'stagger' => esc_html__( 'Stagger Based Animation', 'tpebl' ),
					'columns' => esc_html__( 'Columns Based Animation', 'tpebl' ),
				),
				'condition' => array(
					'animation_effects!' => array( 'no-animation' ),
				),
			)
		);
		$this->add_control(
			'animation_stagger',
			array(
				'type'      => Controls_Manager::SLIDER,
				'label'     => esc_html__( 'Animation Stagger', 'tpebl' ),
				'default'   => array(
					'unit' => '',
					'size' => 150,
				),
				'range'     => array(
					'' => array(
						'min'  => 0,
						'max'  => 6000,
						'step' => 10,
					),
				),
				'condition' => array(
					'animation_effects!'   => array( 'no-animation' ),
					'animated_column_list' => 'stagger',
				),
			)
		);
		$this->add_control(
			'animation_duration_default',
			array(
				'label'     => esc_html__( 'Animation Duration', 'tpebl' ),
				'type'      => Controls_Manager::SWITCHER,
				'default'   => 'no',
				'condition' => array(
					'animation_effects!' => 'no-animation',
				),
			)
		);
		$this->add_control(
			'animate_duration',
			array(
				'type'      => Controls_Manager::SLIDER,
				'label'     => esc_html__( 'Duration Speed', 'tpebl' ),
				'default'   => array(
					'unit' => 'px',
					'size' => 50,
				),
				'range'     => array(
					'px' => array(
						'min'  => 100,
						'max'  => 10000,
						'step' => 100,
					),
				),
				'condition' => array(
					'animation_effects!'         => 'no-animation',
					'animation_duration_default' => 'yes',
				),
			)
		);
		$this->add_control(
			'animation_out_effects',
			array(
				'label'     => esc_html__( 'Out Animation Effect', 'tpebl' ),
				'type'      => Controls_Manager::SELECT,
				'default'   => 'no-animation',
				'options'   => l_theplus_get_out_animation_options(),
				'separator' => 'before',
				'condition' => array(
					'animation_effects!' => 'no-animation',
				),
			)
		);
		$this->add_control(
			'animation_out_delay',
			array(
				'type'      => Controls_Manager::SLIDER,
				'label'     => esc_html__( 'Out Animation Delay', 'tpebl' ),
				'default'   => array(
					'unit' => '',
					'size' => 50,
				),
				'range'     => array(
					'' => array(
						'min'  => 0,
						'max'  => 4000,
						'step' => 15,
					),
				),
				'condition' => array(
					'animation_effects!'     => 'no-animation',
					'animation_out_effects!' => 'no-animation',
				),
			)
		);
		$this->add_control(
			'animation_out_duration_default',
			array(
				'label'     => esc_html__( 'Out Animation Duration', 'tpebl' ),
				'type'      => Controls_Manager::SWITCHER,
				'default'   => 'no',
				'condition' => array(
					'animation_effects!'     => 'no-animation',
					'animation_out_effects!' => 'no-animation',
				),
			)
		);
		$this->add_control(
			'animation_out_duration',
			array(
				'type'      => Controls_Manager::SLIDER,
				'label'     => esc_html__( 'Duration Speed', 'tpebl' ),
				'default'   => array(
					'unit' => 'px',
					'size' => 50,
				),
				'range'     => array(
					'px' => array(
						'min'  => 100,
						'max'  => 10000,
						'step' => 100,
					),
				),
				'condition' => array(
					'animation_effects!'             => 'no-animation',
					'animation_out_effects!'         => 'no-animation',
					'animation_out_duration_default' => 'yes',
				),
			)
		);
		$this->end_controls_section();

		include L_THEPLUS_PATH . 'modules/widgets/theplus-needhelp.php';
	}

	/**
	 * Render Written in PHP and HTML.
	 *
	 * @since 1.0.0
	 * @version 5.4.2
	 */
	protected function render() {

		$settings   = $this->get_settings_for_display();
		$query_args = $this->get_query_args();
		$query      = new \WP_Query( $query_args );

		$style     = ! empty( $settings['style'] ) ? $settings['style'] : 'style-1';
		$layout    = ! empty( $settings['layout'] ) ? $settings['layout'] : 'grid';
		$post_tags = ! empty( $settings['post_tags'] ) ? $settings['post_tags'] : '';

		$post_title_tag = ! empty( $settings['post_title_tag'] ) ? $settings['post_title_tag'] : 'h3';
		$post_category  = ! empty( $settings['post_category'] ) ? $settings['post_category'] : '';

		$display_post_meta   = ! empty( $settings['display_post_meta'] ) ? $settings['display_post_meta'] : '';
		$post_meta_tag_style = ! empty( $settings['post_meta_tag_style'] ) ? $settings['post_meta_tag_style'] : 'style-1';

		$post_excerpt_count = ! empty( $settings['post_excerpt_count'] ) ? $settings['post_excerpt_count'] : 30;
		$animation_stagger  = ! empty( $settings['animation_stagger']['size'] ) ? $settings['animation_stagger']['size'] : 150;
		$ani_out_duration   = ! empty( $settings['animation_out_duration']['size'] ) ? $settings['animation_out_duration']['size'] : 50;

		$display_excerpt = ! empty( $settings['display_excerpt'] ) ? $settings['display_excerpt'] : '';
		$out_duration    = ! empty( $settings['animation_out_duration_default'] ) ? $settings['animation_out_duration_default'] : '';
		$metro_col       = ! empty( $settings['metro_column'] ) ? $settings['metro_column'] : '3';

		$ani_effect = ! empty( $settings['animation_effects'] ) ? $settings['animation_effects'] : 'no-animation';
		$ani_delay  = ! empty( $settings['animation_delay']['size'] ) ? $settings['animation_delay']['size'] : 50;
		$out_delay  = ! empty( $settings['animation_out_delay']['size'] ) ? $settings['animation_out_delay']['size'] : 50;

		$ani_list     = ! empty( $settings['animated_column_list'] ) ? $settings['animated_column_list'] : '';
		$ani_duration = ! empty( $settings['animation_duration_default'] ) ? $settings['animation_duration_default'] : '';
		$ani_speed    = ! empty( $settings['animate_duration']['size'] ) ? $settings['animate_duration']['size'] : 50;
		$out_effect   = ! empty( $settings['animation_out_effects'] ) ? $settings['animation_out_effects'] : 'no-animation';

		$animated_columns = '';

		if ( 'no-animation' === $ani_effect ) {
			$animated_class = '';
			$animation_attr = '';
		} else {
			$animate_offset  = l_theplus_scroll_animation();
			$animated_class  = 'animate-general';
			$animation_attr  = ' data-animate-type="' . esc_attr( $ani_effect ) . '" data-animate-delay="' . esc_attr( $ani_delay ) . '"';
			$animation_attr .= ' data-animate-offset="' . esc_attr( $animate_offset ) . '"';

			if ( 'stagger' === $ani_list ) {
				$animated_columns = 'animated-columns';
				$animation_attr  .= ' data-animate-columns="stagger"';
				$animation_attr  .= ' data-animate-stagger="' . esc_attr( $animation_stagger ) . '"';
			} elseif ( 'columns' === $ani_list ) {
				$animated_columns = 'animated-columns';
				$animation_attr  .= ' data-animate-columns="columns"';
			}

			if ( 'yes' === $ani_duration ) {
				$animate_duration = $ani_speed;
				$animation_attr  .= ' data-animate-duration="' . esc_attr( $animate_duration ) . '"';
			}

			if ( 'no-animation' !== $out_effect ) {
				$animation_attr .= ' data-animate-out-type="' . esc_attr( $out_effect ) . '" data-animate-out-delay="' . esc_attr( $out_delay ) . '"';

				if ( 'yes' === $out_duration ) {
					$animation_attr .= ' data-animate-out-duration="' . esc_attr( $ani_out_duration ) . '"';
				}
			}
		}

		$desktop_class = '';
		$tablet_class  = '';
		$mobile_class  = '';

		if ( 'carousel' !== $layout && 'metro' !== $layout ) {
			$desktop_class = 'tp-col-lg-' . esc_attr( $settings['desktop_column'] );
			$tablet_class  = 'tp-col-md-' . esc_attr( $settings['tablet_column'] );
			$mobile_class  = 'tp-col-sm-' . esc_attr( $settings['mobile_column'] );
			$mobile_class .= ' tp-col-' . esc_attr( $settings['mobile_column'] );
		}

		$layout_attr = '';
		$data_class  = '';

		if ( ! empty( $layout ) ) {
			$data_class .= l_theplus_get_layout_list_class( $layout );
			$layout_attr = l_theplus_get_layout_list_attr( $layout );
		} else {
			$data_class .= ' list-isotope';
		}

		$metro_columns = $metro_col;
		$metro_style   = ! empty( $settings[ 'metro_style_' . $metro_columns ] ) ? $settings[ 'metro_style_' . $metro_columns ] : 'style-1';

		if ( 'metro' === $layout ) {

			$layout_attr .= ' data-metro-columns="' . esc_attr( $metro_columns ) . '" ';
			if ( ! empty( $metro_style ) ) {

				$layout_attr .= ' data-metro-style="' . esc_attr( $metro_style ) . '" ';
			}
		}

		$data_class .= ' blog-' . esc_attr( $style );
		$data_class .= ' hover-image-' . esc_attr( $settings['hover_image_style'] );

		$output    = '';
		$data_attr = '';

		$ji  = 1;
		$ij  = '';
		$uid = uniqid( 'post' );

		$data_attr .= ' data-id="' . esc_attr( $uid ) . '"';
		$data_attr .= ' data-style="' . esc_attr( $style ) . '"';

		$tablet_ij = '';

		if ( ! $query->have_posts() ) {
			$output .= '<h3 class="theplus-posts-not-found">' . esc_html__( 'Posts not found', 'tpebl' ) . '</h3>';
		} elseif ( 'style-1' === $style ) {

			$output .= '<div id="pt-plus-blog-post-list" class="blog-list ' . esc_attr( $uid ) . ' ' . $data_class . ' ' . esc_attr( $animated_class ) . '" ' . $layout_attr . ' ' . $data_attr . ' ' . $animation_attr . ' data-enable-isotope="1">';

			$output .= '<div id="' . esc_attr( $uid ) . '" class="tp-row post-inner-loop ' . esc_attr( $uid ) . ' ">';

			while ( $query->have_posts() ) {

				$query->the_post();
				$post = $query->post;

				if ( 'metro' === $layout ) {

					if ( ! empty( $metro_style ) ) {
						$ij = l_theplus_metro_style_layout( $ji, $metro_col, $metro_style );
					}
				}

				$output .= '<div class="grid-item metro-item' . esc_attr( $ij ) . ' ' . $desktop_class . ' ' . $tablet_class . ' ' . $mobile_class . ' ' . esc_attr( $animated_columns ) . '">';

				if ( ! empty( $style ) ) {
					ob_start();
					include L_THEPLUS_PATH . 'includes/blog/blog-style-1.php';
					$output .= ob_get_contents();
					ob_end_clean();
				}

				$output .= '</div>';

				++$ji;
			}

			$output .= '</div>';
			$output .= '</div>';
		} else {
			$output .= '<h3 class="theplus-posts-not-found">' . esc_html__( 'This Style Premium Version', 'tpebl' ) . '</h3>';
		}

		echo $output;

		wp_reset_postdata();
	}

	/**
	 * Fetch post data Written in PHP and HTML.
	 *
	 * @since 1.0.0
	 * @version 5.4.2
	 */
	protected function get_query_args() {
		$settings  = $this->get_settings_for_display();
		$post_tags = ! empty( $settings['post_tags'] ) ? $settings['post_tags'] : '';

		$post_category = ! empty( $settings['post_category'] ) ? $settings['post_category'] : '';

		$query_args = array(
			'post_type'           => 'post',
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true,
			'posts_per_page'      => intval( $settings['display_posts'] ),
			'orderby'             => $settings['post_order_by'],
			'order'               => $settings['post_order'],
		);

		$offset = $settings['post_offset'];
		$offset = ! empty( $offset ) ? absint( $offset ) : 0;

		if ( $offset ) {
			$query_args['offset'] = $offset;
		}

		if ( ! empty( $post_category ) ) {
			$query_args['category__in'] = $post_category;
		}

		if ( ! empty( $post_tags ) ) {
			$query_args['tag__in'] = $post_tags;
		}

		global $paged;

		$paged_custom = 1;
		$paged_custom = $paged;
		if ( get_query_var( 'paged' ) ) {
			$paged_custom = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged_custom = get_query_var( 'page' );
		} else {
			$paged_custom = 1;
		}

		$query_args['paged'] = $paged_custom;

		return $query_args;
	}
}
