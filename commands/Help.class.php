<?php
namespace commands;

Class Help
{
	/**
	 * Shows help
	 * @param string $msg Optional message to pass to user
	 */
	public static function show($msg = '')
	{
		if(strlen($msg) > 0)
			echo $msg."\n\n";

		$cmds = array(
		
		'--checkout-product' => array('args' => array('productname'), 'text' => 'Checkouts a product form the repository'),
		'--release-product' => array('args' => array('productname', 'destination'), 'text' => 'Release a product trunk to destination'),
		'--create-branch' => array('args' => array('productname', 'branchname'), 'text' => 'Creates a branch from product'),
		'--checkout-product' => array('args' => array('productname', 'branchname'), 'text' => 'Checksout a products branch'),
		'--sync-branch' => array('args' => array('productname', 'branchname'), 'text' => 'Synces a products branch with products trunk'),
		'--merge-branch' => array('args' => array('productname', 'branchname'), 'text' => 'Merges a branch back into products trunk')

		);

		echo "\nSCM For svn+rsync, written in PHP by Rasmus Styrk\n";		
		echo "\nCommnads:\n\n";

		foreach($cmds as $cmd => $values)
		{
			$args = '';
			
			if(array_key_exists('args', $values))
			{
				foreach($values['args'] as $arg)
					$args .= sprintf("<%s> ", $arg);
			}

			printf("\t%s\n\t\t%s\n\t\t%s\n\n", $cmd, $args, $values['text']);
		}

		echo "\n\n";

		exit(0);
	}
}



