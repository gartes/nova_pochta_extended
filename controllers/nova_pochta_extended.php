<?php
	if( !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
	
	/**
	 * @package     ${NAMESPACE}
	 * @subpackage
	 *
	 * @copyright   A copyright
	 * @license     A "Slug" license name e.g. GPL2
	 */
	
	defined ('VMPATH_ADMIN') or define ('VMPATH_ADMIN', JPATH_VM_ADMINISTRATOR);
	class VirtuemartControllerNova_pochta_extended extends VmController {
		function __construct( ){
			
			parent::__construct();
			
		}
	}