<?php
/**
 * Content of Mermaid Diagrams
 */

class FDMermaidContent extends TextContent {

	public function __construct( $text ,$modelId = CONTENT_MODEL_FD_MERMAID ) {
		parent::__construct( $text, $modelId );
	}

	public function getHtml() {
		global $wgOut, $wgResourceLoaderDebug;
		$wgResourceLoaderDebug = true;
		$wgOut->addModules( 'ext.flexdiagrams.mermaid' );
		$text = $this->getText();
		$text = Html::rawElement( 'div', [
			'class' => 'mermaid'
		], $text);
		$text .= Html::element( 'pre', [], $this->getText() );
		return $text;
    }
}
