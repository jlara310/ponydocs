<?php
define( 'PONYDOCS_DOCUMENTATION_NAMESPACE_NAME', 'Documentation' );
define( 'PONYDOCS_DOCUMENTATION_NAMESPACE_ID', 100 );

define( 'PONYDOCS_CACHE_ENABLED', TRUE );
define( 'PONYDOCS_CACHE_DEBUG', FALSE );
define( 'PONYDOCS_REDIRECT_DEBUG', FALSE );
define( 'PONYDOCS_SESSION_DEBUG', FALSE );
define( 'PONYDOCS_AUTOCREATE_DEBUG', FALSE );
define( 'PONYDOCS_CASE_INSENSITIVE_DEBUG', FALSE );
define( 'PONYDOCS_DOCLINKS_DEBUG', FALSE );

define( 'PONYDOCS_DOCUMENTATION_PREFIX', PONYDOCS_DOCUMENTATION_NAMESPACE_NAME . ':' );

define( 'PONYDOCS_DOCUMENTATION_PRODUCTS_TITLE', PONYDOCS_DOCUMENTATION_PREFIX . 'Products' );
define( 'PONYDOCS_PRODUCT_LEGALCHARS', 'A-Za-z0-9_,.-' );
define( 'PONYDOCS_PRODUCT_REGEX', '/([' . PONYDOCS_PRODUCT_LEGALCHARS . ']+)/' );
define( 'PONYDOCS_PRODUCT_STATIC_PREFIX', '.' );

define( 'PONYDOCS_PRODUCTVERSION_SUFFIX', ':Versions' );
define( 'PONYDOCS_PRODUCTVERSION_LEGALCHARS', 'A-Za-z0-9_,.-' );
define( 'PONYDOCS_PRODUCTVERSION_REGEX', '/([' . PONYDOCS_PRODUCTVERSION_LEGALCHARS . ']+)/' );
define( 'PONYDOCS_PRODUCTVERSION_TITLE_REGEX',
	'/^' . PONYDOCS_DOCUMENTATION_PREFIX . '([' . PONYDOCS_PRODUCT_LEGALCHARS . ']+)' . PONYDOCS_PRODUCTVERSION_SUFFIX . '/' );

define( 'PONYDOCS_PRODUCTMANUAL_SUFFIX', ':Manuals' );
define( 'PONYDOCS_PRODUCTMANUAL_LEGALCHARS', 'A-Za-z0-9_,.-' );
define( 'PONYDOCS_PRODUCTMANUAL_REGEX', '/([' . PONYDOCS_PRODUCTMANUAL_LEGALCHARS . ']+)/' );
define( 'PONYDOCS_PRODUCTMANUAL_TITLE_REGEX',
	'/^' . PONYDOCS_DOCUMENTATION_PREFIX . '([' . PONYDOCS_PRODUCT_LEGALCHARS . ']+)' . PONYDOCS_PRODUCTMANUAL_SUFFIX . '/' );

// Category cache expiration in seconds
define( 'CATEGORY_CACHE_TTL', 300 );

// Directories
define( 'PONYDOCS_TEMP_DIR', '/tmp/' );
define( 'PONYDOCS_STATIC_DIR', '/var/www/useruploads/docs/staticDocs' );
define( 'PONYDOCS_STATIC_PATH', 'DocumentationStatic' );
define( 'PONYDOCS_STATIC_URI', '/' . PONYDOCS_STATIC_PATH . '/' );

// Specify URI to CSS file to dynamically override static documentation iframe CSS
define( 'PONYDOCS_STATIC_CSS', '' );

// Capitalization settings
define( 'PONYDOCS_CASE_SENSITIVE_TITLES', FALSE );

// Auto-Create Topics when referenced during editing
define( 'PONYDOCS_AUTOCREATE_ON_ARTICLE_EDIT', FALSE );

// Configuration variables to map ponydoc groups to mediawiki groups
if ( !isset( $wgPonyDocsEmployeeGroup ) ) {
	$wgPonyDocsEmployeeGroup = 'employees';
}

if ( !isset( $wgPonyDocsBaseAuthorGroup ) ) {
	$wgPonyDocsBaseAuthorGroup = 'docteam';
}

if ( !isset( $wgPonyDocsBasePreviewGroup ) ) {
	$wgPonyDocsBasePreviewGroup = 'preview';
}