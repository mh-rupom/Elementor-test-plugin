<?php
if (! defined('ABSPATH')){
	exit; 
}

class Elementor_test_Widget extends \Elementor\Widget_Base {

	public function get_name(){
		return 'Testwidget';
	}
	public function get_title(){
		return esc_html__( 'Test widget', 'elementor_test' );
	}
	public function get_icon(){
		return 'fa fa-image';
	}
	public function get_categories(){
		return [ 'general','test-category'];
	}
	// public function get_keywords() {
	// 	return [ 'test', 'widget-test' ];
	// }

	// public function get_custom_help_url() {
	// 	return 'https://developers.elementor.com/docs/widgets/';
	// }
	protected function register_controls(){

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'elementor_test' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'heading',
			[
				'label' => esc_html__( 'Heading', 'elementor_test' ),
				'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__( 'Hello world', 'elementor_test' ),

			]
		);
		$this->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'elementor_test' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__('Here description', 'elementor_test' ),

			]
		);
		$this->end_controls_section();
		// alignment 
		$this->start_controls_section(
			'alignment_section',
			[
				'label' => esc_html__( 'Alignment', 'elementor_test' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'heading_alignment',
			[
				'label' => esc_html__( 'Heading Alignment', 'elementor_test' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'  => esc_html__( 'left', 'elementor_test' ),
					'right' => esc_html__( 'right', 'elementor_test' ),
					'center' => esc_html__( 'center', 'elementor_test' ),
				],
				'selectors' => [
					'{{WRAPPER}} .heading_align' => 'text-align: {{VALUE}};',
				],
			]
		);
		// description alignment
		$this->add_control(
			'description_alignment',
			[
				'label' => esc_html__( 'Description Alignment', 'elementor_test' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left'  => esc_html__( 'left', 'elementor_test' ),
					'right' => esc_html__( 'right', 'elementor_test' ),
					'center' => esc_html__( 'center', 'elementor_test' ),
				],
				'selectors' => [
					'{{WRAPPER}} .description_align' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
		// color
		$this->start_controls_section(
			'color',
			[
				'label' => esc_html__( 'Color', 'elementor_test' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'heading_color',
			[
				'label' => esc_html__( 'Heading Color', 'elementor_test' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'black',
				'selectors' => [
					'{{WRAPPER}} .heading_color' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'description_color',
			[
				'label' => esc_html__( 'Description color', 'elementor_test' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => 'black',
				'selectors' => [
					'{{WRAPPER}} .description_color' => 'color: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();
		// image control
		$this->start_controls_section(
			'image_section',
			[
				'label' => esc_html__( 'Image', 'elementor_test' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'firstimage',
			[
				'label' => esc_html__( 'Image', 'elementor_test' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'firstimgsize',
				// 'exclude' => [ 'custom' ],
				// 'include' => [],
				'default' => 'large',
			]
		);
		$this->end_controls_section();
		// select 2
		$this->start_controls_section(
			'select_city',
			[
				'label' => esc_html__( 'City', 'elementor_test' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'city',
			[
				'label' => esc_html__( 'Show City', 'elementor_test' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => [
					'city1'  => esc_html__( 'city1', 'elementor_test' ),
					'city2'  => esc_html__( 'city2', 'elementor_test' ),
					'city3'  => esc_html__( 'city3', 'elementor_test' ),
					'city4'  => esc_html__( 'city4', 'elementor_test' ),
				],
				'default' => [ 'city1'],
			]
		);
		$this->end_controls_section();
		// choose 
		$this->start_controls_section(
			'content_css',
			[
				'label' => esc_html__( 'Choose', 'elementor_test' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'text_align',
			[
				'label' => esc_html__( 'Text Align', 'elementor_test' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'elementor_test' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'elementor_test' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'elementor_test' ),
						'icon' => 'eicon-text-align-right',
					],

				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->end_controls_section();
		// image dimention
		// $this->start_controls_section(
		// 	'dimension',
		// 	[
		// 		'label' => esc_html__( 'Dimension', 'elementor_test' ),
		// 		'tab' => \Elementor\Controls_Manager::TAB_STYLE,
		// 	]
		// );
		// $this->add_control(
		// 	'custom_dimension',
		// 	[
		// 		'label' => esc_html__( 'Dimension', 'elementor_test' ),
		// 		'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		// 		'description' => esc_html__( 'Crop the original image size', 'elementor_test' ),
		// 		'default' => [
		// 			'width' => '200',
		// 			'height' => '100',
		// 		],
		// 	]
		// );

		// $this->end_controls_section();
		$this->start_controls_section(
			'content_margin_padding',
			[
				'label' => esc_html__( 'Margin Padding', 'elementor_test' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'margin',
			[
				'label' => esc_html__( 'Margin', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'default' => [
					'top' => 2,
					'right' => 0,
					'bottom' => 2,
					'left' => 0,
					'unit' => 'px',
					'isLinked' => false,
				],
				'selectors' => [
					'{{WRAPPER}} .text_margin' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();


	}
	protected function render(){
		$settings = $this->get_settings_for_display();
		echo "<h1 class='heading_align heading_color'>" . esc_html( $settings['heading'])."</h1>";
		echo "<p class='description_align description_color'>" . esc_html( $settings['description'])."</p>" ;
		echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'firstimgsize', 'firstimage' );
		if ( $settings['city'] ) {
			echo '<ul>';
			foreach ( $settings['city'] as $item ) {
				echo '<li>' . $item . '</li>';
			}
			echo '</ul>';
		}
		echo esc_html( $settings['text_align']);
		echo "<h2 class='text_margin'>" . "Text margin". "</h2>";
	}
	protected function content_template(){
		?>
		<#
			var image = {
				id: settings.firstimage.id,
				url: settings.firstimage.url,
				size: settings.firstimgsize_size,
				dimension: settings.firstimgsize_custom_dimension
			} 
			var imageUrl = elementor.imagesManager.getImageUrl(image);
			console.log(imageUrl);
		#>
		<h1 class='heading_align heading_color'>{{{settings.heading}}}</h1>
		<p class='description_align description_color'>{{{settings.description}}}</p> 
		<img src='{{{imageUrl}}}'>
		<# if ( settings.city.length ) { #>
			<ul>
			<# _.each( settings.city, function( city ) { #>
				<li>{{{ city }}}</li>
			<# } ) #>
			</ul>
		<# } #>
		<div style="color:red ; text-align:center">
			{{{settings.text_align}}}
		</div>
		<h2 class='text_margin'>Text margin</h2>
		<?php
		
	}
}