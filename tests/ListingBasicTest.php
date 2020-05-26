<?php 

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase {

	/** 	@test 
	 * 		Test for empty data
	 */
	public function testEmptyData()
    {
        $this->expectException(Exception::class);
    	$data = [];
    	$listing = new ListingBasic($data);
    }

	/** 	@test 
	 * 		Test for invalid ID
	 */
	public function testInvalidId()
    {
        $this->expectException(Exception::class);
    	$data = [
    		"id" 	=> null, 
    		"title" => "Testing"
    	];
    	$listing = new ListingBasic($data);
    	$listing->setValues(
    		$data = [
    			"id" 	=> null,
    			"title" => "Testing"
    		]
    	);
    }

    /** 	@test 
	 * 		Test for invalid Title
	 */
	public function testInvalidTitle()
    {
        $this->expectException(Exception::class);
    	$data = [
    		"id" 	=> 1, 
    		"title" => null
    	];
    	$listing = new ListingBasic($data);
    	$listing->setValues(
    		$data = [
    			"id"	 	=> 1, 
    			"title" 	=> null
    		]
    	);
    }

    /** 	@test 
	 * 		Test for object data 
	 */
	public function testObjectData()
    {
    	$data = [
    		"id" 	=> 1, 
    		"title" => "Testing"
    	];
    	$listing = new ListingBasic($data);
    	$this->assertIsObject($listing);
    }

    /** 	@test 
	 * 		Test if getStatus return 'basic'
	 *		getStatus() i from ListingBasic line 152
	 */
    public function testStatus()
    {
    	$data = [
    		"id" 		=> 1, 
    		"title" 	=> "Testing",
    		"status" 	=> "basic"
    	];
    	$listing = new ListingBasic($data);
    	$this->assertEquals(
    		"basic",
    		$listing->getStatus()
    	);
    }

    /** 	@test
     * 		get method for each property is returning the expected results: id, title, website, email, twitter
     *		Methods is from ListingBasic.php
     */
    public function testMethods()
    {
    	$data = [
    		"id"		=> 1,
    		"title" 	=> "Testing",
    		"website" 	=> "https://teamtreehouse.com/",
    		"email"		=> "test@teamtreehouse.com",
    		"twitter"	=> "TeamtreehouseTest"
    	];
    	$listing = new ListingBasic($data);
    	$this->assertEquals(
    		$data['id'],
    		$listing->getId()
    	);
    	$this->assertEquals(
    		$data['title'],
    		$listing->getTitle()
    	);
    	$this->assertEquals(
    		$data['website'],
    		$listing->getWebsite()
    	);
    	$this->assertEquals(
    		$data['email'],
    		$listing->getEmail()
    	);
    	$this->assertEquals(
    		$data['twitter'],
    		$listing->getTwitter()
    	);
    }

    /** 	@test
     * 		ensure that the toArray method returns an array where each item equals the expected results: id, title, website, email, twitter
     */
    public function testToArray()
    {
     	$data = [
    		"id"		=> 1,
    		"title" 	=> "Testing",
    		"website" 	=> "https://teamtreehouse.com/",
    		"email"		=> "test@teamtreehouse.com",
    		"twitter"	=> "TeamtreehouseTest"
    	];
    	$listing = new ListingBasic($data);
    	$this->assertEquals([
    	 	"id"		=> 1,
    		"title" 	=> "Testing",
    		"status" 	=> "basic",
    		"website" 	=> "https://teamtreehouse.com/",
    		"email"		=> "test@teamtreehouse.com",
    		"twitter"	=> "TeamtreehouseTest"
    	], $listing->toArray());
    }
}