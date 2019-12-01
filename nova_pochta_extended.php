<?php
	/**
	 * @package     ${NAMESPACE}
	 * @subpackage
	 *
	 * @copyright   A copyright
	 * @license     A "Slug" license name e.g. GPL2
	 */
	
	class plgVmExtendedNova_pochta_extended extends vmExtendedPlugin {
		public function __construct (&$subject, $config=array()) {
			parent::__construct($subject, $config);
		}  // end function
		
		/**
		 * Точка входа для BE Admin
		 * $controller - index.php?option=com_virtuemart&view={$controller}
		 * @param   string  $controller
		 *
		 * @return bool|True
		 *
		 * @throws Exception
		 * @since version
		 */
		public function onVmAdminController ($controller)
		{
			$controllersArray = [ 'nova_pochta_extended' ];
			if( in_array( $controller , $controllersArray )   )
			{
				
				
				
				$_controller = $controller;
				require_once( $this->_path . DS . 'models' . DS . $controller . '.php' );
				require_once( $this->_path . DS . 'controllers' . DS . $controller . '.php' );
				vmJsApi::jQuery( 0 );
				$_class = 'VirtueMartController' . ucfirst( $controller );
				
				if( !class_exists( $_class ) )
				{
					vmError( 'Serious Error could not find controller ' . $_class , 'Serious error, could not find class' );
					$app = JFactory::getApplication();
					$app->enqueueMessage( 'Fatal Error in maincontroller admin.virtuemart.php: No controller given ' . $_controller );
					$app->redirect( 'index.php?option=com_virtuemart' );
				}
				
				$CLASS = new $_class();
				// Perform the Request task
				$CLASS->execute( vRequest::getCmd( 'task' , $_controller ) );
				vmTime( $_class . ' Finished task ' . $_controller , 'vmStart' );
				vmRam( 'End' );
				vmRamPeak( 'Peak' );
				$CLASS->redirect();
				return true;
			}
			return null ;
		}
		
		
	}#END CLASS
	