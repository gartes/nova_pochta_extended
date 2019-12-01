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
				$app = \JFactory::getApplication() ;
				
				$virtuemart_shipmentmethod_id = $app->input->get('virtuemart_shipmentmethod_id' , null , 'INT');
				
				if (!class_exists( 'plgVmShipmentNova_pochta' )) require( JPATH_PLUGINS .'/vmshipment/nova_pochta/nova_pochta.php');
				
				
				
				
				JPluginHelper::importPlugin('vmshipment' , 'nova_pochta' );
				$dispatcher = JDispatcher::getInstance();
				$results = $dispatcher->trigger('onAjaxNova_pochta', array());
				
				
				
				
				
				/*$plugin = \JPluginHelper::getPlugin('vmshipment', 'nova_pochta');
						try
								{
									// Code that may throw an Exception or Error.
									// $nova_pochta = new plgVmShipmentNova_pochta( '' , $plugin );
								}
								catch (Exception $e)
								{
								   // Executed only in PHP 5, will not be reached in PHP 7
								   echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
								}
								catch (Throwable $e)
								{
									// Executed only in PHP 7, will not match in PHP 5
									echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
									echo'<pre>';print_r( $e );echo'</pre>'.__FILE__.' '.__LINE__;
								}
				*/
				
				
				
				
				echo'<pre>';print_r( $nova_pochta );echo'</pre>'.__FILE__.' '.__LINE__;
				die(__FILE__ .' '. __LINE__ );
				$Method = $this->getPluginMethod( 2 ) ;
				echo'<pre>';print_r( $Method );echo'</pre>'.__FILE__.' '.__LINE__;
				die(__FILE__ .' '. __LINE__ );
				
				/*
				$_path = JPATH_PLUGINS . '/vmextended/nova_pochta_extended' ;
				
				require_once( $_path . DS . 'models' . DS . $controller . '.php' );
				require_once( $_path . DS .'controllers'. DS . $controller . '.php' );
				
				
				
				vmJsApi::jQuery( 0 );
				$_class = 'VirtueMartController' . ucfirst( $controller );
				
				if( !class_exists( $_class ) )
				{
					vmError( 'Serious Error could not find controller ' . $_class , 'Serious error, could not find class' );
					$app = JFactory::getApplication();
					$app->enqueueMessage( 'Fatal Error in maincontroller admin.virtuemart.php: No controller given ' . $_controller );
					$app->redirect( 'index.php?option=com_virtuemart' );
				}
				
						try
								{
									// Code that may throw an Exception or Error.
									$CLASS = new $_class();
									// Perform the Request task
									$CLASS->execute( vRequest::getCmd( 'task' , $_controller ) );
									
								}
								catch (Exception $e)
								{
								   // Executed only in PHP 5, will not be reached in PHP 7
								   echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
								}
								catch (Throwable $e)
								{
									// Executed only in PHP 7, will not match in PHP 5
									echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
									echo'<pre>';print_r( $e );echo'</pre>'.__FILE__.' '.__LINE__;
								}
				
				
				
				vmTime( $_class . ' Finished task ' . $_controller , 'vmStart' );
				vmRam( 'End' );
				vmRamPeak( 'Peak' );
				$CLASS->redirect();
				return true;*/
			}
			return null ;
		}
		
		
	}#END CLASS
	