<?php
/**
 * Content of Gantt Diagrams
 */

class FDGanttContent extends TextContent {

	public function __construct( $text ,$modelId = CONTENT_MODEL_FD_GANTT ) {
		parent::__construct( $text, $modelId );
	}

	public function getHtml() {
		global $wgOut;
		$wgOut->addModules( 'ext.flexdiagrams.gantt' );
		$text = Html::element( 'div', [
			'id' => 'canvas',
		], ' ' );
		$text .= Html::element( 'pre', [], $this->getText() );
		return $text;
    }
}
