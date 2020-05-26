<?php 

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase {

	/** 	@test 
	 * 		Test if getStatus return 'premium'
	 */
    public function testStatus()
    {
    	$data = [
    		"id" 		=> 1, 
    		"title" 	=> "Testing",
    		"status" 	=> "premium"
    	];
    	$listing = new ListingPremium($data);
    	$this->assertEquals(
    		"premium",
    		$listing->getStatus()
    	);
    }

    /** 	@test 
	 * 		Test if getStatus return 'premium'
	 */
    public function testDescription()
    {
    	$data = [
    		"id" 		=> 1, 
    		"title" 	=> "Testing",
    		"description" => "Lorem ipsum"
    	];
    	$listing = new ListingPremium($data);
    	$this->assertEquals(
    		"Lorem ipsum",
    		$listing->getDescription()
    	);
    }

}